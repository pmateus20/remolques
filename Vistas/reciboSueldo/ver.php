<?php $a=$array; ?>

<table class='table table-striped'>
	<tr>
		<td><strong>Periodo:</strong></td>
		<td><?php echo $a["periodo"] ?></td>
	</tr>
	<tr>
		<td><strong>Empleado:</strong></td>
		<td><?php echo $a["empleado"] ?></td>
	</tr>
	<tr>
		<td><strong>Importe:</strong></td>
		<td><?php echo $a["importe"] ?></td>
	</tr>
</table>

<div class="panel panel-info">
  <div class="panel-heading"><h4>Empleado: <?php echo $a["empleado"] ?></h4></div>
  <div class="panel-body">

<table class='table table-striped'>
 	<tr>
 		<th>Concepto</th>
 		<th>Haberes</th>
 		<th>Deducciones</th>
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
							
				echo "</td><td></td>";

			echo "</tr>";
		}
		
		echo "<tr><td>Neto</td><td></td><td></td><td>".$total."</td></tr>";
		
	?>

	 </table>
     </div>
</div>


 <?php 
$arrayURL=serialize($array);

$arrayURL=urlencode($arrayURL);

$arrayURL2=serialize($array2);

$arrayURL2=urlencode($arrayURL2);

echo "<a href='Extenciones/fpdf/recibo.php?r=$arrayURL&c=$arrayURL2' id='imprimir' class='btn btn-default'>Imprimir</a>"
 ?>


<script>
	$("#imprimir").click(function (event) {
        event.preventDefault();
        window.open($(this).attr("href"), "Recibo", "scrollbars=yes");
    });
	

</script>





