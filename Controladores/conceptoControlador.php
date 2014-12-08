<?php 
class conceptoControlador extends controlador{
	private $descripcion;
	private $tipo;



	function crear(){
		$this->vista->render("concepto/crear");
	}
	function listar(){
		$this->vista->render("concepto/listar");
	}


















	//start get and set
	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}

	function gettipo(){
		return $this->tipo;
	}
	function settipo($tip){
		$this->tipo=$tip;
	}
	//end get and set
} 
 ?>