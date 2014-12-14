<?php 


class categoriaModelo extends modelo{

	

	function nuevaCategoria($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("Categoria");

	}

	function listar(){
		$this->conectar();
		$result=$this->consulta("Categoria");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["codCategoria"],
					"Descripcion"=>$linea["descripcion"],
					"Salario"=>$linea["salario"]
				));
		}
		
		return $reg;
	}

	function eliminarCategoria($id){
		$this->conectar();
		$this->eliminar("Categoria","codCategoria = $id");
	}

	function buscarCategoria($id){
		$this->conectar();
		$result=$this->consulta("Categoria","where codCategoria = $id");
			
			while($linea=mysql_fetch_array($result)){
				$reg=array(
						"codigo"=>$linea["codCategoria"],
						"descripcion"=>$linea["descripcion"],
						"salario"=>$linea["salario"]
						
					);
			}

			return $reg;
		
	}

	function guardarEdicion($array,$id){
		$this->conectar();
		$this->setCampos($array);
		$this->update("Categoria","where codCategoria = $id");
	}

	


}









 ?>