<?php 
class empleadoControlador extends controlador{
	function crear(){
		$this->vista->render("empleado/crear");
	}
	function listar(){
		$this->vista->render("empleado/listar");
	}
} 
 ?>