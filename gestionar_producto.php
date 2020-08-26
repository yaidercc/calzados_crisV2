<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>Gestionar Producto</title>
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
        <!--filtros de la pagina-->
        <div class="filtros">
            <div class="nav">
                <a href="#">mujer</a>
                <a href="#">hombre</a>
                <a href="#">mas filtros  <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
        <!--contenido principal-->
        <main class="principal">
            <!--elementos de la pagina-->
            
            <div class="elementos-producto">
                <h1 class="titulo">gestionar producto</h1>
                <div class="files">
                    <div class="sub">
                        <div class="box">
					        <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1"  />
					        <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>subir imagen&hellip;</span></label>
                        </div>
                        <div class="box">
					        <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-1"  />
					        <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>subir imagen&hellip;</span></label>
                        </div>
                        <div class="box">
					        <input type="file" name="file-3[]" id="file-3" class="inputfile inputfile-1"  />
					        <label for="file-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>subir imagen&hellip;</span></label>
                        </div>
                    </div>
                </div>
               
                <div class="columnas">
                    <div class="left">
                        <p>nombre producto</p>
                        <input type="text" placeholder="ingrese nombre del producto" focus>
                        
                        <div class="contenedor-general">
                            <div class="lft">
                                <p>talla mas pequeña</p>
                                <input type="text" placeholder="talla">

                                <p>cantidades</p>
                                <input type="number" placeholder="ingresar">
                            </div>
                            <div class="rgt">
                                <p>talla mas grande</p>
                                <input  type="text" placeholder="talla">
                                
                                <p>color 1</p>
                                <input type="text" placeholder="ingresar">
                            </div>
                            
                        </div>
                </div>

                <div class="right">
                    <p>precio</p>
                    <input type="text" placeholder="precio">
                    <p>sexo</p>
                    <select name="sexo">
                        <option>mujer</option>
                        <option>hombre</option>
                        <option>hombre & mujer</option>
                    </select>
                    <div class="contenedor-general">
                        <div class="lft">
                            <p>color 2</p>
                            <input type="text" placeholder="ingresar">
                        </div>
                        <div class="rgt">
                            <p>color 3</p>
                            <input type="text" placeholder="ingresar">
                        </div>
                    </div>
                    </div>
                </div>
               
                
                <!--boton aqregar producto-->
                <div class="contenedor-boton">
                    <a href="#" class="sol">agregar producto</a>
                </div>
            </div>
        </main>
        
        <!--Carrito-->
        <div class="overlay" id="registro">
            <div class="popup" id="popups">
                <!--boton cerrar popup-->
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
    <script src="custom-file-input.js"></script> 
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
</body>
</html>