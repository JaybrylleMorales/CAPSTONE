<x-layouts::app :title="__('Courses')">

<div class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold">Courses</h1>
            <p class="text-gray-500">Manage all PathWise courses.</p>
        </div>

        <a href="{{ route('courses.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded-lg">
            Add Course
        </a>
    </div>

    @if(session('success'))
        <div class="p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border">
        <thead>
            <tr class="bg-gray-100 dark:bg-neutral-800">
                <th class="p-3 text-left">Title</th>
                <th class="p-3 text-left">Category</th>
                <th class="p-3 text-left">Teacher</th>
                <th class="p-3 text-left">Price</th>
                <th class="p-3 text-left">Status</th>
                <th class="p-3 text-left">Actions</th>
            </tr>
        </thead>

        <tbody>

        @forelse($courses as $course)

            <tr class="border-t">

                <td class="p-3">
                    {{ $course->title }}
                </td>

                <td class="p-3">
                    {{ $course->category->name ?? '' }}
                </td>

                <td class="p-3">
                    {{ $course->teacher->name ?? 'No Teacher' }}
                </td>

                <td class="p-3">
                    PHP {{ number_format($course->price, 2) }}
                </td>

                <td class="p-3">
                    <span class="px-2 py-1 rounded text-sm bg-gray-200 text-black">
                        {{ ucfirst($course->status) }}
                    </span>
                </td>

                <td class="p-3 flex flex-wrap gap-2">

                    @if($course->status === 'pending')
                        <form action="{{ route('courses.approve', $course) }}"
                              method="POST">
                            @csrf

                            <button type="submit"
                                    class="px-3 py-1 bg-green-600 text-white rounded text-sm">
                                Approve
                            </button>
                        </form>

                        <form action="{{ route('courses.reject', $course) }}"
                              method="POST">
                            @csrf

                            <button type="submit"
                                    onclick="return confirm('Reject this course?')"
                                    class="px-3 py-1 bg-red-600 text-white rounded text-sm">
                                Reject
                            </button>
                        </form>
                    @endif

                    <a href="{{ route('courses.edit', $course) }}"
                       class="px-3 py-1 bg-blue-600 text-white rounded text-sm">
                        Edit
                    </a>

                    <form action="{{ route('courses.destroy', $course) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Delete this course?')"
                            class="px-3 py-1 bg-red-700 text-white rounded text-sm">
                            Delete
                        </button>
                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="6" class="p-4 text-center">
                    No courses found.
                </td>
            </tr>

        @endforelse

        </tbody>
    </table>

</div>

</x-layouts::app>