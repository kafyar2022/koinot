<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\News;
use stdClass;

class NewsController extends Controller
{
  public function index()
  {
    $data = new stdClass();
    $data->news = News::orderBy('date', 'desc')->paginate(9);
    $data->banners = Banner::where('page', 'news')->get();

    return view('pages.news.index', compact('data'));
  }

  public function show($slug)
  {
    $data = new stdClass();
    $data->news = News::where('slug', $slug)->first();
    $data->lastNews = News::orderBy('date', 'desc')->take(3)->get();

    return view('pages.news.show', compact('data'));
  }
}
