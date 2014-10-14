<h3>Listado de Proveedores</h3>


<?php 

$f=new form();


echo "<h4>Buscar Proveedor</h4>";
$f->iniciarForm("POST","proveedor/listar","listarProveedor");
$f->addLabel("Apellido y Nombre o Razon Social");
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