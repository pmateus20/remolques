<?php 

$f=new form();

$f->iniciarForm("POST","factura/nueva","factura");

$f->addLabel("Fecha");
$f->addTextbox("fecha");
$f->addLabel("Punto de Venta");
$f->addTextbox("ptoVenta");
$f->addLabel("Numero");
$f->addTextbox("numero");
$f->addLabel("Cliente");
$f->addTextbox("cliente");
echo "<a class='btn btn-default' data-toggle='modal' data-target='#buscarServicio'>Buscar</a>";

//lineas

echo "<table class='table table-striped'>";
echo "<tr><th>CODIGO</th><th>DESCRIPCION</th><th>CANTIDAD</th><th>PRECIO UNITARIO</th><th>PRECIO TOTAL</th></tr>";
for($x=1;$x<=10;$x++){
	echo "<tr>";
	echo "<td>";
	$f->addTextbox("codigo$x");
	echo "</td>";
	echo "<td>";
	$f->addTextbox("descripcion$x");
	echo "</td>";
	echo "<td>";
	$f->addTextbox("cantidad$x");
	echo "</td>";
	echo "<td>";
	$f->addTextbox("precio$x");
	echo "</td>";
	echo "<td>";
	$f->addTextbox("precioTotal$x");
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
$f->addLabel("Subtotal");
$f->addTextbox("subtotal");
$f->addLabel("IVA");
$f->addTextbox("iva");
$f->addLabel("Total");
$f->addTextbox("total");

$f->addSubmit("Guardar");


$f->finForm();


include "Vistas/factura/buscarServicio.php";

 ?>


