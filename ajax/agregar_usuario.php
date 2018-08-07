<?php require_once('../Connections/conex.php')?>

<?php
if (!isset($_SESSION)) {
  session_start();
}
$apellido = mb_strtoupper($_POST['apellido']);
$nombre = mb_strtoupper($_POST['nombre']);
$estado=$_POST['estado']; 
$fecha=$_POST['fecha']; 
$sexo = $_POST['sexo'];
$usuario = mb_strtolower($_POST['usuario']);
$pass1 = $_POST['pass2'];
$rol = $_POST['rol'];

$query = sprintf("SELECT usuario FROM login  WHERE login.usuario='".$usuario."'");
mysqli_select_db($conex, $database_conex);
$Login=mysqli_query($conex,$query) or die(mysqli_error());
$loginFoundUser = mysqli_num_rows($Login);

if($loginFoundUser==1){

    echo 3;
}

else {if ((isset($_POST["agregar"])) && ($_POST["agregar"] == "1")) {
  $insertSQL = sprintf("INSERT INTO login  (nombre, apellido, estado, fecha, sexo, 
  usuario, password ,rol, foto) 
  VALUES ('$nombre', '$apellido',$estado,'$fecha' ,$sexo, '$usuario','$pass1', $rol ,'usuario.png')");
  $Result1 = mysqli_query($conex, $insertSQL) or die(mysqli_error());

if($Result1==true){ 
  echo 1;
} else { 
  echo 0;
  }

}
}
?>