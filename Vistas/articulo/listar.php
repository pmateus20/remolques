<div class="panel panel-info">
  <div class="panel-heading"><h4>Listado de Articulos</h4></div>
  <div class="panel-body">


	<!--<h3>Listado de Articulos</h3>-->



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
					echo "<a href='index.php?p=articulo/editar&id=".$fila["Codigo"]."'>Editar</a>";
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=articulo/eliminar&id=".$fila["Codigo"]."'>Eliminar</a>";
					echo "</td>";
						
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>

    </div>
</div>