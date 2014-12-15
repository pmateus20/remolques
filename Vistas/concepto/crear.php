<h3>Nuevo Concepto</h3>
<?php 	

$f=new form();


$f->iniciarForm("post","index.php?p=concepto/guardar","nuevoConcepto");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addLabel("Tipo");
$f->addCombo("tipo",array("Haber"=>"D","Deduccion"=>"H"));
$f->addSubmit("Guardar");
$f->finForm();

 ?>