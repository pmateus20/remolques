<?php
class detalleReciboSueldoControlador extends controlador{
	private $importe;
	private $concepto;
	private $reciboSueldo;


	function buscarConcepto($id){
		require_once("Controladores/conceptoControlador.php");
		$this->concepto=new conceptoControlador();
		$c="where codConcepto not in (select FK_codConcepto from detalleReciboSueldo where FK_numeroReciboSueldo = $id)";

		return $this->concepto->buscarConcepto($c);
	}

	function listarLineas($id){
		$model=new detalleReciboSueldoModelo();
		return $model->listardetalleReciboSueldo($id);

	}

	function guardarLinea(){
		$model=new detalleReciboSueldoModelo();
		$datos=array(
				"importe"=>$this->getimporte(),
				"FK_numeroReciboSueldo"=>$this->getReciboSueldo(),
				"FK_codConcepto"=>$this->getConcepto()
			);
		$model->conectar();
		$model->setCampos($datos);
		$model->insertar("detalleReciboSueldo");

	}

	function eliminarLinea($id,$serv=null){
		$model=new detalleReciboSueldoModelo();
		if(isset($serv)){
			$model->eliminarLinea($id,$serv);	
		}else{
			$model->eliminarLinea($id);	
		}
		
	}

	

	function calcularTotal($id){
		$model=new detalleReciboSueldoModelo();
		return $model->calcularTotal($id);
	}

	function buscarconceptoId($id){
		require_once("Controladores/conceptoControlador.php");
		$this->concepto=new conceptoControlador();
		$c="where codConcepto = $id";
		$a=$this->concepto->buscarConcepto($c);
		return $a[0];
	}

	






















	// start get and set
	function getimporte(){
		return $this->importe;
	}
	function setimporte($imp){
		$this->importe=$imp;
	}
	function getconcepto(){
		return $this->concepto;
	}
	function setconcepto($concepto){
		$this->concepto=$concepto;
	}

	function getreciboSueldo(){
		return $this->reciboSueldo;
	}
	function setreciboSueldo($reciboSueldo){
		$this->reciboSueldo=$reciboSueldo;
	}
	//end get and set

}





?>	