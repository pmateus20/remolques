<div class="panel panel-info">
  <div class="panel-heading"><h4>Seleccionar Empleado</h4></div>
  <div class="panel-body">

	<!--<h3>Seleccionar Empleado</h3>-->




	 <table class='table table-striped'>
	 	<tr>
	 		<th>Codigo</th>
	 		<th>Apellido y Nombre</th>
	 		<th>CUIL</th>
	 		<th></th>
	 		
	 	</tr>
	 	<?php
	 	
	 		foreach ($array as $fila) {
			
				echo "<tr>";
					echo "<td>";
					echo $fila["codigo"];
					echo "</td>";
					echo "<td>";
					echo $fila["nombre"];
					echo "</td>";
					echo "<td>";
					echo $fila["cuil"];
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=reciboSueldo/nueva&id=".$fila["codigo"]."'>Seleccionar</a>";
					echo "</td>";
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>

   </div>
</div>