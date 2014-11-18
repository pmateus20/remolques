<h3>Nuevo Articulo</h3>
<?php 	

$f=new form();


$f->iniciarForm("post","articulo/crear","nuevoArticulo");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addSubmit("Guardar");
$f->finForm();

 ?>