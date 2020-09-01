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
                <a href="#" class="chat" id="chateasion"><i title="notificaciones" class="fas fa-comments" > </i>chat</a>
                <a href="#" id="notificar"class="notificaciones"><i title="notificaciones" class="fas fa-bell"> </i>notificaciones</a>
                <a href="#" class="nombre"><i title="notificaciones" class="fas fa-user"> </i>yaider</a>
            </div>

            <div class="salir">
                <a href="#" class="cerrar" id="abrir">salir</a>
            </div>

        </header>
        <!--filtros-->
        <div class="filtros">
            <div class="nav">
                <a href="#">mujer <i class="fas fa-female"></i></a>
                <a href="#">hombre  <i class="fas fa-male"></i></a>
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
            <div class="container">
                <!--productos-->
                <div class="producto">
                    <img class="imagen" src="img/nike.jpg" height="100%" width="100%">
                    <div class="precio">
                        <input type="text" value="tenis nike" class="inp">
                        <p>para: hombre</p>
                        <input type="text" value="350.000" class="inp">
                        <p><i class="fas fa-cart-plus"></i> 4</p>
                        <div class="visible">
                            <p class="txt">visibilidad del producto</p>
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="botones">
                        <a href="#" class="car cared"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="sol">modificar</a>
                    </div>
                </div>

                <div class="producto">
                    <img class="imagen" src="img/plataformas.jpg" height="100%" width="100%">
                    <div class="precio">
                        <input type="text" value="plataformas negras" class="inp">
                        <p>para: mujer</p>
                        <input type="text" value="80.000" class="inp">
                        <p><i class="fas fa-cart-plus"></i> 8</p>
                        <div class="visible">
                            <p class="txt">visibilidad del producto</p>
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="botones">
                    <a href="#" class="car cared"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="sol">modificar</a>
                    </div>
                </div>

                <div class="producto">
                    <img class="imagen" src="img/adidas.jpg" height="100%" width="100%">
                    <div class="precio">
                        <input type="text" value="tenis adidas" class="inp">
                        <p>para: hombre</p>
                        <input type="text" value="240.000" class="inp">
                        <p><i class="fas fa-cart-plus"></i> 8</p>
                        <div class="visible">
                            <p class="txt">visibilidad del producto</p>
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="botones">
                    <a href="#" class="car cared"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="sol">modificar</a>
                    </div>
                </div>

                <div class="producto">
                    <img class="imagen" src="img/zapatos.png" height="100%" width="100%">
                    <div class="precio">
                        <input type="text" value="tacones" class="inp">
                        <p>para: mujer</p>
                        <input type="text" value="55.000" class="inp">
                        <p><i class="fas fa-cart-plus"></i> 5</p>
                        <div class="visible">
                            <p class="txt">visibilidad del producto</p>
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="botones">
                        <a href="#" class="car cared"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="sol">modificar</a>
                    </div>
                </div>
                
            </div>
            
        </main>

         <!--notificaciones-->
         <div class="overlay" id="notificaciones">
            <div class="popup notificaciones" id="popup-notificaiones">
                <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h1>entregas pendientes</h1>
                    <scroll-container> 
                    <form action="">
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
                    <form action="">
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
                    <form action="">
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
                    <form action="">
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
    <script src='main.js'></script> 
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
</body>
</html>