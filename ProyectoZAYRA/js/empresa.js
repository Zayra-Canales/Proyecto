

$('#btn-agregarEmpresa').click(function () {

	var param = {
		nombre : $('#correoEmpresa').val(),
		direccion : $('#direccionEmpresa').val(),
		contrasenia : $('#contraEmpresa').val(),
		contra2 : $('#contraEmpresa2').val(),
		pais : $('#paisEmpresa').val(),
	}

	//console.log(param);
	
	$.ajax({

		url: 'ajax/Empresa/index.php',
		method: 'POST',
		data: param,
		dataType: 'json', 
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