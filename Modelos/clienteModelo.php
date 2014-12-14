<?php 


class clienteModelo extends modelo{

	

	function nuevoCliente($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("Cliente");

	}

	function listar(){
		$this->conectar();
		$result=$this->consulta("Cliente");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["idCliente"],
					"Nombre"=>$linea["apellidoNombre"],
					"CUIT"=>$linea["cuit"]
				));
		}
		
		return $reg;
	}

	function eliminarCliente($id){
		$this->conectar();
		$this->eliminar("Cliente","idCliente = $id");
	}

	function buscarCliente($id){
		$this->conectar();
		$result=$this->consulta("Cliente","where idCliente = $id");
			
			while($linea=mysql_fetch_array($result)){
				$reg=array(
						"codigo"=>$linea["idCliente"],
						"nombre"=>$linea["apellidoNombre"],
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
		$this->update("Cliente","where idCliente = $id");
	}

	function seleccionarLista($l,$c){
		$this->conectar();
		$r=array(
				"FK_idListaPrecio"=>$l
				);
		$this->setCampos($r);
		$this->update("Cliente","where idCliente = $c");
	}

	function getListaPrecio($cli){
		$this->conectar();
		$result=$this->consulta("Cliente","where idCliente = $cli");

		$reg=array();
		
		$linea=mysql_fetch_array($result);
		
		return $linea["FK_idListaPrecio"];
		
	}


}









 ?>