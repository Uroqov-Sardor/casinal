<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

// 

// *** PAGES *** //
# Home
Route::get('/',[PageController::class,'homePage'])->name('home');

# About
Route::get('/about',[PageController::class,'aboutPage'])->name('about');

# Services
Route::get('/services',[PageController::class,'servicesPage'])->name('services');

# Blog
Route::get('/blog',[PageController::class,'blogPage'])->name('blog');

# Contact
Route::get('/contact',[PageController::class,'contactPage'])->name('contact');

// *** ADMIN *** //
# Admin Panel
Route::get('/admin/panel/check/page',[PageController::class,'aPanelCheckPage'])->name('apanel.checkpage');

# Admin panel check post
Route::post('/admin/panel/check/post',[PostController::class,'adminCheck'])->name('admin.checkpost');

# Admin Panel dashmin
Route::get('/admin/panel/dashmin',[PageController::class,'adminPanelDashmin'])->name('admin.dashmin');

# Admin home
Route::get('/admin/panel/home/page',[PageController::class,'adminHomePage'])->name('admin.homepage');

# Admin home post
Route::post('/admin/panel/home/post',[PostController::class,'adminHomePostAdd'])->name('admin.homepost');

# Admin home all post
Route::get('/admin/panel/home/all/post',[PageController::class,'adminHomeAllPost'])->name('admin.homeallpost');

# Admin home delete post
Route::get('/admin/panel/home/delete/post/{id}',[PostController::class,'adminHomeDeletePost'])->name('admin.homedeletepost');

# Admin home edit post
Route::get('/admin/panel/home/edit/post/{id}',[PageController::class,'adminHomeEditPost'])->name('admin.homeeditpostl');
