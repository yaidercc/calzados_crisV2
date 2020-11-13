<?php
     //sleep(1);
     require_once "Conexion.php";
     if(isset($_POST['id_pre'])){
          $queriResponder=$conexion->prepare("UPDATE `preguntas` SET `RESPUESTA`=? WHERE ID_PREGUNTA=?");
          $queriResponder->bindParam(1,$_POST['mensaje'], PDO::PARAM_STR);
          $queriResponder->bindParam(2,$_POST['id_preg'], PDO::PARAM_STR);
          $queriResponder->execute();
          if($queriResponder){
               header('location: ../vista_producto_admin.php?id='.$_POST['id_product'].'&id_pre='.$_POST['id_preg'].'');
          }
     }else{
          $msg=$_POST['mensaje'];
          $user=$_POST['id_user'];
          $pro=$_POST['id_product'];
          $queriRegistrar=$conexion->prepare("INSERT INTO `preguntas`(`MENSAJE`, `ID_USUARIO_FK`, `ID_PRODUCTO_FK`) VALUES (?,?,?)");
          $queriRegistrar->bindParam(1,$msg, PDO::PARAM_STR);
          $queriRegistrar->bindParam(2,$user, PDO::PARAM_STR);
          $queriRegistrar->bindParam(3,$pro, PDO::PARAM_STR);

          $queriRegistrar->execute();
          header('location: ../vista_producto_admin.php?id='.$_POST['id_product'].'&id_pre=');
     }
     
?>