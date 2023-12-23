<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-form',[RegisterController::class,'loginForm'])->name('login.form');
Route::get('/register-form',[RegisterController::class,'registerForm'])->name('register.form');
Route::get('/employer-form',[RegisterController::class,'employerForm'])->name('employer.form');
Route::get('/employer-form',[RegisterController::class,'userRegisterStore'])->name('user.register.submit');


