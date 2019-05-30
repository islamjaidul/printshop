<!DOCTYPE html>
<html lang="en">
<head>
	<title>PrintShop</title>
	<!-- META INFORMATION -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link href="{{asset('/plugins/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">

	<link href="{{asset('/plugins/bootstrap/css/footable.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
	
	@stack('styles')

	<?php if(isset($styles)) echo $styles; ?>
	<script src="{{asset('/js/app.js')}}"></script>
	<?php if(isset($scripts)) echo $scripts; ?>
	<!-- SCRIPTS -->
</head>
<body class="fixed-left">
	<div id="wrapper">
		<!-- Top Bar Start -->
		<div class="topbar">
			<!-- LOGO -->
			<div class="topbar-left">
				
				<div class="text-center">
					<img src="images/path_1.png" alt="IMG">
					<h3>Print  Shop</h3>
				</div>
			</div>

			<!-- Button mobile view to collapse sidebar menu -->
			<div class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="pull-left">
						<button class="button-menu-mobile open-left">
							<i class="fa fa-bars"></i>
						</button>
						<span class="clearfix"></span>
					</div>
					<ul class="nav navbar-nav navbar-right pull-right">
						<li class="dropdown">
							<a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('/images/avatar.png')}}" alt="user-img" class="img-circle"> </a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> Logout

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    	{{ csrf_field() }}
                                	</form>
                                </a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		<!-- Top Bar End -->
		<!-- ========== Left Sidebar Start ========== -->
		<div class="left side-menu">
			<div class="sidebar-inner slimscrollleft">
				<!--- Divider -->
				<div id="sidebar-menu">					
					<div class="clearfix"></div>

					<ul>
						<li><a href="{{url('home')}}" class="waves-effect waves-light {{ Request::segment(1)=='home' ? 'active':'' }}"><i class="fa fa-home"></i><span> Home</span></a>
						</li>
						<li><a href="{{url('order')}}" class="waves-effect waves-light {{ Request::segment(1)=='order' ? 'active':'' }}"><i class="fa fa-archive"></i><span>Orders</span></a>
						</li>
						<li>
							<a href="{{url('setting')}}" class="waves-effect waves-light {{ Request::segment(1)=='setting' ? 'active':'' }}"><i class="fa fa-cog"></i><span>Settings</span></a>
						</li>
						<li>
							<a href="{{url('log')}}" class="waves-effect waves-light {{ Request::segment(1)=='log' ? 'active':'' }}"><i class="fa fa-list"></i><span>Change Log</span></a>
						</li>
					</ul>

			

					<hr />
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- Left Sidebar End --> 
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->                      
		<div class="content-page">
			@yield('content')
			<footer class="footer text-right">
				&copy; {{date('Y')}} PrintShop.
				<br />
				
			</footer>
		</div>
		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->
	</div>
	@if(session('warning'))
	<div class="alert alert-warning alert-float" role="alert">
		{{ session('warning') }}
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
	</div>
	@elseif(session('success'))
	<div class="alert alert-success alert-float" role="alert">
		{{ session('success') }}
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
	</div>
	@elseif(session('failure'))
	<div class="alert alert-danger alert-float" role="alert">
		{{ session('failure') }}
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
	</div>
	@endif

	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery  -->

	<script src="{{asset('/js/detect.js')}}"></script>
	<script src="{{asset('/js/fastclick.js')}}"></script>
	<script src="{{asset('/js/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('/js/jquery.blockUI.js')}}"></script>
	<script src="{{asset('/js/waves.js')}}"></script>
	<script src="{{asset('/js/wow.min.js')}}"></script>
	<script src="{{asset('/js/jquery.nicescroll.js')}}"></script>
	<script src="{{asset('/js/jquery.scrollTo.min.js')}}"></script>
	<script src="{{asset('/js/jquery.app.js')}}"></script>
	<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
	<!-- moment js  -->
	<script src="{{asset('/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
	<script src="{{asset('/plugins/moment/moment.js')}}"></script>
	<script src="{{asset('/plugins/bootstrap/js/footable.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function() {
				$('.alert-float').fadeOut('fast');
			}, 4000);
		});
	</script>

	@stack('scripts')

</body>
</html>