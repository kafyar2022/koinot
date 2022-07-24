<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\History;
use App\Models\News;
use App\Models\Partner;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents(app()->getLocale(), 'main');

    $data['histories'] = History::where('locale', $locale)
      ->get();

    $data['news'] = News::where('locale', $locale)
      ->orderBy('id', 'asc')
      ->take(3)
      ->get();

    $data['partners'] = Partner::where('locale', $locale)
      ->get();

    return view('pages.main.index', compact('data'));
  }
}
