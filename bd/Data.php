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
          and u.clave = '$clave';";

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
          $nombre = null;
          if($reg = mysql_fetch_array($rs)){
               $nombre = $reg[0];
          }

          return $nombre;
     }

     public function crearUsuario($correo, $clave, $nombre, $permiso){
          $query = "insert into usuario values (null,'$correo','$clave','$nombre','$permiso');";
          $this->c->ejecutar($query);
     }

     public function listarUsuario(){
          $query = "select u.id, u.nombre, u.correo, p.permiso as 'Permiso'
          from usuario u, permiso p
          where u.permiso = p.id
          order by u.id asc;";

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
              echo "<td><a href='controlador/eliminarUsuario.php?id=$reg[0]'>Eliminar</a></td>";
            echo "</tr>";

          }
          echo "</table>";
     }

     public function eliminarUsuario ($id,$permiso){
          if($permiso == 1){
          $query = "delete from usuario where id = $id";
          $this->c->ejecutar($query);
        }
     }

     public function crearHeroe($nombre,$rol,$dificultad){
          $query = "insert into heroes values (null,'$nombre','$rol','$dificultad');";
          $this->c->ejecutar($query);
     }

     public function getNombreHeroe($nombre){
          $query = "select *
          from heroes
          where nombre = '$nombre'";

          $rs = $this->c->ejecutar($query);

          $nombre = null;
          $rol=null;
          $dificultad=null;

          if($reg = mysql_fetch_array($rs)){
              echo "<h1>Heroe</h1>";
              echo "<hr>";
              echo "<h3>Nombre</h3>";
              echo $reg[1];
              echo "<hr>";
              echo "<h3>Rol</h3>";
              echo $reg[2];
              echo "<hr>";
              echo "<h3>Dificultad</h2>";
              echo $reg[3];
              echo "<hr>";
              echo "<h2>Imagen</h2>";
              echo $reg[4];
              echo "<hr>";

          }




     }






     public function getRol($id){
          $query = "select r.rol
          from rol r, heroes h
          where r.id = h.rol AND h.id = $id";

          $rs = $this->c->ejecutar($query);

          $rol = null;

          if($reg = mysql_fetch_array($rs)){
               $rol = $reg[0];
          }

          return $rol;
     }

     public function getDificultad($id){
          $query = "select d.dificultad
          from dificultad d, heroes h
          where d.id = h.dificultad AND h.id = $id";

          $rs = $this->c->ejecutar($query);

          $dificultad = null;

          if($reg = mysql_fetch_array($rs)){
               $dificultad = $reg[0];
          }

          return $dificultad;
     }

     public function listarHeroes(){
          $query = "select h.id, h.nombre, r.rol as 'Rol',
          d.dificultad as 'Dificultad'
          from heroes h, rol r, dificultad d
          where h.rol = r.id and h.dificultad = d.id order by h.nombre asc;";

          $rs = $this->c->ejecutar($query);
          echo "<h1>Listado de Héroes</h1>";

          echo "<table border='1'>";
          echo "<tr>";
              echo "<th>ID</th>";
              echo "<th>Nombre</th>";
              echo "<th>Rol</th>";
              echo "<th>Dificultad</th>";
          echo "</tr>";
          while($reg= mysql_fetch_array($rs)){
            echo "<tr>";
              echo "<td>$reg[0]</td>";
              echo "<td>$reg[1]</td>";
              echo "<td>$reg[2]</td>";
              echo "<td>$reg[3]</td>";
            echo "</tr>";

          }
          echo "</table>";
     }


}

?>
