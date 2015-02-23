


<?php 
$arrayURL=serialize($array);

$arrayURL=urlencode($arrayURL);

$arrayURL2=serialize($array2);

$arrayURL2=urlencode($arrayURL2);

echo "<a href='Extenciones/fpdf/recibo.php?r=$arrayURL&c=$arrayURL2' id='imprimir'>Imprimir</a>"
 ?>


<script>
	$("#imprimir").click(function (event) {
        event.preventDefault();
        window.open($(this).attr("href"), "Recibo", "scrollbars=yes");
    });
	

</script>