<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet">
     <script src="librerias/jquery-3.5.1.min.js"></script>
     
     <link rel="stylesheet" href="css/login.css">
     <link rel="icon" type="png" href="img/icon.png"/>
     <title>Registrarse - Calzados</title>
</head>

<body>
     <div class="contenedor-general">
          <div class="cambiar">
               <div class="interno">
                    <div class="contenedor-imagen">
                         <img src="img/icono.jpg" width="200px" alt="logo">
                    </div>
                    <div class="contenedor-texto">
                         <h1>¿Ya tienes cuenta?</h1>
                         <p>puedes iniciar sesion dando click en el siguiente boton</p>
                    </div>
                    <div class="contenedor-link">
                         <a href="iniciar_sesion.php">Iniciar Sesion</a>
                    </div>
               </div>
          </div>
          <div class="form-registro">
               <form action="" id="formregistro" ">
                    <h1 class="titulo-registro">registrate</h1>
                    <div class="formulario registrarse">
                         <div class="columna-izquierda">
                              <div class="input contenedor">
                                   <i class="fas fa-user"></i>
                                   <input type="text" name="nombre" placeholder="Ingrese Su Nombre" required>
                              </div>

                              <div class="input contenedor">
                                   <i class="fas fa-user"></i>
                                   <input type="text" name="username" placeholder="Ingrese Su nombre De Usuario" required>
                              </div>

                              <div class="input contenedor">
                                   <i class="fas fa-map-marker-alt"></i>
                                   <input type="text" name="direccion" placeholder="Ingrese Su Direccion" required>
                              </div>
                              <div class="input contenedor">
                                   <i class="fas fa-key"></i>
                                   <input type="password" id="clave" name="clave" placeholder="Ingrese Su Clave" required>
                                   <select name="genero" required>
                                        <option>Seleccionar Genero</option>
                                        <?php
                                        include "php/Conexion.php";
                                        $consultaGeneros = $conexion->prepare("SELECT * FROM generos  WHERE ID_GENERO!=3");
                                        $consultaGeneros->execute();
                                        while ($row = $consultaGeneros->fetch(PDO::FETCH_ASSOC)) {
                                             echo '<option value="' . $row['ID_GENERO'] . '">' . $row['NOMBRE_GENERO'] . '</option>';
                                        }
                                        ?>
                                   </select>
                              </div>
                              

                         </div>
                         <div class="derecha">
                              <div class="input contenedor">
                                   <i class="fas fa-user"></i>
                                   <input type="text" name="apellido" placeholder="Ingrese Su Apellido" required>
                              </div>

                              <div class="input contenedor">
                                   <i class="fas fa-phone-square-alt"></i>
                                   <input type="number" name="telefono" id="tel" placeholder="Ingrese Su numero De Contacto" required>
                              </div>
                              <div class="input contenedor">
                                   <i class="fas fa-envelope"></i>
                                   <input type="email" name="correo" placeholder="Ingrese Su Correo" required>
                              </div>

                              <div class="input contenedor">
                                   <i class="fas fa-key"></i>
                                   <input type="password" id="repclave" name="repclave" placeholder="repita Su Clave" required>
                              </div>
                              <sapn class="nofuerte"><i></i></span>

                         </div>
                         <div class="btn-enviar">
                              <input type="submit" class="reg" value="Registrarse">
                              <a class="olvide" href="index.php">Ir al inicio</a>
                         </div>
                         
               </form>
          </div>
     </div>
     <script src="js/validaciones.js"></script>
     <script src='js/procesos.js'></script>
     <script src="librerias/sweetalert.min.js"></script>
     <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
</body>

</html>