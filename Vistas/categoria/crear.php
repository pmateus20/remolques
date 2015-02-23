<div class="panel panel-info">
  <div class="panel-heading"><h4>Nueva Categor&iacute;a</h4></div>
  <div class="panel-body">

	<!--<h3>Nueva Categoria</h3>-->

	<?php 	

	$f=new form();


	$f->iniciarForm("post","index.php?p=categoria/guardar","nuevoCategoria");

	$f->group(10);	
	$f->addLabel("Descripcion");
	$f->addTextbox("descripcion");
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Salario");
	$f->addTextbox("salario");
	$f->endGroup();

	$f->group(10);	
	$f->addSubmit("Guardar");
	$f->endGroup();


	$f->finForm();

	 ?>

  </div>
</div>
<script type="text/javascript">
	$( "#nuevoCategoria" ).validate({
		rules: {
			descripcion: {	
				required:true,
				minlength: 5
			},
			salario: {
				required:true,
				number: true

			}
		},
		messages: {
			descripcion: "El campo est&aacute; vacio o el nombre no es v&aacute;lido para este campo.",
			salario: "Debe ingresar el salario."
			
		}
	});

</script>