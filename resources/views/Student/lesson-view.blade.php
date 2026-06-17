<x-layouts::app :title="$lesson->title">

<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold">
            {{ $lesson->title }}
        </h1>

        <p class="text-gray-500">
            {{ $lesson->course->title }}
        </p>
    </div>

    @if(session('success'))
        <div class="rounded bg-green-600 p-4 text-white">
            {{ session('success') }}
        </div>
    @endif

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <div class="prose dark:prose-invert max-w-none">
            {{ $lesson->content ?? 'No lesson content available.' }}
        </div>

        <div class="mt-6">
            @if($progress->status === 'completed')
                <div class="rounded bg-green-100 p-4 text-green-700">
                    ✓ Lesson completed
                </div>
            @else
                <form action="{{ route('student.lesson.complete', $lesson) }}"
                      method="POST">
                    @csrf

                    <button class="rounded bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">
                        Mark as Complete
                    </button>
                </form>
            @endif
        </div>
    </div>

    <a href="{{ route('student.learn.course', $lesson->course) }}"
       class="inline-block text-blue-600">
        ← Back to Course Lessons
    </a>

</div>

</x-layouts::app>