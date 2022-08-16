<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix(parseLocale())->group(function () {
  Route::get('/', [MainController::class, 'index'])->name('main');
  Route::get('/about/{category}', [AboutController::class, 'index'])->name('about');
  Route::get('/news', [NewsController::class, 'index'])->name('news');
  Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
  Route::get('/projects/{category?}', [ProjectsController::class, 'index'])->name('projects');
  Route::get('/partnership/{category}', [PartnershipController::class, 'index'])->name('partnership');
  Route::get('/contribution', [ContributionController::class, 'index'])->name('contribution');
  Route::get('/contribution/{slug}', [ContributionController::class, 'show'])->name('contribution.show');
  Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
  Route::get('/carrier', [CarrierController::class, 'index'])->name('carrier');
  Route::get('/carrier/test', [CarrierController::class, 'test'])->name('carrier.test');
});

Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::group(['middleware' => ['AuthCheck']], function () {
  Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
  Route::get('/dashboard/toggle-mode', [DashController::class, 'toggleMode'])->name('mode');
  Route::get('/dashboard/toggle-state', [DashController::class, 'toggleState']);
  Route::post('/contents/update', [DashController::class, 'updateContent']);
  Route::post('/texts/update', [DashController::class, 'updateText']);

  Route::get('/dashboard/histories/{action?}/{history?}', [DashController::class, 'histories'])->name('dashboard.histories');
  Route::post('/dashboard/histories/{action?}', [DashController::class, 'historiesPost'])->name('histories.post');

  Route::get('/dashboard/news/{action?}/{news?}', [DashController::class, 'news'])->name('dashboard.news');
  Route::post('/dashboard/news/{action?}', [DashController::class, 'newsPost'])->name('news.post');

  Route::get('/dashboard/projects/{action?}/{project?}', [DashController::class, 'projects'])->name('dashboard.projects');
  Route::post('/dashboard/projects/{action?}', [DashController::class, 'projectsPost'])->name('projects.post');

  Route::get('/dashboard/specialists/{action?}/{specialist?}', [DashController::class, 'specialists'])->name('dashboard.specialists');
  Route::post('/dashboard/specialists/{action?}', [DashController::class, 'specialistsPost'])->name('specialists.post');
});


function parseLocale()
{
  $locale = request()->segment(1);
  $locales = config('app.translatable_locales');
  $default = config('app.fallback_locale');

  if ($locale !== $default && in_array($locale, $locales)) {
    app()->setLocale($locale);
    return $locale;
  }
}
