<div class="panel panel-info">
  <div class="panel-heading"><h4>Seleccionar Proveedor</h4></div>
  <div class="panel-body">

		<!--<h3>Seleccionar Proveedor</h3>-->




		 <table class='table table-striped'>
		 	<tr>
		 		<th>Codigo</th>
		 		<th>Apellido y Nombre</th>
		 		<th>CUIT</th>
		 		<th></th>
		 		
		 	</tr>
		 	<?php
		 	
		 		foreach ($array as $fila) {
				
					echo "<tr>";
						echo "<td>";
						echo $fila["Codigo"];
						echo "</td>";
						echo "<td>";
						echo $fila["Nombre"];
						echo "</td>";
						echo "<td>";
						echo $fila["CUIT"];
						echo "</td>";
						echo "<td>";
						echo "<a href='index.php?p=facturaCompra/nueva&id=".$fila["Codigo"]."'>Seleccionar</a>";
						echo "</td>";
					
					echo "</tr>";
				}
				
				
				
			?>

		 </table>

       </div>
</div>