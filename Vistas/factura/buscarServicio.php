<div class="modal fade" id="buscarServicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Buscar Servicio</h4>
      </div>
      <div class="modal-body">
      <?php 
      $d=array(
      array("Codigo"=>"1","Descripcion"=>"Km Recorridos Asflato"),
      array("Codigo"=>"2","Descripcion"=>"Movida")
      );

      $tb=new tabla($d);

      $tb->mostrarTabla();


       ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Aceptar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>