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

<script>
	$("#fecha").datepicker();
</script>



