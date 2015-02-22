<div class="panel panel-info">
  <div class="panel-heading"><h4>Nuevo Empleado</h4></div>
  <div class="panel-body">


	<!--<h4>Nuevo Empleado</h4>-->

	<?php 
	$f=new form();

	$f->iniciarForm("post","index.php?p=empleado/guardar","nuevoEmpleado");
	

	$f->group(10);	
	$f->addLabel("Apellido y Nombre");
	$f->addTextbox("nombre");
	$f->endGroup();

	$f->group(2);	
	$f->addLabel("CUIL");
	$f->addTextbox("cuil",null,11);
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Domicilio");
	$f->addTextbox("domicilio");
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Fecha de Nacimiento");
	$f->addTextbox("fechaNacimiento",null,10);
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Fecha de Ingreso");
	$f->addTextbox("fechaIngreso",null,10);
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Telefono");
	$f->addTextbox("telefono");
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Codigo de Categoria");
	$f->addCombo("codCategoria",$array);
	$f->endGroup();

	$f->group(10);	
	$f->addSubmit("Guardar");
	$f->endGroup();


	$f->finForm();


	 ?>
 </div>
</div>

<script type="text/javascript">
	$( "#nuevoEmpleado" ).validate({
		rules: {
			nombre: {	
				required:true,
				minlength: 5
			},
			cuil: {
				required:true,
				minlength: 11,
				digits: true

			},
			domicilio: {	
				required:true,
				minlength: 5
			},
			fechaNacimiento: {
				required:true,
			},
			fechaIngreso: {
				required:true,
			},
			codCategoria: {
				required:true,
			}
		},
		messages: {
			nombre: "El campo est&aacute; vacio o el nombre no es v&aacute;lido para este campo.",
			cuil: "CUIL incorrecto.",
			domicilio: "El campo est&aacute; vacio o la direcci&oacute;n ingresada no es v&aacute;lida para este campo.",
			fechaNacimiento: "Debe ingresar una fecha.",
			fechaIngreso:"Debe ingresar una fecha.",
			codCategoria: "Debe ingresar una categor&iacute;a."
		}
	});

</script>