<h3>Editar Servicio</h3>
<?php 	

$f=new form();




$a=$array;
$f->iniciarForm("post","index.php?p=servicio/guardarEdicion","editarServicio");	
$f->addHidden("id",$a["Codigo"]);

$f->addLabel("Descripcion");
$f->addTextbox("descripcion",$a["Descripcion"]);

$f->addSubmit("Guardar");

$f->finForm();




 ?>