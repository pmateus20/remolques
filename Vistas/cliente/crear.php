<div class="panel panel-info">
  <div class="panel-heading"><h4>Nuevo Cliente</h4></div>
  <div class="panel-body">
  
 
<?php 	


$f=new form();





$f->iniciarForm("post","index.php?p=cliente/guardar","nuevoCliente");
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
$f->endGroup();

$f->finForm();




 ?>


  </div>
</div>


<script type="text/javascript">
	$( "#nuevoCliente" ).validate({
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
			nombre: "Debe ingresar el campo.",
			cuit: "El CUIT ingresado es incorrecto.",
			email: "El E-MAIL esta mal ingresado es incorrecto."
		}
	});

</script>

