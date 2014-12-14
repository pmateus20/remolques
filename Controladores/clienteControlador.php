<?php 

class clienteControlador extends controlador{

	private $apellidoNombre; //falta crear todos las variables de las clases ejemplo private $cuit;
	private $cuit;
	private $domicilio;
	private $telefono;
	private $eMail;
	private $contacto;
	private $listaPrecion;
	

	function crear(){
		$this->vista->render("cliente/crear");
	}
	


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setapellidoNombre($_POST["nombre"]);
			$this->setcuit($_POST["cuit"]);
			$this->setdomicilio($_POST["domicilio"]);
			$this->settelefono($_POST["telefono"]);
			$this->seteMail($_POST["email"]);
			$this->setcontacto($_POST["contacto"]);

			$r=array(
				"idCliente"=>"null",
				"apellidoNombre"=>$this->getapellidoNombre(),
				"cuit"=>$this->getcuit(),
				"domicilio"=>$this->getdomicilio(),
				"telefono"=>$this->gettelefono(),
				"eMail"=>$this->geteMail(),
				"contacto"=>$this->getcontacto()
				);
			
			$model=new clienteModelo();
			$model->nuevoCliente($r);

			$this->vista->render("cliente/resultado");
		}
	}

	function listar($mode=null){
		$model=new clienteModelo();
		$r=$model->listar();
		if(!isset($mode)){
			$this->vista->render("cliente/listar",$r);
		}else{
			return $r;
		}
		
	}

	function eliminar(){
		$id=$_GET["id"];

		$model=new clienteModelo();
		$model->eliminarCliente($id);

		$this->listar();

	}

	function editar(){
		$id=$_GET["id"];

		$model=new clienteModelo();
		$r=$model->editarCliente($id);

		$this->vista->render("cliente/editar",$r);

	}

	function guardarEdicion(){
		if(isset($_POST["Guardar"])){
			$this->setapellidoNombre($_POST["nombre"]);
			$this->setcuit($_POST["cuit"]);
			$this->setdomicilio($_POST["domicilio"]);
			$this->settelefono($_POST["telefono"]);
			$this->seteMail($_POST["email"]);
			$this->setcontacto($_POST["contacto"]);

			$r=array(
				"apellidoNombre"=>$this->getapellidoNombre(),
				"cuit"=>$this->getcuit(),
				"domicilio"=>$this->getdomicilio(),
				"telefono"=>$this->gettelefono(),
				"eMail"=>$this->geteMail(),
				"contacto"=>$this->getcontacto()
				);
			
			$model=new clienteModelo();
			$model->guardarEdicion($r,$_POST["id"]);

			$this->listar();
		}
	}


	function ver(){
		$id=$_GET["id"];

		$model=new clienteModelo();
		$r=$model->buscarCliente($id);

		$this->vista->render("cliente/ver",$r);

	}

	function cargarLista(){
		$id=$_GET["id"];
		require_once("Controladores/listaPrecioControlador.php");
		$this->listaPrecio=new listaPrecioControlador();
		$reg=$this->listaPrecio->listar("cargar");

		$this->vista->render("cliente/cargarLista",$reg,null,$id);


	}

	function seleccionarLista(){
		$id=$_GET["id"];
		$cli=$_GET["c"];

		$model=new clienteModelo();
		$model->seleccionarLista($id,$cli);

		$this->listar();

	}





	//get y set
	function getapellidoNombre(){
		return $this->apellidoNombre; // this correjido como $this->
	}

	function setapellidoNombre($id){
		$this->apellidoNombre=$id;
	}

	function getcuit(){ 
		return $this->cuit;
	}
	function setcuit($cuit){  //faltan pones la variable temporal en el parentesis ejemplo ($cuit)
		$this->cuit=$cuit;	// y modificar los nombres ejemplo =$cuit
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

	function getListaPrecio($cliente){
		$model=new clienteModelo();
		return $model->getListaPrecio($cliente);
	}
	//fin get y set


	


}





 ?>