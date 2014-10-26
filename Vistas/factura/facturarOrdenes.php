<?php 

$f=new form();



$r=array(
	array("id"=>"1","fecha"=>"12/10/14","importe"=>"200"),
	array("id"=>"2","fecha"=>"15/10/14","importe"=>"180"),
	array("id"=>"3","fecha"=>"20/10/14","importe"=>"252"),
	array("id"=>"4","fecha"=>"22/10/14","importe"=>"198")
	);

 ?>

 <table class='table table-striped'>
 	<tr>
 		<th>Fecha</th>
 		<th>Numero de Orden</th>
 		<th>Importe</th>
 		<th></th>
 	</tr>
 	<?php foreach ($r as $value) {
		echo "<tr>";
			foreach ($value as $dato) {
				echo "<td>".$dato."</td>";
			}
			echo "<td>";
			$f->addCheckbox($value["id"],"orden".$value["id"]);
			echo "</td>";
		echo "</tr>";
	} ?>

 </table>

 <?php $f->addSubmit("Facturar"); ?>