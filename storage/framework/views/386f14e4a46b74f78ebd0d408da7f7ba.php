<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('AI Recommendations')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('AI Recommendations'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white">AI Recommendations</h1>
                <p class="mt-1 text-sm text-zinc-400">
                    Review personalized course recommendations generated from student quiz performance.
                </p>
            </div>

            <a href="<?php echo e(route('ai-recommendations.create')); ?>"
               class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                Generate Recommendation
            </a>
        </div>

        <?php
            $totalRecommendations = $recommendations->count();
            $viewedRecommendations = $recommendations->where('is_viewed', true)->count();
            $unviewedRecommendations = $recommendations->where('is_viewed', false)->count();
            $averageScore = $totalRecommendations > 0
                ? round($recommendations->avg('recommendation_score'), 2)
                : 0;
        ?>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Recommendations</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalRecommendations); ?></h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Average AI Score</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400"><?php echo e($averageScore); ?>%</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Viewed</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400"><?php echo e($viewedRecommendations); ?></h2>
            </div>

            <div class="rounded-2xl border border-yellow-800/40 bg-yellow-950/30 p-5">
                <p class="text-sm text-yellow-300">Not Viewed</p>
                <h2 class="mt-2 text-3xl font-bold text-yellow-400"><?php echo e($unviewedRecommendations); ?></h2>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('error')): ?>
            <div class="rounded-xl border border-red-700/40 bg-red-950/40 px-4 py-3 text-red-300">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-3 border-b border-zinc-800 px-6 py-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-white">Recommendation Records</h2>
                    <p class="text-sm text-zinc-400">
                        AI-generated learning suggestions for students.
                    </p>
                </div>

                <div class="rounded-xl border border-purple-500/30 bg-purple-500/10 px-4 py-2 text-sm font-semibold text-purple-300">
                    AI Engine Active
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Recommended Course</th>
                            <th class="px-6 py-4">AI Score</th>
                            <th class="px-6 py-4">Reason</th>
                            <th class="px-6 py-4">Viewed</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recommendations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommendation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php
                                $score = $recommendation->recommendation_score ?? 0;

                                $scoreClass = $score >= 85
                                    ? 'bg-emerald-500'
                                    : ($score >= 70 ? 'bg-yellow-500' : 'bg-red-500');
                            ?>

                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-600/20 text-sm font-bold text-purple-300">
                                            <?php echo e(strtoupper(substr($recommendation->student->name ?? 'S', 0, 1))); ?>

                                        </div>

                                        <div>
                                            <p class="font-semibold text-white">
                                                <?php echo e($recommendation->student->name ?? 'N/A'); ?>

                                            </p>
                                            <p class="text-xs text-zinc-500">Learner</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <p class="font-semibold text-white">
                                        <?php echo e($recommendation->course->title ?? 'N/A'); ?>

                                    </p>
                                    <p class="text-xs text-zinc-500">Recommended Course</p>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="h-2 w-28 rounded-full bg-zinc-800">
                                            <div class="h-2 rounded-full <?php echo e($scoreClass); ?>"
                                                 style="width: <?php echo e(min($score, 100)); ?>%">
                                            </div>
                                        </div>

                                        <span class="font-semibold text-zinc-300">
                                            <?php echo e(number_format($score, 2)); ?>%
                                        </span>
                                    </div>
                                </td>

                                <td class="max-w-xl px-6 py-4 text-zinc-300">
                                    <?php echo e($recommendation->reason); ?>

                                </td>

                                <td class="px-6 py-4">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($recommendation->is_viewed): ?>
                                        <span class="rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold text-emerald-400">
                                            Viewed
                                        </span>
                                    <?php else: ?>
                                        <span class="rounded-full bg-yellow-500/15 px-3 py-1 text-xs font-semibold text-yellow-400">
                                            Not Viewed
                                        </span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </td>

                                <td class="px-6 py-4 text-right">
                                    <form action="<?php echo e(route('ai-recommendations.destroy', $recommendation)); ?>"
                                          method="POST"
                                          class="inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

                                        <button class="rounded-lg bg-red-700 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-800"
                                                onclick="return confirm('Delete recommendation?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <tr>
                                <td colspan="6" class="px-6 py-16 text-center">
                                    <div class="mx-auto flex max-w-sm flex-col items-center">
                                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-purple-600/20 text-2xl">
                                            ✨
                                        </div>

                                        <h3 class="text-lg font-semibold text-white">
                                            No recommendations found
                                        </h3>

                                        <p class="mt-1 text-sm text-zinc-400">
                                            Generate recommendations after students have quiz results.
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/ai-recommendations/index.blade.php ENDPATH**/ ?>