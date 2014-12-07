<?php 
class servicioControlador extends controlador{
	function crear(){
		$this->vista->render("servicio/crear");
	}
	function listar(){
		$this->vista->render("servicio/listar");
	}

















	//start get and set
	function getdescripcion(){
		return this->descripcion;
	}
	function setdescripcion(){
		this->descripcion=$id;
	}
	//end get and set
} 
 ?>