<?php 


class reciboSueldoControlador extends Controlador{
	private $fecha;
	private $importe;

	function nuevo(){
		$this->vista->render("reciboSueldo/nuevo");
	}











	//start get and set
	function getfecha(){
		return $this->fecha;
	}
	function setfecha($fech){
		$this->fecha=$fech;
	}

	function getimporte(){
		return $this->importe;
	}
	function setimporte($imp){
		$this->importe=$imp;
	}


}










 ?>