<x-layouts::app :title="__('Create Lesson')">

<h1 class="text-2xl font-bold mb-6">
    Create Lesson
</h1>

<form action="{{ route('lessons.store') }}"
      method="POST"
      class="space-y-4">

    @csrf

    <select name="course_id"
            class="w-full border rounded p-3">

        <option value="">
            Select Course
        </option>

        @foreach($courses as $course)

            <option value="{{ $course->id }}">
                {{ $course->title }}
            </option>

        @endforeach

    </select>

    <input
        type="text"
        name="title"
        placeholder="Lesson Title"
        class="w-full border rounded p-3">

    <textarea
        name="content"
        placeholder="Lesson Content"
        class="w-full border rounded p-3"></textarea>

    <select
        name="lesson_type"
        class="w-full border rounded p-3">

        <option value="video">Video</option>
        <option value="document">Document</option>
        <option value="text">Text</option>
        <option value="quiz">Quiz</option>

    </select>

    <input
        type="text"
        name="video_url"
        placeholder="Video URL"
        class="w-full border rounded p-3">

    <input
        type="number"
        name="lesson_order"
        value="1"
        class="w-full border rounded p-3">

    <input
        type="number"
        name="duration_minutes"
        placeholder="Duration Minutes"
        class="w-full border rounded p-3">

    <label>
        <input type="checkbox" name="is_preview">
        Free Preview
    </label>

    <br>

    <label>
        <input type="checkbox"
               name="is_published"
               checked>
        Published
    </label>

    <br><br>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Save Lesson
    </button>

</form>

</x-layouts::app>