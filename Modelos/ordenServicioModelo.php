<?php 


class ordenServicioModelo extends modelo{

	

	function nuevaOrdenServicio($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("ordenServicio");

	}

	function getCliente($id){
		$this->conectar();
		$result=$this->consulta("OrdenServicio","where idOrdenServicio = $id");

		$linea=mysql_fetch_array($result);
		return $linea["FK_idCliente"];
		
			

	}

/*
	function listar(){
		$this->conectar();
		$result=$this->consulta("Empleado");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			if(isset($linea["usuario"])){$usr="si";}else{$usr="no";}

			array_push($reg, array(
					"codigo"=>$linea["legajo"],
					"nombre"=>$linea["apellidoNombre"],
					"cuil"=>$linea["cuil"],
					"direccion"=>$linea["direccion"],
					"fechaNacimiento"=>$linea["fechaNacimiento"],
					"fechaIngreso"=>$linea["fechaIngreso"],
					"telefono"=>$linea["telefono"],
					"categoria"=>$linea["FK_codCategoria"],
					"usuario"=>$usr
				));
		}
		
		return $reg;
	}

	

	function buscarEmpleado($id){
		$this->conectar();
		$result=$this->consulta("Empleado","where legajo = $id");
			
			while($linea=mysql_fetch_array($result)){
				$reg=array(
					"codigo"=>$linea["legajo"],
					"nombre"=>$linea["apellidoNombre"],
					"cuil"=>$linea["cuil"],
					"direccion"=>$linea["direccion"],
					"fechaNacimiento"=>$linea["fechaNacimiento"],
					"fechaIngreso"=>$linea["fechaIngreso"],
					"telefono"=>$linea["telefono"],
					"categoria"=>$linea["FK_codCategoria"]
					);
			}

			return $reg;
		
	}

	function guardarEdicion($array,$id){
		$this->conectar();
		$this->setCampos($array);
		$this->update("Empleado","where legajo = $id");
	}

	*/


}









 ?>