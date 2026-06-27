<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'Recommended Courses']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Recommended Courses')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold text-white">
            AI Recommended Courses
        </h1>

        <p class="text-gray-400">
            Personalized learning recommendations based on your performance.
        </p>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recommendations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommendation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

        <div class="overflow-hidden rounded-2xl border border-purple-500/20 bg-gradient-to-br from-purple-900/20 to-neutral-900/80 p-6 backdrop-blur">

            <div class="flex items-start justify-between gap-4">

                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500/25 to-indigo-500/15 text-purple-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16 2.5 6.5L22 12l-6.5 2.5L13 21l-2.5-6.5L4 12l6.5-2.5L13 3Z" />
                        </svg>
                    </div>

                    <div>
                        <span class="text-xs font-semibold uppercase tracking-wide text-purple-400">
                            Recommended for you
                        </span>
                        <h2 class="text-xl font-bold text-white">
                            <?php echo e($recommendation->course->title); ?>

                        </h2>
                    </div>
                </div>

                <span class="shrink-0 rounded-full border border-purple-500/30 bg-purple-500/10 px-3 py-1 text-sm font-semibold text-purple-300">
                    <?php echo e(number_format($recommendation->recommendation_score, 0)); ?>%
                </span>

            </div>

            <p class="mt-4 leading-relaxed text-gray-300">
                <?php echo e($recommendation->reason); ?>

            </p>

            <a href="<?php echo e(route('student.course.show', $recommendation->course)); ?>"
               class="mt-5 inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-purple-500 to-indigo-600 px-5 py-2 text-sm font-semibold text-white transition hover:opacity-90">
                View Course
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>

        </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

        <div class="flex flex-col items-center justify-center rounded-2xl border border-dashed border-purple-500/20 bg-neutral-900/40 px-6 py-16 text-center">
            <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-purple-500/10 text-3xl">
                ✨
            </div>
            <h2 class="text-lg font-semibold text-white">
                No recommendations yet
            </h2>
            <p class="mt-2 max-w-md text-sm text-gray-400">
                Complete a quiz in one of your courses and PathWise AI will analyze your performance to recommend the perfect next course for you.
            </p>
            <a href="<?php echo e(route('student.my-courses')); ?>"
               class="mt-5 inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-purple-500 to-indigo-600 px-5 py-2 text-sm font-semibold text-white transition hover:opacity-90">
                Go to My Courses
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student/recommendations/index.blade.php ENDPATH**/ ?>