<x-layouts::app :title="__('Quiz Results')">

<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Quiz Results</h1>

    <a href="{{ route('quiz-results.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        Add Result
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="w-full border">
    <thead>
        <tr>
            <th class="border p-2">Student</th>
            <th class="border p-2">Quiz</th>
            <th class="border p-2">Score</th>
            <th class="border p-2">Percentage</th>
            <th class="border p-2">Remarks</th>
            <th class="border p-2">Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($results as $result)
            <tr>
                <td class="border p-2">{{ $result->student->name }}</td>
                <td class="border p-2">{{ $result->quiz->title }}</td>
                <td class="border p-2">{{ $result->score }}/{{ $result->total_items }}</td>
                <td class="border p-2">{{ number_format($result->percentage, 2) }}%</td>
                <td class="border p-2">{{ ucfirst($result->remarks) }}</td>
                <td class="border p-2">
                    <a href="{{ route('quiz-results.edit', $result) }}"
                       class="text-blue-500 mr-2">
                        Edit
                    </a>

                    <form action="{{ route('quiz-results.destroy', $result) }}"
                          method="POST"
                          class="inline">
                        @csrf
                        @method('DELETE')

                        <button onclick="return confirm('Delete this result?')"
                                class="text-red-500">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="border p-4 text-center">
                    No quiz results found.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

</x-layouts::app>