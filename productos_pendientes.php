<?php
include 'php/conexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet">
     <link rel="icon" type="png" href="img/icon.png" />
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/hint.min.css">
     <title>Pendientes</title>
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
                    <a href="#" class="nombre"><i title="notificaciones" class="fas fa-user"> </i><?php echo " " . $_SESSION['nombre']; ?></a>
               </div>

               <div class="salir">
                    <a href="php/cerrar_sesion.php" class="cerrar" id="abrir">salir</a>
               </div>

          </header>
          <!--filtros-->
          <div class="filtros">
               <div class="nav">
               </div>
          </div>

          <!--contenido principal-->
          <main class="principal">
               <div class="cabeza-main">
                    <h1 class="calzado">Productos pendientes</h1>
               </div>
               <!--contenedor productos-->
               <div class="container-productos-pendientes" style="color:black; margin:100px; margin-top:20px;">
                    <div class="pedido">
                         <form>
                              <table class="lista-pe" style="width: 100%;">
                                   <tr class="titulos">
                                        <th></th>
                                        <th width="800px" class="nombre">nombre cliente</th>
                                        <th width="400px" class="total">total compra</th>
                                        <th width="300px" class="cantidads">estado</th>
                                        <th width="100px" class="ver">Ver</th>
                                   </tr>
                                   <tr>
                                        <td><input type="radio" name="selec"></td>
                                        <td><p>yadier cordoba cordoba</p></td>
                                        
                                        <td><p>50.000</p></td>
                                             
                                        
                                        <td>
                                             <div class="hint--top" data-hint="En camino">
                                                  <i class="fas fa-truck-moving"></i>
                                             </div>
                                        </td>
                                        <td><i class="fas fa-eye"></i></td>
                                   </tr>
                                   <tr>
                                        <td><input type="radio" name="selec"></td>
                                        <td>
                                             <p>yadier cordoba cordoba</p>
                                        </td>
                                        <td>
                                             <p class="hint--top" data-hint="Lorem Ipsum Dolor Sit Amet">50.0000</p>
                                        </td>
                                        <td>
                                             <div class="hint--top" data-hint="Cancelado">
                                                  <i class="fas fa-times" title="hola"></i>
                                             </div>

                                        </td>
                                        <td><i class="fas fa-eye"></i></td>
                                   </tr>
                              </table>

                              <!---<p>10</p>
                         <p>1000</p>
                         <i class="fas fa-eye"></i>
                         <input type="radio">-->
                              <div class="herramientas">
                                   <a href="#" class="cancel">cancelar</a>
                                   <a href="#" class="camino">en camino </a>
                                   <a href="#" class="entregado">entregado</a>

                              </div>
                         </form>
                    </div>

               </div>

          </main>

          <div class="overlay" id="chat">
               <div class="popup" id="chatear">
                    <a href="#" id="btn-cerrar-popup3" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h1>conversacion</h1>
                    <form action="#">
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
     <script src='js/main.js'></script>
     <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
     </script>
</body>

</html>