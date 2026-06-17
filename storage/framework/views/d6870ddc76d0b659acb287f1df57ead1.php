<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'My Courses']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('My Courses')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold text-white">
            My Courses
        </h1>

        <p class="text-gray-400">
            Continue your learning journey with PathWise.
        </p>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
        <div class="rounded-lg bg-green-600 text-white p-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

        <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

            <div class="flex justify-between items-start">

                <div>
                    <h2 class="text-xl font-bold">
                        <?php echo e($enrollment->course->title); ?>

                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Status:
                        <span class="font-semibold">
                            <?php echo e(ucfirst($enrollment->status)); ?>

                        </span>
                    </p>
                </div>

                <span class="text-sm px-3 py-1 rounded bg-blue-600 text-white">
                    <?php echo e(number_format($enrollment->progress_percentage, 0)); ?>%
                </span>

            </div>

            <div class="mt-4">

                <div class="w-full bg-gray-700 rounded-full h-3">

                    <div
                        class="bg-green-500 h-3 rounded-full"
                        style="width: <?php echo e($enrollment->progress_percentage); ?>%">
                    </div>

                </div>

            </div>

            <div class="mt-4 text-sm text-gray-400">

                Enrolled:
                <?php echo e(optional($enrollment->enrolled_at)->format('M d, Y') ?? 'N/A'); ?>


            </div>

            <div class="mt-5">

                <a href="<?php echo e(route('student.learn.course', $enrollment->course)); ?>"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">

                    Continue Learning

                </a>

            </div>

        </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

        <div class="rounded-xl border p-8 text-center dark:border-neutral-700">

            <h2 class="text-xl font-semibold">
                No Enrolled Courses Yet
            </h2>

            <p class="text-gray-500 mt-2">
                Browse the marketplace and enroll in your first course.
            </p>

            <a href="<?php echo e(route('student.marketplace')); ?>"
               class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded">

                Browse Courses

            </a>

        </div>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student/my-courses.blade.php ENDPATH**/ ?>