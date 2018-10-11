@extends('layouts.app')
@section('content')
<div class="container ">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Students View</li>
        </ol>
    <div class="row">
        <div class="col-md-4">
            @include('layouts/sidebar')
        </div>

    
            <div class="col-md-8">
                <div class="card">
                    <div class="panel panel-default">
                    <div class="panel-heading"><strong> View Students</strong></div>
                            <div class="panel-body">

                                    <span>Product Name: </span>
                                <select style="width: 200px" class="showstudent" id="student_id">
                              
                                    <option value="0" disabled="true" selected="true">-Select-</option>
                                    @foreach($student_list as $std)
                                    <option value="{{$std->classname}}">{{$std->classname}}</option>
                                @endforeach
                          
                              
                                </select>
                              
                                <span>Product Name: </span>
                                <select style="width: 200px" class="productname">
                              
                                    <option value="0" disabled="true" selected="true">Product Name</option>
                                </select>
                              
                               
                              
                                <table class="table table-striped" id="showstudent">
                                    <thead>
                                        <tr> 
                                            <th>Register Number</th>
                                            <th>Full Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        
                                      
                                    </tbody>
                                </table>
                            </div>

                              
                            </div>
                                  
                    </div>
                </div>
            </div>
    </div>
   
</div>
@endsection

@section('script')
<script>
    
    $(document).on('change','#student_id',function(){
        studentcall();
    });

function studentcall()  {

 var studentclass = document.getElementById("student_id").value;


$.ajax({
				type:'get',
				url:'/searchstd',
				data:{'id':studentclass},
				success:function(data){
                    //console.log('success');
                    
                    var obj1 = data.message[0];
                    //alert(data.message.length);


					//console.log(data);

					 $("#showstudent").find("tr:gt(0)").remove();
                  
                 
                       for (var i = 0; i < data.message.length; i++){
					 	  
					 	   $('#showstudent').append('<tr id="row'+i+'"> <td>'+obj1.rnumber+'</td> <td>'+obj1.fullname+'</td> <td></td> <td></td></tr>');  
						  
					 	}
					// 	document.getElementById("total").value=total.toFixed(2);
					// 	var obj1 = data.message1[0];

					// 	if(!obj1){
					// 		obj1={subamount:'0'};
					// 	}
					// 	document.getElementById("rfees").value=obj1.subamount;
					// 	var gtotal = total+(total*0.1)+parseFloat(obj1.subamount);
					// 	document.getElementById("gtotal").value=gtotal.toFixed(2);
				   

				  
				},
				error:function(){

				}
			});

    
}


 </script>
@stop

