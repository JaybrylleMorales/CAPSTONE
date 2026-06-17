<x-layouts::app :title="__('Edit Quiz Result')">

<h1 class="text-2xl font-bold mb-6">Edit Quiz Result</h1>

<form action="{{ route('quiz-results.update', $quiz_result) }}"
      method="POST"
      class="space-y-4">

    @csrf
    @method('PUT')

    <select name="student_id" class="w-full border rounded p-3">
        @foreach($students as $student)
            <option value="{{ $student->id }}"
                {{ $quiz_result->student_id == $student->id ? 'selected' : '' }}>
                {{ $student->name }}
            </option>
        @endforeach
    </select>

    <select name="quiz_id" class="w-full border rounded p-3">
        @foreach($quizzes as $quiz)
            <option value="{{ $quiz->id }}"
                {{ $quiz_result->quiz_id == $quiz->id ? 'selected' : '' }}>
                {{ $quiz->title }}
            </option>
        @endforeach
    </select>

    <input type="number"
           name="score"
           value="{{ $quiz_result->score }}"
           class="w-full border rounded p-3">

    <input type="number"
           name="total_items"
           value="{{ $quiz_result->total_items }}"
           class="w-full border rounded p-3">

    <input type="number"
           name="attempt_number"
           value="{{ $quiz_result->attempt_number }}"
           class="w-full border rounded p-3">

    <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded">
        Update Result
    </button>

</form>

</x-layouts::app>