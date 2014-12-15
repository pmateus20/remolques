<?php 


class empleadoModelo extends modelo{

	

	function nuevoEmpleado($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("Empleado");

	}

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

	function buscarUsuario($id){
		$this->conectar();
		$result=$this->consulta("Empleado","where usuario = '$id'");
			if(mysql_num_rows($result)>0){

				while($linea=mysql_fetch_array($result)){
					$reg=array(
						"codigo"=>$linea["legajo"],
						"nombre"=>$linea["apellidoNombre"],
						"usuario"=>$linea["usuario"],
						"password"=>$linea["password"],
						"tipoUsuario"=>$linea["tipoUsuario"]
						
						);
				}

				return $reg;

			}else{
				return null;
			}
		
	}

	


}









 ?>