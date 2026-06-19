<x-layouts::app :title="'Student Progress Tracker'">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Student Progress Tracker
        </h1>

        <p class="text-gray-500">
            Monitor student enrollments and completion status.
        </p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <table class="w-full">

            <thead>
                <tr class="border-b">

                    <th class="text-left p-3">
                        Student
                    </th>

                    <th class="text-left p-3">
                        Course
                    </th>

                    <th class="text-left p-3">
                        Progress
                    </th>

                    <th class="text-left p-3">
                        Status
                    </th>

                </tr>
            </thead>

            <tbody>

            @forelse($enrollments as $enrollment)

                <tr class="border-b">

                    <td class="p-3">
                        {{ $enrollment->student->name ?? 'N/A' }}
                    </td>

                    <td class="p-3">
                        {{ $enrollment->course->title ?? 'N/A' }}
                    </td>

                    <td class="p-3">
                        {{ $enrollment->progress_percentage }}%
                    </td>

                    <td class="p-3">

                        @if($enrollment->status === 'completed')

                            <span class="text-green-600 font-semibold">
                                Completed
                            </span>

                        @else

                            <span class="text-blue-600 font-semibold">
                                Active
                            </span>

                        @endif

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="p-4 text-center">
                        No records found.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-layouts::app>