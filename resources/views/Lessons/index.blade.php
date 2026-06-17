<x-layouts::app :title="__('Lessons')">
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold">Lessons</h1>
                <p class="text-gray-500">Manage course lessons.</p>
            </div>

            <a href="{{ route('lessons.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
                Add Lesson
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border">
            <thead>
                <tr>
                    <th class="p-3 text-left">Course</th>
                    <th class="p-3 text-left">Lesson</th>
                    <th class="p-3 text-left">Type</th>
                    <th class="p-3 text-left">Order</th>
                    <th class="p-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($lessons as $lesson)
                    <tr class="border-t">
                        <td class="p-3">{{ $lesson->course->title ?? 'No course' }}</td>
                        <td class="p-3">{{ $lesson->title }}</td>
                        <td class="p-3">{{ ucfirst($lesson->lesson_type) }}</td>
                        <td class="p-3">{{ $lesson->lesson_order }}</td>
                        <td class="p-3">
                            <a href="{{ route('lessons.edit', $lesson) }}" class="text-blue-600">Edit</a>

                            <form action="{{ route('lessons.destroy', $lesson) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 ml-2" onclick="return confirm('Delete lesson?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-4 text-center">No lessons found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts::app>