<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'Manage Lessons']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Manage Lessons')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<div class="space-y-6">

    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold">
                Manage Lessons
            </h1>

            <p class="text-zinc-500">
                <?php echo e($course->title); ?>

            </p>
        </div>

        <a href="<?php echo e(route('teacher.lessons.create', $course)); ?>"
           class="px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg">
            Add Lesson
        </a>
    </div>

    <div class="border rounded-xl overflow-hidden">

        <table class="w-full">

            <thead>
                <tr>
                    <th class="p-4 text-left">Order</th>
                    <th class="p-4 text-left">Lesson Title</th>
                    <th class="p-4 text-left">Type</th>
                    <th class="p-4 text-left">Duration</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <tr class="border-t">
                        <td class="p-4">
                            <?php echo e($lesson->lesson_order); ?>

                        </td>

                        <td class="p-4 font-semibold">
                            <?php echo e($lesson->title); ?>

                        </td>

                        <td class="p-4">
                            <?php echo e(ucfirst($lesson->lesson_type)); ?>

                        </td>

                        <td class="p-4">
                            <?php echo e($lesson->duration_minutes ?? 0); ?> mins
                        </td>

                        <td class="p-4">
                            <?php echo e($lesson->is_published ? 'Published' : 'Draft'); ?>

                        </td>

                        <td class="p-4">

                        <a href="<?php echo e(route('teacher.lessons.edit', $lesson)); ?>"
                         class="px-3 py-1 bg-blue-600 text-white rounded text-sm">
                        Edit
                        </a>

                        <form action="<?php echo e(route('teacher.lessons.delete', $lesson)); ?>"
                        method="POST"
                        class="inline">

                         <?php echo csrf_field(); ?>
                         <?php echo method_field('DELETE'); ?>

                         <button
                         onclick="return confirm('Delete this lesson?')"
                        class="px-3 py-1 bg-red-600 text-white rounded text-sm">
                        Delete
                        </button>

                         </form>
                    </td>
                    </tr>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <tr>
                        <td colspan="5" class="p-6 text-center text-zinc-500">
                            No lessons added yet.
                        </td>
                    </tr>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>

        </table>

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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/teacher/lessons.blade.php ENDPATH**/ ?>