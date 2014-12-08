<?php 

class clienteControlador extends controlador{

	private $apellidoNombre; //falta crear todos las variables de las clases ejemplo private $cuit;
	private $cuit;
	private $domicilio;
	private $telefono;
	private $eMail;
	private $contacto;

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
	function setcuit($cuit){  //faltan pones la variable temporal en el parentesis ejemplo ($cuit)
		$this->cuit=$cuit;	// y modificar los nombres ejemplo =$cuit
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
	//fin get y set


	


}





 ?>