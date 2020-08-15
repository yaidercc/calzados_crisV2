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
                <!--<a href="#" class="notificaciones"><i title="notificaciones" class="fas fa-bell"> </i>notificaciones</a>
                <a href="#" class="nombre"><i title="notificaciones" class="fas fa-user"> </i>yaider</a>-->
            </div>
            <div class="salir">
                <a href="#" class="cerrar" id="btn">entrar</a>
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
            <h1 class="calzado">calzados para hombre y para mujer</h1>
            <!--contenedor productos-->
            <div class="container">
                <!--productos-->
                <div class="producto">
                    <img class="imagen" src="img/zapatos.jpg" height="100%" width="100%">
                    <div class="precio">
                        <h1>venus azules</h1>
                        <p>para: hombre</p>
                        <h2>$ 30.000</h2>
                        <p><i class="fas fa-cart-arrow-down"></i> 10003</p>
                    </div>
                    <div class="botones">
                        <a href="#" class="car"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="sol">SOLICITAR</a>
                    </div>
                    
                </div>

                <div class="producto">
                    <img class="imagen" src="img/zapatos.jpg" height="100%" width="100%">
                    <div class="precio">
                        <h1>zapatillas vans</h1>
                        <p>para: hombre</p>
                        <h2>$ 30.000</h2>
                        <p><i class="fas fa-cart-arrow-down"></i> 10003</p>
                    </div>
                    <div class="botones">
                        <a href="#" class="car"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="sol">SOLICITAR</a>
                    </div>
                </div>

                <div class="producto">
                    <img class="imagen" src="img/zapatos.jpg" height="100%" width="100%">
                    <div class="precio">
                        <h1>zapatillas vans</h1>
                        <p>para: hombre</p>
                        <h2>$ 30.000</h2>
                        <p><i class="fas fa-cart-arrow-down"></i> 10003</p>
                    </div>
                    <div class="botones">
                        <a href="#" class="car"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="sol">SOLICITAR</a>
                    </div>
                </div>
                
            </div>
            
        </main>
        
        <!--Iniciar sesion-->
        

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
    <script src='javascript/main.js'></script> 
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
</body>
</html>