<?php


class lineaFacturaCompraControlador extends controlador{
	private $cantidad;
	private $importe;
	private $servicio;
	private $facturaCompra;

	
	function buscarArticulo($id){
		require_once("Controladores/articuloControlador.php");
		$this->articulo=new articuloControlador();
		$c="where idArticulo not in (select FK_idArticulo from LineaFacturaCompra where FK_idFacturaCompra = $id)";

		return $this->articulo->buscarArticulo($c);
	}

	function listarLineas($id){
		$model=new lineaFacturaCompraModelo();
		return $model->listarLineaFacturaCompra($id);

	}

	function guardarLinea(){
		$model=new lineaFacturaCompraModelo();
		$datos=array(
				"cantidad"=>$this->getcantidad(),
				"importe"=>$this->getimporte(),
				"FK_idFacturaCompra"=>$this->getfacturaCompra(),
				"FK_idArticulo"=>$this->getarticulo()
			);
		$model->conectar();
		$model->setCampos($datos);
		$model->insertar("LineaFacturaCompra");

	}

	function eliminarLinea($id,$serv=null){
		$model=new lineaFacturaCompraModelo();
		if(isset($serv)){
			$model->eliminarLinea($id,$serv);	
		}else{
			$model->eliminarLinea($id);	
		}
		
	}

	

	function calcularTotal($id){
		$model=new lineaFacturaCompraModelo();
		return $model->calcularTotal($id);
	}

	function buscarArticuloId($id){
		require_once("Controladores/articuloControlador.php");
		$this->articulo=new articuloControlador();
		$c="where idArticulo = $id";
		$a=$this->articulo->buscarArticulo($c);
		return $a[0];
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

	function getarticulo(){
		return $this->articulo;
	}
	function setarticulo($articulo){
		$this->articulo=$articulo;
	}

	function getfacturaCompra(){
		return $this->facturaCompra;
	}
	function setfacturaCompra($facturaCompra){
		$this->facturaCompra=$facturaCompra;
	}
	//end get and set

}





?>	