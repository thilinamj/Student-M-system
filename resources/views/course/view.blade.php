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
                                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">
                                            Add New
                                       </button>
                                  
                               <form method="post" action="{{url('course')}}", id="formData" >
                              @csrf

                            </form>
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
                                                    <button class="btn btn-info" data-myclz="{{$course->classname}}" data-toggle="modal" data-target="#myModal">Edit</button>
                                                    /
                                                    <button class="btn btn-danger" data-catid= data-toggle="modal" data-target="#delete">Delete</button>
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
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit</h4>
            </div>
            <form action="{{route('allcourse.update' ,'test')}}" method="post">
               {{method_field('patch')}}
                 {{csrf_field()}}
                <div class="modal-body">
                       <div class="form-group">
                               <label for="title">Title</label>
                               <input type="text" class="form-control" name="title" id="title">
                           </div>
           
                           <div class="form-group">
                               <label for="des">Description</label>
                               <textarea name="description" id="des" cols="20" rows="5" id='des' class="form-control"></textarea>
                           </div>
                </div>
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      
   <!-- //Modal -->
   


       
  
</div>
@endsection

@section('script')

<script type="text/javascript">
    $('#myModal').on('show.bs.modal', function (event) {
        console.log("kjngjhjg");
    
      var button = $(event.relatedTarget) 
      var title = button.data('myclz') 
      var modal = $(this)

      modal.find('.modal-body input').val(title)
    })
    </script>


@stop




