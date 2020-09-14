
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
     

     require_once "../procesos/crud.php";
         $datos=array(
              'nit' => $_POST['nit'],
              'clave' => $_POST['clave']
         );
          echo Crud::iniciar_sesion($datos);
?>
