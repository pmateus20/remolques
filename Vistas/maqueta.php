<!DOCTYPE html>
<html>
<head>
	<title>Maqueta</title>

	<link rel="stylesheet" href="Extenciones/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="Extenciones/jquery/jquery-ui.min.css">
	<script src="Extenciones/jquery/external/jquery/jquery.js"></script>
	<script src="Extenciones/jquery/jquery-ui.min.js"></script>
	<script src="Extenciones/bootstrap/js/bootstrap.min.js"></script>
	<script src="Extenciones/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="Extenciones/jquery-validation/dist/additional-methods.min.js"></script>
	
	
</head>
<body>
<div class="container">
	
	
	<div class="row">
		<div class="col-md-12">
		<div class="page-header"><a href="index.php"><img src="img/logo.jpg" alt="logo"></a></div>
		</div>
	</div>
	<?php if(isset($_SESSION["login"])){ ?>
	<div class="row">
		<div class="col-mb-12">
			<div class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header"></div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ventas <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li> <a href="index.php?p=cliente/crear">Nuevo Cliente</a></li>
					 				<li> <a href="index.php?p=cliente/listar">Listar Clientes</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=listaPrecio/cargar">Cargar Lista de Precios</a></li>
					 				<li> <a href="index.php?p=listaPrecio/listar">Listar Lista de Precios</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=servicio/crear">Nuevo Servicio</a></li>
					 				<li> <a href="index.php?p=servicio/listar">Listar Servicio</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=ordenServicio/seleccionarCliente">Nueva Orden de Servicio</a></li>
					 				<li> <a href="index.php?p=ordenServicio/listar">Listar Orden de Servicio</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=factura/seleccionarCliente">Nueva Factura</a></li>
					 				<li> <a href="index.php?p=factura/listar">Listar Facturas</a></li>
					 			</ul>
							</li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Compras <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li> <a href="index.php?p=proveedor/crear">Nuevo Proveedor</a></li>
					 				<li> <a href="index.php?p=proveedor/listar">Listar Proveedor</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=articulo/crear">Nuevo Articulo</a></li>
					 				<li> <a href="index.php?p=articulo/listar">Listar Articulo</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=facturaCompra/seleccionarProveedor">Nueva Factura de Compra</a></li>
					 				<li> <a href="index.php?p=facturaCompra/listar">Lista Facturas de Compra</a></li>
								</ul>
							</li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">RRHH <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<?php if($_SESSION["tipo"]=="admin"){ ?>
					 				<li> <a href="index.php?p=empleado/crear">Nuevo Empleado</a></li>
					 				<li> <a href="index.php?p=empleado/listar">Listar Empleado</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=categoria/crear">Nueva Categoria</a></li>
					 				<li> <a href="index.php?p=categoria/listar">Listar Categoria</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=concepto/crear">Nuevo Concepto</a></li>
					 				<li> <a href="index.php?p=concepto/listar">Listar Concepto</a></li>
					 				<li class="divider"></li>
					 				<li> <a href="index.php?p=reciboSueldo/seleccionarEmpleado">Nuevo Recibo de Sueldo</a></li>
					 				<li> <a href="index.php?p=reciboSueldo/listar">Listar Recibos de Sueldo</a></li>
					 				<?php } ?>
								</ul>
							</li>
							
						</ul>
						
						<p class="navbar-text navbar-right"><a href="index.php?p=login/logout">Desloguearse</a></p>

					</div>
				</div>
			</div>	
		</div>
	</div>
	
	<?php } ?>
	<div class="row">
		
		<div class="col-md-12">
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