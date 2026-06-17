<x-layouts::app :title="__('Create Quiz')">

<h1 class="text-2xl font-bold mb-6">
    Create Quiz
</h1>

<form action="{{ route('quizzes.store') }}"
      method="POST"
      class="space-y-4">

    @csrf

    <select name="course_id"
            class="w-full border rounded p-3">

        <option value="">Select Course</option>

        @foreach($courses as $course)

            <option value="{{ $course->id }}">
                {{ $course->title }}
            </option>

        @endforeach

    </select>

    <select name="lesson_id"
            class="w-full border rounded p-3">

        <option value="">
            No Lesson (Course Quiz)
        </option>

        @foreach($lessons as $lesson)

            <option value="{{ $lesson->id }}">
                {{ $lesson->title }}
            </option>

        @endforeach

    </select>

    <input type="text"
           name="title"
           placeholder="Quiz Title"
           class="w-full border rounded p-3">

    <textarea
        name="description"
        placeholder="Quiz Description"
        class="w-full border rounded p-3"></textarea>

    <input type="number"
           name="passing_score"
           value="75"
           class="w-full border rounded p-3">

    <input type="number"
           name="time_limit_minutes"
           placeholder="Time Limit (Minutes)"
           class="w-full border rounded p-3">

    <label>
        <input type="checkbox"
               name="is_published"
               checked>
        Published
    </label>

    <br><br>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Save Quiz
    </button>

</form>

</x-layouts::app>