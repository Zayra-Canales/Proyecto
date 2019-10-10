<?php
    header('Content-Type: application/json'); 
    include_once('../../clases/class-usuario.php');
    include_once('../../clases/class-database.php');
    
    $database = new Database();

    
    if ($_SERVER['REQUEST_METHOD'] =='POST' && !isset($_GET["accion"]) ){

        $u = new Usuario(
                $_POST['nombre'],
                $_POST['apellido'],
                $_POST['correo'],
                $_POST['contrasenia']
            );
        
        echo $u->guardarUsuario($database->getDB());  
        exit();      
    }

   
    if ($_SERVER['REQUEST_METHOD']=='GET' && !isset($_GET['id']) && !isset($_GET["accion"])) { 

        Usuario::obtenerUsuarios($database->getDB());
        exit();
    }

   
    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['id'])){

        Usuario::obtenerUsuario($database->getDB(),$_GET['id']);
        exit();
    }

   
    if ($_SERVER['REQUEST_METHOD']=='DELETE' && isset($_GET['id'])){

        Usuario::eliminarUsuario($database->getDB(),$_GET['id']);
        exit();
    }

    
    if ($_SERVER['REQUEST_METHOD'] =='PUT' && isset($_GET['id'])){

        $_PUT=array();
        if ($_SERVER['REQUEST_METHOD'] == 'PUT')
            parse_str(file_get_contents("php://input"), $_PUT); 
    
        $u = new Usuario(
            $_PUT['nombre'],
            $_PUT['apellido'],
            $_PUT['correo'],
            $_PUT['contrasenia'],
            $_PUT['gender']
        );

        echo $u->actualizarUsuario($database->getDB(),$_GET['id']);
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_GET["accion"]) && $_GET["accion"]=="login") {

        echo Usuario::login($database->getDB(), $_POST["correo"], $_POST["contrasenia"]);
       
        exit();

    }

?>