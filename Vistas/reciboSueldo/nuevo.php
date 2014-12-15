<?php 

$f=new form();

$f->iniciarForm("POST","index.php?p=reciboSueldo/guardar","reciboSueldo");

$f->addLabel("Fecha");
$f->addTextbox("fecha",null,10);


$f->addHidden("empleado",$dato1);



$f->addSubmit("Guardar");


$f->finForm();




















 ?>