<?php include "php/Conexion.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet">
    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src='js/main.js'></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="png" href="img/icon.png" />
    <title>Vista Producto</title>
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
                <a href="#" class="notificaciones"><i title="notificaciones" class="fas fa-bell"> </i>notificaciones</a>
                <a href="#" class="nombre"><i title="notificaciones" class="fas fa-user"> </i>yaider</a>
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
            </div>
        </div>

        <!--contenido principal-->
        <main class="principal">
            <!--<a href="#" id="carrito" class="carrito">
                <span class="numero_productos">0</span>
                <i class="fas fa-shopping-cart"></i>
            </a>-->
            <div class="contenedor-producto">
                <div class="foto">
                    <div class="slider">
                        <?php
                        $id_producto = $_GET['id'];
                        $consultaImagenes = $conexion->prepare("SELECT IMAGEN,IMAGEN2,IMAGEN3 FROM productos WHERE ID_PRODUCTO=$id_producto ");

                        $consultaImagenes->execute();
                        while ($row = $consultaImagenes->fetch(PDO::FETCH_OBJ)) { ?>
                            <div class="imagen">
                                <?php
                                echo '<img src="' . $row->IMAGEN . '">';
                                ?>
                            </div>
                            <div class="imagen">
                                <?php
                                echo '<img src="' . $row->IMAGEN2 . '">';
                                ?>
                            </div>
                            <div class="imagen">
                                <?php
                                echo '<img src="' . $row->IMAGEN3 . '">';
                                ?>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                    <!--estrellas-->
                    <div class="icons">
                        <div class="puntuaciones">
                            <a href="#" id="1"><i class="fas fa-star"></i></a>
                            <a href="#" id="2"><i class="fas fa-star"></i></a>
                            <a href="#" id="3"><i class="fas fa-star"></i></a>
                            <a href="#" id="4"><i class="fas fa-star"></i></a>
                            <a href="#" id="5"><i class="fas fa-star"></i></a>
                            <br />
                            <span class="calificacion"></span>
                        </div>
                    </div>
                </div>
                <div class="caracteristicas">
                    <?php
                    $id_producto = $_GET['id'];
                    $consultaCalzados = $conexion->prepare("SELECT * FROM productos WHERE ID_PRODUCTO=$id_producto ");
                    $consultaCalzados->execute();
                    while ($row = $consultaCalzados->fetch(PDO::FETCH_OBJ)) { ?>
                        <h1 class="title"><?php echo $row->NOMBRE_PRODUCTO; ?></h1>
                        <div class="elecciones">
                            <div class="hijo tallas">
                                <p>tallas: </p>
                                <div class="caja">
                                    <P class="later"><?php echo $row->TALLA_MENOR; ?> - <?php echo $row->TALLA_MAYOR; ?></P>
                                </div>
                            </div>
                            <div class="hijo unidades">
                                <p>talla a comprar: </p>
                                <input type="text" placeholder="0">
                            </div>
                            <div class="hijo general">
                                <p>unidades disponibles:</p>
                                <p class="later"><?php echo $row->CANTIDAD; ?> Unidades</p>
                            </div>

                            <div class="hijo unidades">
                                <p>unidades a comprar: </p>
                                <input type="text" placeholder="0">
                            </div>

                            <div class="hijo general">
                                <p>para: </p>
                                <p class="later">Hombre</p>
                            </div>

                            <div class="hijo general">
                                <p>precio unitario:</p>
                                <p class="later">$ <?php echo $row->PRECIO; ?></p>
                            </div>

                            <div class="hijo colores">
                                <p class="color">colores: </p>
                                <a href="#" class="later"><?php echo $row->COLOR1; ?>,&nbsp;</a>
                                <a href="#" class="later"><?php echo $row->COLOR2; ?>,&nbsp;</a>
                                <a href="#" class="later"><?php echo $row->COLOR3; ?></a>

                            </div>
                        </div>
                        <div class="contenedor-botones">
                            <div class="elements">
                                <a href="cliente.php" class="btn-carrito flecha"><i class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn-solicitar">SOLICITAR</a>
                                <a href="#" class="btn-carrito v2"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="preguntas-producto">
                <h1 class="title">Preguntas Sobre El producto</h1>

                <div class="contenedor-preguntas">
                    <scroll-container class="contenedor-scroll">
                        <?php
                        $id_producto = $_GET['id'];
                        $consultaCalzados = $conexion->prepare("SELECT * FROM preguntas WHERE ID_PRODUCTO_FK=$id_producto");
                        $consultaCalzados->execute();
                        while ($row = $consultaCalzados->fetch(PDO::FETCH_OBJ)) { ?>
                            <scroll-page class="scroll-page">
                                <table id="wiri">
                                    <p class="user"><?php
                                                    $consultarUser = $conexion->prepare("SELECT usuarios.*,
                                preguntas.*
                                FROM usuarios 
                                INNER JOIN preguntas
                                on usuarios.ID_USUARIO=preguntas.ID_USUARIO_FK");
                                                    $consultarUser->execute();
                                                    $apunt = $consultarUser->fetch(PDO::FETCH_OBJ);
                                                    print_r($apunt->NOMBRE . "\t" . $apunt->APELLIDO);
                                                    ?></p>
                                    <p class="pregunta"><?php echo $row->MENSAJE; ?></p>
                                    <p class="titulo-res">respuesta: <p></p>
                                    </p>
                                    <span class="respuesta"><?php echo $row->RESPUESTA ?></span>
                                    <?php

                                    if ($_SESSION['nit'] == $row->ID_USUARIO_FK) {
                                        $metodo_eliminar = "AlertarEliminar('$row->ID_PREGUNTA','delete')";
                                        $metodo_editar = "AlertarEliminar('$row->ID_PREGUNTA','change')";
                                        echo '<a href="vista_producto.php?id=' . $_GET["id"] . '&id_pre=' . $row->ID_PREGUNTA . '" class="btn-resp v1" name="edit">editar</a>';
                                        echo '<a href="#" onclick="' . $metodo_eliminar . '" class="btn-resp v1">eliminar</a>';
                                    }
                                    ?>
                                </table>
                            </scroll-page>
                        <?php
                        }
                        ?>
                    </scroll-container>
                    <input type="button" value="yaidercc" onclick="AlertarEliminar(34,'delete')">
                    <?php
                    if (isset($_GET['id_pre'])) {
                        echo '<form action="Php/eliminar_pregunta.php?codi=' . $_GET["id_pre"] . '&caso=change&id='.$_GET['id'].'" method="POST">';
                    }else{
                        echo '<form action="Php/preguntas.php" method="POST">';
                    }
                    ?>
                    <input class="campo-pregunta" type="text" name="mensaje" placeholder="Hacer una pregunta" required>';
                    <input type="hidden" name="id_product" value=<?php echo $_GET['id']; ?>>
                    <input type="hidden" name="id_user" value=<?php echo $_SESSION['nit']; ?>>

                    <input type="submit" value="Enviar" class="btn-enviar">
                    </form>
                </div>
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

    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src='js/procesos.js'></script>
    <script src='js/jquery.slides.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(function() {
            $(".slider").slidesjs({
                width: 940,
                height: 900
            });
        });
    </script>
    </script>
</body>

</html>