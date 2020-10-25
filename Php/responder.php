<?php
     //sleep(1);
     require_once "Conexion.php";
     $queriResponder=$conexion->prepare("UPDATE `preguntas` SET `RESPUESTA`=? WHERE ID_PREGUNTA=?");
     $queriResponder->bindParam(1,$_POST['mensaje'], PDO::PARAM_STR);
     $queriResponder->bindParam(2,$_POST['id_preg'], PDO::PARAM_STR);
     $queriResponder->execute();
     if($queriResponder){
          header('location: ../vista_producto_admin.php?id='.$_POST['id_product'].'&id_pre='.$_POST['id_preg'].'');
     }
?>