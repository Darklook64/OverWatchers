<?php
if (isset($_POST["btnBuscar"])) {
require_once "../bd/Data.php";
$d= new Data();
  $heroe=$_POST["txtBuscarHeroe"];

  $d->getNombreHeroe($heroe);

}else {
  header("location: ../index.php?hackerMan=1");

}

 ?>
