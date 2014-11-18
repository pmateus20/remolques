<h3>Listado de Categoria</h3>


<?php 

$f=new form();


echo "<h4>Buscar Categoria</h4>";
$f->iniciarForm("POST","categoria/listar","listarCategoria");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addLabel("Salario");
$f->addTextbox("salario");

$f->addSubmit("Buscar");
$f->finForm();

//Tabla ejemplo para prototipo de ventanas

$registro=array(
	array("descripcion"=>"Ejecutivo", "salario"=>"$123456"),
	array("descripcion"=>"Chofer", "salario"=>"$1234")

	);

$t=new tabla($registro);
$t->mostrarTabla();



 ?>