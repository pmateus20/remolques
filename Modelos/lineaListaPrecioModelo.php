<?php 


class lineaListaPrecioModelo extends modelo{

	

	function listarLineaListaPrecio($id){
		$this->conectar();
		$result=$this->consulta("LineaListaPrecio","where FK_idListaPrecio = $id ","Servicio","FK_idServicio","idServicio");	
		if (mysql_num_rows($result)>0){
			$reg=array();
			while($linea=mysql_fetch_array($result)){
				array_push($reg, array(
						"Descripcion"=>$linea["descripcion"],
						"Precio"=>$linea["precio"]
					));
			}
			return $reg;
		}else{
			return null;
		}
		

	}

	function eliminarLinea($id){
		$this->conectar();
		$this->eliminar("LineaListaPrecio","FK_idListaPrecio = $id");
	}



}









 ?>