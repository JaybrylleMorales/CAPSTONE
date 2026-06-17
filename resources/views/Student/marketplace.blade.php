<x-layouts::app :title="'Course Marketplace'">

<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            Course Marketplace
        </h1>
        <p class="text-sm text-gray-600 dark:text-gray-400">
            Browse available courses and start learning with PathWise.
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        @forelse($courses as $course)
            <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
                <p class="text-xs uppercase text-gray-500">
                    {{ $course->category->name ?? 'No Category' }}
                </p>

                <h2 class="mt-2 text-lg font-bold">
                    {{ $course->title }}
                </h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    {{ Str::limit($course->description, 100) }}
                </p>

                <div class="mt-4 text-sm">
                    <p>Level: {{ ucfirst($course->difficulty_level) }}</p>
                    <p>Hours: {{ $course->estimated_hours ?? 'N/A' }}</p>
                    <p>Price: ₱{{ number_format($course->price, 2) }}</p>
                </div>

                <a href="{{ route('student.course.show', $course) }}"
                   class="mt-4 inline-block rounded bg-blue-600 px-4 py-2 text-sm text-white">
                    View Course
                </a>
            </div>
        @empty
            <p class="text-sm text-gray-500">
                No published courses available.
            </p>
        @endforelse
    </div>
</div>

</x-layouts::app>