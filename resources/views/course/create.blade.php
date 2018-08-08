@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
        </div>

    
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Course</div>
                        <div class="card-body">
                                <form method="post" action="{{url('course')}}" >
                                 @csrf
                                <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="input ayear">Academic Year</label>
                                          <input type="text" class="form-control" name="ayear" placeholder="Academic Year" required>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="input classname">Class Name</label>
                                            <input type="text" class="form-control" name="classname" placeholder="Class Name" required>
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-4">
                                                <label for="day">Day</label>
                                                <input type="text" name="day" class="form-control" id="day"  placeholder="Description"required>
                                        </div>
                                        <div class="form-group col-md-4">
                                                <label for="time">Time Duration</label>
                                                <input type="text" name="time" class="form-control" id="time"  placeholder="Description"required>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputclasstype">Hall/Group</label>
                                          <select id="inputclasstype" class="form-control" name="classtype">
                                            <option>Hall</option>
                                            <option>Group</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputbatch">Batch</label>
                                          <select id="inputbatch" class="form-control" name="batch">Batch
                                            <option >Batch 1</option>
                                            <option>Batch 2</option>
                                          </select>
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
     
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">Live Courses</div>
                        <div class="card-body">

                            
                        </div>
                </div>
            </div>
    </div>
   
</div>
@endsection



