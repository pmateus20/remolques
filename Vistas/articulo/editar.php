<h3>Editar Articulo</h3>
<?php 	

$f=new form();




$a=$array;
$f->iniciarForm("post","index.php?p=articulo/guardarEdicion","editarArticulo");	
$f->addHidden("id",$a["Codigo"]);

$f->addLabel("Descripcion");
$f->addTextbox("descripcion",$a["Descripcion"]);

$f->addSubmit("Guardar");

$f->finForm();




 ?>