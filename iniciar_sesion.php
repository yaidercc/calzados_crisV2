<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet">
     <script src="librerias/jquery-3.5.1.min.js"></script>
     <link rel="stylesheet" href="css/login.css">
     <link rel="icon" type="png" href="img/icon.png"/>
     <title>Iniciar sesion - Calzados</title>
</head>

<body>
     <div class="contenedor-general">
          <div class="cambiar">
               <div class="interno">
                    <div class="contenedor-imagen">
                         <img src="img/icono.jpg" width="200px" alt="logo">
                    </div>
                    <div class="contenedor-texto">
                         <h1>¿aun no tienes cuenta?</h1>
                         <p>puedes crear una dando click en el siguiente boton.</p>
                    </div>
                    <div class="contenedor-link">
                         <a href="registrarse.php">Registrarse</a>
                    </div>
               </div>
          </div>
          <div class="form-registro">
               <form action="" id="formulario">
                    <h1 class="titulo-registro">iniciar sesion</h1>
                    <div class="formularios iniciar">
                         <div class="input contenedor">
                              <i class="fas fa-user"></i>
                              <input type="text" name="nit" placeholder="Ingrese Su Nombre De Usuario o Correo" autocomplete="off" required>
                         </div>
                         <div class="input contenedor">
                              <i class="fas fa-key"></i>
                              <input type="password" name="clave" placeholder="Ingrese Su clave" autocomplete="off" required>
                         </div>
                    </div>
                    <a class="olvide" id="olvido" href="#">olvide mi clave</a>
                    <div class="btn-enviar">
                         <input type="submit" value="Ingresar" class="ing">
                    </div>
                    <a class="olvide" href="index.php">Ir al inicio</a>
               </form>
          </div>
          <div class="overlay" id="notificaciones">
               <div class="popup notificaciones" id="popup-notificaiones">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <form>
                         <h1>cambiar contraseña</h1>
                         <div class="contenedor-inputs">
                              <div class="input contenedor">
                                   <i class="fas fa-envelope"></i>
                                   <input type="password" placeholder="Ingrese su correo electronico" autocomplete="off">
                              </div>
                              <div class="input contenedor">
                                   <i class="fas fa-key"></i>
                                   <input type="password" placeholder="Ingrese su nueva calve" autocomplete="off">
                              </div>
                              <div class="input contenedor">
                                   <i class="fas fa-key"></i>
                                   <input type="password" placeholder="Repita su clave" autocomplete="off">
                              </div>
                              <div class="btn-enviar">
                                   <input type="submit" value="Ingresar">
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
     
     <script src='js/main.js'></script>
     <script src='js/procesos.js'></script>
     <script src="librerias/sweetalert.min.js"></script>
     <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
</body>

</html>