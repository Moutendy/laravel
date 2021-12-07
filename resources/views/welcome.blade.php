<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Home</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/gsdk.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="http://creative-tim.com">
                     <div class="logo-container">
                        <div class="logo">
                            <img src="assets/img/new_logo.png">
                        </div>
                        <div class="brand">
                           
                        </div>
                    </div>
                </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
			  @if (Route::has('login'))
                    @auth
                    <li><a class="btn btn-round btn-default" href="{{ url('/dashboard') }}">Dashboard</a></li>
					@else
                    <li><a href="{{ route('login') }}">Login</a></li>
					@if (Route::has('register'))
					<li><a href="{{ route('register') }}" class="btn btn-round btn-default">Register</a></li>
					@endif
                    @endauth
            @endif
               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="motto">
            <div>Bie</div>
            <div class="border no-right-border">N</div><div class="border">Ve</div>
            <div>Nu</div>
        </div>
        <div class="img-src" style="background-image: url('assets/img/cover_4.jpg')"></div>
        <div class='img-src blur' style="background-image: url('assets/img/cover_4_blur.jpg')"></div>
    </div>
    
</div>     
    


        
        <div class="space"></div>
        <div class="tim-title">
            <h3>Carousel</h3>
        </div>
    </div>
</div>
<div id="carousel">
    <!--    
            IMPORTANT - This carousel can have a special class for a smooth transition "gsdk-transition". Since javascript cannot be overwritten, if you want to use it, you can use the bootstrap.js or bootstrap.min.js from the GSDKit or you can open your bootstrap.js file, search for "emulateTransitionEnd(600)" and change it with "emulateTransitionEnd(1200)"     
            
    -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/carousel_blue.png" alt="Awesome Image">
        </div>
        <div class="item">
          <img src="assets/img/carousel_green.png" alt="Awesome Image">
        </div>
        <div class="item">
          <img src="assets/img/carousel_red.png" alt="Awesome Image">
        </div>
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
    </div>
</div> <!-- end carousel -->

<div class="main" id="carousel">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    <div class="container tim-container">
	<?php 
         use App\Models\FormationModel;
  
 
 
 
  $formationaffiche = FormationModel::paginate(2);
  
  $count = count($formationaffiche);
  foreach($formationaffiche as $formations) {
    
 ?>
   
   
        <div id="extras">
            <div class="space"></div>
            <div class="row">


                <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="text-center">

					<div class="carousel-inner">
        <div class="item active">
        <div class="item">
	
	<?php	echo "<a href='/register'><img src='storage/$formations->image' alt='Awesome Image'></a>"; ?> 
        </div>
    
        </div>
     
      </div>
	  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
	  </div>
</div>
                 
                <div class="col-md-5 col-sm-12">
                                <h1 class="text-center">Formation
                                
                                <small class="subtitle">temoignage</small></h1>
                                <hr>
                                <p>
								<?php echo  "<td>".$formations->description."</td>";  } ?> </p>
                               

                </div>
            </div>
        </div>
</div>
    <!--     end extras -->    
    </div>
<div class="main" id="carousel">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    <div class="container tim-container">
        <div id="extras">
            <div class="space"></div>
            <div class="row">


                <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="text-center">

					<div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/carousel_blue.png" alt="Awesome Image">
        </div>
        <div class="item">
          <img src="assets/img/carousel_green.png" alt="Awesome Image">
        </div>
        <div class="item">
		<img src="assets/img/carousel_green.png" alt="Awesome Image">
        </div>
      </div>
	  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
	  </div>
</div>
                 
                <div class="col-md-5 col-sm-12">
                                <h1 class="text-center">Temoignage
                                
                                <small class="subtitle">temoignage</small></h1>
                                <hr>
                                <p>
                                Creative Tim offers Bootstrap based design elements that speed up your development work. From plugins to complex kits, we have everything you need. 
                                </p>
                               

                </div>
            </div>
        </div>
</div>
    <!--     end extras -->    
    </div>
<!-- end container -->
<div class="space-30"></div>
</div>


<!-- end main -->

<div class="parallax-pro">
    <div class="img-src" style="background-image: url('http://get-shit-done-pro.herokuapp.com/assets/img/bg6.jpg');"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    <small>
                       Don't forget to check our latest release:<a>
                    </small>
                </h1>
            </div>
           <?php
use App\Models\ContactModel;


          ?> 
            <div class="col-md-6 col-md-offset-3 col-md-12 text-center">
                <h1 class="hello text-center">
                   <a href="#">Contact<span class="label label-warning">Pro</span></a>
                   <small>
                   <ul class="list-unstyled">
                   <?php

  
 
 
 
  $contact = ContactModel::paginate(2);
  foreach($contact as $contacts) {
    echo " <li>Tel</li>";
    echo  "<li>".$contacts->tel."<li>";
    echo " <li>Email</li>";
   echo  "<td>".$contacts->adressemail."</li>";
   echo " <li>Adresse Postal</li>";
   echo  "<li>".$contacts->adressepostal."</li>";
  

  
 
   
  }
   ?>
                    </ul>
                    </small>
                </h1>
                 <div class="actions">
                     <a class="btn btn-lg btn-warning btn-fill" href="http://gsdk.creative-tim.com/?ref=get-shit-done">Suivez Nous</a>
                </div>
            </div>
        </div>
        <div class="space-30"></div>
        <div class="row">
             <div class="col-md-12 text-center">
                <div class="credits">
                    &copy; <script>document.write(new Date().getFullYear())</script> Get Shit Done Kit by <a href="http://creative-tim.com"> Creative Tim</a>, made with <i class="fa fa-heart heart" alt="love"></i> for a better web.
                </div>
            </div>
        </div>
    </div>

</div>

</body>

    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/get-shit-done.js"></script>
    <script src="assets/js/custom.js"></script>

<script type="text/javascript">
         
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');  
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
	});
	$( "#slider-default" ).slider({
			value: 70,
			orientation: "horizontal",
			range: "min",
			animate: true
	});
	$('.carousel').carousel({
      interval: 4000
    });
      
    
</script>
</html>