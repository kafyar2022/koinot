<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
  public function index($category)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'partnership.' . $category);

    return view('pages.partnership.' . $category, compact('data'));
  }
}
