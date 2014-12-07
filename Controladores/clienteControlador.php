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


	//fin get y set


	


}





 ?>