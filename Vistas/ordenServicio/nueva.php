<div class="panel panel-info">
  <div class="panel-heading"><h4>Nueva Orden de Servicio</h4></div>
  <div class="panel-body">


		<?php 

		$f=new form();

		$f->iniciarForm("POST","index.php?p=ordenServicio/guardar","ordenServicio");

		$f->addHidden("cliente",$dato1);
				
		$f->group(3);	
		$f->addLabel("Fecha");
		$f->addTextbox("fecha");
		$f->endGroup();

		$f->group(4);	
		$f->addLabel("Numero de Servicio Externo");
		$f->addTextbox("numeroServicioExterno");		
		$f->endGroup();

		$f->group(6);	
		$f->addLabel("Titular");
		$f->addTextbox("titular");
		$f->endGroup();

		$f->group(2);	
		$f->addLabel("Dominio");
		$f->addTextbox("dominio");
		$f->endGroup();

		$f->group(10);	
		$f->addLabel("Descripcion");
		$f->addArea("3","descripcion");	
		$f->endGroup();

		$f->group(10);	
		$f->addSubmit("Guardar");
		$f->endGroup();

		$f->finForm();







 		?>

 </div>
</div>


<script type="text/javascript">
	$("#fecha").datepicker();
	$( "#ordenServicio" ).validate({
		rules: {
			fecha: {	
				required:true,
				
			},
			numeroServicioExterno: {
				required:true,
				minlength: 3,
				
			},
			titular: {	
				required:true,
				minlength: 5
			},
			dominio: {	
				required:true,
				minlength: 5
			},
			descripcion: {	
				required:true,
				minlength: 5
			}	
		},
		messages: {
			fecha: "No ingres&oacute; la fecha o el caracter ingresado no es v&aacute;lido",
			numeroServicioExterno: "Ingrese un car&aacute;cter v&aacute;lido",
			titular: "Ingrese un nombre v&aacute;lido.",
			dominio: "Ingrese un dominio v&aacute;lido",
			descripcion: "Por favor ingrese una descripci&oacute;n."
		}
	});

</script>
