

$('#btn-login').click(function () {
	//console.log("boton");

	var usuario = $('#nombreUsuario').val();
	var contra = $('#contraUsuario').val();

	console.log(contra + usuario);

	var param = {correo: usuario, contrasenia: contra};

	$.ajax({
		url:'ajax/Usuario/index.php?accion=login',
		method:'POST',
		data:param,
		dataType:'json', 
		success:function(res){
			console.log(res);

		}
	});


});