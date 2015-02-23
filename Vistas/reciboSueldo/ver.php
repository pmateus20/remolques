<?php $a=$array; ?>
<div class="panel panel-info">
  <div class="panel-heading"><h4>Empleado: <?php echo $a["empleado"] ?></h4></div>
  <div class="panel-body">


	<table class='table table-striped'>
		<tr>
			<td><strong>Fecha:</strong></td>
			<td><?php echo $a["fecha"] ?></td>
		</tr>
		<tr>
			<td><strong>Empleado:</strong></td>
			<td><?php echo $a["empleado"] ?></td>
		</tr>
		<tr>
			<td><strong>Importe:</strong></td>
			<td><?php echo $a["importe"] ?></td>
		</tr>
	</table>

	<h3>Detalle de Recubo de Sueldo</h3>

	<table class='table table-striped'>
	 	<tr>
	 		<th>Concepto</th>
	 		<th>Tipo</th>
	 		<th>Importe</th>
	 		
	 	
	 	</tr>
	 	<?php
	 	
	 		foreach ($array2 as $fila) {
			
				echo "<tr>";
					echo "<td>";
					echo $fila["Descripcion"];
					echo "</td>";
					echo "<td>";
					if($fila["Tipo"]=="D"){echo "Haber";}
					if($fila["Tipo"]=="H"){echo "Deduccion";}
					echo "</td>";
					echo "<td>";
					if($fila["Tipo"]=="D"){echo $fila["Precio"];}
					if($fila["Tipo"]=="H"){echo "-".$fila["Precio"];}				
					
					echo "</td>";
					
						
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>
     </div>
</div>
