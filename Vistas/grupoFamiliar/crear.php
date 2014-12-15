<h4>Nuevo Grupo Familiar</h4>

<?php 
$f=new form();

$f->iniciarForm("post","index.php?p=grupoFamiliar/guardar","nuevoGrupoFamiliar");
$f->addLabel("Apellido y Nombre");
$f->addTextbox("nombre");
$f->addLabel("DNI");
$f->addTextbox("dni",null,8);
$f->addLabel("Tipo de Parentezco");
$f->addTextbox("tipoParentezco");
$f->addHidden("empleado",$dato1);
$f->addSubmit("Guardar");
$f->finForm();


if(isset($array)){
 ?>

 <h3>Listado de Articulos</h3>



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
				echo $fila["apellidoNombre"];
				echo "</td>";
				echo "<td>";
				echo $fila["tipoParentezco"];
				echo "</td>";
				echo "<td>";
				echo $fila["dni"];
				echo "</td>";
				echo "<td>";
				echo "<a href='index.php?p=grupoFamiliar/eliminar&id=".$fila["Codigo"]."&em=".$dato1."'>Eliminar</a>";
				echo "</td>";
					
			
			echo "</tr>";
		}
		
		
		
	?>

 </table>

 <?php } ?>