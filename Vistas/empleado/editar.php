<h4>Editar Empleado</h4>

<?php 
$f=new form();

$a=$array;
$f->iniciarForm("post","index.php?p=empleado/guardarEdicion","editarEmpleado");	
$f->addHidden("id",$a["codigo"]);

$f->addLabel("Apellido y Nombre");
$f->addTextbox("nombre",$a["nombre"]);
$f->addLabel("CUIL");
$f->addTextbox("cuil",$a["cuil"],11);
$f->addLabel("Domicilio");
$f->addTextbox("domicilio",$a["direccion"]);
$f->addLabel("Fecha de Nacimiento");
$f->addTextbox("fechaNacimiento",$a["fechaNacimiento"],10);
$f->addLabel("Fecha de Ingreso");
$f->addTextbox("fechaIngreso",$a["fechaIngreso"],10);
$f->addLabel("Telefono");
$f->addTextbox("telefono",$a["telefono"]);
$f->addLabel("Codigo de Categoria");
$f->addCombo("codCategoria",$array2,$a["categoria"]);
$f->addSubmit("Guardar");
$f->finForm();


 ?>