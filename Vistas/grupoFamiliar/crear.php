<div class="panel panel-info">
  <div class="panel-heading"><h4>Nuevo Grupo Familiar</h4></div>
  <div class="panel-body">

<!--<h4>Nuevo Grupo Familiar</h4>-->

	<?php 
	$f=new form();

	$f->iniciarForm("post","index.php?p=grupoFamiliar/guardar","nuevoGrupoFamiliar");
	
	$f->group(10);	
	$f->addLabel("Apellido y Nombre");
	$f->addTextbox("nombre");
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("DNI");
	$f->addTextbox("dni",null,8);
	$f->endGroup();

	$f->group(10);	
	$f->addLabel("Tipo de Parentezco");
	$f->addTextbox("tipoParentezco");
	$f->endGroup();
	
	$f->addHidden("empleado",$dato1);
	

	$f->group(10);	
	$f->addSubmit("Guardar");
	$f->endGroup();
	
	$f->finForm();


	if(isset($array)){
	 ?>

	 <h3>Listado de Familiares</h3>



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

   </div>
</div>
<script type="text/javascript">
	$( "#nuevoGrupoFamiliar" ).validate({
		rules: {
			nombre: {	
				required:true,
				minlength: 5
			},
			dni: {
				required:true,
				minlength: 8,
				digits: true

			},
			tipoParentezco: {
				required: true,
				minlength: 5
			}
		},
		messages: {
			nombre: "El campo est&aacute; vacio o el nombre no es v&aacute;lido para este campo.",
			dni: "DNI incorrecto.",
			tipoParentezco: "Ingrese un tipo de parentezco."
		}
	});

</script>