<?php
include 'php/conexion.php';
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
    <title>Calzados </title>
</head>

<body>
    <!--contenedor de la pagina-->
    <div class="contenedor">
        <?php
        if (empty($_REQUEST['generos']) && empty($_REQUEST['economicos'])) {
            header("location: cliente.php");
        }
        if (!empty($_REQUEST['generos'])) {
            $genero = strtolower($_REQUEST['generos']);
            $where = "ID_GENERO_FK=$genero";
        }
        if (!empty($_REQUEST['economicos'])) {
            $genero = strtolower($_REQUEST['generos']);
            $where = "";
        }
        ?>
        <!--cabecera de pagina-->
        <header class="header">
            <div class="contenedor-logo">
                <h1>calzados cris</h1>
            </div>
            <div class="navegacion">
                <a href="#" class="nombre"><i title="notificaciones" class="fas fa-user"><?php echo " " . $_SESSION['nombre']; ?></i>
                </a>
            </div>
            <div class="salir">
                <a href="php/cerrar_sesion.php" class="cerrar" id="abrir">salir</a>
            </div>
        </header>

        <!--filtros-->
        <div class="filtros">
            <div class="nav">
                <a href="#" id="mujer">mujer <i class="fas fa-female"></i></a>
                <a href="#" id="hombre">hombre <i class="fas fa-male"></i></a>
                <a href="#">mas comprados <i class="fas fa-cart-plus"></i></a>
                <a href="#">mas baratos <i class="fas fa-coins"></i></a>
            </div>

        </div>

        <!--contenido principal-->
        <main class="principal">
            <div class="cabeza-main">
                <h1 class="calzado">calzados para hombre y para mujer</h1>
                <a href="#" id="carrito" class="carrito">
                    <span class="numero_productos">0</span>
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>

            <!--contenedor productos-->
            <div class="container-productos">
                <!--productos-->
                <?php
                include "php/Conexion.php";
                $gen = 0;
                if (!empty($_REQUEST['generos'])) {
                    $gen = $_REQUEST['generos'];
                }
                $consultaCalzados = $conexion->prepare("SELECT * FROM productos WHERE $where ");
                $consultaCalzados->execute();
                while ($row = $consultaCalzados->fetch(PDO::FETCH_OBJ)) { ?>
                    <div class="producto">

                        <div class="imagen">
                            <?php
                            echo '<img src="' . $row->IMAGEN . '">';
                            ?>
                        </div>
                        <div class="contenedor-descripcion">
                            <h1><?php echo $row->NOMBRE_PRODUCTO; ?></h1>
                            <p>para: hombre</p>
                            <h2>$ <?php echo $row->PRECIO; ?></h2>
                            <p><i class="fas fa-cart-plus"></i> <?php echo $row->CANTIDAD_COMPRAS; ?></p>
                        </div>

                        <div class="botones">
                            <?php echo '<a href="vista_producto.php?id=' . $row->ID_PRODUCTO . '" name="registrate" class="btn-solicitar v1 inicio">solicitar</a>' ?>
                        </div>
                    <?php
                }
                    ?>
                    </div>

            </div>

        </main>

        <!--pop-up carrito-->
        <div class="overlay" id="carro">
            <div class="popup carro" id="productos">
                <a href="#" id="btn-cerrar-popup1" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h1>carrito</h1>
                <scroll-container>

                    <form action="#">
                        <scroll-page>
                            <div class="pendientes">
                                <input type="hidden" name="idsc" value="<?php echo $mostrar['ID_COMPRA'] ?>">
                                <p class="desc"><strong>NOMBRE COMPRADOR:</p>
                                <p class="desc"><strong>NOMBRE PRODUCTO: </p>
                                <input type="submit" class="btn-submit" value="entregado">
                            </div>
                        </scroll-page>

                        <form action="#">
                            <scroll-page>
                                <div class="pendientes">
                                    <input type="hidden" name="idsc" value="<?php echo $mostrar['ID_COMPRA'] ?>">
                                    <p class="desc"><strong>NOMBRE PRODUCTO: </p>
                                    <p class="desc"><strong>DIRECCION: </p>
                                    <input type="submit" class="btn-submit" value="entregado">
                                </div>
                            </scroll-page>
                        </form>

                </scroll-container>

                <input class="btn-submit" id="vacio" type="submit" value="Vaciar">
            </div>
        </div>





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
    <script src='js/procesos.js'></script>
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
</body>

</html>