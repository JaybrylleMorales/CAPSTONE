<x-layouts::app :title="__('Reports & Analytics')">
    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-white">Reports & Analytics</h1>
            <p class="mt-1 text-sm text-zinc-400">
                Overview of PathWise platform performance, learning activity, and completion trends.
            </p>
        </div>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Students</p>
                <h2 class="mt-2 text-3xl font-bold text-white">{{ $totalStudents }}</h2>
                <p class="mt-1 text-xs text-zinc-500">Registered learners</p>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Total Teachers</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">{{ $totalTeachers }}</h2>
                <p class="mt-1 text-xs text-zinc-500">Active instructors</p>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-blue-300">Total Courses</p>
                <h2 class="mt-2 text-3xl font-bold text-blue-400">{{ $totalCourses }}</h2>
                <p class="mt-1 text-xs text-zinc-500">Learning programs</p>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Completion Rate</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400">{{ $completionRate }}%</h2>
                <p class="mt-1 text-xs text-zinc-500">Completed enrollments</p>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-white">{{ $totalEnrollments }}</h2>
            </div>

            <div class="rounded-2xl border border-yellow-800/40 bg-yellow-950/30 p-5">
                <p class="text-sm text-yellow-300">Active Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-yellow-400">{{ $activeEnrollments }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Completed</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400">{{ $completedEnrollments }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Certificates Issued</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">{{ $certificatesIssued }}</h2>
            </div>
        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-5 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <p class="text-sm text-zinc-400">Assessment Activity</p>
                    <h2 class="mt-2 text-3xl font-bold text-white">{{ $quizAttempts }}</h2>
                    <p class="mt-1 text-xs text-zinc-500">
                        Total quiz attempts submitted by students.
                    </p>
                </div>

                <div class="w-full md:w-1/2">
                    <div class="flex justify-between text-sm">
                        <span class="text-zinc-400">Completion Progress</span>
                        <span class="font-semibold text-white">{{ $completionRate }}%</span>
                    </div>

                    <div class="mt-2 h-2 rounded-full bg-zinc-800">
                        <div class="h-2 rounded-full bg-emerald-500"
                             style="width: {{ min($completionRate, 100) }}%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-4 lg:grid-cols-2">

            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 shadow-lg shadow-purple-950/10">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-white">Popular Courses</h2>
                    <p class="text-sm text-zinc-400">Courses ranked by enrollment count.</p>
                </div>

                <div class="space-y-3">
                    @forelse($popularCourses as $course)
                        <div class="flex items-center justify-between rounded-xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <div>
                                <p class="font-semibold text-white">{{ $course->title }}</p>
                                <p class="text-xs text-zinc-500">Course enrollment performance</p>
                            </div>

                            <span class="rounded-full bg-purple-500/15 px-3 py-1 text-xs font-semibold text-purple-400">
                                {{ $course->enrollments_count }} enrollments
                            </span>
                        </div>
                    @empty
                        <div class="rounded-xl border border-zinc-800 bg-zinc-950/50 p-6 text-center text-zinc-400">
                            No courses found.
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 shadow-lg shadow-purple-950/10">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-white">Recent Quiz Results</h2>
                    <p class="text-sm text-zinc-400">Latest student assessment submissions.</p>
                </div>

                <div class="space-y-3">
                    @forelse($recentQuizResults as $result)
                        @php
                            $isPassed = strtolower($result->remarks) === 'passed';
                        @endphp

                        <div class="flex items-center justify-between rounded-xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <div>
                                <p class="font-semibold text-white">
                                    {{ $result->student->name ?? 'N/A' }}
                                </p>
                                <p class="text-sm text-zinc-400">
                                    {{ $result->quiz->title ?? 'N/A' }}
                                </p>
                            </div>

                            <div class="text-right">
                                <p class="font-bold text-white">
                                    {{ number_format($result->percentage, 2) }}%
                                </p>

                                @if($isPassed)
                                    <span class="text-xs font-semibold text-emerald-400">Passed</span>
                                @else
                                    <span class="text-xs font-semibold text-red-400">Failed</span>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="rounded-xl border border-zinc-800 bg-zinc-950/50 p-6 text-center text-zinc-400">
                            No quiz results found.
                        </div>
                    @endforelse
                </div>
            </div>

        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 p-6 shadow-lg shadow-purple-950/10">
            <div class="mb-4">
                <h2 class="text-lg font-bold text-white">Recent Certificates</h2>
                <p class="text-sm text-zinc-400">
                    Recently issued course completion certificates.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
                        <tr>
                            <th class="px-6 py-4">Certificate No.</th>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Issued Date</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        @forelse($recentCertificates as $certificate)
                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4 font-semibold text-white">
                                    {{ $certificate->certificate_number }}
                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    {{ $certificate->student->name ?? 'N/A' }}
                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    {{ $certificate->course->title ?? 'N/A' }}
                                </td>

                                <td class="px-6 py-4 text-zinc-400">
                                    {{ $certificate->issued_date }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-16 text-center text-zinc-400">
                                    No certificates found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts::app>