<!DOCTYPE html>
<html>
<head>

	<title> @yield('title') </title>

	<meta name = "viewport" content = " width=device-width, user-scalable= no, initial-scale = 1.0, maximun-scale = 1.0, minimum-scale = 1.0">


	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/navs.css')}}">

	@yield('css')

</head>

<input type="hidden"  name="_token" id="token" value="{{csrf_token()}}"/>

<nav class="navbar navbar-default">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sgymo</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  
</nav>

@yield('content')

<body style="background: @yield('bg'); margin:0px; padding: 0px;">

	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

	@yield('js')

</body>

</html>

	
	