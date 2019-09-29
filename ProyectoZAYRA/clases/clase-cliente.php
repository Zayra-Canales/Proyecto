<?php

	class Cliente{

		private $idCliente;
		private $nombreUsuario;
		private $contrasenia;
		private $correo;
		private $urlImg;

		public function __construct($idCliente,
					$nombreUsuario,
					$contrasenia,
					$correo,
					$urlImg){
			$this->idCliente = $idCliente;
			$this->nombreUsuario = $nombreUsuario;
			$this->contrasenia = $contrasenia;
			$this->correo = $correo;
			$this->urlImg = $urlImg;
		}
		public function getIdCliente(){
			return $this->idCliente;
		}
		public function setIdCliente($idCliente){
			$this->idCliente = $idCliente;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getContrasenia(){
			return $this->contrasenia;
		}
		public function setContrasenia($contrasenia){
			$this->contrasenia = $contrasenia;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getUrlImg(){
			return $this->urlImg;
		}
		public function setUrlImg($urlImg){
			$this->urlImg = $urlImg;
		}
		public function toString(){
			return "IdCliente: " . $this->idCliente . 
				" NombreUsuario: " . $this->nombreUsuario . 
				" Contrasenia: " . $this->contrasenia . 
				" Correo: " . $this->correo . 
				" UrlImg: " . $this->urlImg;
		}
 

 		public function agregar(){


          

 			return 1;
 		}

 		public function editar (){
         echo "metod para editar";



 			
 		}

 		public static function remove($id){


         return 1;
 			
 		}















	}
?>