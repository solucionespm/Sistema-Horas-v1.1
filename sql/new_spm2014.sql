-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2014 a las 20:00:48
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `new_spm2014`
--
CREATE DATABASE IF NOT EXISTS `new_spm2014` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `new_spm2014`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(80) NOT NULL,
  `status_clientes` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `cliente`, `status_clientes`) VALUES
(1, 'Activalores', 1),
(2, 'Agemar', 1),
(3, 'Alcance Integral', 1),
(4, 'Apamate Creativos', 1),
(5, 'Arquina Servicios', 1),
(6, 'Bearcom Venezuela', 1),
(7, 'Beka Sewing Machine', 1),
(8, 'BestMovil', 1),
(9, 'Biotech Laboratorios', 1),
(10, 'Cabcorp', 1),
(11, 'Central El Palmar', 1),
(12, 'Chepa Cookies', 1),
(13, 'CIVEA', 1),
(14, 'Coasi', 1),
(15, 'Colegio San Vicente de Paul', 1),
(16, 'Comercial Refrinox', 1),
(17, 'Consejo Bancario Nacional', 1),
(18, 'Corporacion Casa Facil', 1),
(19, 'Corporacion Lynqus', 1),
(20, 'Corporacion Moreca', 1),
(21, 'Corporacion SEA 2203', 1),
(22, 'DISFARCA', 1),
(23, 'Distribuidora Guaticobre', 1),
(24, 'Distribuidora PriceTech', 1),
(25, 'Distribuidora SARES', 1),
(26, 'Embutidos Arichuna', 1),
(27, 'EPS Rio Orinoco', 1),
(28, 'Estudios y Proyectos DITECH', 1),
(29, 'Factor RH', 1),
(30, 'Fermar Tours', 1),
(31, 'Fernand Garlin Sucesores', 1),
(32, 'Financiera de Fianzas', 1),
(33, 'Free Zone', 1),
(34, 'Global Rum', 1),
(35, 'GRS Electronics', 1),
(36, 'Grupo AM', 1),
(37, 'Grupo Meco', 1),
(38, 'Grupo Wallotech', 1),
(39, 'Gustavo Ramirez', 1),
(40, 'Herrenknecht Venezuela', 1),
(41, 'Humberto Cortes Zamora', 1),
(42, 'Industrial Refrimaq', 1),
(43, 'Industrias y Construcciones Rorro', 1),
(44, 'Infotech Consultores', 1),
(45, 'Internacional de Desarrollo', 1),
(46, 'Inversiones GLAM', 1),
(47, 'Inversiones Listo A Tiempo', 1),
(48, 'Inversiones Raices', 1),
(49, 'Inversiones Reisach AM Rheim Smith', 1),
(50, 'Inversiones Sponsel', 1),
(51, 'Inversiones Timing Chip', 1),
(52, 'Inversora Inkobe', 1),
(53, 'Investi', 1),
(54, 'ITS Venezuela', 1),
(55, 'Jesus Ochoa', 1),
(56, 'Julio Urbina', 1),
(57, 'Kalud 1111', 1),
(58, 'L&M Services 21', 1),
(59, 'Laboratorio Avilab', 1),
(60, 'Libreria Limesama', 1),
(61, 'LINKIT Ingenieria y Sistemas', 1),
(62, 'Luis Escobar', 1),
(63, 'M&M Global Trading', 1),
(64, 'Main Event Producciones', 1),
(65, 'Maite Candida', 1),
(66, 'Maximiza Casa de Bolsa', 1),
(67, 'Mila de La Roca Sociedad de Corretaje', 1),
(68, 'Mobiliario y Diseño Acrilart', 1),
(69, 'Moto Repuestos SBK', 1),
(70, 'Movil USA', 1),
(71, 'Movimiento Poderosas', 1),
(72, 'MTG Servicios', 1),
(73, 'Nextpro Comunicaciones y Producciones', 1),
(74, 'Perfilnet.com', 1),
(75, 'Posada Turistica Ecologia Tacata Arriba', 1),
(76, 'PRACA Pararrayos y Aterramientos', 1),
(77, 'Proyectos Margon Promargo', 1),
(78, 'Relojes Joyas y Accesorios A&C', 1),
(79, 'Rep. H. Ludeman', 1),
(80, 'Softech Sistemas', 1),
(81, 'Soluciones PM', 1),
(82, 'Soluciones Urbanas', 1),
(83, 'Somos Sonrisa 2009', 1),
(84, 'StatMark Group', 1),
(85, 'Tecnicontrol Electronics TEC', 1),
(86, 'Tecniparques 192', 1),
(87, 'Tecnipiscinas', 1),
(88, 'Trino Lugo', 1),
(89, 'Unidad Oftalmologica de Caracas', 1),
(90, 'Uniteca', 1),
(91, 'V&M Group Enterprises', 1),
(92, 'Vision de Inversion HG', 1),
(93, 'Zaki Sewing Machine', 1),
(94, 'Zinnia Martinez', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas`
--

CREATE TABLE IF NOT EXISTS `horas` (
  `id_horas` int(11) NOT NULL AUTO_INCREMENT,
  `id_tareas` int(11) NOT NULL,
  `id_subtareas` int(11) NOT NULL,
  `id_clientes` int(11) NOT NULL,
  `id_proyectos` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `fecha_horas` date NOT NULL,
  `inicio_horas` time NOT NULL,
  `fin_horas` time NOT NULL,
  `detalle_horas` text NOT NULL,
  `esprepago_horas` int(1) NOT NULL,
  `status_horas` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_horas`),
  KEY `id_tareas` (`id_tareas`,`id_subtareas`,`id_clientes`,`id_proyectos`,`id_usuarios`),
  KEY `id_subtareas` (`id_subtareas`),
  KEY `id_clientes` (`id_clientes`),
  KEY `id_proyectos` (`id_proyectos`),
  KEY `id_usuarios` (`id_usuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=307 ;

--
-- Volcado de datos para la tabla `horas`
--

INSERT INTO `horas` (`id_horas`, `id_tareas`, `id_subtareas`, `id_clientes`, `id_proyectos`, `id_usuarios`, `fecha_horas`, `inicio_horas`, `fin_horas`, `detalle_horas`, `esprepago_horas`, `status_horas`) VALUES
(1, 4, 70, 2, 2, 1, '2003-07-01', '14:00:00', '16:30:00', 'Dudas sobre alcances para propuesta de modificación', 0, 1),
(2, 2, 56, 2, 2, 1, '2003-07-22', '17:00:00', '18:00:00', 'Revisión de problema relacionado con el status de los barcos y el port log', 1, 1),
(3, 4, 70, 2, 2, 1, '2003-07-28', '14:00:00', '15:30:00', 'Reuinión concretación de propuestas', 0, 1),
(4, 2, 76, 2, 2, 1, '2003-07-28', '16:00:00', '16:30:00', 'Cambio de password en servidor BD, modificación de connstring, subir \r\n	páginas, prueba', 1, 1),
(5, 2, 56, 2, 2, 1, '2003-08-05', '11:00:00', '11:30:00', 'Revisión de problemas de servicio repetido en orden de compra', 1, 1),
(6, 2, 56, 2, 2, 1, '2003-08-05', '13:30:00', '14:30:00', 'Revisión de problemas de duplicación de linea. Se descubrió que el \r\n	problema es de diseño de apliacaión actual y se deja así hasta el rediseño', 1, 1),
(7, 7, 64, 2, 2, 19, '2003-08-07', '10:30:00', '12:00:00', 'Modificación del logo Modificar contenido del: -Home -Services -Our \r\n	People Eliminar la sección Communications', 1, 1),
(8, 7, 64, 2, 2, 1, '2003-08-12', '11:00:00', '11:30:00', 'Subir archivos del site para esperar aprobación', 1, 1),
(9, 4, 70, 2, 2, 1, '2003-08-21', '09:30:00', '12:00:00', 'Reunión Levantamiento de información', 0, 1),
(10, 4, 70, 2, 2, 1, '2003-08-26', '14:00:00', '18:00:00', 'Reunión de levantamiento de información del proceso de negocio', 0, 1),
(11, 1, 33, 2, 2, 1, '2003-08-28', '09:00:00', '12:00:00', 'Levantamiento de información acerca de procesos y seguridad', 0, 1),
(12, 1, 33, 2, 2, 1, '2003-09-03', '14:00:00', '17:00:00', 'Revisión primer documento', 0, 1),
(13, 8, 65, 2, 2, 1, '2003-09-08', '16:00:00', '18:30:00', 'Investigación de modelo de documento de sistemas/procesos', 0, 1),
(14, 4, 69, 2, 2, 1, '2003-09-09', '08:30:00', '12:30:00', 'Modificación de flujograma. Cambio de la documentación a nuevo modelo', 0, 1),
(15, 4, 69, 2, 2, 1, '2003-09-10', '14:00:00', '15:00:00', 'Revisión de la documentación', 0, 1),
(16, 1, 33, 2, 2, 1, '2003-09-11', '14:00:00', '17:00:00', 'Reunión de control del proyecto', 0, 1),
(17, 1, 38, 2, 2, 1, '2003-09-15', '17:00:00', '18:00:00', 'Inclusión de estado inactivo en la BD. Modificación de proceso de login \r\n	para prohibir la entrada de usuarios inactivos. Modificación de plantilla para\r\n	la modificar estado de los usuarios', 0, 1),
(18, 1, 36, 2, 2, 1, '2003-09-16', '08:30:00', '10:30:00', 'Diseño de formulario de entrada del port log', 0, 1),
(19, 2, 61, 2, 2, 1, '2003-09-16', '11:30:00', '12:00:00', 'Revisión de problemas con ordenes de compra por cambios en un principal', 1, 1),
(20, 4, 69, 2, 2, 1, '2003-09-17', '15:30:00', '18:00:00', 'Modificación de la documentación de levantamiento de información', 0, 1),
(21, 4, 69, 2, 2, 1, '2003-09-18', '10:00:00', '12:00:00', 'Modificación de la documentación de levantamiento de información', 0, 1),
(22, 4, 70, 2, 2, 1, '2003-09-18', '14:30:00', '18:00:00', 'Reunión de levantamiento de información', 0, 1),
(23, 1, 33, 2, 2, 1, '2003-09-25', '14:30:00', '15:30:00', 'Revisión de propuestas', 0, 1),
(24, 1, 34, 2, 2, 1, '2003-10-01', '15:30:00', '17:00:00', 'Modifcación en recordar password de Agemar', 0, 1),
(25, 1, 33, 2, 2, 1, '2003-10-16', '08:00:00', '11:00:00', 'Reunión de discusión de pendientes', 0, 1),
(26, 4, 69, 2, 2, 32, '2003-10-21', '13:30:00', '14:30:00', 'Se modifico un formato de portlog (Ayuda a\r\n	Eduardo).', 0, 1),
(27, 1, 33, 2, 2, 1, '2003-10-21', '13:30:00', '14:00:00', 'Limpieza de datos para port log', 0, 1),
(28, 1, 33, 2, 2, 1, '2003-10-22', '08:30:00', '09:30:00', 'Limpieza de datos para port log', 0, 1),
(29, 1, 72, 2, 2, 1, '2003-10-23', '09:00:00', '12:30:00', 'Desarrollo de Port Log dinámico', 0, 1),
(30, 1, 72, 2, 2, 1, '2003-10-23', '13:30:00', '14:00:00', 'Desarrollo de Port Log dinámico', 0, 1),
(31, 1, 72, 2, 2, 1, '2003-10-23', '15:00:00', '18:30:00', 'Desarrollo de Port Log dinámico', 0, 1),
(32, 1, 72, 2, 2, 1, '2003-10-24', '08:00:00', '12:30:00', 'Mejoras en el port log', 0, 1),
(33, 1, 72, 2, 2, 1, '2003-10-24', '14:00:00', '16:00:00', 'Mejoras en el port log', 0, 1),
(34, 1, 72, 2, 2, 1, '2003-10-27', '08:30:00', '09:30:00', 'Mejoras en el port log', 0, 1),
(35, 1, 72, 2, 2, 1, '2003-10-27', '11:00:00', '12:30:00', 'Mejoras en el port log', 0, 1),
(36, 1, 72, 2, 2, 1, '2003-10-27', '13:30:00', '14:30:00', 'Revisión de problemas de download,\r\n	y de validación de fecha en la factura', 0, 1),
(37, 1, 72, 2, 2, 1, '2003-10-27', '15:00:00', '17:00:00', 'Revisión de problemas con envío de mensajes desde la\r\n	pantalla que genera el estimado', 1, 1),
(38, 1, 72, 2, 2, 1, '2003-10-27', '17:00:00', '18:00:00', 'Investigación y desarrollo para ocultar combo boxes\r\n	vacíos del port log', 0, 1),
(39, 1, 34, 2, 2, 1, '2003-10-29', '08:30:00', '11:00:00', 'Modificación de port log.', 0, 1),
(40, 1, 34, 2, 2, 1, '2003-10-29', '13:30:00', '14:30:00', 'Modificación de port log', 0, 1),
(41, 1, 39, 2, 2, 1, '2003-10-30', '09:30:00', '10:30:00', 'Montar sistema en el laptop,\r\n	prueba', 0, 1),
(42, 1, 39, 2, 2, 1, '2003-10-30', '11:30:00', '12:00:00', 'Montar sistema en el laptop,\r\n	prueba', 0, 1),
(43, 4, 51, 2, 2, 1, '2003-10-30', '14:00:00', '15:30:00', 'Impresión documentos para reunión', 0, 1),
(44, 1, 33, 2, 2, 1, '2003-10-30', '16:00:00', '17:30:00', 'Mostrar avances,\r\n	levantamiento de información de port log', 0, 1),
(45, 1, 34, 2, 2, 1, '2003-10-31', '15:00:00', '17:00:00', 'Modificación del envío de estimados para aceptar BCC\r\n	en los correos.', 1, 1),
(46, 2, 56, 2, 2, 1, '2003-11-03', '14:00:00', '15:00:00', 'Revisión de problemas de envío de ordenes vía\r\n	email...Realización de transaferencia de ordenes', 0, 1),
(47, 1, 33, 2, 2, 1, '2003-11-03', '16:30:00', '17:00:00', 'Revisión de nuevos requerimientos', 0, 1),
(48, 2, 56, 2, 2, 1, '2003-11-04', '11:30:00', '12:00:00', 'Revisión de problemas de envío de estimados vía\r\n	email...', 0, 1),
(49, 1, 34, 2, 2, 1, '2003-11-05', '15:00:00', '15:30:00', 'Modificación en sistema de envío a SUN para\r\n	servicios,\r\n	para que pudiesen bajar todos los datos de los estimados desde la página \r\n	Web', 1, 1),
(50, 2, 61, 2, 2, 1, '2003-11-05', '16:30:00', '17:30:00', 'Recuperación de usuarios desde backup', 1, 1),
(51, 2, 56, 2, 2, 1, '2003-11-06', '11:00:00', '11:30:00', 'Actualización de ordenes. Revisión porblema de\r\n	creación de usuarios debido a restores', 0, 1),
(52, 2, 76, 2, 2, 1, '2003-11-07', '09:00:00', '10:00:00', 'Revisión de problemas con ordenes', 0, 1),
(53, 1, 33, 2, 2, 1, '2003-11-13', '09:00:00', '12:00:00', 'Reunión revisión de avance,\r\n	bocetos de diseño', 0, 1),
(54, 8, 67, 2, 2, 1, '2003-11-14', '13:30:00', '14:00:00', 'Revisión de sistema Merlin', 0, 1),
(55, 1, 39, 2, 2, 1, '2003-11-20', '11:00:00', '12:00:00', 'Creación de sistema demo en\r\n	demo.interamerican.com.ve', 0, 1),
(56, 1, 33, 2, 2, 1, '2003-11-20', '14:30:00', '15:30:00', 'Levantamiento de información del port log', 0, 1),
(57, 2, 56, 2, 2, 1, '2003-11-24', '11:00:00', '12:00:00', 'Revisión de problemas de ordenes', 0, 1),
(58, 2, 56, 2, 2, 1, '2003-12-04', '16:00:00', '18:30:00', 'Revisión de problemas con recepción de estimados\r\n	desde la aplicación', 0, 1),
(59, 2, 56, 2, 2, 1, '2003-12-08', '11:00:00', '12:00:00', 'Revisión de aplicaciones por problemas de 2\r\n	clientes', 1, 1),
(60, 2, 56, 2, 2, 1, '2003-12-08', '13:30:00', '14:30:00', 'Revisión de aplicaciones por problemas de 2\r\n	clientes', 1, 1),
(61, 1, 34, 2, 2, 1, '2003-12-09', '08:30:00', '09:30:00', 'Revision de aspectos de seguridad', 0, 1),
(62, 1, 34, 2, 2, 1, '2003-12-09', '11:30:00', '12:00:00', 'Revision de aspectos de seguridad', 0, 1),
(63, 5, 80, 2, 2, 35, '2003-12-06', '13:00:00', '15:30:00', 'Inducción,\r\n	revisión y requerimientos de la página Agemar.net ', 0, 1),
(64, 1, 72, 2, 2, 35, '2003-12-08', '08:00:00', '12:00:00', 'Inicio de la programación para cumplir con los\r\n	requerimientos. Programación para la validación de los password que contengan\r\n	mayor o igual a 6 caracteres y que contenga números y letras,\r\n	tanto en las secciones de cambio de contraseña como en la sección de \r\n	Ingresar usuarios ', 0, 1),
(65, 1, 72, 2, 2, 35, '2003-12-08', '13:00:00', '17:00:00', 'Continuación de la programación en Agemar', 0, 1),
(66, 1, 72, 2, 2, 35, '2003-12-09', '08:00:00', '12:00:00', 'Programación para corregir la seguridad de la\r\n	página,\r\n	es decir programar para evitar que puedan accesar a la página colocando la \r\n	dirección de URL en el browser. ', 0, 1),
(67, 1, 72, 2, 2, 35, '2003-12-09', '13:00:00', '17:00:00', 'Continuación de la programación en Agemar', 0, 1),
(68, 8, 81, 2, 2, 35, '2003-12-10', '08:00:00', '10:00:00', 'Revisión y chequeo de las modificaciones y subir las\r\n	páginas al servidor ', 0, 1),
(69, 1, 72, 2, 2, 35, '2003-12-11', '08:00:00', '12:00:00', 'Programación de los requerimientos solicitados por\r\n	Agemar: Colocar opción para buscar por usuarios activos o inactivos,\r\n	además de que el usuario administrador pueda visualizar los passwords de \r\n	los usuarios y que lo pueda modificar,\r\n	los usuarios pueden cambiar su contraseña y el sistema detecta cuando la \r\n	contraseña ha caducado,\r\n	debe volverse a ingresar su contraseña. ', 0, 1),
(70, 1, 72, 2, 2, 35, '2003-12-11', '13:00:00', '16:00:00', 'Continuación de la programación de Agemar', 0, 1),
(71, 8, 81, 2, 2, 35, '2003-12-11', '16:00:00', '17:00:00', 'Revisión y chequeo de la programación con respecto a\r\n	los requerimientos solicitados ', 0, 1),
(72, 1, 33, 2, 2, 1, '2003-12-11', '08:30:00', '09:00:00', 'Reunión con Wendy para asignación de trabajos', 0, 1),
(73, 1, 34, 2, 2, 35, '2003-12-12', '08:30:00', '11:00:00', 'Modificación para cambiar la contraseña del usuario\r\n	que ha caducado al momento de ingresar,\r\n	además de modificar las búsquedas cuando quiere listar usuarios activos o \r\n	inactivos', 0, 1),
(74, 8, 81, 2, 2, 35, '2003-12-15', '08:00:00', '10:00:00', 'Probar los cambios que se han hecho hasta ahora de\r\n	Agemar en el servidor demo', 0, 1),
(75, 8, 81, 2, 2, 35, '2003-12-15', '10:30:00', '12:00:00', 'Continuación con la evaluación de Agemar', 0, 1),
(76, 8, 74, 2, 2, 35, '2003-12-15', '13:00:00', '17:00:00', 'Continuación con la evaluación del sistema.', 0, 1),
(77, 1, 34, 2, 2, 35, '2003-12-16', '08:00:00', '12:00:00', 'Modificación del desarrollo del backend en Agemar en\r\n	la sección de Servicios con respecto a que si un usuario pertenece a una\r\n	sucursal no puede ingresar conceptos que finalicen su código en 80,\r\n	81,\r\n	.....89 a los servicios que esta ingresando o editando. De la revisión \r\n	general a todo el backend se corrigieron en ciertas secciones algunos errores\r\n	que tenían. Dichas a páginas fueron la sección de Conceptos y la sección de\r\n	Movimientos. ', 0, 1),
(78, 1, 34, 2, 2, 35, '2003-12-16', '13:00:00', '17:00:00', 'Continuación de las actividades de Agemar y al final\r\n	se subio las páginas modificadas al servidor ', 0, 1),
(79, 1, 33, 2, 2, 35, '2003-12-17', '08:00:00', '12:00:00', 'Continuación de la revisión del backend de Agemar y\r\n	anotaciones que se deberían de tomar en cuenta para modificar como mala\r\n	estructuración al ingresar zonas,\r\n	ya que debería de estar asociado a un país,\r\n	hay secciones que tienen palabras en español. ', 0, 1),
(80, 1, 34, 2, 2, 35, '2003-12-17', '13:00:00', '17:00:00', 'Modificación en la sección de Servicios para que\r\n	muestre todos los datos del buque seleccionado para la acción de ingresar o\r\n	modificar el Servicio. ', 0, 1),
(81, 1, 34, 2, 2, 35, '2003-12-18', '08:00:00', '12:00:00', 'Subir las páginas modificadas al servidor y hacer\r\n	las pruebas arriba en el mismo. Además de modificar la sección de Vessel\r\n	(Buques) agregando un campo adicional en la tabla y modificar los formularios\r\n	para ingresar y modificar el nuevo campo. Además se corrigieron otros detalles\r\n	en la sección de Servicios con respecto a los formatos de fecha que se ingresan\r\n	en dicha sección. ', 0, 1),
(82, 2, 76, 2, 2, 1, '2003-12-23', '11:00:00', '12:00:00', 'Cambio de programación para poner los servicios en\r\n	el año 2004', 0, 1),
(83, 4, 51, 2, 2, 1, '2004-01-07', '13:30:00', '16:00:00', 'Elaboración documento de avance', 0, 1),
(84, 4, 69, 2, 2, 1, '2004-01-12', '08:00:00', '09:00:00', 'Modificación documento de avance', 0, 1),
(85, 4, 69, 2, 2, 1, '2004-01-12', '17:00:00', '19:00:00', 'Documento de avance', 0, 1),
(86, 4, 69, 2, 2, 1, '2004-01-13', '08:00:00', '09:00:00', 'Modificación de la documentación de avance', 0, 1),
(87, 1, 33, 2, 2, 1, '2004-01-13', '15:00:00', '17:00:00', 'Reunión de Avance', 0, 1),
(88, 1, 33, 2, 2, 1, '2004-01-14', '09:00:00', '12:30:00', 'Levantamiento de información del port log', 0, 1),
(89, 4, 51, 2, 2, 1, '2004-01-16', '08:00:00', '10:00:00', 'Story Boards de port log', 0, 1),
(90, 4, 69, 2, 2, 1, '2004-01-20', '09:00:00', '10:00:00', 'Revisión,\r\n	impresión de los documentos para la reunión', 0, 1),
(91, 1, 34, 2, 2, 1, '2004-01-20', '10:00:00', '11:00:00', 'Revisión de archivo de bajar facturas para la\r\n	colocación del 50+ en lugar del 20+ para procesamiento automático', 1, 1),
(92, 4, 70, 2, 2, 1, '2004-01-20', '15:00:00', '16:00:00', 'Reunión de avance y levantamiento de información\r\n	para nominación', 0, 1),
(93, 2, 56, 2, 2, 1, '2004-01-22', '10:00:00', '10:30:00', 'Revisión de problema para desplegar estimado.\r\n	Verificación de problemas de data. Solución del mismo', 1, 1),
(94, 1, 72, 2, 2, 35, '2004-01-26', '10:00:00', '12:00:00', 'Ingreso de un campo en la sección de Servicios en el\r\n	formulario que es el nombre del capitán y agregar ese campo en la tabla y hacer\r\n	todas las modificaciones para las páginas que debe mostrar el nombre del\r\n	capitán de igual manera en la sección de Vessel se agregó un campo llamado call\r\n	sing y se hizo de igual manera en la sección de Servicios ', 1, 1),
(95, 4, 70, 2, 2, 1, '2004-01-28', '16:00:00', '18:00:00', 'Reunión revisión de story boards. Modificación de\r\n	los mismos', 0, 1),
(96, 1, 33, 2, 2, 1, '2004-02-03', '13:30:00', '17:00:00', 'Revisión de los avances', 0, 1),
(97, 1, 33, 2, 2, 35, '2004-02-03', '08:00:00', '09:00:00', 'Revisión del código de Agemar,\r\n	para iniciar con los requerimientos solicitados ', 0, 1),
(98, 1, 33, 2, 2, 35, '2004-02-03', '10:30:00', '12:00:00', 'Continuación de la revisión de los códigos de Agemar\r\n	para realizar los requerimientos. ', 0, 1),
(99, 1, 34, 2, 2, 35, '2004-02-04', '08:00:00', '10:30:00', 'Revisión y modificación en el backend de Agemar\r\n	específicamente en las secciones donde se visualiza el estimado del servicio\r\n	cuando se envía el correo,\r\n	en la sección de Ordenes haciendo validaciones si el cliente es sucursal o \r\n	no. Además de filtrar una serie de condiciones dependiendo del listado que\r\n	Agemar entrego a Eduardo.', 1, 1),
(100, 1, 34, 2, 2, 35, '2004-02-04', '13:00:00', '15:00:00', 'Continuación con las modificaciones de Agemar.', 1, 1),
(101, 1, 34, 2, 2, 35, '2004-02-05', '08:00:00', '10:30:00', 'Modificación en la sección de Ordenes,\r\n	agregando en el formulario donde muestra la data,\r\n	otros campos como el IVA,\r\n	el monto neto y el monto total de la Orden. Esto todavía esta en proceso ya \r\n	que no se ha logrado entender la lógica de la programación en esta sección.', 0, 1),
(102, 1, 72, 2, 2, 1, '2004-02-06', '10:00:00', '12:00:00', 'Programación de opción de archivo de estimados\r\n	totalizado para el agente general', 1, 1),
(103, 1, 72, 2, 2, 1, '2004-02-06', '13:30:00', '14:30:00', 'Programación de opción de archivo de estimados\r\n	totalizado para el agente general', 1, 1),
(104, 1, 72, 2, 2, 1, '2004-02-09', '11:00:00', '12:30:00', 'Programación de opción de archivo de estimados\r\n	totalizado para el agente general', 1, 1),
(105, 1, 72, 2, 2, 1, '2004-02-09', '13:30:00', '14:30:00', 'Programación de opción de archivo de estimados\r\n	totalizado para el agente general', 1, 1),
(106, 1, 72, 2, 2, 1, '2004-02-09', '16:30:00', '17:30:00', 'Programación de opción de archivo de estimados\r\n	totalizado para el agente general', 1, 1),
(107, 2, 56, 2, 2, 1, '2004-02-12', '15:00:00', '16:00:00', 'Revisión de problemas en el servicio 040192 debido a\r\n	problemas con la verificación de nombres con apostrofes en la aplicación. Se\r\n	corrigió el problema haciendo la verificación en la página', 1, 1),
(108, 4, 51, 2, 2, 1, '2004-02-13', '19:00:00', '20:00:00', 'Elaboración de documentaciónd e avance y pendientes\r\n	de Agemar', 0, 1),
(109, 1, 72, 2, 2, 1, '2004-02-16', '13:30:00', '16:00:00', 'Programación y pruebas para envío de archivo\r\n	sumarizado de agente general', 1, 1),
(110, 1, 72, 2, 2, 1, '2004-02-17', '16:30:00', '18:00:00', 'Programación y pruebas para envío de archivo\r\n	sumarizado de agente general', 1, 1),
(111, 8, 74, 2, 2, 35, '2004-02-16', '09:30:00', '10:00:00', 'Revisión del documento con respecto al cronograma de\r\n	actividades. ', 0, 1),
(112, 1, 72, 2, 2, 35, '2004-02-16', '10:00:00', '11:00:00', 'Continuación del proceso de desarrollo de mostrar el\r\n	precio del iva,\r\n	precio neto y monto total por separado en la sección de Ordenes. ', 1, 1),
(113, 1, 34, 2, 2, 35, '2004-02-19', '08:30:00', '12:30:00', 'Interpretar la codificación y entender la lógica que\r\n	se presenta al realizar una orden para lograr realizar el requerimiento\r\n	solicitado como mostrar el monto del iva,\r\n	el monto neto y el total por separado.', 0, 1),
(114, 1, 34, 2, 2, 35, '2004-02-19', '13:00:00', '14:30:00', 'Continuación de la sección de ordenes.', 1, 1),
(115, 1, 34, 2, 2, 35, '2004-02-20', '09:00:00', '10:30:00', 'Culminación de la sección de ordenes para mostrar el\r\n	iva,\r\n	el monto neto y el total por separado.', 1, 1),
(116, 1, 34, 2, 2, 35, '2004-02-20', '15:00:00', '17:00:00', 'Continuación con la culminación de la sección de\r\n	ordenes', 1, 1),
(117, 1, 35, 2, 2, 35, '2004-02-25', '15:00:00', '17:00:00', 'Programación en la sección de Servicios,\r\n	al momento de cancelar el servicio. ', 1, 1),
(118, 1, 72, 2, 2, 35, '2004-02-26', '08:30:00', '09:30:00', 'En sección de Servicios,\r\n	se debe eliminar o modificar el principal,\r\n	además de lograr enviar otros archivos. ', 1, 1),
(119, 1, 72, 2, 2, 35, '2004-02-26', '11:30:00', '12:30:00', 'Continuación de la programación en la sección de\r\n	servicios.', 1, 1),
(120, 1, 72, 2, 2, 35, '2004-02-26', '13:00:00', '15:00:00', 'Continuación de la programación en la sección de\r\n	servicios.', 1, 1),
(121, 1, 72, 2, 2, 35, '2004-02-27', '09:00:00', '11:00:00', 'Continuación de la programación en la sección de\r\n	servicios.', 1, 1),
(122, 1, 72, 2, 2, 35, '2004-02-27', '12:30:00', '15:00:00', 'Culminación de la programación en la sección de\r\n	servicios.', 1, 1),
(123, 1, 34, 2, 2, 1, '2004-02-20', '15:00:00', '16:00:00', 'Apoyo a Wendy con desarrollo de módulo de\r\n	visualización del IVA', 0, 1),
(124, 1, 72, 2, 2, 35, '2004-03-01', '08:30:00', '09:30:00', 'Culminación de la sección de Cancelación de\r\n	Servicios en el back-ends de Agemar ', 1, 1),
(125, 1, 72, 2, 2, 35, '2004-03-03', '13:00:00', '14:30:00', 'Filtrar en la sección de Emisión de Ordenes de\r\n	Compra que no se pueda emitir conceptos que terminen en 80 y filtrar que\r\n	siempre se seleccione algún proveedor. ', 1, 1),
(126, 1, 33, 2, 2, 35, '2004-03-04', '08:00:00', '10:00:00', 'Revisar el código para entender el proceso de cómo\r\n	es el cálculo al momento de emitir una orden con respecto a un servicio\r\n	seleccionado', 0, 1),
(127, 1, 72, 2, 2, 35, '2004-03-04', '10:00:00', '12:00:00', 'Validación en la sección de emitir ordenes de compra\r\n	con respecto a la suma general de todas las ordenes de compra para ese\r\n	servicio.', 1, 1),
(128, 7, 63, 2, 2, 35, '2004-03-05', '08:30:00', '10:00:00', 'Creación de los story boards.', 0, 1),
(129, 1, 72, 2, 2, 35, '2004-03-05', '10:00:00', '12:00:00', 'Continuación de la validación de la emisión de\r\n	órdenes de compra.', 1, 1),
(130, 2, 76, 2, 2, 1, '2004-03-11', '10:00:00', '12:30:00', 'Revisión de problemas con tabla de conceptos.\r\n	Revisión de programación', 0, 1),
(131, 2, 76, 2, 2, 1, '2004-03-11', '13:30:00', '18:00:00', 'Revisión de problemas con tabla de conceptos.\r\n	Revisión de programación', 0, 1),
(132, 2, 76, 2, 2, 1, '2004-03-12', '08:00:00', '12:30:00', 'Revisión de problemas con tabla de conceptos.\r\n	Revisión de programación. Pruebas con formula', 0, 1),
(133, 1, 72, 2, 2, 35, '2004-03-08', '14:00:00', '16:00:00', 'Continuación de la programación en la sección de\r\n	órdenes,\r\n	validando que no se pueda ingresar otra orden si es mayor al estimado. ', 0, 1),
(134, 1, 72, 2, 2, 35, '2004-03-09', '13:00:00', '15:00:00', 'Continuación y culminación para filtrar la\r\n	validación de órdenes de servicios con respecto al estimado. ', 1, 1),
(135, 8, 67, 2, 2, 35, '2004-03-10', '08:00:00', '09:00:00', 'Revisión del documento actualizado de Agemar con lo\r\n	que se ha realizado hasta ahora. ', 0, 1),
(136, 1, 72, 2, 2, 35, '2004-03-10', '09:00:00', '12:00:00', 'Culminación de filtrar la validación de órdenes de\r\n	servicios con respecto al estimado. ', 0, 1),
(137, 1, 72, 2, 2, 35, '2004-03-10', '13:00:00', '14:30:00', 'Continuación de la culminación de filtrar la\r\n	validación de órdenes de servicios con respecto al estimado. ', 1, 1),
(138, 1, 72, 2, 2, 35, '2004-03-11', '10:00:00', '13:00:00', 'Inicio en el nuevo requerimiento solicitado como es\r\n	eliminar una orden de compra enviada a SUN,\r\n	agregar un nuevo campo en la tabla de ServicOrden,\r\n	además de realizar un download en archivo de excel de esa información.', 1, 1),
(139, 1, 34, 2, 2, 35, '2004-03-12', '08:00:00', '12:00:00', 'Ayudar a Eduardo a indagar el error que estaba\r\n	arrojando en el sistema.', 0, 1),
(140, 1, 72, 2, 2, 35, '2004-03-12', '14:00:00', '16:00:00', 'Continuación de la solicitud eliminar una orden de\r\n	compra enviada a SUN.', 1, 1),
(141, 1, 72, 2, 2, 35, '2004-03-15', '10:30:00', '12:00:00', 'Programar en la sección de servicios que la\r\n	selección del principal que se envía a SUN debe filtrarse sino tiene los campos\r\n	de país y de dirección. Además de agregar un campo adicional en la tabla de\r\n	Servic para que ingresen los comentarios para el Dpto. de Rendición de Cuentas.\r\n	', 1, 1),
(142, 8, 81, 2, 2, 35, '2004-03-15', '16:00:00', '17:00:00', 'Subir los archivos al servidor demo y al servidor de\r\n	arriba de Agemar. ', 0, 1),
(143, 1, 72, 2, 2, 35, '2004-03-16', '08:00:00', '10:00:00', 'Programar en la sección de Facturas una nueva opción\r\n	Pago de Factura,\r\n	se creo una nueva tabla y se desarrollo el respectivo código para ingresar \r\n	y modificar la data. ', 1, 1),
(144, 1, 72, 2, 2, 35, '2004-03-16', '11:00:00', '12:00:00', 'Continuación con la actividad de la nueva opción\r\n	Pago de Factura.', 1, 1),
(145, 1, 72, 2, 2, 35, '2004-03-16', '13:00:00', '16:30:00', 'Continuación con la actividad de Agemar. ', 0, 1),
(146, 1, 72, 2, 2, 35, '2004-03-17', '08:00:00', '10:00:00', 'Programacion de dos opciones en la sección de\r\n	Servicios: Cerrar Servicio y Abrir Servicio,\r\n	además de filtrar en las secciones de Ordenes y facturas que si los \r\n	servicios estan cerrados no pueden hacer una orden de compra ni una factura. ', 1, 1),
(147, 8, 81, 2, 2, 35, '2004-03-18', '08:00:00', '09:00:00', 'Hacer las pruebas en el servidor demo de Agemar. ', 0, 1),
(148, 2, 76, 2, 2, 1, '2004-03-15', '08:30:00', '09:00:00', 'Problemas con cambios subidos', 0, 1),
(149, 2, 60, 2, 2, 1, '2004-03-15', '10:00:00', '10:30:00', 'Busqueda de password de usuario NABRICEÑO', 0, 1),
(150, 1, 33, 2, 2, 1, '2004-03-18', '14:00:00', '16:00:00', 'Reunión de avances y problemas', 0, 1),
(151, 8, 74, 2, 2, 35, '2004-03-22', '16:00:00', '17:00:00', 'Subir los archivos al servidor demo de Agemar y\r\n	crear las tablas y campos correspondiente. Además de elaborar dos botones para\r\n	las nuevas opciones que tienen la sección de Servicios. ', 0, 1),
(152, 8, 81, 2, 2, 35, '2004-03-23', '08:00:00', '09:00:00', 'Hacer las pruebas en el servidor demo de Agemar ', 0, 1),
(153, 1, 37, 2, 2, 35, '2004-03-23', '16:00:00', '17:00:00', 'Modificar la data de la base de datos de agemar_new.\r\n	(Se hizo un backup pero con muy pocos registros) ', 0, 1),
(154, 1, 37, 2, 2, 35, '2004-03-24', '08:00:00', '09:00:00', 'Culminación de la base de datos de agemar_new ', 0, 1),
(155, 8, 67, 2, 2, 35, '2004-03-24', '16:00:00', '17:00:00', 'Revisión general de la base de datos,\r\n	del sistema y del código del sistema agemar,\r\n	para la redacción del documento. ', 0, 1),
(156, 4, 51, 2, 2, 35, '2004-03-25', '08:00:00', '09:00:00', 'Redacción del documento de las observación del\r\n	sistema de Agemar.', 0, 1),
(157, 8, 74, 2, 2, 35, '2004-03-25', '15:30:00', '17:00:00', 'Comprensión del requerimiento con respecto al port\r\n	log que esta solicitando Agemar en la sección de Servicios. Además del\r\n	código.', 0, 1),
(158, 8, 74, 2, 2, 35, '2004-03-26', '08:00:00', '09:00:00', 'Explicación de Eduardo con respecto al port log', 0, 1),
(159, 1, 72, 2, 2, 35, '2004-03-26', '09:00:00', '11:00:00', 'Desarrollo del mantenimiento de la sección de\r\n	movimientos.', 1, 1),
(160, 1, 72, 2, 2, 35, '2004-03-26', '13:00:00', '14:00:00', 'Continuación de la actividad mantenimiento de la\r\n	sección de movimientos.', 1, 1),
(161, 1, 72, 2, 2, 35, '2004-03-29', '13:00:00', '15:00:00', 'Continuación con el mantenimiento de la sección de\r\n	movimientos en Agemar. ', 1, 1),
(162, 1, 72, 2, 2, 35, '2004-03-31', '09:00:00', '11:00:00', 'Culminación del mantenimiento de la sección de\r\n	movimiento y revisión del mismo. ', 1, 1),
(163, 1, 38, 2, 2, 35, '2004-03-31', '13:30:00', '14:30:00', 'Hacer la integración de la data de las tablas de\r\n	portlog a la tabla de servicmovimn. ', 1, 1),
(164, 1, 34, 2, 2, 35, '2004-04-02', '08:00:00', '12:00:00', 'Culminación y revisión de la sección de Movimientos\r\n	en Agemar. ', 1, 1),
(165, 2, 61, 2, 2, 35, '2004-04-02', '13:00:00', '13:30:00', 'Bajar del servidor el directorio backdoor\r\n	actualizado,\r\n	para luego enviarselo a la gente de Esystem. ', 1, 1),
(166, 1, 72, 2, 2, 35, '2004-04-06', '13:00:00', '14:00:00', 'Programación de la sección de Mensajes de envío del\r\n	estimado ', 1, 1),
(167, 1, 33, 2, 2, 1, '2004-04-14', '15:00:00', '16:30:00', 'Reunión de revisión de avances con Yanina Silva', 0, 1),
(168, 1, 72, 2, 2, 35, '2004-04-12', '14:30:00', '17:00:00', 'Continuación del inicio de la programación para\r\n	realizar el mantenimiento de los mensajes que se pueden seleccionar en el\r\n	momento de enviar el estimado. ', 1, 1),
(169, 2, 56, 2, 2, 35, '2004-04-16', '13:00:00', '14:00:00', 'Soporte de Agemar,\r\n	debido a que un usuario olvidó su contraseña. ', 1, 1),
(170, 1, 72, 2, 2, 1, '2004-04-20', '08:00:00', '10:00:00', 'Corrección problemas en demo', 0, 1),
(171, 2, 76, 2, 2, 1, '2004-04-21', '10:00:00', '11:00:00', 'Revisión de funcionamiento de página de envío de\r\n	estimados para el caso de estimados consolidados. Se revisó el código y se\r\n	descubrió que esto no era posible.', 1, 1),
(172, 1, 33, 2, 2, 1, '2004-04-27', '08:00:00', '11:00:00', 'Reunión de Avance con el cliente', 0, 1),
(173, 2, 76, 2, 2, 1, '2004-04-29', '09:00:00', '09:30:00', 'Liberar ordenes OCW-18364,\r\n	OCW-18365,\r\n	OCW-18366,\r\n	OCW-18367 y sus facturas,\r\n	y la orden OCW-22219 para que sea nuevamente bajadas a SUN', 1, 1),
(174, 8, 74, 2, 2, 35, '2004-04-26', '09:00:00', '09:30:00', 'Revisión y actualización del documento de agemar. ', 0, 1),
(175, 1, 72, 2, 2, 35, '2004-04-26', '10:00:00', '11:00:00', 'Modificación en la programación en la sección de\r\n	Editar y agregar Servicios,\r\n	filtrando que no se puede repetir los tipos de servicios al seleccionar un \r\n	principal. ', 1, 1),
(176, 8, 74, 2, 2, 35, '2004-04-26', '11:00:00', '11:30:00', 'Continuación de la revisión del documento de agemar.\r\n	', 0, 1),
(177, 1, 72, 2, 2, 35, '2004-04-26', '11:30:00', '12:30:00', 'Programación de la sección de mantenimiento de los\r\n	mensajes de envío de estimado (culminación). ', 1, 1),
(178, 1, 72, 2, 2, 35, '2004-04-26', '13:00:00', '14:00:00', 'Modificaciones en la sección de servicios,\r\n	específicamente cuando se calcula el estimado y se desea enviar el mismo a \r\n	los principales,\r\n	el usuario podrá seleccionar cuál es el mensaje (subject) que debe tener el \r\n	correo. ', 1, 1),
(179, 2, 76, 2, 2, 35, '2004-04-26', '14:00:00', '14:30:00', 'Soporte de un error que estaba presentando en la\r\n	sección de Ordenes. ', 1, 1),
(180, 1, 72, 2, 2, 35, '2004-04-26', '14:30:00', '15:00:00', 'Culminación de las modificaciones en la sección de\r\n	servicios,\r\n	específicamente cuando se envía el correo al principal. ', 1, 1),
(181, 1, 72, 2, 2, 35, '2004-04-26', '15:00:00', '17:00:00', 'Programación en la sección del despliegue del IVA.en\r\n	la sección de órdenes. ', 1, 1),
(182, 1, 72, 2, 2, 35, '2004-05-03', '14:00:00', '14:30:00', 'Culminación del despliegue del IVA en la sección de\r\n	ordenes de compra. ', 1, 1),
(183, 1, 34, 2, 2, 35, '2004-05-03', '15:00:00', '15:30:00', 'Realización de pruebas,\r\n	correcciones y modificaciones de Agemar. ', 0, 1),
(184, 1, 34, 2, 2, 35, '2004-05-03', '16:00:00', '17:30:00', 'Continuación de la realización de pruebas,\r\n	correcciones y modificaciones de Agemar. ', 0, 1),
(185, 8, 74, 2, 2, 35, '2004-05-06', '16:00:00', '16:30:00', 'Revisión de las actividades por realizar de Agemar\r\n	', 0, 1),
(186, 1, 34, 2, 2, 35, '2004-05-18', '08:30:00', '12:30:00', 'Revisión,\r\n	chequeo y modificación de las secciones que se encuentra en el demo,\r\n	ya que presentaba ciertos errores ', 0, 1),
(187, 1, 72, 2, 2, 35, '2004-05-18', '13:00:00', '17:00:00', 'Continuación de las modificaciones de Agemar. ', 0, 1),
(188, 8, 74, 2, 2, 35, '2004-05-20', '14:00:00', '15:00:00', 'Subir los archivos modificados al servidor demo y\r\n	hacer algunas pruebas,\r\n	además de redactar un correo explicando detalladamente las modificaciones \r\n	respectivas a Yanina. ', 0, 1),
(189, 1, 34, 2, 2, 35, '2004-05-20', '16:00:00', '17:00:00', 'Modificación del archivo global.inc de Agemar,\r\n	ya que no va hacer varias cuentas de correo sino una sola cuenta. ', 0, 1),
(190, 1, 34, 2, 2, 1, '2004-05-26', '13:30:00', '17:30:00', 'Investigación para el cálculo de los conceptos\r\n	sumarizados del agente general', 0, 1),
(191, 1, 34, 2, 2, 35, '2004-05-27', '11:00:00', '11:30:00', 'Modificación en el código en el archivo global de\r\n	Agemar,\r\n	donde se encuentra configurado todas las cuentas de correo y las variables \r\n	que maneja el sistema,\r\n	dicho cambio consistió en cambiar una cuenta de correo,\r\n	el cual le llega los archivos generales de los servicios. ', 0, 1),
(192, 1, 72, 2, 2, 1, '2004-05-31', '14:00:00', '16:00:00', 'Programación agente general', 1, 1),
(193, 8, 65, 2, 2, 1, '2004-06-07', '11:00:00', '13:00:00', 'Revisión problemas de envío de correo', 0, 1),
(194, 8, 65, 2, 2, 1, '2004-06-07', '16:00:00', '17:00:00', 'Investigación de problemas para envío del correo', 0, 1),
(195, 2, 77, 2, 2, 1, '2004-06-08', '08:30:00', '10:30:00', 'Revisión de problemas de envío de correo desde el\r\n	servidor ITS HOSTING 2', 0, 1),
(196, 2, 56, 2, 2, 1, '2004-06-16', '14:30:00', '15:00:00', 'Revisión de problemas con servicio. Liberar\r\n	ordenas', 0, 1),
(197, 1, 34, 2, 2, 1, '2004-07-29', '09:30:00', '12:00:00', 'Modificaciones de programación con respecto al\r\n	archivo al agente general', 1, 1),
(198, 1, 34, 2, 2, 1, '2004-08-10', '08:30:00', '10:00:00', 'Modificaciones del archivo de agente general', 0, 1),
(199, 1, 34, 2, 2, 1, '2004-08-10', '16:30:00', '17:30:00', 'Modificaciónde archivo de agente general. Prueba', 0, 1),
(200, 2, 56, 2, 2, 1, '2004-10-06', '09:00:00', '10:30:00', 'Cambio de funcionalidad en el archivo de agente\r\n	general. Pruebas. Verificación que el archivo xxxx_IDA era el del agente\r\n	general', 1, 1),
(201, 2, 56, 2, 2, 1, '2004-10-20', '16:00:00', '16:30:00', 'Revisión de problemas en envío de email. Resultó ser\r\n	lentitud en su servidor de correos', 0, 1),
(202, 1, 34, 2, 2, 1, '2004-11-25', '14:00:00', '15:00:00', 'Programación formato Agente General', 1, 1),
(203, 1, 72, 2, 2, 22, '2005-06-02', '17:30:00', '18:00:00', 'Se agregó la dirección de correo OGARCIA02@HOTMAIL.COM en la copia de los \r\n	mensajes según correo de fecha 21-04.', 1, 1),
(204, 1, 72, 2, 2, 22, '2005-06-02', '18:00:00', '18:30:00', 'Se cambió dirección de envío de estimados a finance@agemarmaritime.com \r\n	según correo de fecha 27-05.', 1, 1),
(205, 1, 34, 2, 2, 81, '2008-08-19', '15:00:00', '17:00:00', 'Se inició el cambio solicitado por Agemar,\r\n	se agregó un Pulldown con cuentas padres.', 1, 1),
(206, 1, 72, 2, 2, 81, '2008-09-04', '13:00:00', '17:00:00', 'Se retomó la programación de la opción de creación\r\n	de cuentas padres. Se está estudiando el proceso actual y desarrollando la\r\n	inclusión del nuevo proceso.', 1, 1),
(207, 1, 72, 2, 2, 81, '2008-09-05', '08:00:00', '12:00:00', 'Se retomó la programación de la opción de creación\r\n	de cuentas padres. Se está estudiando el proceso actual y desarrollando la\r\n	inclusión del nuevo proceso.', 1, 1),
(208, 1, 72, 2, 2, 81, '2008-09-05', '13:00:00', '17:00:00', 'Se retomó la programación de la opción de creación\r\n	de cuentas padres. Se está estudiando el proceso actual y desarrollando la\r\n	inclusión del nuevo proceso.', 1, 1),
(209, 1, 34, 2, 2, 81, '2008-09-12', '11:00:00', '12:00:00', 'Se realizó chequeo del código generador de archivo\r\n	plano en el BackDoors de Agemar.', 0, 1),
(210, 1, 72, 2, 2, 81, '2008-09-12', '13:00:00', '17:00:00', 'Se realizó chequeo del código generador de archivo\r\n	plano en el BackDoors de Agemar debido a que se realizó una modificación en la\r\n	generación del código de la cuenta,\r\n	es posible que afecte la ejecución del proceso generador del archivo \r\n	plano.', 0, 1),
(211, 1, 72, 2, 2, 81, '2008-09-11', '13:00:00', '17:00:00', 'Se realizó prueba de generación de cuentas hijas\r\n	encontrando falla en el query identificador y estructurador de las cuentas\r\n	hijos. Se aplicó filtro para determinar tipos de cuentas y tipo de query a\r\n	utilizar. Se generó la cuenta depurada correcta hija.', 0, 1),
(212, 1, 72, 2, 2, 81, '2008-09-09', '08:00:00', '12:00:00', 'Se realizó prueba de generación de cuentas hijas\r\n	encontrando falla en la conexión con el servidor,\r\n	luego al obtener la conexión se detectó parte de la falla en la consulta de \r\n	las cuentas asociadas ya existente sin cuentas padres.', 0, 1),
(213, 1, 72, 2, 2, 81, '2008-09-09', '13:00:00', '15:00:00', 'Se realizó una correcta detección de cuentas padres\r\n	e hijas con el mejoramiento del query.', 0, 1),
(214, 1, 72, 2, 2, 81, '2008-09-10', '08:00:00', '12:00:00', 'Se realizó prueba de generación de cuentas hijas,\r\n	ahora se procedió a generar y verificar los correlativos.', 0, 1),
(215, 1, 72, 2, 2, 81, '2008-09-10', '13:00:00', '15:00:00', 'Se realizó prueba de generación de cuentas hijas,\r\n	ahora se procedió a generar y verificar los correlativos.', 0, 1),
(216, 1, 72, 2, 2, 81, '2008-09-08', '13:00:00', '17:00:00', 'Se retomó Agemar para la creación de cuentas padres\r\n	e hijas en el sistema.', 0, 1),
(217, 1, 72, 2, 2, 81, '2008-09-15', '13:00:00', '17:00:00', 'Se realizó programación de los últimos detalles de\r\n	la sección principales de sistema de agemar. Al final de la tarde se colocó en\r\n	producción.', 0, 1),
(218, 1, 72, 2, 2, 81, '2008-09-16', '08:00:00', '10:30:00', 'Se realizó un backup de la base de datos en\r\n	producción de Agemar y luego se realizó un restored de los datos de agemar en\r\n	la base de datos agemar_demo.', 0, 1),
(219, 1, 72, 2, 2, 81, '2008-09-15', '11:00:00', '12:00:00', 'Se realizó programación de los últimos detalles de\r\n	la sección principales de sistema de agemar. Al final de la tarde se colocó en\r\n	producción.', 1, 1),
(220, 1, 72, 2, 2, 81, '2008-09-22', '16:00:00', '17:30:00', 'Se realizó la revisión del código generador del\r\n	archivo plano que usa el sistema SUN de Agemar. Se realizó una adaptación de\r\n	datos y se envió una copia al cliente para la evaluación.', 0, 1),
(221, 8, 81, 2, 2, 81, '2008-10-02', '08:00:00', '09:00:00', 'Se realizó una revisión del funcionamiento de la\r\n	sección de creación de cuentas hijos en agemar3.dev y se crean correctamente.', 0, 1),
(222, 1, 34, 2, 2, 81, '2008-10-06', '11:30:00', '12:00:00', 'Se realizó ajustes en la sección principal del\r\n	sistema. Se logró listar todos los clientes y que desde allí se pueda luego\r\n	visualizar directamente todos sus datos para poder modificarlo. También se\r\n	verificó el buen funcionamiento de la creación de cuentas padres e hijas.', 0, 1),
(223, 1, 34, 2, 2, 81, '2008-10-06', '13:00:00', '17:00:00', 'Se realizó ajustes en la sección principal del\r\n	sistema. Se logró listar todos los clientes y que desde allí se pueda luego\r\n	visualizar directamente todos sus datos para poder modificarlo. También se\r\n	verificó el buen funcionamiento de la creación de cuentas padres e hijas.', 0, 1),
(224, 1, 72, 2, 2, 81, '2008-10-08', '15:00:00', '17:00:00', 'Se verificó el buen funcionamiento de la creación de\r\n	cuentas padres e hijas.', 0, 1),
(225, 1, 72, 2, 2, 81, '2008-10-09', '08:00:00', '10:00:00', 'Se ajustó el sistema y de colocó en producción una\r\n	nueva versión de prueba.', 0, 1),
(226, 2, 77, 2, 2, 22, '2008-11-03', '15:30:00', '16:00:00', 'Apoyo a Yanina Silva sobre buzones de correo.', 1, 1),
(227, 2, 56, 2, 2, 22, '2009-03-05', '08:00:00', '09:00:00', 'Creación de plan de mantenimiento para la base de\r\n	datos de acuerdo a los requerimientos del cliente.', 1, 1),
(228, 2, 56, 2, 2, 22, '2009-03-05', '15:00:00', '15:30:00', 'Realización de respaldo de la base de datos.', 1, 1),
(229, 2, 56, 2, 2, 22, '2009-07-10', '08:00:00', '08:30:00', 'Modificación del backup de SQL para que sea\r\n	diario.', 1, 1),
(230, 2, 54, 2, 2, 82, '2009-11-16', '11:30:00', '12:30:00', 'Revisión de problema de envío de email con Agemar.\r\n	Se hicieron cambios en la forma de envío.', 1, 1),
(231, 1, 34, 2, 2, 82, '2009-11-16', '13:30:00', '17:00:00', 'Revisión de problema de envío de email con Agemar.\r\n	Se hicieron cambios en la forma de envío.', 0, 1),
(232, 1, 34, 2, 2, 82, '2009-11-17', '09:00:00', '13:30:00', 'Error Agemar con envio de correos. Se realizaron\r\n	diversas y multiples pruebas.', 0, 1),
(233, 1, 34, 2, 2, 82, '2009-11-17', '14:30:00', '15:30:00', 'Error Agemar Envio de Estimaciones. Se modificó la\r\n	página ''ImprimirEstimd.asp'',\r\n	se subieron los cambios y se realizaron pruebas.', 0, 1),
(234, 1, 34, 2, 2, 82, '2009-11-17', '15:30:00', '16:00:00', 'Error Agemar con envio de correos. Se realizaron\r\n	diversas y multiples pruebas.', 0, 1),
(235, 1, 34, 2, 2, 82, '2009-11-17', '17:00:00', '17:30:00', 'Revisión de error de Agemar.', 0, 1),
(236, 1, 34, 2, 2, 82, '2009-11-20', '09:00:00', '11:30:00', 'Creación de site de pruebas para Agemar. Se creó\r\n	nueva estructura de Carpetas,\r\n	se apuntó la base de datos a Agemar2 y se realizó proceso de respaldo y \r\n	restauración de la data.', 1, 1),
(237, 2, 54, 2, 2, 82, '2010-04-09', '14:30:00', '19:30:00', 'Se revisó pantalla de error en el backdoor al editar\r\n	servicios.', 0, 1),
(238, 1, 34, 2, 2, 82, '2010-04-12', '10:00:00', '12:30:00', 'Revisión de problema con el backdoor de Agemar.', 0, 1),
(239, 1, 34, 2, 2, 82, '2010-04-12', '13:30:00', '14:30:00', 'Revisión de problema con el backdoor de Agemar.', 0, 1),
(240, 1, 34, 2, 2, 82, '2010-04-12', '15:00:00', '17:00:00', 'Revisión de problema con el backdoor de Agemar.', 0, 1),
(241, 1, 34, 2, 2, 82, '2010-04-13', '10:00:00', '13:00:00', 'Revisión de problema con el backdoor de Agemar.', 0, 1),
(242, 1, 34, 2, 2, 82, '2010-04-14', '10:00:00', '12:30:00', 'Revisión de problema con el backdoor de Agemar.', 0, 1),
(243, 2, 54, 2, 2, 82, '2010-04-14', '14:30:00', '17:30:00', 'Realización de soporte telefónico a Rackspace\r\n	Cloud.', 0, 1),
(244, 2, 54, 2, 2, 82, '2010-04-20', '10:30:00', '11:30:00', 'Modificaciones Agemar,\r\n	se omitió código problematico,\r\n	para subirlo a producción.', 0, 1),
(245, 4, 51, 2, 2, 82, '2010-04-20', '11:30:00', '12:00:00', 'Se realizó estimación de tiempo Agemar.', 0, 1),
(246, 1, 34, 2, 2, 82, '2010-04-21', '15:00:00', '17:00:00', 'Se realizó optimización del código de Agemar.', 1, 1),
(247, 1, 34, 2, 2, 82, '2010-04-22', '09:30:00', '12:00:00', 'Se realizaron cambios en Agemar,\r\n	se realizó optimización de código.', 1, 1),
(248, 1, 34, 2, 2, 82, '2010-04-22', '14:00:00', '16:00:00', 'Se realizaron cambios en Agemar,\r\n	se realizó optimización de código.', 1, 1),
(249, 1, 34, 2, 2, 82, '2010-04-23', '14:30:00', '16:00:00', 'Revisión de problema de Agemar.', 0, 1),
(250, 2, 56, 2, 2, 73, '2010-04-22', '14:30:00', '17:00:00', 'Modificación de proceso (Falla en el Cloud Site),\r\n	proyecto Agemar.net.', 1, 1),
(251, 2, 54, 2, 2, 82, '2010-04-26', '09:30:00', '10:00:00', 'Revisión de Agemar.', 0, 1),
(252, 1, 34, 2, 2, 82, '2010-04-26', '11:00:00', '12:30:00', 'Modificación de correo de Agemar se subieron los\r\n	cambios.', 1, 1),
(253, 1, 34, 2, 2, 82, '2010-04-26', '16:00:00', '17:00:00', 'Revision y modificaciones al Backdoor de Agemar.', 0, 1),
(254, 1, 34, 2, 2, 82, '2010-04-27', '08:30:00', '12:30:00', 'Revisión y modificaciones al Backdoor de Agemar.', 0, 1),
(255, 1, 34, 2, 2, 82, '2010-04-27', '14:00:00', '17:00:00', 'Revisión y modificaciones al Backdoor de Agemar. ', 1, 1),
(256, 1, 34, 2, 2, 82, '2010-04-28', '09:00:00', '12:30:00', 'Revisión y modificaciones al Backdoor de Agemar\r\n	relativo a la carga de conceptos. ', 1, 1),
(257, 1, 34, 2, 2, 82, '2010-04-28', '13:30:00', '17:30:00', 'Revisión y modificaciones al Backdoor de Agemar\r\n	relativo a la carga de conceptos.', 1, 1),
(258, 4, 70, 2, 2, 82, '2010-04-29', '10:00:00', '12:30:00', 'Revisión del sistema de Agemar.', 0, 1),
(259, 4, 70, 2, 2, 82, '2010-04-29', '13:30:00', '14:30:00', 'Revisión del sistema de Agemar.', 0, 1),
(260, 4, 70, 2, 2, 82, '2010-04-29', '14:30:00', '18:30:00', 'Revisión del sistema de Agemar en sus oficinas.', 1, 1),
(261, 1, 34, 2, 2, 82, '2010-04-30', '09:00:00', '12:30:00', 'Revisión y modificaciones al Backdoor de Agemar. ', 1, 1),
(262, 1, 34, 2, 2, 82, '2010-04-30', '14:00:00', '17:00:00', 'Revisión y modificaciones al Backdoor de Agemar.', 1, 1),
(263, 1, 34, 2, 2, 82, '2010-05-01', '10:30:00', '13:30:00', 'Revisión y modificaciones al Backdoor de Agemar. ', 0, 1),
(264, 1, 72, 2, 2, 73, '2010-04-29', '08:00:00', '12:00:00', 'Optimización de los procesos de carga de los\r\n	conceptos (errores colaterales). Proyecto Agemar.', 1, 1),
(265, 1, 72, 2, 2, 73, '2010-04-26', '13:00:00', '17:00:00', 'Optimización de los procesos de carga de los\r\n	conceptos. Proyecto Agemar.', 1, 1),
(266, 1, 34, 2, 2, 82, '2010-05-04', '14:00:00', '16:00:00', 'Revisión del problema del download de Agemar.', 1, 1),
(267, 1, 34, 2, 2, 82, '2010-05-05', '10:00:00', '12:30:00', 'Revisión de agemar,\r\n	problemas con el download de resultados.', 0, 1),
(268, 1, 34, 2, 2, 82, '2010-05-05', '16:00:00', '17:00:00', 'Revisión de agemar,\r\n	problemas con el download de resultados.', 0, 1),
(269, 1, 34, 2, 2, 82, '2010-05-06', '08:30:00', '12:30:00', 'Revisión de agemar,\r\n	problemas con el download de resultados. Se modificó el query de \r\n	resultados.', 0, 1),
(270, 1, 34, 2, 2, 82, '2010-05-06', '13:30:00', '17:00:00', 'Revisión de agemar,\r\n	problemas con el download de resultados. Se subieron los cambios para \r\n	pruebas.', 1, 1),
(271, 1, 72, 2, 2, 73, '2010-05-03', '13:00:00', '17:00:00', 'Apoyo problemas con los procesos en la página de\r\n	Agemar.', 1, 1),
(272, 2, 54, 2, 2, 82, '2010-05-10', '10:00:00', '10:30:00', 'Se subieron los cambios referentes al problema del\r\n	download de resultados.', 1, 1),
(273, 2, 54, 2, 2, 82, '2010-05-10', '16:00:00', '17:00:00', 'Revisión de incidencias de Agemar,\r\n	referente al problema del download de resultados.', 0, 1),
(274, 2, 54, 2, 2, 82, '2010-05-12', '08:30:00', '09:30:00', 'Revisión del sistema de Backdoor de Agemar.', 0, 1),
(275, 2, 54, 2, 2, 82, '2010-05-17', '10:30:00', '11:30:00', 'Revisión de incidencias relativas al Backdoor de\r\n	Agemar.', 0, 1),
(276, 2, 54, 2, 2, 82, '2010-05-24', '11:00:00', '12:30:00', 'Revisión de incidencias varias relacionadas con el\r\n	Backdoor de Agemar.', 0, 1),
(277, 2, 54, 2, 2, 82, '2010-05-27', '10:00:00', '12:00:00', 'Revisión de incidencias relacionadas con el Backdoor\r\n	de Agemar.', 0, 1),
(278, 4, 70, 2, 2, 82, '2010-05-27', '13:00:00', '17:00:00', 'Revisión de incidencias varias relacionadas con el\r\n	Backdoor de Agemar en las oficinas de Agemar.', 0, 1),
(279, 1, 34, 2, 2, 82, '2010-05-28', '09:00:00', '12:00:00', 'Resolución de incidencias relacionadas a la carga\r\n	del concepto C00013 en el Backdoor de agemar.', 1, 1),
(280, 4, 51, 2, 2, 82, '2010-05-28', '13:00:00', '14:30:00', 'Revisión de incidencias del Backdoor de Agemar y\r\n	realización de estimación para realizar optimización del sistema.', 0, 1),
(281, 2, 56, 2, 2, 73, '2010-05-27', '14:00:00', '15:30:00', 'Apoyo telefónico a Iván. Proyecto Agemar.', 0, 1),
(282, 2, 61, 2, 2, 82, '2010-06-03', '15:30:00', '16:00:00', 'Se revisó base de datos de Agemar y se realizó\r\n	backup.', 0, 1),
(283, 2, 54, 2, 2, 82, '2010-06-03', '16:00:00', '17:00:00', 'Se bajaron los archivos,\r\n	se modificó la configuración y se subieron los archivos de sitio de Agemar \r\n	de pruebas ''Agemar2''.', 0, 1),
(284, 2, 61, 2, 2, 82, '2010-06-04', '08:30:00', '09:30:00', 'Se realizó backup de base de datos de Agemar y se\r\n	bajó a servidor local.', 0, 1),
(285, 2, 61, 2, 2, 82, '2010-06-04', '09:30:00', '11:00:00', 'Se subio archivo de base de datos a nuevo servidor\r\n	de producción.', 0, 1),
(286, 2, 54, 2, 2, 82, '2010-06-04', '11:00:00', '11:30:00', 'Se realizo restore de nueva base de datos en el\r\n	cloud.', 0, 1),
(287, 2, 61, 2, 2, 82, '2010-06-04', '11:30:00', '12:30:00', 'Se cambio owner a las tablas de base de datos.', 0, 1),
(288, 2, 61, 2, 2, 82, '2010-06-04', '13:30:00', '14:30:00', 'Se realizaron pruebas de conexión a base de datos.', 0, 1),
(289, 1, 34, 2, 2, 82, '2010-06-04', '14:30:00', '15:30:00', 'Se realizaron pruebas al website con la nueva base\r\n	de datos.', 0, 1),
(290, 1, 35, 2, 2, 82, '2010-06-04', '15:30:00', '16:30:00', 'Se modificó el index de Agemar.Net.', 0, 1),
(291, 2, 61, 2, 2, 82, '2010-06-07', '10:30:00', '11:30:00', 'Mantenimiento y limpieza de log SQL en Agemar.', 0, 1),
(292, 1, 34, 2, 2, 82, '2010-06-07', '13:30:00', '16:00:00', 'Modificaciones de incidencias a Agemar sobre la\r\n	nueva plataforma de BD. Se corrigieron incidencias en el Download de\r\n	resultados.', 0, 1),
(293, 2, 76, 2, 2, 82, '2010-06-08', '08:30:00', '09:30:00', 'Corrección de incidencias de agemar relacionado con\r\n	el Download de resultados.', 0, 1),
(294, 2, 54, 2, 2, 82, '2010-06-08', '10:00:00', '12:30:00', 'Modificaciones a la configuración de la base de\r\n	datos de Agemar en el Cloud. Se realizó investigación.', 0, 1),
(295, 4, 51, 2, 2, 82, '2010-06-08', '13:30:00', '16:00:00', 'Se creó documento tutorial para la realización de\r\n	Backups y Mantenimiento a la Base de datos de Agemar.', 0, 1),
(296, 1, 72, 2, 2, 82, '2010-06-08', '16:00:00', '17:00:00', 'Se creo página Web ''full-backup.asp'' para crear\r\n	procedimientos de realización de Backups de base de datos en el Cloud de\r\n	Agemar.', 1, 1),
(297, 2, 54, 2, 2, 82, '2010-06-09', '12:00:00', '12:30:00', 'Realización de respaldo de archivos de Agemar.', 1, 1),
(298, 2, 61, 2, 2, 82, '2010-06-11', '08:30:00', '11:30:00', 'Se realizó migración de base de datos de Agemar.', 0, 1),
(299, 2, 77, 2, 2, 22, '2011-03-11', '10:00:00', '10:30:00', 'Soporte telefonico a Yanina Silva sobre\r\n	funcionamiento del correo.', 1, 1),
(300, 2, 77, 2, 2, 22, '2011-03-11', '15:00:00', '15:30:00', 'Soporte telefonico sobre correo de exchange.', 1, 1),
(301, 4, 69, 2, 2, 22, '2012-03-30', '14:00:00', '15:00:00', 'Cargo administrativo por inactividad.', 1, 1),
(302, 1, 34, 2, 2, 22, '2013-02-22', '10:30:00', '12:30:00', 'Revisión de código encargado de enviar mensajes del\r\n	sistema.', 1, 1),
(303, 1, 34, 2, 2, 22, '2013-02-22', '14:30:00', '17:00:00', 'Reprogramación de código CDO para envio de\r\n	mensajes.', 1, 1),
(304, 2, 60, 2, 2, 22, '2013-02-25', '14:30:00', '18:00:00', 'Revisión de código. Identificación de archivos\r\n	afectados por malware. Restitución de archivos de respaldos. Pruebas varias.', 1, 1),
(305, 2, 55, 2, 2, 22, '2014-01-09', '09:00:00', '10:00:00', 'Revisión de acceso FTP y cambio de clave.', 1, 1),
(306, 5, 35, 1, 1, 1, '0000-00-00', '08:00:00', '13:00:00', 'Detail about the task', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prepaid`
--

CREATE TABLE IF NOT EXISTS `prepaid` (
  `id_prepaid` int(11) NOT NULL AUTO_INCREMENT,
  `id_clientes` int(11) NOT NULL,
  `fecha_prepaid` date NOT NULL,
  `horas` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_prepaid`),
  KEY `id_clientes` (`id_clientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Volcado de datos para la tabla `prepaid`
--

INSERT INTO `prepaid` (`id_prepaid`, `id_clientes`, `fecha_prepaid`, `horas`) VALUES
(1, 2, '2003-07-15', '10.00'),
(2, 2, '2003-07-31', '-1.50'),
(3, 2, '2003-08-31', '-1.50'),
(4, 2, '2003-08-31', '-2.00'),
(5, 2, '2003-09-30', '-0.50'),
(6, 2, '2003-10-31', '-4.00'),
(7, 2, '2003-10-14', '60.00'),
(8, 2, '2003-11-30', '-1.50'),
(9, 2, '2003-12-31', '-2.00'),
(10, 2, '2004-01-31', '-3.50'),
(11, 2, '2004-02-28', '-32.50'),
(12, 2, '2004-03-31', '-29.50'),
(13, 2, '2004-04-30', '-16.50'),
(14, 2, '2004-05-31', '-2.50'),
(15, 2, '2004-07-31', '-2.50'),
(16, 2, '2004-10-31', '-1.50'),
(17, 2, '2004-11-30', '-1.00'),
(18, 2, '2005-06-02', '11.50'),
(19, 2, '2005-06-30', '-1.00'),
(20, 2, '2005-12-08', '10.50'),
(21, 2, '2005-12-08', '3.00'),
(22, 2, '2005-12-08', '5.00'),
(23, 2, '2006-01-10', '10.00'),
(24, 2, '2008-08-31', '-2.00'),
(25, 2, '2008-09-03', '20.00'),
(26, 2, '2008-09-30', '-13.00'),
(27, 2, '2008-11-30', '-0.50'),
(28, 2, '2009-03-31', '-1.50'),
(29, 2, '2009-07-31', '-0.50'),
(30, 2, '2009-11-02', '20.00'),
(31, 2, '2009-11-30', '-3.50'),
(32, 2, '2010-04-30', '-39.50'),
(33, 2, '2010-04-25', '20.00'),
(34, 2, '2010-05-31', '-13.00'),
(35, 2, '2010-06-30', '-1.50'),
(36, 2, '2010-07-19', '20.00'),
(37, 2, '2010-09-28', '20.00'),
(38, 2, '2011-03-31', '-1.00'),
(39, 2, '2012-03-31', '-1.00'),
(40, 2, '2013-02-28', '-8.00'),
(41, 2, '2013-01-01', '60.00'),
(42, 2, '2014-01-31', '-1.00'),
(43, 2, '2004-06-30', '-0.50'),
(44, 2, '2004-10-31', '-0.50'),
(45, 2, '2005-07-31', '0.00'),
(46, 2, '2005-08-31', '0.00'),
(47, 2, '2006-07-31', '-1.50'),
(48, 2, '2008-07-31', '-0.50'),
(49, 2, '2008-09-30', '-0.50'),
(50, 2, '2009-02-28', '-1.00'),
(51, 2, '2009-09-30', '-1.00'),
(52, 2, '2009-10-31', '-7.50'),
(53, 2, '2009-11-30', '-2.50'),
(54, 2, '2009-12-31', '-1.00'),
(55, 2, '2010-06-30', '-2.00'),
(56, 2, '2010-09-30', '-3.00'),
(57, 2, '2010-11-30', '-4.00'),
(58, 2, '2011-01-31', '-1.00'),
(59, 2, '2011-02-28', '-1.00'),
(60, 2, '2013-02-28', '-1.50'),
(61, 2, '2013-08-31', '-0.50'),
(62, 1, '2014-12-15', '20.00'),
(63, 1, '2014-12-15', '30.00'),
(64, 1, '2014-12-15', '10.50'),
(65, 1, '2014-12-17', '10.00'),
(66, 3, '2014-12-17', '30.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id_proyectos` int(11) NOT NULL AUTO_INCREMENT,
  `id_clientes` int(11) NOT NULL,
  `proyecto` varchar(150) NOT NULL,
  `status_proyectos` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_proyectos`),
  KEY `id_clientes` (`id_clientes`),
  KEY `id_clientes_2` (`id_clientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyectos`, `id_clientes`, `proyecto`, `status_proyectos`) VALUES
(1, 1, 'Red Interna', 1),
(2, 2, 'Sistema dinamico', 1),
(3, 2, 'Web Site', 1),
(4, 3, 'Website', 1),
(5, 4, 'Website', 1),
(6, 5, 'Varios', 1),
(7, 6, 'Web Site', 1),
(8, 7, 'Web Site', 1),
(9, 8, 'Web Site', 1),
(10, 9, 'Web Site', 1),
(11, 9, 'SVM', 1),
(12, 10, 'Web Site', 1),
(13, 10, 'Intranet', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subtareas`
--

CREATE TABLE IF NOT EXISTS `subtareas` (
  `id_subtareas` int(11) NOT NULL AUTO_INCREMENT,
  `id_tareas` int(11) NOT NULL,
  `subtarea` varchar(80) NOT NULL,
  `status_subtareas` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_subtareas`),
  KEY `id_tareas` (`id_tareas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Volcado de datos para la tabla `subtareas`
--

INSERT INTO `subtareas` (`id_subtareas`, `id_tareas`, `subtarea`, `status_subtareas`) VALUES
(1, 3, 'Desarrollo Gráfico', 1),
(2, 3, 'Mantenimiento Gráfico', 1),
(3, 3, 'Retoque Digital', 1),
(4, 3, 'Animación', 1),
(5, 3, 'Desarrollo Multimedia', 1),
(6, 3, 'Implantación Gráfica', 1),
(7, 1, 'Levantamiento de Información', 1),
(8, 1, 'Modificaciones de Programación', 1),
(9, 1, 'Programación HTML', 1),
(10, 1, 'Diseño de Formularios', 1),
(11, 1, 'Diseño de DB', 1),
(12, 1, 'Programación DB', 1),
(13, 1, 'Implantación', 1),
(14, 4, 'Elaboración', 1),
(15, 2, 'Web', 1),
(16, 2, 'FTP', 1),
(18, 2, 'DNS', 1),
(19, 2, 'Red', 1),
(20, 2, 'Sistema Operativo', 1),
(21, 2, 'Seguridad', 1),
(22, 2, 'DB', 1),
(23, 7, 'Actualización de Noticias', 1),
(24, 7, 'Creación de Contenidos', 1),
(25, 7, 'Modificación de Contenidos', 1),
(26, 8, 'Interna', 1),
(27, 8, 'Evaluación de Producto', 1),
(28, 4, 'Modificación', 1),
(29, 4, 'Levantamiento de info.', 1),
(30, 1, 'Programación Dinámica', 1),
(31, 3, 'Actualización Gráfica', 1),
(32, 8, 'Otros', 1),
(34, 2, 'e-mail', 1),
(35, 5, 'Inducción a aplicación', 1),
(36, 8, 'Pruebas de sistema', 1),
(37, 2, 'SSL', 1),
(38, 7, 'Redes Sociales', 1),
(56, 2, 'Aplicaciones Varias', 1),
(76, 2, 'Programación Dinámica', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `id_tareas` int(11) NOT NULL AUTO_INCREMENT,
  `tarea` varchar(80) NOT NULL,
  `status_tareas` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_tareas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tareas`, `tarea`, `status_tareas`) VALUES
(1, 'Desarrollo', 1),
(2, 'Soporte Técnico\r\n', 1),
(3, 'Diseño Gráfico', 1),
(4, 'Documentación', 1),
(5, 'Adiestramiento', 1),
(7, 'Contenido', 1),
(8, 'Investigación', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuarios`
--

CREATE TABLE IF NOT EXISTS `tipousuarios` (
  `id_tipousuarios` int(11) NOT NULL AUTO_INCREMENT,
  `tipousuario` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tipousuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipousuarios`
--

INSERT INTO `tipousuarios` (`id_tipousuarios`, `tipousuario`) VALUES
(1, 'Administrador'),
(2, 'User'),
(3, 'Reporter');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipousuarios` int(11) NOT NULL,
  `login_usuarios` varchar(30) NOT NULL,
  `password_usuarios` varchar(30) NOT NULL,
  `nombres_usuarios` varchar(80) NOT NULL,
  `cedula_usuarios` varchar(80) NOT NULL,
  `email_usuarios` varchar(80) NOT NULL,
  `status_usuarios` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuarios`),
  KEY `id_tipousuarios` (`id_tipousuarios`),
  KEY `id_tipousuarios_2` (`id_tipousuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prepaid`
--
ALTER TABLE `prepaid`
  ADD CONSTRAINT `prepaid_ibfk_1` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subtareas`
--
ALTER TABLE `subtareas`
  ADD CONSTRAINT `subtareas_ibfk_1` FOREIGN KEY (`id_tareas`) REFERENCES `tareas` (`id_tareas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipousuarios`) REFERENCES `tipousuarios` (`id_tipousuarios`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
