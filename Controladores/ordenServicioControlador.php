<?php 	

class ordenServicioControlador extends controlador {
	private $numeroServExterno;
	private $fecha;
	private $titular;
	private $dominio;
	private $descripcion;
	private $cliente;
	private $lineaOrdenServicio;


	function nueva(){
		$id=$_GET["id"];
		$this->vista->render("ordenServicio/nueva",null,null,$id);
	}

	function seleccionarCliente(){
		require_once("Controladores/clienteControlador.php");
		$this->cliente=new clienteControlador();
		$r=$this->cliente->listar("seleccionar");

		$this->vista->render("ordenServicio/seleccionarCliente",$r);
	
	}


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setnumeroServExterno($_POST["numeroServicioExterno"]);
			$this->setfecha(date("Y-m-d",strtotime(str_replace("/","-", $_POST["fecha"]))));
			$this->settitular($_POST["titular"]);
			$this->setdominio($_POST["dominio"]);
			$this->setdescripcion($_POST["descripcion"]);
		
			$r=array(
				"idordenServicio"=>"null",
				"numeroServExterno"=>$this->getnumeroServExterno(),
				"fecha"=>$this->getfecha(),
				"titular"=>$this->gettitular(),
				"dominio"=>$this->getdominio(),
				"descripcion"=>$this->getdescripcion(),
				"FK_idCliente"=>$_POST["cliente"],
				"FK_legajo"=>1
				);
						
			$model=new ordenServicioModelo();
			$model->nuevaOrdenServicio($r);
			$id=$model->lastId("OrdenServicio","idOrdenServicio");


			$this->agregarLinea($id);
			
		}
	}

	function listarLineas($id){
		require_once("Controladores/lineaOrdenServicioControlador.php");
		$this->lineaOrdenServicio=new lineaOrdenServicioControlador();
		return $this->lineaOrdenServicio->listarLineas($id);
	}

	function agregarLinea($id){
		$l=$this->listarLineas($id);

		require_once("Controladores/lineaOrdenServicioControlador.php");
		$this->lineaOrdenServicio=new lineaOrdenServicioControlador();
		$reg=$this->lineaOrdenServicio->buscarServicio($id);
		

		if($l!=null){
			$this->vista->render("ordenServicio/agregarLinea",$reg,$l,$id);	
		}else{
			$this->vista->render("ordenServicio/agregarLinea",$reg,null,$id);	
		}

	}



	function guardarLinea(){
		if(isset($_POST["Guardar"])){
			require_once("Controladores/lineaOrdenServicioControlador.php");
			$this->lineaOrdenServicio=new lineaOrdenServicioControlador();
			$this->lineaOrdenServicio->setcantidad($_POST["precio"]);
			$this->lineaOrdenServicio->setimporte($_POST["cantidad"]);
			$this->lineaOrdenServicio->setservicio($_POST["idServicio"]);
			$this->lineaOrdenServicio->setordenServicio($_POST["ordenServicio"]);

			$this->lineaOrdenServicio->guardarLinea();

			$this->agregarLinea($_POST["ordenServicio"]);
		}else{
			if(isset($_GET["s"])){
				$serv=$_GET["s"];
				$os=$_GET["o"];
					

				$cli=$this->getcliente($os);
				require_once("Controladores/clienteControlador.php");
				$this->cliente=new clienteControlador();
				$lp=$this->cliente->getListaPrecio($cli);


				require_once("Controladores/lineaOrdenServicioControlador.php");
				$this->lineaOrdenServicio=new lineaOrdenServicioControlador();
				$reg=$this->lineaOrdenServicio->buscarServicioValorizado($serv,$lp);


				$this->vista->render("ordenServicio/guardarLinea",$reg,null,$os);
			}
		}
	}

	function eliminarLinea(){
		$serv=$_GET["serv"];
		$os=$_GET["id"];		

		require_once("Controladores/lineaOrdenServicioControlador.php");
		$this->lineaOrdenServicio=new lineaOrdenServicioControlador();
		$this->lineaOrdenServicio->eliminarLinea($os,$serv);

		$this->agregarLinea($os);		

	}








	//start get and set
	function getcliente($id){
		$model=new ordenServicioModelo();
		return $model->getCliente($id);

	}
	function getnumeroServExterno(){
		return $this->numeroServExterno;
	}
	function setnumeroServExterno($nse){
		$this->numeroServExterno=$nse;
	}

	function getfecha(){
		return $this->fecha;
	}
	function setfecha($fech){
		$this->fecha=$fech;
	}

	function gettitular(){
		return $this->titular;
	}
	function settitular($tit){
		$this->titular=$tit;
	}

	function getdominio(){
		return $this->dominio;
	}
	function setdominio($dom){
		$this->dominio=$dom;
	}

	function getdescripcion(){
		return $this->descripcion;
	}
	function setdescripcion($descrip){
		$this->descripcion=$descrip;
	}






}



















 ?>