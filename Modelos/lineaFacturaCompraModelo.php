<?php 


class lineaFacturaCompraModelo extends modelo{

	

	function listarLineaFacturaCompra($id){
		$this->conectar();
		$result=$this->consulta("LineaFacturaCompra","where FK_idFacturaCompra = $id ","Articulo","FK_idArticulo","idArticulo");	
		if (mysql_num_rows($result)>0){
			$reg=array();
			while($linea=mysql_fetch_array($result)){
				array_push($reg, array(
						"Codigo"=>$linea["FK_idArticulo"],
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
			$this->eliminar("LineaFacturaCompra","FK_idFacturaCompra = $id and FK_idArticulo = $serv");	
		}else{
			$this->eliminar("LineaFacturaCompra","FK_idFacturaCompra = $id");	
		}
		
	}

	function calcularTotal($id){
		$this->conectar();
		$result=$this->consulta("LineaFacturaCompra","where FK_idFacturaCompra = $id ");	
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