<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Student Progress')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Student Progress'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-white">Student Progress Tracker</h1>
            <p class="mt-1 text-sm text-zinc-400">
                Monitor student enrollments and course completion status.
            </p>
        </div>

        <?php
            $totalEnrollments = $enrollments->count();
            $completed = $enrollments->where('status', 'completed')->count();
            $active = $enrollments->where('status', 'active')->count();
            $averageProgress = $totalEnrollments > 0 ? $enrollments->avg('progress_percentage') : 0;
        ?>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalEnrollments); ?></h2>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-blue-300">Active</p>
                <h2 class="mt-2 text-3xl font-bold text-blue-400"><?php echo e($active); ?></h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Completed</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400"><?php echo e($completed); ?></h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Average Progress</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">
                    <?php echo e(number_format($averageProgress, 2)); ?>%
                </h2>
            </div>
        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 shadow-lg shadow-purple-950/10">
            <div class="border-b border-zinc-800 px-6 py-4">
                <h2 class="text-lg font-semibold text-white">Enrollment Progress</h2>
                <p class="text-sm text-zinc-400">
                    Overview of each student’s progress per course.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Progress</th>
                            <th class="px-6 py-4">Status</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php
                                $progress = $enrollment->progress_percentage ?? 0;
                                $status = strtolower($enrollment->status ?? 'active');
                                $isCompleted = $status === 'completed';
                            ?>

                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-purple-600/20 text-sm font-bold text-purple-300">
                                            <?php echo e(strtoupper(substr($enrollment->student->name ?? 'S', 0, 1))); ?>

                                        </div>
                                        <div>
                                            <p class="font-semibold text-white">
                                                <?php echo e($enrollment->student->name ?? 'Student'); ?>

                                            </p>
                                            <p class="text-xs text-zinc-500">Learner</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-200">
                                    <?php echo e($enrollment->course->title ?? 'Course'); ?>

                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="h-2 w-40 rounded-full bg-zinc-800">
                                            <div class="h-2 rounded-full <?php echo e($isCompleted ? 'bg-emerald-500' : 'bg-blue-500'); ?>"
                                                 style="width: <?php echo e(min($progress, 100)); ?>%">
                                            </div>
                                        </div>

                                        <span class="font-semibold text-zinc-300">
                                            <?php echo e(number_format($progress, 2)); ?>%
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isCompleted): ?>
                                        <span class="rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold text-emerald-400">
                                            Completed
                                        </span>
                                    <?php else: ?>
                                        <span class="rounded-full bg-blue-500/15 px-3 py-1 text-xs font-semibold text-blue-400">
                                            Active
                                        </span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </td>
                            </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <tr>
                                <td colspan="4" class="px-6 py-16 text-center">
                                    <h3 class="text-lg font-semibold text-white">No student progress yet</h3>
                                    <p class="mt-1 text-sm text-zinc-400">
                                        Student progress will appear once students enroll in courses.
                                    </p>
                                </td>
                            </tr>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </tbody>
                </table>
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student-progress/index.blade.php ENDPATH**/ ?>