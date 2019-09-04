<?php

	class Empresa{

		private $nombre;
		private $pais;
		private $contrasenia;
		private $direccion;
		private $longitud;
		private $banner;
		private $logotivo;
		private $redesSociales;

		public function __construct($nombre,
					$pais,
					$direccion,
					$longitud,
					$banner,
					$logotivo,
					$redesSociales){
			$this->nombre = $nombre;
			$this->pais = $pais;
			$this->direccion = $direccion;
			$this->longitud = $longitud;
			$this->banner = $banner;
			$this->logotivo = $logotivo;
			$this->redesSociales = $redesSociales;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getLongitud(){
			return $this->longitud;
		}
		public function setLongitud($longitud){
			$this->longitud = $longitud;
		}
		public function getBanner(){
			return $this->banner;
		}
		public function setBanner($banner){
			$this->banner = $banner;
		}
		public function getLogotivo(){
			return $this->logotivo;
		}
		public function setLogotivo($logotivo){
			$this->logotivo = $logotivo;
		}
		public function getRedesSociales(){
			return $this->redesSociales;
		}
		public function setRedesSociales($redesSociales){
			$this->redesSociales = $redesSociales;
		}
		public function toString(){
			return "Nombre: " . $this->nombre . 
				" Pais: " . $this->pais . 
				" Contrasenia: " . $this->contrasenia .
				" Direccion: " . $this->direccion . 
				" Longitud: " . $this->longitud . 
				" Banner: " . $this->banner . 
				" Logotivo: " . $this->logotivo . 
				" RedesSociales: " . $this->redesSociales;
		}

		// METODOS

		public function agregar(){

			echo "metodo para guardarEmpresa";

		}

		public function login(){

			echo "metodo para logearse";

		}

		public function editar(){

			echo "metodo para editar una Empresa";


		}


	}
?>