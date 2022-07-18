<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getContents($locale, 'news');

    return view('pages.news.index', compact('data'));
  }

  public function show($locale, $slug)
  {
    $data = Helper::getContents($locale, 'news.show');

    return view('pages.news.show', compact('data'));
  }
}
