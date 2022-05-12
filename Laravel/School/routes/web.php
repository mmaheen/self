<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ResultController;

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

Route::get('/',[HomeController::class,'home'])->name('home');

//login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginpost'])->name('login');

//registration
Route::get('/registration/student',[RegistrationController::class,'registration'])->name('registration.student');
Route::post('/registration/student',[RegistrationController::class,'registrationpost'])->name('registration.student');

Route::get('/registration/teacher',[RegistrationController::class,'registrationt'])->name('registration.teacher');
Route::post('/registration/teacher',[RegistrationController::class,'registrationtpost'])->name('registration.teacher');

//student
Route::get('/student/list',[StudentController::class, 'list'])->name('student.list');
Route::get('/student/details/{id}',[StudentController::class, 'details'])->name('student.details');

//class
Route::get('/student/list/class/{id}',[StudentController::class, 'class'])->name('student.class');

//subject
Route::get('/subject/add',[SubjectController::class, 'add'])->name('subject.add');
Route::post('/subject/add',[SubjectController::class, 'addpost'])->name('subject.add');
Route::get('/subject/class/',[SubjectController::class, 'class'])->name('subject.class');
Route::get('/subject/class/{id}',[SubjectController::class, 'list'])->name('subject.list');
Route::get('/subject/details/{id}',[SubjectController::class, 'details'])->name('subject.details');
Route::get('/subject/students',[SubjectController::class, 'student'])->name('subject.sudent');

//exam
Route::get('/exam/form/{id}',[ExamController::class, 'form'])->name('exam.form');
Route::post('/exam/form/{id}',[ExamController::class, 'formpost'])->name('exam.form');
Route::get('/exam/class',[ExamController::class, 'class'])->name('exam.class');

//result
Route::get('/result/class',[ResultController::class, 'class'])->name('result.class');
Route::get('/result/form/{id}',[ResultController::class, 'form'])->name('result.form');
Route::post('/result/form/{id}',[ResultController::class, 'formpost'])->name('result.form');




//Route::get('/today',[RegistrationController::class, 'age']);