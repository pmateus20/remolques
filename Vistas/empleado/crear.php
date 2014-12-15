<h4>Nuevo Empleado</h4>

<?php 
$f=new form();

$f->iniciarForm("post","index.php?p=empleado/guardar","nuevoEmpleado");
$f->addLabel("Apellido y Nombre");
$f->addTextbox("nombre");
$f->addLabel("CUIL");
$f->addTextbox("cuil",null,11);
$f->addLabel("Domicilio");
$f->addTextbox("domicilio");
$f->addLabel("Fecha de Nacimiento");
$f->addTextbox("fechaNacimiento",null,10);
$f->addLabel("Fecha de Ingreso");
$f->addTextbox("fechaIngreso",null,10);
$f->addLabel("Telefono");
$f->addTextbox("telefono");
$f->addLabel("Codigo de Categoria");
$f->addCombo("codCategoria",$array);
$f->addSubmit("Guardar");
$f->finForm();


 ?>