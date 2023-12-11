<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

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
// Front
Route::get('/home',[PagesController::class,'index']);
Route::get('/genre',[PagesController::class,'genre']);
Route::get('/review',[PagesController::class,'review']);
Route::get('/login1',[PagesController::class,'login1']);
// End Front

// Admin
Route::get('/admin/add',[PagesController::class,'AdminAdd']);
Route::get('/admin/edit',[PagesController::class,'AdminEdit']);
Route::get('/admin/film',[PagesController::class,'AdminFilm']);
Route::get('/admin/review',[PagesController::class,'AdminReview']);
Route::get('/admin/user',[PagesController::class,'AdminUser']);
// End Admin

// User
Route::get('/user/dashboard',[PagesController::class,'UserDashboard']);
Route::get('/user/edit',[PagesController::class,'UserEdit']);
Route::get('/user/genre',[PagesController::class,'UserGenre']);
Route::get('/user/home',[PagesController::class,'UserHomme']);
Route::get('/user/review',[PagesController::class,'UserReview']);
// End User