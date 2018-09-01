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
                            <div class="panel-heading">New Registration</div>
                            <div class="panel-body">
                            @include('message')   
                               <form method="post" action="{{route('allcourse.store')}}", id="formData" >
                              @csrf

                                 
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input name">Full Name</label>
                                        <input type="text" class="form-control" name="fullname" placeholder="Full Name" required > 
                                    </div>
                                  
                                    <div class="form-group col-md-6">
                                        <label for="input address">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="address" required >
                                    </div>
                            </div>
                            <div class="form-row">
                                   
                                    <div class="form-group col-md-3">
                                            <label for="input day">Birth Date</label>
                                            <input type="date" class="form-control" name="day" required>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="classcode"></label>
                                            <input type="text" name="class_code" class="form-control"   placeholder="Class Code" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="classcode">Class code</label>
                                        <input type="text" name="class_code" class="form-control"   placeholder="Class Code" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="classcode">Class code</label>
                                        <input type="text" name="class_code" class="form-control"   placeholder="Class Code" required>
                                    </div>
                                    
                            </div>
                           -----------------------------------------------------------------------------------------------------------------------------------------------
                            <hr>
                           <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="sectionName">Registration Number</label>
                                    <select class="form-control" name="sectionName" id="sectionName">

                                        @foreach($rfid_list as $country)
                                        <option value="{{ $country->id}}">{{ $country->tag }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                <div class="form-group col-md-3">
                                  <label for="registerDate">Register Date</label>
                                  <input type="date" class="form-control" id="registerDate" name="registerDate" placeholder="Register Date" autocomplete="off">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="className">Class</label>
                                    <select class="form-control" name="className" id="className">
                                      <option value="">Select</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="sectionName">Section</label>
                                    <select class="form-control" name="sectionName" id="sectionName">

                                        @foreach($rfid_list as $rfid_num)
                                        <option value="{{ $rfid_num->id}}">{{ $rfid_num->tag }}</option>
                                        @endforeach
                                    </select>


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






