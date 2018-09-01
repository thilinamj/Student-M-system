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
                <div class="card">
                    <div class="card-header">
                    
                       </div>
                        <div class="card-body">
                            @if(isset(Auth::user()->email))
                            <div class="alert alert-danger success-block">
                             <strong>Welcome {{ Auth::user()->email }}</strong>
                             <br />
                             <a href="{{ url('/main/logout') }}">Logout</a>
                            </div>
                           @else
                            <script>window.location = "/main";</script>
                           @endif
                            
                        </div>
                </div>
            </div>
    </div>
   
</div>
@section('script')

@stop
@endsection





