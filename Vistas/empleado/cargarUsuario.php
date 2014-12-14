<h4>Cargar Usuario</h4>

<?php 
$f=new form();

$f->iniciarForm("post","index.php?p=empleado/guardarUsuario","guardarUsuario");
$f->addHidden("id",$dato1);
$f->addLabel("Usuario");
$f->addTextbox("usuario");
$f->addLabel("Password");
$f->addPassword("password");
$f->addLabel("Repetir Password");
$f->addPassword("password2");


$f->addSubmit("Guardar");
$f->finForm();


 ?>