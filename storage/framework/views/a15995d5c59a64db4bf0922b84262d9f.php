<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'Add Lesson']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Add Lesson')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<div class="max-w-3xl space-y-6">

    <div>
        <h1 class="text-3xl font-bold">
            Add Lesson
        </h1>

        <p class="text-zinc-500">
            <?php echo e($course->title); ?>

        </p>
    </div>

    <form action="<?php echo e(route('teacher.lessons.store', $course)); ?>"
      method="POST"
      class="space-y-4 border rounded-xl p-6">

        <?php echo csrf_field(); ?>

        <div>
            <label class="block text-sm font-medium mb-1">
                Lesson Title
            </label>

            <input type="text"
                   name="title"
                   class="w-full rounded-lg border p-2 text-black">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">
                Lesson Content
            </label>

            <textarea name="content"
                      rows="5"
                      class="w-full rounded-lg border p-2 text-black"></textarea>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">
                Lesson Type
            </label>

            <select name="lesson_type"
                    class="w-full rounded-lg border p-2 text-black">
                <option value="video">Video</option>
                <option value="document">Document</option>
                <option value="text">Text</option>
                <option value="quiz">Quiz</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">
                Video URL
            </label>

            <input type="text"
                   name="video_url"
                   class="w-full rounded-lg border p-2 text-black">
        </div>

        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">
                    Lesson Order
                </label>

                <input type="number"
                       name="lesson_order"
                       value="1"
                       class="w-full rounded-lg border p-2 text-black">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">
                    Duration Minutes
                </label>

                <input type="number"
                       name="duration_minutes"
                       class="w-full rounded-lg border p-2 text-black">
            </div>
        </div>

        <div class="flex gap-4">
            <label>
                <input type="checkbox" name="is_preview">
                Preview Lesson
            </label>

            <label>
                <input type="checkbox" name="is_published" checked>
                Published
            </label>
        </div>

        <button type="submit"
                class="px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg">
            Save Lesson
        </button>

    </form>

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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/teacher/create-lesson.blade.php ENDPATH**/ ?>