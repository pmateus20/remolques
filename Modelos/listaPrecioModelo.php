<?php 


class listaPrecioModelo extends modelo{

	

	function nuevaListaPrecio($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("ListaPrecio");

		return $this->lastId("ListaPrecio","idListaPrecio");

	}

	function listar(){
		$this->conectar();
		$result=$this->consulta("ListaPrecio");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["idListaPrecio"],
					"Descripcion"=>$linea["descripcion"]
				));
		}
		
		return $reg;
	}

	function eliminarLista($id){
		$this->conectar();
		$this->eliminar("ListaPrecio","idListaPrecio = $id");
	}



}









 ?>