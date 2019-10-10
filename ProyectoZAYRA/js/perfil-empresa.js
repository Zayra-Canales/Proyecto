(()=>{

	obtenerProductos( $("#idEmpresa").val() );

	infoEmpresa( $("#idEmpresa").val() );


})();




function obtenerProductos(idEmpresa) {

	var data = { idEmpresa: idEmpresa };

	$.ajax({

		url: 'ajax/Productos/',
		method: 'GET',
		data: data,
		dataType: 'json', 
		success:function(res){
			console.log(res);

			for (let llave in res) {
				
				$("#tablaProductos").append(`
					<tr id="${llave}" >
					<th scope="row"></th>
					<td>${res[llave].nombre}</td>
					<td>${res[llave].precio}</td>
					<td>${res[llave].descripcion}</td>
					<td>
					<button class="btn btn-danger btn-sm" onclick="eliminar('${llave}')" type="button"><i class="fas fa-trash-alt"></i></button>
					<button class="btn btn-primary btn-sm" onclick="informacion('${llave}')" type="button"><i class="fas fa-edit"></i></button>
					</td>	
					</tr>`);	
			}

		}


	});
}

function infoEmpresa(idEmpresa){

	var data = { id: idEmpresa };

	$.ajax({

		url: 'ajax/Empresa/',
		method: 'GET',
		data: data,
		dataType: 'json', 
		success:function(res){
			//console.log(res);

			$("#nombre").val(res.nombre);
			$("#direccion").val(res.direccion);
			$("#contrasenia").val(res.contrasenia);
			$("#pais").val(res.pais);
			$("#correo").val(res.correo);

		}

	});

}

function informacion(idProducto){

	var data = { id: idProducto, idEmpresa: $("#idEmpresa").val()  };

	$.ajax({

		url: 'ajax/Productos/',
		method: 'GET',
		data: data,
		dataType: 'json', 
		success:function(res){
			//console.log(res);

			$("#nombreProducto").val(res.nombre);
			$("#precioPoducto").val(res.precio);
			$("#descripcion").val(res.descripcion);
			$("#descuento").val(res.descuento);
			$("#idProducto").val(idProducto);


		}

	});

}

function eliminar(id){

	var idEmpresa=$("#idEmpresa").val();

	$.ajax({

		url:`ajax/Productos/?idEmpresa=${idEmpresa}&id=${id}`,
		method:'DELETE',
		dataType:'json', 
		success:function(res){
			//console.log(res);
			$("#"+id).remove();
        	alert(res.mensaje);



		}


	});
}


function editarEmpresa() {

	var param = {
		nombre : $('#nombre').val(),
		direccion : $('#direccion').val(),
		contrasenia : $('#contrasenia').val(),
		contra2 : $('#correo').val(),
		pais : $('#pais').val(),
	}

	$.ajax({

		url: 'ajax/Empresa/index.php?idEmpresa='+idEmpresa,
		method: 'PUT',
		dataType: 'json', 
		success:function(res){
			//console.log(res);


		}


	});
}

function agregarProducto() {

	var param = {
		nombre : $('#nombreProducto').val(),
		precio : $('#precioPoducto').val(),
		descripcion : $('#descripcion').val(),
		descuento : $('#descuento').val(),
		idEmpresa: $('#idEmpresa').val()
	};

	$.ajax({
		url:'ajax/Productos/',
		method:'POST',
        data:param,//La informacion que se envia al servidor, URLEncoded
        dataType:'json',
        success:function(res){
        	//console.log(res);

        	if (res.key!=null) {

        		alert(res.mensaje);

				$("#tablaProductos").append(`
					<tr id="${res.key}" >
					<th scope="row"></th>
					<td>${param.nombre}</td>
					<td>${param.precio}</td>
					<td>${param.descripcion}</td>
					<td>
					<button class="btn btn-danger btn-sm" onclick="eliminar('${res.key}')" type="button"><i class="fas fa-trash-alt"></i></button>
					<button class="btn btn-primary btn-sm" onclick="informacion('${res.key}')" type="button"><i class="fas fa-edit"></i></button>
					</td>	
					</tr>`);
				limpiar();
			} else {
				console.log("No se guardo");
			}


        	
        },
        error:function(error){
        	console.error(error);
        }
    });
}



function actualizarProducto(){

	var param = {
		nombre : $('#nombreProducto').val(),
		precio : $('#precioPoducto').val(),
		descripcion : $('#descripcion').val(),
		descuento : $('#descuento').val(),
	};

	console.log(param);

	id = $('#idProducto').val()
	idEmpresa = $('#idEmpresa').val()

	$.ajax({
		url:`ajax/Productos/index.php?id=${id}&idEmpresa=${idEmpresa}`,
		method:'PUT',
		data:param,
		dataType:'json', 
		success:function(res){
			console.log(res);

			if (res.key!=null) {

        		alert(res.mensaje);


				$("#"+id).html(`
					<th scope="row"></th>
					<td>${param.nombre}</td>
					<td>${param.precio}</td>
					<td>${param.descripcion}</td>
					<td>
					<button class="btn btn-danger btn-sm" onclick="informacion('${res.key}')" type="button"><i class="fas fa-trash-alt"></i></button>
					<button class="btn btn-primary btn-sm" onclick="editar('${res.key}')" type="button"><i class="fas fa-edit"></i></button>
					</td>`);
					limpiar();

			} else {
				console.log("No se guardo");
			}

		}

	});

}

function limpiar(){
	nombre : $('#nombreProducto').val(" ");
	precio : $('#precioPoducto').val(" ");
	descripcion : $('#descripcion').val(" ");
	descuento : $('#descuento').val(" ");
	
}









