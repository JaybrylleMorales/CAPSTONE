<x-layouts::app :title="__('Lessons')">
    <div class="space-y-6">
        <div>
            <h1 class="text-3xl font-bold text-white">Lessons</h1>
            <p class="mt-1 text-sm text-zinc-400">
                Manage lessons by selecting a course below.
            </p>
        </div>

        <div class="grid gap-5 xl:grid-cols-2">
            @forelse($courses as $course)
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6">
                    <h2 class="text-xl font-bold text-white">{{ $course->title }}</h2>
                    <p class="mt-1 text-sm text-zinc-400">
                        {{ $course->lessons->count() }} lessons
                    </p>

                    <a href="{{ route('teacher.lessons', $course) }}"
                       class="mt-5 inline-block rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                        Manage Lessons
                    </a>
                </div>
            @empty
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 text-zinc-400">
                    No courses found.
                </div>
            @endforelse
        </div>
    </div>
</x-layouts::app>