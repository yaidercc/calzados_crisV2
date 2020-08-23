<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
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
                <a href="#">mujer</a>
                <a href="#">hombre</a>
                <a href="#">mas filtros</a>
            </div>
        </div>

        <!--contenido principal-->
        <main class="principal">
            <div class="contenedor-producto">
                <div class="foto">
                    <img class="imagen" src="img/zapatos.png" height="90%" width="100%">
                    <!--estrellas-->
                    <div class="icons">
                        <i class="flecha fas fa-chevron-left"></i>
                        <div class="puntuaciones">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <p>buena</p>
                        </div>
                        <i class="flecha fas fa-chevron-right"></i>
                    </div>
                </div>
                <div class="caracteristicas">
                    <h1 class="title">zapatos color piel</h1>
                    <div class="elecciones">
                        <div class="hijo tallas">
                            <p>tallas: </p>
                            <div class="caja">
                                <select class="listado-tallas" name="select">
                                    <option>yaider</option>
                                    <option>cordoba</option>
                                    <option>cordoba</option>
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
                            <p class="later">$ 50.000</p>
                        </div>
                        
                        <div class="hijo colores">
                            <p class="color">colores: </p>
                            <a href="#"class="color rojo">rojo</a>
                            <a href="#" class="color verde">verde</a>
                            <a href="#" class="color amarillo">amarillo</a>
                        </div>
                        
                    </div>
                    <div class="btns">
                        <div class="elements">
                            <a href="cliente.php" class="car flecha"><i class="fas fa-chevron-left"></i></a>
                            <a href="#" class="sol">SOLICITAR</a>
                            <a href="#" class="car"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </main>
        
        <!--Iniciar sesion-->
        <div class="overlay" id="login">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h1>iniciar sesion</h1>
                    <form action="">
                        <div class="contenedor-inputs">
                            <input type="number" placeholder="ingrese su cedula" required>
                            <input type="password" placeholder="ingrese clave" required>
                        </div>
                        <input class="btn-submit" type="submit" value="entrar">
                        <input class="btn-submit" type="submit" value="registro">
                    </form>
            </div>
        </div>

        <!--Registrarse-->
        <div class="overlay" id="registro">
            <div class="popup" id="popups">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h1>iniciar sesion</h1>
                    <form action="">
                        <div class="contenedor-inputs">
                            <input type="number" placeholder="ingrese su cedula" required>
                            <input type="password" placeholder="ingrese clave" required>
                        </div>
                        <input class="btn-submit" type="submit" value="entrar">
                    </form>
            </div>
        </div>

        <!--Carrito-->
        <div class="overlay" id="registro">
            <div class="popup" id="popups">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h1>iniciar sesion</h1>
                    <form action="">
                        <div class="contenedor-inputs">
                            <input type="number" placeholder="ingrese su cedula" required>
                            <input type="password" placeholder="ingrese clave" required>
                        </div>
                        <input class="btn-submit" type="submit" value="entrar">
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