<x-layouts::app :title="'Manage Lessons'">

<div class="space-y-6">

    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold">
                Manage Lessons
            </h1>

            <p class="text-zinc-500">
                {{ $course->title }}
            </p>
        </div>

        <a href="{{ route('teacher.lessons.create', $course) }}"
           class="px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg">
            Add Lesson
        </a>
    </div>

    <div class="border rounded-xl overflow-hidden">

        <table class="w-full">

            <thead>
                <tr>
                    <th class="p-4 text-left">Order</th>
                    <th class="p-4 text-left">Lesson Title</th>
                    <th class="p-4 text-left">Type</th>
                    <th class="p-4 text-left">Duration</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($lessons as $lesson)
                    <tr class="border-t">
                        <td class="p-4">
                            {{ $lesson->lesson_order }}
                        </td>

                        <td class="p-4 font-semibold">
                            {{ $lesson->title }}
                        </td>

                        <td class="p-4">
                            {{ ucfirst($lesson->lesson_type) }}
                        </td>

                        <td class="p-4">
                            {{ $lesson->duration_minutes ?? 0 }} mins
                        </td>

                        <td class="p-4">
                            {{ $lesson->is_published ? 'Published' : 'Draft' }}
                        </td>

                        <td class="p-4">

                        <a href="{{ route('teacher.lessons.edit', $lesson) }}"
                         class="px-3 py-1 bg-blue-600 text-white rounded text-sm">
                        Edit
                        </a>

                        <form action="{{ route('teacher.lessons.delete', $lesson) }}"
                        method="POST"
                        class="inline">

                         @csrf
                         @method('DELETE')

                         <button
                         onclick="return confirm('Delete this lesson?')"
                        class="px-3 py-1 bg-red-600 text-white rounded text-sm">
                        Delete
                        </button>

                         </form>
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-6 text-center text-zinc-500">
                            No lessons added yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</div>

</x-layouts::app>