<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo usuario</h4>
      </div>
      <div class="modal-body">
<form id="formEmpty" data-smk-icon="glyphicon-remove" action="javascript:()">
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Nombre</label></div>
      <div class="col-md-10">
    <input class="form-control" id="nombre" name="nombre"
    placeholder="Nombre" required maxlength="25" >
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Apellido</label></div>
      <div class="col-md-10">
    <input class="form-control" id="apellido" name="apellido"
    placeholder="Apellido" required maxlength="25" >
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Estado</label></div>
      <div class="col-md-10">
<select class="form-control" id="estado" name="estado" required>
					<option value="1" selected>Activo</option>
          <option value="0">Inactivo</option>
        </select>      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-4"><label class="control-label">Fecha Nacimiento</label></div>
      <div class="col-md-8">
          <input type="date" class="form-control" id="fecha"  name="fecha" required>
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Sexo</label></div>
      <div class="col-md-10">
        <select class="form-control" id="sexo" name="sexo" required>
          <option value="" >--Seleccione--</option>
					<option value="0" >Hombre</option>
          <option value="1" >Mujer</option>
        </select>
      </div>
  </div>
</div>	
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Usuario</label></div>
      <div class="col-md-10">
        <input class="form-control" id="usuario" name="usuario"
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
      id="pass1" name="pass1" required >
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
           <input type="password" class="form-control" id="pass2" name="pass2" maxlength="15" >
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Rol</label></div>
      <div class="col-md-10">
        <select class="form-control" id="rol" name="rol" required style="width: 100%;">
          <option value="0" selected>Usuario</option>
          <option value="1">Administrador</option>
        </select>  
      </div>
  </div>
</div>				  	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btnClear">Clear</button>
        <button type="submit" class="btn btn-primary" id="btnEmpty">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>