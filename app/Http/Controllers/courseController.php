<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function index(){
        $courses = course::orderBy('id', 'desc')->paginate();
        return view('Courses.index', compact('courses'));
    }

    public function create(){
        return view('Courses.create');
    }
    
    public function store(Request $req){
        
        $course = new course();

        $course->name = $req->name;
        $course->desc = $req->description;
        $course->categories = $req->categories;

        $course->save();

        return redirect()->route('courses.show', $course->id);
    }

    public function show(course $course){
        return view('Courses.show',compact('course'));
    }

    public function edit(course $course){
        return view('Courses.edit', compact('course'));
    }

    public function update(Request $req, course $course){
        
        $course->name = $req->name;
        $course->desc = $req->description;
        $course->categories = $req->categories;

        $course->save();

        return redirect()->route('courses.show', $course->id);
    }
}
