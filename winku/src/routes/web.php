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
Route::get('/email_confirm/{username}', [App\Http\Controllers\HomeController::class, 'emailConfirmation'])->name('emailConfirmation');
Route::get('/{username}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/{username}/updateAvatar', [App\Http\Controllers\EditProfileController::class, 'editAvatar'])->name('editAvatar');
Route::post('/{username}/updateBackground', [App\Http\Controllers\EditProfileController::class, 'editBackground'])->name('editBackground');
Route::get('/{username}/edit-profile-basic', [App\Http\Controllers\EditProfileController::class, 'editProfileBasic'])->name('editProfileBasic');
Route::post('/{username}/updateProfileBasic', [App\Http\Controllers\EditProfileController::class, 'updateProfileBasic'])->name('updateProfileBasic');
Route::get('/{username}/changePassword', [App\Http\Controllers\EditProfileController::class, 'changePassword'])->name('changePassword');
Route::post('/{username}/updatePassword', [App\Http\Controllers\EditProfileController::class, 'updatePassword'])->name('updatePassword');
Route::post('/{username}/follow', [App\Http\Controllers\RelController::class, 'follow'])->name('follow');
Route::post('/{username}/unfollow', [App\Http\Controllers\RelController::class, 'unfollow'])->name('unfollow');
Route::get('/{username}/followers', [App\Http\Controllers\EditProfileController::class, 'followers'])->name('followers');
Route::get('/{username}/following', [App\Http\Controllers\EditProfileController::class, 'following'])->name('following');
Route::get('/{username}/posts', [App\Http\Controllers\EditProfileController::class, 'posts'])->name('posts');
Route::post('/{username}/posts/addPost', [App\Http\Controllers\EditProfileController::class, 'addPost'])->name('addPost');
Route::post('/like', [App\Http\Controllers\PublicationController::class, 'like'])->name('like');
