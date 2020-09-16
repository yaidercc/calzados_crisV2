
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
     
     include "Conexion.php";
     session_start();
     $datos=array(
          'nit' => $_POST['nit'],
          'clave' => $_POST['clave']
     );
     $queryIniciar=$conexion->prepare("SELECT * FROM `usuarios` WHERE `IDENTIFICACION`=:nit AND `CLAVE`=:clave");
     $queryIniciar->bindParam(':nit',$datos['nit'], PDO::PARAM_STR);
     $queryIniciar->bindParam(':clave',$datos['clave'], PDO::PARAM_STR);
     $queryIniciar->execute();
     $resultados=$queryIniciar->fetch(PDO::FETCH_OBJ);
     if($resultados==FALSE){
          header('location: ../index.php');
     }else if($queryIniciar->rowCount()==1){
           $_SESSION['nit']=$resultados->ID_TIPO_USUARIO_FK;
           $_SESSION['nombre']=$resultados->PRIMER_NOMBRE;
         if($_SESSION['nit']==1){
               header('location: ../cliente.php');
         }else{
          header('location: ../cliente.php');
         }

     }
    $r=(string)$queryIniciar->rowCount();
     //echo Crud::iniciar_sesion($datos);
?>
