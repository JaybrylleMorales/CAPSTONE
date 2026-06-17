<x-layouts::app :title="__('Create Category')">
    <div class="max-w-2xl space-y-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Create Course Category</h1>

        <form method="POST" action="{{ route('course-categories.store') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium">Category Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                       class="mt-1 w-full rounded-lg border border-neutral-300 p-2 dark:border-neutral-700 dark:bg-neutral-900">
                @error('name') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Description</label>
                <textarea name="description" rows="4"
                          class="mt-1 w-full rounded-lg border border-neutral-300 p-2 dark:border-neutral-700 dark:bg-neutral-900">{{ old('description') }}</textarea>
            </div>

            <button class="rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                Save Category
            </button>
        </form>
    </div>
</x-layouts::app>