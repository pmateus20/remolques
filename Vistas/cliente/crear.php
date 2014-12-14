<h3>Nuevo Cliente</h3>
<?php 	

$f=new form();





$f->iniciarForm("post","index.php?p=cliente/guardar","nuevoCliente");	
$f->addLabel("Apellido y Nombre o Razon Social");
$f->addTextbox("nombre");
$f->addLabel("CUIT");
$f->addTextbox("cuit");
$f->addLabel("Domicilio");
$f->addTextbox("domicilio");
$f->addLabel("Telefono");
$f->addTextbox("telefono");
$f->addLabel("E-MAIL");
$f->addTextbox("email");
$f->addLabel("Contacto");
$f->addTextbox("contacto");
$f->addSubmit("Guardar");

$f->finForm();




 ?>