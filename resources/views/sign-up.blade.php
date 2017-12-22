@extends('layouts.master')

@section('title')

Registro

@endsection

@section('css')

	<link rel="stylesheet" type="text/css" href="{{asset('css/sign-up.css')}}">

@endsection

@section('content')

	<img src="{{asset('/images/login/background-body/fitness4.jpg')}}" class="image-responsive image-body">
	

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 space">
	
	</div>

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 column-sign-up">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background-color-div-form" align="center">

			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 div-colors-primary-accent"> 

				<div class="sgymo-color-primary color-primary">
					
				</div>

				<div class="sgymo-color-accent color-accent">
					
				</div>
				
			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 column-form">

				<form class="form" method="post">

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="text" id="nameGym">
					    <label class="mdl-textfield__label" for="nameGym" id="label-input-form-sign-up">Nombre gimnasio</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="text" id="name">
					    <label class="mdl-textfield__label" for="name" id="label-input-form-sign-up">Nombres</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="text" id="lastname">
					    <label class="mdl-textfield__label" for="lastname" id="label-input-form-sign-up">Apellidos</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="text" id="addres">
					    <label class="mdl-textfield__label" for="adrres" id="label-input-form-sign-up">Dirección </label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="tel" id="phone">
					    <label class="mdl-textfield__label" for="phone" id="label-input-form-sign-up">Telefono </label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up" >
					    <input class="mdl-textfield__input" type="email" id="email">
					    <label class="mdl-textfield__label" for="email" id="label-input-form-sign-up">Correo</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label div-input-form-sign-up">
					    <input class="mdl-textfield__input" type="password" id="password">
					    <label class="mdl-textfield__label" for="password" id="label-input-form-sign-up">Contraseña</label>
					</div>

					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary btn-submit-sign-up" type="submit">Registrar</button>

					<input type="hidden"  name="_token" id="token" value="{{csrf_token()}}">

				</form>

				<form  class="go-sign-in">

					<a href="/iniciar" class="mdl-button mdl-js-button mdl-js-ripple-effect btn-go-sign-in">
		  				Iniciar sesión
					</a>

					<input type="hidden"  name="_token" id="token" value="{{csrf_token()}}">

				</form>	

			</div>	

		</div>
		
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 space">
	
	</div>

@endsection

@section('js')
   
@endsection


	
	
