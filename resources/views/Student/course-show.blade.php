<x-layouts::app :title="$course->title">

@php
    $isEnrolled = \App\Models\Enrollment::where('student_id', auth()->id())
        ->where('course_id', $course->id)
        ->exists();

    $pendingTransaction = \App\Models\Transaction::where('student_id', auth()->id())
        ->where('course_id', $course->id)
        ->where('status', 'pending')
        ->latest()
        ->first();
@endphp

<div class="space-y-6">

    {{-- Back button --}}
    <x-back-button :href="route('student.marketplace')" label="Back to Marketplace" />

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <p class="text-sm text-gray-500">
            {{ $course->category->name ?? 'No Category' }}
        </p>

        <h1 class="mt-2 text-3xl font-bold">
            {{ $course->title }}
        </h1>

        <p class="mt-4 text-gray-600 dark:text-gray-400">
            {{ $course->description }}
        </p>

        <div class="mt-5 grid gap-4 md:grid-cols-3 text-sm">
            <div class="rounded bg-neutral-100 p-3 dark:bg-neutral-800">
                Level: {{ ucfirst($course->difficulty_level) }}
            </div>

            <div class="rounded bg-neutral-100 p-3 dark:bg-neutral-800">
                Hours: {{ $course->estimated_hours ?? 'N/A' }}
            </div>

            <div class="rounded bg-neutral-100 p-3 dark:bg-neutral-800">
                Price: ₱{{ number_format($course->price, 2) }}
            </div>
        </div>

        @if($isEnrolled)

            <div class="mt-6 rounded-lg bg-green-100 p-4 text-green-700 dark:bg-green-500/10 dark:text-green-400">
                ✓ You are already enrolled in this course.
            </div>

            <a href="{{ route('student.learn.course', $course) }}"
               class="mt-4 inline-block rounded-lg bg-gradient-to-r from-purple-500 to-indigo-600 px-5 py-2 text-white transition hover:opacity-90">
                Continue Learning
            </a>

        @elseif($pendingTransaction)

            <div class="mt-6 rounded-lg bg-yellow-100 p-4 text-yellow-700 dark:bg-yellow-500/10 dark:text-yellow-400">
                ⏳ You already have a pending payment for this course.
            </div>

            <a href="{{ route('student.transactions.show', $pendingTransaction) }}"
               class="mt-4 inline-block rounded-lg bg-yellow-600 px-5 py-2 text-white transition hover:bg-yellow-700">
                View Pending Transaction
            </a>

        @elseif($course->price > 0)

            <div class="mt-6 rounded-lg border border-orange-500 bg-orange-50 p-4 text-orange-700 dark:bg-orange-950/30 dark:text-orange-400">
                This is a paid course. Please purchase the course and upload your proof of payment for admin verification.
            </div>

            <form action="{{ route('student.transactions.store', $course) }}"
                  method="POST"
                  class="mt-4">
                @csrf

                <button class="rounded-lg bg-gradient-to-r from-purple-500 to-indigo-600 px-5 py-2 text-white transition hover:opacity-90">
                    Purchase Course
                </button>
            </form>

        @else

            <form action="{{ route('student.enroll', $course) }}"
                  method="POST"
                  class="mt-6">
                @csrf

                <button class="rounded-lg bg-green-600 px-5 py-2 text-white transition hover:bg-green-700">
                    Enroll for Free
                </button>
            </form>

        @endif

    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <h2 class="text-xl font-bold mb-4">
            Course Lessons
        </h2>

        @forelse($course->lessons as $lesson)
            <div class="rounded bg-neutral-100 p-3 mb-2 dark:bg-neutral-800">
                <div class="flex justify-between items-center">
                    <span>
                        {{ $lesson->lesson_order }}.
                        {{ $lesson->title }}
                    </span>

                    @if($lesson->is_preview)
                        <span class="text-xs bg-purple-600 text-white px-2 py-1 rounded">
                            Preview
                        </span>
                    @endif
                </div>
            </div>
        @empty
            <p class="text-sm text-gray-500">
                No lessons added yet.
            </p>
        @endforelse

    </div>

</div>

</x-layouts::app>