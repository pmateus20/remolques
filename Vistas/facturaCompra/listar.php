<div class="panel panel-info">
  <div class="panel-heading"><h4>Listado de Facturas de Compras</h4></div>
  <div class="panel-body">


	<!--<h3>Listado de Facturas de Compra</h3>-->




	 <table class='table table-striped'>
	 	<tr>
	 		<th>Fecha</th>
	 		<th>Numero</th>
	 		<th>Proveedor</th>
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
					echo $fila["proveedor"];
					echo "</td>";
					echo "<td>";
					echo $fila["importe"];
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=facturaCompra/ver&id=".$fila["codigo"]."'>Ver</a>";
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=facturaCompra/eliminar&id=".$fila["codigo"]."'>Eliminar</a>";
					echo "</td>";
								
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>

    </div>
</div>