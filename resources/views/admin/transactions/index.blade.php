<x-layouts::app :title="__('Manage Transactions')">
    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-black">Manage Transactions</h1>
            <p class="mt-1 text-sm text-zinc-900">
                Review student payments, verify proof, and approve enrollments.
            </p>
        </div>

        @php
            $totalTransactions = $transactions->count();
            $pendingTransactions = $transactions->where('status', 'pending')->count();
            $approvedTransactions = $transactions->where('status', 'approved')->count();
            $rejectedTransactions = $transactions->where('status', 'rejected')->count();
            $approvedRevenue = $transactions->where('status', 'approved')->sum('amount');
        @endphp

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-600/70 p-5">
                <p class="text-sm text-black">Total Transactions</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $totalTransactions }}</h2>
            </div>

            <div class="rounded-2xl border border-yellow-800/40 bg-yellow-950/30 p-5">
                <p class="text-sm text-black">Pending Review</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $pendingTransactions }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-black">Approved</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $approvedTransactions }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-black">Approved Revenue</p>
                <h2 class="mt-2 text-3xl font-bold text-black">
                    ₱{{ number_format($approvedRevenue, 2) }}
                </h2>
            </div>
        </div>

        @if(session('success'))
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        <div class="rounded-2xl border border-zinc-800 bg-zinc-600/60 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-3 border-b border-zinc-800 px-6 py-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-black">Payment Verification Queue</h2>
                    <p class="text-sm text-zinc-black">
                        Student transaction records and payment proof status.
                    </p>
                </div>

                <div class="rounded-xl border border-zinc-800 bg-zinc-950 px-4 py-2 text-sm text-white">
                    {{ $pendingTransactions }} pending approval
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-white">
                        <tr>
                            <th class="px-6 py-4">Transaction</th>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Payment</th>
                            <th class="px-6 py-4">Reference</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Proof</th>
                            <th class="px-6 py-4 text-right">Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-900">
                        @forelse($transactions as $transaction)
                            @php
                                $status = strtolower($transaction->status);

                                $statusClass = match ($status) {
                                    'approved' => 'bg-emerald-500/15 text-emerald-400',
                                    'rejected' => 'bg-red-500/15 text-red-400',
                                    default => 'bg-yellow-500/15 text-yellow-400',
                                };
                            @endphp

                            <tr class="hover:bg-white/3">
                                <td class="px-6 py-4">
                                    <p class="font-semibold text-white">
                                        {{ $transaction->transaction_no }}
                                    </p>
                                    <p class="mt-1 text-xs text-zinc-500">
                                        {{ $transaction->created_at?->format('M d, Y h:i A') }}
                                    </p>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-purple-600/20 text-sm font-bold text-purple-300">
                                            {{ strtoupper(substr($transaction->student->name ?? 'S', 0, 1)) }}
                                        </div>

                                        <div>
                                            <p class="font-semibold text-white">
                                                {{ $transaction->student->name ?? 'Student unavailable' }}
                                            </p>
                                            <p class="text-xs text-zinc-500">Learner</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    {{ $transaction->course->title ?? 'Course unavailable' }}
                                </td>

                                <td class="px-6 py-4">
                                    <p class="font-semibold text-white">
                                        ₱{{ number_format($transaction->amount, 2) }}
                                    </p>
                                    <p class="text-xs text-zinc-500">
                                        {{ $transaction->payment_method ?? 'No method yet' }}
                                    </p>
                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    {{ $transaction->payment_reference ?? 'Not submitted' }}
                                </td>

                                <td class="px-6 py-4">
                                    <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $statusClass }}">
                                        {{ ucfirst($transaction->status) }}
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    @if($transaction->payment_proof)
                                        <a href="{{ asset('storage/' . $transaction->payment_proof) }}"
                                           target="_blank"
                                           class="rounded-lg border border-blue-500/30 bg-blue-500/10 px-3 py-1.5 text-xs font-semibold text-blue-400 hover:bg-blue-500/20">
                                            View Proof
                                        </a>
                                    @else
                                        <span class="rounded-full bg-zinc-500/15 px-3 py-1 text-xs font-semibold text-zinc-400">
                                            No proof
                                        </span>
                                    @endif
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-2">
                                        @if($transaction->status === 'pending')
                                            <form action="{{ route('admin.transactions.approve', $transaction) }}" method="POST">
                                                @csrf

                                                <button type="submit"
                                                    onclick="return confirm('Approve this transaction and enroll the student?')"
                                                    class="rounded-lg bg-emerald-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-emerald-700">
                                                    Approve
                                                </button>
                                            </form>

                                            <form action="{{ route('admin.transactions.reject', $transaction) }}" method="POST">
                                                @csrf

                                                <button type="submit"
                                                    onclick="return confirm('Reject this transaction?')"
                                                    class="rounded-lg bg-red-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-700">
                                                    Reject
                                                </button>
                                            </form>
                                        @else
                                            <span class="rounded-full bg-zinc-500/15 px-3 py-1 text-xs font-semibold text-zinc-400">
                                                Completed
                                            </span>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-16 text-center">
                                    <h3 class="text-lg font-semibold text-black">No transactions available</h3>
                                    <p class="mt-1 text-sm text-black">
                                        Student payment transactions will appear here.
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts::app>