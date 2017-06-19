<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login | Comunicados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="">

		
		<!-- Base Css Files -->
		
		<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/animate-css/animate.min.css')}}" rel="stylesheet" />

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		


	<style>
      .carousel { z-index: -99; }
      .carousel .item {
        position: fixed; 
        width: 100%; height: 100%;
        -webkit-transition: opacity 1s;
        -moz-transition: opacity 1s;
        -ms-transition: opacity 1s;
        -o-transition: opacity 1s;
        transition: opacity 1s;

      }
      .carousel .one {
        background: url({{asset('img/bg1.jpg')}});
        background-size: cover;
        -moz-background-size: cover;
      }
      .carousel .two {
        background: url({{asset('img/bg2.jpg')}});
        background-size: cover;
        -moz-background-size: cover;
      }
      .carousel .three {
        background: url({{asset('img/bg3.jpg')}});
        background-size: cover;
        -moz-background-size: cover;
      }
      .carousel .active.left {
        left:0;
        opacity:0;
        z-index:2;
      }
    </style>

  </head>

    <body class="fixed-left login-page">
			

    <div id="myCarousel" class="carousel container slide">
      <div class="carousel-inner">
                <div class="active item one"></div>
                <div class="item two"></div>
                <div class="item three"></div>
      </div>
    </div>

    <div class="container">
		<div class="full-content-center">
			<!--<p class="text-center"><a href="#"><img src="assets/img/login-logo.png" alt="Logo"></a></p>-->
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<img src="{{asset('img/login-logo.png')}}" class="logo">
					<form role="form" action="index.html">
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" placeholder="Nombre de usuario">
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" class="form-control text-input" placeholder="********">
						</div>
						
						<div class="row">
							<div class="col-sm-6">
							<button type="submit" class="btn btn-success btn-block">INGRESAR</button>
							</div>
							<div class="col-sm-6">
							<a href="registrar.html" class="btn btn-default btn-block">Registrarse</a>
							</div>
						</div>
					</form>
				</div>
			</div>
	</div>
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{asset('assets/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
      $(document).ready(function() {
        $('.carousel').carousel({interval: 4000});
      });
    </script>


  </body>
</html>
