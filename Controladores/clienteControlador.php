<?php 

class clienteControlador extends controlador{
	function crear(){
		$this->vista->render("cliente/crear");
	}
	function listar(){
		$this->vista->render("cliente/listar");
	}

}





 ?>