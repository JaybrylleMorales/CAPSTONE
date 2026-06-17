<x-layouts::app :title="__('Edit Quiz')">

<h1 class="text-2xl font-bold mb-6">
    Edit Quiz
</h1>

<form action="{{ route('quizzes.update',$quiz) }}"
      method="POST"
      class="space-y-4">

    @csrf
    @method('PUT')

    <select name="course_id"
            class="w-full border rounded p-3">

        @foreach($courses as $course)

            <option value="{{ $course->id }}"
                {{ $quiz->course_id == $course->id ? 'selected' : '' }}>
                {{ $course->title }}
            </option>

        @endforeach

    </select>

    <select name="lesson_id"
            class="w-full border rounded p-3">

        <option value="">
            No Lesson
        </option>

        @foreach($lessons as $lesson)

            <option value="{{ $lesson->id }}"
                {{ $quiz->lesson_id == $lesson->id ? 'selected' : '' }}>
                {{ $lesson->title }}
            </option>

        @endforeach

    </select>

    <input type="text"
           name="title"
           value="{{ old('title',$quiz->title) }}"
           class="w-full border rounded p-3">

    <textarea
        name="description"
        class="w-full border rounded p-3">{{ old('description',$quiz->description) }}</textarea>

    <input type="number"
           name="passing_score"
           value="{{ old('passing_score',$quiz->passing_score) }}"
           class="w-full border rounded p-3">

    <input type="number"
           name="time_limit_minutes"
           value="{{ old('time_limit_minutes',$quiz->time_limit_minutes) }}"
           class="w-full border rounded p-3">

    <label>
        <input type="checkbox"
               name="is_published"
               {{ $quiz->is_published ? 'checked' : '' }}>
        Published
    </label>

    <br><br>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Update Quiz
    </button>

</form>

</x-layouts::app>