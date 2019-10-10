<?php
     header('Content-Type: application/json'); 
    include_once('../../clases/class-producto.php');
    include_once('../../clases/class-database.php');
   
    
    $database = new Database();

    
    if ($_SERVER['REQUEST_METHOD'] =='POST'){
        $p = new Producto(
                $_POST['nombre'],
                $_POST['precio'],
                $_POST['descripcion'],
                $_POST['descuento']
            );
        
        echo $p->guardarProducto($database->getDB(), $_POST['idEmpresa']);        
    }

   
    if ($_SERVER['REQUEST_METHOD']=='GET' && !isset($_GET['id'])){ //

        Producto::obtenerProductos($database->getDB(), $_GET['idEmpresa']);
    }

   
    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['id'])){

        Producto::obtenerProducto($database->getDB(),$_GET['id'], $_GET['idEmpresa']);
    }

   
    if ($_SERVER['REQUEST_METHOD']=='DELETE' && isset($_GET['id'])){

        Producto::eliminarProducto($database->getDB(),$_GET['id'], $_GET['idEmpresa']);
    }

    
    if ($_SERVER['REQUEST_METHOD'] =='PUT' && isset($_GET['id'])){
        $_PUT=array();
        if ($_SERVER['REQUEST_METHOD'] == 'PUT')
            parse_str(file_get_contents("php://input"), $_PUT); 
    
        $p = new producto(
            $_PUT['nombre'],
            $_PUT['precio'],
            $_PUT['descripcion'],
            $_PUT['descuento']
        );

        echo $p->actualizarProducto($database->getDB(),$_GET['id'], $_GET['idEmpresa']);
    }

?>