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
                                 <strong>Welcome {{ Auth::user()->name }}</strong>
                                </div>
                               @else
                                <script>window.location = "/login";</script>
                               @endif

                        </div>
                        <div class="card-body">

                              
                            <form action="{{ url('/att') }}" method="POST" role="search">
                                {{ csrf_field() }}

                               

                                <div class="form-row">
                                        <div class="form-group col-md-4">
                                                <label for="className">Class</label>
                                                <select class="form-control" name="classname" id="clzn" >
                                                @foreach($course_list as $cr)
                                                <option value="{{ $cr->classname}}">{{ $cr->classname }}</option>
                                                @endforeach
                                            </select> 
                                     </div>

                                     <div class="form-group col-md-4">
                                            <label for="time">Select Time</label>
                                            <input type="date" name="cd" class="form-control" >
                                    </div>
                                    
                                    <div class="form-group col-md-4"></div>

                                   
                                    <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                     
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
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $user)
                                        <tr>
                                            <td>{{$user->tag}}</td>
                                            <td>{{$user->fullname}}</td>
                                           
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
   
</div> <!--container-->
@section('script')

@stop
@endsection





