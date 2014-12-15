<?php 


class detalleReciboSueldoModelo extends modelo{

	

	function listarDetalleReciboSueldo($id){
		$this->conectar();
		$result=$this->consulta("DetalleReciboSueldo","where FK_numeroReciboSueldo = $id ","Concepto","FK_codConcepto","codConcepto");	
		if (mysql_num_rows($result)>0){
			$reg=array();
			while($linea=mysql_fetch_array($result)){
				array_push($reg, array(
						"Codigo"=>$linea["FK_codConcepto"],
						"Descripcion"=>$linea["descripcion"],
						"Tipo"=>$linea["tipo"],
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
			$this->eliminar("DetalleReciboSueldo","FK_numeroReciboSueldo = $id and FK_codConcepto = $serv");	
		}else{
			$this->eliminar("DetalleReciboSueldo","FK_numeroReciboSueldo = $id");	
		}
		
	}

	function calcularTotal($id){
		$this->conectar();
		$result=$this->consulta("DetalleReciboSueldo","where FK_numeroReciboSueldo = $id ","Concepto","FK_codConcepto","codConcepto");	
		
		if (mysql_num_rows($result)>0){
			$total=0;
			while($linea=mysql_fetch_array($result)){
				if($linea["tipo"]=="D"){
					$total=$total+($linea["importe"]);	
				}else{
					$total=$total-($linea["importe"]);	
				}
				
				
			}
			$reg=array("total"=>$total);
			return $reg;
		}else{
			return null;
		}

	}



}









 ?>