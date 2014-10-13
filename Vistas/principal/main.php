<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quos quam laboriosam deserunt obcaecati eaque officiis
 minima tempore blanditiis, dolorem. Provident illo id culpa quibusdam ullam quod nobis consectetur veniam!</p>

<?php 


$array=array(
	array("nombre" => "matias", "apellido"=>"pascual","edad"=>"28"),
	array("nombre" => "ramon", "apellido"=>"garcia","edad"=>"28")

	);	

$tb=new tabla($array);
$tb->mostrarTabla();

 ?>
