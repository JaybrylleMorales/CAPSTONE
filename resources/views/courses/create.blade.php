<x-layouts::app :title="__('Create Course')">

<h1 class="text-2xl font-bold mb-6">
    Create Course
</h1>

<form action="{{ route('courses.store') }}"
      method="POST"
      class="space-y-4">

    @csrf

    <input
        type="text"
        name="title"
        placeholder="Course Title"
        class="w-full border p-3 rounded">

    <textarea
        name="description"
        placeholder="Description"
        class="w-full border p-3 rounded"></textarea>

    <select
        name="category_id"
        class="w-full rounded-lg border border-neutral-300 bg-white text-black dark:bg-neutral-800 dark:text-white"
>

        <option value="">
            Select Category
        </option>

        @foreach($categories as $category)

            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>

        @endforeach

    </select>

    <input
        type="number"
        step="0.01"
        name="price"
        placeholder="Price"
        class="w-full border p-3 rounded">

    <select
        name="difficulty_level"
        class="w-full border p-3 rounded">

        <option value="beginner">Beginner</option>
        <option value="intermediate">Intermediate</option>
        <option value="advanced">Advanced</option>

    </select>

    <select
        name="status"
        class="w-full border p-3 rounded">

        <option value="draft">Draft</option>
        <option value="pending">Pending</option>
        <option value="approved">Approved</option>
        <option value="published">Published</option>

    </select>

    <button
        class="px-4 py-2 bg-blue-600 text-white rounded">

        Save Course

    </button>

</form>

</x-layouts::app>