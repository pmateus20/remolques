<h3>Listado de Empleados</h3>




 <table class='table table-striped'>
 	<tr>
 		<th>Codigo</th>
 		<th>Apellido y Nombre</th>
 		<th>CUIL</th>
 		<th></th>
 		<th></th>
 		<th></th>
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
				echo "<a href='index.php?p=empleado/ver&id=".$fila["codigo"]."'>Ver</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=empleado/editarEmpleado&id=".$fila["codigo"]."'>Editar</a>";
				echo "</td>";
				if($fila["usuario"]=="si"){
				echo "<td>";
				echo "<a href='index.php?p=empleado/cambiarPass&id=".$fila["codigo"]."'>Cambiar Password</a>";
				echo "</td>";
				}else{
					echo "<td>";
					echo "<a href='index.php?p=empleado/cargarUsuario&id=".$fila["codigo"]."'>Cargar Usuario</a>";
					echo "</td>";
	
				}
				echo "<td>";
				echo "<a href='index.php?p=grupoFamiliar/crear&id=".$fila["codigo"]."'>Grupo Familiar</a>";
				echo "</td>";
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>