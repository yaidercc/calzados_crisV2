
<?php
     sleep(1);//retrasar consulta, un segundo
     require "Conexion.php";
     if($_POST['repclave']==$_POST['clave']){
          // verificar que no hayan usuarios repetidos
          $verificar=$conexion->prepare("SELECT * FROM `usuarios` WHERE `NOMBRE_USUARIO`='$_POST[username]'");
          $verificar->execute();
          if($verificar->rowCount()>0){
               //si ya hay uno en la bd, entonces manda a un 'repeido'
               echo json_encode(array('error' => false, 'validar'=> 'repetido'));
          }else{
               echo json_encode(array('error' => false, 'validar'=> 'unico' ));
               $queriRegistrar=$conexion->prepare("INSERT INTO `usuarios`(`NOMBRE_USUARIO`, `NOMBRE`, `APELLIDO`, `CORREO`, `CLAVE`, `DIRECCION`, `TELEFONO`,`ID_GENERO_FK`,`ID_TIPO_USUARIO_FK`) 
               VALUES (?,?,?,?,?,?,?,?,1)");
               $queriRegistrar->bindParam(1,$_POST['username'], PDO::PARAM_STR);
               $queriRegistrar->bindParam(2,$_POST['nombre'], PDO::PARAM_STR);
               $queriRegistrar->bindParam(3,$_POST['apellido'], PDO::PARAM_STR);
               $queriRegistrar->bindParam(4,$_POST['correo'], PDO::PARAM_STR,null,null);
               $queriRegistrar->bindParam(5,$_POST['clave'], PDO::PARAM_STR);
               $queriRegistrar->bindParam(6,$_POST['direccion'], PDO::PARAM_STR);
               $queriRegistrar->bindParam(7,$_POST['telefono'], PDO::PARAM_INT);
               $queriRegistrar->bindParam(8,$_POST['genero'], PDO::PARAM_INT);
               $queriRegistrar->execute();

               if(!$queriRegistrar){
                    echo json_encode(array('error' =>true));// si no encuentra los datos, devuelve un false
               }
          }
          
     }else{
          echo json_encode(array('error'  =>true, 'validar'=> 'nocoinciden'));
     }

      //conexion a la bd mysqli
    //$conexion = mysqli_connect('localhost', 'root', '','calzados');

        /*if($_POST['repclave']==$_POST['clave']){
          $queriRegistrar=mysqli_query($conexion,"INSERT INTO usuarios (NOMBRE_USUARIO, NOMBRE, APELLIDO, CORREO, CLAVE, DIRECCION, TELEFONO, ID_TIPO_USUARIO_FK, ID_GENERO_FK) VALUES ('$_POST[username]','$_POST[nombre]','$_POST[apellido]','$_POST[correo]','$_POST[clave]','$_POST[direccion]','$_POST[telefono]','1','$_POST[genero]')");
          if(!$queriRegistrar){
              echo json_encode(array('error' =>true));// si no encuentra los datos, devuelve un false
          }else{
               echo json_encode(array('error' => false, 'validar'=> 1 ));//mandar datos al archivo js, por JSON en caso de haberlos encontrado
          }
     }else{
         echo json_encode(array('error' =>true, 'validar'=> 404));
     }*/

     
     
?>
