<div class="panel panel-info">
  <div class="panel-heading"><h4>Editar Categor&iacute;a</h4></div>
  <div class="panel-body">

	<!--<h3>Editar Categoria</h3>-->

	<?php 	

	$f=new form();


	$a=$array;
	$f->iniciarForm("post","index.php?p=categoria/guardarEdicion","editarCategoria");	
	$f->addHidden("id",$a["codigo"]);

	$f->group(10);
	$f->addLabel("Descripcion");
	$f->addTextbox("descripcion",$a["descripcion"]);
	$f->endGroup();

	$f->group(10);
	$f->addLabel("Salario");
	$f->addTextbox("salario",$a["salario"]);
	$f->endGroup();

	$f->group(10);
	$f->addSubmit("Guardar");
	$f->endGroup();

	$f->finForm();

	 ?>

   </div>
</div>

<script type="text/javascript">
	$( "#editarCategoria" ).validate({
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