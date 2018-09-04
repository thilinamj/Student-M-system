@extends('layouts.app')
@section('content')
<div class="container ">

        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Student Registration</li>
        </ol>
    <div class="row">
        <div class="col-md-4" >
            @include('layouts/sidebar')
        </div>
       
    
            <div class="col-md-8">
                    <div class="panel panel-default">
                            <div class="panel-heading"><strong> Registration</strong></div>
                            <div class="panel-body">
                            @include('message')   
                               <form method="post" action="{{route('allstudent.store')}}", id="formData" >
                              @csrf

                                 
                             <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input name">Student Name</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Full Name" required > 
                            </div>
                                  
                                    <div class="form-group col-md-6">
                                        <label for="input address">Current Address</label>
                                        <input type="text" class="form-control" name="caddress" placeholder="caddress" required >
                                    </div>
                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="input name">Parent Name</label>
                                                <input type="text" class="form-control" name="parentname" placeholder="Full Name" required > 
                                            </div>
                                          
                            <div class="form-group col-md-6">
                                        <label for="input address">Pamenant Address</label>
                                                <input type="text" class="form-control" name="paddress" placeholder="address"  >
                                    </div>
                            </div>
                            <div class="form-row">
                                   
                                    <div class="form-group col-md-3">
                                            <label for="input day">Birth Date</label>
                                            <input type="date" class="form-control" name="bday" required>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="Tel Number">Mobile Number</label>
                                            <input type="text" name="mnumber" class="form-control"   placeholder="mobile Number" required>
                                            
                                            
                                    </div>
                                    <div class="form-group col-md-3">
                                            <label for="Tel Number">Land number</label>
                                            <input type="text" name="lnumber" class="form-control"   placeholder="Land Number" required >
                                    </div>
                                    <div class="form-group col-md-3">
                                            <label for="email">email</label>
                                            <input type="email" name="email" class="form-control"   placeholder="email" >
                                    </div>
                                    
                            </div>
                        
                           
                            
                           <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="sectionName">Registration Number</label>
                                    <select class="form-control" name="rnumber" id="register" >
                                        @foreach($rfid_list as $rn)
                                        <option value="{{ $rn->tag}}">{{ $rn->tag }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                  <label for="registerDate">Register Date</label>
                                  <input type="date" class="form-control" id="registerDate" name="rdate" placeholder="Register Date" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="className">Class</label>
                                    <select class="form-control" name="classname" id="clzn" >
                                    @foreach($course_list as $cr)
                                    <option value="{{ $cr->classname}}">{{ $cr->classname }}</option>
                                    @endforeach
                                </select>
            
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="sectionName">Section</label>
                                    <select class="form-control" name="sectionname" id="register" data-dependent="classname">
                                        @foreach($course_list as $cr)
                                        <option value="{{ $cr->section}}">{{ $cr->section }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{ csrf_field() }}
                                </div>
                            <button type="submit" class="btn btn-primary" id ="create">Create</button>
                        </form>
                    </div>
 
            </div>
           
        </div>
      
</div>

    


        



       
  
</div>
@endsection
@section('script')
<script>

$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
 
   $.ajax({
    url:"{{ route('allstudent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#register').change(function(){
  $('#classname').val('');
  $('#section').val('');
 });

 $('#classname').change(function(){
  $('#section').val('');
 });
 

});
</script>
@stop






