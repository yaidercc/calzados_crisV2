<?php
     require_once "../Php/Conexion.php";
     class Crud extends Conexion{
          public static function iniciar_sesion($datos){
               $queryIniciar=Conexion::conectar()->prepare("SELECT * FROM `usuarios` WHERE `IDENTIFICACION`=:nit AND `CLAVE`=:clave");
               $queryIniciar->bindParam(':nit',$datos['nit'], PDO::PARAM_STR);
               $queryIniciar->bindParam(':clave',$datos['clave'], PDO::PARAM_STR);
               $queryIniciar->execute();
               return $queryIniciar->rowCount();
          }
     }
              

?>