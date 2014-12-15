<?php 

class facturaCompraControlador extends Controlador{
	private $fecha;
	private $tipo;
	private $puntoDeVenta;
	private $numero;
	private $importe;
	private $lineaFacturaCompra;
	private $proveedor;

	function nueva(){
		$id=$_GET["id"];
		$this->vista->render("facturaCompra/nueva",null,null,$id);
	}

	function seleccionarProveedor(){
		require_once("Controladores/proveedorControlador.php");
		$this->proveedor=new proveedorControlador();
		$r=$this->proveedor->listar("seleccionar");

		$this->vista->render("facturaCompra/seleccionarProveedor",$r);
	
	}


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setnumero($_POST["numero"]);
			$this->settipo($_POST["tipo"]);
			$this->setfecha(date("Y-m-d",strtotime(str_replace("/","-", $_POST["fecha"]))));
			$this->setpuntoDeVenta($_POST["ptoVenta"]);
		
			$r=array(
				"idFacturaCompra"=>"null",
				"numero"=>$this->getnumero(),
				"fecha"=>$this->getfecha(),
				"tipo"=>$this->gettipo(),
				"puntoDeVenta"=>$this->getpuntoDeVenta(),
				"FK_idproveedor"=>$_POST["proveedor"],
				"FK_legajo"=>$_SESSION["empleado"]
				);
						
			$model=new facturaCompraModelo();
			$model->nuevaFacturaCompra($r);
			$id=$model->lastId("FacturaCompra","idFacturaCompra");


			$this->agregarLinea($id);
			
		}
	}

	function listarLineas($id){
		require_once("Controladores/lineaFacturaCompraControlador.php");
		$this->lineaFacturaCompra=new lineaFacturaCompraControlador();
		return $this->lineaFacturaCompra->listarLineas($id);
	}

	function agregarLinea($id){
		$l=$this->listarLineas($id);

		require_once("Controladores/lineaFacturaCompraControlador.php");
		$this->lineaFacturaCompra=new lineaFacturaCompraControlador();
		$reg=$this->lineaFacturaCompra->buscarArticulo($id);
		

		if($l!=null){
			$this->vista->render("facturaCompra/agregarLinea",$reg,$l,$id);	
		}else{
			$this->vista->render("facturaCompra/agregarLinea",$reg,null,$id);	
		}

	}



	function guardarLinea(){
		if(isset($_POST["Guardar"])){
			require_once("Controladores/lineaFacturaCompraControlador.php");
			$this->lineaFacturaCompra=new lineaFacturaCompraControlador();
			$this->lineaFacturaCompra->setcantidad($_POST["cantidad"]);
			$this->lineaFacturaCompra->setimporte($_POST["precio"]);
			$this->lineaFacturaCompra->setArticulo($_POST["idArticulo"]);
			$this->lineaFacturaCompra->setfacturaCompra($_POST["facturaCompra"]);

			$this->lineaFacturaCompra->guardarLinea();

			$this->agregarLinea($_POST["facturaCompra"]);
		}else{
			if(isset($_GET["s"])){
				$serv=$_GET["s"];
				$f=$_GET["f"];
					

				$cli=$this->getProveedor($f);
								

				require_once("Controladores/lineaFacturaCompraControlador.php");
				$this->lineaFacturaCompra=new lineaFacturaCompraControlador();
				$reg=$this->lineaFacturaCompra->buscarArticuloId($serv);
				

				$this->vista->render("facturaCompra/guardarLinea",$reg,null,$f);
			}
		}
	}

	function finalizarfacturaCompra(){
		$id=$_GET["id"];

		require_once("Controladores/lineafacturaCompraControlador.php");
		$this->lineafacturaCompra=new lineafacturaCompraControlador();
		$linea=$this->lineafacturaCompra->calcularTotal($id);

		$model=new facturaCompraModelo();
		$model->finalizarFacturaCompra($linea["total"],$id);

		$this->seleccionarProveedor();



	}

	function eliminarLinea(){
		$serv=$_GET["serv"];
		$f=$_GET["id"];		

		require_once("Controladores/lineafacturaCompraControlador.php");
		$this->lineafacturaCompra=new lineafacturaCompraControlador();
		$this->lineafacturaCompra->eliminarLinea($f,$serv);

		$this->agregarLinea($f);		

	}

	function listar(){
		$model=new facturaCompraModelo();
		$r=$model->listar();

		$array=array();
		foreach ($r as $fila) {
			require_once("Controladores/proveedorControlador.php");
			$this->proveedor=new proveedorControlador();
			$cli=$this->proveedor->buscarProveedor($fila["proveedor"]);

			



			array_push($array, array(
				"codigo"=>$fila["codigo"],
				"numero"=>$fila["numero"],
				"proveedor"=>$cli["nombre"],
				"fecha"=>date("d/m/Y",strtotime($fila["fecha"])),
				"importe"=>$fila["importe"]


				));
		}


		$this->vista->render("facturaCompra/listar",$array);
	}

	function ver(){
		$id=$_GET["id"];

		$ls=$this->listarLineas($id);

		$model=new facturaCompraModelo();
		$r=$model->buscarFacturaCompra($id);

		require_once("Controladores/proveedorControlador.php");
		$this->proveedor=new proveedorControlador();
		$cli=$this->proveedor->buscarProveedor($r["proveedor"]);

		

		$f=array(
			"codigo"=>$r["codigo"],
			"numero"=>$r["numero"],
			"proveedor"=>$cli["nombre"],
			"fecha"=>date("d/m/Y",strtotime($r["fecha"])),
			"tipo"=>$r["tipo"],
			"puntoVenta"=>$r["puntoVenta"],
			"importe"=>$r["importe"]
			);



		$this->vista->render("facturaCompra/ver",$f,$ls);




	}

	function eliminar(){
		$id=$_GET["id"];

		require_once("Controladores/lineaFacturaCompraControlador.php");
		$this->lineaFacturaCompra=new lineaFacturaCompraControlador();
		$this->lineaFacturaCompra->eliminarLinea($id);

		$model=new facturaCompraModelo();
		$model->eliminarFacturaCompra($id);

		$this->listar();


	}





	//start get and set

	function getproveedor($id){
		$model=new facturaCompraModelo();
		return $model->getproveedor($id);

	}

	function getfecha(){
		return $this->fecha;
	}
	function setfecha($fech){
		$this->fecha=$fech;
	}

	function gettipo(){
		return $this->tipo;
	}
	function settipo($tipo){
		$this->tipo=$tipo;
	}

	function getpuntoDeVenta(){
		return $this->puntoDeVenta;
	}
	function setpuntoDeVenta($ptoVta){
		$this->puntoDeVenta=$ptoVta;
	}

	function getnumero(){
		return $this->numero;
	}
	function setnumero($num){
		$this->numero=$num;
	}

	function getimporte(){
		return $this->importe;
	}
	function setimporte($imp){
		$this->importe=$imp;
	}





}
















 ?>