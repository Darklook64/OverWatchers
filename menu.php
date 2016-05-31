<!DOCTYPE html>
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
        echo "<h1>Listado de usuarios</h1>";
        $d->listarUsuarios();
        break;

      case 2:
        break;


    }




     ?>
  </body>
</html>
