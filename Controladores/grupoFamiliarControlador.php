<?php 
class grupoFamiliarControlador extends controlador{
	private $tipoParentezco;
	private $apellidoNombre;
	private $dni;
	private $empleado;





	function crear($id=null){
		if(isset($id)){
			$empleado=$id;
		}else{
			$empleado=$_GET["id"];	
		}

		$model=new grupoFamiliarModelo();
		$r=$model->listar($empleado);
		if(isset($r)){
			$this->vista->render("grupoFamiliar/crear",$r,null,$empleado);
		}else{
			$this->vista->render("grupoFamiliar/crear",null,null,$empleado);
		}
		
		
		
	}
	

	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setapellidoNombre($_POST["nombre"]);
			$this->settipoParentezco($_POST["tipoParentezco"]);
			$this->setdni($_POST["dni"]);
			$this->setempleado($_POST["empleado"]);
			$r=array(
				"codFamilia"=>"null",
				"apellidoNombre"=>$this->getapellidoNombre(),
				"tipoParentezco"=>$this->gettipoParentezco(),
				"dni"=>$this->getdni(),
				"FK_legajo"=>$this->getempleado()
				);
			
			
			$model=new grupoFamiliarModelo();
			$model->nuevoFamiliar($r);

			$this->crear($this->getempleado());
		}
	}

		

	function eliminar(){
		$id=$_GET["id"];
		$e=$_GET["em"];

		$model=new grupoFamiliarModelo();
		$model->eliminarFamiliar($id);

		$this->crear($e);

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
	function setapellidoNombre($id){
		$this->apellidoNombre=$id;
	}

	function getdni(){
		return $this->dni;
	}
	function setdni($dni){
		$this->dni=$dni;
	}

	function getempleado(){
		return $this->empleado;
	}
	function setempleado($empleado){
		$this->empleado=$empleado;
	}
	//end get and set
}

 ?>