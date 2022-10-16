<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contribution;
use stdClass;

class ContributionController extends Controller
{
  public function index()
  {
    $data = new stdClass();
    $data->banners = Banner::where('page', 'contributions')->get();
    $data->contributions = Contribution::orderBy('date', 'desc')->paginate(9);

    return view('pages.contribution.index', compact('data'));
  }

  public function show($slug)
  {
    $data = new stdClass();
    $data->contribution = Contribution::where('slug', $slug)->first();
    $data->lastContributions = Contribution::orderBy('date', 'desc')->take(3)->get();

    return view('pages.contribution.show', compact('data'));
  }
}
