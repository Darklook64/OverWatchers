<?php
if (isset($_POST["btnEnviar"])) {
  require_once "../bd/Data.php";

  $correo=$_POST["txtCorreo"];
  $pass=$_POST["txtPass"];

  $d= new Data();
  $idPermiso=$d->getPermiso($correo,$pass);
  $nombre=$d->getNombre($correo,$pass);
  session_start();
  $_SESSION["idPermiso"]=$idPermiso;
  $_SESSION["nombre"]=$nombre;


  header("location: ../menu.php");
}else {
  header("location: ../index.php?hackerMan=1");

}

?>
