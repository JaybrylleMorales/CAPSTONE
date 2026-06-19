<x-layouts::app :title="'My Courses'">

<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold">
            My Courses
        </h1>

        <p class="text-zinc-500">
            Courses assigned to you.
        </p>
    </div>

    <div class="grid gap-6">

        @forelse($courses as $course)

            <div class="border rounded-xl p-6">

                <h2 class="text-xl font-bold">
                    {{ $course->title }}
                </h2>

                <p class="text-sm text-zinc-500 mt-1">
                    {{ $course->category->name ?? 'No Category' }}
                </p>

                <p class="text-sm mt-2">
                    Status:
                    <span class="font-bold">
                        {{ ucfirst($course->status) }}
                    </span>
                </p>

                <div class="grid grid-cols-3 gap-4 mt-4">

                    <div>
                        <p class="text-sm text-zinc-500">Lessons</p>
                        <p class="text-2xl font-bold">
                            {{ $course->lessons->count() }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-zinc-500">Students</p>
                        <p class="text-2xl font-bold">
                            {{ $course->enrollments->count() }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-zinc-500">Price</p>
                        <p class="text-2xl font-bold">
                            ₱{{ number_format($course->price, 2) }}
                        </p>
                    </div>

                </div>

                <div class="mt-5 flex flex-wrap gap-2">

                    <a href="{{ route('teacher.course.students', $course) }}"
                       class="inline-block px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm">
                        View Students
                    </a>

                    <a href="{{ route('teacher.lessons', $course) }}"
                       class="inline-block px-3 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg text-sm">
                        Manage Lessons
                    </a>

                    @if($course->status === 'draft' || $course->status === 'rejected')
                        <form action="{{ route('teacher.courses.submit', $course) }}"
                              method="POST"
                              class="inline-block">
                            @csrf

                            <button type="submit"
                                    class="px-3 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg text-sm">
                                Submit for Approval
                            </button>
                        </form>
                    @else
                        <span class="inline-block px-3 py-2 bg-gray-700 text-white rounded-lg text-sm">
                            {{ ucfirst($course->status) }}
                        </span>
                    @endif

                </div>

            </div>

        @empty

            <div class="border rounded-xl p-6">
                No courses found.
            </div>

        @endforelse

    </div>

</div>

</x-layouts::app>