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
        // $students = Student::all();
        // $colleges = College::findOrFail($id);
        // $students = $colleges->students()->get();
        $students = Student::with('colleges')->get();
        // return view('student.index', compact('colleges','students'));
        return view('student.index', compact('students'));
    }

    public function showDetails($id)
    {
        $students = Student::findOrFail($id);
        $colleges = $students->colleges()->get();
        return view('student.show', compact('students', 'colleges'));
    }
}
