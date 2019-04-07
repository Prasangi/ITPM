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
      <li class="active"><a href="#">Home</a></li>
      <li class="active"><a href="course">Courses</a></li>
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

<div class="container course_extra_margin text-center">
    <div class="row">
        <div class="col-md-4 border_details">
            <h1>Lectures</h1><br><br>
            <p>lecture 1</p>
        </div>    
        <div class="col-md-4 border_details">
            <h1>Lab</h1><br><br>
            <p>Lab 1</p>
        </div>    
        <div class="col-md-4 border_details">
            <h1>Tute</h1><br><br>
            <p>Tute 1</p>
        </div>        
    </div>    
</div>    

<script src="{{ asset('js/app.js') }}"></script>
   
</body>
</html>