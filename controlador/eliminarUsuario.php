<?php
if(isset($_GET["id"])){

  $id= $_GET["id"];
  require_once "../bd/Data.php";
  $correo=$_POST["txtCorreo"];
  $pass=$_POST["txtPass"];


  $d= new Data();
  $permiso = $d->getPermiso($correo,$pass);
    $_SESSION["idPermiso"]=$idPermiso;
  $d->eliminarUsuario($id,$permiso);
  header("location: ../menu.php");

}else{
  header("location: ../menu.php");

}

 ?>
