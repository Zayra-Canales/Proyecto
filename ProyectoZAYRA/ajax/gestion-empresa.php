<?php 
	include_once '../clases/clase-empresa.php';
    
    switch ($_GET["accion"]) {
    	case 'agregarEmpresa':
    		$empresa=new Empresa(null,$_POST["nombreEmpresa"],
    			                      $_POST["pais"],
                                      $_POST["contrasenia"],
                                      $_POST["direccion"],
                                      $_POST["longitud"],
                                      null,
                                      null,
                                      $_POST["redesSociales"]

    			                  );
    		$res = $empresa->agregar();

        $respuesta = array('resultado' => $res );

      echo json_encode($respuesta);
    		
    		break;
    	
    	default:

    		break;
    }










 ?>