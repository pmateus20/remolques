<h3>Editar Concepto</h3>
<?php 	

$f=new form();




$a=$array;
$f->iniciarForm("post","index.php?p=concepto/guardarEdicion","editarConcepto");	
$f->addHidden("id",$a["Codigo"]);

$f->addLabel("Descripcion");
$f->addTextbox("descripcion",$a["Descripcion"]);
$f->addLabel("Tipo");
$f->addCombo("tipo",array("Haber"=>"D","Deduccion"=>"H"),$a["Tipo"]);

$f->addSubmit("Guardar");

$f->finForm();




 ?>