<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => 'My Transactions']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('My Transactions')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<?php
    $totalTransactions = $transactions->count();
    $approvedTransactions = $transactions->where('status', 'approved')->count();
    $pendingTransactions = $transactions->where('status', 'pending')->count();
    $rejectedTransactions = $transactions->where('status', 'rejected')->count();
?>

<div class="space-y-6">

    <div class="rounded-2xl border border-purple-500/30 bg-gradient-to-r from-purple-900/40 via-neutral-900 to-neutral-900 p-8">
        <h1 class="text-3xl font-bold text-white">
            My Transactions
        </h1>

        <p class="mt-2 text-gray-400">
            Track your course purchases, uploaded payment receipts, and approval status.
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-4">

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
            <p class="text-sm text-gray-400">Total Transactions</p>
            <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalTransactions); ?></h2>
        </div>

        <div class="rounded-2xl border border-green-500/40 bg-green-500/10 p-5">
            <p class="text-sm text-green-400">Approved</p>
            <h2 class="mt-2 text-3xl font-bold text-green-400"><?php echo e($approvedTransactions); ?></h2>
        </div>

        <div class="rounded-2xl border border-yellow-500/40 bg-yellow-500/10 p-5">
            <p class="text-sm text-yellow-400">Pending</p>
            <h2 class="mt-2 text-3xl font-bold text-yellow-400"><?php echo e($pendingTransactions); ?></h2>
        </div>

        <div class="rounded-2xl border border-red-500/40 bg-red-500/10 p-5">
            <p class="text-sm text-red-400">Rejected</p>
            <h2 class="mt-2 text-3xl font-bold text-red-400"><?php echo e($rejectedTransactions); ?></h2>
        </div>

    </div>

    <div class="grid gap-5 lg:grid-cols-2">

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

            <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6 shadow-sm">

                <div class="flex items-start justify-between gap-4">

                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Transaction No.
                        </p>

                        <h2 class="mt-1 text-lg font-bold text-white">
                            <?php echo e($transaction->transaction_no); ?>

                        </h2>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->status === 'approved'): ?>
                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-bold text-green-700">
                            Approved
                        </span>
                    <?php elseif($transaction->status === 'rejected'): ?>
                        <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-700">
                            Rejected
                        </span>
                    <?php else: ?>
                        <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-bold text-yellow-700">
                            Pending Verification
                        </span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

                <div class="mt-5 rounded-xl bg-neutral-800 p-4">
                    <p class="text-sm text-gray-400">Course Purchased</p>

                    <h3 class="mt-1 text-lg font-semibold text-white">
                        <?php echo e($transaction->course->title ?? 'Course unavailable'); ?>

                    </h3>
                </div>

                <div class="mt-4 grid gap-3 md:grid-cols-3">

                    <div class="rounded-xl bg-neutral-800 p-4">
                        <p class="text-xs text-gray-400">Amount</p>
                        <p class="mt-1 font-bold text-white">
                            ₱<?php echo e(number_format($transaction->amount, 2)); ?>

                        </p>
                    </div>

                    <div class="rounded-xl bg-neutral-800 p-4">
                        <p class="text-xs text-gray-400">Method</p>
                        <p class="mt-1 font-bold text-white">
                            <?php echo e($transaction->payment_method ?? 'Not submitted'); ?>

                        </p>
                    </div>

                    <div class="rounded-xl bg-neutral-800 p-4">
                        <p class="text-xs text-gray-400">Reference</p>
                        <p class="mt-1 font-bold text-white">
                            <?php echo e($transaction->payment_reference ?? 'Not submitted'); ?>

                        </p>
                    </div>

                </div>

                <div class="mt-5 flex flex-wrap items-center justify-between gap-3">

                    <div class="text-sm text-gray-400">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->status === 'approved'): ?>
                            ✅ Payment approved. Course access granted.
                        <?php elseif($transaction->status === 'rejected'): ?>
                            ❌ Payment was rejected. Please review details.
                        <?php else: ?>
                            ⏳ Waiting for administrator verification.
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <a href="<?php echo e(route('student.transactions.show', $transaction)); ?>"
                       class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                        View Details
                    </a>

                </div>

            </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

            <div class="col-span-full rounded-2xl border border-neutral-700 bg-neutral-900 p-10 text-center">
                <h3 class="text-xl font-bold text-white">
                    No transactions yet
                </h3>

                <p class="mt-2 text-gray-400">
                    Your course purchases and payment records will appear here.
                </p>

                <a href="<?php echo e(route('student.marketplace')); ?>"
                   class="mt-5 inline-block rounded-xl bg-purple-600 px-5 py-2 text-white hover:bg-purple-700">
                    Browse Courses
                </a>
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student/transactions/index.blade.php ENDPATH**/ ?>