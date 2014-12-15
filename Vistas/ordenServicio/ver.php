<?php $a=$array; ?>
<table class='table table-striped'>
	<tr>
		<td><strong>Numero:</strong></td>
		<td><?php echo $a["numero"] ?></td>
	</tr>
	<tr>
		<td><strong>Fecha:</strong></td>
		<td><?php echo $a["fecha"] ?></td>
	</tr>
	<tr>
		<td><strong>Cliente:</strong></td>
		<td><?php echo $a["cliente"] ?></td>
	</tr>
	<tr>
		<td><strong>Titular:</strong></td>
		<td><?php echo $a["titular"] ?></td>
	</tr>
	<tr>
		<td><strong>Dominio:</strong></td>
		<td><?php echo $a["dominio"] ?></td>
	</tr>
	<tr>
		<td><strong>Descripcion:</strong></td>
		<td><?php echo $a["descripcion"] ?></td>
	</tr>
	<tr>
		<td><strong>Importe:</strong></td>
		<td><?php echo $a["total"] ?></td>
	</tr>
</table>

<h3>Detalle de Orden de Servicio</h3>

<table class='table table-striped'>
 	<tr>
 		<th>Descripcion</th>
 		<th>Cantidad</th>
 		<th>Precio Unitario</th>
 		<th>Precio Total</th>
 	
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
				echo $fila["Cantidad"]*$fila["Precio"];
				echo "</td>";
				
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>
