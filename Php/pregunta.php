<?php
     sleep(1);
     require_once "Conexion.php";
     $queriResponder=$conexion->prepare("UPDATE `preguntas` SET `MENSAJE`=?, `ID_USUARIO_FK`=?, `ID_PRODUCTO_FK`=? WHERE ID_PREGUNTA=?)");
     $queriResponder->bindParam(1,$_POST['mensaje'], PDO::PARAM_STR);
     $queriResponder->bindParam(2,$_SESSION['nombre'], PDO::PARAM_STR);
     $queriResponder->bindParam(3,$_GET['id'], PDO::PARAM_STR);
     $queriResponder->bindParam(4,$_GET['id_pre'], PDO::PARAM_STR);
     $queriResponder->execute();

     if(!$queriResponder){
          echo json_encode(array('error' => false));// si no hay error manda una respuesta
     }
?>