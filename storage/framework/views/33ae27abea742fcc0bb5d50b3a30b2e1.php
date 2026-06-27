<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Admin Dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Admin Dashboard'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<?php
    $pendingTransactions = \App\Models\Transaction::where('status', 'pending')->count();
    $approvedTransactions = \App\Models\Transaction::where('status', 'approved')->count();
    $totalRevenue = \App\Models\Transaction::where('status', 'approved')->sum('amount');

    $recentTransactions = \App\Models\Transaction::with(['student', 'course'])
        ->latest()
        ->take(5)
        ->get();

    $totalTeachers = \App\Models\User::whereHas('roles', function ($query) {
        $query->where('name', 'teacher');
    })->count();

    $publishedCourses = \App\Models\Course::where('status', 'published')->count();

    $hour = now()->hour;

    if ($hour < 12) {
        $greeting = 'Good Morning';
    } elseif ($hour < 18) {
        $greeting = 'Good Afternoon';
    } else {
        $greeting = 'Good Evening';
    }

    $currentDate = now()->format('l, F d, Y');
?>

<div class="space-y-6">

    <div class="rounded-2xl border border-purple-500/30 bg-gradient-to-r from-purple-900/40 via-neutral-900 to-neutral-900 p-8 shadow-lg">
        <div class="flex flex-col gap-5 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-sm font-medium text-purple-300">
                    PathWise Admin Portal
                </p>

                <h1 class="mt-2 text-4xl font-bold text-white">
                    <?php echo e($greeting); ?>, System Administrator 👋
                </h1>

                <p class="mt-2 text-sm text-purple-200">
                    <?php echo e($currentDate); ?>

                </p>

                <p class="mt-4 max-w-2xl text-gray-400">
                    Manage the PathWise ecosystem, monitor transactions, oversee users,
                    and track platform performance.
                </p>
            </div>

            <div class="flex gap-3">
                <a href="<?php echo e(route('admin.transactions.index')); ?>"
                   class="rounded-xl bg-yellow-500 px-5 py-3 text-sm font-semibold text-black hover:bg-yellow-400">
                    Review Payments
                </a>

                <a href="<?php echo e(route('reports.index')); ?>"
                   class="rounded-xl border border-purple-500 px-5 py-3 text-sm font-semibold text-purple-300 hover:bg-purple-500/10">
                    View Reports
                </a>
            </div>
        </div>
    </div>

    <div class="grid gap-4 md:grid-cols-4">
        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
            <p class="text-sm text-gray-400">Total Students</p>
            <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalStudents); ?></h2>
            <p class="mt-1 text-xs text-gray-500">Registered learners</p>
        </div>

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
            <p class="text-sm text-gray-400">Total Teachers</p>
            <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalTeachers); ?></h2>
            <p class="mt-1 text-xs text-gray-500">Course instructors</p>
        </div>

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
            <p class="text-sm text-gray-400">Total Courses</p>
            <h2 class="mt-2 text-3xl font-bold text-white"><?php echo e($totalCourses); ?></h2>
            <p class="mt-1 text-xs text-gray-500"><?php echo e($publishedCourses); ?> published courses</p>
        </div>

        <div class="rounded-2xl border border-green-500/40 bg-green-500/10 p-5">
            <p class="text-sm text-green-400">System Status</p>
            <h2 class="mt-2 text-3xl font-bold text-green-400">Online</h2>
            <p class="mt-1 text-xs text-gray-500">All services operating</p>
        </div>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <div class="rounded-2xl border border-yellow-500/40 bg-yellow-500/10 p-5">
            <p class="text-sm text-yellow-400">Pending Payments</p>
            <h2 class="mt-2 text-3xl font-bold text-yellow-400"><?php echo e($pendingTransactions); ?></h2>
            <p class="mt-1 text-xs text-gray-500">Waiting for admin verification</p>
        </div>

        <div class="rounded-2xl border border-green-500/40 bg-green-500/10 p-5">
            <p class="text-sm text-green-400">Approved Transactions</p>
            <h2 class="mt-2 text-3xl font-bold text-green-400"><?php echo e($approvedTransactions); ?></h2>
            <p class="mt-1 text-xs text-gray-500">Successfully verified payments</p>
        </div>

        <div class="rounded-2xl border border-purple-500/40 bg-purple-500/10 p-5">
            <p class="text-sm text-purple-400">Approved Revenue</p>
            <h2 class="mt-2 text-3xl font-bold text-purple-400">
                ₱<?php echo e(number_format($totalRevenue, 2)); ?>

            </h2>
            <p class="mt-1 text-xs text-gray-500">From approved course payments</p>
        </div>
    </div>

    <div class="grid gap-4 lg:grid-cols-3">

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
            <h3 class="text-lg font-semibold text-white">Quick Actions</h3>

            <div class="mt-4 space-y-3">
                <a href="<?php echo e(route('admin.transactions.index')); ?>"
                   class="flex items-center justify-between rounded-xl border border-yellow-500/40 bg-yellow-500/10 px-4 py-3 hover:bg-yellow-500/20">
                    <div>
                        <p class="text-sm font-semibold text-yellow-400">💳 Manage Transactions</p>
                        <p class="text-xs text-gray-400">Verify payments and approve enrollments</p>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($pendingTransactions > 0): ?>
                        <span class="rounded-full bg-yellow-400 px-2 py-1 text-xs font-bold text-black">
                            <?php echo e($pendingTransactions); ?>

                        </span>
                    <?php else: ?>
                        <span class="text-yellow-400">→</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </a>

                <a href="<?php echo e(route('users.index')); ?>" class="block rounded-xl border border-neutral-700 px-4 py-3 hover:bg-neutral-800">
                    <p class="text-sm font-semibold text-white">👥 Manage Users</p>
                    <p class="text-xs text-gray-400">View administrators, teachers, and students</p>
                </a>

                <a href="<?php echo e(route('courses.index')); ?>" class="block rounded-xl border border-neutral-700 px-4 py-3 hover:bg-neutral-800">
                    <p class="text-sm font-semibold text-white">📚 Manage Courses</p>
                    <p class="text-xs text-gray-400">Review and approve course content</p>
                </a>

                <a href="<?php echo e(route('course-categories.index')); ?>" class="block rounded-xl border border-neutral-700 px-4 py-3 hover:bg-neutral-800">
                    <p class="text-sm font-semibold text-white">🗂 Manage Categories</p>
                    <p class="text-xs text-gray-400">Organize learning categories</p>
                </a>

                <a href="<?php echo e(route('lessons.index')); ?>" class="block rounded-xl border border-neutral-700 px-4 py-3 hover:bg-neutral-800">
                    <p class="text-sm font-semibold text-white">📝 Manage Lessons</p>
                    <p class="text-xs text-gray-400">Monitor learning materials</p>
                </a>

                <a href="<?php echo e(route('quizzes.index')); ?>" class="block rounded-xl border border-neutral-700 px-4 py-3 hover:bg-neutral-800">
                    <p class="text-sm font-semibold text-white">📊 Manage Quizzes</p>
                    <p class="text-xs text-gray-400">Check quizzes and assessments</p>
                </a>

                <a href="<?php echo e(route('student-progress.index')); ?>" class="block rounded-xl border border-neutral-700 px-4 py-3 hover:bg-neutral-800">
                    <p class="text-sm font-semibold text-white">📈 Student Progress</p>
                    <p class="text-xs text-gray-400">Track learner completion</p>
                </a>

                <a href="<?php echo e(route('certificate-management.index')); ?>" class="block rounded-xl border border-neutral-700 px-4 py-3 hover:bg-neutral-800">
                    <p class="text-sm font-semibold text-white">🏆 Certificates</p>
                    <p class="text-xs text-gray-400">Manage issued certificates</p>
                </a>
            </div>
        </div>

        <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5 lg:col-span-2">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-white">Transaction Workflow</h3>
                    <p class="mt-1 text-sm text-gray-400">
                        Student payment verification and enrollment approval process.
                    </p>
                </div>

                <a href="<?php echo e(route('admin.transactions.index')); ?>"
                   class="rounded-xl bg-yellow-500 px-4 py-2 text-sm font-semibold text-black hover:bg-yellow-400">
                    Review Payments
                </a>
            </div>

            <div class="mt-5 grid gap-3 md:grid-cols-4">
                <div class="rounded-xl bg-neutral-800 p-4">
                    <p class="text-xs text-gray-500">Step 1</p>
                    <h4 class="mt-1 font-semibold text-white">🛒 Student Purchases</h4>
                    <p class="mt-1 text-xs text-gray-400">Student selects a paid course.</p>
                </div>

                <div class="rounded-xl bg-neutral-800 p-4">
                    <p class="text-xs text-gray-500">Step 2</p>
                    <h4 class="mt-1 font-semibold text-white">📤 Uploads Proof</h4>
                    <p class="mt-1 text-xs text-gray-400">Receipt is uploaded for verification.</p>
                </div>

                <div class="rounded-xl bg-neutral-800 p-4">
                    <p class="text-xs text-gray-500">Step 3</p>
                    <h4 class="mt-1 font-semibold text-white">🛡 Admin Reviews</h4>
                    <p class="mt-1 text-xs text-gray-400">Payment is approved or rejected.</p>
                </div>

                <div class="rounded-xl bg-neutral-800 p-4">
                    <p class="text-xs text-gray-500">Step 4</p>
                    <h4 class="mt-1 font-semibold text-white">✅ Access Granted</h4>
                    <p class="mt-1 text-xs text-gray-400">Approved payment enrolls student.</p>
                </div>
            </div>

            <div class="mt-6">
                <h4 class="mb-3 font-semibold text-white">Recent Transactions</h4>

                <div class="overflow-x-auto rounded-xl border border-neutral-700">
                    <table class="w-full text-sm">
                        <thead class="bg-neutral-800">
                            <tr class="text-left text-gray-400">
                                <th class="px-4 py-3">Transaction No.</th>
                                <th class="px-4 py-3">Student</th>
                                <th class="px-4 py-3">Course</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recentTransactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <tr class="border-t border-neutral-700">
                                    <td class="px-4 py-3 font-medium text-white">
                                        <?php echo e($transaction->transaction_no); ?>

                                    </td>

                                    <td class="px-4 py-3 text-gray-400">
                                        <?php echo e($transaction->student->name ?? 'Student unavailable'); ?>

                                    </td>

                                    <td class="px-4 py-3 text-gray-400">
                                        <?php echo e($transaction->course->title ?? 'Course unavailable'); ?>

                                    </td>

                                    <td class="px-4 py-3 text-gray-400">
                                        ₱<?php echo e(number_format($transaction->amount, 2)); ?>

                                    </td>

                                    <td class="px-4 py-3">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->status === 'approved'): ?>
                                            <span class="rounded-full bg-green-500/15 px-3 py-1 text-xs font-semibold text-green-400">
                                                Approved
                                            </span>
                                        <?php elseif($transaction->status === 'rejected'): ?>
                                            <span class="rounded-full bg-red-500/15 px-3 py-1 text-xs font-semibold text-red-400">
                                                Rejected
                                            </span>
                                        <?php else: ?>
                                            <span class="rounded-full bg-yellow-500/15 px-3 py-1 text-xs font-semibold text-yellow-400">
                                                Pending
                                            </span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </td>
                                </tr>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                <tr>
                                    <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                                        No transactions yet.
                                    </td>
                                </tr>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-5">
        <h3 class="text-lg font-semibold text-white">PathWise System Modules</h3>

        <div class="mt-4 grid gap-3 md:grid-cols-3">

    <a href="<?php echo e(route('courses.index')); ?>"
       class="block rounded-xl bg-neutral-800 p-4 transition duration-300 hover:scale-[1.02] hover:border hover:border-purple-500 hover:shadow-lg">
        <h4 class="font-semibold text-white">
            🎓 Course Marketplace
        </h4>
        <p class="mt-1 text-sm text-gray-400">
            Students browse paid and published courses.
        </p>
    </a>

    <a href="<?php echo e(route('admin.transactions.index')); ?>"
       class="block rounded-xl border border-yellow-500/30 bg-yellow-500/10 p-4 transition duration-300 hover:scale-[1.02] hover:shadow-lg">
        <h4 class="font-semibold text-yellow-400">
            💳 Payment Verification
        </h4>
        <p class="mt-1 text-sm text-gray-400">
            Handles purchases, receipt uploads, and approval.
        </p>
    </a>

    <a href="<?php echo e(route('courses.index')); ?>"
       class="block rounded-xl bg-neutral-800 p-4 transition duration-300 hover:scale-[1.02] hover:border hover:border-purple-500 hover:shadow-lg">
        <h4 class="font-semibold text-white">
            📚 Course Management
        </h4>
        <p class="mt-1 text-sm text-gray-400">
            Teachers create courses, lessons, quizzes, and materials.
        </p>
    </a>

    <a href="<?php echo e(route('quizzes.index')); ?>"
       class="block rounded-xl bg-neutral-800 p-4 transition duration-300 hover:scale-[1.02] hover:border hover:border-purple-500 hover:shadow-lg">
        <h4 class="font-semibold text-white">
            📊 Assessment Management
        </h4>
        <p class="mt-1 text-sm text-gray-400">
            Manages quizzes, questions, and assessment results.
        </p>
    </a>

    <a href="<?php echo e(route('ai-recommendations.index')); ?>"
       class="block rounded-xl border border-purple-500/30 bg-purple-500/10 p-4 transition duration-300 hover:scale-[1.02] hover:shadow-lg">
        <h4 class="font-semibold text-purple-400">
            🤖 AI Recommendation Engine
        </h4>
        <p class="mt-1 text-sm text-gray-400">
            Recommends next courses based on learner performance.
        </p>
    </a>

    <a href="<?php echo e(route('student-progress.index')); ?>"
       class="block rounded-xl bg-neutral-800 p-4 transition duration-300 hover:scale-[1.02] hover:border hover:border-purple-500 hover:shadow-lg">
        <h4 class="font-semibold text-white">
            📈 Performance Tracker
        </h4>
        <p class="mt-1 text-sm text-gray-400">
            Tracks progress, quiz results, completion, and certificates.
        </p>
    </a>

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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/dashboard.blade.php ENDPATH**/ ?>