<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getContents($locale, 'carrier');

    return view('pages.carrier.index', compact('data'));
  }

  public function test($locale)
  {
    $data = Helper::getContents($locale, 'carrier.test');

    return view('pages.carrier.test', compact('data'));
  }
}
