<h3>Listado de Concepto</h3>

<table class='table table-striped'>
 	<tr>
 		<th>Codigo</th>
 		<th>Descripcion</th>
 		<th>Tipo</th>
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
				if($fila["Tipo"]=="D"){echo "Haber";}
				if($fila["Tipo"]=="H"){echo "Deduccion";}
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=concepto/editar&id=".$fila["Codigo"]."'>Editar</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=concepto/eliminar&id=".$fila["Codigo"]."'>Eliminar</a>";
				echo "</td>";
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>