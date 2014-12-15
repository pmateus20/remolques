<?php 

$f=new form();

$f->iniciarForm("post","index.php?p=reciboSueldo/guardarLinea","guardarLinea");

$f->addLabel("Concepto");

echo ": ".$array["Descripcion"]."<br>";



$f->addLabel("Importe");
$f->addTextbox("precio");

$f->addHidden("codConcepto",$array["Codigo"]);
$f->addHidden("reciboSueldo",$dato1);


$f->addSubmit("Guardar");



$f->finForm();





 ?>