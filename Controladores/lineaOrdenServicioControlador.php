<?php
class lineaOrdenServicioControlador extends controlador{
	private $cantidad;
	private $importe;
	private $servicio;
	private $ordenServicio;

	

	function buscarServicio($id){
		require_once("Controladores/servicioControlador.php");
		$this->servicio=new servicioControlador();
		$c="where idServicio not in (select FK_idServicio from LineaOrdenServicio where FK_idOrdenServicio = $id)";

		return $this->servicio->buscarServicio($c);
	}

	function listarLineas($id){
		$model=new lineaOrdenServicioModelo();
		return $model->listarLineaOrdenServicio($id);

	}

	function guardarLinea(){
		$model=new lineaOrdenServicioModelo();
		$datos=array(
				"cantidad"=>$this->getcantidad(),
				"importe"=>$this->getimporte(),
				"FK_idOrdenServicio"=>$this->getordenServicio(),
				"FK_idServicio"=>$this->getservicio()
			);
		$model->conectar();
		$model->setCampos($datos);
		$model->insertar("LineaOrdenServicio");

	}

	function eliminarLinea($id,$serv=null){
		$model=new lineaOrdenServicioModelo();
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
		$model=new lineaOrdenServicioModelo();
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

	function getordenServicio(){
		return $this->ordenServicio;
	}
	function setordenServicio($ordenServicio){
		$this->ordenServicio=$ordenServicio;
	}
	//end get and set

}





?>	