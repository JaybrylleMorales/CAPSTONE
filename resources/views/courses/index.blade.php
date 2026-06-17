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
                    PHP {{ number_format($course->price, 2) }}
                </td>

                <td class="p-3">
                    {{ ucfirst($course->status) }}
                </td>

                <td class="p-3 flex gap-2">

                    <a href="{{ route('courses.edit',$course) }}"
                       class="text-blue-600">
                        Edit
                    </a>

                    <form action="{{ route('courses.destroy',$course) }}"
                          method="POST">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Delete this course?')"
                            class="text-red-600">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="5" class="p-4 text-center">
                    No courses found.
                </td>
            </tr>

        @endforelse

        </tbody>
    </table>

</div>

</x-layouts::app>