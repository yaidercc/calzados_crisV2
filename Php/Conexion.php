<?php
     try{
          $conexion = new PDO('mysql:host=localhost; dbname=calzados', 'root', '');
     }catch(Exception $e){
          die("Error" .$e->getMessage());
     }finally{

     }

    /* */
          
?>