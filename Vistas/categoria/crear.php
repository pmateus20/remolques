<h3>Nueva Categoria</h3>
<?php 	

$f=new form();


$f->iniciarForm("post","index.php?p=categoria/guardar","nuevoCategoria");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addLabel("Salario");
$f->addTextbox("salario");
$f->addSubmit("Guardar");
$f->finForm();

 ?>