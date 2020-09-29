
<?php
     /*try{
          include "Conexion.php";
          session_start();
          $nit=$_POST['nit'];
          $clave=$_POST['clave'];
          
          //consulta
          $consultaIniciar=mysqli_query($conexion,"SELECT * FROM usuarios WHERE IDENTIFICACION='$nit' AND CLAVE='$clave'");
          $resultados=mysqli_fetch_assoc($consultaIniciar);
          $datos=$consultaIniciar->fetch_assoc();
          $_SESSION['data']=$datos;
          $_SESSION['activo'] = true;
          if($_SESSION['data']['ID_TIPO_USUARIO_FK']==1){
               header("location:../administrador.php");
           }else if($_SESSION['data']['ID_TIPO_USUARIO_FK']>1){
               header("location:../cliente.php");
   
           }else{
               echo " <script language='JavaScript'>
               alert('datos incorrectos');
               location.replace('../index.php');
           </script>";
           }
          //imprimir cantidad de registros
          echo intval($resultados);
     }catch(Exception $e){
          
     }finally{
          $consultaIniciar=null;
     }*/
     
     require "Conexion.php";
     sleep(1);//retrasar consulta, un segundo
     session_start();
     $datos=array(
          'nit' => $_POST['nit'],
          'clave' => $_POST['clave']
     );
     $queryIniciar=$conexion->prepare("SELECT * FROM `usuarios` WHERE `NOMBRE_USUARIO`=:nit AND `CLAVE`=:clave");
     $queryIniciar->bindParam(':nit',$datos['nit'], PDO::PARAM_STR);
     $queryIniciar->bindParam(':clave',$datos['clave'], PDO::PARAM_STR);
     $queryIniciar->execute();
     $resultados=$queryIniciar->fetch(PDO::FETCH_OBJ);
     
     if($resultados==FALSE){
          echo json_encode(array('error' =>true));// si no encuentra los datos, devuelve un false
     }else{
          $resultados2=$queryIniciar->fetch(PDO::FETCH_ASSOC);
          echo json_encode(array('error' => false, 'tipo' =>  $resultados->ID_TIPO_USUARIO_FK));//mandar datos al archivo js, por JSON en caso de haberlos encontrado
          $_SESSION['nit']=$resultados->ID_TIPO_USUARIO_FK;
          $_SESSION['nombre']=$resultados->NOMBRE;
     }
?>
