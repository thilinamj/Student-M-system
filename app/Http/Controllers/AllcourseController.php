<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Course;

class AllcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $courses= course::all();
        return view('course.view',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
         $Course = course::findOrFail($request->course_id);
         $Course->update($request->all());
          return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Course = course::findOrFail($request->course_id);
        $Course->delete();

        return back();

    }
}
