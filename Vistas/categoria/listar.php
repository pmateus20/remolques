<h3>Listado de Categoria</h3>


<?php 

$f=new form();


echo "<h4>Buscar Categoria</h4>";
$f->iniciarForm("POST","categoria/listar","listarCategoria");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");

$f->addSubmit("Buscar");
$f->finForm();





 ?>

 <table class='table table-striped'>
 	<tr>
 		<th>Codigo</th>
 		<th>Descripcion</th>
 		<th>Salario</th>
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
				echo $fila["Salario"];
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=categoria/editar&id=".$fila["Codigo"]."'>Editar</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=categoria/eliminar&id=".$fila["Codigo"]."'>Eliminar</a>";
				echo "</td>";
				
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>