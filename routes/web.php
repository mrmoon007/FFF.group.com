<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Home_AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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
     $about1=DB::table('Home_models')->first();
     return view('home',compact('about1'));
})->name('f_home');

Route::get('/admin', function () {

    return view('admin.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
Route::get('/user/logout',[AuthController::class,'logout'])->name('logout');



/********************************************
 *           Admin routes start here        *
 *******************************************/

// slider routes
Route::get('/admin/slider',[HomeController::class,'homeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class,'addSlider'])->name('add.slider');
Route::post('/store/slider',[HomeController::class,'storeSlider'])->name('store.slider');


// about route here
Route::get('/index/about',[Home_AboutController::class,'homeAbout'])->name('index.about');
Route::get('/edit/about/{id}',[Home_AboutController::class,'editAbout'])->name('edit.about');
Route::get('/delete/about/{id}',[Home_AboutController::class,'deleteAbout'])->name('delete.about');
Route::get('/add/about',[Home_AboutController::class,'addAbout'])->name('add.about');
Route::post('/store/about',[Home_AboutController::class,'storeAbout'])->name('store.about');
Route::post('/update/about/{id}',[Home_AboutController::class,'updateAbout'])->name('update.about');

// Contact route Here
Route::get('/admin/contact',[ContactController::class,'adminContact'])->name('admin.contact');
Route::get('/admin/add/contact',[ContactController::class,'adminAddContact'])->name('add.contact');
Route::post('/admin/store/contact',[ContactController::class,'adminStoreContact'])->name('store.contact');
Route::get('/admin/edit/contact/{id}',[ContactController::class,'adminEditContact'])->name('edit.contact');
Route::post('/admin/update/contact/{id}',[ContactController::class,'adminUpdateContact'])->name('update.contact');
Route::get('/admin/delete/contact/{id}',[ContactController::class,'adminDeleteContact'])->name('delete.contact');
Route::get('/admin/message/delete/contact/{id}',[ContactController::class,'adminDeleteMessageContact'])->name('delete.message.contact');
Route::get('/admin/message/contact',[ContactController::class,'adminMessageContact'])->name('message.contact');

// change Password route here
Route::get('admin/changePassword',[ChangePasswordController::class,'userPasswordChange'])->name('admin.CPassword');
Route::post('admin/Password/update',[ChangePasswordController::class,'userPasswordUpdate'])->name('admin.updatePassword');



/********************************************
            Home route start here
 *******************************************/

// contact route here
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact/form',[ContactController::class,'contactForm'])->name('contact.form');


//
