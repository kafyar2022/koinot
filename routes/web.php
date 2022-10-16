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


Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about/{category}', [AboutController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
Route::get('/contribution', [ContributionController::class, 'index'])->name('contribution');
Route::get('/contribution/{slug}', [ContributionController::class, 'show'])->name('contribution.show');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/carrier', [CarrierController::class, 'index'])->name('carrier');
Route::get('/carrier/test', [CarrierController::class, 'test'])->name('carrier.test');
Route::post('/carrier/test', [CarrierController::class, 'sendTest']);

Route::group(['middleware' => ['AuthCheck']], function () {
  Route::prefix('admin')->group(function () {
    // Route::get('/', [DashController::class, 'index'])->name('admin');

    // Route::get('/histories/{action?}/{history?}', [DashController::class, 'histories'])->name('dashboard.histories');
    // Route::post('/histories/{action?}', [DashController::class, 'historiesPost'])->name('histories.post');

    // Route::get('/dashboard/news/{action?}/{news?}', [DashController::class, 'news'])->name('dashboard.news');
    // Route::post('/dashboard/news/{action?}', [DashController::class, 'newsPost'])->name('news.post');

    // Route::get('/dashboard/projects/{action?}/{project?}', [DashController::class, 'projects'])->name('dashboard.projects');
    // Route::post('/dashboard/projects/{action?}', [DashController::class, 'projectsPost'])->name('projects.post');

    // Route::get('/dashboard/specialists/{action?}/{specialist?}', [DashController::class, 'specialists'])->name('dashboard.specialists');
    // Route::post('/dashboard/specialists/{action?}', [DashController::class, 'specialistsPost'])->name('specialists.post');

    // Route::get('/dashboard/contributions/{action?}/{contribution?}', [DashController::class, 'contributions'])->name('dashboard.contributions');
    // Route::post('/dashboard/contributions/{action?}', [DashController::class, 'contributionsPost'])->name('contributions.post');

    // Route::get('/banners/{action?}/{page?}', [DashController::class, 'banners'])->name('banners');
    // Route::post('/banners/{action?}', [DashController::class, 'bannersPost'])->name('banners.post');
  });
});
