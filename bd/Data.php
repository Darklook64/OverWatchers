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

     /*public function getHeroe(){
          $query = "select nombre from Heroe where id"

     }*/


}

?>
