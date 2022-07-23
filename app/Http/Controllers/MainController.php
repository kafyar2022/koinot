<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\History;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents(app()->getLocale(), 'main');

    $data['histories'] = History::where('locale', $locale)
      ->get();

    return view('pages.main.index', compact('data'));
  }
}
