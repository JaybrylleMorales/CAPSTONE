<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => $course->title]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($course->title)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


<?php
    $studentId = auth()->id();

    $enrollment = \App\Models\Enrollment::where('student_id', $studentId)
        ->where('course_id', $course->id)
        ->first();

    $quiz = \App\Models\Quiz::where('course_id', $course->id)
        ->where('is_published', true)
        ->first();

    $quizResult = null;

    if ($quiz) {
        $quizResult = \App\Models\QuizResult::where('student_id', $studentId)
            ->where('quiz_id', $quiz->id)
            ->latest()
            ->first();
    }

    $totalLessons = $lessons->count();

    $completedLessonIds = \App\Models\LessonProgress::where('student_id', $studentId)
        ->whereIn('lesson_id', $lessons->pluck('id'))
        ->where('status', 'completed')
        ->pluck('lesson_id');

    $completedLessons = $completedLessonIds->count();

    $lessonProgress = $totalLessons > 0
        ? round(($completedLessons / $totalLessons) * 100)
        : 0;

    $allLessonsCompleted = $totalLessons > 0 && $completedLessons >= $totalLessons;
    $passedFinalQuiz = $quizResult && $quizResult->remarks === 'passed';
    $failedFinalQuiz = $quizResult && $quizResult->remarks === 'failed';
    $courseCompleted = $allLessonsCompleted && $passedFinalQuiz;

    $latestRecommendation = \App\Models\AIRecommendation::with('course')
        ->where('student_id', $studentId)
        ->latest()
        ->first();
?>

<div class="space-y-6">

    <div class="rounded-2xl border border-purple-500/30 bg-gradient-to-r from-purple-900/40 via-neutral-900 to-neutral-900 p-8">
        <h1 class="text-3xl font-bold text-white">
            <?php echo e($course->title); ?>

        </h1>

        <p class="mt-2 text-gray-400">
            Complete all lessons, pass the final quiz, and receive your certificate and AI learning recommendation.
        </p>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
        <div class="rounded-lg bg-green-100 p-4 text-green-700">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($courseCompleted): ?>
        <div class="rounded-xl border border-green-500/40 bg-green-500/10 p-5 text-green-400">
            🎉 Congratulations! You passed the final quiz and completed this course.
        </div>
    <?php elseif($failedFinalQuiz): ?>
        <div class="rounded-xl border border-red-500/40 bg-red-500/10 p-5 text-red-400">
            You completed the lessons, but your latest quiz score did not reach the passing score. Please retake the quiz to complete the course.
        </div>
    <?php elseif($allLessonsCompleted && !$quizResult): ?>
        <div class="rounded-xl border border-yellow-500/40 bg-yellow-500/10 p-5 text-yellow-400">
            All lessons are completed. Take the final quiz to finish this course.
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">

        <div class="mb-5 flex items-center justify-between gap-4">
            <div>
                <h2 class="text-xl font-bold text-white">
                    Lessons
                </h2>

                <p class="text-sm text-gray-400">
                    Completed Lessons: <?php echo e($completedLessons); ?> / <?php echo e($totalLessons); ?>

                </p>
            </div>

            <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-700">
                <?php echo e($lessonProgress); ?>%
            </span>
        </div>

        <div class="mb-5 h-2 rounded bg-neutral-800">
            <div class="h-2 rounded bg-blue-600" style="width: <?php echo e($lessonProgress); ?>%"></div>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

            <?php
                $isCompleted = $completedLessonIds->contains($lesson->id);
            ?>

            <a href="<?php echo e(route('student.lesson.view', $lesson)); ?>"
               class="mb-3 block rounded-xl bg-neutral-800 p-4 hover:bg-neutral-700">

                <div class="flex items-center justify-between gap-4">
                    <div>
                        <p class="font-semibold text-white">
                            <?php echo e($lesson->lesson_order); ?>. <?php echo e($lesson->title); ?>

                        </p>

                        <p class="text-sm text-gray-400">
                            <?php echo e(ucfirst($lesson->lesson_type)); ?> • <?php echo e($lesson->duration_minutes ?? 0); ?> mins
                        </p>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isCompleted): ?>
                        <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">
                            Completed
                        </span>
                    <?php else: ?>
                        <span class="rounded-full bg-yellow-100 px-3 py-1 text-sm font-semibold text-yellow-700">
                            In Progress
                        </span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

            </a>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <p class="text-sm text-gray-500">
                No lessons available.
            </p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    </div>

    <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">

        <h2 class="text-xl font-bold text-white">
            Final Quiz
        </h2>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($quiz): ?>

            <p class="mt-1 text-sm text-gray-400">
                <?php echo e($quiz->title); ?> — Passing Score: <?php echo e($quiz->passing_score); ?>%
            </p>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($quizResult): ?>
                <div class="mt-4 rounded-xl p-4 <?php echo e($passedFinalQuiz ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'); ?>">
                    Latest Score:
                    <strong><?php echo e($quizResult->percentage); ?>%</strong>
                    —
                    <strong><?php echo e(ucfirst($quizResult->remarks)); ?></strong>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($allLessonsCompleted): ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$quizResult): ?>
                    <a href="<?php echo e(route('student.quiz.take', $quiz)); ?>"
                       class="mt-4 inline-block rounded-lg bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">
                        Take Quiz
                    </a>

                <?php elseif($failedFinalQuiz): ?>
                    <a href="<?php echo e(route('student.quiz.take', $quiz)); ?>"
                       class="mt-4 inline-block rounded-lg bg-red-600 px-5 py-2 text-white hover:bg-red-700">
                        Retake Quiz
                    </a>

                <?php else: ?>
                    <p class="mt-4 text-sm text-gray-400">
                        Want to improve your score?
                        <a href="<?php echo e(route('student.quiz.take', $quiz)); ?>"
                           class="font-semibold text-purple-400 hover:text-purple-300">
                            Retake Quiz
                        </a>
                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php else: ?>
                <div class="mt-4 rounded-xl border border-yellow-500/40 bg-yellow-500/10 p-4 text-yellow-400">
                    Complete all lessons first before taking the quiz.
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php else: ?>
            <p class="mt-2 text-sm text-gray-500">
                No quiz available for this course yet.
            </p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($latestRecommendation && $latestRecommendation->course): ?>

        <div class="rounded-2xl border border-orange-500/30 bg-gradient-to-r from-orange-900/30 to-yellow-900/20 p-6">

            <div class="mb-4 flex items-center gap-3">
                <div class="text-3xl">
                    🎯
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-orange-400">
                        Next Learning Path
                    </h2>

                    <p class="text-sm text-gray-400">
                        Personalized AI recommendation based on your latest quiz performance.
                    </p>
                </div>
            </div>

            <div class="rounded-xl bg-black/20 p-5">

                <h3 class="text-2xl font-bold text-white">
                    <?php echo e($latestRecommendation->course->title); ?>

                </h3>

                <p class="mt-2 text-gray-400">
                    Recommended next course in your learning path.
                </p>

                <div class="mt-5">
                    <p class="text-sm font-semibold uppercase tracking-wider text-orange-400">
                        Reason
                    </p>

                    <p class="mt-2 leading-relaxed text-gray-300">
                        <?php echo e($latestRecommendation->reason); ?>

                    </p>
                </div>

                <div class="mt-6">
                    <div class="mb-2 flex justify-between">
                        <span class="text-sm text-gray-400">
                            Confidence Score
                        </span>

                        <span class="font-bold text-orange-400">
                            <?php echo e($latestRecommendation->recommendation_score); ?>%
                        </span>
                    </div>

                    <div class="h-3 w-full overflow-hidden rounded-full bg-neutral-800">
                        <div class="h-3 rounded-full bg-gradient-to-r from-orange-500 to-yellow-400"
                             style="width: <?php echo e(min($latestRecommendation->recommendation_score, 100)); ?>%">
                        </div>
                    </div>
                </div>

                <a href="<?php echo e(route('student.course.show', $latestRecommendation->course)); ?>"
                   class="mt-6 inline-flex items-center gap-2 rounded-xl bg-orange-600 px-5 py-3 font-semibold text-white hover:bg-orange-700">
                    Continue Learning →
                </a>

            </div>

        </div>

    <?php elseif($failedFinalQuiz): ?>

        <div class="rounded-2xl border border-orange-500/40 bg-orange-500/10 p-6">
            <h2 class="text-xl font-bold text-orange-400">
                AI Learning Insight
            </h2>

            <p class="mt-2 text-sm text-gray-300">
                Your latest score shows that you may need more foundational review before moving forward. Retake the quiz after reviewing the lessons.
            </p>
        </div>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($courseCompleted): ?>
        <a href="<?php echo e(route('student.certificates')); ?>"
           class="inline-block rounded-lg bg-green-600 px-4 py-2 text-white hover:bg-green-700">
            View Certificate
        </a>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

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
<?php endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/student/learn-course.blade.php ENDPATH**/ ?>