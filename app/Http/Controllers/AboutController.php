<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\History;

class AboutController extends Controller
{
  public function index($category)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'about.' . $category);
    $data['banners'] = Banner::where('page', 'about.' . $category)->get();


    switch ($category) {
      case 'history':
        $data['histories'] = History::where('locale', $locale)->get();

        return view('pages.about.history', compact('data'));

      case 'mission':
        return view('pages.about.mission', compact('data'));

      default:
        return abort(404);
    }
  }
}
