<?php
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

          /* Si existe algún registro */
          if($reg = mysql_fetch_array($rs)){
               $idPermiso = $reg[0];
          }

          return $idPermiso;

     }
}

?>
