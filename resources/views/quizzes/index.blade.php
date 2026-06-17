<x-layouts::app :title="__('Quizzes')">

<div class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold">Quizzes</h1>
            <p class="text-gray-500">Manage all quizzes.</p>
        </div>

        <a href="{{ route('quizzes.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">
            Add Quiz
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border">
        <thead>
            <tr>
                <th class="p-3 text-left">Course</th>
                <th class="p-3 text-left">Quiz</th>
                <th class="p-3 text-left">Passing Score</th>
                <th class="p-3 text-left">Actions</th>
            </tr>
        </thead>

        <tbody>

        @forelse($quizzes as $quiz)

            <tr class="border-t">

                <td class="p-3">
                    {{ $quiz->course->title ?? '' }}
                </td>

                <td class="p-3">
                    {{ $quiz->title }}
                </td>

                <td class="p-3">
                    {{ $quiz->passing_score }}%
                </td>

                <td class="p-3">

                    <a href="{{ route('quizzes.edit',$quiz) }}"
                       class="text-blue-600">
                        Edit
                    </a>

                    <form action="{{ route('quizzes.destroy',$quiz) }}"
                          method="POST"
                          class="inline">

                        @csrf
                        @method('DELETE')

                        <button class="text-red-600 ml-2"
                            onclick="return confirm('Delete quiz?')">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="4" class="p-4 text-center">
                    No quizzes found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

</x-layouts::app>