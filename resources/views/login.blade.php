<!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>

	<meta name = "viewport" content = " width=device-width, user-scalable= no, initial-scale = 1.0, maximun-scale = 1.0, minimum-scale = 1.0">

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/material/material.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">

</head>

<body>

	<div class="body">

		<img src="{{asset('/images/login/background-body/fitness.jpg')}}" class="image-responsive image-body">

		<div class="col-lg-8 col-md-7 col-sm-6 col-xs-5" style="top: 280px; padding-left: 11.75%">
			<p class="name-login">Sgymo</p>
			<p class="subname-login">Administra tu gimnasio</p>
		</div>

		<div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 column-blue">

		</div>

		<div class="col-lg-4 col-md-5 col-sm-6  col-xs-7 pull-right column-login">

			<div class="mdl-card mdl-shadow--2dp cards-login" style="">

				<div class="user-default">
					<h1 class="title-login">Sgymo</h1>
					<h6 class="subtitle-login">Iniciar sesión</h6>
				</div>

				<form action="#" class="form">

				  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form">
				    <input class="mdl-textfield__input" type="email" id="email">
				    <label class="mdl-textfield__label" for="email">Correo</label>
				  </div>

				  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form">
				    <input class="mdl-textfield__input" type="password" id="password">
				    <label class="mdl-textfield__label" for="password">Contraseña</label>
				  </div>

					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored btn-submit-login" type="submit">Ingresar</button>

					<input type="hidden"  name="_token" id="token" value="{{csrf_token()}}">

				</form>

				<form  class="go-sign-up">

					<button class="mdl-button mdl-js-button mdl-js-ripple-effect">
  						Registrarse
					</button>

					<input type="hidden"  name="_token" id="token" value="{{csrf_token()}}">

				</form>
			
			</div>
			
		</div>
	
	</div>



	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/material/material.min.js')}}"></script>

</body>

</html>