<?php 

$f=new form();

$f->iniciarForm("post","index.php?p=factura/guardarLinea","guardarLinea");

$f->addLabel("Servicio");

echo ": ".$array["Descripcion"]."<br>";

$f->addLabel("Cantidad");
$f->addTextbox("cantidad");


$f->addLabel("Precio");
$f->addTextbox("precio",$array["Precio"]);

$f->addHidden("idServicio",$array["Codigo"]);
$f->addHidden("factura",$dato1);


$f->addSubmit("Guardar");



$f->finForm();





 ?>