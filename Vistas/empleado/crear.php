<h4>Nuevo Empleado</h4>

<?php 
$f=new form();

$f->iniciarForm("post","index.php?p=empleado/guardar","nuevoEmpleado");
$f->addLabel("Apellido y Nombre");
$f->addTextbox("nombre");
$f->addLabel("CUIL");
$f->addTextbox("cuil");
$f->addLabel("Domicilio");
$f->addTextbox("domicilio");
$f->addLabel("Fecha de Nacimiento");
$f->addTextbox("fechaNacimiento");
$f->addLabel("Fecha de Ingreso");
$f->addTextbox("fechaIngreso");
$f->addLabel("Telefono");
$f->addTextbox("telefono");
$f->addLabel("Codigo de Categoria");
$f->addCombo("codCategoria",$array);
$f->addSubmit("Guardar");
$f->finForm();


 ?>