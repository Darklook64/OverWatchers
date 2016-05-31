<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION["idPermiso"])){
    header("location: index.php?hackerMan=2");
}else{
    $idPermiso = $_SESSION["idPermiso"];
    $nombre =$_SESSION["nombre"];
    if($idPermiso == 0){
        session_destroy();
        header("location: index.php?hackerMan=3");
    }


}
?>





<html>
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
  </head>
  <body>
    <h1>Bienvenido</h1>
    <?php
    require_once "bd/Data.php";
    $d= new Data();
    switch ($idPermiso) {
      case 1:
        $d->listarUsuario();
        break;

      case 2:
        break;


    }




     ?>
  </body>
</html>
