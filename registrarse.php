<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/login.css">
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
               <form action="" id="formregistro">
                    <h1 class="titulo-registro">registrate</h1>
                    <div class="formulario registrarse">
                         <div class="columna-izquierda">
                              <div class="input contenedor">
                                   <i class="fas fa-user"></i>
                                   <input type="text" placeholder="Ingrese Su Nombre">
                              </div>

                              <div class="input contenedor">
                                   <i class="fas fa-user"></i>
                                   <input type="text" placeholder="Ingrese Su nombre De Usuario">
                              </div>

                              <div class="input contenedor">
                                   <i class="fas fa-map-marker-alt"></i>
                                   <input type="text" placeholder="Ingrese Su Direccion">
                              </div>
                              <div class="input contenedor">
                                   <i class="fas fa-key"></i>
                                   <input type="password" placeholder="Ingrese Su Clave">
                                   <select>
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
                                   <input type="text" placeholder="Ingrese Su Apellido">
                              </div>

                              <div class="input contenedor">
                                   <i class="fas fa-phone-square-alt"></i>
                                   <input type="text" placeholder="Ingrese Su numero De Contacto">
                              </div>
                              <div class="input contenedor">
                                   <i class="fas fa-envelope"></i>
                                   <input type="email" placeholder="Ingrese Su Correo">
                              </div>

                              <div class="input contenedor">
                                   <i class="fas fa-key"></i>
                                   <input type="password" placeholder="repita Su Clave">
                              </div>

                         </div>
                         <div class="btn-enviar">
                              <input type="submit" value="Ingresar">
                              <a class="olvide" href="index.php">Ir al inicio</a>
                         </div>
                         
               </form>
          </div>
     </div>
     <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
</body>

</html>