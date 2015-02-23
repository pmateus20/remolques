<h3>Nuevo Concepto</h3>
<?php 	

$f=new form();


$f->iniciarForm("post","index.php?p=concepto/guardar","nuevoConcepto");
$f->addLabel("Descripcion");
$f->addTextbox("descripcion");
$f->addLabel("Tipo");
$f->addCombo("tipo",array("Haber"=>"D","Deduccion"=>"H"));
?>
<div class='row'>
	<div class='form-group col-lg-4' >
		<div class="radio">
			<label>
				<input type="radio" name="subtipo" id="st1" value="S">
				Sueldo
		 	</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="subtipo" id="st2" value="P">
				Porcentual
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="subtipo" id="st2" value="D">
				Valor Definido
			</label>
		</div>
	</div>
</div>
<div class='row'>
	<div class='form-group col-lg-4' >
		<div id="P">
			<label>Porcentaje</label>
			 <div class="input-group">
				<input type="text" name="adicional1" class="form-control"> <div class="input-group-addon">%</div>
			</div>
		</div>
	</div>
</div>
<div class='row'>
	<div class='form-group col-lg-4' >
		<div id="D">
			<label>Valor Predeterminado</label>
			<div class="input-group">
				<div class="input-group-addon">$</div><input type="text" name="adicional2" class="form-control">
			</div>
		</div>
	</div>
</div>

<?php

$f->addSubmit("Guardar");
$f->finForm();

 ?>

 <script>
$(document).ready(function(){ 
	$("#P").hide();
	$("#D").hide();
});

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