<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
   


    <!-- Fonts -->
    

    <!-- Styles -->
 

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
   
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-default ">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">New Sigma</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
      
              
              <li id="topNavDashboard"><a href="{{ route('home') }}"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard <span class="sr-only">(current)</span></a></li>
              <!-- <li><a href="#">Class</a></li> -->
              <li class="dropdown" id="topStudentMainNav">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-list-alt"></i> Student <span class="caret"></span></a>
        
                  <ul class="dropdown-menu">
                    <li id="addStudentNav"><a href="{{ route('create') }}">Add Student</a></li>                                               
                    <li id="manageStudentNav"><a href="">Manage Student</a></li>           
                  </ul>
                </li>

                <li id="topNavDashboard"><a href="{{ route('allcourse.index') }}"> <i class="glyphicon glyphicon-edit"></i> Class <span class="sr-only">(current)</span></a></li>



             <!--
              <li id="topNavTeacher"><a href=""> <i class="glyphicon glyphicon-briefcase"></i> Teacher</a></li>
             -->
      
              <li class="dropdown" id="topAttendanceMainNav">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-time"></i> Attendance <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li id="takeAttendNav"><a href="">Take Attendance</a></li>
                  <li id="attenReport"><a href="">Attendance Report</a></li>
                </ul>
              </li>  
               <!--   
            <li class="dropdown" id="topMarksheetMainNav">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-duplicate"></i> Marksheet <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li id="manageMarksheet"><a href="">Manage Marksheet</a></li>
                  <li id="manageMarks"><a href="">Manage Marks</a></li>
                </ul>
              </li>
      
              <li class="dropdown" id="topAccountMainNav">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-indent-left"></i> Accounting <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li id="createStudentNav"><a href="">Create Student Payment</a></li>                        
                  <li id="managePayNav"><a href="">Manage Payment</a></li>                        
                  <li id="expNav"><a href="">Expenses</a></li>           
                  <li id="incomeNav"><a href="">Income</a></li>           
                </ul>
              </li>
            -->
            </ul>   
            
            
            <ul class="nav navbar-nav navbar-right">        
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
                <ul class="dropdown-menu"> 
                                                
                  <li><a href="{{ url('/main/logout') }}">Logout</a></li>
                </ul>
              </li>
            </ul>

            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

   
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/app.js') }}" defer></script>
@yield('script') 

</body>
</html>


