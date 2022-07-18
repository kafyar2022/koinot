<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index($locale, $category)
  {
    $data = Helper::getContents($locale, 'about.' . $category);

    return view('pages.about.' . $category, compact('data'));
  }
}
