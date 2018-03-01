<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/logo.ico">
@yield('aimeos_header')
	<title>小学帮购物商城</title>
  <style type="text/css">
      /* #logo {
			    width: auto;
					height: 133%;
			} */

			#shoptop {
				background-image: url('/img/logo.gif') ;
				background-repeat:no-repeat;
				background-position:3.8% 0%;
			}

     #shop_home_page_link {
			 text-indent: 1.5em;
			 opacity: 0;
       /* overflow: hidden; */
		 }

	</style>
	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@yield('aimeos_styles')
</head>
<body>
	<nav class="navbar navbar-default">
	<div class="container-fluid" id="shoptop">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand" href="#"><img id="logo" src="/img/logo.gif" /></a> -->
				<!-- <a class="navbar-brand" href="/list"></a> -->
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
				<ul class="nav navbar-nav">
					<li><a href="/list" id="shop_home_page_link">小学帮——商城主页</a></li>
				</ul>

				<div class="nav navbar-nav navbar-right">
@yield('aimeos_head')
				</div>
				<!-- Right Side Of Navbar -->
				<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						@guest
								<li><a href="{{ route('login') }}">登录</a></li>
						@else
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
												{{ Auth::user()->name }} <span class="caret"></span>
										</a>

										<ul class="dropdown-menu">
												<li>
														<a href="{{ route('logout') }}"
																onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
															注销
														</a>

														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																{{ csrf_field() }}
														</form>
												</li>
										</ul>
								</li>
						@endguest
				</ul>
			</div>
		</div>
	</nav>
    <div class="col-xs-12">
@yield('aimeos_nav')
@yield('aimeos_stage')
@yield('aimeos_body')
@yield('aimeos_aside')
@yield('content')
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('aimeos_scripts')
	</body>
</html>

