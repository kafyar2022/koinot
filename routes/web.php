<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ContributionController;
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
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/images/delete/{id}', [AdminController::class, 'deleteImage']);

    Route::get('/banners/{action?}/{page?}', [AdminController::class, 'banners'])->name('admin.banners');
    Route::post('/banners/{action?}', [AdminController::class, 'bannersPost'])->name('banners.post');

    Route::get('/histories/{action?}/{history?}', [AdminController::class, 'histories'])->name('admin.histories');
    Route::post('/histories/{action?}', [AdminController::class, 'historiesPost'])->name('histories.post');

    Route::get('/news/{action?}/{news?}', [AdminController::class, 'news'])->name('admin.news');
    Route::post('/news/{action?}', [AdminController::class, 'newsPost'])->name('news.post');

    Route::get('/projects/{action?}/{project?}', [AdminController::class, 'projects'])->name('admin.projects');
    Route::post('/projects/{action?}', [AdminController::class, 'projectsPost'])->name('projects.post');

    Route::get('/contributions/{action?}/{contribution?}', [AdminController::class, 'contributions'])->name('admin.contributions');
    Route::post('/contributions/{action?}', [AdminController::class, 'contributionsPost'])->name('contributions.post');
  });
});
