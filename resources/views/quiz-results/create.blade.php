<x-layouts::app :title="__('Create Quiz Result')">

<h1 class="text-2xl font-bold mb-6">Create Quiz Result</h1>

<form action="{{ route('quiz-results.store') }}"
      method="POST"
      class="space-y-4">

    @csrf

    <select name="student_id" class="w-full border rounded p-3">
        @foreach($students as $student)
            <option value="{{ $student->id }}">
                {{ $student->name }}
            </option>
        @endforeach
    </select>

    <select name="quiz_id" class="w-full border rounded p-3">
        @foreach($quizzes as $quiz)
            <option value="{{ $quiz->id }}">
                {{ $quiz->title }}
            </option>
        @endforeach
    </select>

    <input type="number"
           name="score"
           placeholder="Score"
           class="w-full border rounded p-3">

    <input type="number"
           name="total_items"
           placeholder="Total Items"
           class="w-full border rounded p-3">

    <input type="number"
           name="attempt_number"
           value="1"
           class="w-full border rounded p-3">

    <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded">
        Save Result
    </button>

</form>

</x-layouts::app>