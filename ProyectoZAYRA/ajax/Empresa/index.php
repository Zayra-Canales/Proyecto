<?php
    header('Content-Type: application/json'); 
    include_once('../../clases/class-empresa.php');
    include_once('../../clases/class-database.php');
   
    
    $database = new Database();

    
    if ($_SERVER['REQUEST_METHOD'] =='POST'){
        $e = new Empresa(
                $_POST['nombre'],
                $_POST['direccion'],
                $_POST['contrasenia'],
                $_POST['pais'],
                'perfil.png'
            );
        
        echo $e->crearEmpresa($database->getDB());        
    }

   
    if ($_SERVER['REQUEST_METHOD']=='GET' && !isset($_GET['id'])){ //
        Empresa::obtenerEmpresas($database->getDB());
    }

   
    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['id'])){
        Empresa::obtenerEmpresa($database->getDB(),$_GET['id']);
    }

   
    if ($_SERVER['REQUEST_METHOD']=='DELETE' && isset($_GET['id'])){
        Empresa::eliminarEmpresa($database->getDB(),$_GET['id']);
    }

    
    if ($_SERVER['REQUEST_METHOD'] =='PUT' && isset($_GET['id'])){
        $_PUT=array();
        if ($_SERVER['REQUEST_METHOD'] == 'PUT')
            parse_str(file_get_contents("php://input"), $_PUT); 
    
        $e = new Empresa(
            $_PUT['nombre'],
            $_PUT['direccion'],
            $_PUT['contrasenia'],
            $_PUT['pais'],
            $_PUT['logo']

        );

        echo $e->actualizarEmpresa($database->getDB(),$_GET['id']);
    }

?>