<h3>Nuevo Articulo</h3>
<?php 	

$f=new form();


$f->iniciarForm("post","index.php?p=articulo/guardar","nuevoArticulo");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addSubmit("Guardar");
$f->finForm();

 ?>