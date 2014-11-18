<?php 
class conceptoControlador extends controlador{
	function crear(){
		$this->vista->render("concepto/crear");
	}
	function listar(){
		$this->vista->render("concepto/listar");
	}
} 
 ?>