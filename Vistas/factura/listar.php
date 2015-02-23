<div class="panel panel-info">
  <div class="panel-heading"><h4>Listado de Facturas</h4></div>
  <div class="panel-body">


	<!--<h3>Listado de Facturas</h3>-->




	 <table class='table table-striped'>
	 	<tr>
	 		<th>Fecha</th>
	 		<th>Numero</th>
	 		<th>Cliente</th>
	 		<th>Importe</th>
	 		<th></th>
	 		<th></th>
	 	</tr>
	 	<?php
	 	
	 		foreach ($array as $fila) {
			
				echo "<tr>";
					echo "<td>";
					echo $fila["fecha"];
					echo "</td>";
					echo "<td>";
					echo $fila["numero"];
					echo "</td>";
					echo "<td>";
					echo $fila["cliente"];
					echo "</td>";
					echo "<td>";
					echo $fila["importe"];
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=factura/ver&id=".$fila["codigo"]."'>Ver</a>";
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=factura/eliminar&id=".$fila["codigo"]."'>Eliminar</a>";
					echo "</td>";
								
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>

   </div>
</div>