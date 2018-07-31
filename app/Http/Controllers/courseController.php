<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseController extends Controller
{
    public function index (){

        return view('course.create');
    }
    public function store(request $request){
    }
}
