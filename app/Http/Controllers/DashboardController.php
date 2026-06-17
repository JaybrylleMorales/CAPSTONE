<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\QuizResult;
use App\Models\Certificate;
use App\Models\AIRecommendation;
use App\Models\Lesson;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = User::count();
        $totalTeachers = User::count();
        $totalCourses = Course::count();
        $totalEnrollments = Enrollment::count();

        return view('dashboard', compact(
            'totalStudents',
            'totalTeachers',
            'totalCourses',
            'totalEnrollments'
        ));
    }

    public function student()
    {
        $studentId = auth()->id();

        $enrollments = Enrollment::with('course')
            ->where('student_id', $studentId)
            ->latest()
            ->get();

        $recommendedCourses = AIRecommendation::with('course')
            ->where('student_id', $studentId)
            ->latest()
            ->take(3)
            ->get();

        $quizzesTaken = QuizResult::where('student_id', $studentId)->count();

        $certificatesEarned = Certificate::where('student_id', $studentId)->count();

        return view('student.dashboard', compact(
            'enrollments',
            'recommendedCourses',
            'quizzesTaken',
            'certificatesEarned'
        ));
    }

     public function certificates()
  {
    $certificates = Certificate::with('course')
        ->where('student_id', auth()->id())
        ->latest()
        ->get();

    return view('student.certificates', compact('certificates'));
 }

     public function teacher()
 {
    $totalCourses = Course::count();

    $totalLessons = Lesson::count();

    $totalStudents = Enrollment::distinct('student_id')->count();

    $totalEnrollments = Enrollment::count();

    return view('teacher.dashboard', compact(
        'totalCourses',
        'totalLessons',
        'totalStudents',
        'totalEnrollments'
    ));
 }
}