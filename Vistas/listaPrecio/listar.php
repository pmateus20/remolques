<div class="panel panel-info">
  <div class="panel-heading"><h4>Listas de Precios</h4></div>
  <div class="panel-body">



	<?php 




	 ?>
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
					echo "<a href='index.php?p=listaPrecio/eliminar&id=".$fila["Codigo"]."'>Eliminar</a>";
					echo "</td>";
				
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>

   </div>
</div>