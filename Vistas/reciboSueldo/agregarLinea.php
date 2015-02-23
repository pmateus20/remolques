<div class="panel panel-info">
  <div class="panel-heading"><h4>Detalle de Recibo de Sueldo</h4></div>
  <div class="panel-body">

	<!--<h3>Detalle de Recibo de Sueldo</h3>-->

	<?php

	 
	if(isset($array2)){
		
	?>

	<table class='table table-striped'>
	 	<tr>
	 		<th>Descripcion</th>
	 		<th>Tipo</th>
	 		<th>Precio</th>
	 		<th></th>
	 	
	 	</tr>
	 	<?php
	 	
	 		foreach ($array2 as $fila) {
			
				echo "<tr>";
					echo "<td>";
					echo $fila["Descripcion"];
					echo "</td>";
					echo "<td>";
					if($fila["Tipo"]=="D"){echo "Haber";}
					if($fila["Tipo"]=="H"){echo "Deduccion";}
					echo "</td>";
					echo "<td>";
					if($fila["Tipo"]=="D"){echo $fila["Precio"];}
					if($fila["Tipo"]=="H"){echo "-".$fila["Precio"];}				
					
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?p=reciboSueldo/eliminarLinea&id=$dato1&serv=".$fila["Codigo"]."'>Eliminar</a>";
					echo "</td>";
					
						
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>

	 <?php 

	echo "<a href='index.php?p=reciboSueldo/finalizarReciboSueldo&id=$dato1'>Finalizar Recibo de Sueldo</a>";

	}
	 ?>

	<h4>Agregar Concepto</h4>

	<?php

	 
	if(isset($array)){
		
	?>

	<table class='table table-striped'>
	 	<tr>
	 		<th>Descripcion</th>
	 		<th>Tipo</th>
	 		 	
	 	</tr>
	 	<?php
	 	
	 		foreach ($array as $fila) {
			
				echo "<tr>";
					echo "<td>";
					echo "<a href='index.php?p=reciboSueldo/guardarLinea&s=".$fila["Codigo"]."&f=$dato1'>";
					echo $fila["Descripcion"];
					echo "</a>";
					echo "</td>";
					echo "<td>";
					if($fila["Tipo"]=="D"){echo "Haber";}
					if($fila["Tipo"]=="H"){echo "Deduccion";}
					echo "</td>";
							
				
				echo "</tr>";
			}
			
			
			
		?>

	 </table>


	<?php	

	}






	 ?>
     </div>
</div>