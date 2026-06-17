<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::with(['course', 'lesson'])->latest()->get();

        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        $courses = Course::orderBy('title')->get();
        $lessons = Lesson::orderBy('title')->get();

        return view('quizzes.create', compact('courses', 'lessons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'lesson_id' => 'nullable|exists:lessons,id',
            'title' => 'required|max:255',
            'description' => 'nullable',
            'passing_score' => 'required|integer|min:1|max:100',
            'time_limit_minutes' => 'nullable|integer|min:1',
            'is_published' => 'nullable',
        ]);

        Quiz::create([
            'course_id' => $request->course_id,
            'lesson_id' => $request->lesson_id,
            'title' => $request->title,
            'description' => $request->description,
            'passing_score' => $request->passing_score,
            'time_limit_minutes' => $request->time_limit_minutes,
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()
            ->route('quizzes.index')
            ->with('success', 'Quiz created successfully.');
    }

    public function edit(Quiz $quiz)
    {
        $courses = Course::orderBy('title')->get();
        $lessons = Lesson::orderBy('title')->get();

        return view('quizzes.edit', compact('quiz', 'courses', 'lessons'));
    }

    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'lesson_id' => 'nullable|exists:lessons,id',
            'title' => 'required|max:255',
            'description' => 'nullable',
            'passing_score' => 'required|integer|min:1|max:100',
            'time_limit_minutes' => 'nullable|integer|min:1',
            'is_published' => 'nullable',
        ]);

        $quiz->update([
            'course_id' => $request->course_id,
            'lesson_id' => $request->lesson_id,
            'title' => $request->title,
            'description' => $request->description,
            'passing_score' => $request->passing_score,
            'time_limit_minutes' => $request->time_limit_minutes,
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()
            ->route('quizzes.index')
            ->with('success', 'Quiz updated successfully.');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect()
            ->route('quizzes.index')
            ->with('success', 'Quiz deleted successfully.');
    }
}