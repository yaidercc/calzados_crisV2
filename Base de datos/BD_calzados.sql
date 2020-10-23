-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2020 a las 05:24:14
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calzados`
--
CREATE DATABASE IF NOT EXISTS `calzados` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `calzados`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compras`
--

CREATE TABLE `detalle_compras` (
  `ID_COMPRA` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `TOTAL` int(11) DEFAULT NULL,
  `TALLAS` varchar(5) DEFAULT NULL,
  `pagado` int(2) NOT NULL,
  `ID_PRODUCTO_FK` int(11) NOT NULL,
  `NRO_FACTURA_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezado_ventas`
--

CREATE TABLE `encabezado_ventas` (
  `NRO_FACTURA` int(11) NOT NULL,
  `FECHA_COMPRA` date NOT NULL,
  `IDENTIFICACION_FK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `ID_GENERO` int(11) NOT NULL,
  `NOMBRE_GENERO` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`ID_GENERO`, `NOMBRE_GENERO`) VALUES
(1, 'hombre'),
(2, 'mujer'),
(3, 'mujer y hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(25) NOT NULL,
  `IMAGEN` varchar(200) NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `TALLA_MENOR` varchar(5) NOT NULL,
  `TALLA_MAYOR` varchar(5) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `CANTIDAD_COMPRAS` int(5) NOT NULL DEFAULT 0,
  `ID_GENERO_FK` int(11) NOT NULL,
  `IMAGEN2` varchar(200) DEFAULT NULL,
  `IMAGEN3` varchar(200) DEFAULT NULL,
  `COLOR1` varchar(30) DEFAULT NULL,
  `COLOR2` varchar(30) DEFAULT NULL,
  `COLOR3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_PRODUCTO`, `NOMBRE_PRODUCTO`, `IMAGEN`, `PRECIO`, `TALLA_MENOR`, `TALLA_MAYOR`, `CANTIDAD`, `CANTIDAD_COMPRAS`, `ID_GENERO_FK`, `IMAGEN2`, `IMAGEN3`, `COLOR1`, `COLOR2`, `COLOR3`) VALUES
(0, 'tenis nike', 'img/nike.jpg', 3500, '25', '39', 89, 0, 1, NULL, NULL, NULL, NULL, NULL),
(1, 'plataformas', 'img/plataformas.jpg', 45000, '34', '42', 89, 5, 2, 'img/plataformas.jpg', 'img/plataformas.jpg', 'ROJO ', 'AMARILLO', 'AZUL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `ID_TIPO_USUARIO` int(11) NOT NULL,
  `NOMBRE_TIPO_USUARIO` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`ID_TIPO_USUARIO`, `NOMBRE_TIPO_USUARIO`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
	ID_USUARIO INT NOT NULL PRIMARY KEY auto_increment,
  `NOMBRE_USUARIO` varchar(20) NOT NULL,
  `NOMBRE` varchar(15) NOT NULL,
  `APELLIDO` varchar(15) NOT NULL,
  `CORREO` varchar(45) DEFAULT NULL,
  `CLAVE` varchar(20) NOT NULL,
  `DIRECCION` varchar(30) NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `ID_TIPO_USUARIO_FK` int(11) NOT NULL,
  `ID_GENERO_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table preguntas(
	ID_PREGUNTA INT PRIMARY KEY,
    MENSAJE VARCHAR(400),
    ID_NOMBRE_USUARIO_FK INT NOT NULL,
    ID_PRODUCTO_FK INT NOT NULL,
    FOREIGN KEY (ID_PRODUCTO_FK) REFERENCES productos(ID_PRODUCTO),
    FOREIGN KEY (ID_USUARIO_FK) REFERENCES usuarios(ID_USUARIO)
)Engine=InnoDB;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NOMBRE_USUARIO`, `NOMBRE`, `APELLIDO`, `CORREO`, `CLAVE`, `DIRECCION`, `TELEFONO`, `ID_TIPO_USUARIO_FK`, `ID_GENERO_FK`) VALUES
('yaidercc', 'jhon', '23', 'yaiuder@gmailcmo', '123', 'CLL 5C ADSD', 231324, 2, 1),
('yaiderk2', 'yaider', 'cordoba', 'yaiderk2@gmail.com', 'soloflow2001', 'cll 55c nro 2-70 int 122', 2235464, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD PRIMARY KEY (`ID_COMPRA`),
  ADD KEY `NRO_FACTURA_FK` (`NRO_FACTURA_FK`),
  ADD KEY `ID_PRODUCTO_FK` (`ID_PRODUCTO_FK`);

--
-- Indices de la tabla `encabezado_ventas`
--
ALTER TABLE `encabezado_ventas`
  ADD PRIMARY KEY (`NRO_FACTURA`),
  ADD KEY `IDENTIFICACION_FK` (`IDENTIFICACION_FK`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`ID_GENERO`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD KEY `ID_GENERO_FK` (`ID_GENERO_FK`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`ID_TIPO_USUARIO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NOMBRE_USUARIO`),
  ADD KEY `ID_TIPO_USUARIO_FK` (`ID_TIPO_USUARIO_FK`),
  ADD KEY `ID_GENERO_FK` (`ID_GENERO_FK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD CONSTRAINT `detalle_compras_ibfk_1` FOREIGN KEY (`NRO_FACTURA_FK`) REFERENCES `encabezado_ventas` (`NRO_FACTURA`),
  ADD CONSTRAINT `detalle_compras_ibfk_2` FOREIGN KEY (`ID_PRODUCTO_FK`) REFERENCES `productos` (`ID_PRODUCTO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `encabezado_ventas`
--
ALTER TABLE `encabezado_ventas`
  ADD CONSTRAINT `encabezado_ventas_ibfk_1` FOREIGN KEY (`IDENTIFICACION_FK`) REFERENCES `usuarios` (`NOMBRE_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ID_GENERO_FK`) REFERENCES `generos` (`ID_GENERO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_TIPO_USUARIO_FK`) REFERENCES `tipo_usuarios` (`ID_TIPO_USUARIO`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ID_GENERO_FK`) REFERENCES `generos` (`ID_GENERO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Base de datos: `calzados_cris`
--
CREATE DATABASE IF NOT EXISTS `calzados_cris` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `calzados_cris`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compras`
--

CREATE TABLE `detalle_compras` (
  `ID_COMPRA` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `TOTAL` int(11) DEFAULT NULL,
  `TALLAS` varchar(5) DEFAULT NULL,
  `ID_PRODUCTO_FK` int(11) NOT NULL,
  `NRO_FACTURA_FK` int(11) NOT NULL,
  `pagado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezado_ventas`
--

CREATE TABLE `encabezado_ventas` (
  `NRO_FACTURA` int(11) NOT NULL,
  `FECHA_COMPRA` date NOT NULL,
  `ID_USUARIO_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `ID_GENERO` int(11) NOT NULL,
  `NOMBRE_GENERO` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`ID_GENERO`, `NOMBRE_GENERO`) VALUES
(1, 'hombre'),
(2, 'mujer'),
(3, 'mujer y hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(25) NOT NULL,
  `IMAGEN` longblob NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `ID_GENERO_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `ID_TIPO_USUARIO` int(11) NOT NULL,
  `NOMBRE_TIPO_USUARIO` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`ID_TIPO_USUARIO`, `NOMBRE_TIPO_USUARIO`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `IDENTIFICACION` varchar(20) NOT NULL,
  `PRIMER_NOMBRE` varchar(15) NOT NULL,
  `SEGUNDO_NOMBRE` varchar(15) DEFAULT NULL,
  `PRIMER_APELLIDO` varchar(15) NOT NULL,
  `SEGUNDO_APELLIDO` varchar(15) NOT NULL,
  `CORRE` varchar(45) DEFAULT NULL,
  `CLAVE` varchar(20) NOT NULL,
  `DIRECCION` varchar(30) NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `ID_TIPO_USUARIO_FK` int(11) NOT NULL,
  `ID_GENERO_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `IDENTIFICACION`, `PRIMER_NOMBRE`, `SEGUNDO_NOMBRE`, `PRIMER_APELLIDO`, `SEGUNDO_APELLIDO`, `CORRE`, `CLAVE`, `DIRECCION`, `TELEFONO`, `ID_TIPO_USUARIO_FK`, `ID_GENERO_FK`) VALUES
(1, '1000538315', 'yaider', NULL, 'cordoba', 'cordoba', 'yaiderc19@gmail.com', '123', 'cll 55c #2-70 int 122', 2222222, 5, 1),
(1, '1000538319', 'yaider', NULL, 'cordoba', 'cordoba', 'yaiderc19@gmail.com', '123', 'cll 55c #2-70 int 122', 2222222, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDENTIFICACION`);
--
-- Base de datos: `escuela`
--
CREATE DATABASE IF NOT EXISTS `escuela` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escuela`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID_ALUMNO` int(11) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `APELLIDOS` varchar(45) DEFAULT NULL,
  `MATERIA` varchar(25) DEFAULT NULL,
  `CALIFICACION` double DEFAULT NULL,
  `estatus` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_ALUMNO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID_ALUMNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Base de datos: `estudiantes`
--
CREATE DATABASE IF NOT EXISTS `estudiantes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estudiantes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_personal`
--

CREATE TABLE `informacion_personal` (
  `NIT` varchar(25) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `PRIMER_APELLIDO` varchar(30) NOT NULL,
  `SEGUNDO_APELLIDO` varchar(30) NOT NULL,
  `FECHA_NACIMIENTO` datetime NOT NULL,
  `CELULAR` varchar(10) DEFAULT NULL,
  `GRADO` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informacion_personal`
--
ALTER TABLE `informacion_personal`
  ADD PRIMARY KEY (`NIT`);
--
-- Base de datos: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `idautores` int(11) NOT NULL,
  `nombre_comp` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` int(30) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `salario` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lectores`
--

CREATE TABLE `lectores` (
  `idlectores` int(11) NOT NULL,
  `nombre_comp` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `email` varchar(45) NOT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `puntos prestamo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idTipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`idautores`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `lectores`
--
ALTER TABLE `lectores`
  ADD PRIMARY KEY (`idlectores`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`idTipo_usuario`);
--
-- Base de datos: `pdof`
--
CREATE DATABASE IF NOT EXISTS `pdof` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `pdof`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_crud`
--

CREATE TABLE `t_crud` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `sueldo` float DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `fRegistro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_crud`
--
ALTER TABLE `t_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_crud`
--
ALTER TABLE `t_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Volcado de datos para la tabla `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"snap_to_grid\":\"off\",\"relation_lines\":\"true\",\"angular_direct\":\"direct\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"calzados\",\"table\":\"usuarios\"},{\"db\":\"escuela\",\"table\":\"alumnos\"},{\"db\":\"calzados\",\"table\":\"productos\"},{\"db\":\"subir_foto\",\"table\":\"foto\"},{\"db\":\"serviceyaider\",\"table\":\"callc\"},{\"db\":\"calzados\",\"table\":\"detalle_compras\"},{\"db\":\"serviceyaider\",\"table\":\"users\"},{\"db\":\"calzados_cris\",\"table\":\"usuarios\"},{\"db\":\"calzados\",\"table\":\"encabezado_ventas\"},{\"db\":\"calzados\",\"table\":\"tipo_usuarios\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'calzados', 'productos', '{\"sorted_col\":\"CANTIDAD_COMPRAS ASC\"}', '2020-10-03 18:07:17'),
('root', 'comsecret', 'torneos', '{\"sorted_col\":\"`torneos`.`rangos_id` ASC\"}', '2020-05-09 15:40:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-10-22 02:55:36', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"es\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `pruebabd`
--
CREATE DATABASE IF NOT EXISTS `pruebabd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pruebabd`;
--
-- Base de datos: `serviceyaider`
--
CREATE DATABASE IF NOT EXISTS `serviceyaider` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `serviceyaider`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `callc`
--

CREATE TABLE `callc` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `callc`
--

INSERT INTO `callc` (`cedula`, `nombre`, `pass`, `email`) VALUES
(123, ' ddadsada', '123', 'asdasdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conect`
--

CREATE TABLE `conect` (
  `direcip` int(11) NOT NULL,
  `gateway` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idequipo` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `ultrevision` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hardw`
--

CREATE TABLE `hardw` (
  `serialid` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `fechainst` date DEFAULT NULL,
  `ultrevi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incident`
--

CREATE TABLE `incident` (
  `ticket` int(11) NOT NULL,
  `fechareg` date DEFAULT NULL,
  `fechaate` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `descriptec` text DEFAULT NULL,
  `descripusu` text DEFAULT NULL,
  `users_cedula` int(11) NOT NULL,
  `incident_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemaop`
--

CREATE TABLE `sistemaop` (
  `licencia` int(11) NOT NULL,
  `nombree` varchar(35) NOT NULL,
  `version` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `softw`
--

CREATE TABLE `softw` (
  `codigosf` int(11) NOT NULL,
  `apps` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `extension` varchar(40) NOT NULL,
  `especialidad` int(11) NOT NULL,
  `correo` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoinci`
--

CREATE TABLE `tipoinci` (
  `idinci` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `tecnico_cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `arealaboral` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`cedula`, `nombre`, `direccion`, `telefono`, `correo`, `arealaboral`) VALUES
(123, 'dasda', 'dasda', 131231, 'dasdasd', 'dadsdad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_maquina`
--

CREATE TABLE `users_maquina` (
  `users_cedula` int(11) NOT NULL,
  `equipo_idequipo` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `pass` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `callc`
--
ALTER TABLE `callc`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `conect`
--
ALTER TABLE `conect`
  ADD PRIMARY KEY (`direcip`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`);

--
-- Indices de la tabla `hardw`
--
ALTER TABLE `hardw`
  ADD PRIMARY KEY (`serialid`);

--
-- Indices de la tabla `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`ticket`),
  ADD KEY `fk_user` (`users_cedula`),
  ADD KEY `fk_inci` (`incident_ticket`);

--
-- Indices de la tabla `sistemaop`
--
ALTER TABLE `sistemaop`
  ADD PRIMARY KEY (`licencia`);

--
-- Indices de la tabla `softw`
--
ALTER TABLE `softw`
  ADD PRIMARY KEY (`codigosf`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `tipoinci`
--
ALTER TABLE `tipoinci`
  ADD PRIMARY KEY (`idinci`),
  ADD KEY `fk_tt` (`tecnico_cedula`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `users_maquina`
--
ALTER TABLE `users_maquina`
  ADD PRIMARY KEY (`users_cedula`,`equipo_idequipo`),
  ADD KEY `fk_us_users_equipo` (`equipo_idequipo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `fk_inci` FOREIGN KEY (`incident_ticket`) REFERENCES `incident` (`ticket`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`users_cedula`) REFERENCES `users` (`cedula`);

--
-- Filtros para la tabla `tipoinci`
--
ALTER TABLE `tipoinci`
  ADD CONSTRAINT `fk_tt` FOREIGN KEY (`tecnico_cedula`) REFERENCES `tecnico` (`cedula`);

--
-- Filtros para la tabla `users_maquina`
--
ALTER TABLE `users_maquina`
  ADD CONSTRAINT `fk_us_users_equipo` FOREIGN KEY (`equipo_idequipo`) REFERENCES `equipo` (`idequipo`),
  ADD CONSTRAINT `fkus_equipo_users` FOREIGN KEY (`users_cedula`) REFERENCES `users` (`cedula`);
--
-- Base de datos: `subir_foto`
--
CREATE DATABASE IF NOT EXISTS `subir_foto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `subir_foto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`codigo`, `nombre`, `foto`) VALUES
(1, 'juan', 'fotos/foto1.jpg'),
(2, 'erika', 'fotos/foto3.jpg'),
(3, 'arturo', 'fotos/foto2.jpg'),
(4, 'iuhiuh', 'fotos/god.jpg'),
(5, 'lapiz', 'css/img/editar.png'),
(6, 'mujer', 'Css/img/mujer.png'),
(7, 'asdasd', 'fotosmujer.png'),
(8, 'bb', 'fotos/niña.png'),
(9, 't7', 'fotos/logocris.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Base de datos: `tec`
--
CREATE DATABASE IF NOT EXISTS `tec` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tec`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `duracion` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `curp` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulacion`
--

CREATE TABLE `titulacion` (
  `NC` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_proyecto` varchar(25) NOT NULL,
  `estudiante_curp` int(5) NOT NULL,
  `carrera_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `tipo_usu` int(2) NOT NULL,
  `pass` int(2) NOT NULL,
  `username` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`tipo_usu`, `pass`, `username`) VALUES
(0, 123, 'yaidercc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`curp`);

--
-- Indices de la tabla `titulacion`
--
ALTER TABLE `titulacion`
  ADD PRIMARY KEY (`NC`),
  ADD KEY `fk_estu_curp` (`estudiante_curp`),
  ADD KEY `fk_care_id` (`carrera_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`tipo_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `curp` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `titulacion`
--
ALTER TABLE `titulacion`
  ADD CONSTRAINT `fk_care_id` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`),
  ADD CONSTRAINT `fk_estu_curp` FOREIGN KEY (`estudiante_curp`) REFERENCES `estudiante` (`curp`);
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Base de datos: `zapatos_cris`
--
CREATE DATABASE IF NOT EXISTS `zapatos_cris` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zapatos_cris`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `ID_GENERO` int(11) NOT NULL,
  `NOMBRE_GENERO` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(25) NOT NULL,
  `IMAGEN` longblob NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `ID_GENERO_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `ID_TIPO_USUARIO` int(11) NOT NULL,
  `NOMBRE_TIPO_USUARIO` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `IDENTIFICACION` varchar(20) NOT NULL,
  `PRIMER_NOMBRE` varchar(15) NOT NULL,
  `SEGUNDO_NOMBRE` varchar(15) DEFAULT NULL,
  `PRIMER_APELLIDO` varchar(15) NOT NULL,
  `SEGUNDO_APELLIDO` varchar(15) NOT NULL,
  `CORREO` varchar(45) DEFAULT NULL,
  `CLAVE` varchar(20) NOT NULL,
  `DIRECCION` varchar(30) NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `ID_TIPO_USUARIO_FK` int(11) NOT NULL,
  `ID_GENERO_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`ID_GENERO`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD KEY `ID_GENERO_FK` (`ID_GENERO_FK`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`ID_TIPO_USUARIO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `ID_TIPO_USUARIO_FK` (`ID_TIPO_USUARIO_FK`),
  ADD KEY `ID_GENERO_FK` (`ID_GENERO_FK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `ID_GENERO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `ID_TIPO_USUARIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ID_GENERO_FK`) REFERENCES `generos` (`ID_GENERO`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_TIPO_USUARIO_FK`) REFERENCES `tipo_usuarios` (`ID_TIPO_USUARIO`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ID_GENERO_FK`) REFERENCES `generos` (`ID_GENERO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
