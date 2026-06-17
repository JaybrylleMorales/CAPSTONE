<x-layouts::app :title="'Student Progress'">

<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold">
            {{ $student->name }}
        </h1>

        <p class="text-zinc-500">
            Progress for {{ $course->title }}
        </p>
    </div>

    <div class="border rounded-xl overflow-hidden">

        <table class="w-full">

            <thead>
                <tr>
                    <th class="p-4 text-left">Lesson</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Time Spent</th>
                    <th class="p-4 text-left">Completed At</th>
                </tr>
            </thead>

            <tbody>

                @forelse($progress as $item)

                    <tr>

                        <td class="p-4">
                            {{ $item->lesson->title ?? 'Lesson' }}
                        </td>

                        <td class="p-4">
                            {{ ucfirst($item->status) }}
                        </td>

                        <td class="p-4">
                            {{ $item->time_spent_minutes ?? 0 }} mins
                        </td>

                        <td class="p-4">
                            {{ $item->completed_at ?? '-' }}
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4" class="p-6 text-center">
                            No lesson progress found.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-layouts::app>