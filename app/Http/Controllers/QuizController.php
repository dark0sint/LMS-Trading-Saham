<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function take(Quiz $quiz)
    {
        return view('quizzes.take', compact('quiz'));
    }

    public function submit(Request $request, Quiz $quiz)
    {
        // Logic to calculate score (simplified)
        $score = 0;
        foreach ($quiz->questions as $question) {
            if ($request->input('answer_' . $question->id) == $question->correct_answer) {
                $score++;
            }
        }
        // Save score to user progress or a results table
        return redirect()->back()->with('score', $score);
    }
}
