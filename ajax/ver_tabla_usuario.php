<?php require_once('../Connections/conex.php'); ?>
<?php
$query_usuario= "SELECT *FROM login  ORDER BY nombre ";
$usuario= mysqli_query($conex, $query_usuario) or die(mysqli_error());
$row_usuario= mysqli_fetch_assoc($usuario);
$totalRows_usuario= mysqli_num_rows($usuario);
?>

<?php if ($totalRows_usuario == 0) { // Show if recordset empty ?>
 <br><br>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-info"></i> Alert!</h4>
      <strong>No hay usuarios registrados.</strong> Si desea puede agregar uno nuevo.
    </div>

  <?php } // Show if recordset empty ?>
  <?php if ($totalRows_usuario > 0) { // Show if recordset not empty ?>

<h3 class="box-title">Lista de Usuarios</h3>
</div>
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Rol</th>
        <th >Estado </th>
        <th >Acciones</th>
    </tr>
    </thead>
  <tbody>
    <?php do {       ?> 
      <tr>
        <td> <?php echo $row_usuario['usuario']; ?> </td>
        <td><?php echo $row_usuario['nombre']; ?> <?php echo $row_usuario['apellido']; ?></td>
        <td align="center">
            <?php    if($row_usuario['rol']==1)  { ?> 
              <form  method="get" action="javascript:admi('<?php echo $row_usuario['id_usuario']; ?>')">
                <button type="submit" class="btn btn-primary btn-xs">Administrador</button>
              </form>
            <?php  }   else {?> 

              <form  method="get" action="javascript:usuario('<?php echo $row_usuario['id_usuario']; ?>')"> 
                <button type="submit" class="btn btn-info btn-xs">Usuario</button>
              </form>
            <?php  } ?> 
        </td>                  
        <td align="center">
             <?php    if($row_usuario['estado']==1)  { ?> 
              <form  method="get" action="javascript:activo('<?php echo $row_usuario['id_usuario']; ?>')">
                <button type="submit" class="btn btn-success btn-xs">Activo</button>
              </form>
            <?php  }   else {?> 

              <form  method="get" action="javascript:inactivo('<?php echo $row_usuario['id_usuario']; ?>')"> 
                <button type="submit" class="btn btn-danger btn-xs">Inactivo</button>
              </form>
            <?php  } ?>                         
          </td>
          <td>
             <a class="btn btn-primary btn-sm fun"  data-toggle="modal" data-target="#foto<?php echo $row_usuario['id_usuario']; ?>">
              <i class='glyphicon glyphicon-picture'></i> 
            </a>
            <a type="button" class="btn btn-warning btn-sm fun" data-toggle="modal" data-target="#editar<?php echo $row_usuario['id_usuario'];?>">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn btn-danger btn-sm fun"  data-toggle="modal" data-target="#eliminar<?php echo $row_usuario['id_usuario']; ?>">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
           
            <?php include("../modal/editar_usuario.php");?>

            <?php include("../modal/eliminar_usuario.php");?>
             <?php include("../modal/foto.php");?>
          </td>                        
        </tr>
 <?php } while ($row_usuario = mysqli_fetch_assoc($usuario)); ?>    
        </tbody>
        <tfoot>
          <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Rol</th>
            <th >Estado </th>
            <th >Acciones</th>
          </tr>
        </tfoot>
      </table>
<script>
$(document).ready(function() {
    
if ( $.fn.dataTable.isDataTable( '#example1' ) ) {
table = $('#example1').DataTable( );
 paging: true
 responsive: true
}
else {
table =  $('#example1').DataTable({
  "language":{
   "lengthMenu":"Mostrar _MENU_ registros por página.",
   "zeroRecords": "Lo sentimos. No se encontraron registros.",
         "info": "Mostrando página _PAGE_ de _PAGES_",
         "infoEmpty": "No hay registros aún.",
         "infoFiltered": "(filtrados de un total de _MAX_ registros)",
         "search" : "Búsqueda",
         "LoadingRecords": "Cargando ...",
         "Processing": "Procesando...",
         "SearchPlaceholder": "Comience a teclear...",
         "paginate": {
 "previous": "Anterior",
 "next": "Siguiente",
 }
  }


 });
}

});
</script>
 <?php } // Show if recordset not empty ?>