<?php 

class proveedorControlador extends controlador {
	function crear() {
		$this->vista->render("proveedor/crear");
	} 
	function listar() {
		$this->vista->render("proveedor/listar");
	}






















	//start get and set
	function getnombre(){
		return this->nombre;
	}
	function setnombre($id){
		this->nombre=$id;
	}


	function getcuit(){
		return this->cuit;
	}
	function setcuit($id){
		this->cuit=$id;

	}

	function getdomicilio(){
		return this->domicilio;
	}
	function setdomicilio($id){
		this->domicilio=$id;
	}


	function gettelefono(){
		return this->telefono;
	}
	function settelefono($id){
		this->telefono=$id;
	}

	function geteMail(){
		return this->eMail;
	}
	function seteMail($id){
		this->eMail=$id;
	}

	function getcontacto(){
		return this->contacto;
	}
	function setcontacto($id){
		this->contacto=$id;
	}
	//end get and set

} 


 ?>