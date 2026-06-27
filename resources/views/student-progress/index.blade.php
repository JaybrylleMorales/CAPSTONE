<x-layouts::app :title="__('Student Progress')">
    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-white">Student Progress Tracker</h1>
            <p class="mt-1 text-sm text-zinc-400">
                Monitor student enrollments and course completion status.
            </p>
        </div>

        @php
            $totalEnrollments = $enrollments->count();
            $completed = $enrollments->where('status', 'completed')->count();
            $active = $enrollments->where('status', 'active')->count();
            $averageProgress = $totalEnrollments > 0 ? $enrollments->avg('progress_percentage') : 0;
        @endphp

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-white">{{ $totalEnrollments }}</h2>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-blue-300">Active</p>
                <h2 class="mt-2 text-3xl font-bold text-blue-400">{{ $active }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Completed</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400">{{ $completed }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Average Progress</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">
                    {{ number_format($averageProgress, 2) }}%
                </h2>
            </div>
        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 shadow-lg shadow-purple-950/10">
            <div class="border-b border-zinc-800 px-6 py-4">
                <h2 class="text-lg font-semibold text-white">Enrollment Progress</h2>
                <p class="text-sm text-zinc-400">
                    Overview of each student’s progress per course.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Progress</th>
                            <th class="px-6 py-4">Status</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        @forelse($enrollments as $enrollment)
                            @php
                                $progress = $enrollment->progress_percentage ?? 0;
                                $status = strtolower($enrollment->status ?? 'active');
                                $isCompleted = $status === 'completed';
                            @endphp

                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-purple-600/20 text-sm font-bold text-purple-300">
                                            {{ strtoupper(substr($enrollment->student->name ?? 'S', 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="font-semibold text-white">
                                                {{ $enrollment->student->name ?? 'Student' }}
                                            </p>
                                            <p class="text-xs text-zinc-500">Learner</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-200">
                                    {{ $enrollment->course->title ?? 'Course' }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="h-2 w-40 rounded-full bg-zinc-800">
                                            <div class="h-2 rounded-full {{ $isCompleted ? 'bg-emerald-500' : 'bg-blue-500' }}"
                                                 style="width: {{ min($progress, 100) }}%">
                                            </div>
                                        </div>

                                        <span class="font-semibold text-zinc-300">
                                            {{ number_format($progress, 2) }}%
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    @if($isCompleted)
                                        <span class="rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold text-emerald-400">
                                            Completed
                                        </span>
                                    @else
                                        <span class="rounded-full bg-blue-500/15 px-3 py-1 text-xs font-semibold text-blue-400">
                                            Active
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-16 text-center">
                                    <h3 class="text-lg font-semibold text-white">No student progress yet</h3>
                                    <p class="mt-1 text-sm text-zinc-400">
                                        Student progress will appear once students enroll in courses.
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