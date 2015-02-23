<?php 

$f=new form();

$f->iniciarForm("POST","index.php?p=reciboSueldo/guardar","reciboSueldo");

$f->addLabel("Periodo");
$f->addTextbox("fecha",null,null);


$f->addHidden("empleado",$dato1);



$f->addSubmit("Guardar");


$f->finForm();












 ?>


 <script>
$(function() {
    $("#fecha").datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });
});


 </script>