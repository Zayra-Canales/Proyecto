

$("#btn-agregar").click(function () {
	// body...

	var parametros = {
		nombreUsuario : $("#nombreUsuario").val(),
		contrasenia : $("#contrasenia").val(),
		correo : $("#correo").val()
	};

	console.log(parametros);

	$.ajax({

		url: "ajax/gestion-empresa.php?accion=agregarEmpresa",
		method: "POST",
		dataType: "json",
		data: parametros,
		

		
	});


});