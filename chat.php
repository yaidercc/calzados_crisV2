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
        <div class="filtros cabecera">
            <div class="menu">
                <i class="fas fa-bars"></i>
                <p>chats</p>
            </div>

            <a href="#" class="cart nn">
                <span class="num_notifs">0</span>
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>

        <!--contenido principal-->
        <main class="principal">
            <div class="chats"></div>
            <div class="converasacion"></div>
        </main>
        
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