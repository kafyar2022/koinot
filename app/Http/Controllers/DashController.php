<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\History;
use App\Models\Text;
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
}
