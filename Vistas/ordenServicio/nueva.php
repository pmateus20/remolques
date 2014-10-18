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
$f->addArea("3","descripcion");	
$f->addBoton("Aregrar Linea");

$datos=array(
	array("Codigo"=>"1","Descripcion"=>"Km Recorridos Asflato","Cantidad"=>"200","Importe"=>"800"),
	array("Codigo"=>"2","Descripcion"=>"Movida","Cantidad"=>"1","Importe"=>"80")
	);

$t=new tabla($datos);

$t->mostrarTabla();

//los hidden se generan al rellenar la tabla
$f->addHidden("codigo","1");
$f->addHidden("cantidad","200");
$f->addHidden("importe","800");
$f->addHidden("codigo","2");
$f->addHidden("cantidad","1");
$f->addHidden("importe","80");

$f->addSubmit("Guardar");


$f->finForm();







 ?>