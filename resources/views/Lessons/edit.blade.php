<x-layouts::app :title="__('Edit Lesson')">

<h1 class="text-2xl font-bold mb-6">
    Edit Lesson
</h1>

<form action="{{ route('lessons.update', $lesson) }}"
      method="POST"
      class="space-y-4">

    @csrf
    @method('PUT')

    <select name="course_id"
            class="w-full border rounded p-3">

        @foreach($courses as $course)

            <option value="{{ $course->id }}"
                {{ $lesson->course_id == $course->id ? 'selected' : '' }}>
                {{ $course->title }}
            </option>

        @endforeach

    </select>

    <input
        type="text"
        name="title"
        value="{{ old('title', $lesson->title) }}"
        class="w-full border rounded p-3">

    <textarea
        name="content"
        class="w-full border rounded p-3">{{ old('content', $lesson->content) }}</textarea>

    <select
        name="lesson_type"
        class="w-full border rounded p-3">

        <option value="video" {{ $lesson->lesson_type == 'video' ? 'selected' : '' }}>Video</option>
        <option value="document" {{ $lesson->lesson_type == 'document' ? 'selected' : '' }}>Document</option>
        <option value="text" {{ $lesson->lesson_type == 'text' ? 'selected' : '' }}>Text</option>
        <option value="quiz" {{ $lesson->lesson_type == 'quiz' ? 'selected' : '' }}>Quiz</option>

    </select>

    <input
        type="text"
        name="video_url"
        value="{{ old('video_url', $lesson->video_url) }}"
        class="w-full border rounded p-3">

    <input
        type="number"
        name="lesson_order"
        value="{{ old('lesson_order', $lesson->lesson_order) }}"
        class="w-full border rounded p-3">

    <input
        type="number"
        name="duration_minutes"
        value="{{ old('duration_minutes', $lesson->duration_minutes) }}"
        class="w-full border rounded p-3">

    <label>
        <input
            type="checkbox"
            name="is_preview"
            {{ $lesson->is_preview ? 'checked' : '' }}>
        Free Preview
    </label>

    <br>

    <label>
        <input
            type="checkbox"
            name="is_published"
            {{ $lesson->is_published ? 'checked' : '' }}>
        Published
    </label>

    <br><br>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Update Lesson
    </button>

</form>

</x-layouts::app>