<x-layouts::app :title="__('Quiz Results')">
    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white">Quiz Results</h1>
                <p class="mt-1 text-sm text-zinc-300">
                    Monitor student quiz performance and assessment outcomes.
                </p>
            </div>

            <a href="{{ route('teacher.quiz-results.create') }}"
               class="rounded-xl bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700">
                Add Result
            </a>
        </div>

        @php
            $totalResults = $results->count();
            $passedResults = $results->where('remarks', 'passed')->count();
            $failedResults = $results->where('remarks', 'failed')->count();
            $averagePercentage = $totalResults > 0 ? $results->avg('percentage') : 0;
        @endphp

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900 p-5">
                <p class="text-sm text-zinc-400">Total Results</p>
                <h2 class="mt-2 text-3xl font-bold text-white">{{ $totalResults }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950 p-5">
                <p class="text-sm text-emerald-300">Passed</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400">{{ $passedResults }}</h2>
            </div>

            <div class="rounded-2xl border border-red-800/40 bg-red-950 p-5">
                <p class="text-sm text-red-300">Failed</p>
                <h2 class="mt-2 text-3xl font-bold text-red-400">{{ $failedResults }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950 p-5">
                <p class="text-sm text-purple-300">Average Score</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">
                    {{ number_format($averagePercentage, 2) }}%
                </h2>
            </div>
        </div>

        @if(session('success'))
            <div class="rounded-xl border border-emerald-700/40 bg-emerald-950/40 px-4 py-3 text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900 shadow-lg shadow-purple-950/10">
            <div class="flex items-center justify-between border-b border-zinc-800 px-6 py-4">
                <div>
                    <h2 class="text-lg font-semibold text-white">Assessment Records</h2>
                    <p class="text-sm text-emerald-400">Latest quiz attempts submitted by students.</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Quiz</th>
                            <th class="px-6 py-4">Score</th>
                            <th class="px-6 py-4">Performance</th>
                            <th class="px-6 py-4">Remarks</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        @forelse($results as $result)
                            @php
                                $percentage = $result->percentage ?? 0;
                                $isPassed = strtolower($result->remarks) === 'passed';
                            @endphp

                            <tr class="hover:bg-zinc-800">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-purple-600/20 text-sm font-bold text-purple-300">
                                            {{ strtoupper(substr($result->student->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="font-semibold text-white">{{ $result->student->name }}</p>
                                            <p class="text-xs text-zinc-400">Student</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-200">
                                    {{ $result->quiz->title }}
                                </td>

                                <td class="px-6 py-4">
                                    <span class="font-semibold text-white">
                                        {{ $result->score }}/{{ $result->total_items }}
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="h-2 w-32 rounded-full bg-zinc-700">
                                            <div class="h-2 rounded-full {{ $isPassed ? 'bg-emerald-500' : 'bg-red-500' }}"
                                                 style="width: {{ min($percentage, 100) }}%">
                                            </div>
                                        </div>
                                        <span class="text-sm font-semibold text-zinc-300">
                                            {{ number_format($percentage, 2) }}%
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    @if($isPassed)
                                        <span class="rounded-full border border-emerald-500/30 bg-emerald-500/20 px-3 py-1 text-xs font-semibold text-emerald-300">
                                            Passed
                                        </span>
                                    @else
                                        <span class="rounded-full border border-red-500/30 bg-red-500/20 px-3 py-1 text-xs font-semibold text-red-300">
                                            Failed
                                        </span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('quiz-results.edit', $result) }}"
                                       class="mr-3 text-sm font-medium text-blue-400 hover:text-blue-300">
                                        Edit
                                    </a>

                                    <form action="{{ route('quiz-results.destroy', $result) }}"
                                          method="POST"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')

                                        <button onclick="return confirm('Delete this result?')"
                                                class="text-sm font-medium text-red-400 hover:text-red-300">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-16 text-center">
                                    <div class="mx-auto flex max-w-sm flex-col items-center">
                                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-purple-600/20 text-purple-300">
                                            📊
                                        </div>
                                        <h3 class="text-lg font-semibold text-white">No quiz results yet</h3>
                                        <p class="mt-1 text-sm text-zinc-300">
                                            Quiz results will appear here once students submit their quizzes.
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts::app>