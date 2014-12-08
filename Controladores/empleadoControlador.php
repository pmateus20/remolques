<?php 
class empleadoControlador extends controlador{
	private $apellidoNombre;
	private $cuit;
	private $direccion;
	private $fechaNacimiento;
	private $fechaIngreso;
	private $telefono;
	private $usuario;
	private $password;
	private $tipoUsuario;


	function crear(){
		$this->vista->render("empleado/crear");
	}
	function listar(){
		$this->vista->render("empleado/listar");
	}


















	//start get and set
	function getapellidoNombre(){
		return $this->apellidoNombre;
	}
	function setapellidoNombre($id){
		$this->apellidoNombre=$id;
	}


	function getcuit(){
		return $this->cuit;
	}
	function setcuit($cuit){
		$this->cuit=$cuit;

	}

	function getdireccion(){
		return $this->direccion;
	}
	function setdireccion($dir){
		$this->direccion=$dir;
	}


	function getfechaNacimiento(){
		return $this->fechaNacimiento;
	}
	function setfechaNacimiento($fecNac){
		$this->fechaNacimiento=$fecNac;
	}

	function getfechaIngreso(){
		return $this->fechaIngreso;
	}
	function setfechaIngreso($fecIn){
		$this->fechaIngreso=$fecIn;
	}


	function gettelefono(){
		return $this->telefono;
	}
	function settelefono($tel){
		$this->telefono=$tel;
	}

	function getusuario(){
		return $this->usuario;
	}
	function setusuario($usr){
		$this->usuario=$usr;
	}

	function getpassword(){
		return $this->password;
	}
	function setpassword($pas){
		$this->password=$pas;
	}

	function gettipoUsuario(){
		return $this->tipoUsuario;
	}
	function settipoUsuario($tipUsr){
		$this->tipoUsuario=$tipUsr;
	}
	//end get and set
} 
 ?>