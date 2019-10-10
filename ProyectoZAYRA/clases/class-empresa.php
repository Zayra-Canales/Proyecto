<?php

    class Empresa{
        private $nombre;
        private $direccion;
        private $contrasenia;
        private $pais;
        private $correo;
        private $logo;

        public function __construct(
            $nombre,
            $direccion,
            $contrasenia,
            $pais,
            $correo,
            $logo
        ){
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->contrasenia = $contrasenia;
            $this->pais = $pais;
            $this->correo = $correo;
            $this->logo = $logo;

        }

        public function getnombre(){
            return $this->nombre;
        }

        public function setnombre($nombre){
            $this->nombre = $nombre;
        }

        public function getdireccion(){
            return $this->direccion;
        }

        public function setdireccion($direccion){
            $this->direccion = $direccion;
        }

        public function getcontrasenia(){
            return $this->contrasenia;
        }

        public function setcontrasenia($contrasenia){
            $this->contrasenia = $contrasenia;
        }

        public function getlogo(){
            return $this->logo;
        }

        public function setlogo($logo){
            $this->logo = $logo;
        }

        public function __toString(){
            return json_encode($this->getData());
        }

        public function crearEmpresa($db){
            $usuarios = $this->getData();
            $result = $db->getReference('empresa')
               ->push($usuarios);
               
            if ($result->getKey() != null)
                return '{"mensaje":"Registro almacenado","key":"'.$result->getKey().'"}';
            else 
                return '{"mensaje":"Error al guardar el registro"}';
        }
        //static sirve para llamar a un atributo o metodo de una clase sin instanciarla.
        public static function obtenerEmpresas($db){
            $result = $db->getReference('empresa')
                ->getSnapshot()
                ->getValue();

            echo json_encode($result);
        }

        public static function obtenerEmpresa($db, $id){
            $result = $db->getReference('empresa')
                ->getChild($id)
                ->getValue();

            echo json_encode($result);
        }

        public static function eliminarEmpresa($db, $id){
            $db->getReference('empresa')
                ->getChild($id)
                ->remove();
            echo '{"mensaje":"Se eliminó el elemento '.$id.'"}';
        }

        public function actualizarEmpresa($db, $id){
            $result = $db->getReference('empresa')
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
            $result['direccion'] = $this->direccion;
            $result['contrasenia'] = $this->contrasenia;
            $result['pais'] = $this->pais;
            $result['correo'] = $this->correo;
            $result['logo'] = $this->logo;

            return $result;
        }

    }

?>
