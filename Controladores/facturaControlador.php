<?php 


class facturaControlador extends controlador{
	private $numero;
	private $tipo;
	private $fecha;
	private $puntoVenta;
	private $importe;

	function nueva(){
		$this->vista->render("factura/nueva");
	}

	function facturarOrdenes(){
		if(!isset($_POST["Facturar"])){
			$this->vista->render("factura/facturarOrdenes");
		}else{
			$this->vista->render("factura/nueva");		
		}
























	//start get and set
	function getnumero(){
		return $this->numero;
	}
	function setnumero($nro){
		$this->numero=$nro;
	}

	function gettipo(){
		return $this->tipo;
	}
	function settipo($tipo){
		$this->tipo=$tipo;
	}

	function getfecha(){
		return $this->fecha;
	}
	function setfecha($fech){
		$this->fecha=$fech;
	}

	function getpuntoVenta(){
		return $this->puntoVenta;
	}
	function setpuntoVenta($ptoVta){
		$this->puntoVenta=$ptoVta;
	}

	function getimporte(){
		return $this->importe;
	}
	function setimporte($imp){
		$this->importe=$imp;
	}
	//end get and set

	}
}











 ?>