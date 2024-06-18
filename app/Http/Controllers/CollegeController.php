<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Http\Requests\StoreCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use Illuminate\Contracts\View\View;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showColleges()
    {
        $colleges = College::all();
        return view('college.index', compact('colleges'));
    }
}
