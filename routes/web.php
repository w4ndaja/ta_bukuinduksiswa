<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\LessonValueController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('home');
    Route::get('change-password', [AuthController::class, 'changepassword'])->name('changepassword');
    Route::patch('change-password/confirm', [AuthController::class, 'confirmChangePassword'])->name('changepassword.confirm');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('students', StudentController::class);
    Route::get('confirm-delete/students/{student}', [StudentController::class, 'confirmDelete'])->name('students.confirm-delete');
    Route::resource('grades', GradeController::class);
    Route::get('confirm-delete/grades/{grade}', [GradeController::class, 'confirmDelete'])->name('grades.confirm-delete');
    Route::resource('teachers', TeacherController::class);
    Route::get('confirm-delete/teachers/{teacher}', [TeacherController::class, 'confirmDelete'])->name('teachers.confirm-delete');
    Route::resource('lesson-values', LessonValueController::class);
    Route::get('confirm-delete/lesson-values/{lesson-value}', [LessonValueController::class, 'confirmDelete'])->name('lesson-values.confirm-delete');
    Route::resource('subjects', SubjectController::class);
    Route::get('confirm-delete/subjects/{subject}', [SubjectController::class, 'confirmDelete'])->name('subjects.confirm-delete');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
});
