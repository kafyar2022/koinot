<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function index()
  {
    $data = Helper::getContents(app()->getLocale(), 'news');

    return view('pages.news.index', compact('data'));
  }

  public function show($slug)
  {
    $data = Helper::getContents(app()->getLocale(), 'news.show');

    return view('pages.news.show', compact('data'));
  }
}
