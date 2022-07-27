<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\News;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'carrier');

    return view('pages.carrier.index', compact('data'));
  }

  public function test()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'carrier.test');

    $data['news'] = News::where('locale', $locale)
      ->first();

    return view('pages.carrier.test', compact('data'));
  }
}
