<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    // return view('admin.index');
     return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
Route::get('/user/logout',[AuthController::class,'logout'])->name('logout');


//Admin routes start here

// slider routes
Route::get('/admin/slider',[HomeController::class,'homeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class,'addSlider'])->name('add.slider');
Route::post('/add/slider',[HomeController::class,'storeSlider'])->name('store.slider');

