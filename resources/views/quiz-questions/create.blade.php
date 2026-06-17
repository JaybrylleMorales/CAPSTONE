<x-layouts::app :title="__('Create Question')">

<h1 class="text-2xl font-bold mb-6">
    Create Question
</h1>

<form action="{{ route('quiz-questions.store') }}"
      method="POST"
      class="space-y-4">

    @csrf

    <select name="quiz_id"
            class="w-full border rounded p-3">

        @foreach($quizzes as $quiz)

            <option value="{{ $quiz->id }}">
                {{ $quiz->title }}
            </option>

        @endforeach

    </select>

    <textarea
        name="question"
        placeholder="Question"
        class="w-full border rounded p-3"></textarea>

    <input type="text"
           name="option_a"
           placeholder="Option A"
           class="w-full border rounded p-3">

    <input type="text"
           name="option_b"
           placeholder="Option B"
           class="w-full border rounded p-3">

    <input type="text"
           name="option_c"
           placeholder="Option C"
           class="w-full border rounded p-3">

    <input type="text"
           name="option_d"
           placeholder="Option D"
           class="w-full border rounded p-3">

    <select name="correct_answer"
            class="w-full border rounded p-3">

        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>

    </select>

    <input type="number"
           name="points"
           value="1"
           class="w-full border rounded p-3">

    <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded">
        Save Question
    </button>

</form>

</x-layouts::app>