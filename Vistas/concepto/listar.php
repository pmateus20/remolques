<h3>Listado de Concepto</h3>

<table class='table table-striped'>
 	<tr>
 		<th>Codigo</th>
 		<th>Descripcion</th>
 		<th>Tipo</th>
 		<th>Subtipo</th>
 		<th>Valor</th>
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
				$tipo=explode("/", $fila["Tipo"]);
				
				if($tipo[0]=="D"){echo "Haber";};
				if($tipo[0]=="H"){echo "Deduccion";};
				echo "</td>";
				echo "<td>";
				if(isset($tipo[1])){
					if($tipo[1]=="S"){echo " Sueldo";};
					if($tipo[1]=="P"){echo " Porcentual";};
					if($tipo[1]=="D"){echo " Valor Definido";};
					
				}
				echo "</td>";
				echo "<td>";
				
				if(isset($tipo[2])){
					if($tipo[1]=="P"){echo " ".$tipo[2]."%";};
					if($tipo[1]=="D"){echo " $".$tipo[2];}
				}	
				
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=concepto/editar&id=".$fila["Codigo"]."'>Editar</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=concepto/eliminar&id=".$fila["Codigo"]."'>Eliminar</a>";
				echo "</td>";
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>