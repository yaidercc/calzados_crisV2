<?php
     class Conexion{
          public static function conectar(){
               $conexion = new PDO('mysql:host=localhost; dbname=calzados', 'root', '');
               return $conexion;
          }
     }
     class Crud extends Conexion{
          public static function iniciar_sesion($datos){
               $queryIniciar=Conexion::conectar()->prepare("SELECT * FROM `usuarios` WHERE `IDENTIFICACION`=:nit AND `CLAVE`=:clave");
               $queryIniciar->bindParam(':nit',$datos['nit'], PDO::PARAM_STR);
               $queryIniciar->bindParam(':clave',$datos['clave'], PDO::PARAM_STR);
               $queryIniciar->execute();
               $resultados=$queryIniciar->fetchAll(PDO::FETCH_ASSOC);
               $_SESSION['identificacion']=$resultados;
               if($_SESSION['identificacion']['ID_TIPO_USUARIO_FK']==1){
                    header("location: ../administrador.php");
                    exit;
               }else if($_SESSION['identificacion']['ID_TIPO_USUARIO_FK']==2){
                    header("location: ../cliente.php");
                    exit;
               }
               echo $queryIniciar->rowCount();
          }
         
     }
?>