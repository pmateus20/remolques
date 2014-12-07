<?php 


class reciboSueldoControlador extends Controlador{

	function nuevo(){
		$this->vista->render("reciboSueldo/nuevo");
	}



	//start get and set
	function getfecha(){
		return this->fecha;
	}
	function setfecha($id){
		this->fecha=$id;
	}

	function getimporte(){
		return this->importe;
	}
	function setimporte($id){
		this->importe=$id;
	}


}










 ?>