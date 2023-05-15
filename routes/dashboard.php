<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "dashboard" middleware group. Make something great!
|
*/

Route::get('admin/dashboard/profile',[\App\Http\Controllers\Admin\ProfileController::class,'show'])->name('admin.profile.show');
Route::get('/admin', function () {
  return redirect()->to('admin/login');
})->name('admin.login');
Route::group([
  'middleware' => ['auth:admin'],
  config('jetstream.auth_session'),
  'as' => 'admin.',
  'prefix' => 'admin/dashboard',
], function () {
  Route::get('/', function () {
    return view('admin.dashboard');
  })->name('dashboard');
  // Main Page Route
//  Route::get('profile',[\Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController::class,'show'])->name('profile.show');
  Route::get('/',[\App\Http\Controllers\pages\HomePage::class,'index'])->name('pages-home');
  Route::get('/page-2',[\App\Http\Controllers\pages\Page2::class,'index'])->name('pages-page-2');
  Route::get('/page-3',[\App\Http\Controllers\pages\Page3::class,'index'])->name('pages-page-3');
// pages
  Route::get('pages/misc-error',[\App\Http\Controllers\pages\MiscError::class,'index'])->name('pages-misc-error');
//  Route::get('/settings', function () {
//    return view('admin.settings.index');
//  })->name('settings');
  // Route::put('/settings/{setting}/update', [SettingController::class, 'update'])->name('settings.update');
  // Route::resource('categories', CategoryController::class)->except(['show', 'create']);
  // Route::delete('/categories/delete', [CategoryController::class, 'destroy'])->name('categories.delete');
  // Route::resource('products', ProductController::class)->except(['show']);
  // Route::delete('/products/delete', [ProductController::class, 'destroy'])->name('products.delete');
  // Route::get('/user/getAllUsers', [UserController::class, 'getAllUsers'])->name('users.getAllUsers');
  // Route::get('/category/getallcategories', [CategoryController::class, 'getAllCategories'])->name('cat.getallcategories');
  // Route::get('/product/getallproducts', [ProductController::class, 'getAllProducts'])->name('prod.getallproducts');
  // Route::resource('users', UserController::class);
});
