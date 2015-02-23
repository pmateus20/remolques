<?php 
class conceptoControlador extends controlador{
	private $descripcion;
	private $tipo;



	function crear(){
		$this->vista->render("concepto/crear");
	}
	function listar(){
		$model=new conceptoModelo();
		$r=$model->listar();

		$this->vista->render("concepto/listar",$r);
	}


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setdescripcion($_POST["descripcion"]);
			if($_POST["subtipo"]=="S"){
				$tipo=$_POST["tipo"]."/".$_POST["subtipo"];
			}else{
				if($_POST["subtipo"]=="P"){
					$tipo=$_POST["tipo"]."/".$_POST["subtipo"]."/".$_POST["adicional1"];	
				}else{
					$tipo=$_POST["tipo"]."/".$_POST["subtipo"]."/".$_POST["adicional2"];
				}
			}
			$this->settipo($tipo);


			$r=array(
				"codConcepto"=>"null",
				"descripcion"=>$this->getdescripcion(),
				"tipo"=>$this->gettipo()
				);

			$model=new conceptoModelo();
			$model->nuevoConcepto($r);
			$this->vista->render("concepto/crear");
		}
	}


	function buscarConcepto($condi=null){
		$model=new conceptoModelo();
		return $model->buscarConcepto($condi);
		
	}

	function eliminar(){
		$id=$_GET["id"];

		$model=new conceptoModelo();
		$model->eliminarConcepto($id);

		$this->listar();

	}

	function editar(){
		$id=$_GET["id"];

		$model=new conceptoModelo();
		$r=$model->buscarConcepto("where codConcepto = $id");
		

		$this->vista->render("concepto/editar",$r[0]);

	}

	function guardarEdicion(){
		if(isset($_POST["Guardar"])){
			$this->setdescripcion($_POST["descripcion"]);
			$this->settipo($_POST["tipo"]);


			$r=array(
					"descripcion"=>$this->getdescripcion(),
					"tipo"=>$this->gettipo()
				);

			
			$model=new conceptoModelo();
			$model->guardarEdicion($r,$_POST["id"]);

			$this->listar();
		}
	}

	













	//start get and set
	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}

	function gettipo(){
		return $this->tipo;
	}
	function settipo($tip){
		$this->tipo=$tip;
	}
	//end get and set
} 
 ?>