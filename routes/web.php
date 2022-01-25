<?php

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
    return view('auth.login');
});

Auth::routes(['register' => false]);
Route::get('/registration/{token}', 'UsersController@registration_view')->name('registration');
Route::POST('/registration', 'Auth\RegisterController@register')->name('accept');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Examination officer routes
Route::get('/Users_officer',[App\Http\Controllers\ExamOfficer::class, 'usersOfficer'])->name('Users_officer');
Route::post('/Users_officer',[App\Http\Controllers\ExamOfficer::class, 'officer_newUser'])->name('Users_officer');

