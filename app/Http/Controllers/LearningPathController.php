<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\LearningPath;
use Illuminate\Http\Request;

class LearningPathController extends Controller
{
    public function index()
    {
        $learningPaths = LearningPath::with('courses')
            ->latest()
            ->get();

        return view('learning-paths.index', compact('learningPaths'));
    }

    public function create()
    {
        $courses = Course::orderBy('title')->get();

        return view('learning-paths.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'course_ids' => 'nullable|array',
            'course_ids.*' => 'exists:courses,id',
        ]);

        $learningPath = LearningPath::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $learningPath->courses()->sync($request->course_ids ?? []);

        return redirect()
            ->route('learning-paths.index')
            ->with('success', 'Learning path created successfully.');
    }

    public function show(LearningPath $learningPath)
    {
        $learningPath->load('courses');

        return view('learning-paths.show', compact('learningPath'));
    }

    public function edit(LearningPath $learningPath)
    {
        $courses = Course::orderBy('title')->get();

        $selectedCourses = $learningPath->courses()
            ->pluck('courses.id')
            ->toArray();

        return view(
            'learning-paths.edit',
            compact('learningPath', 'courses', 'selectedCourses')
        );
    }

    public function update(Request $request, LearningPath $learningPath)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'course_ids' => 'nullable|array',
            'course_ids.*' => 'exists:courses,id',
        ]);

        $learningPath->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $learningPath->courses()->sync($request->course_ids ?? []);

        return redirect()
            ->route('learning-paths.index')
            ->with('success', 'Learning path updated successfully.');
    }

    public function destroy(LearningPath $learningPath)
    {
        $learningPath->courses()->detach();

        $learningPath->delete();

        return redirect()
            ->route('learning-paths.index')
            ->with('success', 'Learning path deleted successfully.');
    }
    public function studentIndex()
{
    $learningPaths = LearningPath::with('courses')
        ->latest()
        ->get();

    return view('student.learning-paths.index', compact('learningPaths'));
}

public function studentShow(LearningPath $learningPath)
{
    $learningPath->load('courses.category');

    return view('student.learning-paths.show', compact('learningPath'));
}
}