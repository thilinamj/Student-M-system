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
                                   <th>Class Name</th>
                                   <th>Class Type</th>
                                   <th>Batch</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach($courses as $course)
                               <tr>
                                   <td>{{$course->classname}}</td>
                                   <td>{{$course->classname}}</td>
                               </tr>
                               @endforeach
                        </div>
                </div>
            </div>
    </div>
   
</div>
@endsection