@extends('layouts.app')
@section('content')
<div class="container ">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Students View</li>
        </ol>
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
        </div>

    
            <div class="col-md-8">
                <div class="card">
                    <div class="panel panel-default">
                    <div class="panel-heading"><strong> View Students</strong></div>
                            <div class="panel-body">

                                    <span>Product Name: </span>
                                <select style="width: 200px" class="showstudent" id="prod_cat_id">
                              
                                    <option value="0" disabled="true" selected="true">-Select-</option>
                                    @foreach($student_list as $std)
                                    <option value="{{$std->sid}}">{{$std->classname}}</option>
                                @endforeach
                          
                              
                                </select>
                              
                                <span>Product Name: </span>
                                <select style="width: 200px" class="productname">
                              
                                    <option value="0" disabled="true" selected="true">Product Name</option>
                                </select>
                              
                                <span>Product Price: </span>
                              
                              
                            </div>
                                  
                    </div>
                </div>
            </div>
    </div>
   
</div>
@endsection

@section('script')
<script>
$(document).ready(function(){
    $(document).on('change','.showstudent',function(){
 console.log("work");
    });
});
 </script>
@stop

