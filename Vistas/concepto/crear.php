<h3>Nuevo Concepto</h3>
<?php 	

$f=new form();


$f->iniciarForm("post","concepto/crear","nuevoConcepto");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addLabel("Tipo");
$f->addTextbox("tipo");
$f->addSubmit("Guardar");
$f->finForm();

 ?>