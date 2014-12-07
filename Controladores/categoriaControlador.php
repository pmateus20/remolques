<?php 
class categoriaControlador extends controlador{
	function crear(){
		$this->vista->render("categoria/crear");
	}
	function listar(){
		$this->vista->render("categoria/listar");
	}

















	//start get and set
	function getdescripcion(){
		return this->descripcion;
	}
	function setdescripcion(){
		this->descripcion=$id;
	}

	function getsalario(){
		return this->salario;
	}
	function setsalario(){
		this->salario=$id;
	}
	//end get and set
} 
 ?>