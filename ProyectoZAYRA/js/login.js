

$('#btn-login').click(function () {
	//console.log("boton");

	var usuario = $('#nombreUsuario').val();
	var contra = $('#contraUsuario').val();

	//console.log(contra + usuario);

	var param = {usr: usuario, pass: contra};

	$.ajax({
		url: 'ajax/gestion-usuario.php?accion=login',
		method: 'POST',
		data: param,
		dataType: 'json', 
		success:function(res){
			console.log(res);

			if (res.resultado==1) {
				window.location="main.html"
			} else {
				alert("usuario incorrecto");
			}


		}
	});


});