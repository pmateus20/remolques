<?php 

$f=new form();

$f->iniciarForm("POST","factura/nueva","factura");

$f->addLabel("Fecha");
$f->addTextbox("fecha");
$f->addLabel("Punto de Venta");
$f->addTextbox("ptoVenta");
$f->addLabel("Numero");
$f->addTextbox("numero");
$f->addLabel("Cliente");
$f->addTextbox("cliente");
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

$f->addLabel("Subtotal");
$f->addTextbox("subtotal");
$f->addLabel("IVA");
$f->addTextbox("iva");
$f->addLabel("Total");
$f->addTextbox("total");

$f->addSubmit("Guardar");


$f->finForm();


























 ?>