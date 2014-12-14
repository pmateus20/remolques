<h3>Listado de Servicios</h3>


<?php 

$f=new form();


echo "<h4>Buscar Servicio</h4>";
$f->iniciarForm("POST","servicio/listar","listarServicio");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");

$f->addSubmit("Buscar");
$f->finForm();



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
				echo "<a href='index.php?p=servicio/editar&id=".$fila["Codigo"]."'>Editar</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=servicio/eliminar&id=".$fila["Codigo"]."'>Eliminar</a>";
				echo "</td>";
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>