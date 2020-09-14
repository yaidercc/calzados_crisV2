<?php

     require_once "../procesos/crud.php";
     $datos=array(
          'identificaion' => $_POST['nitr'],
          'nombre' => $_POST['nombre'],
          'apellido' => $_POST['apellido'],
          'correo' => $_POST['correo'],
          'clave' => $_POST['clave'],
          'direccion' => $_POST['direccion'],
          'numero' => $_POST['telefono'],
          'genero' => $_POST['genero'],
          //'confirmacion clave' => $_POST['clave2']
     );
     echo Crud::insertarDatos($datos);
?>