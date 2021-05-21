<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index(){
        return view('Courses.index');
    }

    public function create(){
        return view('Courses.create');
    }

    public function show($course){
        return view('Courses.show',['course' => $course]);
    }
}
