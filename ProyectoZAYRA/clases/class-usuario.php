<?php

    class Usuario{
        private $nombre;
        private $apellido;
        private $correo;
        private $contrasenia;

        public function __construct(
            $nombre,
            $apellido,
            $correo,
            $contrasenia
        ){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->correo = $correo;
            $this->contrasenia = $contrasenia;
        }

        public function getnombre(){
            return $this->nombre;
        }

        public function setnombre($nombre){
            $this->nombre = $nombre;
        }

        public function getapellido(){
            return $this->apellido;
        }

        public function setapellido($apellido){
            $this->apellido = $apellido;
        }

        public function getcorreo(){
            return $this->correo;
        }

        public function setcorreo($correo){
            $this->correo = $correo;
        }

        public function getcontrasenia(){
            return $this->contrasenia;
        }

        public function setcontrasenia($contrasenia){
            $this->contrasenia = $contrasenia;
        }

        public function __toString(){
            return json_encode($this->getData());
        }

        public function guardarUsuario($db){
            $usuarios = $this->getData();
            $result = $db->getReference('usuarios')
               ->push($usuarios);
               
            if ($result->getKey() != null)
                return '{"mensaje":"Registro almacenado","key":"'.$result->getKey().'"}';
            else 
                return '{"mensaje":"Error al guardar el registro"}';
        }
        //static sirve para llamar a un atributo o metodo de una clase sin instanciarla.
        public static function obtenerUsuarios($db){
            $result = $db->getReference('usuarios')
                ->getSnapshot()
                ->getValue();

            echo json_encode($result);
        }

        public static function obtenerUsuario($db, $id){
            $result = $db->getReference('usuarios')
                ->getChild($id)
                ->getValue();

            echo json_encode($result);
        }

        public static function eliminarUsuario($db, $id){
            $db->getReference('users')
                ->getChild($id)
                ->remove();
            echo '{"mensaje":"Se eliminó el elemento '.$id.'"}';
        }

        public function actualizarUsuario($db, $id){
            $result = $db->getReference('usuarios')
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
            $result['apellido'] = $this->apellido;
            $result['correo'] = $this->correo;
            $result['contrasenia'] = $this->contrasenia;
            return $result;
        }

    }

?>
