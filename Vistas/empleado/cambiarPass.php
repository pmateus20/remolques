<h4>Cambiar Password</h4>

<?php 
$f=new form();

$f->iniciarForm("post","index.php?p=empleado/guardarPass","guardarPass");
$f->addHidden("id",$dato1);

$f->addLabel("Password");
$f->addPassword("password");
$f->addLabel("Repetir Password");
$f->addPassword("password2");


$f->addSubmit("Guardar");
$f->finForm();


 ?>