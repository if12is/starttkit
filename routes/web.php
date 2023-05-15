<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$controller_path = 'App\Http\Controllers';


//// authentication
Route::get('/',function(){
  return view('welcome')  ;
});
//Route::get('/home', function () {
//  return view('dashboard');
//})->name('dashboard');
// Main Page Route
//  Route::get('profile',[\Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController::class,'show'])->name('profile.show');
//Route::get('/home',  [\App\Http\Controllers\pages\HomePage::class,'index'])->name('home');
Route::group(['middleware' => 'auth:sanctum', 'verified'],function() {
  Route::get('/home', [\App\Http\Controllers\pages\HomePage::class, 'index'])->name('pages-home');
  Route::get('/page-2', [\App\Http\Controllers\Admin\FilmsController::class, 'index'])->name('pages-page-2');
  Route::get('/page-3', [\App\Http\Controllers\Admin\SeriesController::class, 'index'])->name('pages-page-3');
  // pages
  // show film route name films.show
  Route::get('films/getAll', [\App\Http\Controllers\Admin\FilmsController::class, 'FilmDatatable'])->name('films.getAll');
  Route::resource('films', \App\Http\Controllers\Admin\FilmsController::class);
  // show film route name films.show
  Route::get('series/getAll', [\App\Http\Controllers\Admin\SeriesController::class, 'SeriesDatatable'])->name('series.getAll');
  Route::resource('series', \App\Http\Controllers\Admin\SeriesController::class);
//  get all films ajax route name films.getAll
  Route::get('pages/misc-error', [\App\Http\Controllers\pages\MiscError::class, 'index'])->name('pages-misc-error');
});
//Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
//Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');

// dashboard
require __DIR__ . '/dashboard.php';
