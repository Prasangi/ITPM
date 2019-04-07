<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="course">Courses</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">page-1<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> Sign Up</a></li>
      <li><a href="#"> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container course_extra_margin">
 
    <div class="course_title">
        <h1>courses</h1>
        @foreach($courses as $course)
            <div class="panel-group" id="accordion">
           
                <div class="panel panel-default course_name">
                
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">{{$course->title}}</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body course_year">
                        
                        <li><a href="IT1styearsemester">1st year</a></li>
                        <li><a href="IT2styearsemester">2nd year</a></li>
                        <li><a href="#">3rd year</a></li>
                        <li><a href="#">4th year</a></li>
                    
                    </div>
                  </div>
          
                </div>
                @endforeach
            
                <!-- <div class="panel panel-default course_name">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Information Technology</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body course_year">
                            
                        <li><a href="#">1st year</a></li>
                        <li><a href="#">2nd year</a></li>
                        <li><a href="#">3rd year</a></li>
                        <li><a href="#">4th year</a></li>
                         
                    </div>
                  </div>
                </div> -->

                <!-- <div class="panel panel-default course_name">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Information Technology</a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body course_year">
                           
                            <li><a href="#">1st year</a></li>
                            <li><a href="#">2nd year</a></li>
                            <li><a href="#">3rd year</a></li>
                            <li><a href="#">4th year</a></li>
                            
                    </div>
                  </div>
                </div> -->

                <!-- <div class="panel panel-default course_name">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Information Technology</a>
                          </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                          <div class="panel-body course_year">
                                
                                <li><a href="#">1st year</a></li>
                                <li><a href="#">2nd year</a></li>
                                <li><a href="#">3rd year</a></li>
                                <li><a href="#">4th year</a></li>
                                    
                          </div>
                        </div>
                      </div> -->
              </div> 
            </div>
                
    </div>    

    

  

<script src="{{ asset('js/app.js') }}"></script>
   
</body>
</html>