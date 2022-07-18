<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getContents($locale, 'projects');

    return view('pages.projects.index', compact('data'));
  }
}
