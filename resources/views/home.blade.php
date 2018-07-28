@extends('layouts.app')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
        </div>

    
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            

                          You are logged in!
                        </div>
                </div>
            </div>
    </div>
   
</div>
@endsection




