<?php 



 ?>

 <h3>Seleccionar lista de Precios</h3>
 <table class='table table-striped'>
 	<tr>
 		<th>Codigo</th>
 		<th>Descripcion</th>
 		<th></th>
 		<th></th>
 	</tr>
 	<?php
 	
 		foreach ($array as $fila) {
		
			echo "<tr>";
				echo "<td>";
				echo $fila["Codigo"];
				echo "</td>";
				echo "<td>";
				echo $fila["Descripcion"];
				echo "</td>";

				echo "<td>";
				echo "<a href='index.php?p=cliente/seleccionarLista&id=".$fila["Codigo"]."&c=".$dato1."'>Seleccionar</a>";
				echo "</td>";
			
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>