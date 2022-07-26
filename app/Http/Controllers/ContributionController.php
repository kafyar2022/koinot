<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Contribution;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'contribution');

    $data['contributions'] = Contribution::where('locale', $locale)
      ->paginate(9);

    return view('pages.contribution.index', compact('data'));
  }

  public function show($slug)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'contribution.show');

    $data['contribution'] = Contribution::where('slug', $slug)
      ->first();

    $data['last-contributions'] = Contribution::where('locale', $locale)
      ->latest()
      ->take(3)
      ->get();

    return view('pages.contribution.show', compact('data'));
  }
}
