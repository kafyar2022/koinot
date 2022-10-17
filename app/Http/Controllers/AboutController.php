<?php

namespace App\Http\Controllers;

use App\Models\History;
use stdClass;

class AboutController extends Controller
{
  public function index($category)
  {
    $data = new stdClass();

    switch ($category) {
      case 'history':
        $data->histories = History::get();

        return view('pages.about.history', compact('data'));

      case 'mission':
        return view('pages.about.mission', compact('data'));

      default:
        return abort(404);
    }
  }
}
