@extends('layouts.app')
@section('content')
<div class="container ">
    
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Home</li>
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
                           
                            <form action="{{ url('/search') }}" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q"
                                        placeholder="Search Student Name or Register Number"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            
                            <div class="search">
                                @if(isset($details))
                                <hr>
                                    <h3> The Search Student details for your <b> {{ $query }} </b> are :</h3>
                                    <hr>
                           
                                <table class="table table-striped">
                                    <thead>
                                        <tr> 
                                            <th>Register Number</th>
                                            <th>Full Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Parent Name</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $user)
                                        <tr>
                                            <td>{{$user->rnumber}}</td>
                                            <td>{{$user->fullname}}</td>
                                            <td>{{$user->mnumber}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->parentname}}</td>
                                            <td>{{$user->classname}}</td>
                                            <td>{{$user->sectionname}}</td>
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
                </div>
            </div>
    </div>
   
</div>
@section('script')

@stop
@endsection





