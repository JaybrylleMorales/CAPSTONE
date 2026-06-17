<x-layouts::app :title="__('Course Categories')">
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Course Categories</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">Manage PathWise course categories.</p>
            </div>

            <a href="{{ route('course-categories.create') }}"
               class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">
                Add Category
            </a>
        </div>

        @if (session('success'))
            <div class="rounded-lg bg-green-100 p-4 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <div class="rounded-xl border border-neutral-200 dark:border-neutral-700">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-neutral-200 dark:border-neutral-700">
                    <tr>
                        <th class="p-4">Name</th>
                        <th class="p-4">Description</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr class="border-b border-neutral-200 dark:border-neutral-700">
                            <td class="p-4">{{ $category->name }}</td>
                            <td class="p-4">{{ $category->description }}</td>
                            <td class="p-4 text-right">
                                <a href="{{ route('course-categories.edit', $category) }}" class="text-blue-500">Edit</a>

                                <form action="{{ route('course-categories.destroy', $category) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="ml-3 text-red-500" onclick="return confirm('Delete this category?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="p-4 text-center text-gray-500">
                                No categories yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts::app>