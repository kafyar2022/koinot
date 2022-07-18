<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
  public function index($locale, $category)
  {
    $data = Helper::getContents($locale, 'partnership.' . $category);

    return view('pages.partnership.' . $category, compact('data'));
  }
}
