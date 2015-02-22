<div class="panel panel-info">
  <div class="panel-heading"><h4>Nuevo Servicio</h4></div>
  <div class="panel-body">


	<?php 	

	$f=new form();


	$f->iniciarForm("post","index.php?p=servicio/guardar","nuevoServicio");

	$f->group(10);
	$f->addLabel("Descripcion");
	$f->addTextbox("descripcion");
	$f->endGroup();

	$f->group(10);
	$f->addSubmit("Guardar");
	$f->endGroup();

	$f->finForm();

	?>	

  </div>
</div>


<script type="text/javascript">
	$( "#nuevoServicio" ).validate({
		rules: {
			descripcion: {	
				required:true,
				minlength: 5
			},
		},
		messages: {
			descripcion: "El campo est&aacute; vacio o el nombre no es v&aacute;lido para este campo.",
			
		}
	});

</script>