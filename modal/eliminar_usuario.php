<div class="modal fade bs-example-modal-sm" id="eliminar<?php echo $row_usuario['id_usuario']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar usuario</h4>
      </div>
      <div class="modal-body">
        ¿Esta seguro?
        Usuario: <?php echo $row_usuario['usuario']; ?>
      
      </div>
      <div class="modal-footer">
        <button type="button"  onclick="eliminar('<?php echo $row_usuario['id_usuario']; ?>')"  class="btn btn-primary">Eliminar</button>
      </div>
    </div></form>
  </div>
</div>