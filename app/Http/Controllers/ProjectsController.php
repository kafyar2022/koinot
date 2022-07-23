<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function index()
  {
    $data = Helper::getContents(app()->getLocale(), 'projects');

    return view('pages.projects.index', compact('data'));
  }
}
