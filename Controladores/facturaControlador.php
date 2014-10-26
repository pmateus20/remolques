<?php 


class facturaControlador extends controlador{

	function nueva(){
		$this->vista->render("factura/nueva");
	}

	function facturarOrdenes(){
		$this->vista->render("factura/facturarOrdenes");
	}
}











 ?>