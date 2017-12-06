$(document).ready(function(){

	$("#login").on('click', function(){
		$("#content").load('/login');
	});

	$("#sign-up").on('click', function(){
		$("#content").load('/registrarse');
	});

});