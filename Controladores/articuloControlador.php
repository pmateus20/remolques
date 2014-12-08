<?php 
class articuloControlador extends controlador{
	private $descripcion;




	function crear(){
		$this->vista->render("articulo/crear");
	}
	function listar(){
		$this->vista->render("articulo/listar");
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