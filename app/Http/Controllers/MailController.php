<?php

namespace App\Http\Controllers;

use App\Mail\QuizMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
  public function senQuizResult(Request $request)
  {
    $stages = json_decode($request->stages);

    $correctAnswers = 0;
    $incorrectAnswers = 0;

    foreach ($stages as $stage) {
      foreach ($stage->questions as $question) {
        $question->answer == $question->userAnswer
          ? $correctAnswers = $correctAnswers + 1
          : $incorrectAnswers = $incorrectAnswers + 1;
      }
    }

    $totalQuestions = $correctAnswers + $incorrectAnswers;

    $result = ($correctAnswers * 100) / $totalQuestions;

    $details = [
      'result' => round($result),
      'name' => $request->name,
      'email' => $request->email,
      'tel' => $request->tel,
      'message' => $request->message,
      'stages' => $stages,
    ];

    $file = $request->file('cv');

    Mail::to('hr@koinotinav.tj')->send(new QuizMail($details, $file));

    return json_encode(['message' => 'success']);
  }
}
