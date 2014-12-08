<?php 
class grupoFamiliarControlador extends controlador{
	private $tipoParentezco;
	private $apellidoNombre;
	private $dni;





	function crear() {
		$this->vista->render("grupoFamiliar/crear");
	}









	//start get and set
	function gettipoParentezco(){
		return $this->tipoParentezco;
	}
	function settipoParentezco($tParen){
		$this->tipoParentezco=$tParen;
	}

	function getapellidoNombre(){
		return $this->apellidoNombre;
	}
	function setapellidoNombreo($id){
		$this->apellidoNombre=$id;
	}

	function getdni(){
		return $this->dni;
	}
	function setdni($dni){
		$this->dni=$dni;
	}
	//end get and set
}

 ?>