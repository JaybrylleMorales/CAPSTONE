<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizQuestionController;
use App\Http\Controllers\QuizResultController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\AIRecommendationController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        if (auth()->user()->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        }

        if (auth()->user()->hasRole('teacher')) {
            return redirect()->route('teacher.dashboard');
        }

        if (auth()->user()->hasRole('student')) {
            return redirect()->route('student.dashboard');
        }

        abort(403, 'Unauthorized');
    })->name('dashboard');

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin-dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');

        Route::resource('course-categories', CourseCategoryController::class);
        Route::resource('courses', CourseController::class);
        Route::resource('lessons', LessonController::class);
        Route::resource('quizzes', QuizController::class);
        Route::resource('quiz-questions', QuizQuestionController::class);
        Route::resource('quiz-results', QuizResultController::class);
        Route::resource('enrollments', EnrollmentController::class);
        Route::resource('assignments', AssignmentController::class);
        Route::resource('submissions', SubmissionController::class);
        Route::resource('certificates', CertificateController::class);
        Route::resource('ai-recommendations', AIRecommendationController::class);
    });

    Route::middleware('role:teacher')->group(function () {
    Route::get('/teacher-dashboard', [DashboardController::class, 'teacher'])
        ->name('teacher.dashboard');

    Route::get('/teacher-courses', [CourseController::class, 'teacherCourses'])
    ->name('teacher.courses');

    Route::get('/teacher-courses', [CourseController::class, 'teacherCourses'])
    ->name('teacher.courses');

    Route::get('/teacher-courses/{course}/students', [CourseController::class, 'teacherCourseStudents'])
    ->name('teacher.course.students');

    });

   Route::middleware('role:student')->group(function () {
    Route::get('/student-dashboard', [DashboardController::class, 'student'])
        ->name('student.dashboard');

    Route::get('/marketplace', [CourseController::class, 'marketplace'])
        ->name('student.marketplace');

    Route::get('/marketplace/{course}', [CourseController::class, 'showStudentCourse'])
        ->name('student.course.show');

    Route::post('/marketplace/{course}/enroll', [CourseController::class, 'enroll'])
        ->name('student.enroll');

    Route::get('/my-courses', [CourseController::class, 'myCourses'])
        ->name('student.my-courses');

    Route::get('/learn/{course}', [LessonController::class, 'studentCourse'])
        ->name('student.learn.course');

    Route::get('/lesson/{lesson}', [LessonController::class, 'studentLesson'])
        ->name('student.lesson.view');

    Route::post('/lesson/{lesson}/complete', [LessonController::class, 'markComplete'])
        ->name('student.lesson.complete');

    Route::get('/my-certificates', [DashboardController::class, 'certificates'])
       ->name('student.certificates');

    Route::get('/certificate/{certificate}', [CertificateController::class, 'studentView'])
       ->name('student.certificate.view');

    Route::get('/certificate/{certificate}/download', [CertificateController::class, 'download'])
    ->name('student.certificate.download');

    });

});

require __DIR__.'/settings.php';