<?php require_once('../Connections/conex.php'); ?>
<?php
$id = $_GET['id'];
if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
$deleteSQL = sprintf("UPDATE login SET estado='1' WHERE id_usuario=$id ");
  $Result1 = mysqli_query( $conex, $deleteSQL) or die(mysqli_error($conex));
if($Result1==true)
{
  echo 1;
   }
 else 
 {
  echo 0;
   }
}
?>