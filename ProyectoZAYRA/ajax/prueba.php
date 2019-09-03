<?php 


	$datos = array('usuario' => $_POST['usr'], 'contra' => $_POST['pass'], 'Accion' => $_GET['accion']  );

	echo json_encode($datos);













 ?>