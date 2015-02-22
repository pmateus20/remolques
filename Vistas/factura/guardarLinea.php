<div class="panel panel-info">
  <div class="panel-heading"><h4>Ingresar Cantidad</h4></div>
  <div class="panel-body">



		<?php 

		$f=new form();

		$f->iniciarForm("post","index.php?p=factura/guardarLinea","guardarLinea");
		$f->group(10);
		$f->addLabel("Servicio");
		echo ": ".$array["Descripcion"]."<br>";
		$f->endGroup();

		$f->group(10);
		$f->addLabel("Cantidad");
		$f->addTextbox("cantidad");
		$f->endGroup();

		$f->group(10);
		$f->addLabel("Precio");
		$f->addTextbox("precio",$array["Precio"]);
		$f->addHidden("idServicio",$array["Codigo"]);
		$f->addHidden("factura",$dato1);
		$f->endGroup();

		$f->group(10);
		$f->addSubmit("Guardar");
		$f->endGroup();


		$f->finForm();





		 ?>

     </div>
</div>