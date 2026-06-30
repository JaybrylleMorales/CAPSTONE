<x-layouts::app :title="__('Reports & Analytics')">
    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-dark">Reports & Analytics</h1>
            <p class="mt-1 text-sm text-zinc-700">
                Overview of PathWise platform performance, learning activity, and completion trends.
            </p>
        </div>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-300 bg-zinc-600/70 p-5">
                <p class="text-sm text-zinc-900">Total Students</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $totalStudents }}</h2>
                <p class="mt-1 text-xs text-zinc-900">Registered learners</p>
            </div>

            <div class="rounded-2xl border border-purple-500/40 bg-purple-700/30 p-5">
                <p class="text-sm text-dark">Total Teachers</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $totalTeachers }}</h2>
                <p class="mt-1 text-xs text-zinc-900">Active instructors</p>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-black">Total Courses</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $totalCourses }}</h2>
                <p class="mt-1 text-xs text-zinc-900">Learning programs</p>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-black">Completion Rate</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $completionRate }}%</h2>
                <p class="mt-1 text-xs text-zinc-900">Completed enrollments</p>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-600/70 p-5">
                <p class="text-sm text-black">Total Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $totalEnrollments }}</h2>
            </div>

            <div class="rounded-2xl border border-yellow-800/40 bg-yellow-950/30 p-5">
                <p class="text-sm text-black">Active Enrollments</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $activeEnrollments }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-black">Completed</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $completedEnrollments }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-black">Certificates Issued</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $certificatesIssued }}</h2>
            </div>
        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-500/60 p-5 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <p class="text-sm text-black">Assessment Activity</p>
                    <h2 class="mt-2 text-3xl font-bold text-black">{{ $quizAttempts }}</h2>
                    <p class="mt-1 text-xs text-zinc-900">
                        Total quiz attempts submitted by students.
                    </p>
                </div>

                <div class="w-full md:w-1/2">
                    <div class="flex justify-between text-sm">
                        <span class="text-zinc-900">Completion Progress</span>
                        <span class="font-semibold text-black">{{ $completionRate }}%</span>
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

            <div class="rounded-2xl border border-zinc-800 bg-zinc-300/60 p-6 shadow-lg shadow-purple-950/10">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-black">Popular Courses</h2>
                    <p class="text-sm text-zinc-900">Courses ranked by enrollment count.</p>
                </div>

                <div class="space-y-3">
                    @forelse($popularCourses as $course)
                        <div class="flex items-center justify-between rounded-xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <div>
                                <p class="font-semibold text-white">{{ $course->title }}</p>
                                <p class="text-xs text-zinc-500">Course enrollment performance</p>
                            </div>

                            <span class="rounded-full bg-black px-3 py-1 text-xs font-semibold text-emerald-500">
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

            <div class="rounded-2xl border border-zinc-800 bg-zinc-500/60 p-6 shadow-lg shadow-purple-950/10">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-black">Recent Quiz Results</h2>
                    <p class="text-sm text-zinc-900">Latest student assessment submissions.</p>
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

        <div class="rounded-2xl border border-zinc-800 bg-zinc-500/60 p-6 shadow-lg shadow-purple-950/10">
            <div class="mb-4">
                <h2 class="text-lg font-bold text-black">Recent Certificates</h2>
                <p class="text-sm text-zinc-900">
                    Recently issued course completion certificates.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-white">
                        <tr>
                            <th class="px-6 py-4">Certificate No.</th>
                            <th class="px-6 py-4">Student</th>
                            <th class="px-6 py-4">Course</th>
                            <th class="px-6 py-4">Issued Date</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-900">
                        @forelse($recentCertificates as $certificate)
                            <tr class="hover:bg-white/3">
                                <td class="px-6 py-4 font-semibold text-zinc-900">
                                    {{ $certificate->certificate_number }}
                                </td>

                                <td class="px-6 py-4 text-zinc-900">
                                    {{ $certificate->student->name ?? 'N/A' }}
                                </td>

                                <td class="px-6 py-4 text-zinc-900">
                                    {{ $certificate->course->title ?? 'N/A' }}
                                </td>

                                <td class="px-6 py-4 text-zinc-900">
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