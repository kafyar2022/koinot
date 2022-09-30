<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\News;

class NewsController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents(app()->getLocale(), 'news');

    $data['news'] = News::where('locale', $locale)
      ->orderBy('date', 'desc')
      ->paginate(9);

    $data['banners'] = Banner::where('page', 'news')->get();

    return view('pages.news.index', compact('data'));
  }

  public function show($slug)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents(app()->getLocale(), 'news.show');

    $data['news'] = News::where('slug', $slug)
      ->orderBy('date', 'desc')
      ->first();

    $data['last-news'] = News::where('locale', $locale)
      ->orderBy('date', 'desc')
      ->take(3)
      ->get();

    return view('pages.news.show', compact('data'));
  }
}
