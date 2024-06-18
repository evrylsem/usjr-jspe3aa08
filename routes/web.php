<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/students/all', [StudentController::class, 'showStudents'])->name('student.index');
Route::get('/show/colleges', [CollegeController::class, 'showColleges'])->name('college.index');
Route::get('/show/student/{id}', [StudentController::class, 'showDetails'])->name('student.show');
Route::get('/show/college/{id}', [CollegeController::class, 'showDetails'])->name('college.show');