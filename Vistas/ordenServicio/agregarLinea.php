<h3>Lineas Orden de Servicio</h3>

<?php

 
if(isset($array2)){
	
?>

<table class='table table-striped'>
 	<tr>
 		<th>Descripcion</th>
 		<th>Cantidad</th>
 		<th>Precio</th>
 		<th></th>
 	
 	</tr>
 	<?php
 	
 		foreach ($array2 as $fila) {
		
			echo "<tr>";
				echo "<td>";
				echo $fila["Descripcion"];
				echo "</td>";
				echo "<td>";
				echo $fila["Cantidad"];
				echo "</td>";
				echo "<td>";
				echo $fila["Precio"];
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=ordenServicio/eliminarLinea&id=$dato1&serv=".$fila["Codigo"]."'>Eliminar</a>";
				echo "</td>";
				
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>

 <?php } ?>

<h3>Agregar Servicio</h3>

<?php

 
if(isset($array)){
	
?>

<table class='table table-striped'>
 	<tr>
 		<th>Descripcion</th>
 		 	
 	</tr>
 	<?php
 	
 		foreach ($array as $fila) {
		
			echo "<tr>";
				echo "<td>";
				echo "<a href='index.php?p=ordenServicio/guardarLinea&s=".$fila["Codigo"]."&o=$dato1'>";
				echo $fila["Descripcion"];
				echo "</a>";
				echo "</td>";
						
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>


<?php	

}




 ?>