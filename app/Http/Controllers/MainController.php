<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\History;
use App\Models\News;
use App\Models\Project;
use stdClass;

class MainController extends Controller
{
  public function index()
  {
    $data = new stdClass();
    $data->histories = History::get();
    $data->news = News::orderBy('date', 'desc')->take(3)->get();
    $data->projects = Project::get();
    $data->banners = Banner::where('page', 'main')->get();

    return view('pages.main.index', compact('data'));
  }
}
