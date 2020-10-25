<?php
     require_once "Conexion.php";
     $msg=$_POST['mensaje'];
     $user=$_POST['id_user'];
     $pro=$_POST['id_product'];
     $queriRegistrar=$conexion->prepare("INSERT INTO `preguntas`(`MENSAJE`, `ID_USUARIO_FK`, `ID_PRODUCTO_FK`) VALUES (?,?,?)");

     $queriRegistrar->bindParam(1,$msg, PDO::PARAM_STR);
     $queriRegistrar->bindParam(2,$user, PDO::PARAM_STR);
     $queriRegistrar->bindParam(3,$pro, PDO::PARAM_STR);

     $queriRegistrar->execute();
     header('location: ../vista_producto.php?id='.$_POST['id_product']);
?>