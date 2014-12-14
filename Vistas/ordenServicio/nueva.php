
<?php 

$f=new form();

$f->iniciarForm("POST","index.php?p=ordenServicio/guardar","ordenServicio");

$f->addHidden("cliente",$dato1);
$f->addLabel("Fecha");
$f->addTextbox("fecha");
$f->addLabel("Numero de Servicio Externo");
$f->addTextbox("numeroServicioExterno");
$f->addLabel("Titular");
$f->addTextbox("titular");
$f->addLabel("Dominio");
$f->addTextbox("dominio");
$f->addLabel("Descripcion");
$f->addArea("3","descripcion");	

$f->addSubmit("Guardar");


$f->finForm();







 ?>