<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
  public function index()
  {
    $data = Helper::getContents(app()->getLocale(), 'contribution');

    return view('pages.contribution.index', compact('data'));
  }

  public function show($slug)
  {
    $data = Helper::getContents(app()->getLocale(), 'contribution.show');

    return view('pages.contribution.show', compact('data'));
  }
}
