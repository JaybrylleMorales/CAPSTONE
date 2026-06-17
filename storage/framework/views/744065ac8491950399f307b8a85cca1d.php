<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'Student Dashboard']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Student Dashboard')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            Welcome back, <?php echo e(auth()->user()->name); ?>

        </h1>
        <p class="text-sm text-gray-600 dark:text-gray-400">
            Continue your learning journey with PathWise.
        </p>
    </div>

    <div class="flex gap-3">
        <a href="<?php echo e(route('student.marketplace')); ?>"
           class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Browse Courses
        </a>

        <a href="<?php echo e(route('student.my-courses')); ?>"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            My Courses
        </a>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Courses Enrolled</p>
            <h2 class="mt-2 text-3xl font-bold"><?php echo e($enrollments->count()); ?></h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Quizzes Taken</p>
            <h2 class="mt-2 text-3xl font-bold"><?php echo e($quizzesTaken); ?></h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Certificates Earned</p>
            <h2 class="mt-2 text-3xl font-bold"><?php echo e($certificatesEarned); ?></h2>
        </div>
    </div>

    <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <h3 class="text-lg font-semibold mb-4">
            AI Recommended For You
        </h3>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recommendedCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommendation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="rounded-lg bg-neutral-100 p-4 mb-3 dark:bg-neutral-800">
                <h4 class="font-semibold">
                    <?php echo e($recommendation->course->title ?? 'Course unavailable'); ?>

                </h4>

                <p class="text-sm mt-1">
                    Confidence Score: <?php echo e($recommendation->recommendation_score); ?>%
                </p>

                <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                    <?php echo e($recommendation->reason); ?>

                </p>
            </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <p class="text-sm text-gray-500">
                No AI recommendations yet.
            </p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <h3 class="text-lg font-semibold mb-4">
            Continue Learning
        </h3>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="rounded-lg bg-neutral-100 p-4 mb-3 dark:bg-neutral-800">
                <div class="flex justify-between">
                    <h4 class="font-semibold">
                        <?php echo e($enrollment->course->title ?? 'Course unavailable'); ?>

                    </h4>

                    <span class="text-sm">
                        <?php echo e($enrollment->progress_percentage); ?>%
                    </span>
                </div>

                <div class="mt-3 h-2 w-full rounded bg-gray-300">
                    <div class="h-2 rounded bg-blue-600"
                         style="width: <?php echo e($enrollment->progress_percentage); ?>%">
                    </div>
                </div>

                <p class="text-sm text-gray-500 mt-2">
                    Status: <?php echo e(ucfirst($enrollment->status)); ?>

                </p>
            </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <p class="text-sm text-gray-500">
                You are not enrolled in any courses yet.
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student/dashboard.blade.php ENDPATH**/ ?>