<x-layouts::app :title="__('Create Quiz')">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Create Quiz
        </h1>

        <p class="text-sm text-gray-500">
            Create an assessment for a course. Students can take this quiz after completing the lessons.
        </p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <form action="{{ route('quizzes.store') }}"
              method="POST"
              class="space-y-5">

            @csrf

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Course
                </label>

                <select name="course_id"
                        class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                        required>
                    <option value="">
                        Select the course for this quiz
                    </option>

                    @foreach($courses as $course)
                        <option value="{{ $course->id }}"
                                @selected(old('course_id') == $course->id)>
                            {{ $course->title }}
                        </option>
                    @endforeach
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Example: Entrepreneurship Essentials, Basic Accounting Fundamentals, or Laravel Web Development.
                </p>

                @error('course_id')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Related Lesson
                </label>

                <select name="lesson_id"
                        class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">
                    <option value="">
                        No Lesson — this is a final course quiz
                    </option>

                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}"
                                @selected(old('lesson_id') == $lesson->id)>
                            {{ $lesson->course->title ?? 'No Course' }} — {{ $lesson->title }}
                        </option>
                    @endforeach
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Choose “No Lesson” if this quiz is for the whole course. Select a lesson only if the quiz belongs to one specific lesson.
                </p>

                @error('lesson_id')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Quiz Title
                </label>

                <input type="text"
                       name="title"
                       value="{{ old('title') }}"
                       placeholder="Example: Entrepreneurship Final Quiz"
                       class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                       required>

                <p class="mt-1 text-xs text-gray-500">
                    Use a clear title that students can easily understand.
                </p>

                @error('title')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Quiz Description
                </label>

                <textarea name="description"
                          rows="5"
                          placeholder="Example: This quiz evaluates the student's understanding of business planning, market research, financial management, business operations, and business growth strategies."
                          class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">{{ old('description') }}</textarea>

                <p class="mt-1 text-xs text-gray-500">
                    Briefly explain what the quiz covers.
                </p>

                @error('description')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Passing Score (%)
                    </label>

                    <input type="number"
                           name="passing_score"
                           value="{{ old('passing_score', 75) }}"
                           min="1"
                           max="100"
                           placeholder="Example: 75"
                           class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                           required>

                    <p class="mt-1 text-xs text-gray-500">
                        Students must reach this percentage to pass the quiz.
                    </p>

                    @error('passing_score')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Time Limit in Minutes
                    </label>

                    <input type="number"
                           name="time_limit_minutes"
                           value="{{ old('time_limit_minutes', 15) }}"
                           min="1"
                           placeholder="Example: 15"
                           class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">

                    <p class="mt-1 text-xs text-gray-500">
                        Optional. Leave blank if there is no time limit.
                    </p>

                    @error('time_limit_minutes')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="space-y-3 rounded-lg border p-4 dark:border-neutral-700">
                <label class="flex items-start gap-2">
                    <input type="checkbox"
                           name="is_published"
                           class="mt-1"
                           checked>

                    <span>
                        <span class="block font-medium">
                            Published
                        </span>

                        <span class="text-sm text-gray-500">
                            Make this quiz available to students after completing the course lessons.
                        </span>
                    </span>
                </label>
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Save Quiz
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