<?php 
class empleadoControlador extends controlador{
	private $apellidoNombre;
	private $cuil;
	private $direccion;
	private $fechaNacimiento;
	private $fechaIngreso;
	private $telefono;
	private $usuario;
	private $password;
	private $tipoUsuario;
	private $categoria;


	function crear(){
		require_once("Controladores/categoriaControlador.php");
		$this->categoria=new categoriaControlador();
		$r=$this->categoria->listar("on");
		$a=array();
		foreach ($r as $fila ) {
				$b=array($fila["Descripcion"] => $fila["Codigo"]);
				$a=array_merge($a,$b);
			}	
		
		$this->vista->render("empleado/crear",$a);
	}
	

	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setapellidoNombre($_POST["nombre"]);
			$this->setcuil($_POST["cuil"]);
			$this->setdireccion($_POST["domicilio"]);
			$this->setfechaNacimiento(date("Y-m-d",strtotime(str_replace("/","-", $_POST["fechaNacimiento"]))));
			$this->setfechaIngreso(date("Y-m-d",strtotime(str_replace("/","-", $_POST["fechaIngreso"]))));
			$this->settelefono($_POST["telefono"]);
			$this->setcategoria($_POST["codCategoria"]);
			$r=array(
				"legajo"=>"null",
				"apellidoNombre"=>$this->getapellidoNombre(),
				"cuil"=>$this->getcuil(),
				"direccion"=>$this->getdireccion(),
				"fechaNacimiento"=>$this->getfechaNacimiento(),
				"fechaIngreso"=>$this->getfechaIngreso(),
				"telefono"=>$this->gettelefono(),
				"FK_codCategoria"=>$this->getcategoria()
				);
			
			
			$model=new empleadoModelo();
			$model->nuevoEmpleado($r);

			$this->vista->render("cliente/crear");
		}
	}

	function listar($mode=null){
		$model=new empleadoModelo();
		$r=$model->listar();
		if(!isset($mode)){
			$this->vista->render("empleado/listar",$r);
		}else{
			return $r;
		}
		
	}

	

	function editarEmpleado(){
		$id=$_GET["id"];

		require_once("Controladores/categoriaControlador.php");
		$this->categoria=new categoriaControlador();
		$c=$this->categoria->listar("on");
		$a=array();
		foreach ($c as $fila ) {
				$b=array($fila["Descripcion"] => $fila["Codigo"]);
				$a=array_merge($a,$b);
			}	


		$model=new empleadoModelo();
		$r=$model->buscarEmpleado($id);

		$this->vista->render("empleado/editar",$r,$a);

	}

	function guardarEdicion(){
		if(isset($_POST["Guardar"])){
			$this->setapellidoNombre($_POST["nombre"]);
			$this->setcuil($_POST["cuil"]);
			$this->setdireccion($_POST["domicilio"]);
			$this->setfechaNacimiento(date("Y-m-d",strtotime(str_replace("/","-", $_POST["fechaNacimiento"]))));
			$this->setfechaIngreso(date("Y-m-d",strtotime(str_replace("/","-", $_POST["fechaIngreso"]))));
			$this->settelefono($_POST["telefono"]);
			$this->setcategoria($_POST["codCategoria"]);
			$r=array(
				"apellidoNombre"=>$this->getapellidoNombre(),
				"cuil"=>$this->getcuil(),
				"direccion"=>$this->getdireccion(),
				"fechaNacimiento"=>$this->getfechaNacimiento(),
				"fechaIngreso"=>$this->getfechaIngreso(),
				"telefono"=>$this->gettelefono(),
				"FK_codCategoria"=>$this->getcategoria()
				);
			
			$model=new empleadoModelo();
			$model->guardarEdicion($r,$_POST["id"]);

			$this->listar();
		}
	}


	function ver(){
		$id=$_GET["id"];

		$model=new empleadoModelo();
		$r=$model->buscarEmpleado($id);

		$this->vista->render("empleado/ver",$r);

	}

	function cargarUsuario(){
		$id=$_GET["id"];

		$this->vista->render("empleado/cargarUsuario",null,null,$id);
	}

	function guardarUsuario(){
		if(isset($_POST["Guardar"])){
			if($_POST["password"]==$_POST["password2"]){
			$this->setusuario($_POST["usuario"]);
			$this->setpassword(md5($_POST["password"]));
			
			$r=array(
				"usuario"=>$this->getusuario(),
				"password"=>$this->getpassword(),
				"tipoUsuario"=>"usuario"				
				);
			
			$model=new empleadoModelo();
			$model->guardarEdicion($r,$_POST["id"]);

			$this->listar();	
			}
			
		}
	}

	function cambiarPass(){
		$id=$_GET["id"];

		$this->vista->render("empleado/cambiarPass",null,null,$id);		

	}

	function guardarPass(){
		if(isset($_POST["Guardar"])){
			if($_POST["password"]==$_POST["password2"]){
			$this->setpassword(md5($_POST["password"]));
			
			$r=array(
				"password"=>$this->getpassword(),
				);
			
			$model=new empleadoModelo();
			$model->guardarEdicion($r,$_POST["id"]);

			$this->listar();	
			}
			
		}
	}















	//start get and set
	function getapellidoNombre(){
		return $this->apellidoNombre;
	}
	function setapellidoNombre($id){
		$this->apellidoNombre=$id;
	}


	function getcuil(){
		return $this->cuil;
	}
	function setcuil($cuil){
		$this->cuil=$cuil;

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

	function getcategoria(){
		return $this->categoria;
	}
	function setcategoria($categoria){
		$this->categoria=$categoria;
	}
	//end get and set
} 
 ?>