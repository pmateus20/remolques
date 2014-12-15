<?php 

$f=new form();

$f->iniciarForm("POST","index.php?p=reciboSueldo/guardar","reciboSueldo");

$f->addLabel("Fecha");
$f->addTextbox("fecha");


$f->addHidden("empleado",$dato1);



$f->addSubmit("Guardar");


$f->finForm();




















 ?>