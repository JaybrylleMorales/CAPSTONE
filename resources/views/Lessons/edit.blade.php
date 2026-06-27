<x-layouts::app :title="__('Edit Lesson')">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Edit Lesson
        </h1>

        <p class="text-sm text-gray-500">
            Update lesson details, content, order, and visibility.
        </p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <form action="{{ route('lessons.update', $lesson) }}"
              method="POST"
              class="space-y-5">

            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Course
                </label>

                <select name="course_id"
                       class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                        required>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}"
                            @selected(old('course_id', $lesson->course_id) == $course->id)>
                            {{ $course->title }}
                        </option>
                    @endforeach
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Select the course where this lesson belongs.
                </p>

                @error('course_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Lesson Title
                </label>

                <input type="text"
                       name="title"
                       value="{{ old('title', $lesson->title) }}"
                       placeholder="Example: Income Statement"
                       class="w-full rounded border p-3 bg-transparent"
                       required>

                <p class="mt-1 text-xs text-gray-500">
                    Use a clear and specific title for the lesson.
                </p>

                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Lesson Content
                </label>

                <textarea name="content"
                          rows="8"
                          placeholder="Write the main lesson content here..."
                          class="w-full rounded border p-3 bg-transparent">{{ old('content', $lesson->content) }}</textarea>

                <p class="mt-1 text-xs text-gray-500">
                    This is the reading material shown to students in the lesson page.
                </p>

                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Lesson Type
                </label>

                <select name="lesson_type"
                        class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                    <option value="text" @selected(old('lesson_type', $lesson->lesson_type) == 'text')>Text</option>
                    <option value="video" @selected(old('lesson_type', $lesson->lesson_type) == 'video')>Video</option>
                    <option value="document" @selected(old('lesson_type', $lesson->lesson_type) == 'document')>Document</option>
                    <option value="quiz" @selected(old('lesson_type', $lesson->lesson_type) == 'quiz')>Quiz</option>
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Choose the type that best describes the lesson.
                </p>

                @error('lesson_type')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Video URL
                </label>

                <input type="url"
                       name="video_url"
                       value="{{ old('video_url', $lesson->video_url) }}"
                       placeholder="Example: https://www.youtube.com/watch?v=..."
                       class="w-full rounded border p-3 bg-transparent">

                <p class="mt-1 text-xs text-gray-500">
                    Optional. Add this only if the lesson has a video resource.
                </p>

                @error('video_url')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Lesson Order
                    </label>

                    <input type="number"
                           name="lesson_order"
                           value="{{ old('lesson_order', $lesson->lesson_order) }}"
                           min="1"
                           class="w-full rounded border p-3 bg-transparent"
                           required>

                    <p class="mt-1 text-xs text-gray-500">
                        This controls the sequence of the lesson in the course.
                    </p>

                    @error('lesson_order')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Duration in Minutes
                    </label>

                    <input type="number"
                           name="duration_minutes"
                           value="{{ old('duration_minutes', $lesson->duration_minutes) }}"
                           min="1"
                           placeholder="Example: 30"
                           class="w-full rounded border p-3 bg-transparent">

                    <p class="mt-1 text-xs text-gray-500">
                        Estimated time needed to complete this lesson.
                    </p>

                    @error('duration_minutes')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="space-y-3 rounded-lg border p-4 dark:border-neutral-700">
                <label class="flex items-start gap-2">
                    <input type="checkbox"
                           name="is_preview"
                           class="mt-1"
                           @checked(old('is_preview', $lesson->is_preview))>

                    <span>
                        <span class="block font-medium">Free Preview</span>
                        <span class="text-sm text-gray-500">
                            Allow students to preview this lesson before enrolling.
                        </span>
                    </span>
                </label>

                <label class="flex items-start gap-2">
                    <input type="checkbox"
                           name="is_published"
                           class="mt-1"
                           @checked(old('is_published', $lesson->is_published))>

                    <span>
                        <span class="block font-medium">Published</span>
                        <span class="text-sm text-gray-500">
                            Make this lesson visible to students.
                        </span>
                    </span>
                </label>
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Update Lesson
                </button>

                <a href="{{ route('lessons.index') }}"
                   class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                    Cancel
                </a>
            </div>

        </form>

    </div>

</div>

</x-layouts::app>