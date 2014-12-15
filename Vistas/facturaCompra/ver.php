<?php $a=$array; ?>
<table class='table table-striped'>
	<tr>
		<td><strong>Fecha:</strong></td>
		<td><?php echo $a["fecha"] ?></td>
	</tr>
	<tr>
		<td><strong>Proveedor:</strong></td>
		<td><?php echo $a["proveedor"] ?></td>
	</tr>
	<tr>
		<td><strong>Tipo:</strong></td>
		<td><?php echo $a["tipo"] ?></td>
	</tr>
	<tr>
		<td><strong>Punto de Ventas:</strong></td>
		<td><?php echo $a["puntoVenta"] ?></td>
	</tr>
	<tr>
		<td><strong>Numero:</strong></td>
		<td><?php echo $a["numero"] ?></td>
	</tr>
	<tr>
		<td><strong>Importe:</strong></td>
		<td><?php echo $a["importe"] ?></td>
	</tr>
</table>

<h3>Detalle de Factura Compra</h3>

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
