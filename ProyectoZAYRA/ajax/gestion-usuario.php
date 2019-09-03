<?php 

	include_once '../clases/clase-usuario.php';

	switch ( $_GET['accion'] ) {
		case 'agregar':
			echo "opcion agregar";
			break;

		case 'eliminar':
			echo "opcion eliminar";
			break;

		case 'login':

			$res = Usuario::login($_POST['usr'], $_POST['pass']);
			$data = array("resultado" => $res);

			echo json_encode($data);

			break;
		
		default:
			# code...
			break;
	}

 ?>