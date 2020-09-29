<?php

     require "Conexion.php";
     sleep(1);//retrasar consulta, un segundo
     session_start();
     $datos=array(
          'nombre' => $_POST['nombre'],
          'username' => $_POST['username'],
          'direccion' => $_POST['direccion'],
          'genero' => $_POST['genero'],
          'apellido' => $_POST['apellido'],
          'telefono' => $_POST['nombre'],
          'correo' => $_POST['correo'],
          'clave' => $_POST['clave'],
          'repclave' => $_POST['repclave']
     );
     $ans=$datos['repclave']==$datos['clave'];
     if($ans){
          $queriRegistrar=$conexion->prepare("INSERT INTO `usuarios`(`NOMBRE_USUARIO`, `NOMBRE`, `APELLIDO`, `CORREO`, `CLAVE`, `DIRECCION`, `TELEFONO`,`ID_GENERO_FK`) 
          VALUES (':username',':nombre','apellido',':correo',':clave',':direccion',':telefono',':generos','1'");
          $queriRegistrar->bindParam(':username',$datos['username'], PDO::PARAM_STR);
          $queriRegistrar->bindParam(':nombre',$datos['nombre'], PDO::PARAM_STR);
          $queriRegistrar->bindParam(':apellido',$datos['apellido'], PDO::PARAM_STR);
          $queriRegistrar->bindParam(':correo',$datos['correo'], PDO::PARAM_STR);
          $queriRegistrar->bindParam(':clave',$datos['clave'], PDO::PARAM_STR);
          $queriRegistrar->bindParam(':direccion',$datos['direccion'], PDO::PARAM_STR);
          $queriRegistrar->bindParam(':telefono',$datos['telefono'], PDO::PARAM_INT);
          $queriRegistrar->bindParam(':generos',$datos['genero'], PDO::PARAM_INT);
          $queriRegistrar->execute();
          if(!$queriRegistrar){
               echo json_encode(array('error' =>true));// si no encuentra los datos, devuelve un false
          }else{

               echo json_encode(array('error' => false, 'validar' => 1 ));//mandar datos al archivo js, por JSON en caso de haberlos encontrado
          }
     }else{
          echo json_encode(array('error' =>true, 'validar'=> 404));

     }
          
     
?>