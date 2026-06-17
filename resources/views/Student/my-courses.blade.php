<x-layouts::app :title="'My Courses'">

<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold text-white">
            My Courses
        </h1>

        <p class="text-gray-400">
            Continue your learning journey with PathWise.
        </p>
    </div>

    @if(session('success'))
        <div class="rounded-lg bg-green-600 text-white p-4">
            {{ session('success') }}
        </div>
    @endif

    @forelse($enrollments as $enrollment)

        <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

            <div class="flex justify-between items-start">

                <div>
                    <h2 class="text-xl font-bold">
                        {{ $enrollment->course->title }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Status:
                        <span class="font-semibold">
                            {{ ucfirst($enrollment->status) }}
                        </span>
                    </p>
                </div>

                <span class="text-sm px-3 py-1 rounded bg-blue-600 text-white">
                    {{ number_format($enrollment->progress_percentage, 0) }}%
                </span>

            </div>

            <div class="mt-4">

                <div class="w-full bg-gray-700 rounded-full h-3">

                    <div
                        class="bg-green-500 h-3 rounded-full"
                        style="width: {{ $enrollment->progress_percentage }}%">
                    </div>

                </div>

            </div>

            <div class="mt-4 text-sm text-gray-400">

                Enrolled:
                {{ optional($enrollment->enrolled_at)->format('M d, Y') ?? 'N/A' }}

            </div>

            <div class="mt-5">

                <a href="{{ route('student.learn.course', $enrollment->course) }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">

                    Continue Learning

                </a>

            </div>

        </div>

    @empty

        <div class="rounded-xl border p-8 text-center dark:border-neutral-700">

            <h2 class="text-xl font-semibold">
                No Enrolled Courses Yet
            </h2>

            <p class="text-gray-500 mt-2">
                Browse the marketplace and enroll in your first course.
            </p>

            <a href="{{ route('student.marketplace') }}"
               class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded">

                Browse Courses

            </a>

        </div>

    @endforelse

</div>

</x-layouts::app>