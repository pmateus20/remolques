<?php
echo "<h3>Servicios</h3>";

if(isset($array2)){
	$t=new tabla($array2);

	$t->mostrarTabla();



}




echo "<h3>Agregar Servicio</h3>"; 
if(isset($array)){
	
	echo "<ul>";
	foreach ($array as $linea) {
		
			echo "<li><a href='index.php?p=listaPrecio/definirPrecio&s=".$linea["Codigo"]."&l=".$dato1."'>".$linea["Descripcion"]."</a></li>";

		
	}
	echo "</ul>";

}




 ?>