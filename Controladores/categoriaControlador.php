<?php 
class categoriaControlador extends controlador{
	private $descripcion;
	private $salario;




	function crear(){
		$this->vista->render("categoria/crear");
	}
	function listar(){
		$this->vista->render("categoria/listar");
	}

















	//start get and set
	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}

	function getsalario(){
		return $this->salario;
	}
	function setsalario($sal){
		$this->salario=$sal;
	}
	//end get and set
} 
 ?>