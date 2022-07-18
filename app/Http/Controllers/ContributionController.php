<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getContents($locale, 'contribution');

    return view('pages.contribution.index', compact('data'));
  }

  public function show($locale, $slug)
  {
    $data = Helper::getContents($locale, 'contribution.show');

    return view('pages.contribution.show', compact('data'));
  }
}
