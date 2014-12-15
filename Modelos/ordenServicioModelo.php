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


	function listar(){
		$this->conectar();
		$result=$this->consulta("OrdenServicio");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			
			array_push($reg, array(
					"codigo"=>$linea["idOrdenServicio"],
					"numero"=>$linea["numeroServExterno"],
					"fecha"=>$linea["fecha"],
					"cliente"=>$linea["FK_idCliente"]
					
				));
		}
		
		return $reg;
	}

	
	function buscarOrdenServicio($id){
		$this->conectar();
		$result=$this->consulta("OrdenServicio","where idOrdenServicio = $id");
			
			while($linea=mysql_fetch_array($result)){
				$reg=array(
					"codigo"=>$linea["idOrdenServicio"],
					"numero"=>$linea["numeroServExterno"],
					"fecha"=>$linea["fecha"],
					"titular"=>$linea["titular"],
					"dominio"=>$linea["dominio"],
					"descripcion"=>$linea["descripcion"],
					"cliente"=>$linea["FK_idCliente"]
					);
			}

			return $reg;
		
	}


	function eliminarOrdenServicio($id){
		$this->conectar();
		$this->eliminar("OrdenServicio","idOrdenServicio = $id");	
		
		
	}

	


}









 ?>