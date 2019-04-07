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
      <a class="navbar-brand" href="#">ABC</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="course">Courses</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Library<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Student affiars</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('auth.register')}}"> Sign Up</a></li>
      <li><a href="{{ route('auth.login')}}"> Login</a></li>
    </ul>
  </div>
</nav>

<div class="owl-carousel owl-theme welcome_page_carousel">
    <div class="item">
    <div class="text_carousel">
        <p>welcome to ABC Institute</p>
    </div>
        <img src="images/fullscreen-slider.jpg">
    </div>
    <div class="item">
    <div class="text_carousel">
        <p>Education of the Future Generations </p>
    </div>
        <img src="images/fullscreen-slider.jpg">
    </div>
   
</div>
   

<div id="band" class="container text-center margin_bottom_first">
  <h3>About Us</h3>
  <p><em>Thrive hard to learn</em></p>
  <p>Sometimes the process of learning can get overwhelming. There’s so much to learn, and not enough time to devote to really diving in. When I get in a situation where I feel like giving up, or like I’ll never be able to learn what I want to learn in the time I have, it can help to turn to some outside inspiration. </p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Amanda</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="images/pexels-photo-432497.jpeg" class="img-circle person img_girls" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Janangi</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="images/GUEST_2d63c30f-5d2d-4f97-b818-54b85ff5addb.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Prasangi</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="images/gilmore-girls-rory.jpg" class="img-circle person img_girls" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div>

<div id="contact" class="container bg-grey margin_bottom_second">
  <h2 class="text-center extra_contact_margin">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="fa fa-map-marker"></span> Chicago, US</p>
      <p><span class="fa fa-phone"></span> +00 1515151515</p>
      <p><span class="fa fa-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
  </a><br><br>
  <p>copyrights 2019 LMS<a href="#" data-toggle="tooltip"></a></p> 
</footer>
  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
