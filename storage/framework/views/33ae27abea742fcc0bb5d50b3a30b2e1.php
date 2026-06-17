<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('PathWise Dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('PathWise Dashboard'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

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
            <?php echo e($totalStudents); ?>

        </h2>
    </div>

    <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
        <p class="text-sm text-gray-500 dark:text-gray-400">Total Teachers</p>
        <h2 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
            <?php echo e($totalTeachers); ?>

        </h2>
    </div>

    <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
        <p class="text-sm text-gray-500 dark:text-gray-400">Total Courses</p>
        <h2 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
            <?php echo e($totalCourses); ?>

        </h2>
    </div>

    <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
        <p class="text-sm text-gray-500 dark:text-gray-400">Total Enrollments</p>
        <h2 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
            <?php echo e($totalEnrollments); ?>

        </h2>
    </div>
</div>

        <div class="grid gap-4 lg:grid-cols-3">
            <div class="rounded-xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Quick Actions
                </h3>

                <div class="mt-4 space-y-3">
                    <a href="#" class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Users
                    </a>

                    <a href="<?php echo e(route('course-categories.index')); ?>" class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Categories
                    </a>

                    <a href="<?php echo e(route('courses.index')); ?>" class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Courses
                    </a>

                    <a href="<?php echo e(route('lessons.index')); ?>" class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Lessons
                    </a>

                    <a href="<?php echo e(route('quizzes.index')); ?>" class="block rounded-lg border border-neutral-200 px-4 py-3 text-sm font-medium hover:bg-neutral-100 dark:border-neutral-700 dark:hover:bg-neutral-800">
                        Manage Quizzes
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
                            <a href="<?php echo e(route('quiz-questions.index')); ?>" class="text-blue-600 dark:text-blue-400">
                                Quiz Questions
                            </a>

                            <a href="<?php echo e(route('quiz-results.index')); ?>" class="text-blue-600 dark:text-blue-400">
                                Quiz Results
                            </a>
                        </div>
                    </div>

                    <div class="rounded-lg bg-neutral-100 p-4 dark:bg-neutral-800">
                        <h4 class="font-semibold text-gray-900 dark:text-white">Performance Tracker</h4>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Tracks student progress, quiz results, and course completion.
                        </p>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $attributes = $__attributesOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $component = $__componentOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__componentOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/dashboard.blade.php ENDPATH**/ ?>