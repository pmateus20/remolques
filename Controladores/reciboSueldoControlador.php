<?php 


class reciboSueldoControlador extends Controlador{
	private $fecha;
	private $importe;
	private $DetalleReciboSueldo;
	private $empleado;

	function nueva(){
		$id=$_GET["id"];
		$this->vista->render("reciboSueldo/nuevo",null,null,$id);
	}

	function seleccionarEmpleado(){
		require_once("Controladores/empleadoControlador.php");
		$this->empleado=new empleadoControlador();
		$r=$this->empleado->listar("seleccionar");

		$this->vista->render("reciboSueldo/seleccionarEmpleado",$r);
	
	}


	function guardar(){
		if(isset($_POST["Guardar"])){
			$this->setfecha(date("Y-m-d",strtotime(str_replace("/","-", $_POST["fecha"]))));
			
			$e=new empleadoModelo();
			$emp=$e->calcularSueldo($_POST["empleado"]);
			$salario=$emp["salario"];

			$r=array(
				"numeroReciboSueldo"=>"null",
				"fecha"=>$this->getfecha(),
				"FK_legajo"=>$_POST["empleado"],
				"sueldo"=>$salario
				);
						
			$model=new reciboSueldoModelo();
			$model->nuevaReciboSueldo($r);
			$id=$model->lastId("ReciboSueldo","numeroReciboSueldo");


			$this->agregarLinea($id);
			
		}
	}

	function listarLineas($id){
		require_once("Controladores/detalleReciboSueldoControlador.php");
		$this->DetalleReciboSueldo=new detalleReciboSueldoControlador();
		return $this->DetalleReciboSueldo->listarLineas($id);
	}

	function agregarLinea($id){
		$l=$this->listarLineas($id);

		require_once("Controladores/detalleReciboSueldoControlador.php");
		$this->DetalleReciboSueldo=new detalleReciboSueldoControlador();
		$reg=$this->DetalleReciboSueldo->buscarConcepto($id);
		

		if($l!=null){
			$this->vista->render("reciboSueldo/agregarLinea",$reg,$l,$id);	
		}else{
			$this->vista->render("reciboSueldo/agregarLinea",$reg,null,$id);	
		}

	}



	function guardarLinea(){
		if(isset($_POST["Guardar"])){
			require_once("Controladores/detalleReciboSueldoControlador.php");
			$this->DetalleReciboSueldo=new detalleReciboSueldoControlador();
			$this->DetalleReciboSueldo->setimporte($_POST["precio"]);
			$this->DetalleReciboSueldo->setconcepto($_POST["codConcepto"]);
			$this->DetalleReciboSueldo->setreciboSueldo($_POST["reciboSueldo"]);

			$this->DetalleReciboSueldo->guardarLinea();

			$this->agregarLinea($_POST["reciboSueldo"]);
		}else{
			if(isset($_GET["s"])){
				$serv=$_GET["s"];
				$f=$_GET["f"];
					

				$e=$this->getempleado($f);
				$emp=new reciboSueldoModelo();
				$emp->getSalario($e);
								

				require_once("Controladores/detalleReciboSueldoControlador.php");
				$this->DetalleReciboSueldo=new detalleReciboSueldoControlador();
				$reg=$this->DetalleReciboSueldo->buscarConceptoId($serv);
				

				$this->vista->render("reciboSueldo/guardarLinea",$reg,$emp,$f);
			}
		}
	}

	function finalizarreciboSueldo(){
		$id=$_GET["id"];

		require_once("Controladores/detalleReciboSueldoControlador.php");
		$this->DetalleReciboSueldo=new detalleReciboSueldoControlador();
		$linea=$this->DetalleReciboSueldo->calcularTotal($id);

		$model=new reciboSueldoModelo();
		$model->finalizarreciboSueldo($linea["total"],$id);

		$this->seleccionarEmpleado();



	}

	function eliminarLinea(){
		$serv=$_GET["serv"];
		$f=$_GET["id"];		

		require_once("Controladores/detalleReciboSueldoControlador.php");
		$this->DetalleReciboSueldo=new detalleReciboSueldoControlador();
		$this->DetalleReciboSueldo->eliminarLinea($f,$serv);

		$this->agregarLinea($f);		

	}

	function listar(){
		$model=new reciboSueldoModelo();
		$r=$model->listar();

		$array=array();
		foreach ($r as $fila) {
			require_once("Controladores/empleadoControlador.php");
			$this->empleado=new empleadoControlador();
			$cli=$this->empleado->buscarEmpleado($fila["empleado"]);

			array_push($array, array(
				"codigo"=>$fila["codigo"],
				"empleado"=>$cli["nombre"],
				"fecha"=>date("d/m/Y",strtotime($fila["fecha"])),
				"importe"=>$fila["importe"]


				));
		}


		$this->vista->render("reciboSueldo/listar",$array);
	}

	function ver(){
		$id=$_GET["id"];

		$ls=$this->listarLineas($id);

		$model=new reciboSueldoModelo();
		$r=$model->buscarreciboSueldo($id);

		require_once("Controladores/empleadoControlador.php");
		$this->empleado=new empleadoControlador();
		$cli=$this->empleado->buscarEmpleado($r["empleado"]);

		

		$f=array(
			"numero"=>$r["codigo"],
			"empleado"=>$cli["nombre"],
			"fecha"=>date("d/m/Y",strtotime($r["fecha"])),
			"importe"=>$r["importe"]
			);



		$this->vista->render("reciboSueldo/ver",$f,$ls);




	}

	function eliminar(){
		$id=$_GET["id"];

		require_once("Controladores/detalleReciboSueldoControlador.php");
		$this->DetalleReciboSueldo=new detalleReciboSueldoControlador();
		$this->DetalleReciboSueldo->eliminarLinea($id);

		$model=new reciboSueldoModelo();
		$model->eliminarReciboSueldo($id);

		$this->listar();


	}












	//start get and set

	function getempleado($id){
		$model=new reciboSueldoModelo();
		return $model->getempleado($id);

	}

	function getfecha(){
		return $this->fecha;
	}
	function setfecha($fech){
		$this->fecha=$fech;
	}

	function getimporte(){
		return $this->importe;
	}
	function setimporte($imp){
		$this->importe=$imp;
	}


}










 ?>