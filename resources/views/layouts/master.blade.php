<!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>

	<meta name = "viewport" content = " width=device-width, user-scalable= no, initial-scale = 1.0, maximun-scale = 1.0, minimum-scale = 1.0">

  	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

  	<link rel="stylesheet" type="text/css" href="{{asset('css/material/material.min.css')}}">

  	<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">

  	<link rel="stylesheet" type="text/css" href="{{asset('css/	colors-global.css')}}">

  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	@yield('css')

</head>

<body>

	<input type="hidden"  name="_token" id="token" value="{{csrf_token()}}">

	@yield('content')

	

</body>

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/material/material.min.js')}}"></script>
	
@yield('js')


</html>