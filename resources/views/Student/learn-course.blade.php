<x-layouts::app :title="$course->title">

<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold">
            {{ $course->title }}
        </h1>

        <p class="text-gray-500">
            Course Learning Page
        </p>
    </div>

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