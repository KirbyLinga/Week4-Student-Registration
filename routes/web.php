<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Redirect home directly to the student list
Route::get('/', [StudentController::class, 'index'])->name('students.index');

// Student registration routes
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');