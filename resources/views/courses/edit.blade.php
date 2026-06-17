<x-layouts::app :title="__('Edit Course')">

<h1 class="mb-6 text-2xl font-bold">
    Edit Course
</h1>

<form action="{{ route('courses.update', $course) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $course->title) }}"
        class="w-full rounded border p-3">

    <textarea name="description" class="w-full rounded border p-3">{{ old('description', $course->description) }}</textarea>

    <select name="category_id" class="w-full rounded border p-3">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" @selected($course->category_id == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <input type="number" step="0.01" name="price" value="{{ old('price', $course->price) }}"
        class="w-full rounded border p-3">

    <select name="difficulty_level" class="w-full rounded border p-3">
        <option value="beginner" @selected($course->difficulty_level == 'beginner')>Beginner</option>
        <option value="intermediate" @selected($course->difficulty_level == 'intermediate')>Intermediate</option>
        <option value="advanced" @selected($course->difficulty_level == 'advanced')>Advanced</option>
    </select>

    <select name="status" class="w-full rounded border p-3">
        <option value="draft" @selected($course->status == 'draft')>Draft</option>
        <option value="pending" @selected($course->status == 'pending')>Pending</option>
        <option value="approved" @selected($course->status == 'approved')>Approved</option>
        <option value="rejected" @selected($course->status == 'rejected')>Rejected</option>
        <option value="published" @selected($course->status == 'published')>Published</option>
    </select>

    <input type="number" name="estimated_hours" value="{{ old('estimated_hours', $course->estimated_hours) }}"
        placeholder="Estimated Hours"
        class="w-full rounded border p-3">

    <label class="flex items-center gap-2">
        <input type="checkbox" name="certificate_available" value="1" @checked($course->certificate_available)>
        Certificate Available
    </label>

    <button class="rounded bg-blue-600 px-4 py-2 text-white">
        Update Course
    </button>
</form>

</x-layouts::app>