<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('backend/css/img/favicon.ico')}}">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(backend/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
				<form class="form-horizontal" action="{{url('/admin-dashboard')}}" method="post">

						@csrf

						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email"  type="email" placeholder="type email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password"  type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							
						
							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="{{asset('backend/css/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('backend/css/js/modernizr.j')}}s"></script>
	
		<script src="{{asset('backend/css/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.cookie.js')}}"></script>
	
		<script src='{{asset('backend/css/js/fullcalendar.min.js')}}'></script>
	
		<script src='{{asset('backend/css/js/jquery.dataTables.min.js')}}'></script>

		<script src="{{asset('backend/css/js/excanvas.js')}}"></script>
	<script src="{{asset('backend/css/js/jquery.flot.js')}}"></script>
	<script src="{{asset('backend/css/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('backend/css/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('backend/css/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('backend/css/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('backend/css/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('backend/css/js/counter.js')}}"></script>
	
		<script src="{{asset('backend/css/js/retina.js')}}"></script>

		<script src="{{asset('backend/css/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
