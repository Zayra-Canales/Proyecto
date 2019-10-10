(()=>{

	obtenerUsuario( $("#idUsuario").val() );



})();


function obtenerUsuario(idUsuario) {

	var data = { id: idUsuario };

	$.ajax({

		url:'ajax/Usuario/',
		method:'GET',
		data: data,
		dataType:'json', 
		success:function(res){
			console.log(res);

			$("#nombre").val(res.nombre);
			$("#apellido").val(res.apellido);
			$("#contrasenia").val(res.contrasenia);
			$("#correo").val(res.correo);

		}


	});

}

