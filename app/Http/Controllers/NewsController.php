<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents(app()->getLocale(), 'news');

    $data['news'] = News::where('locale', $locale)
      ->paginate(12);

    return view('pages.news.index', compact('data'));
  }

  public function show($slug)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents(app()->getLocale(), 'news.show');

    $data['news'] = News::where('slug', $slug)
      ->first();

    return view('pages.news.show', compact('data'));
  }
}
