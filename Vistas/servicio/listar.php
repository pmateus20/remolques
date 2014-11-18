<h3>Listado de Servicios</h3>


<?php 

$f=new form();


echo "<h4>Buscar Servicio</h4>";
$f->iniciarForm("POST","servicio/listar","listarServicio");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");

$f->addSubmit("Buscar");
$f->finForm();

//Tabla ejemplo para prototipo de ventanas

$registro=array(
	array("descripcion"=>"grua"),
	array("descripcion"=>"traslado")

	);

$t=new tabla($registro);
$t->mostrarTabla();



 ?>