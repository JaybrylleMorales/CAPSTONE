<x-layouts::app :title="'Edit Lesson'">

<div class="max-w-3xl space-y-6">

    <div>
        <h1 class="text-3xl font-bold">
            Edit Lesson
        </h1>

        <p class="text-zinc-500">
            {{ $lesson->course->title }}
        </p>
    </div>

    <form action="{{ route('teacher.lessons.update', $lesson) }}"
          method="POST"
          class="space-y-4 border rounded-xl p-6">

        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium mb-1">
                Lesson Title
            </label>

            <input type="text"
                   name="title"
                   value="{{ old('title', $lesson->title) }}"
                   class="w-full rounded-lg border p-2 text-black">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">
                Lesson Content
            </label>

            <textarea name="content"
                      rows="5"
                      class="w-full rounded-lg border p-2 text-black">{{ old('content', $lesson->content) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">
                Lesson Type
            </label>

            <select name="lesson_type"
                    class="w-full rounded-lg border p-2 text-black">
                <option value="video" {{ $lesson->lesson_type === 'video' ? 'selected' : '' }}>Video</option>
                <option value="document" {{ $lesson->lesson_type === 'document' ? 'selected' : '' }}>Document</option>
                <option value="text" {{ $lesson->lesson_type === 'text' ? 'selected' : '' }}>Text</option>
                <option value="quiz" {{ $lesson->lesson_type === 'quiz' ? 'selected' : '' }}>Quiz</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">
                Video URL
            </label>

            <input type="text"
                   name="video_url"
                   value="{{ old('video_url', $lesson->video_url) }}"
                   class="w-full rounded-lg border p-2 text-black">
        </div>

        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">
                    Lesson Order
                </label>

                <input type="number"
                       name="lesson_order"
                       value="{{ old('lesson_order', $lesson->lesson_order) }}"
                       class="w-full rounded-lg border p-2 text-black">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">
                    Duration Minutes
                </label>

                <input type="number"
                       name="duration_minutes"
                       value="{{ old('duration_minutes', $lesson->duration_minutes) }}"
                       class="w-full rounded-lg border p-2 text-black">
            </div>
        </div>

        <div class="flex gap-4">
            <label>
                <input type="checkbox"
                       name="is_preview"
                       {{ $lesson->is_preview ? 'checked' : '' }}>
                Preview Lesson
            </label>

            <label>
                <input type="checkbox"
                       name="is_published"
                       {{ $lesson->is_published ? 'checked' : '' }}>
                Published
            </label>
        </div>

        <div class="flex gap-3">
            <button type="submit"
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                Update Lesson
            </button>

            <a href="{{ route('teacher.lessons', $lesson->course) }}"
               class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg">
                Cancel
            </a>
        </div>

    </form>

</div>

</x-layouts::app>