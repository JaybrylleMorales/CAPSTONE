<x-layouts::app :title="__('Edit Course')">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">
            Edit Course
        </h1>

        <p class="text-sm text-gray-500">
            Update course details, category, difficulty level, pricing, and certificate availability.
        </p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <form action="{{ route('courses.update', $course) }}"
              method="POST"
              class="space-y-5">

            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Course Title
                </label>

                <input type="text"
                       name="title"
                       value="{{ old('title', $course->title) }}"
                       placeholder="Example: Entrepreneurship Essentials"
                       class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                       required>

                <p class="mt-1 text-xs text-gray-500">
                    Enter the official title of the course.
                </p>

                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Description
                </label>

                <textarea name="description"
                          rows="5"
                          placeholder="Example: This course introduces students to the basics of entrepreneurship, business planning, and financial management."
                          class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">{{ old('description', $course->description) }}</textarea>

                <p class="mt-1 text-xs text-gray-500">
                    Briefly describe what students will learn in this course.
                </p>

                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium">
                    Category
                </label>

                <select name="category_id"
                        class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                        required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            @selected(old('category_id', $course->category_id) == $category->id)>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                <p class="mt-1 text-xs text-gray-500">
                    Select the category where this course belongs.
                </p>

                @error('category_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid gap-4 md:grid-cols-2">

                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Price
                    </label>

                    <input type="number"
                           step="0.01"
                           name="price"
                           value="{{ old('price', $course->price) }}"
                           placeholder="Example: 0.00"
                           class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                           required>

                    <p class="mt-1 text-xs text-gray-500">
                        Enter 0.00 if the course is free.
                    </p>

                    @error('price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Estimated Hours
                    </label>

                    <input type="number"
                           name="estimated_hours"
                           value="{{ old('estimated_hours', $course->estimated_hours) }}"
                           placeholder="Example: 5"
                           class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3">

                    <p class="mt-1 text-xs text-gray-500">
                        Estimated total hours needed to complete the course.
                    </p>

                    @error('estimated_hours')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="grid gap-4 md:grid-cols-2">

                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Difficulty Level
                    </label>

                    <select name="difficulty_level"
                            class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                            required>
                        <option value="beginner" @selected(old('difficulty_level', $course->difficulty_level) == 'beginner')>
                            Beginner
                        </option>
                        <option value="intermediate" @selected(old('difficulty_level', $course->difficulty_level) == 'intermediate')>
                            Intermediate
                        </option>
                        <option value="advanced" @selected(old('difficulty_level', $course->difficulty_level) == 'advanced')>
                            Advanced
                        </option>
                    </select>

                    <p class="mt-1 text-xs text-gray-500">
                        This helps the AI recommend courses based on student performance.
                    </p>

                    @error('difficulty_level')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">
                        Course Status
                    </label>

                    <select name="status"
                            class="w-full rounded border border-neutral-700 bg-neutral-900 text-white p-3"
                            required>
                        <option value="draft" @selected(old('status', $course->status) == 'draft')>Draft</option>
                        <option value="pending" @selected(old('status', $course->status) == 'pending')>Pending</option>
                        <option value="approved" @selected(old('status', $course->status) == 'approved')>Approved</option>
                        <option value="rejected" @selected(old('status', $course->status) == 'rejected')>Rejected</option>
                        <option value="published" @selected(old('status', $course->status) == 'published')>Published</option>
                    </select>

                    <p class="mt-1 text-xs text-gray-500">
                        Published courses will be visible to students in the marketplace.
                    </p>

                    @error('status')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="space-y-3 rounded-lg border p-4 dark:border-neutral-700">
                <label class="flex items-start gap-2">
                    <input type="checkbox"
                           name="certificate_available"
                           value="1"
                           class="mt-1"
                           @checked(old('certificate_available', $course->certificate_available))>

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
                    Update Course
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