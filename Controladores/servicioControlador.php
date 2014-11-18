<?php 
class servicioControlador extends controlador{
	function crear(){
		$this->vista->render("servicio/crear");
	}
	function listar(){
		$this->vista->render("servicio/listar");
	}
} 
 ?>