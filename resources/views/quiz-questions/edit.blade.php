<x-layouts::app :title="__('Edit Question')">

<h1 class="text-2xl font-bold mb-6">
    Edit Question
</h1>

<form action="{{ route('quiz-questions.update',$quiz_question) }}"
      method="POST"
      class="space-y-4">

    @csrf
    @method('PUT')

    <select name="quiz_id"
            class="w-full border rounded p-3">

        @foreach($quizzes as $quiz)

            <option value="{{ $quiz->id }}"
                {{ $quiz_question->quiz_id == $quiz->id ? 'selected' : '' }}>
                {{ $quiz->title }}
            </option>

        @endforeach

    </select>

    <textarea
        name="question"
        class="w-full border rounded p-3">{{ $quiz_question->question }}</textarea>

    <input type="text"
           name="option_a"
           value="{{ $quiz_question->option_a }}"
           class="w-full border rounded p-3">

    <input type="text"
           name="option_b"
           value="{{ $quiz_question->option_b }}"
           class="w-full border rounded p-3">

    <input type="text"
           name="option_c"
           value="{{ $quiz_question->option_c }}"
           class="w-full border rounded p-3">

    <input type="text"
           name="option_d"
           value="{{ $quiz_question->option_d }}"
           class="w-full border rounded p-3">

    <select name="correct_answer"
            class="w-full border rounded p-3">

        <option value="A" {{ $quiz_question->correct_answer == 'A' ? 'selected' : '' }}>A</option>
        <option value="B" {{ $quiz_question->correct_answer == 'B' ? 'selected' : '' }}>B</option>
        <option value="C" {{ $quiz_question->correct_answer == 'C' ? 'selected' : '' }}>C</option>
        <option value="D" {{ $quiz_question->correct_answer == 'D' ? 'selected' : '' }}>D</option>

    </select>

    <input type="number"
           name="points"
           value="{{ $quiz_question->points }}"
           class="w-full border rounded p-3">

    <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded">
        Update Question
    </button>

</form>

</x-layouts::app>