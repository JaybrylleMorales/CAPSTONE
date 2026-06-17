<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $categories = CourseCategory::orderBy('name')->get();

        return view('courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:course_categories,id',
            'title' => 'required|max:255',
            'description' => 'required',
            'intro_video' => 'nullable|max:255',
            'difficulty_level' => 'required|in:beginner,intermediate,advanced',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:draft,pending,approved,rejected,published',
            'estimated_hours' => 'nullable|integer|min:1',
            'certificate_available' => 'nullable',
        ]);

        Course::create([
            'teacher_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'intro_video' => $request->intro_video,
            'difficulty_level' => $request->difficulty_level,
            'price' => $request->price,
            'status' => $request->status,
            'estimated_hours' => $request->estimated_hours,
            'certificate_available' => $request->has('certificate_available'),
        ]);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $categories = CourseCategory::orderBy('name')->get();

        return view('courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'category_id' => 'required|exists:course_categories,id',
            'title' => 'required|max:255',
            'description' => 'required',
            'intro_video' => 'nullable|max:255',
            'difficulty_level' => 'required|in:beginner,intermediate,advanced',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:draft,pending,approved,rejected,published',
            'estimated_hours' => 'nullable|integer|min:1',
            'certificate_available' => 'nullable',
        ]);

        $course->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'intro_video' => $request->intro_video,
            'difficulty_level' => $request->difficulty_level,
            'price' => $request->price,
            'status' => $request->status,
            'estimated_hours' => $request->estimated_hours,
            'certificate_available' => $request->has('certificate_available'),
        ]);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully.');
    }

    public function marketplace()
    {
        $courses = Course::with(['category', 'teacher'])
            ->where('status', 'published')
            ->latest()
            ->get();

        return view('student.marketplace', compact('courses'));
    }

    public function showStudentCourse(Course $course)
    {
        return view('student.course-show', compact('course'));
    }

    public function enroll(Course $course)
    {
        Enrollment::firstOrCreate(
            [
                'student_id' => auth()->id(),
                'course_id' => $course->id,
            ],
            [
                'status' => 'active',
                'enrolled_at' => now(),
                'progress_percentage' => 0,
            ]
        );

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'Successfully enrolled in course.');
    }

     public function myCourses()
   {
     $enrollments = Enrollment::with('course')
        ->where('student_id', auth()->id())
        ->latest()
        ->get();

     return view('student.my-courses', compact('enrollments'));
   }

   public function teacherCourses()
{
    $courses = Course::withCount(['lessons', 'enrollments'])
        ->where('teacher_id', auth()->id())
        ->latest()
        ->get();

    return view('teacher.my-courses', compact('courses'));
}

public function teacherCourseStudents(Course $course)
{
    $enrollments = Enrollment::with('student')
        ->where('course_id', $course->id)
        ->latest()
        ->get();

    return view('teacher.course-students', compact('course', 'enrollments'));
}
}