<h3>Listado de Clientes</h3>




 <table class='table table-striped'>
 	<tr>
 		<th>Codigo</th>
 		<th>Apellido y Nombre</th>
 		<th>CUIT</th>
 		<th></th>
 		<th></th>
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
				echo $fila["Nombre"];
				echo "</td>";
				echo "<td>";
				echo $fila["CUIT"];
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=cliente/ver&id=".$fila["Codigo"]."'>Ver</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=cliente/editar&id=".$fila["Codigo"]."'>Editar</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=cliente/eliminar&id=".$fila["Codigo"]."'>Eliminar</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=cliente/cargarLista&id=".$fila["Codigo"]."'>Cargar Lista de Precio</a>";
				echo "</td>";
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>