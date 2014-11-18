<?php 
class articuloControlador extends controlador{
	function crear(){
		$this->vista->render("articulo/crear");
	}
	function listar(){
		$this->vista->render("articulo/listar");
	}
} 
 ?>