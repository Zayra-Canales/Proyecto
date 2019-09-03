

$('#btn-agregarEmpresa').click(function () {

	var param = {
		nombre : $('#correoEmpresa').val(),
		direccion : $('#direccionEmpresa').val(),
		contra1 : $('#contraEmpresa').val(),
		contra2 : $('#contraEmpresa2').val(),
		pais : $('#paisEmpresa').val(),
	}

	console.log(param);
	
	$.ajax({

		url: 'ajax/gestion-empresa.php?accion=agregar',
		method: 'POST',
		data: param,
		//dataType: 'json', 
		success:function(res){
			console.log(res);

			


		}

	});




});