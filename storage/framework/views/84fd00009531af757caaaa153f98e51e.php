<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Reports & Analytics')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Reports & Analytics'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-white">Reports & Analytics</h1>
            <p class="mt-1 text-sm text-zinc-400">
                Overview of PathWise platform performance, learning activity, and completion trends.
            </p>
        </div>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Students</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalStudents); ?></h2>
                <p class="mt-1 text-xs text-zinc-500">Registered learners</p>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Total Teachers</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400"><?php echo e($totalTeachers); ?></h2>
                <p class="mt-1 text-xs text-zinc-500">Active instructors</p>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-blue-300">Total Courses</p>
                <h2 class="mt-2 text-3xl font-bold text-blue-400"><?php echo e($totalCourses); ?></h2>
                <p class="mt-1 text-xs text-zinc-500">Learning programs</p>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Completion Rate</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400"><?php echo e($completionRate); ?>%</h2>
                <p class="mt-1 text-xs text-zinc-500">Completed enrollments</p>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalEnrollments); ?></h2>
            </div>

            <div class="rounded-2xl border border-yellow-800/40 bg-yellow-950/30 p-5">
                <p class="text-sm text-yellow-300">Active Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-yellow-400"><?php echo e($activeEnrollments); ?></h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Completed</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400"><?php echo e($completedEnrollments); ?></h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Certificates Issued</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400"><?php echo e($certificatesIssued); ?></h2>
            </div>
        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-5 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <p class="text-sm text-zinc-400">Assessment Activity</p>
                    <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($quizAttempts); ?></h2>
                    <p class="mt-1 text-xs text-zinc-500">
                        Total quiz attempts submitted by students.
                    </p>
                </div>

                <div class="w-full md:w-1/2">
                    <div class="flex justify-between text-sm">
                        <span class="text-zinc-400">Completion Progress</span>
                        <span class="font-semibold text-white"><?php echo e($completionRate); ?>%</span>
                    </div>

                    <div class="mt-2 h-2 rounded-full bg-zinc-800">
                        <div class="h-2 rounded-full bg-emerald-500"
                             style="width: <?php echo e(min($completionRate, 100)); ?>%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-4 lg:grid-cols-2">

            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 shadow-lg shadow-purple-950/10">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-white">Popular Courses</h2>
                    <p class="text-sm text-zinc-400">Courses ranked by enrollment count.</p>
                </div>

                <div class="space-y-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $popularCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <div class="flex items-center justify-between rounded-xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <div>
                                <p class="font-semibold text-white"><?php echo e($course->title); ?></p>
                                <p class="text-xs text-zinc-500">Course enrollment performance</p>
                            </div>

                            <span class="rounded-full bg-purple-500/15 px-3 py-1 text-xs font-semibold text-purple-400">
                                <?php echo e($course->enrollments_count); ?> enrollments
                            </span>
                        </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <div class="rounded-xl border border-zinc-800 bg-zinc-950/50 p-6 text-center text-zinc-400">
                            No courses found.
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 shadow-lg shadow-purple-950/10">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-white">Recent Quiz Results</h2>
                    <p class="text-sm text-zinc-400">Latest student assessment submissions.</p>
                </div>

                <div class="space-y-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recentQuizResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <?php
                            $isPassed = strtolower($result->remarks) === 'passed';
                        ?>

                        <div class="flex items-center justify-between rounded-xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <div>
                                <p class="font-semibold text-white">
                                    <?php echo e($result->student->name ?? 'N/A'); ?>

                                </p>
                                <p class="text-sm text-zinc-400">
                                    <?php echo e($result->quiz->title ?? 'N/A'); ?>

                                </p>
                            </div>

                            <div class="text-right">
                                <p class="font-bold text-white">
                                    <?php echo e(number_format($result->percentage, 2)); ?>%
                                </p>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isPassed): ?>
                                    <span class="text-xs font-semibold text-emerald-400">Passed</span>
                                <?php else: ?>
                                    <span class="text-xs font-semibold text-red-400">Failed</span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <div class="rounded-xl border border-zinc-800 bg-zinc-950/50 p-6 text-center text-zinc-400">
                            No quiz results found.
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 shadow-lg shadow-purple-950/10">
            <div class="mb-4">
                <h2 class="text-lg font-bold text-white">Recent Certificates</h2>
                <p class="text-sm text-zinc-400">
                    Recently issued course completion certificates.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Certificate No.</th>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Issued Date</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recentCertificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4 font-semibold text-white">
                                    <?php echo e($certificate->certificate_number); ?>

                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    <?php echo e($certificate->student->name ?? 'N/A'); ?>

                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    <?php echo e($certificate->course->title ?? 'N/A'); ?>

                                </td>

                                <td class="px-6 py-4 text-zinc-400">
                                    <?php echo e($certificate->issued_date); ?>

                                </td>
                            </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <tr>
                                <td colspan="4" class="px-6 py-16 text-center text-zinc-400">
                                    No certificates found.
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/reports/index.blade.php ENDPATH**/ ?>