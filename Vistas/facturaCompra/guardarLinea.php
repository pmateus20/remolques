<div class="panel panel-info">
  <div class="panel-heading"><h4>Ingresar Cantidad y Precio</h4></div>
  <div class="panel-body">

		<?php 

		$f=new form();

		$f->iniciarForm("post","index.php?p=facturaCompra/guardarLinea","guardarLinea");
		$f->group(10);
		$f->addLabel("Articulo");
		echo ": ".$array["Descripcion"]."<br>";
		$f->endGroup();

		$f->group(10);
		$f->addLabel("Cantidad");
		$f->addTextbox("cantidad");
		$f->endGroup();

		$f->group(10);
		$f->addLabel("Precio");
		$f->addTextbox("precio");
		$f->addHidden("idArticulo",$array["Codigo"]);
		$f->addHidden("facturaCompra",$dato1);
		$f->endGroup();

		$f->group(10);
		$f->addSubmit("Guardar");
		$f->endGroup();


		$f->finForm();





		 ?>

      </div>
</div>