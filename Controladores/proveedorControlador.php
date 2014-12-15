<?php 

class proveedorControlador extends controlador {
	private $nombre;
	private $cuit;
	private $domicilio;
	private $telefono;
	private $eMail;
	private $contacto;


	function crear(){
		$this->vista->render("proveedor/crear");
	}
	


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setnombre($_POST["nombre"]);
			$this->setcuit($_POST["cuit"]);
			$this->setdomicilio($_POST["domicilio"]);
			$this->settelefono($_POST["telefono"]);
			$this->seteMail($_POST["email"]);
			$this->setcontacto($_POST["contacto"]);

			$r=array(
				"idProveedor"=>"null",
				"nombre"=>$this->getnombre(),
				"cuit"=>$this->getcuit(),
				"domicilio"=>$this->getdomicilio(),
				"telefono"=>$this->gettelefono(),
				"eMail"=>$this->geteMail(),
				"contacto"=>$this->getcontacto()
				);
			
			$model=new proveedorModelo();
			$model->nuevoProveedor($r);

			$this->listar();
		}
	}

	function listar($mode=null){
		$model=new proveedorModelo();
		$r=$model->listar();	
				
		if(!isset($mode)){
			$this->vista->render("proveedor/listar",$r);
		}else{
			return $r;
		}
		
	}

	function eliminar(){
		$id=$_GET["id"];

		$model=new proveedorModelo();
		$model->eliminarProveedor($id);

		$this->listar();

	}

	function editar(){
		$id=$_GET["id"];

		$model=new proveedorModelo();
		$r=$model->buscarProveedor($id);

		$this->vista->render("proveedor/editar",$r);

	}

	function guardarEdicion(){
		if(isset($_POST["Guardar"])){
			$this->setnombre($_POST["nombre"]);
			$this->setcuit($_POST["cuit"]);
			$this->setdomicilio($_POST["domicilio"]);
			$this->settelefono($_POST["telefono"]);
			$this->seteMail($_POST["email"]);
			$this->setcontacto($_POST["contacto"]);

			$r=array(
				"nombre"=>$this->getnombre(),
				"cuit"=>$this->getcuit(),
				"domicilio"=>$this->getdomicilio(),
				"telefono"=>$this->gettelefono(),
				"eMail"=>$this->geteMail(),
				"contacto"=>$this->getcontacto()
				);
			
			$model=new proveedorModelo();
			$model->guardarEdicion($r,$_POST["id"]);

			$this->listar();
		}
	}


	function ver(){
		$id=$_GET["id"];

		$model=new proveedorModelo();
		$r=$model->buscarProveedor($id);

		$this->vista->render("proveedor/ver",$r);

	}

	

	function buscarProveedor($id){
		$model=new proveedorModelo();
		$r=$model->buscarProveedor($id);
		return $r;	
	}























	//start get and set
	function getnombre(){
		return $this->nombre;
	}
	function setnombre($id){
		$this->nombre=$id;
	}


	function getcuit(){
		return $this->cuit;
	}
	function setcuit($cuit){
		$this->cuit=$cuit;

	}

	function getdomicilio(){
		return $this->domicilio;
	}
	function setdomicilio($dir){
		$this->domicilio=$dir;
	}


	function gettelefono(){
		return $this->telefono;
	}
	function settelefono($tel){
		$this->telefono=$tel;
	}

	function geteMail(){
		return $this->eMail;
	}
	function seteMail($mail){
		$this->eMail=$mail;
	}

	function getcontacto(){
		return $this->contacto;
	}
	function setcontacto($contac){
		$this->contacto=$contac;
	}
	//end get and set

} 


 ?>