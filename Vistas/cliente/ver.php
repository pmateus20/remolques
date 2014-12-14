<?php $a=$array; ?>
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
		<td><strong>CUIT:</strong></td>
		<td><?php echo $a["cuit"] ?></td>
	</tr>
	<tr>
		<td><strong>Domicilio:</strong></td>
		<td><?php echo $a["domicilio"] ?></td>
	</tr>
	<tr>
		<td><strong>Telefono:</strong></td>
		<td><?php echo $a["telefono"] ?></td>
	</tr>
	<tr>
		<td><strong>Email:</strong></td>
		<td><?php echo $a["email"] ?></td>
	</tr>
	<tr>
		<td><strong>Contacto:</strong></td>
		<td><?php echo $a["contacto"] ?></td>
	</tr>
</table>