<?php 


class conceptoModelo extends modelo{

	

	function nuevoConcepto($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("Concepto");

	}

	function buscarConcepto($condicion=null){
		$this->conectar();
		if(!isset($condicion)){
			$result=$this->consulta("Concepto");	
		}else{
			$result=$this->consulta("Concepto",$condicion);
		}
		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["codConcepto"],
					"Descripcion"=>$linea["descripcion"],
					"Tipo"=>$linea["tipo"]
				));
		}
		
		return $reg;
	}



	function listar(){
		$this->conectar();
		$result=$this->consulta("Concepto");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["codConcepto"],
					"Descripcion"=>$linea["descripcion"],
					"Tipo"=>$linea["tipo"]
				));
		}
		
		return $reg;
	}

	function eliminarConcepto($id){
		$this->conectar();
		$this->eliminar("Concepto","codConcepto = $id");
	}

	

	function guardarEdicion($array,$id){
		$this->conectar();
		$this->setCampos($array);
		$this->update("Concepto","where codConcepto = $id");
	}



}









 ?>