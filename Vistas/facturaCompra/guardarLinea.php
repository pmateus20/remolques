<?php 

$f=new form();

$f->iniciarForm("post","index.php?p=facturaCompra/guardarLinea","guardarLinea");

$f->addLabel("Articulo");

echo ": ".$array["Descripcion"]."<br>";

$f->addLabel("Cantidad");
$f->addTextbox("cantidad");


$f->addLabel("Precio");
$f->addTextbox("precio");

$f->addHidden("idArticulo",$array["Codigo"]);
$f->addHidden("facturaCompra",$dato1);


$f->addSubmit("Guardar");



$f->finForm();





 ?>