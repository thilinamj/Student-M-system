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
                           
                           
                        </div>
                </div>
            </div>
    </div>
   
</div>
@section('script')

@stop
@endsection





