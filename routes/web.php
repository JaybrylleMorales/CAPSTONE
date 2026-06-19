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
use App\Http\Controllers\StudentProgressController;
use App\Http\Controllers\CertificateManagementController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\LearningPathController;

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
        

        Route::post('/courses/{course}/approve', [CourseController::class, 'approve'])
            ->name('courses.approve');

        Route::post('/courses/{course}/reject', [CourseController::class, 'reject'])
            ->name('courses.reject');

        Route::get('/student-progress', [StudentProgressController::class, 'index'])
            ->name('student-progress.index');

        Route::get('/certificate-management', [CertificateManagementController::class, 'index'])
            ->name('certificate-management.index');

        Route::get('/manage-users', [UserManagementController::class, 'index'])
            ->name('users.index');

        Route::get('/reports', [ReportsController::class, 'index'])
            ->name('reports.index');

        Route::resource('admin/learning-paths', LearningPathController::class)
            ->names('learning-paths');
    });

    Route::middleware('role:teacher')->group(function () {
        Route::get('/teacher-dashboard', [DashboardController::class, 'teacher'])
            ->name('teacher.dashboard');

        Route::get('/teacher-courses', [CourseController::class, 'teacherCourses'])
            ->name('teacher.courses');

        Route::get('/teacher/my-courses', [CourseController::class, 'teacherCourses'])
            ->name('teacher.my-courses');

        Route::get('/teacher-courses/{course}/students', [CourseController::class, 'teacherCourseStudents'])
            ->name('teacher.course.students');

        Route::get('/teacher/course/{course}/student/{student}/progress', [CourseController::class, 'studentProgress'])
            ->name('teacher.student.progress');

        Route::get('/teacher/courses/{course}/lessons', [LessonController::class, 'teacherLessons'])
            ->name('teacher.lessons');

        Route::get('/teacher/courses/{course}/lessons/create', [LessonController::class, 'teacherCreateLesson'])
            ->name('teacher.lessons.create');

        Route::post('/teacher/courses/{course}/lessons', [LessonController::class, 'teacherStoreLesson'])
            ->name('teacher.lessons.store');

        Route::get('/teacher/lessons/{lesson}/edit', [LessonController::class, 'teacherEditLesson'])
            ->name('teacher.lessons.edit');

        Route::put('/teacher/lessons/{lesson}', [LessonController::class, 'teacherUpdateLesson'])
            ->name('teacher.lessons.update');

        Route::delete('/teacher/lessons/{lesson}', [LessonController::class, 'teacherDeleteLesson'])
            ->name('teacher.lessons.delete');

        Route::post('/teacher/courses/{course}/submit', [CourseController::class, 'submitForApproval'])
            ->name('teacher.courses.submit');
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

        Route::get('/quiz/{quiz}/take', [QuizController::class, 'take'])
            ->name('student.quiz.take');

        Route::post('/quiz/{quiz}/submit', [QuizController::class, 'submit'])
            ->name('student.quiz.submit');

        Route::get('/learning-paths', [LearningPathController::class, 'studentIndex'])
            ->name('student.learning-paths');

        Route::get('/learning-paths/{learningPath}', [LearningPathController::class, 'studentShow'])
            ->name('student.learning-paths.show');
    });
});

require __DIR__.'/settings.php';