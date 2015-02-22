<div class="panel panel-info">
  <div class="panel-heading"><h4>Editar Servicio</h4></div>
  <div class="panel-body">



<!--<h3>Editar Servicio</h3>-->
	<?php 	

	$f=new form();




	$a=$array;
	$f->iniciarForm("post","index.php?p=servicio/guardarEdicion","editarServicio");	
	$f->addHidden("id",$a["Codigo"]);

	$f->group(10);
	$f->addLabel("Descripcion");
	$f->addTextbox("descripcion",$a["Descripcion"]);
	$f->endGroup();

	$f->group(10);
	$f->addSubmit("Guardar");
	$f->endGroup();	

	$f->finForm();




	?>
 </div>
</div>


<script type="text/javascript">
	$( "#editarServicio" ).validate({
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