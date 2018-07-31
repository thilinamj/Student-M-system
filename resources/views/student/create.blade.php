@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
        </div>

    
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student Registraion Form</div>
                        <div class="card-body">


                            <form method="post" action="{{url('student')}}" >
                                @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                    <label for="input rfid">RFID</label>
                                    <input type="text" class="form-control" name="rfid" placeholder="RFID" required>
                                  </div>
                                  <div class="form-group col-md-5">
                                    <label for="inputfname">First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="First Name"required>
                                  </div>
                                  <div class="form-group col-md-5">
                                    <label for="inputlname">Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name"required>
                                    </div>
                                </div>
                            
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="dob">DOB:</label>
                                        <input type="text" name="dob" class="form-control datepicker" id="dob" placeholder=" Date of Birth"required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nic">NIC:</label>
                                        <input type="text" name="nic" class="form-control" id="nic" placeholder=" National ID"required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="pnumber" class="form-control" id="dob" placeholder="Phone Number"required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="nic" placeholder=" Email Address"required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="Current Address"required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Address 2</label>
                                        <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Permenant Address"required >
                                    </div>
                                </div>


                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="nationality">Nationality</label>
                                    <input type="text" name="nationality" class="form-control" id="nationality"  placeholder="Nationality"required>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control" name="state">
                                      <option>Married</option>
                                      <option>Unmarried</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputSex">Sex</label>
                                    <select id="inputSex" class="form-control" name="sex">
                                      <option >male</option>
                                      <option>female</option>
                                    </select>
                                  </div>
                                  
                                </div>

                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Check me out
                                    </label>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Subbmit</button>
                              </form>
                        </div>
                </div>
            </div>
    </div>
   
</div>
@endsection


