<?php 


class facturaControlador extends controlador{
	private $numero;
	private $tipo;
	private $fecha;
	private $puntoVenta;
	private $importe;
	private $lineaFactura;
	private $cliente;


	function nueva(){
		$id=$_GET["id"];
		$this->vista->render("factura/nueva",null,null,$id);
	}

	function seleccionarCliente(){
		require_once("Controladores/clienteControlador.php");
		$this->cliente=new clienteControlador();
		$r=$this->cliente->listar("seleccionar");

		$this->vista->render("factura/seleccionarCliente",$r);
	
	}


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setnumero($_POST["numero"]);
			$this->settipo($_POST["tipo"]);
			$this->setfecha(date("Y-m-d",strtotime(str_replace("/","-", $_POST["fecha"]))));
			$this->setpuntoVenta($_POST["ptoVenta"]);
		
			$r=array(
				"idFactura"=>"null",
				"numero"=>$this->getnumero(),
				"fecha"=>$this->getfecha(),
				"tipo"=>$this->gettipo(),
				"puntoVenta"=>$this->getpuntoVenta(),
				"FK_idCliente"=>$_POST["cliente"],
				"FK_legajo"=>$_SESSION["empleado"]
				);
						
			$model=new facturaModelo();
			$model->nuevaFactura($r);
			$id=$model->lastId("Factura","idFactura");


			$this->agregarLinea($id);
			
		}
	}

	function listarLineas($id){
		require_once("Controladores/lineaFacturaControlador.php");
		$this->lineaFactura=new lineaFacturaControlador();
		return $this->lineaFactura->listarLineas($id);
	}

	function agregarLinea($id){
		$l=$this->listarLineas($id);

		require_once("Controladores/lineaFacturaControlador.php");
		$this->lineaFactura=new lineaFacturaControlador();
		$reg=$this->lineaFactura->buscarServicio($id);
		

		if($l!=null){
			$this->vista->render("factura/agregarLinea",$reg,$l,$id);	
		}else{
			$this->vista->render("factura/agregarLinea",$reg,null,$id);	
		}

	}



	function guardarLinea(){
		if(isset($_POST["Guardar"])){
			require_once("Controladores/lineaFacturaControlador.php");
			$this->lineaFactura=new lineaFacturaControlador();
			$this->lineaFactura->setcantidad($_POST["cantidad"]);
			$this->lineaFactura->setimporte($_POST["precio"]);
			$this->lineaFactura->setservicio($_POST["idServicio"]);
			$this->lineaFactura->setfactura($_POST["factura"]);

			$this->lineaFactura->guardarLinea();

			$this->agregarLinea($_POST["factura"]);
		}else{
			if(isset($_GET["s"])){
				$serv=$_GET["s"];
				$f=$_GET["f"];
					

				$cli=$this->getcliente($f);
				require_once("Controladores/clienteControlador.php");
				$this->cliente=new clienteControlador();
				$lp=$this->cliente->getListaPrecio($cli);
				

				require_once("Controladores/lineaFacturaControlador.php");
				$this->lineaFactura=new lineaFacturaControlador();
				$reg=$this->lineaFactura->buscarServicioValorizado($serv,$lp);


				$this->vista->render("factura/guardarLinea",$reg,null,$f);
			}
		}
	}

	function finalizarFactura(){
		$id=$_GET["id"];

		require_once("Controladores/lineaFacturaControlador.php");
		$this->lineaFactura=new lineaFacturaControlador();
		$linea=$this->lineaFactura->calcularTotal($id);

		$model=new facturaModelo();
		$model->finalizarFactura($linea["total"],$id);

		$this->seleccionarCliente();



	}

	function eliminarLinea(){
		$serv=$_GET["serv"];
		$f=$_GET["id"];		

		require_once("Controladores/lineaFacturaControlador.php");
		$this->lineaFactura=new lineaFacturaControlador();
		$this->lineaFactura->eliminarLinea($f,$serv);

		$this->agregarLinea($f);		

	}

	function listar(){
		$model=new facturaModelo();
		$r=$model->listar();

		$array=array();
		foreach ($r as $fila) {
			require_once("Controladores/clienteControlador.php");
			$this->cliente=new clienteControlador();
			$cli=$this->cliente->buscarCliente($fila["cliente"]);

			



			array_push($array, array(
				"codigo"=>$fila["codigo"],
				"numero"=>$fila["numero"],
				"cliente"=>$cli["nombre"],
				"fecha"=>date("d/m/Y",strtotime($fila["fecha"])),
				"importe"=>$fila["importe"]


				));
		}


		$this->vista->render("factura/listar",$array);
	}

	function ver(){
		$id=$_GET["id"];

		$ls=$this->listarLineas($id);

		$model=new facturaModelo();
		$r=$model->buscarFactura($id);

		require_once("Controladores/clienteControlador.php");
		$this->cliente=new clienteControlador();
		$cli=$this->cliente->buscarCliente($r["cliente"]);

		

		$f=array(
			"codigo"=>$r["codigo"],
			"numero"=>$r["numero"],
			"cliente"=>$cli["nombre"],
			"fecha"=>date("d/m/Y",strtotime($r["fecha"])),
			"tipo"=>$r["tipo"],
			"puntoVenta"=>$r["puntoVenta"],
			"importe"=>$r["importe"]
			);



		$this->vista->render("factura/ver",$f,$ls);




	}

	function eliminar(){
		$id=$_GET["id"];

		require_once("Controladores/lineaFacturaControlador.php");
		$this->lineaFactura=new lineaFacturaControlador();
		$this->lineaFactura->eliminarLinea($id);

		$model=new facturaModelo();
		$model->eliminarFactura($id);

		$this->listar();


	}




	
























	//start get and set

	function getcliente($id){
		$model=new facturaModelo();
		return $model->getCliente($id);

	}


	function getnumero(){
		return $this->numero;
	}
	function setnumero($nro){
		$this->numero=$nro;
	}

	function gettipo(){
		return $this->tipo;
	}
	function settipo($tipo){
		$this->tipo=$tipo;
	}

	function getfecha(){
		return $this->fecha;
	}
	function setfecha($fech){
		$this->fecha=$fech;
	}

	function getpuntoVenta(){
		return $this->puntoVenta;
	}
	function setpuntoVenta($ptoVta){
		$this->puntoVenta=$ptoVta;
	}

	function getimporte(){
		return $this->importe;
	}
	function setimporte($imp){
		$this->importe=$imp;
	}
	//end get and set

	
}











 ?>