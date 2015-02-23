<?php 

$f=new form();

$f->iniciarForm("post","index.php?p=reciboSueldo/guardarLinea","guardarLinea");

$f->addLabel("Concepto");

echo ": ".$array["Descripcion"]."<br>";


$tipo=explode("/", $array["Tipo"]);
				

			
if(isset($tipo[1])){
	if($tipo[1]=="S"){
		echo "<strong>Tipo:</strong>Sueldo<br>";
		$f->addLabel("Importe");
		$f->addTextbox("precio",$array2["salario"]);
	};
	if($tipo[1]=="P"){
		echo "<strong>Tipo:</strong>Porcentual<br>";
		echo "<strong>Porcentaje:</strong>".$tipo[2]."%<br>";
		$f->addLabel("Importe");
		$imp=($array2["salario"]*$tipo[2])/100;
		$f->addTextbox("precio",$imp);
	};
	if($tipo[1]=="D"){
		echo "<strong>Tipo:</strong>Valor Definido<br>";
		echo "<strong>Valor Predefinido:</strong>$".$tipo[2]."<br>";
		$f->addLabel("Importe");
		$f->addTextbox("precio",$tipo[2]);
	};
					
}
			
				
$f->addHidden("codConcepto",$array["Codigo"]);
$f->addHidden("reciboSueldo",$array2["codigo"]);


$f->addSubmit("Guardar");



$f->finForm();





 ?>