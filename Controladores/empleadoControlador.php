<?php 
class empleadoControlador extends controlador{
	function crear(){
		$this->vista->render("empleado/crear");
	}
	function listar(){
		$this->vista->render("empleado/listar");
	}


















	//start get and set
	function getapellidoNombre(){
		return this->apellidoNombre;
	}
	function setapellidoNombre($id){
		this->apellidoNombre=$id;
	}


	function getcuit(){
		return this->cuit;
	}
	function setcuit($id){
		this->cuit=$id;

	}

	function getdireccion(){
		return this->direccion;
	}
	function setdireccion($id){
		this->direccion=$id;
	}


	function getfechaNacimiento(){
		return this->fechaNacimiento;
	}
	function setfechaNacimiento($id){
		this->fechaNacimiento=$id;
	}

	function getfechaIngreso(){
		return this->fechaIngreso;
	}
	function setfechaIngreso($id){
		this->fechaIngreso=$id;
	}


	function gettelefono(){
		return this->telefono;
	}
	function settelefono(){
		this->telefono=$id;
	}

	function getusuario(){
		return this->usuario;
	}
	function setusuario(){
		this->usuario=$id;
	}

	function getpassword(){
		return this->password;
	}
	function setpassword(){
		this->password=$id;
	}

	function gettipoUsuario(){
		return this->tipoUsuario;
	}
	function settipoUsuario(){
		this->tipoUsuario=$id;
	}
	//end get and set
} 
 ?>