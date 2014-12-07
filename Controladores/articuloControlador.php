<?php 
class articuloControlador extends controlador{
	function crear(){
		$this->vista->render("articulo/crear");
	}
	function listar(){
		$this->vista->render("articulo/listar");
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