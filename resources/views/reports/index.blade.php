<x-layouts::app :title="'Reports & Analytics'">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Reports & Analytics Dashboard
        </h1>

        <p class="text-gray-500">
            Overview of PathWise system performance and learning activity.
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-4">
        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Total Students</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $totalStudents }}</h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Total Teachers</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $totalTeachers }}</h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Total Courses</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $totalCourses }}</h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Completion Rate</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $completionRate }}%</h2>
        </div>
    </div>

    <div class="grid gap-4 md:grid-cols-4">
        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Total Enrollments</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $totalEnrollments }}</h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Active Enrollments</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $activeEnrollments }}</h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Completed Enrollments</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $completedEnrollments }}</h2>
        </div>

        <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <p class="text-sm text-gray-500">Certificates Issued</p>
            <h2 class="mt-2 text-3xl font-bold">{{ $certificatesIssued }}</h2>
        </div>
    </div>

    <div class="rounded-xl border bg-white p-5 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <p class="text-sm text-gray-500">Quiz Attempts</p>
        <h2 class="mt-2 text-3xl font-bold">{{ $quizAttempts }}</h2>
    </div>

    <div class="grid gap-4 lg:grid-cols-2">

        <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <h2 class="text-lg font-bold mb-4">
                Popular Courses
            </h2>

            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="p-3 text-left">Course</th>
                        <th class="p-3 text-left">Enrollments</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($popularCourses as $course)
                        <tr class="border-b">
                            <td class="p-3">{{ $course->title }}</td>
                            <td class="p-3">{{ $course->enrollments_count }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="p-4 text-center">
                                No courses found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <h2 class="text-lg font-bold mb-4">
                Recent Quiz Results
            </h2>

            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="p-3 text-left">Student</th>
                        <th class="p-3 text-left">Quiz</th>
                        <th class="p-3 text-left">Score</th>
                        <th class="p-3 text-left">Remarks</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($recentQuizResults as $result)
                        <tr class="border-b">
                            <td class="p-3">{{ $result->student->name ?? 'N/A' }}</td>
                            <td class="p-3">{{ $result->quiz->title ?? 'N/A' }}</td>
                            <td class="p-3">{{ $result->percentage }}%</td>
                            <td class="p-3">{{ ucfirst($result->remarks) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-4 text-center">
                                No quiz results found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <h2 class="text-lg font-bold mb-4">
            Recent Certificates
        </h2>

        <table class="w-full">
            <thead>
                <tr class="border-b">
                    <th class="p-3 text-left">Certificate No.</th>
                    <th class="p-3 text-left">Student</th>
                    <th class="p-3 text-left">Course</th>
                    <th class="p-3 text-left">Issued Date</th>
                </tr>
            </thead>

            <tbody>
                @forelse($recentCertificates as $certificate)
                    <tr class="border-b">
                        <td class="p-3">{{ $certificate->certificate_number }}</td>
                        <td class="p-3">{{ $certificate->student->name ?? 'N/A' }}</td>
                        <td class="p-3">{{ $certificate->course->title ?? 'N/A' }}</td>
                        <td class="p-3">{{ $certificate->issued_date }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-4 text-center">
                            No certificates found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

</x-layouts::app>