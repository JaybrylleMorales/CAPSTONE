<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'Certificate']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Certificate')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<div class="max-w-5xl mx-auto space-y-6">

    <div class="flex justify-end">

        <a href="<?php echo e(route('student.certificate.download', $certificate)); ?>"
           class="inline-block bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow">

            Download PDF

        </a>

    </div>

    <div class="bg-white text-black rounded-xl shadow-lg p-16 border-4 border-gray-800">

        <div class="text-center">

            <h1 class="text-5xl font-bold tracking-wide">
                CERTIFICATE OF COMPLETION
            </h1>

            <p class="mt-6 text-lg font-semibold">
                PATHWISE
            </p>

            <p class="text-gray-600">
                AI-Powered E-Learning Platform
            </p>

            <div class="mt-12">

                <p class="text-xl">
                    This Certificate is Proudly Presented To
                </p>

                <h2 class="text-4xl font-bold mt-4">
                    <?php echo e($certificate->student->name); ?>

                </h2>

            </div>

            <div class="mt-12">

                <p class="text-xl">
                    For Successfully Completing
                </p>

                <h3 class="text-3xl font-bold mt-4">
                    <?php echo e($certificate->course->title); ?>

                </h3>

            </div>

            <div class="mt-12">

                <p class="text-gray-600">
                    Congratulations on successfully completing the course
                    and demonstrating the required competencies.
                </p>

            </div>

            <div class="grid grid-cols-2 gap-8 mt-16">

                <div>

                    <p class="text-gray-500">
                        Certificate Number
                    </p>

                    <p class="font-bold text-lg">
                        <?php echo e($certificate->certificate_number); ?>

                    </p>

                </div>

                <div>

                    <p class="text-gray-500">
                        Date Issued
                    </p>

                    <p class="font-bold text-lg">
                        <?php echo e(\Carbon\Carbon::parse($certificate->issued_date)->format('F d, Y')); ?>

                    </p>

                </div>

            </div>

            <div class="mt-16">

                <p class="font-semibold">
                    PATHWISE Learning Management System
                </p>

                <p class="text-sm text-gray-500">
                    Official Certificate of Completion
                </p>

            </div>

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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student/certificate-view.blade.php ENDPATH**/ ?>