<div class="panel panel-info">
  <div class="panel-heading"><h4>Editar Concepto</h4></div>
  <div class="panel-body">

	<!--<h3>Editar Concepto</h3>-->
	<?php 	

	$f=new form();




	$a=$array;
	$f->iniciarForm("post","index.php?p=concepto/guardarEdicion","editarConcepto");	
	$f->addHidden("id",$a["Codigo"]);


	$f->addLabel("Descripcion");
	$f->addTextbox("descripcion",$a["Descripcion"]);

	
	$f->addLabel("Tipo");
	$tipo=explode("/", $a["Tipo"]);

	$f->addCombo("tipo",array("Haber"=>"D","Deduccion"=>"H"),$tipo[0]);


						
						
	?>
	<div class="radio">
		<label>
			<input type="radio" name="subtipo" id="st1" value="S" <?php  if($tipo[1]=="S"){echo " checked";}; ?>>
			Sueldo
	 	</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="subtipo" id="st2" value="P" <?php if($tipo[1]=="P"){echo " checked";}; ?>>
			Porcentual
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="subtipo" id="st2" value="D" <?php if($tipo[1]=="D"){echo " checked";}; ?>>
			Valor Definido
		</label>
	</div>
	<?php 
	if(isset($tipo[2])){
						if($tipo[1]=="P"){
							$valor1="value=".$tipo[2];
							$valor2="";
							echo "<script>$(document).ready(function(){ $('#D').hide();});</script>";

						};
						if($tipo[1]=="D"){
							$valor1="";
							$valor2="value=".$tipo[2];
							echo "<script>$(document).ready(function(){ $('#P').hide();});</script>";
						};
					}	


	?>
	<div class='row'>
		<div class='form-group col-lg-4' >
			<div id="P">
				<label>Porcentaje</label>
				 <div class="input-group">
					<input type="text" name="adicional1" class="form-control" <?php echo $valor1 ?>> <div class="input-group-addon">%</div>
				</div>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='form-group col-lg-4' >
			<div id="D">
				<label>Valor Predeterminado</label>
				<div class="input-group">
					<div class="input-group-addon">$</div><input type="text" name="adicional2" class="form-control" <?php echo $valor2 ?>> 
				</div>
			</div>
		</div>
	</div>

	<?php

	$f->addSubmit("Guardar");

	$f->finForm();



	 ?>
    </div>
</div>


<script>



$(document).ready(function(){ 
    $("input[name$='subtipo']").click(function() {
    	$("#P").hide();
    	$("#D").hide();
    	$("input[name$='adicional1']").val("");
    	$("input[name$='adicional2']").val("");
        var test = $(this).val();
        $("#"+test).show();
    }); 
});



 </script>