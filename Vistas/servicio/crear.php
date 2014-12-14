<h3>Nuevo Servicio</h3>
<?php 	

$f=new form();


$f->iniciarForm("post","index.php?p=servicio/guardar","nuevoServicio");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addSubmit("Guardar");
$f->finForm();

 ?>