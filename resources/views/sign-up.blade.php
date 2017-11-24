<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>

	<title>@yield('title')</title>

	<meta name = "viewport" content = " width=device-width, user-scalable= no, initial-scale = 1.0, maximun-scale = 1.0, minimum-scale = 1.0">

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/material/material.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/sign-up.css')}}">

</head>

<body>

	<img src="{{asset('/images/login/background-body/fitness4.jpg')}}" class="image-responsive image-body">
	

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	
	</div>

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 column-sign-up">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 white" align="center">

			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 div-colors-blue-yellow"> 

				<div class="blue">
					
				</div>

				<div class="yellow">
					
				</div>
				
			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">

				<form action="#" class="form">

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="text" id="nameGym">
					    <label class="mdl-textfield__label" for="nameGym">Nombre gimnasio</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="text" id="name">
					    <label class="mdl-textfield__label" for="name">Nombres</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="text" id="lastname">
					    <label class="mdl-textfield__label" for="lastname">Apellidos</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="text" id="addres">
					    <label class="mdl-textfield__label" for="adrres">Dirección </label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="tel" id="phone">
					    <label class="mdl-textfield__label" for="phone">Telefono </label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up" >
					    <input class="mdl-textfield__input" type="email" id="email">
					    <label class="mdl-textfield__label" for="email">Correo</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="password" id="password">
					    <label class="mdl-textfield__label" for="password">Contraseña</label>
					</div>

					  <br>

					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored btn-submit-sign-up" type="submit">Ingresar</button>

					<input type="hidden"  name="_token" id="token" value="{{csrf_token()}}">

				</form>

				<form  class="go-sign-up">

					<button class="mdl-button mdl-js-button mdl-js-ripple-effect btn-sign-in">
		  				Iniciar sesión
					</button>

					<input type="hidden"  name="_token" id="token" value="{{csrf_token()}}">

				</form>	

			</div>	

		</div>
		
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	
	</div>

</body>


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/material/material.min.js')}}"></script>

</html>