<?php 

$f=new form();

$f->iniciarForm("POST","ordenServicio","factura");

$f->addLabel("Fecha");
$f->addTextbox("fecha");
$f->addLabel("Numero de Servicio Externo");
$f->addTextbox("numeroServicioExterno");
$f->addLabel("Cliente");
$f->addTextbox("cliente");
$f->addLabel("Titular");
$f->addTextbox("titular");
$f->addLabel("Dominio");
$f->addTextbox("dominio");
$f->addLabel("Descripcion");
//Hacer funcion para text area
//Hacer funcion para boton
//Hacer funcion para hiden (static)
$datos=array(
	array("Codigo"=>"1","Descripcion"=>"Km Recorridos Asflato","Cantidad"=>"200","Importe"=>"800"),
	array("Codigo"=>"2","Descripcion"=>"Movida","Cantidad"=>"1","Importe"=>"80")
	);

$t=new tabla($datos);

$t->mostrarTabla();


$f->addSubmit("Guardar");


$f->finForm();







 ?>