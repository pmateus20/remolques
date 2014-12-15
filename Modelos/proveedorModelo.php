<?php 


class proveedorModelo extends modelo{

	

	function nuevoProveedor($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("Proveedor");

	}

	function listar(){
		$this->conectar();
		$result=$this->consulta("Proveedor");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["idProveedor"],
					"Nombre"=>$linea["nombre"],
					"CUIT"=>$linea["cuit"]
				));
		}
		
		return $reg;
	}

	function eliminarProveedor($id){
		$this->conectar();
		$this->eliminar("Proveedor","idProveedor = $id");
	}

	function buscarProveedor($id){
		$this->conectar();
		$result=$this->consulta("Proveedor","where idProveedor = $id");
			
			while($linea=mysql_fetch_array($result)){
				$reg=array(
						"codigo"=>$linea["idProveedor"],
						"nombre"=>$linea["nombre"],
						"cuit"=>$linea["cuit"],
						"domicilio"=>$linea["domicilio"],
						"telefono"=>$linea["telefono"],
						"email"=>$linea["eMail"],
						"contacto"=>$linea["contacto"]
					);
			}

			return $reg;
		
	}

	function guardarEdicion($array,$id){
		$this->conectar();
		$this->setCampos($array);
		$this->update("Proveedor","where idProveedor = $id");
	}

	


}









 ?>