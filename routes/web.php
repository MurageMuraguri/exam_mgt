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
Route::get('/registration/{token}', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('registration');
Route::post('/registeruser', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Examination officer routes
Route::get('/Users_officer',[App\Http\Controllers\ExamOfficer::class, 'usersOfficer'])->name('Users_officer');
Route::post('/Users_officer',[App\Http\Controllers\ExamOfficer::class, 'officer_newUser'])->name('Users_officer');

//Profile
Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'index'])->name('profile');
Route::post('/updateInfo',[\App\Http\Controllers\ProfileController::class,'updateInfo'])->name('updateInfo');

//Exam_period
Route::get('/exam_period',[\App\Http\Controllers\ExamPeriodController::class,'index'])->name('exam_period');
Route::post('/exam_period_insert',[\App\Http\Controllers\ExamPeriodController::class,'insert'])->name('create_exam_period');

//Exam
Route::get('/exams',[\App\Http\Controllers\ExamOfficer::class,'exams'])->name('exams');
Route::post('/insert_exam',[\App\Http\Controllers\ExamOfficer::class,'insert_exam'])->name('insert_exam');
Route::get('/exams/delete/{exam_id}',[\App\Http\Controllers\ExamOfficer::class,'delete_exam']);

//Internal Lec
Route::get('/my_activities',[\App\Http\Controllers\InternalLecController::class,'index'])->name('my_activities');
Route::get('/my_schedule',[\App\Http\Controllers\InternalLecController::class,'schedule'])->name('my_schedule');
Route::get('/my_deadline',[\App\Http\Controllers\InternalLecController::class,'deadlines'])->name('my_deadline');
