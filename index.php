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
                <a href="#" class="cerrar">entrar</a>
            </div>

            <div class="registrate" id="registrate">
                <a href="#" class="cerrar">registro</a>
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
                <div class="producto">
                    <img class="imagen" src="img/nike.jpg" height="100%" width="100%">
                    <div class="contenedor-descripcion">
                        <h1>tenis nike</h1>
                        <p>para: hombre</p>
                        <h2>$ 350.000</h2>
                        <p><i class="fas fa-cart-arrow-down"></i> 10003</p>
                    </div>

                    <div class="botones">

                        <a href="#" name="registrate" class="btn-solicitar v1 inicio">solicitar</a>
                    </div>
                </div>

                <div class="producto">
                    <img class="imagen" src="img/adidas.jpg" height="100%" width="100%">
                    <div class="contenedor-descripcion">
                        <h1>tenis adidas</h1>
                        <p>para: hombre</p>
                        <h2>$ 240.500</h2>
                        <p><i class="fas fa-cart-arrow-down"></i> 10003</p>
                    </div>
                    <div class="botones">
                        <a href="#" name="registrate" class="btn-solicitar v1 inicio">solicitar</a>
                    </div>
                </div>

                <div class="producto">
                <?php
                    include "php/Conexion.php";
                    $consultaGeneros=$conexion->prepare("SELECT * FROM productos");
                    $consultaGeneros->execute();
                    while($row=$consultaGeneros->fetch(PDO::FETCH_ASSOC)){
                        echo '<option value="' .$row['ID_GENERO']. '">' .$row['NOMBRE_GENERO'] . '</option>';
                    }
                ?>
                    <?php
                        echo '<img src="'.$mostrar["IMAGEN"].'" width="100" heigth="100"><br>';
                    ?>
                    <img class="imagen" src="img/adidas.jpg" height="100%" width="100%">
                    <div class="contenedor-descripcion">
                        <h1>tenis adidas</h1>
                        <p>para: hombre</p>
                        <h2>$ 240.500</h2>
                        <p><i class="fas fa-cart-arrow-down"></i> 10003</p>
                    </div>
                    <div class="botones">
                        <a href="#" name="registrate" class="btn-solicitar v1 inicio">solicitar</a>
                    </div>
                </div>

                <div class="producto">
                    <img class="imagen" src="img/adidas.jpg" height="100%" width="100%">
                    <div class="contenedor-descripcion">
                        <h1>tenis adidas</h1>
                        <p>para: hombre</p>
                        <h2>$ 240.500</h2>
                        <p><i class="fas fa-cart-arrow-down"></i> 10003</p>
                    </div>
                    <div class="botones">
                        <a href="#" name="registrate" class="btn-solicitar v1 inicio">solicitar</a>
                    </div>
                </div>

            </div>

        </main>

        <!--pop-up iniciar sesion-->
        <div class="overlay" id="login">
            <div class="popup" id="popup">
                <div class="interno">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <div class="elementos">
                        <h1>iniciar sesion</h1>
                        
                        <form method="POST" id="formularioini" onsubmit="return iniciar_sesion()">
                            <div class="contenedor-inputs">
                                <input type="number" name="nit" placeholder="ingrese su cedula" required>
                                <input type="password" name="clave" placeholder="ingrese clave" required>
                            </div>
                            <input class="btn-submit" type="submit" value="entrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--pop-up registro-->
        <div class="overlay" id="rego">
            <div class="popup formu" id="pop">
                <a href="#" id="btn-cerrar-popup4" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <div class="elementos">
                    <h1>registrarse</h1>
                    
                    <form onsubmit="return Registrarse()"  id="formulario" >
                        <div class="contenedor-inputs">
                            <div class="contenedor-division">
                                <div class="columna-izquierda">
                                    <input type="text" name="nombre" placeholder="ingrese su nombre" required>
                                    <input type="number" name="nitr" placeholder="ingrese su cedula" required>
                                    <input type="text" name="direccion" placeholder="ingrese su direccion" required>
                                    <input type="password" name="clave" placeholder="ingrese clave" required>
                                    
                                    <!--Cargar Generos-->
                                    <select class="listado-tallas" name="tallas">
                                        <option value="0">---- Seleccionar Talla ----</option>
                                        <?php
                                        include "php/Conexion.php";
                                        $consultaGeneros=$conexion->prepare("SELECT * FROM generos  WHERE ID_GENERO!=3");
                                        $consultaGeneros->execute();
                                        while($row=$consultaGeneros->fetch(PDO::FETCH_ASSOC)){
                                            echo '<option value="' .$row['ID_GENERO']. '">' .$row['NOMBRE_GENERO'] . '</option>';
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="columna-derecha">
                                    <input type="text" name="apellido" placeholder="ingrese su apellido" required>
                                    <input type="email" name="correo" placeholder="ingrese su correo" required>
                                    <input type="number" name="telefono" placeholder="ingrese su numero de contacto" required>
                                    <input type="password" name="clave2" placeholder="repita su clave clave" required>
                                </div>
                                
                            </div>
                        </div>
                </div>
                <input class="btn-submit" type="submit" value="entrar">
                </form>
            </div>
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
    <script src='procesos/procesos.js'></script>
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="librerias/sweetalert.min.js"></script>
    
</body>

</html>