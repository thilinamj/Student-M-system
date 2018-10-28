<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use\App\Student;
use\App\Course;
use\App\rfid;

use DB;





class AllattendenseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $course_list= DB::table('courses')->get();
        return view('attendense.view')->with('course_list', $course_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function atreport()
    {   $course_list= DB::table('courses')->get();
        $cd = Input::get ( 'cd' );


        $card = DB::table('rfid')
            ->leftJoin('students', 'rfid.tag', '=', 'students.rnumber')
            ->where('date','LIKE','%'.$cd.'%')->get();




       // $card = rfid::where('date','LIKE','%'.$cd.'%')->get();
        if(count($card) > 0)
        return view('attendense.view')->withDetails($card)->withQuery ( $cd)->with('course_list', $course_list);
        else return view ('attendense.view')->withMessage('No Details found. Try to search again !')->with('course_list', $course_list);
    }
}
