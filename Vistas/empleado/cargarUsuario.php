<div class="panel panel-info">
  <div class="panel-heading"><h4>Cargar Usuario</h4></div>
  <div class="panel-body">


	<!--<h4>Cargar Usuario</h4>-->

	<?php 
	$f=new form();

	$f->iniciarForm("post","index.php?p=empleado/guardarUsuario","guardarUsuario");
	$f->addHidden("id",$dato1);

	$f->group(10);	
	$f->addLabel("Usuario");
	$f->addTextbox("usuario");
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Password");
	$f->addPassword("password");
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Repetir Password");
	$f->addPassword("password2");
	$f->endGroup();

	$f->group(10);	
	$f->addSubmit("Guardar");
	$f->endGroup();


	$f->finForm();


	 ?>
   </div>
</div>

<script type="text/javascript">
	$( "#guardarUsuario" ).validate({
		rules: {
			usuario: {	
				required:true,
				minlength: 5
			},
			password: {
				required:true,
				minlength: 5
			},
			password2: {
				required:true,
				minlength: 5
			}
		},
		messages: {
			usuario: "El campo est&aacute; vacio o el nombre no es v&aacute;lido para este campo.",
			password: "Debe ingresar como m&iacute;nimo 5 caracteres.",
			password2: "Debe repetir la contrase&ntilde;a."
		}
	});

</script>