<?php

namespace App\Services;

use App\Models\AIRecommendation;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Quiz;

class RecommendationService
{
    public function generate(int $studentId, Quiz $quiz, float $percentage): void
    {
        $currentCourse = $quiz->course;

        if (!$currentCourse) {
            return;
        }

        AIRecommendation::where('student_id', $studentId)->delete();

        $excludedCourseIds = Enrollment::where('student_id', $studentId)
            ->whereIn('status', ['active', 'completed'])
            ->pluck('course_id')
            ->toArray();

        if ($percentage >= 85) {
            $targetDifficulty = match ($currentCourse->difficulty_level) {
                'beginner' => 'intermediate',
                'intermediate' => 'advanced',
                'advanced' => 'advanced',
                default => 'intermediate',
            };

            $fallbackReason = 'Recommended because you achieved a strong score of ' . $percentage .
                '% in ' . $currentCourse->title .
                '. You are ready for the next level in this learning path.';
        } elseif ($percentage >= $quiz->passing_score) {
            $targetDifficulty = $currentCourse->difficulty_level;

            $fallbackReason = 'Recommended because you passed ' . $currentCourse->title .
                ' with a score of ' . $percentage .
                '%. This course will help strengthen your skills before moving to a higher level.';
        } else {
            $targetDifficulty = 'beginner';

            $fallbackReason = 'Recommended because your score of ' . $percentage .
                '% shows that you need to strengthen foundational concepts first.';
        }

        $recommendedCourse = Course::where('category_id', $currentCourse->category_id)
            ->where('difficulty_level', $targetDifficulty)
            ->where('status', 'published')
            ->where('id', '!=', $currentCourse->id)
            ->whereNotIn('id', $excludedCourseIds)
            ->has('lessons')
            ->has('quizzes')
            ->orderBy('id')
            ->first();

        if (!$recommendedCourse) {
            $recommendedCourse = Course::where('category_id', $currentCourse->category_id)
                ->where('status', 'published')
                ->where('id', '!=', $currentCourse->id)
                ->whereNotIn('id', $excludedCourseIds)
                ->has('lessons')
                ->has('quizzes')
                ->orderByRaw("
                    CASE difficulty_level
                        WHEN 'beginner' THEN 1
                        WHEN 'intermediate' THEN 2
                        WHEN 'advanced' THEN 3
                        ELSE 4
                    END
                ")
                ->orderBy('id')
                ->first();

            if ($recommendedCourse) {
                $fallbackReason = 'Recommended as the next available complete course in your current learning category based on your latest assessment performance.';
            }
        }

        if (!$recommendedCourse) {
            return;
        }

        $geminiReason = app(GeminiRecommendationService::class)
            ->generateReason($quiz, $recommendedCourse, $percentage);

        AIRecommendation::create([
            'student_id' => $studentId,
            'course_id' => $recommendedCourse->id,
            'recommendation_score' => $percentage,
            'reason' => $geminiReason ?: $fallbackReason,
            'is_viewed' => false,
        ]);
    }
}