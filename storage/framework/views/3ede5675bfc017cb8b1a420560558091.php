<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('My Courses')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('My Courses'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-white">My Courses</h1>
            <p class="mt-1 text-sm text-zinc-400">
                Manage your published, pending, and draft learning materials.
            </p>
        </div>

        <?php
            $totalCourses = $courses->count();
            $publishedCourses = $courses->where('status', 'published')->count();
            $pendingCourses = $courses->where('status', 'pending')->count();
            $totalStudents = $courses->sum('enrollments_count');
        ?>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Courses</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalCourses); ?></h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Published</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400"><?php echo e($publishedCourses); ?></h2>
            </div>

            <div class="rounded-2xl border border-yellow-800/40 bg-yellow-950/30 p-5">
                <p class="text-sm text-yellow-300">Pending</p>
                <h2 class="mt-2 text-3xl font-bold text-yellow-400"><?php echo e($pendingCourses); ?></h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Total Students</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400"><?php echo e($totalStudents); ?></h2>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="grid gap-5 xl:grid-cols-2">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <?php
                    $status = strtolower($course->status);
                    $statusClasses = match ($status) {
                        'published' => 'bg-emerald-500/15 text-emerald-400 border-emerald-500/20',
                        'pending' => 'bg-yellow-500/15 text-yellow-400 border-yellow-500/20',
                        'rejected' => 'bg-red-500/15 text-red-400 border-red-500/20',
                        'draft' => 'bg-zinc-500/15 text-zinc-300 border-zinc-500/20',
                        default => 'bg-blue-500/15 text-blue-400 border-blue-500/20',
                    };
                ?>

                <div class="group rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 shadow-lg shadow-purple-950/10 transition hover:border-purple-700/50 hover:bg-zinc-900/80">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-purple-600/20 text-2xl">
                                📚
                            </div>

                            <div>
                                <h2 class="text-xl font-bold text-white">
                                    <?php echo e($course->title); ?>

                                </h2>

                                <p class="mt-1 text-sm text-zinc-400">
                                    <?php echo e($course->category->name ?? 'No Category'); ?>

                                </p>
                            </div>
                        </div>

                        <span class="rounded-full border px-3 py-1 text-xs font-semibold <?php echo e($statusClasses); ?>">
                            <?php echo e(ucfirst($course->status)); ?>

                        </span>
                    </div>

                    <div class="mt-6 grid grid-cols-3 gap-4">
                        <div class="rounded-xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <p class="text-xs text-zinc-500">Lessons</p>
                            <p class="mt-1 text-2xl font-bold text-white">
                                <?php echo e($course->lessons_count ?? $course->lessons->count()); ?>

                            </p>
                        </div>

                        <div class="rounded-xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <p class="text-xs text-zinc-500">Students</p>
                            <p class="mt-1 text-2xl font-bold text-white">
                                <?php echo e($course->enrollments_count ?? $course->enrollments->count()); ?>

                            </p>
                        </div>

                        <div class="rounded-xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <p class="text-xs text-zinc-500">Price</p>
                            <p class="mt-1 text-2xl font-bold text-white">
                                ₱<?php echo e(number_format($course->price, 2)); ?>

                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex flex-wrap items-center gap-2">
                        <a href="<?php echo e(route('teacher.course.students', $course)); ?>"
                           class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">
                            View Students
                        </a>

                        <a href="<?php echo e(route('teacher.lessons', $course)); ?>"
                           class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                            Manage Lessons
                        </a>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->status === 'draft' || $course->status === 'rejected'): ?>
                            <form action="<?php echo e(route('teacher.courses.submit', $course)); ?>"
                                  method="POST">
                                <?php echo csrf_field(); ?>

                                <button type="submit"
                                        class="rounded-xl bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">
                                    Submit for Approval
                                </button>
                            </form>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 px-6 py-16 text-center xl:col-span-2">
                    <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-purple-600/20 text-2xl">
                        📚
                    </div>

                    <h3 class="text-lg font-semibold text-white">No courses yet</h3>

                    <p class="mt-1 text-sm text-zinc-400">
                        Your assigned or created courses will appear here.
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/teacher/my-courses.blade.php ENDPATH**/ ?>