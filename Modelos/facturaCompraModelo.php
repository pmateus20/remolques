<?php 


class FacturaCompraModelo extends modelo{

	

	function nuevaFacturaCompra($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("FacturaCompra");

	}

	function getProveedor($id){
		$this->conectar();
		$result=$this->consulta("FacturaCompra","where idFacturaCompra = $id");

		$linea=mysql_fetch_array($result);
		return $linea["FK_idProveedor"];
		
			

	}


	function listar(){
		$this->conectar();
		$result=$this->consulta("FacturaCompra");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			
			array_push($reg, array(
					"codigo"=>$linea["idFacturaCompra"],
					"numero"=>$linea["numero"],
					"fecha"=>$linea["fecha"],
					"proveedor"=>$linea["FK_idProveedor"],
					"importe"=>$linea["importe"]
					
				));
		}
		
		return $reg;
	}

	
	function buscarFacturaCompra($id){
		$this->conectar();
		$result=$this->consulta("FacturaCompra","where idFacturaCompra = $id");
			
			while($linea=mysql_fetch_array($result)){
				$reg=array(
					"codigo"=>$linea["idFacturaCompra"],
					"numero"=>$linea["numero"],
					"fecha"=>$linea["fecha"],
					"tipo"=>$linea["tipo"],
					"puntoVenta"=>$linea["puntoDeVenta"],
					"importe"=>$linea["importe"],
					"proveedor"=>$linea["FK_idProveedor"]
					);
			}

			return $reg;
		
	}


	function eliminarFacturaCompra($id){
		$this->conectar();
		$this->eliminar("FacturaCompra","idFacturaCompra = $id");	
		
		
	}

	function finalizarFacturaCompra($id,$f){
		$this->conectar();
		$a=array("importe"=>$id);
		$this->setCampos($a);
		$this->update("FacturaCompra","where idFacturaCompra=$f");
	}

	


}









 ?>