<x-layouts::app :title="$course->title">

@php
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
@endphp

<div class="space-y-6">

    <div class="rounded-2xl border border-purple-500/30 bg-gradient-to-r from-purple-900/40 via-neutral-900 to-neutral-900 p-8">
        <h1 class="text-3xl font-bold text-white">
            {{ $course->title }}
        </h1>

        <p class="mt-2 text-gray-400">
            Complete all lessons, pass the final quiz, and receive your certificate and AI learning recommendation.
        </p>
    </div>

    @if(session('success'))
        <div class="rounded-lg bg-green-100 p-4 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if($courseCompleted)
        <div class="rounded-xl border border-green-500/40 bg-green-500/10 p-5 text-green-400">
            🎉 Congratulations! You passed the final quiz and completed this course.
        </div>
    @elseif($failedFinalQuiz)
        <div class="rounded-xl border border-red-500/40 bg-red-500/10 p-5 text-red-400">
            You completed the lessons, but your latest quiz score did not reach the passing score. Please retake the quiz to complete the course.
        </div>
    @elseif($allLessonsCompleted && !$quizResult)
        <div class="rounded-xl border border-yellow-500/40 bg-yellow-500/10 p-5 text-yellow-400">
            All lessons are completed. Take the final quiz to finish this course.
        </div>
    @endif

    <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">

        <div class="mb-5 flex items-center justify-between gap-4">
            <div>
                <h2 class="text-xl font-bold text-white">
                    Lessons
                </h2>

                <p class="text-sm text-gray-400">
                    Completed Lessons: {{ $completedLessons }} / {{ $totalLessons }}
                </p>
            </div>

            <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-700">
                {{ $lessonProgress }}%
            </span>
        </div>

        <div class="mb-5 h-2 rounded bg-neutral-800">
            <div class="h-2 rounded bg-blue-600" style="width: {{ $lessonProgress }}%"></div>
        </div>

        @forelse($lessons as $lesson)

            @php
                $isCompleted = $completedLessonIds->contains($lesson->id);
            @endphp

            <a href="{{ route('student.lesson.view', $lesson) }}"
               class="mb-3 block rounded-xl bg-neutral-800 p-4 hover:bg-neutral-700">

                <div class="flex items-center justify-between gap-4">
                    <div>
                        <p class="font-semibold text-white">
                            {{ $lesson->lesson_order }}. {{ $lesson->title }}
                        </p>

                        <p class="text-sm text-gray-400">
                            {{ ucfirst($lesson->lesson_type) }} • {{ $lesson->duration_minutes ?? 0 }} mins
                        </p>
                    </div>

                    @if($isCompleted)
                        <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">
                            Completed
                        </span>
                    @else
                        <span class="rounded-full bg-yellow-100 px-3 py-1 text-sm font-semibold text-yellow-700">
                            In Progress
                        </span>
                    @endif
                </div>

            </a>

        @empty
            <p class="text-sm text-gray-500">
                No lessons available.
            </p>
        @endforelse

    </div>

    <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">

        <h2 class="text-xl font-bold text-white">
            Final Quiz
        </h2>

        @if($quiz)

            <p class="mt-1 text-sm text-gray-400">
                {{ $quiz->title }} — Passing Score: {{ $quiz->passing_score }}%
            </p>

            @if($quizResult)
                <div class="mt-4 rounded-xl p-4 {{ $passedFinalQuiz ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                    Latest Score:
                    <strong>{{ $quizResult->percentage }}%</strong>
                    —
                    <strong>{{ ucfirst($quizResult->remarks) }}</strong>
                </div>
            @endif

            @if($allLessonsCompleted)

                @if(!$quizResult)
                    <a href="{{ route('student.quiz.take', $quiz) }}"
                       class="mt-4 inline-block rounded-lg bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">
                        Take Quiz
                    </a>

                @elseif($failedFinalQuiz)
                    <a href="{{ route('student.quiz.take', $quiz) }}"
                       class="mt-4 inline-block rounded-lg bg-red-600 px-5 py-2 text-white hover:bg-red-700">
                        Retake Quiz
                    </a>

                @else
                    <p class="mt-4 text-sm text-gray-400">
                        Want to improve your score?
                        <a href="{{ route('student.quiz.take', $quiz) }}"
                           class="font-semibold text-purple-400 hover:text-purple-300">
                            Retake Quiz
                        </a>
                    </p>
                @endif

            @else
                <div class="mt-4 rounded-xl border border-yellow-500/40 bg-yellow-500/10 p-4 text-yellow-400">
                    Complete all lessons first before taking the quiz.
                </div>
            @endif

        @else
            <p class="mt-2 text-sm text-gray-500">
                No quiz available for this course yet.
            </p>
        @endif

    </div>

    @if($latestRecommendation && $latestRecommendation->course)

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
                    {{ $latestRecommendation->course->title }}
                </h3>

                <p class="mt-2 text-gray-400">
                    Recommended next course in your learning path.
                </p>

                <div class="mt-5">
                    <p class="text-sm font-semibold uppercase tracking-wider text-orange-400">
                        Reason
                    </p>

                    <p class="mt-2 leading-relaxed text-gray-300">
                        {{ $latestRecommendation->reason }}
                    </p>
                </div>

                <div class="mt-6">
                    <div class="mb-2 flex justify-between">
                        <span class="text-sm text-gray-400">
                            Confidence Score
                        </span>

                        <span class="font-bold text-orange-400">
                            {{ $latestRecommendation->recommendation_score }}%
                        </span>
                    </div>

                    <div class="h-3 w-full overflow-hidden rounded-full bg-neutral-800">
                        <div class="h-3 rounded-full bg-gradient-to-r from-orange-500 to-yellow-400"
                             style="width: {{ min($latestRecommendation->recommendation_score, 100) }}%">
                        </div>
                    </div>
                </div>

                <a href="{{ route('student.course.show', $latestRecommendation->course) }}"
                   class="mt-6 inline-flex items-center gap-2 rounded-xl bg-orange-600 px-5 py-3 font-semibold text-white hover:bg-orange-700">
                    Continue Learning →
                </a>

            </div>

        </div>

    @elseif($failedFinalQuiz)

        <div class="rounded-2xl border border-orange-500/40 bg-orange-500/10 p-6">
            <h2 class="text-xl font-bold text-orange-400">
                AI Learning Insight
            </h2>

            <p class="mt-2 text-sm text-gray-300">
                Your latest score shows that you may need more foundational review before moving forward. Retake the quiz after reviewing the lessons.
            </p>
        </div>

    @endif

    @if($courseCompleted)
        <a href="{{ route('student.certificates') }}"
           class="inline-block rounded-lg bg-green-600 px-4 py-2 text-white hover:bg-green-700">
            View Certificate
        </a>
    @endif

</div>

</x-layouts::app>