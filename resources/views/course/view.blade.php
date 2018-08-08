@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
        </div>

    
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Wel Come to Dashboard</div>
                        <div class="card-body">
                            <div class="form-row">
                                        <div class="form-group col-md-4">
                                                <label for="inputbatch">Batch</label>
                                                <select id="inputbatch" class="yearlist" name="yearlist">Batch
                                                  @each($prod as $cat)
                                                  <option value ="{{$cat->course_id}}">{{$cat->ayear}}</option>
                                                  @endforeach

                                                </select>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="input classname">Class Name</label>
                                            <input type="text" class="form-control" name="classname" placeholder="Class Name" required>
                                        </div>
                                </div>
                        
            

                        </div>
                </div>
            </div>
    </div>
   
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','.yearlist',function(){
            console.log("change");
            var course_id=$(this).val();
            console.log(course_id) ;
        });
    });
</Script>

@stop

