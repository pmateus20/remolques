<div class="panel panel-info">
  <div class="panel-heading"><h4>Cambiar Contrase&ntilde;a</h4></div>
  <div class="panel-body">

	<!--<h4>Cambiar Password</h4>-->

	<?php 
	$f=new form();

	$f->iniciarForm("post","index.php?p=empleado/guardarPass","guardarPass");
	$f->addHidden("id",$dato1);

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
	$( "#guardarPass" ).validate({
		rules: {
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
			password: "Debe ingresar como m&iacute;nimo 5 caracteres.",
			password2: "Debe repetir la contrase&ntilde;a."
		}
	});

</script>