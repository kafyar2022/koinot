<?php

namespace App\Http\Controllers;

use App\Mail\QuizMail;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class CarrierController extends Controller
{
  public function index()
  {
    $data = new stdClass();
    $data->banners = Banner::where('page', 'carrier')->get();

    return view('pages.carrier.index', compact('data'));
  }

  public function test()
  {
    $data = new stdClass();
    $data->banners = Banner::where('page', 'carrier.test')->get();

    return view('pages.carrier.test', compact('data'));
  }

  public function sendTest(Request $request)
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
