<?php 
class categoriaControlador extends controlador{
	private $descripcion;
	private $salario;




	function crear(){
		$this->vista->render("categoria/crear");
	}
	

	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setdescripcion($_POST["descripcion"]);
			$this->setsalario($_POST["salario"]);
			

			$r=array(
				"codCategoria"=>"null",
				"descripcion"=>$this->getdescripcion(),
				"salario"=>$this->getsalario()
				
				);
			
			$model=new categoriaModelo();
			$model->nuevaCategoria($r);

			$this->vista->render("categoria/crear");
		}
	}


	function listar($mode=null){
		$model=new categoriaModelo();
		$r=$model->listar();
		if(!isset($mode)){
			$this->vista->render("categoria/listar",$r);
		}else{
			return $r;
		}
		
	}

	function eliminar(){
		$id=$_GET["id"];

		$model=new categoriaModelo();
		$model->eliminarcategoria($id);

		$this->listar();

	}

	function editar(){
		$id=$_GET["id"];

		$model=new categoriaModelo();
		$r=$model->buscarCategoria($id);

		$this->vista->render("categoria/editar",$r);

	}

	function guardarEdicion(){
		if(isset($_POST["Guardar"])){
			$this->setdescripcion($_POST["descripcion"]);
			$this->setsalario($_POST["salario"]);

			$r=array(
				"codCategoria"=>"null",
				"descripcion"=>$this->getdescripcion(),
				"salario"=>$this->getsalario()
				);
			
			$model=new categoriaModelo();
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

	function getsalario(){
		return $this->salario;
	}
	function setsalario($sal){
		$this->salario=$sal;
	}
	//end get and set
} 
 ?>