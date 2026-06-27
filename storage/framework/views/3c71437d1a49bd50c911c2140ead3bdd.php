<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'Transaction Details']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Transaction Details')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<div class="mx-auto max-w-4xl space-y-6">

    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            Transaction Details
        </h1>
        <p class="text-sm text-gray-500">
            Review your payment transaction and upload your proof of payment.
        </p>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
        <div class="rounded-lg bg-green-100 p-4 text-green-700">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('error')): ?>
        <div class="rounded-lg bg-red-100 p-4 text-red-700">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="rounded-xl border border-neutral-700 bg-neutral-900 p-6">

        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="text-sm text-gray-400">Transaction No.</p>
                <h2 class="text-xl font-bold text-white">
                    <?php echo e($transaction->transaction_no); ?>

                </h2>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->status === 'approved'): ?>
                <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">
                    Approved
                </span>
            <?php elseif($transaction->status === 'rejected'): ?>
                <span class="rounded-full bg-red-100 px-3 py-1 text-sm font-semibold text-red-700">
                    Rejected
                </span>
            <?php else: ?>
                <span class="rounded-full bg-yellow-100 px-3 py-1 text-sm font-semibold text-yellow-700">
                    Pending Verification
                </span>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <div class="mt-6 grid gap-4 md:grid-cols-3">
            <div class="rounded-lg bg-neutral-800 p-4">
                <p class="text-sm text-gray-400">Course</p>
                <p class="mt-1 font-semibold text-white">
                    <?php echo e($transaction->course->title ?? 'Course unavailable'); ?>

                </p>
            </div>

            <div class="rounded-lg bg-neutral-800 p-4">
                <p class="text-sm text-gray-400">Amount</p>
                <p class="mt-1 font-semibold text-white">
                    ₱<?php echo e(number_format($transaction->amount, 2)); ?>

                </p>
            </div>

            <div class="rounded-lg bg-neutral-800 p-4">
                <p class="text-sm text-gray-400">Payment Method</p>
                <p class="mt-1 font-semibold text-white">
                    <?php echo e($transaction->payment_method ?? 'Not yet submitted'); ?>

                </p>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->payment_reference): ?>
            <div class="mt-4 rounded-lg bg-neutral-800 p-4">
                <p class="text-sm text-gray-400">Payment Reference</p>
                <p class="mt-1 font-semibold text-white">
                    <?php echo e($transaction->payment_reference); ?>

                </p>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->payment_proof): ?>
            <div class="mt-6">
                <p class="mb-2 text-sm font-medium text-gray-300">
                    Uploaded Receipt
                </p>

                <a href="<?php echo e(asset('storage/' . $transaction->payment_proof)); ?>"
                   target="_blank"
                   class="inline-block">
                    <img src="<?php echo e(asset('storage/' . $transaction->payment_proof)); ?>"
                         alt="Payment Proof"
                         class="max-h-72 w-auto rounded-lg border border-neutral-700 object-contain shadow">
                </a>

                <p class="mt-2 text-xs text-gray-500">
                    Click image to view full receipt.
                </p>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->status === 'pending'): ?>

        <div class="rounded-xl border border-neutral-700 bg-neutral-900 p-6">

            <h3 class="text-lg font-semibold text-white">
                Upload / Replace Payment Proof
            </h3>

            <p class="mt-1 text-sm text-gray-400">
                Submit your GCash, Maya, or bank transfer receipt for admin verification.
            </p>

            <form action="<?php echo e(route('student.transactions.upload-proof', $transaction)); ?>"
                  method="POST"
                  enctype="multipart/form-data"
                  class="mt-5 space-y-4">
                <?php echo csrf_field(); ?>

                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-300">
                        Payment Method
                    </label>

                    <select name="payment_method"
                            class="w-full rounded-lg border border-neutral-700 bg-neutral-800 p-3 text-white"
                            required>
                        <option value="">Select payment method</option>
                        <option value="GCash" <?php if($transaction->payment_method === 'GCash'): echo 'selected'; endif; ?>>GCash</option>
                        <option value="Maya" <?php if($transaction->payment_method === 'Maya'): echo 'selected'; endif; ?>>Maya</option>
                        <option value="Bank Transfer" <?php if($transaction->payment_method === 'Bank Transfer'): echo 'selected'; endif; ?>>Bank Transfer</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-300">
                        Reference Number
                    </label>

                    <input type="text"
                           name="payment_reference"
                           value="<?php echo e(old('payment_reference', $transaction->payment_reference)); ?>"
                           class="w-full rounded-lg border border-neutral-700 bg-neutral-800 p-3 text-white"
                           required>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-300">
                        Upload Receipt
                    </label>

                    <label class="flex h-36 w-full cursor-pointer items-center justify-center rounded-lg border-2 border-dashed border-neutral-600 bg-neutral-800 px-4 transition hover:border-blue-500 hover:bg-neutral-700">
                        <div class="text-center">
                            <p id="file-name" class="text-sm text-gray-400">
                                Click to upload payment receipt
                            </p>
                            <p class="mt-1 text-xs text-gray-500">
                                JPG, JPEG, or PNG only
                            </p>
                        </div>

                        <input type="file"
                               name="payment_proof"
                               id="payment_proof"
                               accept=".jpg,.jpeg,.png"
                               class="hidden"
                               <?php echo e($transaction->payment_proof ? '' : 'required'); ?>>
                    </label>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['payment_proof'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-300">
                        Remarks
                    </label>

                    <textarea name="remarks"
                              rows="3"
                              class="w-full rounded-lg border border-neutral-700 bg-neutral-800 p-3 text-white"><?php echo e(old('remarks', $transaction->remarks)); ?></textarea>
                </div>

                <button type="submit"
                        class="rounded-lg bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">
                    Submit Payment Proof
                </button>
            </form>
        </div>

    <?php else: ?>

        <div class="rounded-xl border border-neutral-700 bg-neutral-900 p-6">
            <h3 class="text-lg font-semibold text-white">
                Payment Status
            </h3>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->status === 'approved'): ?>
                <p class="mt-2 text-green-400">
                    Your payment has been approved. You may now access the course.
                </p>

                <a href="<?php echo e(route('student.learn.course', $transaction->course)); ?>"
                   class="mt-4 inline-block rounded-lg bg-green-600 px-5 py-2 text-white hover:bg-green-700">
                    Go to Course
                </a>
            <?php else: ?>
                <p class="mt-2 text-red-400">
                    Your payment was rejected. Please contact the administrator or submit another purchase request.
                </p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

</div>

<script>
    const paymentProofInput = document.getElementById('payment_proof');
    const fileName = document.getElementById('file-name');

    if (paymentProofInput && fileName) {
        paymentProofInput.addEventListener('change', function () {
            if (this.files.length > 0) {
                fileName.innerText = this.files[0].name;
            }
        });
    }
</script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $attributes = $__attributesOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $component = $__componentOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__componentOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student/transactions/upload-proof.blade.php ENDPATH**/ ?>