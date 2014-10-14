<?php 

class proveedorControlador extends controlador {
	function crear() {
		$this->vista->render("proveedor/crear");
	} 
	function listar() {
		$this->vista->render("proveedor/listar");
	}

} 


 ?>