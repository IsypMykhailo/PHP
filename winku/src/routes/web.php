<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{username}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/{username}/updateAvatar', [App\Http\Controllers\EditProfileController::class, 'editAvatar'])->name('editAvatar');
Route::post('/{username}/updateBackground', [App\Http\Controllers\EditProfileController::class, 'editBackground'])->name('editBackground');


