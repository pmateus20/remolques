<?php
class lineaListaPrecioControlador extends controlador{
	private $precio;
	private $servicio;
	private $lista;

	function buscarServicio($id){
		require_once("Controladores/servicioControlador.php");
		$this->servicio=new servicioControlador();
		$c="where idServicio not in (select FK_idServicio from LineaListaPrecio where FK_idListaPrecio = $id)";

		return $this->servicio->buscarServicio($c);
	}

	function listarLineas($id){
		$model=new lineaListaPrecioModelo();
		return $model->listarLineaListaPrecio($id);

	}

	function guardarLinea(){
		$model=new lineaListaPrecioModelo();
		$datos=array(
				"precio"=>$this->getprecio(),
				"FK_idListaPrecio"=>$this->getlista(),
				"FK_idServicio"=>$this->getservicio()
			);
		$model->conectar();
		$model->setCampos($datos);
		$model->insertar("LineaListaPrecio");

	}

	function eliminarLinea($id){
		$model=new lineaListaPrecioModelo();
		$model->eliminarLinea($id);
	}



// start get and set
	function getprecio(){
		return $this->precio;
	}
	function setprecio($precio){
		$this->precio=$precio;
	}

	function getservicio(){
		return $this->servicio;
	}
	function setservicio($servicio){
		$this->servicio=$servicio;
	}

	function getlista(){
		return $this->lista;
	}
	function setlista($lista){
		$this->lista=$lista;
	}

	//end get and set

}





?>	