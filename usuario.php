
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Usuarios</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="css/smoke.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="css/fileinput.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


</head>
<body class="hold-transition skin-blue sidebar-mini" onLoad="ver_tabla_usuario()">
<div class="wrapper">
       <?php include('modal/add_usuario.php')?>
<div class="container-fluid">
  <br>
 <div class="row">
    <div class="col-md-2 col-md-offset-9">
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-plus" aria-hidden="true"></i> Agregar
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div id="ver_tabla_usuario"></div>
    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoke.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/fileinput.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>


