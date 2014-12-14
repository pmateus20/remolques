<?php 
class servicioControlador extends controlador{
	private $descripcion;



	function crear(){
		$this->vista->render("servicio/crear");
	}
	function listar(){
		$model=new servicioModelo();
		$r=$model->listar();

		$this->vista->render("servicio/listar",$r);
	}


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setdescripcion($_POST["descripcion"]);


			$r=array(
				"idServicio"=>"null",
				"descripcion"=>$this->getdescripcion()
				);

			$model=new servicioModelo();
			$model->nuevoServicio($r);
			$this->vista->render("servicio/resultado");
		}
	}


	function buscarServicio($condi=null){
		$model=new servicioModelo();
		return $model->buscarServicio($condi);
		
	}

	function eliminar(){
		$id=$_GET["id"];

		$model=new servicioModelo();
		$model->eliminarServicio($id);

		$this->listar();

	}

	function editar(){
		$id=$_GET["id"];

		$model=new servicioModelo();
		$r=$model->buscarServicio("where idServicio = $id");
		

		$this->vista->render("servicio/editar",$r[0]);

	}

	function guardarEdicion(){
		if(isset($_POST["Guardar"])){
			$this->setdescripcion($_POST["descripcion"]);


			$r=array(
					"descripcion"=>$this->getdescripcion()
				);

			
			$model=new servicioModelo();
			$model->guardarEdicion($r,$_POST["id"]);

			$this->listar();
		}
	}

	function buscarServicioValorizado($id,$lp){
		$model=new servicioModelo();
		return $model->buscarServicioValorizado($id,$lp);
		
	}









	//start get and set
	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}
	//end get and set
} 
 ?>