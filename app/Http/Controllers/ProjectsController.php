<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Project;
use Illuminate\Http\Request;
use stdClass;

class ProjectsController extends Controller
{
  public function index(Request $request)
  {
    $data = new stdClass();
    $data->banners = Banner::where('page', 'projects')->get();
    $data->projects = Project::latest()->get();

    return view('pages.projects.index', compact('data'));
  }
}
