<?php 

class facturaCompraControlador extends Controlador{
	private $fecha;
	private $tipo;
	private $puntoDeVenta;
	private $numero;
	private $importe;

	function nueva(){
		$this->vista->render("facturaCompra/nueva");
	}




	//start get and set
	function getfecha(){
		return $this->fecha;
	}
	function setfecha($fech){
		$this->fecha=$fech;
	}

	function gettipo(){
		return $this->tipo;
	}
	function settipo($tipo){
		$this->tipo=$tipo;
	}

	function getpuntoDeVenta(){
		return $this->puntoDeVenta;
	}
	function setpuntoDeVenta($ptoVta){
		$this->puntoDeVenta=$ptoVta;
	}

	function getnumero(){
		return $this->numero;
	}
	function setnumero($num){
		$this->numero=$num;
	}

	function getimporte(){
		return $this->importe;
	}
	function setimporte($imp){
		$this->importe=$imp;
	}





}
















 ?>