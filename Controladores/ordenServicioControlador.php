<?php 	

class ordenServicioControlador extends controlador {
	private $numeroServExterno;
	private $fecha;
	private $titular;
	private $dominio;
	private $descripcion;


	function nueva(){
		$this->vista->render("ordenServicio/nueva");

	}






	//start get and set
	function getnumeroServExterno(){
		return $this->numeroServExterno;
	}
	function setnumeroServExterno($nse){
		$this->numeroServExterno=$nse;
	}

	function getfecha(){
		return $this->fecha;
	}
	function setfecha($fech){
		$this->fecha=$fech;
	}

	function gettitular(){
		return $this->titular;
	}
	function settitular($tit){
		$this->titular=$tit;
	}

	function getdominio(){
		return $this->dominio;
	}
	function setdominio($dom){
		$this->dominio=$dom;
	}

	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}

	}




}



















 ?>