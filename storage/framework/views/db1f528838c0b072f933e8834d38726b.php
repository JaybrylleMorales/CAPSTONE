<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Manage Transactions')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Manage Transactions'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-white">Manage Transactions</h1>
            <p class="mt-1 text-sm text-zinc-400">
                Review student payments, verify proof, and approve enrollments.
            </p>
        </div>

        <?php
            $totalTransactions = $transactions->count();
            $pendingTransactions = $transactions->where('status', 'pending')->count();
            $approvedTransactions = $transactions->where('status', 'approved')->count();
            $rejectedTransactions = $transactions->where('status', 'rejected')->count();
            $approvedRevenue = $transactions->where('status', 'approved')->sum('amount');
        ?>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Transactions</p>
                <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalTransactions); ?></h2>
            </div>

            <div class="rounded-2xl border border-yellow-800/40 bg-yellow-950/30 p-5">
                <p class="text-sm text-yellow-300">Pending Review</p>
                <h2 class="mt-2 text-3xl font-bold text-yellow-400"><?php echo e($pendingTransactions); ?></h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Approved</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400"><?php echo e($approvedTransactions); ?></h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Approved Revenue</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">
                    ₱<?php echo e(number_format($approvedRevenue, 2)); ?>

                </h2>
            </div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-3 border-b border-zinc-800 px-6 py-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-white">Payment Verification Queue</h2>
                    <p class="text-sm text-zinc-400">
                        Student transaction records and payment proof status.
                    </p>
                </div>

                <div class="rounded-xl border border-zinc-800 bg-zinc-950 px-4 py-2 text-sm text-zinc-500">
                    <?php echo e($pendingTransactions); ?> pending approval
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Transaction</th>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Payment</th>
                            <th class="px-6 py-4">Reference</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Proof</th>
                            <th class="px-6 py-4 text-right">Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php
                                $status = strtolower($transaction->status);

                                $statusClass = match ($status) {
                                    'approved' => 'bg-emerald-500/15 text-emerald-400',
                                    'rejected' => 'bg-red-500/15 text-red-400',
                                    default => 'bg-yellow-500/15 text-yellow-400',
                                };
                            ?>

                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4">
                                    <p class="font-semibold text-white">
                                        <?php echo e($transaction->transaction_no); ?>

                                    </p>
                                    <p class="mt-1 text-xs text-zinc-500">
                                        <?php echo e($transaction->created_at?->format('M d, Y h:i A')); ?>

                                    </p>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-purple-600/20 text-sm font-bold text-purple-300">
                                            <?php echo e(strtoupper(substr($transaction->student->name ?? 'S', 0, 1))); ?>

                                        </div>

                                        <div>
                                            <p class="font-semibold text-white">
                                                <?php echo e($transaction->student->name ?? 'Student unavailable'); ?>

                                            </p>
                                            <p class="text-xs text-zinc-500">Learner</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    <?php echo e($transaction->course->title ?? 'Course unavailable'); ?>

                                </td>

                                <td class="px-6 py-4">
                                    <p class="font-semibold text-white">
                                        ₱<?php echo e(number_format($transaction->amount, 2)); ?>

                                    </p>
                                    <p class="text-xs text-zinc-500">
                                        <?php echo e($transaction->payment_method ?? 'No method yet'); ?>

                                    </p>
                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    <?php echo e($transaction->payment_reference ?? 'Not submitted'); ?>

                                </td>

                                <td class="px-6 py-4">
                                    <span class="rounded-full px-3 py-1 text-xs font-semibold <?php echo e($statusClass); ?>">
                                        <?php echo e(ucfirst($transaction->status)); ?>

                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->payment_proof): ?>
                                        <a href="<?php echo e(asset('storage/' . $transaction->payment_proof)); ?>"
                                           target="_blank"
                                           class="rounded-lg border border-blue-500/30 bg-blue-500/10 px-3 py-1.5 text-xs font-semibold text-blue-400 hover:bg-blue-500/20">
                                            View Proof
                                        </a>
                                    <?php else: ?>
                                        <span class="rounded-full bg-zinc-500/15 px-3 py-1 text-xs font-semibold text-zinc-400">
                                            No proof
                                        </span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-2">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->status === 'pending'): ?>
                                            <form action="<?php echo e(route('admin.transactions.approve', $transaction)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>

                                                <button type="submit"
                                                    onclick="return confirm('Approve this transaction and enroll the student?')"
                                                    class="rounded-lg bg-emerald-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-emerald-700">
                                                    Approve
                                                </button>
                                            </form>

                                            <form action="<?php echo e(route('admin.transactions.reject', $transaction)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>

                                                <button type="submit"
                                                    onclick="return confirm('Reject this transaction?')"
                                                    class="rounded-lg bg-red-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-700">
                                                    Reject
                                                </button>
                                            </form>
                                        <?php else: ?>
                                            <span class="rounded-full bg-zinc-500/15 px-3 py-1 text-xs font-semibold text-zinc-400">
                                                Completed
                                            </span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <tr>
                                <td colspan="8" class="px-6 py-16 text-center">
                                    <h3 class="text-lg font-semibold text-white">No transactions available</h3>
                                    <p class="mt-1 text-sm text-zinc-400">
                                        Student payment transactions will appear here.
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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/admin/transactions/index.blade.php ENDPATH**/ ?>