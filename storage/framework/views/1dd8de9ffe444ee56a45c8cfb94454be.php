<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Create Course')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Create Course'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Create Course
        </h1>

        <p class="text-sm text-gray-500">
            Add a new course to PathWise. Courses will contain lessons, quizzes, and certificates.
        </p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <form action="<?php echo e(route('courses.store')); ?>"
              method="POST"
              class="space-y-5">

            <?php echo csrf_field(); ?>

            <div>
                <label class="block mb-1 text-sm font-medium">Course Title</label>

                <input type="text"
                       name="title"
                       value="<?php echo e(old('title')); ?>"
                       placeholder="Example: Entrepreneurship Essentials"
                       class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                       required>
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">Description</label>

                <textarea name="description"
                          rows="5"
                          placeholder="Example: Learn the fundamentals of entrepreneurship including business planning, market research, financial management, and growth strategies."
                          class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"><?php echo e(old('description')); ?></textarea>
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">Category</label>

                <select name="category_id"
                        class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                        required>
                    <option value="">Select Category</option>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <option value="<?php echo e($category->id); ?>" <?php if(old('category_id') == $category->id): echo 'selected'; endif; ?>>
                            <?php echo e($category->name); ?>

                        </option>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </select>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-medium">Price</label>

                    <input type="number"
                           step="0.01"
                           name="price"
                           value="<?php echo e(old('price', 0)); ?>"
                           placeholder="Example: 0.00"
                           class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                           required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Estimated Hours</label>

                    <input type="number"
                           name="estimated_hours"
                           value="<?php echo e(old('estimated_hours')); ?>"
                           placeholder="Example: 5"
                           class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">
                </div>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-medium">Difficulty Level</label>

                    <select name="difficulty_level"
                            class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                            required>
                        <option value="beginner" <?php if(old('difficulty_level') == 'beginner'): echo 'selected'; endif; ?>>Beginner</option>
                        <option value="intermediate" <?php if(old('difficulty_level', 'intermediate') == 'intermediate'): echo 'selected'; endif; ?>>Intermediate</option>
                        <option value="advanced" <?php if(old('difficulty_level') == 'advanced'): echo 'selected'; endif; ?>>Advanced</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Course Status</label>

                    <select name="status"
                            class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                            required>
                        <option value="draft" <?php if(old('status') == 'draft'): echo 'selected'; endif; ?>>Draft</option>
                        <option value="pending" <?php if(old('status') == 'pending'): echo 'selected'; endif; ?>>Pending</option>
                        <option value="approved" <?php if(old('status') == 'approved'): echo 'selected'; endif; ?>>Approved</option>
                        <option value="published" <?php if(old('status', 'published') == 'published'): echo 'selected'; endif; ?>>Published</option>
                    </select>
                </div>
            </div>

            <div class="space-y-3 rounded-lg border p-4 dark:border-neutral-700">
                <label class="flex items-start gap-2">
                    <input type="checkbox"
                           name="certificate_available"
                           value="1"
                           class="mt-1"
                           <?php if(old('certificate_available', true)): echo 'checked'; endif; ?>>

                    <span>
                        <span class="block font-medium">Certificate Available</span>
                        <span class="text-sm text-gray-500">
                            Allow students to earn a certificate after completing this course.
                        </span>
                    </span>
                </label>
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="rounded bg-blue-600 hover:bg-blue-700 px-4 py-2 text-white">
                    Save Course
                </button>

                <a href="<?php echo e(route('courses.index')); ?>"
                   class="rounded bg-gray-600 hover:bg-gray-700 px-4 py-2 text-white">
                    Cancel
                </a>
            </div>

        </form>

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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/courses/create.blade.php ENDPATH**/ ?>