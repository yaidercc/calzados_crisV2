<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet"> 
    
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
            </div>
        </div>

        <!--contenido principal-->
        <main class="principal">
            <div class="contenedor-producto">
                <div class="foto">
                    <div class="slider">
                    <img class="imagen" src="img/adidas.jpg" height="90%" width="100%">

                        <img class="imagen" src="img/adidas.jpg" height="90%" width="100%">
                        <img class="imagen" src="img/adidas.jpg" height="90%" width="100%">
                    </div>
        
                    <!--estrellas-->
                    <div class="icons">
                        <div class="puntuaciones">
                            <a href="#" id="1"><i class="fas fa-star"></i></a>
                            <a href="#" id="2"><i class="fas fa-star"></i></a>
                            <a href="#" id="3"><i class="fas fa-star"></i></a>
                            <a href="#" id="4"><i class="fas fa-star"></i></a>
                            <a href="#" id="5"><i class="fas fa-star"></i></a>
                            <br/>
                            <span class="calificacion"></span>
                        </div>
                    </div>
                </div>
                <div class="caracteristicas">
                    <h1 class="title">zapatos color piel</h1>
                    <div class="elecciones">
                        <div class="hijo tallas">
                            <p>tallas: </p>
                            <div class="caja">
                                <select class="listado-tallas" name="tallas">
                                    <option>---- Seleccionar Talla ----</option>
                                </select>
                            </div>
                        </div>
                        <div class="hijo general">
                            <p>unidades disponibles:</p> <p class="later">50 Unidades</p>
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
                            <p >precio unitario:</p>
                            <p class="precio">$ 50.000</p>
                        </div>
                        
                        <div class="hijo colores">
                            <p class="color">colores: </p>
                            <a href="#"class="color rojo">rojo</a>
                            <a href="#" class="color verde">verde</a>
                            <a href="#" class="color amarillo">amarillo</a>
                        </div>
                    </div>
                    <div class="contenedor-botones">
                        <div class="elements">
                            <a href="cliente.php" class="btn-carrito flecha"><i class="fas fa-chevron-left"></i></a>
                            <a href="#" class="btn-solicitar">SOLICITAR</a>
                        </div>
                    </div>
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
    <script src='js/main.js'></script> 
    
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script> 
    <script src='js/jquery.slides.js'></script> 
    <script>
 
    $(function(){
        $(".slider").slidesjs({
            width: 940,
            height: 900
        });
    });

 </script>
    </script>
</body>
</html>