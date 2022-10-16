<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\Contribution;
use App\Models\History;
use App\Models\Image;
use App\Models\News;
use App\Models\Project;
use Cviebrock\EloquentSluggable\Services\SlugService;
use DateTime;
use Illuminate\Http\Request;
use stdClass;

class AdminController extends Controller
{
  public function index()
  {
    return redirect(route('admin.banners'));
  }

  public function banners(Request $request)
  {
    $data = new stdClass();

    switch ($request->action) {
      case 'show':
        $data->banners = Banner::where('page', $request->page)->get();
        $data->page = $request->page;

        return view('admin.pages.banners.show', compact('data'));

      case 'delete':
        $banner = Banner::find($request->page);
        $banner->img
          && file_exists($banner->img)
          && unlink($banner->img);
        $banner->delete();

        return 'success';

      default:
        return view('admin.pages.banners.index');
    }
  }

  public function bannersPost(Request $request)
  {
    switch ($request->action) {
      case 'store':
        if ($request->hasFile('images')) {
          foreach ($request->file('images') as $file) {
            $banner = new Banner();
            $banner->page = $request->page;
            $fileName = uniqid() . '.' . $file->extension();
            $file->move(public_path('img/banners'), $fileName);
            Helper::resize_crop_image(
              1920,
              540,
              public_path('img/banners/' . $fileName),
              public_path('img/banners/' . $fileName)
            );
            $banner->img = 'img/banners/' . $fileName;
            $banner->save();
          }
        }

        return back()->with('success', 'Данные успешно сохранены');
    }
  }

  public function histories(Request $request)
  {
    $data = new stdClass();

    switch ($request->action) {
      case 'create':
        $data->history = null;
        return view('admin.pages.histories.show', compact('data'));

      case 'edit':
        $data->history = History::find($request->history);

        return view('admin.pages.histories.show', compact('data'));

      case 'delete':
        $history = History::find($request->history);
        $history->delete();

        return back();

      default:
        $data->histories = History::get();

        return view('admin.pages.histories.index', compact('data'));
    }
  }

  public function historiesPost(Request $request)
  {
    $request->validate(['years' => 'required']);

    switch ($request->action) {
      case 'store':
        $history = new History();
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
    $data = new stdClass();

    switch ($request->action) {
      case 'create':
        $data->news = null;

        return view('admin.pages.news.show', compact('data'));

      case 'edit':
        $data->news = News::find($request->news);

        return view('admin.pages.news.show', compact('data'));

      case 'delete':
        $news = News::find($request->news);

        if (count($news->images) != 0) {
          foreach ($news->images as $image) {
            unlink($image->src);
            unlink($image->thumb_src);
            $image->delete();
          }
        }
        $news->delete();

        return back();

      default:
        $data->news = News::orderBy('date', 'desc')->get();

        return view('admin.pages.news.index', compact('data'));
    }
  }

  public function newsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $news = new News();
        $news->title = $request->title;
        $news->slug = SlugService::createSlug(News::class, 'slug', $news->title);
        $news->content = $request->content;
        $request->date ? $news->date = $request->date : $news->date = new DateTime();
        $news->save();

        if ($request->hasFile('images')) {
          foreach ($request->file('images') as $file) {
            $img = new Image();
            $img->news_id = $news->id;
            $fileName = uniqid() . '.' . $file->extension();
            $file->move(public_path('img/news'), $fileName);
            Helper::resize_crop_image(
              1280,
              540,
              public_path('img/news/' . $fileName),
              public_path('img/news/' . $fileName)
            );
            Helper::resize_crop_image(
              360,
              150,
              public_path('img/news/' . $fileName),
              public_path('img/news/thumbs/' . $fileName)
            );
            $img->src = 'img/news/' . $fileName;
            $img->thumb_src = 'img/news/thumbs/' . $fileName;
            $img->save();
          }
        }

        return back()->with('success', 'Новость успешно сохранена');

      case 'update':
        $news = News::find($request->id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->date = $request->date;

        if ($request->hasFile('images')) {
          foreach ($request->file('images') as $file) {
            $img = new Image();
            $img->news_id = $news->id;
            $fileName = uniqid() . '.' . $file->extension();
            $file->move(public_path('img/news'), $fileName);
            Helper::resize_crop_image(
              1280,
              540,
              public_path('img/news/' . $fileName),
              public_path('img/news/' . $fileName)
            );
            Helper::resize_crop_image(
              360,
              150,
              public_path('img/news/' . $fileName),
              public_path('img/news/thumbs/' . $fileName)
            );
            $img->src = 'img/news/' . $fileName;
            $img->thumb_src = 'img/news/thumbs' . $fileName;
            $img->save();
          }
        }

        $news->update();

        return back()->with('success', 'Новость успешно сохранена');
    }
  }

  public function deleteImage($id)
  {
    $img = Image::find($id);
    unlink($img->src);
    unlink($img->thumb_src);
    $img->delete();

    return 'success';
  }

  public function projects(Request $request)
  {
    $data = new stdClass();

    switch ($request->action) {
      case 'create':
        $data->project = null;

        return view('admin.pages.projects.show', compact('data'));

      case 'edit':
        $data->project = Project::find($request->project);

        return view('admin.pages.projects.show', compact('data'));

      case 'delete':
        $project = Project::find($request->project);
        $project->logo && unlink($project->logo);
        $project->delete();

        return back();

      default:
        $data->projects = Project::latest()->get();

        return view('admin.pages.projects.index', compact('data'));
    }
  }

  public function projectsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $project = new Project();
        $project->title = $request->title;
        $file = $request->file('logo');
        if ($file) {
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('img/projects'), $fileName);
          $project->logo = 'img/projects/' . $fileName;
        }
        $project->url = $request->url;
        $project->save();

        return back()->with('success', 'Данные успешно сохранены');

      case 'update':
        $project = Project::find($request->id);
        $project->title = $request->title;
        $project->url = $request->url;
        $file = $request->file('logo');
        if ($file) {
          $project->logo
            && file_exists($project->logo)
            &&  unlink($project->logo);

          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('img/projects'), $fileName);
          $project->logo = 'img/projects/' . $fileName;
        }

        $project->update();

        return back()->with('success', 'Данные успешно сохранены');
    }
  }

  public function contributions(Request $request)
  {
    $data = new stdClass();

    switch ($request->action) {
      case 'create':
        $data->contribution = null;

        return view('admin.pages.contributions.show', compact('data'));

      case 'edit':
        $data->contribution = Contribution::find($request->contribution);

        return view('admin.pages.contributions.show', compact('data'));

      case 'delete':
        $contribution = Contribution::find($request->contribution);

        if (count($contribution->images) != 0) {
          foreach ($contribution->images as $image) {
            unlink($image->src);
            unlink($image->thumb_src);
            $image->delete();
          }
        }
        $contribution->delete();

        return back();

      default:
        $data->contributions = Contribution::orderBy('date', 'desc')->get();

        return view('admin.pages.contributions.index', compact('data'));
    }
  }

  public function contributionsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $contribution = new Contribution();
        $contribution->title = $request->title;
        $contribution->slug = SlugService::createSlug(Contribution::class, 'slug', $contribution->title);
        $contribution->content = $request->content;
        $request->date ? $contribution->date = $request->date : $contribution->date = new DateTime();
        $contribution->save();

        if ($request->hasFile('images')) {
          foreach ($request->file('images') as $file) {
            $img = new Image();
            $img->contribution_id = $contribution->id;
            $fileName = uniqid() . '.' . $file->extension();
            $file->move(public_path('img/contributions'), $fileName);
            Helper::resize_crop_image(
              1280,
              540,
              public_path('img/contributions/' . $fileName),
              public_path('img/contributions/' . $fileName),
            );
            Helper::resize_crop_image(
              360,
              310,
              public_path('img/contributions/' . $fileName),
              public_path('img/contributions/thumbs/' . $fileName)
            );
            $img->src = 'img/contributions/' . $fileName;
            $img->thumb_src = 'img/contributions/thumbs/' . $fileName;
            $img->save();
          }
        }

        return back()->with('success', 'Данные успешно сохранены');

      case 'update':
        $contribution = Contribution::find($request->id);
        $contribution->title = $request->title;
        $contribution->content = $request->content;
        $contribution->date = $request->date;

        if ($request->hasFile('images')) {
          foreach ($request->file('images') as $file) {
            $img = new Image();
            $img->contribution_id = $contribution->id;
            $fileName = uniqid() . '.' . $file->extension();
            $file->move(public_path('img/contributions'), $fileName);
            Helper::resize_crop_image(
              1280,
              540,
              public_path('img/contributions/' . $fileName),
              public_path('img/contributions/' . $fileName),
            );
            Helper::resize_crop_image(
              360,
              310,
              public_path('img/contributions/' . $fileName),
              public_path('img/contributions/thumbs/' . $fileName)
            );
            $img->src = 'img/contributions/' . $fileName;
            $img->thumb_src = 'img/contributions/thumbs/' . $fileName;
            $img->save();
          }
        }

        $contribution->update();

        return back()->with('success', 'Данные успешно сохранены');
    }
  }
}
