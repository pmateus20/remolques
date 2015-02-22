<div class="panel panel-info">
  <div class="panel-heading"><h4>Editar Cliente</h4></div>
  <div class="panel-body">


	<?php 	

	$f=new form();




	$a=$array;
	$f->iniciarForm("post","index.php?p=cliente/guardarEdicion","editarCliente");	
	$f->addHidden("id",$a["codigo"]);

	$f->group(10);
	$f->addLabel("Apellido y Nombre o Razon Social");
	$f->addTextbox("nombre",$a["nombre"]);
	$f->endGroup();

	$f->group(2);
	$f->addLabel("CUIT");
	$f->addTextbox("cuit",$a["cuit"],11);
	$f->endGroup();

	$f->group(10);
	$f->addLabel("Domicilio");
	$f->addTextbox("domicilio",$a["domicilio"]);
	$f->addLabel("Telefono");
	$f->addTextbox("telefono",$a["telefono"]);
	$f->addLabel("E-MAIL");
	$f->addTextbox("email",$a["email"]);
	$f->addLabel("Contacto");
	$f->addTextbox("contacto",$a["contacto"]);
	$f->endGroup();

	$f->group(10);
	$f->addSubmit("Guardar");
	$f->endGroup();

	$f->finForm();


	?>

	</div>
</div>


<script type="text/javascript">
	$( "#editarCliente" ).validate({
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