<h3>Nuevo Servicio</h3>
<?php 	

$f=new form();


$f->iniciarForm("post","servicio/crear","nuevoServicio");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addSubmit("Guardar");
$f->finForm();

 ?>