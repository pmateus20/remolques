<div class="panel panel-info">
  <div class="panel-heading"><h4>Listado Recibos de Sueldo</h4></div>
  <div class="panel-body">


	<!--<h3>Listado Recibos de Sueldo</h3>-->




	 <table class='table table-striped'>
	 	<tr>
	 		<th>Fecha</th>
	 		<th>Empleado</th>
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
					echo $fila["empleado"];
					echo "</td>";
					echo "<td>";
					echo $fila["importe"];
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=reciboSueldo/ver&id=".$fila["codigo"]."'>Ver</a>";
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=reciboSueldo/eliminar&id=".$fila["codigo"]."'>Eliminar</a>";
					echo "</td>";
								
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>
    </div>
</div>