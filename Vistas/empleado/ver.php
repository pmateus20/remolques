<?php $a=$array; ?>
<div class="panel panel-info">
  <div class="panel-heading"><h4>Empleado: <?php echo $a["nombre"] ?></h4></div>
  <div class="panel-body">

	<table class='table table-striped'>
		<tr>
			<td><strong>Codigo:</strong></td>
			<td><?php echo $a["codigo"] ?></td>
		</tr>
		<tr>
			<td><strong>Apellido y Nombre:</strong></td>
			<td><?php echo $a["nombre"] ?></td>
		</tr>
		<tr>
			<td><strong>CUIL:</strong></td>
			<td><?php echo $a["cuil"] ?></td>
		</tr>
		<tr>
			<td><strong>Domicilio:</strong></td>
			<td><?php echo $a["direccion"] ?></td>
		</tr>
		<tr>
			<td><strong>Fecha de Nacimiento:</strong></td>
			<td><?php echo $a["fechaNacimiento"] ?></td>
		</tr>
		<tr>
			<td><strong>Fecha de Ingreso:</strong></td>
			<td><?php echo $a["fechaIngreso"] ?></td>
		</tr>
		<tr>
			<td><strong>Telefono:</strong></td>
			<td><?php echo $a["telefono"] ?></td>
		</tr>
		
	</table>
 </div>
</div>