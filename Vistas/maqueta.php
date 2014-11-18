<!DOCTYPE html>
<html>
<head>
	<title>Maqueta</title>
	<link rel="stylesheet" href="Extenciones/bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
 				<li> <a href="index.php?p=articulo/crear">Nuevo Articulo</a></li>
 				<li> <a href="index.php?p=articulo/listar">Listar Articulo</a></li>
<<<<<<< HEAD
 				<li> <a href="index.php?p=grupoFamiliar/crear">Nuevo Grupo Familiar</a></li>
=======
 				<li> <a href="index.php?p=ordenServicio/nueva">Nueva Orden de Servicio</a></li>
 				<li> <a href="index.php?p=factura/nueva">Nueva Factura</a></li>
<<<<<<< HEAD
>>>>>>> 1ab548dbd799691684e3ed29aa7169633cec8827
=======
 				<li> <a href="index.php?p=factura/facturarOrdenes">Facturar Ordenes</a></li>
 				<li> <a href="index.php?p=facturaCompra/nueva">Nueva Factura de Compra</a></li>
 				<li> <a href="index.php?p=listaPrecio/cargar">Cargar Lista de Precios</a></li>
 				<li> <a href="index.php?p=reciboSueldo/nuevo">Nuevo Recibo de Sueldo</a></li>

>>>>>>> 1575ec17624959b15c824925138e3d5e6e963de9
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