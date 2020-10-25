<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function(){
    Route::get('', [DashboardController::class, 'index'])->name('home');
    Route::get('change-password', [AuthController::class, 'changepassword'])->name('changepassword');
    Route::patch('change-password/confirm', [AuthController::class, 'confirmChangePassword'])->name('changepassword.confirm');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('students', StudentController::class);
    Route::get('report/students', [StudentController::class, 'report'])->name('students.report');
});

Route::middleware('guest')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
});
