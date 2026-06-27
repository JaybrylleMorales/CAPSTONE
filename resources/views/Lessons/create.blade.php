<x-layouts::app :title="__('Create Lesson')">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Create Lesson
        </h1>

        <p class="text-sm text-gray-500">
            Add a lesson under a course. This will be shown to students before taking the course quiz.
        </p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <form action="{{ route('lessons.store') }}"
              method="POST"
              class="space-y-5">

            @csrf

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Course
                </label>

                <select name="course_id"
                         class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">
                        required>
                    <option value="">
                        Select the course where this lesson belongs
                    </option>

                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" @selected(old('course_id') == $course->id)>
                            {{ $course->title }}
                        </option>
                    @endforeach
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Example: Basic Accounting Fundamentals, Laravel Web Development, or Entrepreneurship Essentials.
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
                       value="{{ old('title') }}"
                       placeholder="Example: Introduction to Accounting"
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
                          placeholder="Write the main lesson content here. Example: Accounting is the process of recording, classifying, summarizing, and interpreting financial transactions..."
                          class="w-full rounded border p-3 bg-transparent">{{ old('content') }}</textarea>

                <p class="mt-1 text-xs text-gray-500">
                    This is the reading material that students will review before marking the lesson as complete.
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
                        class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">
                    <option value="text" @selected(old('lesson_type') == 'text')>Text</option>
                    <option value="video" @selected(old('lesson_type') == 'video')>Video</option>
                    <option value="document" @selected(old('lesson_type') == 'document')>Document</option>
                    <option value="quiz" @selected(old('lesson_type') == 'quiz')>Quiz</option>
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Choose Text for reading lessons, Video if the lesson uses a YouTube or external video link.
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
                       value="{{ old('video_url') }}"
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
                           value="{{ old('lesson_order', 1) }}"
                           min="1"
                           placeholder="Example: 1"
                           class="w-full rounded border p-3 bg-transparent"
                           required>

                    <p class="mt-1 text-xs text-gray-500">
                        This controls the order of the lesson in the course.
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
                           value="{{ old('duration_minutes') }}"
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
                           @checked(old('is_preview'))>

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
                           checked>

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
                    Save Lesson
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