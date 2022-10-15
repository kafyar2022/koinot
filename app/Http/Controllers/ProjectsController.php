<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function index(Request $request)
  {
    $locale = app()->getLocale();
    $data = Helper::getContents($locale, 'projects');
    $data['banners'] = Banner::where('page', 'projects')->get();
    $data['projects'] = Project::where('locale', $locale)->get();

    return view('pages.projects.index', compact('data'));
  }
}
