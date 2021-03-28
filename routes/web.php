<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ScoutController;
use App\Http\Controllers\GeneralUserController;
use App\Http\Controllers\RegistrationController;

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
    return view('welcome');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'verify']);

Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/registration', [RegistrationController::class, 'index'])->name("registration");
Route::post('/registration', [RegistrationController::class, 'store']);

Route::group(['middleware'=> 'session'], function(){
Route::get('/admin/home', [AdminController::class, 'index'])->name("admin.home");
Route::get('/admin/profile', [AdminController::class, 'profile'])->name("admin.profile");
Route::post('/admin/profile', [AdminController::class, 'update']);
Route::get('/admin/all_user', [AdminController::class, 'viewAll'])->name('admin.list');
Route::get('/user/delete/{user_id}', [AdminController::class, 'delete'])->name('admin.delete');
Route::post('/user/delete/{user_id}', [AdminController::class, 'destroy']);


Route::get('/scout/home', [ScoutController::class, 'index'])->name("scout.home");
Route::get('/scout/profile', [ScoutController::class, 'profile'])->name("scout.profile");
Route::post('/scout/profile', [ScoutController::class, 'update']);

Route::get('/general_user/home', [GeneralUserController::class, 'index'])->name("general_user.home");
Route::get('/general_user/profile', [GeneralUserController::class, 'profile'])->name("general_user.profile");
Route::post('/general_user/profile', [GeneralUserController::class, 'update']);
});

