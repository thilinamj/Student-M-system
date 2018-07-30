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
        $student->fname=$request->fname;
        $student->lname=$request->lname;
        $student->dob=$request->dob;
        $student->nic=$request->nic;
        $student->pnumber=$request->pnumber;
        $student->email=$request->email;
        $student->address1=$request->address1;
        $student->address2=$request->address2;
        $student->nationality=$request->nationality;
        $student->sex=$request->sex;
        $student->state=$request->state;
        $student->save();
        return redirect('student/create')->with('popup', 'open');

        $request->validate([
            'nic' => 'bail|required|unique:posts|max:9',
            'pnumber' => 'bail|required|unique:pnumber|max:10',
            
        ]);
    }
    

}
