<x-layouts::app :title="__('AI Recommendations')">

<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">AI Recommendations</h1>


<a href="{{ route('ai-recommendations.create') }}"
   class="bg-blue-600 text-white px-4 py-2 rounded">
    Generate Recommendation
</a>


</div>

@if(session('success')) <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
{{ session('success') }} </div>
@endif

<table class="w-full border">
    <thead>
        <tr>
            <th class="border p-2">Student</th>
            <th class="border p-2">Course</th>
            <th class="border p-2">Score</th>
            <th class="border p-2">Reason</th>
            <th class="border p-2">Viewed</th>
            <th class="border p-2">Actions</th>
        </tr>
    </thead>


<tbody>
    @forelse($recommendations as $recommendation)

        <tr>
            <td class="border p-2">
                {{ $recommendation->student->name ?? 'N/A' }}
            </td>

            <td class="border p-2">
                {{ $recommendation->course->title ?? 'N/A' }}
            </td>

            <td class="border p-2">
                {{ $recommendation->recommendation_score }}
            </td>

            <td class="border p-2">
                {{ $recommendation->reason }}
            </td>

            <td class="border p-2">
                {{ $recommendation->is_viewed ? 'Yes' : 'No' }}
            </td>

            <td class="border p-2">
                <form action="{{ route('ai-recommendations.destroy', $recommendation) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="text-red-600"
                            onclick="return confirm('Delete recommendation?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>

    @empty

        <tr>
            <td colspan="6" class="border p-4 text-center">
                No recommendations found.
            </td>
        </tr>

    @endforelse
</tbody>


</table>

</x-layouts::app>
