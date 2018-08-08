<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Course;
use App\ayear;

class courseController extends Controller
{
    public function index (){

        return view('course.create');
    }
    public function store(request $request){
        $course = new Course();
        $course->ayear=$request->ayear;
        $course->classname=$request->classname;
        $course->day=$request->day;
        $course->time=$request->time;
        $course->classtype=$request->classtype;
        $course->batch=$request->batch;
        $course->save();
        return redirect('course/create')->with('popup', 'open');

        
    }

    public function viewfunc(){


        $prod=ayear::all();
        return view('course.view',compact('prod'));
    }

}

