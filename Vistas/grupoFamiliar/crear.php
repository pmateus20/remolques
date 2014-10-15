<h4>Nuevo Grupo Familiar</h4>

<?php 
$f=new form();

$f->iniciarForm("post","grupoFamiliar/crear","nuevoGrupoFamiliar");
$f->addLabel("Apellido y Nombre");
$f->addTextbox("nombre");
$f->addLabel("DNI");
$f->addTextbox("cuit");
$f->addLabel("Tipo de Parentezco");
$f->addTextbox("tipoParentezco");
$f->addLabel("Legajo");
$f->addTextbox("legajo");
$f->addSubmit("Guardar");
$f->finForm();

 ?>