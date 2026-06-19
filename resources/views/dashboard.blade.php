<x-layouts::app :title="__('PathWise Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">

        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                PathWise Admin Dashboard
            </h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                AI-Powered E-Learning Platform Management Overview
            </p>
        </div>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-gray-500 dark:text-gray-400">Total Students</p>
                <h2 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $totalStudents }}
                </h2>
            </div>

            <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-gray-500 dark:text-gray-400">Total Teachers</p>
                <h2 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $totalTeachers }}
                </h2>
            </div>

            <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-gray-500 dark:text-gray-400">Total Courses</p>
                <h2 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $totalCourses }}
                </h2>
            </div>

            <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-gray-500 dark:text-gray-400">Total Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $totalEnrollments }}
                </h2>
            </div>
        </div>

        <div class="grid gap-4 lg:grid-cols-3">
            <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Quick Actions
                </h3>

                <div class="mt-4 space-y-3">
                    <a href="{{ route('users.index') }}"
                       class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Users
                    </a>

                    <a href="{{ route('course-categories.index') }}"
                       class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Categories
                    </a>

                    <a href="{{ route('courses.index') }}"
                       class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Courses
                    </a>

                    <a href="{{ route('lessons.index') }}"
                       class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Lessons
                    </a>

                    <a href="{{ route('quizzes.index') }}"
                       class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Quizzes
                    </a>

                    <a href="{{ route('student-progress.index') }}"
                       class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Student Progress Tracker
                    </a>

                    <a href="{{ route('certificate-management.index') }}"
                      class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                      Certificates Management
                    </a>
                    <a href="{{ route('learning-paths.index') }}"
                      class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                      Learning Paths
                    </a>
                </div>
            </div>

            <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900 lg:col-span-2">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    PathWise System Modules
                </h3>

                <div class="mt-4 grid gap-3 md:grid-cols-2">
                    <div class="rounded-lg bg-neutral-100 p-4 dark:bg-neutral-800">
                        <h4 class="font-semibold text-gray-900 dark:text-white">Course Marketplace</h4>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Students can browse and enroll in available courses.
                        </p>
                    </div>

                    <div class="rounded-lg bg-neutral-100 p-4 dark:bg-neutral-800">
                        <h4 class="font-semibold text-gray-900 dark:text-white">Course Management Module</h4>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Teachers can create courses, lessons, quizzes, and learning materials.
                        </p>
                    </div>

                    <div class="rounded-lg bg-neutral-100 p-4 dark:bg-neutral-800">
                        <h4 class="font-semibold text-gray-900 dark:text-white">Assessment Management</h4>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Manage quizzes, quiz questions, scores, and learner assessment results.
                        </p>

                        <div class="mt-3 flex gap-3 text-sm">
                            <a href="{{ route('quiz-questions.index') }}" class="text-blue-600 dark:text-blue-400">
                                Quiz Questions
                            </a>

                            <a href="{{ route('quiz-results.index') }}" class="text-blue-600 dark:text-blue-400">
                                Quiz Results
                            </a>
                        </div>
                    </div>

                    <div class="rounded-lg bg-neutral-100 p-4 dark:bg-neutral-800">
                        <h4 class="font-semibold text-gray-900 dark:text-white">Performance Tracker</h4>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Tracks student progress, quiz results, and course completion.
                        </p>

                        <div class="mt-3 text-sm">
                            <a href="{{ route('student-progress.index') }}" class="text-blue-600 dark:text-blue-400">
                                View Student Progress
                            </a>
                        </div>
                    </div>
                       
                    <div class="rounded-lg bg-neutral-100 p-4 dark:bg-neutral-800">
                        <h4 class="font-semibold text-gray-900 dark:text-white">AI Recommendation Engine</h4>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Recommends personalized learning paths and next courses.
                        </p>
                    </div>

                    <div class="rounded-lg bg-neutral-100 p-4 dark:bg-neutral-800">
                        <h4 class="font-semibold text-gray-900 dark:text-white">System Flow</h4>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Category → Course → Lesson → Quiz → Questions → Results → Enrollment.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layouts::app>