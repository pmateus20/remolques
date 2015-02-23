<div class="panel panel-info">
  <div class="panel-heading"><h4>Nueva Factura</h4></div>
  <div class="panel-body">

	<?php 

	$f=new form();

	$f->iniciarForm("POST","index.php?p=factura/guardar","factura");
	
	$f->group(3);
	$f->addLabel("Fecha");
	$f->addTextbox("fecha",null,10);
	$f->endGroup();

	$f->group(2);
	$f->addLabel("Tipo");
	$f->addCombo("tipo",array("A"=>"A","B"=>"B"));
	$f->endGroup();

	$f->group(3);	
	$f->addLabel("Punto de Ventas");
	$f->addTextbox("ptoVenta");
	$f->endGroup();

	$f->group(5);
	$f->addLabel("Numero");
	$f->addTextbox("numero");
	$f->endGroup();

	$f->addHidden("cliente",$dato1);

	$f->group(10);
	$f->addSubmit("Guardar");
	$f->endGroup();


	$f->finForm();


	 ?>

  </div>
</div>



<script>
	$("#fecha").datepicker();
</script>




<script type="text/javascript">
	$( "#factura" ).validate({
		rules: {
			fecha: {	
				required:true,
				
			},
			ptoVenta: {	
				required:true,
				digits: true
			},
			numero: {	
				required:true,
				digits: true
			}
			
		},
		messages: {
			fecha: "No ingres&oacute; la fecha o el caracter ingresado no es v&aacute;lido.",
			
			ptoVenta: "Por favor ingrese el punto de venta.",
			numero: "Ingrese un n&uacute;mero v&aacute;lido para la factura."

		}
	});

</script>


