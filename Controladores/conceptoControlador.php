<?php 
class conceptoControlador extends controlador{
	function crear(){
		$this->vista->render("concepto/crear");
	}
	function listar(){
		$this->vista->render("concepto/listar");
	}


















	//start get and set
	function getdescripcion(){
		return this->descripcion;
	}
	function setdescripcion(){
		this->descripcion=$id;
	}

	function gettipo(){
		return this->tipo;
	}
	function settipo(){
		this->tipo=$id;
	}
	//end get and set
} 
 ?>