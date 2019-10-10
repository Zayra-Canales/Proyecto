


obtenerProductos( $("#idEmpresa").val() );
infoEmpresa( $("#idEmpresa").val() );








function obtenerProductos(idEmpresa) {
		
	var data = { idEmpresa: idEmpresa };

	$.ajax({

		url: 'ajax/Productos/index.php',
		method: 'GET',
		data: data,
		dataType: 'json', 
		success:function(res){
			//console.log(res);


		}

	});
}

function infoEmpresa(idEmpresa){

	var data = { id: idEmpresa };

	$.ajax({

		url: 'ajax/Empresa/index.php?id='+idEmpresa,
		method: 'GET',
		//data: data,
		//dataType: 'json', 
		success:function(res){
			console.log(res);


		}

	});

}