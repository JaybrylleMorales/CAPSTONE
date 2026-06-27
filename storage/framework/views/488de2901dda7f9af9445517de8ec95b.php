<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Lessons')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Lessons'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white">Lessons</h1>
                <p class="mt-1 text-sm text-zinc-400">
                    Manage course lessons, content type, and lesson order.
                </p>
            </div>

            <a href="<?php echo e(route('lessons.create')); ?>"
               class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                Add Lesson
            </a>
        </div>

        <?php
            $totalLessons = $lessons->count();
            $textLessons = $lessons->where('lesson_type', 'text')->count();
            $videoLessons = $lessons->where('lesson_type', 'video')->count();
            $courseCount = $lessons->pluck('course_id')->unique()->count();
            $groupedLessons = $lessons->groupBy(fn ($lesson) => $lesson->course->title ?? 'No Course');
        ?>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Lessons</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalLessons); ?></h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Courses Covered</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400"><?php echo e($courseCount); ?></h2>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-blue-300">Text Lessons</p>
                <h2 class="mt-2 text-3xl font-bold text-blue-400"><?php echo e($textLessons); ?></h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Video Lessons</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400"><?php echo e($videoLessons); ?></h2>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="grid gap-5">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $groupedLessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courseTitle => $courseLessons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 shadow-lg shadow-purple-950/10">

                    <div class="flex flex-col gap-3 border-b border-zinc-800 pb-4 md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-purple-600 to-indigo-600 text-sm font-bold text-white">
                                <?php echo e(strtoupper(substr($courseTitle, 0, 1))); ?>

                            </div>

                            <div>
                                <h2 class="text-lg font-bold text-white">
                                    <?php echo e($courseTitle); ?>

                                </h2>
                                <p class="text-sm text-zinc-400">
                                    <?php echo e($courseLessons->count()); ?> lesson<?php echo e($courseLessons->count() > 1 ? 's' : ''); ?>

                                </p>
                            </div>
                        </div>

                        <span class="rounded-full bg-purple-500/15 px-3 py-1 text-xs font-semibold text-purple-400">
                            Course Lessons
                        </span>
                    </div>

                    <div class="mt-4 space-y-3">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $courseLessons->sortBy('lesson_order'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php
                                $type = strtolower($lesson->lesson_type);

                                $typeClass = match ($type) {
                                    'video' => 'bg-emerald-500/15 text-emerald-400',
                                    'text' => 'bg-blue-500/15 text-blue-400',
                                    'document' => 'bg-yellow-500/15 text-yellow-400',
                                    'quiz' => 'bg-purple-500/15 text-purple-400',
                                    default => 'bg-zinc-500/15 text-zinc-300',
                                };
                            ?>

                            <div class="flex flex-col gap-3 rounded-xl border border-zinc-800 bg-zinc-950/50 p-4 md:flex-row md:items-center md:justify-between">
                                <div class="flex items-start gap-3">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-zinc-800 text-sm font-bold text-zinc-300">
                                        <?php echo e($lesson->lesson_order); ?>

                                    </div>

                                    <div>
                                        <h3 class="font-semibold text-white">
                                            <?php echo e($lesson->title); ?>

                                        </h3>

                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span class="rounded-full px-3 py-1 text-xs font-semibold <?php echo e($typeClass); ?>">
                                                <?php echo e(ucfirst($lesson->lesson_type)); ?>

                                            </span>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->duration_minutes): ?>
                                                <span class="rounded-full bg-zinc-700/60 px-3 py-1 text-xs font-semibold text-zinc-300">
                                                    <?php echo e($lesson->duration_minutes); ?> mins
                                                </span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_preview): ?>
                                                <span class="rounded-full bg-yellow-500/15 px-3 py-1 text-xs font-semibold text-yellow-400">
                                                    Preview
                                                </span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_published): ?>
                                                <span class="rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold text-emerald-400">
                                                    Published
                                                </span>
                                            <?php else: ?>
                                                <span class="rounded-full bg-zinc-500/15 px-3 py-1 text-xs font-semibold text-zinc-400">
                                                    Draft
                                                </span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex shrink-0 gap-2">
                                    <a href="<?php echo e(route('lessons.edit', $lesson)); ?>"
                                       class="rounded-lg bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-blue-700">
                                        Edit
                                    </a>

                                    <form action="<?php echo e(route('lessons.destroy', $lesson)); ?>"
                                          method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            onclick="return confirm('Delete this lesson?')"
                                            class="rounded-lg bg-red-700 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-800">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>

                </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 px-6 py-16 text-center">
                    <h3 class="text-lg font-semibold text-white">No lessons found</h3>
                    <p class="mt-1 text-sm text-zinc-400">
                        Lessons will appear here once they are created.
                    </p>
                </div>
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/lessons/index.blade.php ENDPATH**/ ?>