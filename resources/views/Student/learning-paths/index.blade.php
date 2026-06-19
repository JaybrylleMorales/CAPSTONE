<x-layouts::app :title="'Learning Paths'">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Learning Paths
        </h1>

        <p class="text-gray-500">
            Follow a structured learning journey.
        </p>
    </div>

    <div class="grid gap-4">

        @forelse($learningPaths as $path)

            <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

                <h2 class="text-xl font-bold">
                    {{ $path->name }}
                </h2>

                <p class="mt-2 text-gray-500">
                    {{ $path->description }}
                </p>

                <p class="mt-4 text-sm">
                    Courses Included:
                    <strong>{{ $path->courses->count() }}</strong>
                </p>

                <a href="{{ route('student.learning-paths.show', $path) }}"
                   class="inline-block mt-4 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                    View Learning Path
                </a>

            </div>

        @empty

            <div class="rounded-xl border p-6">
                No learning paths available.
            </div>

        @endforelse

    </div>

</div>

</x-layouts::app>