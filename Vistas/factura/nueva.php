<div class="panel panel-info">
  <div class="panel-heading"><h4>Nueva Factura</h4></div>
  <div class="panel-body">

<?php 

$f=new form();

$f->iniciarForm("POST","index.php?p=factura/guardar","factura");


$f->addLabel("Fecha");
$f->addTextbox("fecha",null,10);
$f->addLabel("Tipo");
$f->addCombo("tipo",array("A"=>"A","B"=>"B"));
$f->addLabel("Punto de Ventas");
$f->addTextbox("ptoVenta");
$f->addLabel("Numero");
$f->addTextbox("numero");

$f->addHidden("cliente",$dato1);



$f->addSubmit("Guardar");


$f->finForm();


 ?>

  </div>
</div>



<script>
	$("#fecha").datepicker();
</script>

<!-- script de validación para la factura | No funciona poniendo los dos -->

<!--
<script type="text/javascript">
	$( "#factura" ).validate({
		rules: {
			fecha: {	
				required:true,
				
			},
			tipo: {
				required:true,
	
			},
			ptoVenta: {	
				required:true,
				minlength: 5
			},
			numero: {	
				required:true,
				minlength: 5
				digits: true
			
		},
		messages: {
			fecha: "No ingres&oacute; la fecha o el caracter ingresado no es v&aacute;lido.",
			tipo: "Seleccione un tipo de factura.",
			ptoVenta: "Por favor ingrese una descripci&oacute;n para el punto de venta.",
			numero: "Ingrese un n&uacute;mero v&aacute;lido para la factura."

		}
	});

</script>

-->
