<?php 

class clienteControlador extends controlador{
	private $idCliente;
	private $apellidoNombre;


	function crear(){
		$this->vista->render("cliente/crear");
	}
	function listar(){
		$this->vista->render("cliente/listar");
	}
















	//get y set
	function getapellidoNombre(){
		return $this->apellidoNombre;
	}

	function setapellidoNombre($id){
		$this->apellidoNombre=$id;
	}

	function getcuit(){
		return this->cuit;
	}
	function setcuit(){
		this->cuit=$id;
	}

	function getdomicilio(){
		return this->domicilio;
	}
	function setdomicilio(){
		this->domicilio=$id;
	}

	function gettelefono(){
		return this->telefono;
	}
	function settelefono(){
		this->telefono=$id;
	}

	function geteMail(){
		return this->eMail;
	}
	function seteMail(){
		this->eMail=$id;
	}

	function getcontacto(){
		return this->contacto;
	}
	function setcontacto(){
		this->contacto=$id;
	}
	//fin get y set


	


}





 ?>