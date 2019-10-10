<?php

    class Producto{
        private $nombre;
        private $precio;
        private $descripcion;
        private $descuento;

        public function __construct(
            $nombre,
            $precio,
            $descripcion,
            $descuento
        ){
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->descripcion = $descripcion;
            $this->descuento = $descuento;
        }

        public function getnombre(){
            return $this->nombre;
        }

        public function setnombre($nombre){
            $this->nombre = $nombre;
        }

        public function getprecio(){
            return $this->precio;
        }

        public function setprecio($precio){
            $this->precio = $precio;
        }

        public function getdescripcion(){
            return $this->descripcion;
        }

        public function setdescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function getdescuento(){
            return $this->descuento;
        }

        public function setdescuento($descuento){
            $this->descuento = $descuento;
        }

        public function __toString(){
            return json_encode($this->getData());
        }

        public function guardarProducto($db, $empresa){
            $productos = $this->getData();
            $colexion = 
            $result = $db->getReference('empresa/'.$empresa.'/producto')
               ->push($productos);
               
            if ($result->getKey() != null)
                return '{"mensaje":"Registro almacenado","key":"'.$result->getKey().'"}';
            else 
                return '{"mensaje":"Error al guardar el registro"}';
        }

 
        public static function obtenerProductos($db, $empresa){
            $result = $db->getReference('empresa/'.$empresa.'/producto')
                ->getSnapshot()
                ->getValue();

            echo json_encode($result);
        }

        public static function obtenerProducto($db, $id, $empresa){
            $result = $db->getReference('empresa/'.$empresa.'/producto')
                ->getChild($id)
                ->getValue();

            echo json_encode($result);
        }

        public static function eliminarProducto($db, $id, $empresa){
            $db->getReference('emprea/'.$empresa.'/producto')
                ->getChild($id)
                ->remove();
            echo '{"mensaje":"Se eliminó el elemento '.$id.'"}';
        }

        public function actualizarUsuario($db, $id, $empresa){
            $result = $db->getReference('emprea/'.$empresa.'/producto')
                ->getChild($id)
                ->set($this->getData());
            
            if ($result->getKey() != null)
                return '{"mensaje":"Registro actualizado","key":"'.$result->getKey().'"}';
            else 
                return '{"mensaje":"Error al actualizar el registro"}';
        }

        //Retornar un arreglo asociativo con todos los atributos de la clase
        public function getData(){
            $result['nombre'] = $this->nombre;
            $result['precio'] = $this->precio;
            $result['descripcion'] = $this->descripcion;
            $result['descuento'] = $this->descuento;
            return $result;
        }

    }

?>
