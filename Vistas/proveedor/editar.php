<h3>Editar Proveedor</h3>
<?php 	

$f=new form();




$a=$array;
$f->iniciarForm("post","index.php?p=proveedor/guardarEdicion","editarProveedor");	
$f->addHidden("id",$a["codigo"]);

$f->addLabel("Apellido y Nombre o Razon Social");
$f->addTextbox("nombre",$a["nombre"]);
$f->addLabel("CUIT");
$f->addTextbox("cuit",$a["cuit"]);
$f->addLabel("Domicilio");
$f->addTextbox("domicilio",$a["domicilio"]);
$f->addLabel("Telefono");
$f->addTextbox("telefono",$a["telefono"]);
$f->addLabel("E-MAIL");
$f->addTextbox("email",$a["email"]);
$f->addLabel("Contacto");
$f->addTextbox("contacto",$a["contacto"]);
$f->addSubmit("Guardar");

$f->finForm();




 ?>