<?php 
class servicioControlador extends controlador{
	private $descripcion;



	function crear(){
		$this->vista->render("servicio/crear");
	}
	function listar(){
		$this->vista->render("servicio/listar");
	}

















	//start get and set
	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}
	//end get and set
} 
 ?>