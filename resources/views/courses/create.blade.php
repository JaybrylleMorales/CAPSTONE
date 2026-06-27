<x-layouts::app :title="__('Create Course')">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Create Course
        </h1>

        <p class="text-sm text-gray-500">
            Add a new course to PathWise. Courses will contain lessons, quizzes, and certificates.
        </p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <form action="{{ route('courses.store') }}"
              method="POST"
              class="space-y-5">

            @csrf

            <div>
                <label class="block mb-1 text-sm font-medium">Course Title</label>

                <input type="text"
                       name="title"
                       value="{{ old('title') }}"
                       placeholder="Example: Entrepreneurship Essentials"
                       class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                       required>
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">Description</label>

                <textarea name="description"
                          rows="5"
                          placeholder="Example: Learn the fundamentals of entrepreneurship including business planning, market research, financial management, and growth strategies."
                          class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">{{ old('description') }}</textarea>
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">Category</label>

                <select name="category_id"
                        class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                        required>
                    <option value="">Select Category</option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-medium">Price</label>

                    <input type="number"
                           step="0.01"
                           name="price"
                           value="{{ old('price', 0) }}"
                           placeholder="Example: 0.00"
                           class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                           required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Estimated Hours</label>

                    <input type="number"
                           name="estimated_hours"
                           value="{{ old('estimated_hours') }}"
                           placeholder="Example: 5"
                           class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">
                </div>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="block mb-1 text-sm font-medium">Difficulty Level</label>

                    <select name="difficulty_level"
                            class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                            required>
                        <option value="beginner" @selected(old('difficulty_level') == 'beginner')>Beginner</option>
                        <option value="intermediate" @selected(old('difficulty_level', 'intermediate') == 'intermediate')>Intermediate</option>
                        <option value="advanced" @selected(old('difficulty_level') == 'advanced')>Advanced</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Course Status</label>

                    <select name="status"
                            class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                            required>
                        <option value="draft" @selected(old('status') == 'draft')>Draft</option>
                        <option value="pending" @selected(old('status') == 'pending')>Pending</option>
                        <option value="approved" @selected(old('status') == 'approved')>Approved</option>
                        <option value="published" @selected(old('status', 'published') == 'published')>Published</option>
                    </select>
                </div>
            </div>

            <div class="space-y-3 rounded-lg border p-4 dark:border-neutral-700">
                <label class="flex items-start gap-2">
                    <input type="checkbox"
                           name="certificate_available"
                           value="1"
                           class="mt-1"
                           @checked(old('certificate_available', true))>

                    <span>
                        <span class="block font-medium">Certificate Available</span>
                        <span class="text-sm text-gray-500">
                            Allow students to earn a certificate after completing this course.
                        </span>
                    </span>
                </label>
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="rounded bg-blue-600 hover:bg-blue-700 px-4 py-2 text-white">
                    Save Course
                </button>

                <a href="{{ route('courses.index') }}"
                   class="rounded bg-gray-600 hover:bg-gray-700 px-4 py-2 text-white">
                    Cancel
                </a>
            </div>

        </form>

    </div>

</div>

</x-layouts::app>