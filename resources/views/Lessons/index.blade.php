<x-layouts::app :title="__('Lessons')">
    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-black">Lessons</h1>
                <p class="mt-1 text-sm text-zinc-900">
                    Manage course lessons, content type, and lesson order.
                </p>
            </div>

            <a href="{{ route('lessons.create') }}"
               class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                Add Lesson
            </a>
        </div>

        @php
            $totalLessons = $lessons->count();
            $textLessons = $lessons->where('lesson_type', 'text')->count();
            $videoLessons = $lessons->where('lesson_type', 'video')->count();
            $courseCount = $lessons->pluck('course_id')->unique()->count();
            $groupedLessons = $lessons->groupBy(fn ($lesson) => $lesson->course->title ?? 'No Course');
        @endphp

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-600/70 p-5">
                <p class="text-sm text-black">Total Lessons</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $totalLessons }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-black">Courses Covered</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $courseCount }}</h2>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-black">Text Lessons</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $textLessons }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-black">Video Lessons</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $videoLessons }}</h2>
            </div>
        </div>

        @if(session('success'))
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid gap-5">
            @forelse($groupedLessons as $courseTitle => $courseLessons)
                <div class="rounded-2xl border border-zinc-800 bg-zinc-600/60 p-6 shadow-lg shadow-purple-950/10">

                    <div class="flex flex-col gap-3 border-b border-zinc-800 pb-4 md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-linear-to-br from-purple-600 to-indigo-600 text-sm font-bold text-white">
                                {{ strtoupper(substr($courseTitle, 0, 1)) }}
                            </div>

                            <div>
                                <h2 class="text-lg font-bold text-black">
                                    {{ $courseTitle }}
                                </h2>
                                <p class="text-sm text-zinc-900">
                                    {{ $courseLessons->count() }} lesson{{ $courseLessons->count() > 1 ? 's' : '' }}
                                </p>
                            </div>
                        </div>

                        <span class="rounded-full bg-black px-3 py-1 text-xs font-semibold text-white">
                            Course Lessons
                        </span>
                    </div>

                    <div class="mt-4 space-y-3">
                        @foreach($courseLessons->sortBy('lesson_order') as $lesson)
                            @php
                                $type = strtolower($lesson->lesson_type);

                                $typeClass = match ($type) {
                                    'video' => 'bg-black text-white',
                                    'text' => 'bg-black text-white',
                                    'document' => 'bg-black text-white',
                                    'quiz' => 'bg-black text-white',
                                    default => 'bg-black text-white',
                                };
                            @endphp

                            <div class="flex flex-col gap-3 rounded-xl border border-zinc-800 bg-zinc-500 p-4 md:flex-row md:items-center md:justify-between">
                                <div class="flex items-start gap-3">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-zinc-800 text-sm font-bold text-zinc-300">
                                        {{ $lesson->lesson_order }}
                                    </div>

                                    <div>
                                        <h3 class="font-semibold text-white">
                                            {{ $lesson->title }}
                                        </h3>

                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $typeClass }}">
                                                {{ ucfirst($lesson->lesson_type) }}
                                            </span>

                                            @if($lesson->duration_minutes)
                                                <span class="rounded-full bg-black px-3 py-1 text-xs font-semibold text-white">
                                                    {{ $lesson->duration_minutes }} mins
                                                </span>
                                            @endif

                                            @if($lesson->is_preview)
                                                <span class="rounded-full bg-black px-3 py-1 text-xs font-semibold text-white">
                                                    Preview
                                                </span>
                                            @endif

                                            @if($lesson->is_published)
                                                <span class="rounded-full bg-black px-3 py-1 text-xs font-semibold text-white">
                                                    Published
                                                </span>
                                            @else
                                                <span class="rounded-full bg-zinc-500/15 px-3 py-1 text-xs font-semibold text-zinc-400">
                                                    Draft
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="flex shrink-0 gap-2">
                                    <a href="{{ route('lessons.edit', $lesson) }}"
                                       class="rounded-lg bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-blue-700">
                                        Edit
                                    </a>

                                    <form action="{{ route('lessons.destroy', $lesson) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            onclick="return confirm('Delete this lesson?')"
                                            class="rounded-lg bg-red-700 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-800">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            @empty
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 px-6 py-16 text-center">
                    <h3 class="text-lg font-semibold text-white">No lessons found</h3>
                    <p class="mt-1 text-sm text-zinc-400">
                        Lessons will appear here once they are created.
                    </p>
                </div>
            @endforelse
        </div>

    </div>
</x-layouts::app>