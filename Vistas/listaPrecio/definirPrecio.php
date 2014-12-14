<?php 

$f=new form();

$f->iniciarForm("post","index.php?p=listaPrecio/definirPrecio","definirPrecio");

$f->addLabel("Servicio");

echo ": ".$array["idServicio"]."<br>";

$f->addLabel("Precio");


$f->addTextbox("precio");


$f->addSubmit("Guardar");

$f->addHidden("idServicio",$array["idServicio"]);
$f->addHidden("listaPrecio",$array["listaPrecio"]);


$f->finForm();





 ?>