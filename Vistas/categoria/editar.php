<h3>Editar Categoria</h3>
<?php 	

$f=new form();


$a=$array;
$f->iniciarForm("post","index.php?p=categoria/guardarEdicion","editarCategoria");	
$f->addHidden("id",$a["codigo"]);

$f->addLabel("Descripcion");
$f->addTextbox("descripcion",$a["descripcion"]);
$f->addLabel("Salario");
$f->addTextbox("salario",$a["salario"]);
$f->addSubmit("Guardar");
$f->finForm();

 ?>