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
                            @include('message')   
                               <form method="post" action="{{route('allcourse.store')}}", id="formData" >
                              @csrf

                                 
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input class">Class Name</label>
                                        <input type="text" class="form-control" name="classname" placeholder="Class" required > 
                                    </div>
                                  
                                    <div class="form-group col-md-6">
                                        <label for="input section">Section</label>
                                        <input type="text" class="form-control" name="section" placeholder="Section" required >
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                            <label for="classcode">Class code</label>
                                            <input type="text" name="class_code" class="form-control"   placeholder="Class Code" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                            <label for="input day">Date</label>
                                            <input type="date" class="form-control" name="day" required>
                                          </div>
                                    <div class="form-group col-md-3">
                                            <label for="time">Start Time</label>
                                            <input type="time" name="start_time" class="form-control" id="time" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="inputtime">End Time</label>
                                     <input type="time" name="end_time" class="form-control" id="time" required>
                                    </div>
                                    
                            </div>
                            <button type="submit" class="btn btn-primary" id ="create">Create</button>
                        </form>
                    </div>
 
            </div>
           
        </div>
      
</div>

    


        



       
  
</div>
@endsection






