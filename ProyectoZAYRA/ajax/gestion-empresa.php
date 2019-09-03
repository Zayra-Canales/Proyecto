<?php 
	include_once '../clases/clase-empresa.php';


switch ($_GET['accion']) {
	case 'agregar':

		$empresa=new Empresa($_POST['nombre'], $_POST['pais'], $_POST['direccion'],' ',' ', ' ', ' ');
		echo $empresa->toString();
		$empresa->agregar();
		
		break;
	
	default:
		# code...
		break;
}





















 ?>