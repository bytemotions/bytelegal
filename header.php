<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Law Attorney - Bootstrap 3 Template</title>

		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"> 		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->	
			
		<!-- Inicio wp_head() -->
		<?php wp_head(); ?>
		<!-- Fin wp_head() -->
	</head>
	<body>
	<!-- Main Header Starts -->
	
		<header class="main-header">
			<!-- Nested Container Starts -->
			<div class="container">
				<!-- Nested Row Starts -->
				<div class="row">
					<!-- Logo Starts -->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<img src="<?php echo get_theme_file_uri( 'assets/images/logo.png' ); ?>" alt="Law Attorney" class="img-responsive img-center-xs logo">
					</div><!--.logo-->					
					<!-- Right Col Starts -->
					<div class="col-md-9 col-sm-8 col-xs-12 hidden-xs">
					<!-- Header Links Starts-->
					<?php wp_nav_menu( 
						array( 'theme_location'  => 'header-links',
						 	   'menu_class'      => 'list-unstyled list-inline header-links text-right-lg text-right-md text-right-sm text-center-xs text-light',) ); ?>
					<!-- Header Links Ends -->
					<!-- Starts -->
						<ul class="list-unstyled list-inline header-info text-center-xs pull-right-lg pull-right-md pull-right-sm">
							<li class="hidden-sm"><a href="#" class="btn btn-secondary text-uppercase animation flat"><i class="fa fa-comments"></i> Request Free Consutation</a></li>
							<li class="clearfix">
								<i class="fa fa-map-marker pull-left"></i>
								<span class="pull-left">
									<h6>Flat #505, Khairthabad</h6>
									Banjara Hills, Rd: 3, Hyd - 001
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-phone pull-left"></i>
								<span class="pull-left">
									<h6>001 345 678 9630</h6>
									Free Case Consultation
								</span>
							</li>
						</ul>
					<!-- Ends -->
					</div>
				<!-- Right Col Ends -->
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</header>
		
	<!-- Main Header Ends -->
	<!-- Main Menu Starts -->
		<nav id="nav" class="main-menu navbar flat">
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Nav Header Starts -->
				<div class="navbar-header">
					<button type="button" class="btn btn-navbar navbar-toggle flat animation" data-toggle="collapse" data-target=".navbar-cat-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
				</div>
			<!-- Nav Header Ends -->
			<!-- Navbar Cat collapse Starts -->
				<div class="collapse navbar-collapse navbar-cat-collapse animation">
					<!-- PRIMARY MENU STARTS -->
					<?php wp_nav_menu( 
						array( 	'theme_location'  => 'header-primary',
							  	'menu_class'      => 'nav navbar-nav text-uppercase text-bold'	) ); ?>
					<!-- END PRIMARY MENU -->
					<!-- SOCIAL MENU START -->
					<ul class="nav navbar-nav navbar-right text-right-lg text-right-md hidden-sm hidden-xs">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul><!-- SOCIAL MENU END -->					
				</div>
			<!-- Navbar Cat collapse Ends -->
			</div>
		<!-- Nested Container Ends -->
		</nav>
	<!-- Main Menu Ends -->