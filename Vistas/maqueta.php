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
		<div class="page-header"><a href="index.php"><img src="img/logo.jpg" alt="logo"></a></div>
		</div>
	</div>
	<div class="row">
		<?php if(isset($_SESSION["login"])){ ?>
		<div class="col-md-2">
			
			<a href="index.php?p=login/logout">Desloguearse</a>
			<h4>Menu</h4>
			<ul class="nav nav-pills nav-stacked">
 				<h4>Ventas</h4>
 				<li> <a href="index.php?p=cliente/crear">Nuevo Cliente</a></li>
 				<li> <a href="index.php?p=cliente/listar">Listar Clientes</a></li>
 				<li> <a href="index.php?p=listaPrecio/cargar">Cargar Lista de Precios</a></li>
 				<li> <a href="index.php?p=listaPrecio/listar">Listar Lista de Precios</a></li>
 				<li> <a href="index.php?p=servicio/crear">Nuevo Servicio</a></li>
 				<li> <a href="index.php?p=servicio/listar">Listar Servicio</a></li>
 				<li> <a href="index.php?p=ordenServicio/seleccionarCliente">Nueva Orden de Servicio</a></li>
 				<li> <a href="index.php?p=ordenServicio/listar">Listar Orden de Servicio</a></li>
 				<li> <a href="index.php?p=factura/seleccionarCliente">Nueva Factura</a></li>
 				<li> <a href="index.php?p=factura/listar">Listar Facturas</a></li>
 				
				<h4>Compras</h4>
 				<li> <a href="index.php?p=proveedor/crear">Nuevo Proveedor</a></li>
 				<li> <a href="index.php?p=proveedor/listar">Listar Proveedor</a></li>
 				<li> <a href="index.php?p=articulo/crear">Nuevo Articulo</a></li>
 				<li> <a href="index.php?p=articulo/listar">Listar Articulo</a></li>
 				<li> <a href="index.php?p=facturaCompra/seleccionarProveedor">Nueva Factura de Compra</a></li>
 				<li> <a href="index.php?p=facturaCompra/listar">Lista Facturas de Compra</a></li>
 				<?php if($_SESSION["tipo"]=="admin"){ ?>
 				<h4>Liquidacion de Sueldo</h4>
 				<li> <a href="index.php?p=empleado/crear">Nuevo Empleado</a></li>
 				<li> <a href="index.php?p=empleado/listar">Listar Empleado</a></li>
 				<li> <a href="index.php?p=categoria/crear">Nueva Categoria</a></li>
 				<li> <a href="index.php?p=categoria/listar">Listar Categoria</a></li>
 				<li> <a href="index.php?p=concepto/crear">Nuevo Concepto</a></li>
 				<li> <a href="index.php?p=concepto/listar">Listar Concepto</a></li>
 				<li> <a href="index.php?p=reciboSueldo/seleccionarEmpleado">Nuevo Recibo de Sueldo</a></li>
 				<li> <a href="index.php?p=reciboSueldo/listar">Listar Recibos de Sueldo</a></li>
				<?php } ?>
 			</ul>

		</div>
		<?php } ?>
		<div class="col-md-10">
			<?php include $this->contenido; ?>	
		</div>	
	</div>
	<div class="row">
		<div class="col-md-12">
			<p class="text-center"></p>
		</div>
	</div>		
</div>
	
</div>


</body>

</html>