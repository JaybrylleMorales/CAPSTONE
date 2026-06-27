<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function studentIndex()
    {
        $transactions = Transaction::with('course')
            ->where('student_id', auth()->id())
            ->latest()
            ->get();

       return view('student.transactions.index', compact('transactions'));
    }

    public function store(Course $course)
    {
        if ($course->price <= 0) {
            Enrollment::firstOrCreate(
                [
                    'student_id' => auth()->id(),
                    'course_id' => $course->id,
                ],
                [
                    'status' => 'active',
                    'enrolled_at' => now(),
                    'progress_percentage' => 0,
                ]
            );

            return redirect()
                ->route('student.my-courses')
                ->with('success', 'You are now enrolled in this free course.');
        }

        $existingEnrollment = Enrollment::where('student_id', auth()->id())
            ->where('course_id', $course->id)
            ->first();

        if ($existingEnrollment) {
            return redirect()
                ->route('student.my-courses')
                ->with('success', 'You are already enrolled in this course.');
        }

        $existingPendingTransaction = Transaction::where('student_id', auth()->id())
            ->where('course_id', $course->id)
            ->where('status', 'pending')
            ->first();

        if ($existingPendingTransaction) {
            return redirect()
                ->route('student.transactions.show', $existingPendingTransaction)
                ->with('success', 'You already have a pending transaction for this course.');
        }

        $transaction = Transaction::create([
            'student_id' => auth()->id(),
            'course_id' => $course->id,
            'transaction_no' => $this->generateTransactionNumber(),
            'amount' => $course->price,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('student.transactions.show', $transaction)
            ->with('success', 'Transaction created. Please upload your proof of payment.');
    }

    public function studentShow(Transaction $transaction)
    {
        if ($transaction->student_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $transaction->load('course');

       return view('student.transactions.upload-proof', compact('transaction'));
    }

    public function uploadProof(Request $request, Transaction $transaction)
    {
        if ($transaction->student_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        if ($transaction->status !== 'pending') {
            return back()->with('error', 'Payment proof can only be uploaded for pending transactions.');
        }

        $request->validate([
            'payment_method' => 'required|string|max:100',
            'payment_reference' => 'required|string|max:255',
            'payment_proof' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'remarks' => 'nullable|string|max:1000',
        ]);

        $proofPath = $request->file('payment_proof')
            ->store('payment-proofs', 'public');

        $transaction->update([
            'payment_method' => $request->payment_method,
            'payment_reference' => $request->payment_reference,
            'payment_proof' => $proofPath,
            'remarks' => $request->remarks,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('student.transactions.show', $transaction)
            ->with('success', 'Payment proof uploaded. Please wait for admin verification.');
    }

    public function adminIndex()
    {
        $transactions = Transaction::with(['student', 'course'])
            ->latest()
            ->get();

        return view('admin.transactions.index', compact('transactions'));
    }

    public function approve(Transaction $transaction)
    {
        $transaction->update([
            'status' => 'approved',
            'approved_by' => auth()->id(),
            'approved_at' => now(),
        ]);

        Enrollment::firstOrCreate(
            [
                'student_id' => $transaction->student_id,
                'course_id' => $transaction->course_id,
            ],
            [
                'status' => 'active',
                'enrolled_at' => now(),
                'progress_percentage' => 0,
            ]
        );

        return back()->with('success', 'Transaction approved and student enrolled successfully.');
    }

    public function reject(Request $request, Transaction $transaction)
    {
        $request->validate([
            'remarks' => 'nullable|string|max:1000',
        ]);

        $transaction->update([
            'status' => 'rejected',
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'remarks' => $request->remarks ?? 'Payment rejected by administrator.',
        ]);

        return back()->with('success', 'Transaction rejected successfully.');
    }

    private function generateTransactionNumber(): string
    {
        $date = now()->format('Ymd');

        $countToday = Transaction::whereDate('created_at', now()->toDateString())
            ->count() + 1;

        return 'TRX-' . $date . '-' . str_pad($countToday, 5, '0', STR_PAD_LEFT);
    }
}