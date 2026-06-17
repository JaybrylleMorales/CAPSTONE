<x-layouts::app :title="__('Edit Category')">
    <div class="max-w-2xl space-y-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Edit Course Category</h1>

        <form method="POST" action="{{ route('course-categories.update', $courseCategory->id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium">Category Name</label>
                <input type="text" name="name" value="{{ old('name', $courseCategory->name) }}"
                       class="mt-1 w-full rounded-lg border border-neutral-300 p-2 dark:border-neutral-700 dark:bg-neutral-900">
            </div>

            <div>
                <label class="block text-sm font-medium">Description</label>
                <textarea name="description" rows="4"
                          class="mt-1 w-full rounded-lg border border-neutral-300 p-2 dark:border-neutral-700 dark:bg-neutral-900">{{ old('description', $courseCategory->description) }}</textarea>
            </div>

            <button class="rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                Update Category
            </button>
        </form>
    </div>
</x-layouts::app>