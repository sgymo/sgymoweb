<!DOCTYPE html>
<html>
<head>

	<title>Iniciar sesión</title>

	<meta name = "viewport" content = " width=device-width, user-scalable= no, initial-scale = 1.0, maximun-scale = 1.0, minimum-scale = 1.0">

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/material/material.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/colors-global.css')}}">

</head>

<body>

	<div class="body">

		<div class="row login-content-one">

			<div class="col-lg-9 col-md-8 col-xs-8 col-sm-8 column-image-background"> 
				<img src="{{asset('/images/login/background-body/fitness.jpg')}}" class="image-responsive image-body">

			</div>

			<div class="col-lg-3 col-md-4 col-sm-4 hidden-xs column-color sgymo-color-primary"> </div>

		</div>

		<div class="row login-content-second">

			<div class="col-lg-9 col-md-8 col-xs-8 col-sm-8 hidden-xs column-name-login"> 
				<p class="name-login">Sgymo</p>
				<p class="subname-login"> Administra tu gimnasio</p>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 login-column">

				<div class="mdl-card mdl-shadow--3dp login-card">


					<form action="#" class="form">

					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form">
					    <input class="mdl-textfield__input" type="email" id="email" required="true">
					    <label class="mdl-textfield__label" for="email" id="label-input-form-sign-in">Correo</label>
					  </div>

					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form">
					    <input class="mdl-textfield__input" type="password" id="password" required="true">
					    <label class="mdl-textfield__label" for="password" id="label-input-form-sign-in">Contraseña</label>
					  </div>

						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btn-submit-login" type="submit">Ingresar</button>

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

	</div>

	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/material/material.min.js')}}"></script>

</body>

</html>