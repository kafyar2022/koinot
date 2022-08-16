<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Content;
use App\Models\History;
use App\Models\News;
use App\Models\NewsImg;
use App\Models\Project;
use App\Models\Text;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashController extends Controller
{
  public function index()
  {
    return redirect(route('main'));
  }

  public function toggleState()
  {
    if (session('dashboard') == 'shown') {
      session()->put('dashboard', 'hidden');
    } else {
      session()->put('dashboard', 'shown');
    }
  }

  public function toggleMode()
  {
    if (session('editMode')) {
      session()->put('editMode', false);
    } else {
      session()->put('editMode', true);
    }

    return back();
  }
  public function updateContent(Request $request)
  {
    $content = Content::where('slug', $request->json('slug'))
      ->first();

    $content->content = $request->json('content');
    $content->update();

    return json_encode($content);
  }

  public function updateText(Request $request)
  {
    $text = Text::where('slug', $request->json('slug'))
      ->first();

    $text->text = $request->json('text');
    $text->update();

    return json_encode($text);
  }

  public function histories(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['history'] = null;

        return view('dashboard.pages.histories.show', compact('data'));

      case 'edit':
        $history = History::find($request->history);
        $data['locale'] = $history->locale;
        $data['history'] = $history;
        return view('dashboard.pages.histories.show', compact('data'));

      case 'delete':
        $history = History::find($request->history);
        $history->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['histories'] = History::where('locale', $locale)->get();

        return view('dashboard.pages.histories.index', compact('data'));
    }
  }

  public function historiesPost(Request $request)
  {
    $request->validate(['years' => 'required']);

    switch ($request->action) {
      case 'store':
        $history = new History();
        $history->locale = $request->locale;
        $history->years = $request->years;
        $history->history = $request->history;
        $history->save();

        return back()->with('success', 'Данные успешно сохранена');

      case 'update':
        $history = History::find($request->id);
        $history->years = $request->years;
        $history->history = $request->history;
        $history->update();

        return back()->with('success', 'Данные успешно сохранена');
    }
  }

  public function news(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['news'] = null;

        return view('dashboard.pages.news.show', compact('data'));

      case 'edit':
        $news = News::find($request->news);
        $data['locale'] = $news->locale;
        $data['news'] = $news;
        return view('dashboard.pages.news.show', compact('data'));

      case 'delete':
        $news = News::find($request->news);

        if (count($news->images) != 0) {
          foreach ($news->images as $image) {
            unlink('files/news/' . $image->img);
            unlink('files/news/thumbs/' . $image->img);
            $image->delete();
          }
        }
        $news->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['news'] = News::where('locale', $locale)->latest()->get();

        return view('dashboard.pages.news.index', compact('data'));
    }
  }

  public function newsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $news = new News();
        $news->locale = $request->locale;
        $news->title = $request->title;
        $news->slug = SlugService::createSlug(News::class, 'slug', $news->title);
        $news->content = $request->content;
        $news->save();

        if ($request->hasFile('images')) {
          foreach ($request->file('images') as $file) {
            $img = new NewsImg();
            $img->news_id = $news->id;
            $fileName = uniqid() . '.' . $file->extension();
            $file->move(public_path('files/news'), $fileName);
            Helper::resize_crop_image(360, 180, public_path('files/news/' . $fileName), public_path('files/news/thumbs/' . $fileName));
            $img->img = $fileName;
            $img->save();
          }
        }

        return back()->with('success', 'Новость успешно сохранена');

      case 'update':
        $news = News::find($request->id);
        $news->title = $request->title;
        $news->content = $request->content;

        if ($request->hasFile('images')) {
          foreach ($request->file('images') as $file) {
            $img = new NewsImg();
            $img->news_id = $news->id;
            $fileName = uniqid() . '.' . $file->extension();
            $file->move(public_path('files/news'), $fileName);
            Helper::resize_crop_image(360, 180, public_path('files/news/' . $fileName), public_path('files/news/thumbs/' . $fileName));
            $img->img = $fileName;
            $img->save();
          }
        }

        $news->update();

        return back()->with('success', 'Новость успешно сохранена');
    }
  }

  public function projects(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['project'] = null;

        return view('dashboard.pages.projects.show', compact('data'));

      case 'edit':
        $project = Project::find($request->project);
        $data['locale'] = $project->locale;
        $data['project'] = $project;
        return view('dashboard.pages.projects.show', compact('data'));

      case 'delete':
        $project = Project::find($request->project);
        $project->logo && unlink('files/projects/' . $project->logo);
        $project->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['projects'] = Project::where('locale', $locale)->latest()->get();

        return view('dashboard.pages.projects.index', compact('data'));
    }
  }

  public function projectsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $project = new Project();
        $project->locale = $request->locale;
        $project->by_us = $request->by_us;
        $project->title = $request->title;
        $file = $request->file('logo');
        if ($file) {
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('files/projects'), $fileName);
          $project->logo = $fileName;
        }
        $project->url = $request->url;
        $project->save();

        return back()->with('success', 'Данные успешно сохранены');

      case 'update':
        $project = Project::find($request->id);
        $project->by_us = $request->by_us;
        $project->title = $request->title;
        $project->url = $request->url;
        $file = $request->file('logo');
        if ($file) {
          if ($project->logo && file_exists('files/projects/' . $project->logo)) {
            unlink('files/projects/' . $project->logo);
          }
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('files/projects'), $fileName);
          $project->logo = $fileName;
        }

        $project->update();

        return back()->with('success', 'Данные успешно сохранены');
    }
  }
}
