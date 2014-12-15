<?php 
class articuloControlador extends controlador{
	private $descripcion;




	function crear(){
		$this->vista->render("articulo/crear");
	}
	function listar(){
		$model=new articuloModelo();
		$r=$model->listar();

		$this->vista->render("articulo/listar",$r);
	}


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setdescripcion($_POST["descripcion"]);


			$r=array(
				"idArticulo"=>"null",
				"descripcion"=>$this->getdescripcion()
				);

			$model=new articuloModelo();
			$model->nuevoArticulo($r);
			$this->vista->render("articulo/crear");
		}
	}


	function buscarArticulo($condi=null){
		$model=new articuloModelo();
		return $model->buscarArticulo($condi);
		
	}

	function eliminar(){
		$id=$_GET["id"];

		$model=new articuloModelo();
		$model->eliminarArticulo($id);

		$this->listar();

	}

	function editar(){
		$id=$_GET["id"];

		$model=new articuloModelo();
		$r=$model->buscarArticulo("where idArticulo = $id");
		

		$this->vista->render("articulo/editar",$r[0]);

	}

	function guardarEdicion(){
		if(isset($_POST["Guardar"])){
			$this->setdescripcion($_POST["descripcion"]);


			$r=array(
					"descripcion"=>$this->getdescripcion()
				);

			
			$model=new articuloModelo();
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
	//end get and set
} 
 ?>