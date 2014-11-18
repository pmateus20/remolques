<?php 

$f=new form();

$f->iniciarForm("post","index.php?p=listaPrecio/cargar","lastaPrecio");

$f->addLabel("Lista de Precio");

$f->addTextbox("listaPrecio");
$f->addLabel("Cliente");
$f->addTextbox("cliente");

echo "<table class='table table-striped'>";
echo "<tr><th>CODIGO</th><th>DESCRIPCION</th><th>PRECIO</th></tr>";
for($x=1;$x<=5;$x++){
	echo "<tr>";
	echo "<td>";
	$f->addTextbox("codigo$x");
	echo "</td>";
	echo "<td>";
	$f->addTextbox("descripcion$x");
	echo "</td>";
	echo "<td>";
	$f->addTextbox("precio$x");
	echo "</td>";
	echo "</tr>";
}
echo "</table>";

$f->addSubmit("Guardar");


$f->finForm();











 ?>