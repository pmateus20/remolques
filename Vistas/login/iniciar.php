<?php 

$f=new form();

$f->iniciarForm("POST","index.php?p=login/login","Login");

if(isset($dato1)){
	echo "<h4>".$dato1."</h4>";
}

$f->addLabel("Usuario");
$f->addTextbox("usuario");
$f->addLabel("Password");
$f->addPassword("password");

$f->addSubmit("Login");


$f->finForm();







 ?>