
<?php
     require_once "conexion.php";
     switch($_GET['caso']){
          case "delete":
               $eliminar=$conexion->prepare("DELETE FROM `preguntas` WHERE ID_PREGUNTA=$_GET[codi] ");
               $eliminar->execute();
          break;
          case "change":
               $msg=$_POST['mensaje'];
               $editar=$conexion->prepare("UPDATE `preguntas` SET `MENSAJE`='$msg' WHERE ID_PREGUNTA=$_GET[codi] ");
               $editar->execute();
               echo $msg;
               header('location: ../vista_producto.php?id='.$_GET['id'].'&id_pre='.$_GET['codi']);
          break;
     }
?>