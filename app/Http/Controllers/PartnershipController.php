<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class PartnershipController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'partnership.investors');

    return view('pages.partnership.index', compact('data'));
  }
}
