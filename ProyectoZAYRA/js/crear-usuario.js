



$("#btn-agregar").click(function () {
	
	var parametros = {
		nombre : $("#nombre").val(),
		apellido: $("#apellido").val(),
		contrasenia : $("#contrasenia").val(),
		correo : $("#correo").val()
	};

	//console.log(parametros);

	$.ajax({

		url: "ajax/Usuario/index.php",
		method: "POST",
		dataType: "json",
		data: parametros,
		success:function(respuesta){

			console.log(respuesta);

			if (respuesta.key!=null) {
				
				window.location="user-perfil.html";

			} else {
				aletr("Error");
			}


			
		}
	});


});