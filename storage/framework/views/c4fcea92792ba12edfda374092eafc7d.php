<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'Teacher Dashboard']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Teacher Dashboard')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<?php
    $recentCourses = \App\Models\Course::withCount(['lessons', 'enrollments'])
        ->where('teacher_id', auth()->id())
        ->latest()
        ->take(4)
        ->get();

    $recentQuizResults = \App\Models\QuizResult::with(['student', 'quiz.course'])
        ->whereHas('quiz.course', function ($query) {
            $query->where('teacher_id', auth()->id());
        })
        ->latest()
        ->take(5)
        ->get();

    $publishedCourses = \App\Models\Course::where('teacher_id', auth()->id())
        ->where('status', 'published')
        ->count();

    $pendingCourses = \App\Models\Course::where('teacher_id', auth()->id())
        ->where('status', 'pending')
        ->count();

    $averageScore = \App\Models\QuizResult::whereHas('quiz.course', function ($query) {
            $query->where('teacher_id', auth()->id());
        })
        ->avg('percentage');

    $averageScore = $averageScore ? round($averageScore, 2) : 0;
?>

<div class="space-y-6">

    <div class="rounded-2xl border border-purple-500/30 bg-gradient-to-r from-purple-900/40 via-neutral-900 to-neutral-900 p-8 shadow-lg">
        <div class="flex flex-col gap-5 md:flex-row md:items-center md:justify-between">
            <div>
             <p class="text-sm font-medium text-purple-300">
    PathWise Teaching Portal
</p>

<h1 class="mt-2 text-4xl font-bold text-white">
    <?php echo e($greeting); ?>, <?php echo e(auth()->user()->name); ?> 👋
</h1>

<p class="mt-2 text-sm text-purple-200">
    <?php echo e($currentDate); ?>

</p>

<p class="mt-4 max-w-2xl text-gray-400">
    Ready to inspire your students today? Manage your courses, monitor learner progress,
    review quiz performance, and improve your teaching content.
</p>
            </div>

            <div class="flex gap-3">
                <a href="<?php echo e(route('teacher.my-courses')); ?>"
                   class="rounded-xl bg-purple-600 px-5 py-3 text-sm font-semibold text-white hover:bg-purple-700">
                    View My Courses
                </a>

                <a href="<?php echo e(route('teacher.courses')); ?>"
                   class="rounded-xl border border-purple-500 px-5 py-3 text-sm font-semibold text-purple-300 hover:bg-purple-500/10">
                    Manage Courses
                </a>
            </div>
        </div>
    </div>

    <div class="grid gap-4 md:grid-cols-4">

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
            <p class="text-sm text-gray-400">Total Courses</p>
            <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalCourses); ?></h2>
            <p class="mt-1 text-xs text-gray-500">All teacher-created courses</p>
        </div>

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
            <p class="text-sm text-gray-400">Total Lessons</p>
            <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalLessons); ?></h2>
            <p class="mt-1 text-xs text-gray-500">Learning materials uploaded</p>
        </div>

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
            <p class="text-sm text-gray-400">Total Students</p>
            <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalStudents); ?></h2>
            <p class="mt-1 text-xs text-gray-500">Students enrolled in courses</p>
        </div>

        <div class="rounded-2xl border border-green-500/40 bg-green-500/10 p-5">
            <p class="text-sm text-green-400">Average Quiz Score</p>
            <h2 class="mt-2 text-3xl font-bold text-green-400"><?php echo e($averageScore); ?>%</h2>
            <p class="mt-1 text-xs text-gray-500">Based on student attempts</p>
        </div>

    </div>

    <div class="grid gap-4 lg:grid-cols-3">

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">

            <h3 class="text-lg font-semibold text-white">
                Quick Actions
            </h3>

            <div class="mt-4 grid gap-3">

                <a href="<?php echo e(route('teacher.my-courses')); ?>"
                   class="rounded-xl border border-purple-500/40 bg-purple-500/10 p-4 hover:bg-purple-500/20">
                    <p class="font-semibold text-purple-300">My Courses</p>
                    <p class="mt-1 text-xs text-gray-400">View and manage your course library</p>
                </a>

                <a href="<?php echo e(route('teacher.my-courses')); ?>"
                   class="rounded-xl border border-neutral-700 p-4 hover:bg-neutral-800">
                    <p class="font-semibold text-white">Create Lessons</p>
                    <p class="mt-1 text-xs text-gray-400">Add lessons and learning content</p>
                </a>

               <a href="<?php echo e(route('teacher.quiz-results.index')); ?>"
                   class="rounded-xl border border-neutral-700 p-4 hover:bg-neutral-800">
                    <p class="font-semibold text-white">Quiz Results</p>
                    <p class="mt-1 text-xs text-gray-400">Review student quiz performance</p>
                </a>

              <a href="<?php echo e(route('teacher.student-progress.index')); ?>"
                   class="rounded-xl border border-neutral-700 p-4 hover:bg-neutral-800">
                    <p class="font-semibold text-white">Student Progress</p>
                    <p class="mt-1 text-xs text-gray-400">Monitor learning completion</p>
                </a>

            </div>
        </div>

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5 lg:col-span-2">

            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-white">
                        Course Publishing Overview
                    </h3>
                    <p class="text-sm text-gray-400">
                        Track the approval and publishing status of your courses.
                    </p>
                </div>
            </div>

            <div class="mt-5 grid gap-4 md:grid-cols-3">

                <div class="rounded-xl bg-neutral-800 p-4">
                    <p class="text-sm text-gray-400">Published</p>
                    <h4 class="mt-2 text-2xl font-bold text-green-400"><?php echo e($publishedCourses); ?></h4>
                </div>

                <div class="rounded-xl bg-neutral-800 p-4">
                    <p class="text-sm text-gray-400">Pending Approval</p>
                    <h4 class="mt-2 text-2xl font-bold text-yellow-400"><?php echo e($pendingCourses); ?></h4>
                </div>

                <div class="rounded-xl bg-neutral-800 p-4">
                    <p class="text-sm text-gray-400">Enrollments</p>
                    <h4 class="mt-2 text-2xl font-bold text-blue-400"><?php echo e($totalEnrollments); ?></h4>
                </div>

            </div>

            <div class="mt-6">
                <h4 class="mb-3 font-semibold text-white">
                    Recent Courses
                </h4>

                <div class="overflow-x-auto rounded-xl border border-neutral-700">
                    <table class="w-full text-sm">
                        <thead class="bg-neutral-800 text-left text-gray-400">
                            <tr>
                                <th class="px-4 py-3">Course</th>
                                <th class="px-4 py-3">Lessons</th>
                                <th class="px-4 py-3">Students</th>
                                <th class="px-4 py-3">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recentCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <tr class="border-t border-neutral-700">
                                    <td class="px-4 py-3 font-semibold text-white">
                                        <?php echo e($course->title); ?>

                                    </td>

                                    <td class="px-4 py-3 text-gray-400">
                                        <?php echo e($course->lessons_count); ?>

                                    </td>

                                    <td class="px-4 py-3 text-gray-400">
                                        <?php echo e($course->enrollments_count); ?>

                                    </td>

                                    <td class="px-4 py-3">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->status === 'published'): ?>
                                            <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                                                Published
                                            </span>
                                        <?php elseif($course->status === 'pending'): ?>
                                            <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">
                                                Pending
                                            </span>
                                        <?php elseif($course->status === 'rejected'): ?>
                                            <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                                                Rejected
                                            </span>
                                        <?php else: ?>
                                            <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-semibold text-gray-700">
                                                <?php echo e(ucfirst($course->status)); ?>

                                            </span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </td>
                                </tr>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                <tr>
                                    <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                                        No courses created yet.
                                    </td>
                                </tr>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

    <div class="grid gap-4 lg:grid-cols-2">

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">

            <h3 class="text-lg font-semibold text-white">
                Recent Student Activity
            </h3>

            <p class="mt-1 text-sm text-gray-400">
                Latest quiz submissions from learners in your courses.
            </p>

            <div class="mt-4 space-y-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recentQuizResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="rounded-xl bg-neutral-800 p-4">
                        <div class="flex justify-between gap-4">
                            <div>
                                <p class="font-semibold text-white">
                                    <?php echo e($result->student->name ?? 'Student'); ?>

                                </p>

                                <p class="mt-1 text-sm text-gray-400">
                                    <?php echo e($result->quiz->title ?? 'Quiz'); ?>

                                </p>

                                <p class="text-xs text-gray-500">
                                    <?php echo e($result->quiz->course->title ?? 'Course unavailable'); ?>

                                </p>
                            </div>

                            <div class="text-right">
                                <p class="font-bold text-white">
                                    <?php echo e($result->percentage); ?>%
                                </p>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($result->remarks === 'passed'): ?>
                                    <span class="text-xs font-semibold text-green-400">Passed</span>
                                <?php else: ?>
                                    <span class="text-xs font-semibold text-red-400">Failed</span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <p class="rounded-xl bg-neutral-800 p-4 text-sm text-gray-500">
                        No recent student activity yet.
                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

        </div>

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">

            <h3 class="text-lg font-semibold text-white">
                Teaching Analytics
            </h3>

            <p class="mt-1 text-sm text-gray-400">
                Summary of your teaching performance and course engagement.
            </p>

            <div class="mt-5 space-y-4">

                <div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400">Published Course Ratio</span>
                        <span class="text-white">
                            <?php echo e($totalCourses > 0 ? round(($publishedCourses / $totalCourses) * 100, 2) : 0); ?>%
                        </span>
                    </div>

                    <div class="mt-2 h-2 rounded bg-neutral-800">
                        <div class="h-2 rounded bg-purple-600"
                             style="width: <?php echo e($totalCourses > 0 ? round(($publishedCourses / $totalCourses) * 100, 2) : 0); ?>%">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400">Student Engagement</span>
                        <span class="text-white">
                            <?php echo e($totalStudents); ?>

                        </span>
                    </div>

                    <div class="mt-2 h-2 rounded bg-neutral-800">
                        <div class="h-2 rounded bg-blue-600"
                             style="width: <?php echo e(min($totalStudents * 10, 100)); ?>%">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400">Average Quiz Performance</span>
                        <span class="text-white">
                            <?php echo e($averageScore); ?>%
                        </span>
                    </div>

                    <div class="mt-2 h-2 rounded bg-neutral-800">
                        <div class="h-2 rounded bg-green-600"
                             style="width: <?php echo e(min($averageScore, 100)); ?>%">
                        </div>
                    </div>
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/teacher/dashboard.blade.php ENDPATH**/ ?>