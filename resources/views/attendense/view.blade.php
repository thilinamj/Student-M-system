@extends('layouts.app')
@section('content')
<div class="container ">
    
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Home/Attendense</li>
                    </ol>
                 
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
          
        </div>

    
            <div class="col-md-8">
                <div class="panel panel-default">
                        <div class="panel-heading">
                                @if(isset(Auth::user()->email))
                                <div class="">
                                 <strong>View Attendense</strong>
                                </div>
                               @else
                                <script>window.location = "/login";</script>
                               @endif

                        </div>
                        <div class="card-body">

                              
                            <form action="{{ url('/att') }}" method="POST" role="search">
                                {{ csrf_field() }}

                                <div class="input-group">
                                    <input type="date" class="form-control" name="cd"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
        
                                
                            </form>
                            
                            <div class="search">
                                @if(isset($details))
                                <hr>
                                    <h3> The Attendense details for your <b> {{ $query }} </b> are :</h3>
                                    <hr>

                                    <table class="table table-striped">
                                    <thead>
                                        <tr> 
                                            <th>Register Number</th>
                                                <th>Full Name</th>
                                                <th>Mobile Number</th>
                                                <th>Parent Name</th>
                                                <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $user)
                                        <tr>
                                            <td>{{$user->tag}}</td>
                                            <td>{{$user->fullname}}</td>
                                            <td>{{$user->mnumber}}</td>
                                            <td>{{$user->parentname}}</td>
                                            
                                           

                                            <td>
                                            
                                                    <button class="btn btn-danger"  data-crid="{{$user->id}}" data-toggle="modal" data-target="#delete">Delete</button>

                                                </td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                               
                            </div>
                           <hr>
                        </div> <!--cardbody-->

                        @elseif(isset($message))
                        <p>{{$message}}</p>
                        
                        @endif
                </div> <!--pannel default-->
            </div> <!--col-md-8-->
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
@section('script')

@stop
@endsection





