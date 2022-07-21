<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
    $data = Helper::getContents(app()->getLocale(), 'main');

    return view('pages.main.index', compact('data'));
  }
}
