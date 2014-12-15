<?php 


class lineaFacturaModelo extends modelo{

	

	function listarLineaFactura($id){
		$this->conectar();
		$result=$this->consulta("LineaFactura","where FK_idFactura = $id ","Servicio","FK_idServicio","idServicio");	
		if (mysql_num_rows($result)>0){
			$reg=array();
			while($linea=mysql_fetch_array($result)){
				array_push($reg, array(
						"Codigo"=>$linea["FK_idServicio"],
						"Descripcion"=>$linea["descripcion"],
						"Cantidad"=>$linea["cantidad"],
						"Precio"=>$linea["importe"]
					));
			}
			return $reg;
		}else{
			return null;
		}
		

	}

	function eliminarLinea($id,$serv=null){
		$this->conectar();
		if(isset($serv)){
			$this->eliminar("LineaFactura","FK_idFactura = $id and FK_idServicio = $serv");	
		}else{
			$this->eliminar("LineaFactura","FK_idFactura = $id");	
		}
		
	}

	function calcularTotal($id){
		$this->conectar();
		$result=$this->consulta("LineaFactura","where FK_idFactura = $id ");	
		if (mysql_num_rows($result)>0){
			$total=0;
			while($linea=mysql_fetch_array($result)){
				$total=$total+($linea["importe"]*$linea["cantidad"]);
				
			}
			$reg=array("total"=>$total);
			return $reg;
		}else{
			return null;
		}

	}



}









 ?>