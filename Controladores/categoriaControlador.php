<?php 
class categoriaControlador extends controlador{
	function crear(){
		$this->vista->render("categoria/crear");
	}
	function listar(){
		$this->vista->render("categoria/listar");
	}
} 
 ?>