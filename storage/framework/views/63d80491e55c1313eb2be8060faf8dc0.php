<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Quiz Results')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Quiz Results'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white">Quiz Results</h1>
                <p class="mt-1 text-sm text-zinc-400">
                    Monitor student quiz performance and assessment outcomes.
                </p>
            </div>

            <a href="<?php echo e(route('teacher.quiz-results.create')); ?>"
               class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                Add Result
            </a>
        </div>

        <?php
            $totalResults = $results->count();
            $passedResults = $results->where('remarks', 'passed')->count();
            $failedResults = $results->where('remarks', 'failed')->count();
            $averagePercentage = $totalResults > 0 ? $results->avg('percentage') : 0;
        ?>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Results</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalResults); ?></h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Passed</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400"><?php echo e($passedResults); ?></h2>
            </div>

            <div class="rounded-2xl border border-red-800/40 bg-red-950/30 p-5">
                <p class="text-sm text-red-300">Failed</p>
                <h2 class="mt-2 text-3xl font-bold text-red-400"><?php echo e($failedResults); ?></h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Average Score</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">
                    <?php echo e(number_format($averagePercentage, 2)); ?>%
                </h2>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 shadow-lg shadow-purple-950/10">
            <div class="flex items-center justify-between border-b border-zinc-800 px-6 py-4">
                <div>
                    <h2 class="text-lg font-semibold text-white">Assessment Records</h2>
                    <p class="text-sm text-zinc-400">Latest quiz attempts submitted by students.</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Quiz</th>
                            <th class="px-6 py-4">Score</th>
                            <th class="px-6 py-4">Performance</th>
                            <th class="px-6 py-4">Remarks</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php
                                $percentage = $result->percentage ?? 0;
                                $isPassed = strtolower($result->remarks) === 'passed';
                            ?>

                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-purple-600/20 text-sm font-bold text-purple-300">
                                            <?php echo e(strtoupper(substr($result->student->name, 0, 1))); ?>

                                        </div>
                                        <div>
                                            <p class="font-semibold text-white"><?php echo e($result->student->name); ?></p>
                                            <p class="text-xs text-zinc-500">Student</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-200">
                                    <?php echo e($result->quiz->title); ?>

                                </td>

                                <td class="px-6 py-4">
                                    <span class="font-semibold text-white">
                                        <?php echo e($result->score); ?>/<?php echo e($result->total_items); ?>

                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="h-2 w-32 rounded-full bg-zinc-800">
                                            <div class="h-2 rounded-full <?php echo e($isPassed ? 'bg-emerald-500' : 'bg-red-500'); ?>"
                                                 style="width: <?php echo e(min($percentage, 100)); ?>%">
                                            </div>
                                        </div>
                                        <span class="text-sm font-semibold text-zinc-300">
                                            <?php echo e(number_format($percentage, 2)); ?>%
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isPassed): ?>
                                        <span class="rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold text-emerald-400">
                                            Passed
                                        </span>
                                    <?php else: ?>
                                        <span class="rounded-full bg-red-500/15 px-3 py-1 text-xs font-semibold text-red-400">
                                            Failed
                                        </span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </td>

                                <td class="px-6 py-4 text-right">
                                    <a href="<?php echo e(route('quiz-results.edit', $result)); ?>"
                                       class="mr-3 text-sm font-medium text-blue-400 hover:text-blue-300">
                                        Edit
                                    </a>

                                    <form action="<?php echo e(route('quiz-results.destroy', $result)); ?>"
                                          method="POST"
                                          class="inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

                                        <button onclick="return confirm('Delete this result?')"
                                                class="text-sm font-medium text-red-400 hover:text-red-300">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <tr>
                                <td colspan="6" class="px-6 py-16 text-center">
                                    <div class="mx-auto flex max-w-sm flex-col items-center">
                                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-purple-600/20 text-purple-300">
                                            📊
                                        </div>
                                        <h3 class="text-lg font-semibold text-white">No quiz results yet</h3>
                                        <p class="mt-1 text-sm text-zinc-400">
                                            Quiz results will appear here once students submit their quizzes.
                                        </p>
                                    </div>
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/quiz-results/index.blade.php ENDPATH**/ ?>