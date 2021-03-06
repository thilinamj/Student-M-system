<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use\App\Student;
use\App\Course;
use DB;


class AllstudentController extends Controller
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

    {   $student_list = DB::table('courses') ->get();
        return view('student.view')->with('student_list', $student_list);
    }
        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rfid_list = DB::table('rfid') ->get();
      
       $course_list= DB::table('courses')->get();
        
         
     return view('student.create')->with('rfid_list', $rfid_list)->with('course_list', $course_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            'rnumber'=>'required|unique:students|max:10',
            'fullname'=>'required',
            'caddress'=>'required',
            'parentname'=>'required',
            'bday'=>'required',
            'mnumber'=>'required',
            'rdate'=>'required',

        ]);

        $student = new Student();
        $student->fullname=$request->fullname;
        $student->caddress=$request->caddress;
        $student->parentname=$request->parentname;
        $student->paddress=$request->paddress;
        $student->bday=$request->bday;
        $student->mnumber=$request->mnumber;
        $student->lnumber=$request->lnumber;
        $student->email=$request->email;
        $student->rnumber=$request->rnumber;
        $student->rdate=$request->rdate;
        $student->classname=$request->classname;
        $student->sectionname=$request->sectionname;
        $student->save();
        return redirect('allstudent/create')->with('success', 'Registered Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('');
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
    public function update(Request $request, $id)
    {
        $Student = student::findOrFail($request->student_id);
        $Student->update($request->all());
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
        $Student = student::findOrFail($request->student_id);
        $Student->delete();
        return redirect('viewstd ');
    }



    function fetch(Request $request)
    { 
     $select = $request->get('select');    //state-class
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('course')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }




    public function search(){


        $q = Input::get ( 'q' );
        $user = Student::where('rnumber','LIKE','%'.$q.'%')->orWhere('fullname','LIKE','%'.$q.'%')->get();
        if(count($user) > 0)
            return view('home')->withDetails($user)->withQuery ( $q );
        else return view ('home')->withMessage('No Details found. Try to search again !');
    
    
    }




    public function showstudent(Request $request){

        $showstd = DB::table('students')->where('classname', $request->id)->get();
        return response()->json([
        "message"=>$showstd

        ]);



}

public function view(){

    $course_list= DB::table('courses')->get();
    $cd = Input::get ( 'cd' );
    $std = Student::where('classname','LIKE','%'.$cd.'%')->get();
    if(count($std) > 0)
    return view('student.view2')->withDetails($std)->withQuery ( $cd)->with('course_list', $course_list);
    else return view ('student.view2')->withMessage('No Details found. Try to search again !')->with('course_list', $course_list);

}
}