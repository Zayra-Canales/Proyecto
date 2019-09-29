<?php 
	include_once '../clases/clase-empresa.php';
    
    switch ($_GET["accion"]) {
    	case 'agregarEmpresa':
    		$empresa=new Empresa(NULL,$_POST["nombreEmpresa"],
    			                      $_POST["pais"],
                                      $_POST["contrasenia"],
                                      $_POST["direccion"],
                                      $_POST["longitud"],
                                      NULL,
                                      NULL,
                                      $_POST["redesSociales"]

    			                  );
    		$empresa->agregar();
    		
    		break;
    	
    	default:

    		break;
    }










 ?>