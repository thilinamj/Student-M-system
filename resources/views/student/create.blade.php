@extends('layouts.app')

@section('content')

<div class="container ">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Student</li>
              </ol>
              <div class="panel panel-default">
                    <div class="panel-heading">
                      Add New Student

                    
                    </div>
                    
                    <div class="panel-body ">
                     
                      <form method="post" action="{{url('student')}}" >
                        @csrf
                            <div class="col-md-6">
                            <fieldset>
                              <legend>Student Info</legend>
                  
                              <div class="form-row">
                                
                                <div class="form-group col-md-6">
                                  <label for="inputfname">First Name</label>
                                  <input type="text" class="form-control" name="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputlname">Last Name</label>
                                  <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                  </div>
                              </div>
                          
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="dob">DOB:</label>
                                      <input type="date" name="dob" class="form-control datepicker" id="dob" placeholder=" Date of Birth">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="nic">NIC:</label>
                                      <input type="text" name="nic" class="form-control" id="nic" placeholder=" National ID">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="phone">Phone Number</label>
                                      <input type="text" name="pnumber" class="form-control" id="dob" placeholder="Phone Number">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="email">Email</label>
                                      <input type="email" name="email" class="form-control" id="nic" placeholder=" Email Address">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="inputAddress">Address</label>
                                      <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="Current Address">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="inputAddress2">Address 2</label>
                                      <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Permenant Address" >
                                  </div>
                              </div>


                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="age">Age</label>
                                  <input type="number" name="age" class="form-control"  placeholder="Age">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputState">State</label>
                                  <select id="inputState" class="form-control" name="state">
                                    <option>Married</option>
                                    <option>Unmarried</option>
                                  </select>
                                </div>
                                
                              </fieldset>
                            </div>
                            
                                
                              
                            <!-- /col-md-6 -->
                  
                            <div class="col-md-6">          
                  
                            <fieldset>
                              <legend>Registration Info</legend>

                              <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="registerDate">Register Date</label>
                                <input type="date" class="form-control" id="registerDate" name="registerDate" placeholder="Register Date" autocomplete="off">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="rfid">RFID </label>
                                <input type="text" class="form-control" name="rfid" placeholder="RFID" autocomplete="off" required>
                              </div>
                              </div>
                              <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="className">Class</label>
                                <select class="form-control" name="className" id="className">
                                  <option value="">Select</option>
                                </div>
                                 
                                    
                                
                                </select>
                              </div>
                              <div class="form-group col-md-12">
                                  <div class="form-row">
                                <label for="sectionName">Section</label>
                                <select class="form-control" name="sectionName" id="sectionName">
                                  <option value="">Select Class</option>
                                </select>
                              </div>
                              </div>
                            </fieldset>    
                            
                            <fieldset>
                                <legend>Parent Informarion</legend>
                        
                                    <div class="form-group">
                                      <label for="Parent Name">Parent Name</label>
                                      <input type="text" class="form-control" id="registerDate" name="registerDate" placeholder="Parent Name" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                      <label for="Contact ">Contact</label>
                                      <input type="text" class="form-control" id="registerDate" name="registerDate" placeholder="Contact" autocomplete="off">
                                    </div>
                            </fieldset>
                  
                            
                             
                  
                            </div>
                            <!-- /col-md-6 -->
                  
                            <div class="col-md-12">
                  
                              <br /> <br />
                              <center>  

                                  <button type="submit" class="show-modal btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                      Save
                                    </button>
                                 
                            </div>
                                    
                  
                          </form>
                    </div>
                                
@endsection


@section('script')
<script>

</script>
@stop




