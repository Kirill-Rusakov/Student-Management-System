<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Маршруты аутентизации
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Маршруты регистрации
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Защищенные маршруты
Route::middleware(['auth'])->group(function () {
    Route::resource('students', StudentController::class);
});

// Корневой маршрут
Route::get('/', function () {
    return redirect()->route('students.index');
});