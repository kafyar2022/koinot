<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index($category)
  {
    $data = Helper::getContents(app()->getLocale(), 'about.' . $category);

    return view('pages.about.' . $category, compact('data'));
  }
}
