<h3>Listado de Articulos</h3>


<?php 

$f=new form();


echo "<h4>Buscar Articulo</h4>";
$f->iniciarForm("POST","articulo/listar","listarArticulo");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addSubmit("Buscar");
$f->finForm();

//Tabla ejemplo para prototipo de ventanas

$registro=array(
	array("descripcion"=>"Hojas A4"),
	array("descripcion"=>"Cajas para Archivos")

	);

$t=new tabla($registro);
$t->mostrarTabla();





 ?>