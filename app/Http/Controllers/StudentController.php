<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\College;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = Student::all();
        $colleges = Student::with('colleges')->get();
        return view('student.index', compact('students', 'colleges'));
    }
}
