<?php 

$arrayURL=$_GET["r"];
$arrayRec=stripcslashes($arrayURL);
$arrayRec=urldecode($arrayRec);
$factura=unserialize($arrayRec);

$arrayURL2=$_GET["c"];
$arrayRec2=stripcslashes($arrayURL2);
$arrayRec2=urldecode($arrayRec2);
$lineas=unserialize($arrayRec2);


require_once('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage("P","A4");


$pdf->SetXY(20,10);
$pdf->Cell(170,50,"",1);
$pdf->SetXY(95,10);
$pdf->Cell(15,15,"",1);
$pdf->SetXY(20,60);
$pdf->Cell(170,30,"",1);
$pdf->SetXY(20,90);
$pdf->Cell(20,90,"",1);
$pdf->Cell(75,90,"",1);
$pdf->Cell(25,90,"",1);
$pdf->Cell(25,90,"",1);
$pdf->Cell(25,90,"",1);
$pdf->SetXY(20,180);
$pdf->Cell(120,30,"",1);
$pdf->Cell(25,10,"",1);
$pdf->Cell(25,10,"",1);
$pdf->SetXY(140,190);
$pdf->Cell(25,10,"",1);
$pdf->Cell(25,10,"",1);
$pdf->SetXY(140,200);
$pdf->Cell(25,10,"",1);
$pdf->Cell(25,10,"",1);

//Datos fijos

$pdf->SetXY(25,15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,5,"Remolque Ruta 9",0,2);
$pdf->Cell(10,5,"Hipolito Yrigoyen 399 - Trancas",0,2);
$pdf->Cell(10,5,"CUIT 23-14716957-4");

$pdf->SetXY(100,15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,5,$factura["tipo"]); //letra

$pdf->SetXY(115,15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,5,"Numero ");
$pdf->Cell(10,5,str_pad($factura["puntoVenta"], 4,"0",STR_PAD_LEFT)); //pto venta
$pdf->Cell(10,5,"-");
$pdf->Cell(10,5,str_pad($factura["numero"], 9,"0",STR_PAD_LEFT)); //numero

//fecha
$pdf->SetXY(115,25);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20,5,"Fecha: ");
$pdf->Cell(20,5,$factura["fecha"]); //fecha


$pdf->SetXY(115,35);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20,5,"Responsable Inscripto");

$pdf->SetXY(25,65);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,5,"Cliente: ",0,2);
$pdf->Cell(10,5,"Domicilio: ",0,2);
$pdf->Cell(10,5,"CUIT:");

$pdf->SetXY(20,90);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,5,"Cod.",0,0,"C");
$pdf->Cell(75,5,"Descripcion",0,0,"C");
$pdf->Cell(25,5,"Cantidad",0,0,"C");
$pdf->Cell(25,5,"Precio Unit.",0,0,"C");
$pdf->Cell(25,5,"Precio Total",0,0,"C");




//cliente
$pdf->SetXY(45,65);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,5,$factura["cliente"],0,2);
$pdf->Cell(10,5,$factura["domicilio"],0,2);
$pdf->Cell(10,5,$factura["cuit"]);


//lineas

$y=95;
$total=0;
foreach ($lineas as $fila) {
	
		$pdf->SetXY(20,$y);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(20,5,$fila["Codigo"],0,0,"C");
		$pdf->Cell(75,5,$fila["Descripcion"]);
		$pdf->Cell(25,5,$fila["Cantidad"],0,0,"C");
		$pdf->Cell(25,5,round($fila["Precio"]),0,0,"C");
		$precio=$fila["Cantidad"]*$fila["Precio"];
		$pdf->Cell(25,5,round($precio),0,0,"C");
		$y=$y+5;
		$total=$total+$precio;
}




//totales

$pdf->SetXY(20,180);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(120,30,"Forma de Pago 30 dias Fecha Factura");
$pdf->Cell(25,10,"Neto",1);
$neto=round($total/1.21);
$pdf->Cell(25,10,$neto,1);
$pdf->SetXY(140,190);
$pdf->Cell(25,10,"IVA",1);
$pdf->Cell(25,10,round($total-$neto),1);
$pdf->SetXY(140,200);
$pdf->Cell(25,10,"Total",1);
$pdf->Cell(25,10,$total,1);



/*
$pdf->Cell(10,10,"",1);
$pdf->Cell(30,10,"",1);
$pdf->Cell(20,10,"",1);
$pdf->Cell(20,10,"",1);
$pdf->Cell(20,10,"",1);
//Empiesa descripcion 10,40
$pdf->SetXY(20,40);
$pdf->Cell(10,80,"",1);
$pdf->Cell(50,80,"",1);
$pdf->Cell(20,80,"",1);
$pdf->Cell(20,80,"",1);
//Totales 10,175
$pdf->SetXY(20,120);
$pdf->Cell(60,10,"",1);
$pdf->Cell(20,10,"",1);
$pdf->Cell(20,10,"",1,2);
$pdf->Cell(20,10,"",1);

$pdf->SetXY(20,120);
$pdf->Cell(100,30,"",1);

$pdf->SetXY(20,150);
$pdf->Cell(100,30,"",1);

*/

/*
//datos

$pdf->SetFont('Arial','B',12);

$pdf->SetXY(25,15);
$pdf->Cell(10,5,"Remolque Ruta 9",0,2);
$pdf->Cell(10,5,"Hipolito Yrigoyen 399 - Trancas",0,2);
$pdf->Cell(10,5,"CUIT 23-14716957-4");

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(90,32);
$pdf->Cell(15,10,"Periodo: ");
$pdf->Cell(10,10,$recibo["periodo"]);

//datos empleado
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(20,37);
$pdf->Cell(10,10,"Legajo",0,0,"C");//legajo
$pdf->Cell(30,10,"Apellido y Nombre",0,0,"C");//apellido y nombre
$pdf->Cell(20,10,"CUIL",0,0,"C");//cuil
$pdf->Cell(20,10,"Fecha de Ing.",0,0,"C");//fecha de ingreso
$pdf->Cell(20,10,"Sueldo",0,0,"C");//salario

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(20,42);
$pdf->Cell(10,10,$recibo["legajo"],0,0,"C");//legajo
$pdf->Cell(30,10,$recibo["empleado"],0,0,"C");//apellido y nombre
$pdf->Cell(20,10,$recibo["cuil"],0,0,"C");//cuil
$pdf->Cell(20,10,$recibo["fechaIng"],0,0,"C");//fecha de ingreso
$pdf->Cell(20,10,"$".$recibo["salario"],0,0,"C");//salario


//lineas


$pdf->SetFont('Arial','B',7);
$pdf->SetXY(20,47);
$pdf->Cell(10,10,"Cod.",0,0,"C");
$pdf->Cell(50,10,"Concepto",0,0,"C");
$pdf->Cell(20,10,"Haberes",0,0,"C");
$pdf->Cell(20,10,"Deducciones",0,0,"C");

$y=50;
$totalH=0;
foreach ($lineas as $fila) {
	$tipo=explode("/", $fila["Tipo"]);
	if($tipo[0]=="D"){
		
		$pdf->SetFont('Arial','',8);
		$pdf->SetXY(20,$y);
		$pdf->Cell(10,10,$fila["Codigo"],0,0,"C");
		$pdf->Cell(50,10,$fila["Descripcion"],0,0);
		$pdf->Cell(20,10,$fila["Precio"],0,0,"C");
		$pdf->Cell(20,10,"",0,0,"C");
		$y=$y+5;
		$totalH=$totalH+$fila["Precio"];
	}
}

$totalD=0;

foreach ($lineas as $fila) {
	$tipo=explode("/", $fila["Tipo"]);
	if($tipo[0]=="H"){
		
		$pdf->SetFont('Arial','',8);
		$pdf->SetXY(20,$y);
		$pdf->Cell(10,10,$fila["Codigo"],0,0,"C");
		$pdf->Cell(50,10,$fila["Descripcion"],0,0);
		$pdf->Cell(20,10,"",0,0,"C");
		$pdf->Cell(20,10,$fila["Precio"],0,0,"C");
		$y=$y+10;
		$totalD=$totalD+$fila["Precio"];
	}
}


//totales
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(80,120);
$pdf->Cell(20,10,$totalH,0,0,"C");//total habere
$pdf->Cell(20,10,$totalD,0,0,"C");//total deduscciones

//neto
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(80,130);
$pdf->Cell(20,10,"Neto",0,0,"C");
$pdf->Cell(20,10,$totalH-$totalD,0,0,"C");//neto

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(36,140);
$pdf->Cell(20,10,"Recibo Leyes 17250, 20744 y 21297",0,0,"C");

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(78,168);
$pdf->Cell(40,10,"Firma Empleador","T",0,"C");


//datos duplicado


$pdf->SetFont('Arial','B',12);

$pdf->SetXY(175,15);
$pdf->Cell(10,5,"Remolque Ruta 9",0,2);
$pdf->Cell(10,5,"Hipolito Yrigoyen 399 - Trancas",0,2);
$pdf->Cell(10,5,"CUIT 23-14716957-4");

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(240,32);
$pdf->Cell(15,10,"Periodo: ");
$pdf->Cell(10,10,$recibo["periodo"]);

//datos empleado
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(170,37);
$pdf->Cell(10,10,"Legajo",0,0,"C");//legajo
$pdf->Cell(30,10,"Apellido y Nombre",0,0,"C");//apellido y nombre
$pdf->Cell(20,10,"CUIL",0,0,"C");//cuil
$pdf->Cell(20,10,"Fecha de Ing.",0,0,"C");//fecha de ingreso
$pdf->Cell(20,10,"Sueldo",0,0,"C");//salario

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(170,42);
$pdf->Cell(10,10,$recibo["legajo"],0,0,"C");//legajo
$pdf->Cell(30,10,$recibo["empleado"],0,0,"C");//apellido y nombre
$pdf->Cell(20,10,$recibo["cuil"],0,0,"C");//cuil
$pdf->Cell(20,10,$recibo["fechaIng"],0,0,"C");//fecha de ingreso
$pdf->Cell(20,10,"$".$recibo["salario"],0,0,"C");//salario



//lineas


$pdf->SetFont('Arial','B',7);
$pdf->SetXY(170,47);
$pdf->Cell(10,10,"Cod.",0,0,"C");
$pdf->Cell(50,10,"Concepto",0,0,"C");
$pdf->Cell(20,10,"Haberes",0,0,"C");
$pdf->Cell(20,10,"Deducciones",0,0,"C");


$y=50;
$totalH=0;
foreach ($lineas as $fila) {
	$tipo=explode("/", $fila["Tipo"]);
	if($tipo[0]=="D"){
		
		$pdf->SetFont('Arial','',8);
		$pdf->SetXY(170,$y);
		$pdf->Cell(10,10,$fila["Codigo"],0,0,"C");
		$pdf->Cell(50,10,$fila["Descripcion"],0,0);
		$pdf->Cell(20,10,$fila["Precio"],0,0,"C");
		$pdf->Cell(20,10,"",0,0,"C");
		$y=$y+5;
		$totalH=$totalH+$fila["Precio"];
	}
}

$totalD=0;

foreach ($lineas as $fila) {
	$tipo=explode("/", $fila["Tipo"]);
	if($tipo[0]=="H"){
		
		$pdf->SetFont('Arial','',8);
		$pdf->SetXY(170,$y);
		$pdf->Cell(10,10,$fila["Codigo"],0,0,"C");
		$pdf->Cell(50,10,$fila["Descripcion"],0,0);
		$pdf->Cell(20,10,"",0,0,"C");
		$pdf->Cell(20,10,$fila["Precio"],0,0,"C");
		$y=$y+10;
		$totalD=$totalD+$fila["Precio"];
	}
}


//totales
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(230,120);
$pdf->Cell(20,10,$totalH,0,0,"C");//total habere
$pdf->Cell(20,10,$totalD,0,0,"C");//total deduscciones

//neto
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(230,130);
$pdf->Cell(20,10,"Neto",0,0,"C");
$pdf->Cell(20,10,$totalH-$totalD,0,0,"C");//neto


$pdf->SetFont('Arial','B',8);
$pdf->SetXY(186,140);
$pdf->Cell(20,10,"Recibo Leyes 17250, 20744 y 21297",0,0,"C");

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(228,168);
$pdf->Cell(40,10,"Firma Empleado","T",0,"C");
*/

$pdf->Output();

 ?>