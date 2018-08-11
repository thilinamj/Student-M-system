@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
        </div>

    
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Courses</div>
                        <div class="card-body">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>A.Year</th>
                                   <th>Class Name</th>
                                   <th>Day</th>
                                   <th>Time</th>
                                   <th>Class type</th>
                                   <th>Batch</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach($courses as $course)
                               <tr>
                                   <td>{{$course->ayear}}</td>
                                   <td>{{$course->classname}}</td>
                                   <td>{{$course->day}}</td>
                                   <td>{{$course->time}}</td>
                                   <td>{{$course->classtype}}</td>
                                   <td>{{$course->batch}}</td>

                               <td>
                                   <a href="{{ url('course/delete' .$course->id)}}" class="btn btn-success">Delete</a>
                                
                            </td>

                               </tr>
                               @endforeach
                        </div>
                </div>
            </div>
    </div>
   
</div>
@endsection