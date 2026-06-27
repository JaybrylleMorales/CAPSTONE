<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => $learningPath->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($learningPath->name)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<?php
    $studentId = auth()->id();

    $enrollments = \App\Models\Enrollment::where('student_id', $studentId)
        ->get()
        ->keyBy('course_id');

    $completedCourseIds = $enrollments
        ->where('status', 'completed')
        ->pluck('course_id')
        ->toArray();

    $activeCourseIds = $enrollments
        ->where('status', 'active')
        ->pluck('course_id')
        ->toArray();

    $totalCourses = $learningPath->courses->count();

    $completedCount = $learningPath->courses
        ->whereIn('id', $completedCourseIds)
        ->count();

    $pathProgress = $totalCourses > 0
        ? round(($completedCount / $totalCourses) * 100)
        : 0;
?>

<div class="space-y-6">

    
    <?php if (isset($component)) { $__componentOriginal5c84f04e4e4c3f6b2afa5416a6776687 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c84f04e4e4c3f6b2afa5416a6776687 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.back-button','data' => ['href' => route('student.learning-paths'),'label' => 'Back to Learning Paths']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('back-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('student.learning-paths')),'label' => 'Back to Learning Paths']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c84f04e4e4c3f6b2afa5416a6776687)): ?>
<?php $attributes = $__attributesOriginal5c84f04e4e4c3f6b2afa5416a6776687; ?>
<?php unset($__attributesOriginal5c84f04e4e4c3f6b2afa5416a6776687); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c84f04e4e4c3f6b2afa5416a6776687)): ?>
<?php $component = $__componentOriginal5c84f04e4e4c3f6b2afa5416a6776687; ?>
<?php unset($__componentOriginal5c84f04e4e4c3f6b2afa5416a6776687); ?>
<?php endif; ?>

    <div>
        <h1 class="text-3xl font-bold">
            <?php echo e($learningPath->name); ?>

        </h1>

        <p class="text-gray-500">
            <?php echo e($learningPath->description); ?>

        </p>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($learningPath->is_generated): ?>
            <span class="mt-3 inline-block rounded-full bg-purple-100 px-3 py-1 text-sm text-purple-700 dark:bg-purple-500/15 dark:text-purple-300">
                AI Generated Learning Path
            </span>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <div class="flex justify-between items-center mb-3">
            <h2 class="text-xl font-bold">
                Path Progress
            </h2>

            <span class="text-sm font-semibold">
                <?php echo e($pathProgress); ?>%
            </span>
        </div>

        <div class="h-3 w-full rounded bg-gray-300 dark:bg-neutral-800">
            <div class="h-3 rounded bg-gradient-to-r from-purple-500 to-indigo-500"
                 style="width: <?php echo e($pathProgress); ?>%">
            </div>
        </div>

        <p class="mt-2 text-sm text-gray-500">
            Completed <?php echo e($completedCount); ?> out of <?php echo e($totalCourses); ?> courses.
        </p>

    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <h2 class="text-xl font-bold mb-4">
            Recommended Learning Sequence
        </h2>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $learningPath->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

            <?php
                $isCompleted = in_array($course->id, $completedCourseIds);
                $isActive = in_array($course->id, $activeCourseIds);

                $statusLabel = 'Not Started';
                $statusClass = 'bg-gray-100 text-gray-700 dark:bg-neutral-700 dark:text-gray-300';

                if ($isCompleted) {
                    $statusLabel = 'Completed';
                    $statusClass = 'bg-green-100 text-green-700 dark:bg-green-500/15 dark:text-green-400';
                } elseif ($isActive) {
                    $statusLabel = 'In Progress';
                    $statusClass = 'bg-purple-100 text-purple-700 dark:bg-purple-500/15 dark:text-purple-300';
                }
            ?>

            <div class="rounded-lg bg-neutral-100 p-5 mb-4 dark:bg-neutral-800">

                <div class="flex justify-between items-start gap-4">

                    <div>
                        <div class="text-sm text-purple-500 mb-2">
                            Step <?php echo e($index + 1); ?>

                        </div>

                        <h3 class="text-lg font-bold">
                            <?php echo e($course->title); ?>

                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            <?php echo e($course->category->name ?? 'No Category'); ?>

                            •
                            <?php echo e(ucfirst($course->difficulty_level)); ?>

                        </p>
                    </div>

                    <span class="rounded-full px-3 py-1 text-sm <?php echo e($statusClass); ?>">
                        <?php echo e($statusLabel); ?>

                    </span>

                </div>

                <p class="mt-3 text-sm text-gray-600 dark:text-gray-400">
                    <?php echo e($course->description); ?>

                </p>

                <div class="mt-4">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isCompleted): ?>
                        <a href="<?php echo e(route('student.course.show', $course)); ?>"
                           class="inline-block rounded-lg bg-green-600 px-4 py-2 text-white transition hover:bg-green-700">
                            Review Course
                        </a>
                    <?php elseif($isActive): ?>
                        <a href="<?php echo e(route('student.learn.course', $course)); ?>"
                           class="inline-block rounded-lg bg-gradient-to-r from-purple-500 to-indigo-600 px-4 py-2 text-white transition hover:opacity-90">
                            Continue Learning
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('student.course.show', $course)); ?>"
                           class="inline-block rounded-lg bg-gradient-to-r from-purple-500 to-indigo-600 px-4 py-2 text-white transition hover:opacity-90">
                            View Course
                        </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

            </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

            <p class="text-gray-500">
                No courses assigned.
            </p>

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student/learning-paths/show.blade.php ENDPATH**/ ?>