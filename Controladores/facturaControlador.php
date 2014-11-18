<?php 


class facturaControlador extends controlador{

	function nueva(){
		$this->vista->render("factura/nueva");
	}

	function facturarOrdenes(){
		if(!isset($_POST["Facturar"])){
			$this->vista->render("factura/facturarOrdenes");
		}else{
			$this->vista->render("factura/nueva");		
		}
	}
}











 ?>