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
                                <form method="post" action="{{url('')}}" >
                                 @csrf
                                <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="input ayear">Academic Year</label>
                                          <input type="text" class="form-control" name="ayear" placeholder="Academic Year" required>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="input rfid">Class Name</label>
                                            <input type="text" class="form-control" name="ayear" placeholder="Class Name" required>
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-4">
                                                <label for="nationality">Day</label>
                                                <input type="text" name="nationality" class="form-control" id="nationality"  placeholder="Description"required>
                                        </div>
                                        <div class="form-group col-md-4">
                                                <label for="nationality">Time Duration</label>
                                                <input type="text" name="nationality" class="form-control" id="nationality"  placeholder="Description"required>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputState">Hall/Group</label>
                                          <select id="inputState" class="form-control" name="state">
                                            <option>Hall</option>
                                            <option>Group</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputSex">Batch</label>
                                          <select id="inputSex" class="form-control" name="">Batch
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



