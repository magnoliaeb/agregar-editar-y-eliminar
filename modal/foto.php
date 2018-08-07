<div class="modal fade" id="foto<?php echo $row_usuario['id_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Foto</h4>
      </div>
      <div class="modal-body">
 <form enctype="multipart/form-data">
        <div class="form-group">
            <input id="archivo<?php echo $row_usuario['id_usuario']; ?>" name="imagenes[]" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
        </div>
    </form>	  
      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-primary" id="btnFoto<?php echo $row_usuario['id_usuario']; ?>">Actualizar</button>

      </div>
      </form>
    </div>
  </div>
</div>
<script>

    $("#archivo<?php echo $row_usuario['id_usuario']; ?>").fileinput({
        uploadUrl: 'ajax/upload.php?id=<?php echo $row_usuario['id_usuario']; ?>',
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxImageWidth : 165 , 
        maxImageHeight : 165 , 
        resizePreference : 'altura' , 
        maxFileCount : 1 , 
        resizeImage : true ,
        allowedFileTypes: ['image'],
        resizeImageQuality:1.00,
        resizeIfSizeMoreThan:0
    });
    
    // Actualizar
$('#btnFoto<?php echo $row_usuario['id_usuario']; ?>').click(function() {
        ver_tabla_usuario();
        $("#foto").modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    
});


</script>