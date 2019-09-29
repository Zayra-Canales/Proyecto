<?php 

	include_once '../clases/clase-cliente.php';

	switch ($_GET["accion"]) {
		case 'add':
			$cliente = new Cliente( 1, 
									$_POST["nombreUsuario"], 
									$_POST["contrasenia"], 
									$_POST["correo"],
									null);
			
			$res = $cliente->agregar();

			$respuesta = array('resultado' => $res );

			echo json_encode($respuesta);


		break;

		case 'edite':

			$cliente = new Cliente($_POST["idPersona"], $_POST["nombreUsuario"], $_POST["contrasenia"], $_POST["correo"],null);
			$res = $cliente->editar();

			$respuesta = array('resultado' => $res );

			echo json_encode($respuesta);
		
		break;

		case 'remove':

			$res = Cliente::remove($_POST["idPersona"]);
			$respuesta = array('resultado' => $res );

			echo json_encode($respuesta);
			
		break;
		
		default:
			# code...
			break;
	}

 ?>