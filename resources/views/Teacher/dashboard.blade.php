<x-layouts::app :title="'Teacher Dashboard'">

<div class="space-y-6">

    <div>

        <h1 class="text-3xl font-bold text-white">
            Teacher Dashboard
        </h1>

        <p class="text-gray-400">
            Welcome to the PathWise Teaching Portal.
        </p>

    </div>

    <div class="grid md:grid-cols-4 gap-4">

        <div class="rounded-xl bg-neutral-900 border border-neutral-700 p-5">
            <p class="text-gray-400 text-sm">
                Courses
            </p>

            <h2 class="text-3xl font-bold mt-2">
                {{ $totalCourses }}
            </h2>
        </div>

        <div class="rounded-xl bg-neutral-900 border border-neutral-700 p-5">
            <p class="text-gray-400 text-sm">
                Lessons
            </p>

            <h2 class="text-3xl font-bold mt-2">
                {{ $totalLessons }}
            </h2>
        </div>

        <div class="rounded-xl bg-neutral-900 border border-neutral-700 p-5">
            <p class="text-gray-400 text-sm">
                Students
            </p>

            <h2 class="text-3xl font-bold mt-2">
                {{ $totalStudents }}
            </h2>
        </div>

        <div class="rounded-xl bg-neutral-900 border border-neutral-700 p-5">
            <p class="text-gray-400 text-sm">
                Enrollments
            </p>

            <h2 class="text-3xl font-bold mt-2">
                {{ $totalEnrollments }}
            </h2>
        </div>

    </div>

</div>

</x-layouts::app>