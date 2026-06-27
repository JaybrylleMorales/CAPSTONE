<x-layouts::app :title="__('Quizzes')">
    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white">Quizzes</h1>
                <p class="mt-1 text-sm text-zinc-400">
                    Manage course assessments, passing scores, and question coverage.
                </p>
            </div>

            <a href="{{ route('quizzes.create') }}"
               class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                Add Quiz
            </a>
        </div>

        @php
            $totalQuizzes = $quizzes->count();
            $publishedQuizzes = $quizzes->where('is_published', true)->count();
            $totalQuestions = $quizzes->sum(fn ($quiz) => $quiz->questions->count());
            $averagePassingScore = $totalQuizzes > 0 ? round($quizzes->avg('passing_score'), 2) : 0;
        @endphp

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Quizzes</p>
                <h2 class="mt-2 text-3xl font-bold text-white">{{ $totalQuizzes }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Published</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400">{{ $publishedQuizzes }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Question Bank</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">{{ $totalQuestions }}</h2>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-blue-300">Avg. Passing Score</p>
                <h2 class="mt-2 text-3xl font-bold text-blue-400">{{ $averagePassingScore }}%</h2>
            </div>
        </div>

        @if(session('success'))
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-3 border-b border-zinc-800 px-6 py-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-white">Assessment Directory</h2>
                    <p class="text-sm text-zinc-400">
                        All quizzes connected to PathWise courses.
                    </p>
                </div>

                <div class="rounded-xl border border-purple-500/30 bg-purple-500/10 px-4 py-2 text-sm font-semibold text-purple-300">
                    {{ $totalQuestions }} total questions
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Quiz</th>
                            <th class="px-6 py-4">Questions</th>
                            <th class="px-6 py-4">Passing Score</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        @forelse($quizzes as $quiz)
                            @php
                                $questionCount = $quiz->questions->count();
                            @endphp

                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-purple-600 to-indigo-600 text-sm font-bold text-white">
                                            {{ strtoupper(substr($quiz->course->title ?? 'C', 0, 1)) }}
                                        </div>

                                        <div>
                                            <p class="font-semibold text-white">
                                                {{ $quiz->course->title ?? 'No Course' }}
                                            </p>
                                            <p class="text-xs text-zinc-500">
                                                Course assessment
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <p class="font-semibold text-white">
                                        {{ $quiz->title }}
                                    </p>

                                    @if($quiz->description)
                                        <p class="mt-1 max-w-md truncate text-xs text-zinc-500">
                                            {{ $quiz->description }}
                                        </p>
                                    @else
                                        <p class="mt-1 text-xs text-zinc-500">
                                            Final assessment
                                        </p>
                                    @endif
                                </td>

                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-purple-500/15 px-3 py-1 text-xs font-semibold text-purple-400">
                                        {{ $questionCount }} question{{ $questionCount !== 1 ? 's' : '' }}
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="h-2 w-24 rounded-full bg-zinc-800">
                                            <div class="h-2 rounded-full bg-emerald-500"
                                                 style="width: {{ min($quiz->passing_score, 100) }}%">
                                            </div>
                                        </div>

                                        <span class="font-semibold text-zinc-300">
                                            {{ $quiz->passing_score }}%
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    @if($quiz->is_published)
                                        <span class="rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold text-emerald-400">
                                            Published
                                        </span>
                                    @else
                                        <span class="rounded-full bg-zinc-500/15 px-3 py-1 text-xs font-semibold text-zinc-400">
                                            Draft
                                        </span>
                                    @endif
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('quizzes.edit', $quiz) }}"
                                           class="rounded-lg bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-blue-700">
                                            Edit
                                        </a>

                                        <form action="{{ route('quizzes.destroy', $quiz) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                onclick="return confirm('Delete this quiz?')"
                                                class="rounded-lg bg-red-700 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-800">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-16 text-center">
                                    <h3 class="text-lg font-semibold text-white">
                                        No quizzes found
                                    </h3>
                                    <p class="mt-1 text-sm text-zinc-400">
                                        Create your first course assessment to start tracking learner performance.
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts::app>