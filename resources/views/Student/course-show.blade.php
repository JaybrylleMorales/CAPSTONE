<x-layouts::app :title="$course->title">

@php
    $isEnrolled = \App\Models\Enrollment::where('student_id', auth()->id())
        ->where('course_id', $course->id)
        ->exists();
@endphp

<div class="space-y-6">

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
            <div class="mt-6 rounded-lg bg-green-100 p-4 text-green-700">
                ✓ You are already enrolled in this course.
            </div>

            <a href="{{ route('student.learn.course', $course) }}"
               class="mt-4 inline-block rounded bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">
                Continue Learning
            </a>
        @else
            <form action="{{ route('student.enroll', $course) }}"
                  method="POST"
                  class="mt-6">
                @csrf

                <button class="rounded bg-green-600 px-5 py-2 text-white hover:bg-green-700">
                    Enroll Now
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
                        <span class="text-xs bg-blue-600 text-white px-2 py-1 rounded">
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