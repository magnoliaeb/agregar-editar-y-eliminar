<?php require_once('../Connections/conex.php'); ?>
<?php
$apellido = mb_strtoupper($_POST['apellido']);
$nombre = mb_strtoupper($_POST['nombre']);
$estado=$_POST['estado']; 
$fecha=$_POST['fecha']; 
$sexo = $_POST['sexo'];
$usuario = mb_strtolower($_POST['usuario']);
$pass1 = $_POST['pass2'];
$rol = $_POST['rol'];
$id = $_POST['id_usuario']; 
$viejo_usuario = $_POST['viejo_usuario']; 


if($usuario==$viejo_usuario)
{
  if ((isset($_POST["nombre"])) && ($_POST["nombre"] != "")){
    $updateSQL = sprintf("UPDATE login SET usuario='".$viejo_usuario."', 
    password='".$pass1."', rol='".$rol."', nombre='".$nombre."', apellido='".$apellido."', 
    fecha='".$fecha."', sexo='".$sexo."', estado='".$estado."' WHERE id_usuario='".$id."'");
    $Result1 = mysqli_query($conex,$updateSQL) or die(mysqli_error($conex));
    if($Result1==true){
     echo  1; 
      }
    else 
    {
     echo 0; 
    }
  }
}
else {
  $query = sprintf("SELECT login.usuario FROM login WHERE usuario='".$usuario."' ");
  mysqli_select_db($conex, $database_conex);
  $Login=mysqli_query($conex,$query) or die(mysqli_error());
  $loginFoundUser = mysqli_num_rows($Login);
  
  if($loginFoundUser==1){
    echo 3;
  }
  else { if ((isset($_POST["nombre"])) && ($_POST["nombre"] != "")) {  
     $updateSQL = sprintf("UPDATE login SET usuario='".$usuario."', 
    password='".$pass1."', rol='".$rol."', nombre='".$nombre."', apellido='".$apellido."', 
    fecha='".$fecha."', sexo='".$sexo."', estado='".$estado."' WHERE id_usuario='".$id."'");
    $Result1 = mysqli_query($conex,$updateSQL) or die(mysqli_error($conex));
      if($Result1==true){
        echo  1;
      }
      else {
        echo 0;
      }
    }
  }
}
?>