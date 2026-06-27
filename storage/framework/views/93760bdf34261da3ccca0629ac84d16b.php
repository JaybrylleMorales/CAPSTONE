<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Courses')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Courses'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white">Courses</h1>
                <p class="mt-1 text-sm text-zinc-400">
                    Manage course content, pricing, teachers, and publishing status.
                </p>
            </div>

            <a href="<?php echo e(route('courses.create')); ?>"
               class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                Add Course
            </a>
        </div>

        <?php
            $totalCourses = $courses->count();
            $publishedCourses = $courses->where('status', 'published')->count();
            $pendingCourses = $courses->where('status', 'pending')->count();
            $draftCourses = $courses->where('status', 'draft')->count();
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

            <div class="rounded-2xl border border-zinc-700 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Drafts</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($draftCourses); ?></h2>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 shadow-lg shadow-purple-950/10">
            <div class="border-b border-zinc-800 px-6 py-4">
                <h2 class="text-lg font-semibold text-white">Course Directory</h2>
                <p class="text-sm text-zinc-400">All courses created in PathWise.</p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Category</th>
                            <th class="px-6 py-4">Teacher</th>
                            <th class="px-6 py-4">Price</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php
                                $status = strtolower($course->status);

                                $statusClass = match ($status) {
                                    'published' => 'bg-emerald-500/15 text-emerald-400',
                                    'pending' => 'bg-yellow-500/15 text-yellow-400',
                                    'rejected' => 'bg-red-500/15 text-red-400',
                                    'draft' => 'bg-zinc-500/15 text-zinc-300',
                                    default => 'bg-blue-500/15 text-blue-400',
                                };
                            ?>

                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-600/20 text-lg">
                                            📚
                                        </div>

                                        <div>
                                            <p class="font-semibold text-white"><?php echo e($course->title); ?></p>
                                            <p class="text-xs text-zinc-500">Course</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    <?php echo e($course->category->name ?? 'No Category'); ?>

                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    <?php echo e($course->teacher->name ?? 'No Teacher'); ?>

                                </td>

                                <td class="px-6 py-4 font-semibold text-zinc-200">
                                    ₱<?php echo e(number_format($course->price, 2)); ?>

                                </td>

                                <td class="px-6 py-4">
                                    <span class="rounded-full px-3 py-1 text-xs font-semibold <?php echo e($statusClass); ?>">
                                        <?php echo e(ucfirst($course->status)); ?>

                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap justify-end gap-2">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->status === 'pending'): ?>
                                            <form action="<?php echo e(route('courses.approve', $course)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit"
                                                    class="rounded-lg bg-emerald-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-emerald-700">
                                                    Approve
                                                </button>
                                            </form>

                                            <form action="<?php echo e(route('courses.reject', $course)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit"
                                                    onclick="return confirm('Reject this course?')"
                                                    class="rounded-lg bg-red-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-700">
                                                    Reject
                                                </button>
                                            </form>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <a href="<?php echo e(route('courses.edit', $course)); ?>"
                                           class="rounded-lg bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-blue-700">
                                            Edit
                                        </a>

                                        <form action="<?php echo e(route('courses.destroy', $course)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button
                                                onclick="return confirm('Delete this course?')"
                                                class="rounded-lg bg-red-700 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-800">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <tr>
                                <td colspan="6" class="px-6 py-16 text-center">
                                    <h3 class="text-lg font-semibold text-white">No courses found</h3>
                                    <p class="mt-1 text-sm text-zinc-400">
                                        Courses will appear here once created.
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/courses/index.blade.php ENDPATH**/ ?>