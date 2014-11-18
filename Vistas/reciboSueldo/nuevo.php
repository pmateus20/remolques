<?php 

$f=new form();

$f->iniciarForm("POST","facturaCompra/nueva","facturaCompra");

$f->addLabel("Fecha");
$f->addTextbox("fecha");

$f->addLabel("Empleado");
$f->addTextbox("empleado");
//lineas

echo "<table class='table table-striped'>";
echo "<tr><th>CODIGO</th><th>DESCRIPCION</th><th>IMPORTE</th></tr>";
for($x=1;$x<=10;$x++){
	echo "<tr>";
	echo "<td>";
	$f->addTextbox("codigo$x");
	echo "</td>";
	echo "<td>";
	$f->addTextbox("descripcion$x");
	echo "</td>";
	
	echo "<td>";
	$f->addTextbox("importe$x");
	echo "</td>";
	
	echo "</tr>";
}
echo "</table>";

$f->addLabel("Total");
$f->addTextbox("total");

$f->addSubmit("Guardar");


$f->finForm();




















 ?>