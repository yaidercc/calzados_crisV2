<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="librerias/jquery-3.5.1.min.js"></script>
    <link rel="icon" type="png" href="img/icon.png" />
    <title>Calzados Cris</title>
</head>

<body>
    <!--contenedor de la pagina-->
    <div class="contenedor">
        <!--cabecera de pagina-->
        <header class="header">
            <div class="contenedor-logo">
                <h1>calzados cris</h1>
            </div>

            <div class="salir" id="abrir">
                <a href="iniciar_sesion.php" class="cerrar">entrar</a>
            </div>

            <div class="registrate" id="registrate">
                <a href="registrarse.php" class="cerrar">registro</a>
            </div>
        </header>
        <!--filtros-->
        <div class="filtros">
            <div class="nav">
                <a href="#">mujer <i class="fas fa-female"></i></a>
                <a href="#">hombre <i class="fas fa-male"></i></a>
                <a href="#">mas comprados <i class="fas fa-cart-plus"></i></a>
                <a href="#">mas baratos <i class="fas fa-coins"></i></a>
            </div>
        </div>

        <!--contenido principal-->
        <main class="principal">
            <div class="cabeza-main">
                <h1 class="calzado">calzados para hombre y para mujer</h1>
            </div>
            <!--contenedor productos-->
            <div class="container-productos">
                <!--productos-->
                <?php
                        include "php/Conexion.php";
                        $consultaGeneros=$conexion->prepare("SELECT * FROM productos");
                        $consultaGeneros->execute();
                        while($row=$consultaGeneros->fetch(PDO::FETCH_OBJ)){?>
                <div class="producto">
                    
                            <div class="imagen">
                                <?php
                                    echo '<img src="'.$row->IMAGEN.'">';
                                ?>
                            </div>
                            <div class="contenedor-descripcion">
                                <h1><?php echo $row->NOMBRE_PRODUCTO;?></h1>
                                <p>para: hombre</p>
                                <h2>$ <?php echo $row->PRECIO;?></h2>
                                <p><i class="fas fa-cart-plus"></i> <?php echo $row->CANTIDAD_COMPRAS;?></p>
                            </div>

                            <div class="botones">
                                <?php echo '<a href="#" name="registrate" class="btn-solicitar v1 inicio">solicitar</a>' ?>
                            </div>
                        
                </div>
                <?php
                            }
                        ?>
            </div>

        </main>

     

    <!--pie de pagina-->
    <footer class="pie">
        <div class="redes">
            <a href="#" class="red"><i class="fab fa-whatsapp-square"></i><span>3148582774</span></a>
            <a href="#" class="red"><i class="fab fa-facebook-square"></i><span>yaidercc.1</span></a>
            <a href="#" class="red"><i class="fab fa-instagram-square"></i><span>@yaidercc</span></a>
        </div>
    </footer>
    </div>

    <!--archivos y links-->
    <script src='js/main.js'></script>
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="librerias/sweetalert.min.js"></script>
    
</body>

</html>