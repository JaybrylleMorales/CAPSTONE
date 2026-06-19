<x-layouts::app :title="$course->title">

@php
    $enrollment = \App\Models\Enrollment::where('student_id', auth()->id())
        ->where('course_id', $course->id)
        ->first();

    $quiz = \App\Models\Quiz::where('course_id', $course->id)
        ->where('is_published', true)
        ->first();

    $quizResult = null;

    if ($quiz) {
        $quizResult = \App\Models\QuizResult::where('student_id', auth()->id())
            ->where('quiz_id', $quiz->id)
            ->latest()
            ->first();
    }
@endphp

<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold">
            {{ $course->title }}
        </h1>

        <p class="text-gray-500">
            Course Learning Page
        </p>
    </div>

    @if($enrollment && $enrollment->status === 'completed')
        <div class="rounded-lg bg-green-100 p-4 text-green-700">
            🎉 Congratulations! You have completed all lessons in this course.
        </div>

        @if($quiz)
            <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
                <h2 class="text-xl font-bold">
                    Final Quiz
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    {{ $quiz->title }} — Passing Score: {{ $quiz->passing_score }}%
                </p>

                @if($quizResult)
                    <p class="mt-3 text-sm">
                        Latest Score:
                        <strong>{{ $quizResult->percentage }}%</strong>
                        —
                        <strong>{{ ucfirst($quizResult->remarks) }}</strong>
                    </p>
                @endif

                <a href="{{ route('student.quiz.take', $quiz) }}"
                   class="mt-4 inline-block px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                    {{ $quizResult ? 'Retake Quiz' : 'Take Quiz' }}
                </a>
            </div>
        @endif

        <a href="{{ route('student.certificates') }}"
           class="inline-block px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded">
            View Certificate
        </a>
    @endif

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <h2 class="text-xl font-bold mb-4">
            Lessons
        </h2>

        @forelse($lessons as $lesson)
            <a href="{{ route('student.lesson.view', $lesson) }}"
               class="block rounded-lg bg-neutral-100 p-4 mb-3 hover:bg-neutral-200 dark:bg-neutral-800 dark:hover:bg-neutral-700">

                <div class="flex justify-between">
                    <span>
                        {{ $lesson->lesson_order }}. {{ $lesson->title }}
                    </span>

                    <span class="text-sm text-gray-500">
                        {{ $lesson->duration_minutes ?? 0 }} mins
                    </span>
                </div>

            </a>
        @empty
            <p class="text-sm text-gray-500">
                No lessons available.
            </p>
        @endforelse

    </div>

</div>

</x-layouts::app>