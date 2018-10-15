@extends('layouts.app')
@section('content')
<div class="container ">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Students View</li>
        </ol>
    <div class="row">
       <!-- <div class="col-md-4">
            @include('layouts/sidebar')
        </div>-->

    
            <div class="col-md-12">
                <div class="card">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong> View Students</strong></div>
                            <div class="panel-body">
                                <form action="{{ url('/viewstd') }}" method="POST" role="search">
                                    {{ csrf_field() }}
    


                                    
                                          
                             <div class="form-row">
                                <div class="form-group ">
                                

                                    <label for="className">Class</label>
                                    <select class="form-control" name="cd" id="clzn" >
                                    @foreach($course_list as $cr)
                                    <option value="{{ $cr->classname}}">{{ $cr->classname }}</option>
                                    @endforeach
                                    </select>
                              
                                </div>
                              
                                <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                               
                            </div>
                            </form>
                                
                            
                            <div class="search">
                                    @if(isset($details))
                                    <hr>
                                        <h3> The Student details of <b> {{ $query }} </b> are :</h3>
                                        <hr>
                                        <form ,> </form>
                                        <table class="table table-striped">
                                        <thead>
                                            <tr> 
                                                <th>Register Number</th>
                                                <th>Full Name</th>
                                                <th>Mobile Number</th>
                                                <th>Land Number</th>
                                                <th>Email</th>
                                                <th>Parent Name</th>
                                                <th>Parent Address</th>
                                                <th>Birth Day</th>
                                                <th>Register Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($details as $std)
                                            <tr>
                                                <td>{{$std->rnumber}}</td>
                                                <td>{{$std->fullname}}</td>
                                                <td>{{$std->mnumber}}</td>
                                                <td>{{$std->lnumber}}</td>
                                                <td>{{$std->email}}</td>
                                                <td>{{$std->parentname}}</td>
                                                <td>{{$std->paddress}}</td>
                                                <td>{{$std->bday}}</td>
                                                <td>{{$std->rdate}}</td>

                                                <td>
                                                    
                                                        <button class="btn btn-danger"  data-crid="{{$std->id}}" data-toggle="modal" data-target="#delete">Delete</button>
                                                    </td>
                                               
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                    @elseif(isset($message))
                                    <p>{{$message}}</p>
                                    
                                    @endif
                                </div>

                    </div>

               
                    </div> <!--pannel default-->
                </div> <!--card-->
            </div> <!--col-md -8-->
    </div> <!--row-->

<!-- //Modal -->

<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form action="{{route('allstudent.destroy','test')}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}

                
            <div class="modal-body">
                  <p class="text-center">
                      Are you sure you want to delete this?
                  </p>
                  <input type="hidden" name="student_id" id="cr_id" value="">
  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
              <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
     

</div> <!--container-->
@endsection

@section('script')

<script type="text/javascript">


$('#delete').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) 
var cr_id = button.data('crid') 
var modal = $(this)
modal.find('.modal-body #cr_id').val(cr_id);
})
   


 </script>
@stop

