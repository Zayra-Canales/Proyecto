

$('#btn-agregarEmpresa').click(function () {

	var param = {
		nombre : $('#nombre').val(),
		direccion : $('#direccion').val(),
		correo : $('#correo').val(),
		contrasenia : $('#contrasenia').val(),
		pais : $('#pais').val(),
	}

	//console.log(param);
	
	$.ajax({

		url:'ajax/Empresa/index.php',
		method:'POST',
		data:param,
		dataType:'json', 
		success:function(res){
			console.log(res);

			if (res.key!=null) {
				
				window.location="perfil-empresa.php?id="+res.key;

			} else {
				aletr("Error");
			}


		}

	});




});