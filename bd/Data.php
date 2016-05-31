<?php
require_once "Conexion.php";
class Data{
     private $c;

     public function __construct(){
          $this->c = new Conexion(
          "localhost",
          "db_overwatchers",
          "root",
          ""
          );
     }

     public function getPermiso($correo, $clave){
          $query = "select p.id
          from permiso p, usuario u
          where p.id = u.permiso and
          u.correo = '$correo'
          and u.clave = '$pass';";

          $rs = $this->c->ejecutar($query);

          $idPermiso = 0;

          if($reg = mysql_fetch_array($rs)){
               $idPermiso = $reg[0];
          }

          return $idPermiso;
     }

     public function getNombre ($correo, $clave){
          $query = "select nombre from usuario where correo = '$correo'
          and password = '$clave';";

          $rs = $this->c->ejecutar($query);
          $nombre = "null";
          if($reg = mysql_fetch_array($rs)){
               $nombre = $reg[0];
          }

          return $nombre;
     }

     public function crearUsuario($correo, $clave, $nombre, $permiso){
          $query = "insert into usuario values (null,'$correo','$clave','$nombre','$permiso');";
          $this->c->ejecutar($query);
     }

<<<<<<< HEAD
     public function listarUsuario(){
          $query = "select u.id, u.nombre, u.correo, p.permiso as 'Permiso'
          from usuario u, permiso p
          where u.permiso = p.id
          order by u.nombre asc;";

          $rs = $this->c->ejecutar($query);
          echo "<h1>Listado de Usuarios</h1>";

          echo "<table border='1'>";
          echo "<tr>";
              echo "<th>ID</th>";
              echo "<th>Nombre</th>";
              echo "<th>Correo</th>";
              echo "<th>Permiso</th>";
              echo "<th>Eliminar</th>";
          echo "</tr>";
          while($reg= mysql_fetch_array($rs)){
            echo "<tr>";
              echo "<td>$reg[0]</td>";
              echo "<td>$reg[1]</td>";
              echo "<td>$reg[2]</td>";
              echo "<td>$reg[3]</td>";
              echo "<td><a href='controlador/eliminar.php?id=$reg[0]'>Delete</a></td>";
            echo "</tr>";

          }
          echo "</table>";
     }



     // Héroes

     public function getHeroe(){
=======
     /*public function getHeroe(){
>>>>>>> ca03f6ed779519283704046e7facc49fcbf14d02
          $query = "select nombre from Heroe where id"

     }*/


}

?>
