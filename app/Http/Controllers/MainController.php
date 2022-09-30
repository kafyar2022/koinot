<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\History;
use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'main');

    $data['histories'] = History::where('locale', $locale)
      ->get();

    $data['news'] = News::where('locale', $locale)
      ->orderBy('date', 'desc')
      ->take(3)
      ->get();

    $data['projects'] = Project::where('locale', $locale)
      ->get();

    $data['banners'] = Banner::where('page', 'main')->get();

    return view('pages.main.index', compact('data'));
  }
}
