<div class="panel panel-info">
  <div class="panel-heading"><h4>Lista de Precio</h4></div>
  <div class="panel-body">




	<?php 

	$f=new form();

	$f->iniciarForm("post","index.php?p=listaPrecio/definirPrecio","definirPrecio");

	$f->addLabel("Servicio");

	echo ": ".$array["idServicio"]."<br>";

	$f->group(10);	
	$f->addLabel("Precio");
	$f->addTextbox("precio");
	$f->endGroup();

	$f->group(10);
	$f->addSubmit("Guardar");
	$f->endGroup();

	$f->addHidden("idServicio",$array["idServicio"]);
	$f->addHidden("listaPrecio",$array["listaPrecio"]);


	$f->finForm();





	?>
	</div>
</div>


<script type="text/javascript">
	$( "#definirPrecio" ).validate({
		rules: {
			precio: {	
				required:true,
				number: true
			},
		},
		messages: {
			precio: "El campo est&aacute; vacio o el caracter ingresado no es v&aacute;lido.",
			
		}
	});

</script>