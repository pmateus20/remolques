<div class="panel panel-info">
  <div class="panel-heading"><h4>Ingresar Periodo</h4></div>
  <div class="panel-body">

    <?php 

    $f=new form();

    $f->iniciarForm("POST","index.php?p=reciboSueldo/guardar","reciboSueldo");

    $f->group(10);  
    $f->addLabel("Periodo");
    $f->addTextbox("fecha",null,null);
    $f->endGroup();


    $f->addHidden("empleado",$dato1);


    $f->group(10);  
    $f->addSubmit("Guardar");
    $f->endGroup();

    $f->finForm();













     ?>
   </div>
</div>


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