<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\History;
use App\Models\Specialist;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index($category)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'about.' . $category);

    switch ($category) {
      case 'history':
        $data['histories'] = History::where('locale', $locale)
          ->get();
        break;

      case 'management':
        $data['specialists'] = Specialist::select('id', 'locale', 'position_id', 'name', 'surname', 'avatar', 'about')
          ->where('locale', $locale)
          ->get();
        break;
    }

    return view('pages.about.' . $category, compact('data'));
  }
}
