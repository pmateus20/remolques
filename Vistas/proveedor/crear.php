<div class="panel panel-info">
	<div class="panel-heading"><h4>Nuevo Proveedor</h4></div>
	<div class="panel-body">
		
		<?php 	

		$f=new form();


		$f->iniciarForm("post","index.php?p=proveedor/guardar","nuevoProveedor");
		
		$f->group(10);	
		$f->addLabel("Apellido y Nombre o Razon Social");
		$f->addTextbox("nombre");
		$f->endGroup();
		
		$f->group(2);	
		$f->addLabel("CUIT");
		$f->addTextbox("cuit",null,11);
		$f->endGroup();
		
		$f->group(10);
		$f->addLabel("Domicilio");
		$f->addTextbox("domicilio");
		$f->addLabel("Telefono");
		$f->addTextbox("telefono");
		$f->addLabel("E-MAIL");
		$f->addTextbox("email");
		$f->addLabel("Contacto");
		$f->addTextbox("contacto");
		$f->endGroup();

		$f->group(10);
		$f->addSubmit("Guardar");
		$f->finForm();
		$f->endGroup();

		?>




	</div>
</div>
<script type="text/javascript">
	$( "#nuevoProveedor" ).validate({
		rules: {
			nombre: {	
				required:true,
				minlength: 5
			},
			cuit: {
				required:true,
				minlength: 11,
				digits: true

			},
			email: {
				email: true
			}
		},
		messages: {
			nombre: "El campo est&aacute; vacio o el nombre no es v&aacute;lido para este campo.",
			cuit: "CUIT incorrecto.",
			email: "El e-mail ingresado es incorrecto."
		}
	});

</script>



