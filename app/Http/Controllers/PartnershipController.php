<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
  public function index($category)
  {
    $data = Helper::getContents(app()->getLocale(), 'partnership.' . $category);

    return view('pages.partnership.' . $category, compact('data'));
  }
}
