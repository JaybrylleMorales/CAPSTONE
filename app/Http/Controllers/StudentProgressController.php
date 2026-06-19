<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;

class StudentProgressController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with([
            'student',
            'course'
        ])->latest()->get();

        return view(
            'student-progress.index',
            compact('enrollments')
        );
    }
}