<?php 


class servicioModelo extends modelo{

	

	function nuevoServicio($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("Servicio");

	}

	function buscarServicio($condicion=null){
		$this->conectar();
		if(!isset($condicion)){
			$result=$this->consulta("Servicio");	
		}else{
			$result=$this->consulta("Servicio",$condicion);
		}
		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["idServicio"],
					"Descripcion"=>$linea["descripcion"]
				));
		}
		
		return $reg;
	}



	function listar(){
		$this->conectar();
		$result=$this->consulta("Servicio");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["idServicio"],
					"Descripcion"=>$linea["descripcion"]
				));
		}
		
		return $reg;
	}

	function eliminarServicio($id){
		$this->conectar();
		$this->eliminar("Servicio","idServicio = $id");
	}

	function buscarServicioValorizado($id,$lp){
		$this->conectar();
		$result=$this->consulta("Servicio","where idServicio = $id");
				while($linea=mysql_fetch_array($result)){
				
				$r2=$this->consulta("LineaListaPrecio","where FK_idServicio = $id and FK_idListaPrecio= $lp");
				if(mysql_num_rows($result)){
				$f=mysql_fetch_array($r2);
				$p=$f["precio"];
				}else{
					$p=" ";
				}

				$reg=array(
						"Codigo"=>$linea["idServicio"],
						"Descripcion"=>$linea["descripcion"],
						"Precio"=>$p
					);
				}

				return $reg;
	
			
					
	}

	function guardarEdicion($array,$id){
		$this->conectar();
		$this->setCampos($array);
		$this->update("Servicio","where idServicio = $id");
	}



}









 ?>