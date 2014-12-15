<?php 


class articuloModelo extends modelo{

	

	function nuevoArticulo($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("Articulo");

	}

	function buscarArticulo($condicion=null){
		$this->conectar();
		if(!isset($condicion)){
			$result=$this->consulta("Articulo");	
		}else{
			$result=$this->consulta("Articulo",$condicion);
		}
		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["idArticulo"],
					"Descripcion"=>$linea["descripcion"]
				));
		}
		
		return $reg;
	}



	function listar(){
		$this->conectar();
		$result=$this->consulta("Articulo");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["idArticulo"],
					"Descripcion"=>$linea["descripcion"]
				));
		}
		
		return $reg;
	}

	function eliminarArticulo($id){
		$this->conectar();
		$this->eliminar("Articulo","idArticulo = $id");
	}

	

	function guardarEdicion($array,$id){
		$this->conectar();
		$this->setCampos($array);
		$this->update("Articulo","where idArticulo = $id");
	}



}









 ?>