<?php
     include "php/conexion.php";

     // variables con valores de los campos
     $nombre_producto = $_POST['nombre'];
     $precio = $_POST['precio'];
     $talla_menor = $_POST['talla1'];
     $talla_mayor = $_POST['talla2'];
     $cantidad = $_POST['cantidad'];
     $color1 = $_POST['color1'];
     $color2 = $_POST['color2'];
     $color3 = $_POST['color3'];
     $genero = $_POST['genero'];

     // bucar y guardar ruta de la imagen
     $imagen1=$_FILES["imagen1"]["name"];
     $ruta_imagen1=$_FILES["imagen1"]["tmp_name"];
     $destino_imagen1="img/".$imagen1;
     $ruta_iamgen1=copy($ruta_imagen1,$destino_imagen1);
     
     $imagen2=$_FILES["imagen2"]["name"];
     $ruta_imagen2=$_FILES["imagen2"]["tmp_name"];
     $destino_imagen2="img/".$imagen2;
     $ruta_imagen2=copy($ruta_imagen2,$destino_imagen2); 

     $imagen3=$_FILES["imagen3"]["name"];
     $ruta_imagen3=$_FILES["imagen3"]["tmp_name"];
     $destino_imagen3="img/".$imagen3;
     $ruta_imagen3=copy($ruta_imagen3,$destino_imagen3);

     $verificar=$conexion->prepare("SELECT * FROM `productos` WHERE `NOMBRE_PRODUCTO`='$_POST[nombre]'");
     $verificar->execute();
     if($verificar->rowCount()<=0){
          $InsertarProductos=$conexion->prepare("INSERT INTO `productos`(`NOMBRE_PRODUCTO`, `IMAGEN`, `PRECIO`, `TALLA_MENOR`, `TALLA_MAYOR`, `CANTIDAD`, `CANTIDAD_COMPRAS`, `ID_GENERO_FK`, `IMAGEN2`, `IMAGEN3`, `COLOR1`, `COLOR2`, `COLOR3`) 
           VALUES (?,?,?,?,?,?,0,?,?,?,?,?,?)");
           $InsertarProductos->bindParam(1, $nombre_producto, PDO::PARAM_STR);
           $InsertarProductos->bindParam(2,$destino_imagen1, PDO::PARAM_STR);
           $InsertarProductos->bindParam(3,$precio, PDO::PARAM_STR);
           $InsertarProductos->bindParam(4,$talla_menor, PDO::PARAM_INT);
           $InsertarProductos->bindParam(5,$talla_mayor, PDO::PARAM_INT);
           $InsertarProductos->bindParam(6,$cantidad, PDO::PARAM_INT);
           $InsertarProductos->bindParam(7,$genero, PDO::PARAM_INT);
           $InsertarProductos->bindParam(8,$destino_imagen2, PDO::PARAM_STR);
           $InsertarProductos->bindParam(9,$destino_imagen3, PDO::PARAM_STR);
           $InsertarProductos->bindParam(10,$color1, PDO::PARAM_STR);
           $InsertarProductos->bindParam(11,$color2, PDO::PARAM_STR);
           $InsertarProductos->bindParam(12,$color3, PDO::PARAM_STR);
           $InsertarProductos->execute();

          if(!$InsertarProductos){
               echo json_encode(array('error'  =>true));
          }else{
               echo json_encode(array('error'  =>false, 'validar'=> 'insertado'));
          }
     }else{
          echo json_encode(array('error'  =>true, 'validar'=> 'repetido'));
     }
     
     

?>