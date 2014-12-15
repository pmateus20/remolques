<?php

class lineaFacturaControlador extends controlador{
	private $cantidad;
	private $importe;
	private $servicio;
	private $factura;

	function buscarServicio($id){
		require_once("Controladores/servicioControlador.php");
		$this->servicio=new servicioControlador();
		$c="where idServicio not in (select FK_idServicio from LineaFactura where FK_idFactura = $id)";

		return $this->servicio->buscarServicio($c);
	}

	function listarLineas($id){
		$model=new lineaFacturaModelo();
		return $model->listarLineaFactura($id);

	}

	function guardarLinea(){
		$model=new lineaFacturaModelo();
		$datos=array(
				"cantidad"=>$this->getcantidad(),
				"importe"=>$this->getimporte(),
				"FK_idFactura"=>$this->getfactura(),
				"FK_idServicio"=>$this->getservicio()
			);
		$model->conectar();
		$model->setCampos($datos);
		$model->insertar("LineaFactura");

	}

	function eliminarLinea($id,$serv=null){
		$model=new lineaFacturaModelo();
		if(isset($serv)){
			$model->eliminarLinea($id,$serv);	
		}else{
			$model->eliminarLinea($id);	
		}
		
	}

	function buscarServicioValorizado($id,$lp){
		require_once("Controladores/servicioControlador.php");
		$this->servicio=new servicioControlador();
		
		return $this->servicio->buscarServicioValorizado($id,$lp);
	}

	function calcularTotal($id){
		$model=new lineaFacturaModelo();
		return $model->calcularTotal($id);
	}


	

















	// start get and set
	function getcantidad(){
		return $this->cantidad;
	}
	function setcantidad($cnt){
		$this->cantidad=$cnt;
	}

	function getimporte(){
		return $this->importe;
	}
	function setimporte($imp){
		$this->importe=$imp;
	}

	function getservicio(){
		return $this->servicio;
	}
	function setservicio($servicio){
		$this->servicio=$servicio;
	}

	function getfactura(){
		return $this->factura;
	}
	function setfactura($factura){
		$this->factura=$factura;
	}
	//end get and set

}





?>	
