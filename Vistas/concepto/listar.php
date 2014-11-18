<h3>Listado de Concepto</h3>


<?php 

$f=new form();


echo "<h4>Buscar Concepto</h4>";
$f->iniciarForm("POST","concepto/listar","listarConcepto");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addLabel("Tipo");
$f->addTextbox("tipo");

$f->addSubmit("Buscar");
$f->finForm();

//Tabla ejemplo para prototipo de ventanas

$registro=array(
	array("descripcion"=>"Sueldo", "tipo"=>"Mensual"),
	array("descripcion"=>"Aguinaldo", "tipo"=>"Semestral")

	);

$t=new tabla($registro);
$t->mostrarTabla();



 ?>