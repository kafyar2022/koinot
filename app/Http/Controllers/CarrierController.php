<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\News;

class CarrierController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'carrier');
    $data['banners'] = Banner::where('page', 'carrier')->get();

    return view('pages.carrier.index', compact('data'));
  }

  public function test()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'carrier.test');

    $data['news'] = News::where('locale', $locale)
      ->first();

    $data['banners'] = Banner::where('page', 'carrier.test')->get();

    return view('pages.carrier.test', compact('data'));
  }
}
