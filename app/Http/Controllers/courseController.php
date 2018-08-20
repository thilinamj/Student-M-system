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
        $course->class_code=$request->class_code;
        $course->classname=$request->classname;
        $course->section=$request->section;
        $course->day=$request->day;
        $course->start_time=$request->start_time;
        $course->end_time=$request->end_time;
       
       
        $course->save();
        return redirect('course/create')->with('popup', 'open');

        
    }

    public function show(){

        try{
         return  Course::get();
       
        }catch(excepton $e){
            return 'false';
        }
    }


    public function delete($id){
        student::destroy($id);
        return view('course.view');


    }
}

