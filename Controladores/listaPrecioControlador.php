<?php 

class listaPrecioControlador extends controlador{
	private $descripcion;
	private $lineaListaPrecio;


	function cargar(){
		$this->vista->render("listaPrecio/cargar");
	}

	function guardar(){
		if(isset($_POST["Siguiente"])){
			$this->setdescripcion($_POST["listaPrecio"]);
			$r=array(
				"idListaPrecio"=>"null",
				"descripcion"=>$this->getdescripcion()
				);
			$model=new listaPrecioModelo();
			$id=$model->nuevaListaPrecio($r);

			$this->agregarServicio($id);
			
		}
	}

	function listarLineas($id){
		require_once("Controladores/lineaListaPrecioControlador.php");
		$this->lineaListaPrecio=new lineaListaPrecioControlador();
		return $this->lineaListaPrecio->listarLineas($id);	
	}

	function agregarServicio($id){
		$lista=$this->listarLineas($id);
		require_once("Controladores/lineaListaPrecioControlador.php");
		$this->lineaListaPrecio=new lineaListaPrecioControlador();
		$reg=$this->lineaListaPrecio->buscarServicio($id);
		
		if($lista!=null){
			$this->vista->render("listaPrecio/agregarServicio",$reg,$lista,$id);	
		}else{
			$this->vista->render("listaPrecio/agregarServicio",$reg,null,$id);	
		}

		
	}

	function definirPrecio(){
		if(isset($_POST["Guardar"])){
			require_once("Controladores/lineaListaPrecioControlador.php");
			$this->lineaListaPrecio=new lineaListaPrecioControlador();
			$this->lineaListaPrecio->setprecio($_POST["precio"]);
			$this->lineaListaPrecio->setservicio($_POST["idServicio"]);
			$this->lineaListaPrecio->setlista($_POST["listaPrecio"]);

			$this->lineaListaPrecio->guardarLinea();

			$this->agregarServicio($_POST["listaPrecio"]);
		}else{
			if(isset($_GET["s"])){
				$a=array(
						"idServicio"=>$_GET["s"],
						"listaPrecio"=>$_GET["l"]
					);
				$this->vista->render("listaPrecio/definirPrecio",$a);
			}
		}
	}

	function listar($cargar=null){
		$model=new listaPrecioModelo();
		$r=$model->listar();
		if(!isset($cargar)){
			$this->vista->render("listaPrecio/listar",$r);	
		}else{
			return $r;
		}
		

	}

	function eliminar(){
		$id=$_GET["id"];
		require_once("Controladores/lineaListaPrecioControlador.php");
		$this->lineaListaPrecio=new lineaListaPrecioControlador();
		$this->lineaListaPrecio->eliminarLinea($id);

		$model=new listaPrecioModelo();
		$model->eliminarLista($id);

		$this->listar();

	}



	// start get and set
	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}
	// end get and set

}







 ?>