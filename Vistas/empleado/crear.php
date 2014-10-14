<h4>Nuevo Empleado</h4>

<?php 
$f=new form();

$f->iniciarForm("post","empleado/crear","nuevoEmpleado");
$f->addLabel("Apellido y Nombre");
$f->addTextbox("nombre");
$f->addLabel("CUIT");
$f->addTextbox("cuit");
$f->addLabel("Domicilio");
$f->addTextbox("domcilio");
$f->addLabel("Fecha de Nacimiento");
$f->addTextbox("fechaNacimiento");
$f->addLabel("Fecha de Ingreso");
$f->addTextbox("fechaIngreso");
$f->addLabel("Telefono");
$f->addTextbox("telefono");
$f->addLabel("Codigo de Categoria");
$f->addTextbox("codCategoria");
$f->addSubmit("Guardar");
$f->finForm();


 ?>