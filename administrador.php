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
    <link rel="icon" type="png" href="img/icon.png" />
    <link rel="stylesheet" href="css/estilos.css">
    <title>Administrar</title>
</head>

<body>
    <!--contenedor de la pagina-->
    <div class="contenedor">
        <!--cabecera de pagina-->
        <header class="header">

            <div class="contenedor-logo">
                <h1>calzados cris</h1>
            </div>
            <div class="navegacion">
                <a href="#" class="chat" id="chateasion"><i title="notificaciones" class="fas fa-comments"> </i>chat</a>
                <a href="#" id="notificar" class="notificaciones"><i title="notificaciones" class="fas fa-bell"> </i>notificaciones</a>
                <a href="#" class="nombre"><i title="notificaciones" class="fas fa-user"> </i><?php echo " " . $_SESSION['nombre']; ?></a>
            </div>

            <div class="salir">
                <a href="php/cerrar_sesion.php" class="cerrar" id="abrir">salir</a>
            </div>

        </header>
        <!--filtros-->
        <div class="filtros">
            <div class="nav">
                <a href="#">mujer <i class="fas fa-female"></i></a>
                <a href="#">hombre <i class="fas fa-male"></i></a>
                <a href="#">mas comprados <i class="fas fa-cart-plus"></i></a>
                <a href="#">mas baratos <i class="fas fa-coins"></i></a>
                <a href="gestionar_producto.php">agregar productos <i class="fas fa-plus"></i></a>
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
                $consultaCalzados = $conexion->prepare("SELECT * FROM productos");
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
                            
                            <div class="visible">
                            <p><i class="fas fa-cart-plus"></i>  <?php echo $row->CANTIDAD_COMPRAS; ?></p>
                                &nbsp;&nbsp;&nbsp; <span>|</span>&nbsp;
                                <a href="#" class="txt">preguntas<i class="fas fa-question"></i></a>
                                
                            </div>
                        </div>
                        <div class="botones">
                           <?php echo '<a href="#" class="btn-carrito eliminar"><i class="fas fa-trash-alt"></i></a>';?>
                           <?php echo '<a href="vista_producto_admin.php?id='.$row->ID_PRODUCTO.'" class="btn-solicitar v1">modificar</a>';?>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>

        </main>

        <!--notificaciones-->
        <div class="overlay" id="notificaciones">
            <div class="popup notificaciones" id="popup-notificaiones">
                <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h1>entregas pendientes</h1>
                <scroll-container class="scroll-container">
                    <form action="#">
                        <scroll-page>
                            <div class="pendientes">
                                <input type="hidden" name="idsc" value="<?php echo $mostrar['ID_COMPRA'] ?>">
                                <p class="desc"><strong>NOMBRE COMPRADOR:</p>
                                <p class="desc"><strong>NOMBRE PRODUCTO: </p>
                                <p class="desc"><strong>TALLA: </p>
                                <p class="desc"><strong>DIRECCION:</p>
                                <p class="desc"><strong>TELEFONO: </p>
                                <p class="desc"><strong>CANTIDAD:</p>
                                <p class="desc"><strong>TOTAL:</p>
                                <input type="submit" class="btn-submit" value="entregado">
                            </div>
                        </scroll-page>
                    </form>
                    <form action="#">
                        <scroll-page>
                            <div class="pendientes">
                                <input type="hidden" name="idsc" value="<?php echo $mostrar['ID_COMPRA'] ?>">
                                <p class="desc"><strong>NOMBRE COMPRADOR:</p>
                                <p class="desc"><strong>NOMBRE PRODUCTO: </p>
                                <p class="desc"><strong>TALLA: </p>
                                <p class="desc"><strong>DIRECCION:</p>
                                <p class="desc"><strong>TELEFONO: </p>
                                <p class="desc"><strong>CANTIDAD:</p>
                                <p class="desc"><strong>TOTAL:</p>
                                <input type="submit" class="btn-submit" value="entregado">
                            </div>
                        </scroll-page>
                    </form>
                    <form action="#">
                        <scroll-page>
                            <div class="pendientes">
                                <input type="hidden" name="idsc" value="<?php echo $mostrar['ID_COMPRA'] ?>">
                                <p class="desc"><strong>NOMBRE COMPRADOR:</p>
                                <p class="desc"><strong>NOMBRE PRODUCTO: </p>
                                <p class="desc"><strong>TALLA: </p>
                                <p class="desc"><strong>DIRECCION:</p>
                                <p class="desc"><strong>TELEFONO: </p>
                                <p class="desc"><strong>CANTIDAD:</p>
                                <p class="desc"><strong>TOTAL:</p>
                                <input type="submit" class="btn-submit" value="entregado">
                            </div>
                        </scroll-page>
                    </form>
                </scroll-container>
            </div>
        </div>



        <div class="overlay" id="chat">
            <div class="popup" id="chatear">
                <a href="#" id="btn-cerrar-popup3" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h1>conversacion</h1>
                <form action="#">
                </form>
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
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
</body>

</html>