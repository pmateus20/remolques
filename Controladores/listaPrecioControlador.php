<?php 

class listaPrecioControlador extends Controlador{
	private $descripcion;


	function cargar(){
		$this->vista->render("listaPrecio/cargar");
	}





	// start get and set
	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}
	// end get and set

}







 ?>