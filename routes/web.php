<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/students/all', [StudentController::class, 'showStudents']);
Route::get('/show/colleges', [CollegeController::class, 'showColleges']);
