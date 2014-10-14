<h3>Listado de Empleados</h3>


<?php 

$f=new form();


echo "<h4>Buscar Empleado</h4>";
$f->iniciarForm("POST","empleado/listar","listarEmpleado");
$f->addLabel("Apellido y Nombre");
$f->addTextbox("nombre");
$f->addSubmit("Buscar");
$f->finForm();

//Tabla ejemplo para prototipo de ventanas

$registro=array(
	array("nombre"=>"Pascual Matias", "cuit"=>"20-32152732-9", "domicilio"=>"Santa Fe 1519"),
	array("nombre"=>"Pascual Matias", "cuit"=>"20-32152732-9", "domicilio"=>"Santa Fe 1519"),
	array("nombre"=>"Pascual Matias", "cuit"=>"20-32152732-9", "domicilio"=>"Santa Fe 1519"),
	array("nombre"=>"Pascual Matias", "cuit"=>"20-32152732-9", "domicilio"=>"Santa Fe 1519"),
	array("nombre"=>"Pascual Matias", "cuit"=>"20-32152732-9", "domicilio"=>"Santa Fe 1519")

	);

$t=new tabla($registro);
$t->mostrarTabla();





 ?>