<?php 

class clienteControlador extends controlador{

	private $apellidoNombre; //falta crear todos las variables de las clases ejemplo private $cuit;


	function crear(){
		$this->vista->render("cliente/crear");
	}
	function listar(){
		$this->vista->render("cliente/listar");
	}
















	//get y set
	function getapellidoNombre(){
		return $this->apellidoNombre; // this correjido como $this->
	}

	function setapellidoNombre($id){
		$this->apellidoNombre=$id;
	}

	function getcuit(){ 
		return $this->cuit;
	}
	function setcuit(){  //faltan pones la variable temporal en el parentesis ejemplo ($cuit)
		$this->cuit=$id;	// y modificar los nombres ejemplo =$cuit
	}

	function getdomicilio(){
		return $this->domicilio;
	}
	function setdomicilio(){
		$this->domicilio=$id;
	}

	function gettelefono(){
		$return this->telefono;
	}
	function settelefono(){
		$this->telefono=$id;
	}

	function geteMail(){
		return $this->eMail;
	}
	function seteMail(){
		$this->eMail=$id;
	}

	function getcontacto(){
		return $this->contacto;
	}
	function setcontacto(){
		$this->contacto=$id;
	}
	//fin get y set


	


}





 ?>