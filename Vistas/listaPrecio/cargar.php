<?php 

$f=new form();

$f->iniciarForm("post","index.php?p=listaPrecio/guardar","lastaPrecio");

$f->addLabel("Lista de Precio");

$f->addTextbox("listaPrecio");


$f->addSubmit("Siguiente");


$f->finForm();











 ?>