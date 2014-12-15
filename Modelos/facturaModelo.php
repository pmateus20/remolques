<?php 


class facturaModelo extends modelo{

	

	function nuevaFactura($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("Factura");

	}

	function getCliente($id){
		$this->conectar();
		$result=$this->consulta("Factura","where idFactura = $id");

		$linea=mysql_fetch_array($result);
		return $linea["FK_idCliente"];
		
			

	}


	function listar(){
		$this->conectar();
		$result=$this->consulta("Factura");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			
			array_push($reg, array(
					"codigo"=>$linea["idFactura"],
					"numero"=>$linea["numero"],
					"fecha"=>$linea["fecha"],
					"cliente"=>$linea["FK_idCliente"],
					"importe"=>$linea["importe"]
					
				));
		}
		
		return $reg;
	}

	
	function buscarFactura($id){
		$this->conectar();
		$result=$this->consulta("Factura","where idFactura = $id");
			
			while($linea=mysql_fetch_array($result)){
				$reg=array(
					"codigo"=>$linea["idFactura"],
					"numero"=>$linea["numero"],
					"fecha"=>$linea["fecha"],
					"tipo"=>$linea["tipo"],
					"puntoVenta"=>$linea["puntoVenta"],
					"importe"=>$linea["importe"],
					"cliente"=>$linea["FK_idCliente"]
					);
			}

			return $reg;
		
	}


	function eliminarFactura($id){
		$this->conectar();
		$this->eliminar("Factura","idFactura = $id");	
		
		
	}

	function finalizarFactura($id,$f){
		$this->conectar();
		$a=array("importe"=>$id);
		$this->setCampos($a);
		$this->update("Factura","where idFactura=$f");
	}

	


}









 ?>