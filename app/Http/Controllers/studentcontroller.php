<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Student;

class studentcontroller extends Controller
{
    public function index (){

        return view('student.create');
    }
    public function store(request $request){

        $student = new Student();
        $student->rfid=$request->rfid;
        $student->fname=$request->fname;
        $student->lname=$request->lname;
        $student->dob=$request->dob;
        $student->nic=$request->nic;
        $student->pnumber=$request->pnumber;
        $student->email=$request->email;
        $student->address1=$request->address1;
        $student->address2=$request->address2;
        $student->state=$request->state;
        $student->save();
        return redirect('/student/create')->with('message', 'Registration Succeful!');
      
        $this->validate($request,[
            'rfid' => 'required',
           
            ]);
    
    
        $items = Item::store($request->all());
        return back()->with('success','Item created successfully!');

    }


}
    


