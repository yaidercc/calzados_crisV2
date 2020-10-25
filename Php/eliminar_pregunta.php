<?php
     require_once "conexion.php";
     $eliminar=$conexion->prepare("DELETE FROM `preguntas` WHERE ID_PREGUNTA=$_GET[id_pre]");
     echo $_GET['id_pre'];
     $eliminar->execute();
     header('location: ../vista_producto.php?id='.$_GET['id'].'&id_pre='.$_GET['id_pre']);
?>