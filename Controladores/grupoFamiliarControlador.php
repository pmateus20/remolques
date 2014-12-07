<?php 
class grupoFamiliarControlador extends controlador{
	function crear() {
		$this->vista->render("grupoFamiliar/crear");
	}









	//start get and set
	function gettipoParentezco(){
		return this->tipoParentezco;
	}
	function settipoParentezco($id){
		this->tipoParentezco=$id;
	}

	function getapellidoNombre(){
		return this->apellidoNombre;
	}
	function setapellidoNombreo($id){
		this->apellidoNombre=$id;
	}

	function getdni(){
		return this->dni;
	}
	function setdni($id){
		this->dni=$id;
	}
	//end get and set
}

 ?>