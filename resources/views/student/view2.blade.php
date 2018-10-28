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


                                       <table class="table table-responsive">
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
                                                        <button class="btn btn-info" data-crid="{{$std->id}}" data-fn="{{$std->fullname}}" data-rnum="{{$std->rnumber}}"  data-mnum="{{$std->mnumber}}"    data-lnum="{{$std->lnumber}}"   data-pn="{{$std->parentname}}"   data-pd="{{$std->paddress}}" data-bd="{{$std->bday}}" data-rd="{{$std->rdate}}"       data-toggle="modal" data-target="#edit">Edit</button>
                                                        /
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




   <!-- Modal edit -->
   <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit</h4>
            </div>
            <form action="{{route('allstudent.update' ,'test')}}" method="post" >
               {{method_field('patch')}}
                 {{csrf_field()}}
                <div class="modal-body">

                    <input type="hidden" name="student_id" id="s_id" value="">
                    <div class="form-row">
                     
                            <div class="form-group col-md-6">
                                    <label for="classname">Register Number</label>
                                    <input type="text" class="form-control" name="section" id="r_id"  >
                                </div>

                        <div class="form-group col-md-6">
                            <label for="title">Full name</label>
                            <input type="text" class="form-control" name="name" id="fn_id">
                        </div>
                        
                    </div>

                    <div class="form-row">
                     
                        <div class="form-group col-md-6">
                                <label for="classname">Mobile Number</label>
                                <input type="text" class="form-control" name="section" id="mnum_id"  >
                            </div>

                    <div class="form-group col-md-6">
                        <label for="title">Land Number</label>
                        <input type="text" class="form-control" name="name" id="lnum_id">
                    </div>
                    
                </div>
                <div class="form-row">
                        <div class="form-group col-md-12">
                                <label for="title">E mail</label>
                                <input type="text" class="form-control" name="name" id="lnum_id">
                        </div>
                        
                
                        <div class="form-row">
                     
                                <div class="form-group col-md-6">
                                        <label for="classname">Parent Name</label>
                                        <input type="text" class="form-control" name="section" id="pn_id"  >
                                    </div>
        
                            <div class="form-group col-md-6">
                                <label for="title">Parent address</label>
                                <input type="text" class="form-control" name="name" id="pd_id">
                            </div>
                            
                        </div>







                </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label for="input ayear">Birth Date</label>
                            <input type="date" class="form-control" name="day" id="bd_id" >
                        </div>
                        <div class="form-group col-md-6  ">
                            <label for="time">Register Date</label>
                            <input type="date" name="" class="form-control" id="rd_id">
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


  $('#edit').on('show.bs.modal', function (event) {
        console.log("kjngjhjg");
    
      var button = $(event.relatedTarget) 
      var s_id = button.data('crid')
      var fn_id = button.data('fn') 
      var r_id = button.data('rnum') 
      var mnum_id = button.data('mnum') 
      var lnum_id = button.data('lnum') 
      var pn_id = button.data('pn') 
      var pd_id = button.data('pd') 
      var bd_id = button.data('bd') 
      var rd_id = button.data('rd') 
 
      
      var modal = $(this)

     
      modal.find('.modal-body #s_id').val(s_id);
      modal.find('.modal-body #fn_id').val(fn_id);
      modal.find('.modal-body #r_id').val(r_id);
      modal.find('.modal-body #mnum_id').val(mnum_id);
      modal.find('.modal-body #lnum_id').val(lnum_id);
      modal.find('.modal-body #pn_id').val(pn_id);
      modal.find('.modal-body #pd_id').val(pd_id);
      modal.find('.modal-body #bd_id').val(bd_id);
      modal.find('.modal-body #rd_id').val(rd_id);
    
      
    })
   


 </script>
@stop

