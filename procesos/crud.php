<?
     require_once "Conexion.php";
     class crud extends Conexion{
          public function insertarDatos($datos){
               $iniciar="INSERT INTO `usuarios` (`IDENTIFICACION`, `PRIMER_NOMBRE`, `SEGUNDO_NOMBRE`, `PRIMER_APELLIDO`, `SEGUNDO_APELLIDO`, `CORRE`, `CLAVE`, `DIRECCION`, `TELEFONO`, `ID_TIPO_USUARIO_FK`, `ID_GENERO_FK`) VALUES (':nit',':nombre1',':nombre2', ':apellido1', ':apellido2', ':correo', ':clave', ':direccion', ':telefono', ':tipo_usuario', ':genero');";
               $queryIniciar=ConexionPDO::conectar()->prepare($iniciar);
               $queryIniciar->bindParam(":IDENTIFICACION",$datos["nit"], PDO::PARAM_STR);
               $queryIniciar->bindParam(":CLAVE",$datos["clave"], PDO::PARAM_STR);
               return $queryIniciar;
               $queryIniciar->close();
          }
     }

?>