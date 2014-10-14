<!DOCTYPE html>
<html>
<head>
	<title>Maqueta</title>
	<link rel="stylesheet" href="Extenciones/bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="page-header"><h1>Sistema Remolques Ruta 9</h1></div>
		</div>
	</div>
	<div class="row">

		<div class="col-md-2">
			<h4>Menu</h4>
			<ul class="nav nav-pills nav-stacked">
 				<li> <a href="index.php?p=cliente/crear">Nuevo Cliente</a></li>
 				<li> <a href="index.php?p=cliente/listar">Listar Clientes</a></li>
 				<li> <a href="index.php?p=factura/crear">Facturar</a></li>
 				<li> <a href="index.php?p=ordenServicio/crear">Nueva Orden de Servicio</a></li>
 				<li> <a href="index.php?p=proveedor/crear">Nuevo Proveedor</a></li>
 				<li> <a href="index.php?p=proveedor/listar">Listar Proveedor</a></li>
 				<li> <a href="index.php?p=empleado/crear">Nuevo Empleado</a></li>
 				<li> <a href="index.php?p=empleado/listar">Listar Empleado</a></li>
 			</ul>
		</div>
		<div class="col-md-10">
			<?php include $this->contenido; ?>	
		</div>	
	</div>
	<div class="row">
		<div class="col-md-12">
			<p class="text-center">Footer</p>
		</div>
	</div>		
</div>
	
</div>
</body>

</html>