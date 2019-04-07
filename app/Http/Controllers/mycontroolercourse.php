<?php

namespace App\Http\Controllers;

use App\Course;

class mycontroolercourse extends Controller
{
    public function index(){

        $courses = Course::orderby('id', 'desc')->get();
        return view('course', compact('courses'));

        // $courses = Course::where('published', 1)->orderby('id', 'desc')->get();
        // return view('course', compact('courses'));
    }
}
