<?php 


class reciboSueldoModelo extends modelo{

	

	function nuevaReciboSueldo($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("ReciboSueldo");

	}

	function getEmpleado($id){
		$this->conectar();
		$result=$this->consulta("ReciboSueldo","where numeroReciboSueldo = $id");

		$linea=mysql_fetch_array($result);
		return $linea["FK_legajo"];
		
			

	}


	function listar(){
		$this->conectar();
		$result=$this->consulta("ReciboSueldo");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			
			array_push($reg, array(
					"codigo"=>$linea["numeroReciboSueldo"],
					"fecha"=>$linea["fecha"],
					"empleado"=>$linea["FK_legajo"],
					"importe"=>$linea["importe"]
					
				));
		}
		
		return $reg;
	}

	
	function buscarReciboSueldo($id){
		$this->conectar();
		$result=$this->consulta("ReciboSueldo","where numeroReciboSueldo = $id");
			
			while($linea=mysql_fetch_array($result)){
				$reg=array(
					"codigo"=>$linea["numeroReciboSueldo"],
					"fecha"=>$linea["fecha"],
					"empleado"=>$linea["FK_legajo"],
					"importe"=>$linea["importe"],
					"salario"=>$linea["sueldo"]
					);
			}

			return $reg;
		
	}


	function eliminarReciboSueldo($id){
		$this->conectar();
		$this->eliminar("ReciboSueldo","numeroReciboSueldo = $id");	
		
		
	}

	function finalizarReciboSueldo($id,$f){
		$this->conectar();
		$a=array("importe"=>$id);
		$this->setCampos($a);
		$this->update("ReciboSueldo","where numeroReciboSueldo=$f");
	}

	function getSalario($id){
		$reg=$this->buscarReciboSueldo($id);

		$e=new empleadoModelo();
		$emp=$e->calcularSueldo($reg["empleado"]);
		$salario=$emp["salario"];
		return $salario;

	}


}









 ?>