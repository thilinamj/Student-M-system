@extends('layouts.app')
@section('content')
<div class="container ">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Class</li>
              </ol>
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
        </div>

    
            <div class="col-md-8">
                    <div class="panel panel-default">
                            <div class="panel-heading">Create New Class</div>
                            <div class="panel-body">
                                  
                               <form method="post" action="{{url('course')}}", id="formData" >
                              @csrf

                                 
                                 <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="input code">Class Name</label>
                                        <input type="text" class="form-control" name="classname" placeholder="Class" required> 
                                    </div>
                                  
                                    <div class="form-group col-md-4">
                                        <label for="input classname">Section</label>
                                        <input type="text" class="form-control" name="section" placeholder="Section" required>
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                            <label for="day">Class code</label>
                                            <input type="text" name="class_code" class="form-control" id="day"  placeholder="Class Code">
                                    </div>
                                    <div class="form-group col-md-3">
                                            <label for="input ayear">Date</label>
                                            <input type="date" class="form-control" name="day" placeholder="Class" required>
                                          </div>
                                    <div class="form-group col-md-3">
                                            <label for="time">Start Time</label>
                                            <input type="time" name="start_time" class="form-control" id="time"  placeholder="Description"required>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="inputclasstype">End Time</label>
                                     <input type="time" name="end_time" class="form-control" id="time"  placeholder="Description"required>
                                    </div>
                                    
                            </div>
                            <button type="submit" class="btn btn-primary" id ="create">Create</button>
                   
                               </form>
                    </div>
 
            </div>
           
        </div>
      
</div>
<hr>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>Class Code</th>
                <th>Class Name</th>
                <th>Section</th>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->class_code}}</td>
                <td>{{$course->classname}}</td>
                <td>{{$course->section}}</td>
                <td>{{$course->day}}</td>
                <td>{{$course->start_time}}</td>
                <td>{{$course->end_time}}</td>

            <td>
                <form action="{{action('courseController@delete', $course['course_id'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
         </td>

            </tr>
            @endforeach 

        </tbody>
  
</div>
@endsection
<!--
@section('script')
<script type="text/javascript">
    $(document).ready(function($){
         getAll()

         $('#data').on('click','btn-primary',function(){
          id=$(this).data('id');
          edit(id);
      })
    
    });
     
    function getAll(){
        $.ajax({
            url:'{{url('/course/view')}}',
            type:'GET',
        })
    .done(function(data){
      $.each(data,function(index,val){
        $('#data').append('<tr>')
        $('#data').append('<td>'+val.class_code+'</td')
        $('#data').append('<td>'+val.classname+'</td')
        $('#data').append('<td>'+val.section+'</td')
        $('#data').append('<td>'+val.day+'</td')
        $('#data').append('<td>'+val.start_time+'</td')
        $('#data').append('<td>'+val.end_time+'</td')
         $('#data').append('<td><button class="btn btn-xs btn-danger" data-id="'+val.course_id+'">Delete</button><button class="btn btn-xs btn-primary" data-id="'+val.course_id+'">Edit</button></td')
        $('#data').append('<tr>')
      });
    })
    .fail(function(){
        console.log("error");
    })
   
    }


  

    function edit(id){
        console.log(id);
    }


</script>
@stop
-->


