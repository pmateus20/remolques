<?php 

$f=new form();

$f->iniciarForm("post","index.php?p=reciboSueldo/guardarLinea","guardarLinea");

$f->addLabel("Concepto");

echo ": ".$array["Descripcion"]."<br>";


$tipo=explode("/", $fila["Tipo"]);
				
$f->addLabel("Importe");
			
if(isset($tipo[1])){
	if($tipo[1]=="S"){$f->addTextbox("precio",$array2["salario"]);};
	if($tipo[1]=="P"){};
	if($tipo[1]=="D"){echo " Valor Definido";};
					
}
			
				
if(isset($tipo[2])){
	if($tipo[1]=="P"){echo " ".$tipo[2]."%";};
	if($tipo[1]=="D"){echo " $".$tipo[2];}
}	












$f->addTextbox("precio");

$f->addHidden("codConcepto",$array["Codigo"]);
$f->addHidden("reciboSueldo",$dato1);


$f->addSubmit("Guardar");



$f->finForm();





 ?>