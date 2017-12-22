$(document).ready(function(){

	$("#content-links-dashboard").load("/crearUsuarios .content");

	$('.option-vertical-nav a').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });

	
	$(".nav-dashboard").on('click', '#link-create-users' , function(e){

		e.preventDefault();

		$("#content-links-dashboard").load("/crearUsuarios .content");

	});

	$(".nav-dashboard").on('click', '#link-list-users' , function(e){

		e.preventDefault();

		$("#content-links-dashboard").load("/listarUsuarios ");
		
	});

	$(".nav-dashboard").on('click', '#link-movements' , function(e){

		e.preventDefault();

		$("#content-links-dashboard").load("/movimientos");
		
	});

	$(".nav-dashboard").on('click', '#link-see-movements' , function(e){

		e.preventDefault();

		$("#content-links-dashboard").load("/verMovimientos");
		
	});

	$(".nav-dashboard").on('click', '#link-configurations' , function(e){

		e.preventDefault();

		$("#content-links-dashboard").load("/configuraciones");
		
	});

	

});