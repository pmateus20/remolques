<?php 


class grupoFamiliarModelo extends modelo{

	

	function nuevoFamiliar($array){
		$this->conectar();
		$this->setCampos($array);
		$this->insertar("GrupoFamiliar");

	}

	


	function listar($id){
		$this->conectar();
		$result=$this->consulta("GrupoFamiliar","where FK_legajo = $id");

		$reg=array();
		
		while($linea=mysql_fetch_array($result)){
			array_push($reg, array(
					"Codigo"=>$linea["codFamilia"],
					"tipoParentezco"=>$linea["tipoParentezco"],
					"apellidoNombre"=>$linea["apellidoNombre"],
					"dni"=>$linea["dni"]
				));
		}
		
		return $reg;
	}

	function eliminarFamiliar($id){
		$this->conectar();
		$this->eliminar("GrupoFamiliar","codFamilia = $id");
	}

	

	



}









 ?>