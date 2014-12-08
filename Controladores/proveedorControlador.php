<?php 

class proveedorControlador extends controlador {
	private $nombre;
	private $cuit;
	private $domicilio;
	private $telefono;
	private $eMail;
	private $contacto;


	function crear() {
		$this->vista->render("proveedor/crear");
	} 
	function listar() {
		$this->vista->render("proveedor/listar");
	}






















	//start get and set
	function getnombre(){
		return $this->nombre;
	}
	function setnombre($id){
		$this->nombre=$id;
	}


	function getcuit(){
		return $this->cuit;
	}
	function setcuit($cuit){
		$this->cuit=$cuit;

	}

	function getdomicilio(){
		return $this->domicilio;
	}
	function setdomicilio($dir){
		$this->domicilio=$dir;
	}


	function gettelefono(){
		return $this->telefono;
	}
	function settelefono($tel){
		$this->telefono=$tel;
	}

	function geteMail(){
		return $this->eMail;
	}
	function seteMail($mail){
		$this->eMail=$mail;
	}

	function getcontacto(){
		return $this->contacto;
	}
	function setcontacto($contac){
		$this->contacto=$contac;
	}
	//end get and set

} 


 ?>