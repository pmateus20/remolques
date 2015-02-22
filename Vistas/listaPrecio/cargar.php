<div class="panel panel-info">
  <div class="panel-heading"><h4>Lista de Precio</h4></div>
  <div class="panel-body">
  



	<?php 

	$f=new form();

	$f->iniciarForm("post","index.php?p=listaPrecio/guardar","listaPrecio");

	$f->group(10);	
	$f->addLabel("Descripci&oacute;n");
	$f->addTextbox("listaPrecio");
	$f->endGroup();

	$f->group(10);
	$f->addSubmit("Siguiente");
	$f->endGroup();

	$f->finForm();





	?>


  </div>
</div>


<script type="text/javascript">
	$( "#listaPrecio" ).validate({
		rules: {
			listaPrecio: {	
				required:true,
				minlength: 5
			},
		},
		messages: {
			listaPrecio: "El campo est&aacute; vacio o el nombre no es v&aacute;lido para este campo.",
			
		}
	});

</script>