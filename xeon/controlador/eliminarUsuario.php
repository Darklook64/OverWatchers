<?php
if(isset($_GET["id"])){

  $id= $_GET["id"];
  require_once "../bd/Data.php";


  $d= new Data();
  $permiso=$_SESSION["idPermiso"];
  $d->eliminarUsuario($id,$permiso);
  header("location: ../menu.php");

}else{
  header("location: ../menu.php");

}

 ?>
