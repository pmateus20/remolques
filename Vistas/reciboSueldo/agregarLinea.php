<h3>Detalle de Recibo de Sueldo</h3>

<?php

 
if(isset($array2)){
	
?>

<table class='table table-striped'>
 	<tr>
 		<th>Descripcion</th>
 		<th>Haberes</th>
 		<th>Deducciones</th>
 		<th>Neto</th>
 		<th></th>
 	</tr>
 	<?php
 		$total=0;
 		foreach ($array2 as $fila) {
			$tipo=explode("/", $fila["Tipo"]);		
			echo "<tr>";
				echo "<td>";
				echo $fila["Descripcion"];
				echo "</td>";
				echo "<td>";
				if($tipo[0]=="D"){
					echo $fila["Precio"];
					$total=$total+$fila["Precio"];
				}
				
				echo "</td>";
				echo "<td>";
				if($tipo[0]=="H"){
					echo $fila["Precio"];
					$total=$total-$fila["Precio"];
				}
							
				echo "</td>";
				echo "<td></td>";
				echo "<td>";
				echo "<a href='index.php?p=reciboSueldo/eliminarLinea&id=$dato1&serv=".$fila["Codigo"]."'>Eliminar</a>";
				echo "</td>";
				
					
			
			echo "</tr>";
		}
		echo "<tr><td>Neto</td><td></td><td></td><td>".$total."</td><td></td></tr>";
		
		
	?>

 </table>

 <?php 

echo "<a href='index.php?p=reciboSueldo/finalizarReciboSueldo&id=$dato1'>Finalizar Recibo de Sueldo</a>";

}
 ?>

<h3>Agregar Concepto</h3>

<?php

 
if(isset($array)){
	
?>

<table class='table table-striped'>
 	<tr>
 		<th>Descripcion</th>
 		<th>Tipo</th>
 		<th>Subtipo</th>
 		<th>Valor</th>
 		 	
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
						
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>


<?php	

}






 ?>