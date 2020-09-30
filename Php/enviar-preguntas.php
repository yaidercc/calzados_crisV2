<?php

     require "Conexion.php";
     sleep(1);//retrasar consulta, un segundo
     session_start();
     $datos=array(
          'pregunta' => $_POST['pregunta'],
          'id' =>$_GET['id']
     );
    
     $queriRegistrar=$conexion->prepare("INSERT INTO `preguntas_producto`(`MENSAJE`, `ID_PRODUCTO_FK`,) 
     VALUES (':mensaje',':id_producto'");
     $queriRegistrar->bindParam(':mensaje',$datos['pregunta'], PDO::PARAM_STR);
     $queriRegistrar->bindParam(':id_producto',$datos['id'], PDO::PARAM_STR);
     $queriRegistrar->execute();
     if(!$queriRegistrar){
          echo json_encode(array('error' =>true));// si no encuentra los datos, devuelve un false
     }else{

          echo json_encode(array('error' => false, 'validar' => 1 ));//mandar datos al archivo js, por JSON en caso de haberlos encontrado
     }
          
     
?>