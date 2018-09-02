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
                            <div class="panel-heading"><strong> New Class</strong></div>
                            <div class="panel-body">
                                  
                               <form ,> </form>
                           
                            
                            <table class="table table-responsive">
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
                                                <button class="btn btn-info" data-crid="{{$course->id}}" data-myclz="{{$course->classname}}" data-mysec="{{$course->section}}" data-myday="{{$course->day}}" data-mystime="{{$course->start_time}}" data-myetime="{{$course->end_time}}" data-toggle="modal" data-target="#edit">Edit</button>
                                                    /
                                                    <button class="btn btn-danger"  data-crid="{{$course->id}}" data-toggle="modal" data-target="#delete">Delete</button>
                                                </td>
                                            
                                        </tr>
                        
                                    @endforeach
                                </tbody>
                        
                        
                            </table>
                    </div>
 
            </div>
           
        </div>
      
</div>

    
   

        

   <!-- Modal edit -->
   <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit</h4>
            </div>
            <form action="{{route('allcourse.update' ,'test')}}" method="post" >
               {{method_field('patch')}}
                 {{csrf_field()}}
                <div class="modal-body">

                    <input type="hidden" name="course_id" id="cr_id" value="">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="title">Class</label>
                            <input type="text" class="form-control" name="classname" id="classid">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="classname">Section</label>
                            <input type="text" class="form-control" name="section" id="sec_id"  >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4 ">
                            <label for="input ayear">Date</label>
                            <input type="date" class="form-control" name="day" id="day_id" >
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="time">Start Time</label>
                            <input type="time" name="start_time" class="form-control" id="stime_id">
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="inputclasstype">End Time</label>
                            <input type="time" name="end_time" class="form-control" id="etime_id">
                        </div>
                    </div>

                </div>
                <hr>
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <hr>
      
   <!-- //Modal -->

   <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('allcourse.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
                <input type="hidden" name="course_id" id="cr_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>
   


       
  
</div>
@endsection

@section('script')

<script type="text/javascript">
    $('#edit').on('show.bs.modal', function (event) {
        console.log("kjngjhjg");
    
      var button = $(event.relatedTarget) 
      var cr_id = button.data('crid')
      var classid = button.data('myclz') 
      var sec_id = button.data('mysec') 
      var day_id = button.data('myday') 
      var stime_id = button.data('mystime') 
      var etime_id = button.data('myetime') 
 
      
      var modal = $(this)

     
      modal.find('.modal-body #cr_id').val(cr_id);
      modal.find('.modal-body #classid').val(classid);
      modal.find('.modal-body #sec_id').val(sec_id);
      modal.find('.modal-body #day_id').val(day_id);
      modal.find('.modal-body #stime_id').val(stime_id);
      modal.find('.modal-body #etime_id').val(etime_id);
    
      
    })

    

    $('#delete').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) 

    var cr_id = button.data('crid') 
    var modal = $(this)

    modal.find('.modal-body #cr_id').val(cr_id);
})


    </script>


@stop




