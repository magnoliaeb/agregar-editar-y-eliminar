<!-- Modal -->
<div class="modal fade" id="editar<?php echo $row_usuario['id_usuario'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
      </div>
      <div class="modal-body">

<form id="formEditar<?php echo $row_usuario['id_usuario'];?>" data-smk-icon="glyphicon-remove" action="javascript:()">
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Nombre</label></div>
      <div class="col-md-10">
    <input class="form-control" id="nombre<?php echo $row_usuario['id_usuario'];?>" name="nombre"  value="<?php echo $row_usuario['nombre'];?>"
    placeholder="Nombre" required maxlength="25" >
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Apellido</label></div>
      <div class="col-md-10">
    <input class="form-control" id="apellido<?php echo $row_usuario['id_usuario'];?>" name="apellido"  value="<?php echo $row_usuario['apellido'];?>"
    placeholder="Apellido" required maxlength="25" >
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Estado</label></div>
      <div class="col-md-10">
<select class="form-control" id="estado<?php echo $row_usuario['id_usuario'];?>" name="estado" required >
				  <option value="1" <?php if (!(strcmp(1, htmlentities($row_usuario['estado'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Activo</option>
          <option value="0" <?php if (!(strcmp(0, htmlentities($row_usuario['estado'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Inactivo</option>
        </select>       </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-4"><label class="control-label">Fecha Nacimiento</label></div>
      <div class="col-md-8">
          <input type="date" class="form-control" id="fecha<?php echo $row_usuario['id_usuario'];?>"  name="fecha"   value="<?php echo $row_usuario['fecha'];?>"  required>
      </div>
  </div>
</div>
<br>
 <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Sexo</label></div>
      <div class="col-md-10">
<select class="form-control" id="sexo<?php echo $row_usuario['id_usuario'];?>" name="sexo" required>
		<option value="0" <?php if (!(strcmp(1, htmlentities($row_usuario['estado'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Hombre</option>
          <option value="1" <?php if (!(strcmp(0, htmlentities($row_usuario['estado'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Mujer</option>
        </select>      </div>
  </div>
</div>	
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Usuario</label></div>
      <div class="col-md-10">
        <input class="form-control" id="usuario<?php echo $row_usuario['id_usuario'];?>" name="usuario"  value="<?php echo $row_usuario['usuario'];?>"
    placeholder="Usuario" required maxlength="10" ></div>
  </div>
</div>
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Password</label></div>
      <div class="col-md-10">
         <div class="input-group">
      <input type="password" class="form-control" data-smk-strongPass="medium" maxlength="15"
      id="pass1" name="pass1"  value="<?php echo $row_usuario['password'];?>" required >
      <span class="input-group-addon">medium</span>
    </div>
      </div>
  </div>
</div>			  	
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-4"><label class="control-label">Repetir Password</label></div>
      <div class="col-md-8">
           <input type="password" class="form-control" maxlength="15"
           id="pass2<?php echo $row_usuario['id_usuario'];?>"  value="<?php echo $row_usuario['password'];?>">
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Rol</label></div>
      <div class="col-md-10">
<select class="form-control" id="rol<?php echo $row_usuario['id_usuario'];?>" name="rol" required>
		<option value="1" <?php if (!(strcmp(1, htmlentities($row_usuario['estado'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Admin</option>
          <option value="0" <?php if (!(strcmp(0, htmlentities($row_usuario['estado'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Usuario</option>
        </select>      </div>
  </div>
</div>				  	  
  
<input type="hidden"  name="id_usuario" id="id_usuario<?php echo $row_usuario['id_usuario'];?>" value="<?php echo $row_usuario['id_usuario'];?>" size="32">
<input type="hidden"  name="viejo_usuario" id="viejo_usuario<?php echo $row_usuario['id_usuario'];?>" value="<?php echo $row_usuario['usuario'];?>" size="32">

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary" id="btnEditar<?php echo $row_usuario['id_usuario'];?>">Guardar</button>
      </div>
    </div>
  </div>
</div>
					
<script>


$('#btnEditar<?php echo $row_usuario['id_usuario'];?>').click(function() {
    if ($('#formEditar<?php echo $row_usuario['id_usuario'];?>').smkValidate()) {
                 if( $.smkEqualPass('#pass1', '#pass2') ){

      // Code here
     var dataString=
        'nombre='+$('#nombre<?php echo $row_usuario['id_usuario'];?>').val()+
        '&apellido='+$('#apellido<?php echo $row_usuario['id_usuario'];?>').val()+
        '&sexo='+$('#sexo<?php echo $row_usuario['id_usuario'];?>').val()+
        '&estado='+$('#estado<?php echo $row_usuario['id_usuario'];?>').val()+
        '&fecha='+$('#fecha<?php echo $row_usuario['id_usuario'];?>').val()+
        '&usuario='+$('#usuario<?php echo $row_usuario['id_usuario'];?>').val()+
        '&pass2='+$('#pass2<?php echo $row_usuario['id_usuario'];?>').val()+
        '&rol='+$('#rol<?php echo $row_usuario['id_usuario'];?>').val()+
        '&viejo_usuario='+$('#viejo_usuario<?php echo $row_usuario['id_usuario'];?>').val()+
        '&id_usuario='+$('#id_usuario<?php echo $row_usuario['id_usuario'];?>').val();

    $.ajax({
        type:"POST",
        url:"ajax/editar_usuario.php",
        data:dataString
    }).done(function(data){
      if(data==1){
          $.smkAlert({
          text: 'Excelente',
          type: 'success'
      });
        ver_tabla_usuario();
        $("#editar").modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
			}
      else if(data==3){
           $.smkAlert({
           text: 'Usuario Duplicado',
           type: 'warning'
          });
      }
			else{
            $.smkAlert({
            text: 'Error',
            type: 'danger'
        });
			}
    })
  }
  }
});

  
</script>  