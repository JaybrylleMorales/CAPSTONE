<x-layouts::app :title="__('Edit Quiz')">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Edit Quiz
        </h1>

        <p class="text-sm text-gray-500">
            Update quiz information, passing score, time limit, and visibility.
        </p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <form action="{{ route('quizzes.update', $quiz) }}"
              method="POST"
              class="space-y-5">

            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Course
                </label>

                <select name="course_id"
                        class="w-full rounded border p-3 bg-transparent"
                        required>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}"
                            @selected(old('course_id', $quiz->course_id) == $course->id)>
                            {{ $course->title }}
                        </option>
                    @endforeach
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Select the course where this quiz belongs.
                </p>

                @error('course_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Related Lesson
                </label>

                <select name="lesson_id"
                        class="w-full rounded border p-3 bg-transparent">
                    <option value="">
                        No Lesson — this is a course final quiz
                    </option>

                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}"
                            @selected(old('lesson_id', $quiz->lesson_id) == $lesson->id)>
                            {{ $lesson->course->title ?? 'No Course' }} — {{ $lesson->title }}
                        </option>
                    @endforeach
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Leave this blank if the quiz is for the whole course.
                </p>

                @error('lesson_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Quiz Title
                </label>

                <input type="text"
                       name="title"
                       value="{{ old('title', $quiz->title) }}"
                       placeholder="Example: Financial Accounting Final Quiz"
                       class="w-full rounded border p-3 bg-transparent"
                       required>

                <p class="mt-1 text-xs text-gray-500">
                    Use a clear title that students can easily understand.
                </p>

                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Quiz Description
                </label>

                <textarea name="description"
                          rows="5"
                          placeholder="Briefly explain what this quiz covers."
                          class="w-full rounded border p-3 bg-transparent">{{ old('description', $quiz->description) }}</textarea>

                <p class="mt-1 text-xs text-gray-500">
                    Briefly explain what the quiz covers.
                </p>

                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Passing Score (%)
                    </label>

                    <input type="number"
                           name="passing_score"
                           value="{{ old('passing_score', $quiz->passing_score) }}"
                           min="1"
                           max="100"
                           placeholder="Example: 75"
                           class="w-full rounded border p-3 bg-transparent"
                           required>

                    <p class="mt-1 text-xs text-gray-500">
                        Students must reach this percentage to pass the quiz.
                    </p>

                    @error('passing_score')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Time Limit in Minutes
                    </label>

                    <input type="number"
                           name="time_limit_minutes"
                           value="{{ old('time_limit_minutes', $quiz->time_limit_minutes) }}"
                           min="1"
                           placeholder="Example: 30"
                           class="w-full rounded border p-3 bg-transparent">

                    <p class="mt-1 text-xs text-gray-500">
                        Optional. Leave blank if there is no time limit.
                    </p>

                    @error('time_limit_minutes')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="space-y-3 rounded-lg border p-4 dark:border-neutral-700">
                <label class="flex items-start gap-2">
                    <input type="checkbox"
                           name="is_published"
                           class="mt-1"
                           @checked(old('is_published', $quiz->is_published))>

                    <span>
                        <span class="block font-medium">Published</span>
                        <span class="text-sm text-gray-500">
                            Make this quiz available to students after completing the course lessons.
                        </span>
                    </span>
                </label>
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Update Quiz
                </button>

                <a href="{{ route('quizzes.index') }}"
                   class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                    Cancel
                </a>
            </div>

        </form>

    </div>

</div>

</x-layouts::app>