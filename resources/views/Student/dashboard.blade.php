<x-layouts::app :title="'Student Dashboard'">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            Welcome back, {{ auth()->user()->name }}
        </h1>
        <p class="text-sm text-gray-600 dark:text-gray-400">
            Continue your learning journey with PathWise.
        </p>
    </div>

    <div class="flex gap-3">
        <a href="{{ route('student.marketplace') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Browse Courses
        </a>
        <a href="{{ route('student.learning-paths') }}"
           class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">
            Learning Paths
        </a>
        <a href="{{ route('student.my-courses') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            My Courses
        </a>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Courses Enrolled</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $enrollments->count() }}</h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Quizzes Taken</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $quizzesTaken }}</h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Certificates Earned</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $certificatesEarned }}</h2>
        </div>
    </div>

    <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <h3 class="text-lg font-semibold mb-4">
            AI Recommended For You
        </h3>

        @forelse($recommendedCourses as $recommendation)
            <div class="rounded-lg bg-neutral-100 p-4 mb-3 dark:bg-neutral-800">
                <h4 class="font-semibold">
                    {{ $recommendation->course->title ?? 'Course unavailable' }}
                </h4>

                <p class="text-sm mt-1">
                    Confidence Score: {{ $recommendation->recommendation_score }}%
                </p>

                <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                    {{ $recommendation->reason }}
                </p>
            </div>
        @empty
            <p class="text-sm text-gray-500">
                No AI recommendations yet.
            </p>
        @endforelse
    </div>

    <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <h3 class="text-lg font-semibold mb-4">
            Continue Learning
        </h3>

        @forelse($enrollments as $enrollment)
            <div class="rounded-lg bg-neutral-100 p-4 mb-3 dark:bg-neutral-800">
                <div class="flex justify-between">
                    <h4 class="font-semibold">
                        {{ $enrollment->course->title ?? 'Course unavailable' }}
                    </h4>

                    <span class="text-sm">
                        {{ $enrollment->progress_percentage }}%
                    </span>
                </div>

                <div class="mt-3 h-2 w-full rounded bg-gray-300">
                    <div class="h-2 rounded bg-blue-600"
                         style="width: {{ $enrollment->progress_percentage }}%">
                    </div>
                </div>

                <p class="text-sm text-gray-500 mt-2">
                    Status: {{ ucfirst($enrollment->status) }}
                </p>
            </div>
        @empty
            <p class="text-sm text-gray-500 mt-2">
    Status: {{ ucfirst($enrollment->status) }}
</p>

@if($enrollment->status === 'completed')

    <a href="{{ route('student.certificates') }}"
       class="mt-3 inline-block px-3 py-2 bg-green-600 hover:bg-green-700 text-white rounded text-sm">
        View Certificate
    </a>

@else

    <a href="{{ route('student.learn.course', $enrollment->course) }}"
       class="mt-3 inline-block px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded text-sm">
        Continue Learning
    </a>

@endif
        @endforelse
    </div>

</div>

</x-layouts::app>