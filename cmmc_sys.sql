-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2016 a las 08:08:32
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cmmc_sys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE IF NOT EXISTS `comunas` (
  `comuna_id` int(11) NOT NULL,
  `comuna_nombre` varchar(32) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`comuna_id`, `comuna_nombre`) VALUES
(1, 'Cerrillos'),
(2, 'Cerro Navia'),
(3, 'Conchalí'),
(4, 'El Bosque'),
(5, 'Estación Central'),
(6, 'Huechuraba'),
(7, 'Independencia'),
(8, 'La Cisterna'),
(9, 'La Florida'),
(10, 'La Pintana'),
(11, 'La Granja'),
(12, 'La Reina'),
(13, 'Las Condes'),
(14, 'Lo Barnechea'),
(15, 'Lo Espejo'),
(16, 'Lo Prado'),
(17, 'Macul'),
(18, 'Maipú'),
(19, 'Ñuñoa'),
(20, 'Pedro Aguirre Cerda'),
(21, 'Peñalolén'),
(22, 'Providencia'),
(23, 'Pudahuel'),
(24, 'Quilicura'),
(25, 'Quinta Normal'),
(26, 'Recoleta'),
(27, 'Renca'),
(28, 'San Miguel'),
(29, 'San Joaquín'),
(30, 'San Ramón'),
(31, 'Santiago'),
(32, 'Vitacura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE IF NOT EXISTS `etapas` (
  `etapa_id` int(11) NOT NULL,
  `etapa_nombre` varchar(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etapas`
--

INSERT INTO `etapas` (`etapa_id`, `etapa_nombre`) VALUES
(1, 'Antecedentes personales'),
(2, 'Parámetros antropométricos'),
(3, 'Experiencias y tratamientos anteriores'),
(4, 'Cuestionario médico'),
(5, 'Cuestionario nutricional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas_datos`
--

CREATE TABLE IF NOT EXISTS `etapas_datos` (
  `etapa_dato_id` int(11) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `etapa_dato_nombre` varchar(255) DEFAULT NULL,
  `etapa_dato_contenido` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=268982 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etapas_datos`
--

INSERT INTO `etapas_datos` (`etapa_dato_id`, `etapa_id`, `usuario_id`, `etapa_dato_nombre`, `etapa_dato_contenido`) VALUES
(230470, 1, 3082, 'antecedentes personales', 'solange marcela naipayan delgadillo'),
(230471, 2, 3082, 'estatura', '1,54'),
(230472, 2, 3082, 'peso', '73'),
(230473, 2, 3082, 'abdomen', '95'),
(230474, 3, 3082, 'sometido a tratamiento de peso', 'no'),
(230475, 3, 3082, 'dieta nutricionista', 'no'),
(230476, 3, 3082, 'programa médico', 'no'),
(230477, 3, 3082, 'fármacos', 'no'),
(230478, 3, 3082, 'tratamiento psicológico', 'no'),
(230479, 3, 3082, 'cirugía', 'no'),
(230480, 3, 3082, 'otro', 'no'),
(230481, 3, 3082, 'otro tratamiento 01', ''),
(230482, 3, 3082, 'otro tratamiento 02', ''),
(230483, 3, 3082, 'otro tratamiento 03', ''),
(230484, 3, 3082, 'otro tratamiento 04', ''),
(230485, 3, 3082, 'cuantas ocaciones ha intentado', '0'),
(230486, 3, 3082, 'nivel de importancia', 'Nula'),
(230487, 3, 3082, 'por qué lo necesita', ''),
(230488, 3, 3082, 'qué cree que lo ocaciona', ''),
(230489, 3, 3082, 'qué le molesta', ''),
(230490, 3, 3082, 'su caso', ''),
(230491, 4, 3082, 'diabetes', 'no'),
(230492, 4, 3082, 'esistencia a la insulina', 'no'),
(230493, 4, 3082, 'hipertensión arterial', 'no'),
(230494, 4, 3082, 'enfermedades cardiovasculares', 'no'),
(230495, 4, 3082, 'gota', 'no'),
(230496, 4, 3082, 'disfunción tiroidea', 'no'),
(230497, 4, 3082, 'apnea', 'no'),
(230498, 4, 3082, 'osteoartritis', 'no'),
(230499, 4, 3082, 'osteoporosis', 'no'),
(230500, 4, 3082, 'enfermedad dolor de espalda', 'no'),
(230501, 4, 3082, 'asma', 'no'),
(230502, 4, 3082, 'depresión', 'no'),
(230503, 4, 3082, 'trastorno del ánimo o personalidad', 'no'),
(230504, 4, 3082, 'toma medicamentos', 'si'),
(230505, 4, 3082, 'nombre medicamento 01', 'anticonseptivas'),
(230506, 4, 3082, 'nombre medicamento 02', ''),
(230507, 4, 3082, 'nombre medicamento 03', ''),
(230508, 4, 3082, 'nombre medicamento 04', ''),
(230509, 4, 3082, 'nombre medicamento 05', ''),
(230510, 4, 3082, 'nombre medicamento 06', ''),
(230511, 4, 3082, 'nombre medicamento 07', ''),
(230512, 4, 3082, 'es alérgico', 'no'),
(230513, 4, 3082, 'alergia 01', ''),
(230514, 4, 3082, 'alergia 02', ''),
(230515, 4, 3082, 'alergia 03', ''),
(230516, 4, 3082, 'alergia 04', ''),
(230517, 4, 3082, 'ha sido operado', 'no'),
(230518, 4, 3082, 'operación 01', ''),
(230519, 4, 3082, 'operación 02', ''),
(230520, 4, 3082, 'operación 03', ''),
(230521, 4, 3082, 'operación 04', ''),
(230522, 4, 3082, 'ansiedad', 'si'),
(230523, 4, 3082, 'dificultad para dormir', 'no'),
(230524, 4, 3082, 'somnolencia', 'si'),
(230525, 4, 3082, 'irritabilidad', 'no'),
(230526, 4, 3082, 'cansancio', 'no'),
(230527, 4, 3082, 'sensación de depresión', 'no'),
(230528, 4, 3082, 'dolor en el pecho', 'no'),
(230529, 4, 3082, 'dificultad para respirar', 'no'),
(230530, 4, 3082, 'necesidad de orinar', 'no'),
(230531, 4, 3082, 'sed inusual', 'no'),
(230532, 4, 3082, 'hambre extrema', 'no'),
(230533, 4, 3082, 'dolor de espalda', 'no'),
(230534, 4, 3082, 'dolor en articulaciones', 'no'),
(230535, 4, 3082, 'pérdida de peso', 'no'),
(230536, 4, 3082, 'aumento de peso', 'no'),
(230537, 4, 3082, 'desorden alimenticio', 'no'),
(230538, 4, 3082, 'dificultad para realizar actividad fisica', 'no'),
(230539, 4, 3082, 'hijos', 'si'),
(230540, 4, 3082, 'cuántos hijos', '1'),
(230541, 4, 3082, 'alguno pesó más de 4kg', 'no'),
(230542, 4, 3082, 'tuvo diabetes gestacional', 'no'),
(230543, 4, 3082, 'tuvo hipertensión en el embarazo', 'no'),
(230544, 4, 3082, 'periodo menstrual', 'Regular'),
(230545, 4, 3082, 'fuma', 'no'),
(230546, 4, 3082, 'cuánto fuma', 'Ninguno'),
(230547, 4, 3082, 'alguna vez fumó', 'si'),
(230548, 4, 3082, 'cuando dejó de fumar', 'Entre 1 y 5 años'),
(230549, 4, 3082, 'bebe', 'no'),
(230550, 4, 3082, 'frecuencia de consumo de alcohol', 'Nunca'),
(230551, 4, 3082, 'vino', 'Nunca'),
(230552, 4, 3082, 'cerveza', 'Nunca'),
(230553, 4, 3082, 'destilados', 'Nunca'),
(230554, 4, 3082, 'drogas', 'no'),
(230555, 4, 3082, 'marihuana', 'no'),
(230556, 4, 3082, 'cocaína', 'no'),
(230557, 4, 3082, 'alucinógenos', 'no'),
(230558, 4, 3082, 'pasta base', 'no'),
(230559, 4, 3082, 'ejercicio', 'Ocacionalmente'),
(230560, 5, 3082, 'cuanto veces come', '3'),
(230561, 5, 3082, 'desayuno', 'si'),
(230562, 5, 3082, 'almuerzo', 'si'),
(230563, 5, 3082, 'onces', 'si'),
(230564, 5, 3082, 'comida', 'no'),
(230565, 5, 3082, 'cuántas veces come afuera', '1'),
(230566, 5, 3082, 'pan', 'si'),
(230567, 5, 3082, 'marraqueta', 'si'),
(230568, 5, 3082, 'hallulla', 'si'),
(230569, 5, 3082, 'pan amasado', 'si'),
(230570, 5, 3082, 'pan especial blanco', 'no'),
(230571, 5, 3082, 'pan especial integral', 'no'),
(230572, 5, 3082, 'pan molde blanco', 'no'),
(230573, 5, 3082, 'pan molde integral', 'no'),
(230574, 5, 3082, 'porciones de pan', '1 porción'),
(230575, 5, 3082, 'autoevaluacion alimenticia', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

CREATE TABLE IF NOT EXISTS `regiones` (
  `region_id` int(11) NOT NULL,
  `region_nombre` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`region_id`, `region_nombre`) VALUES
(1, 'I Tarapacá'),
(2, 'II Antofagasta'),
(3, 'III Atacama'),
(4, 'IV Coquimbo'),
(5, 'V Valparaíso'),
(6, 'VI O''Higgins'),
(7, 'VII Maule'),
(8, 'VIII Biobío'),
(9, 'IX La Araucanía'),
(10, 'X Los Lagos'),
(11, 'XI Aysén'),
(12, 'XII Magallanes y Antártida'),
(13, 'Región Metropolitana'),
(14, 'XIV Los Ríos'),
(15, 'XV Arica y Parinanota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE IF NOT EXISTS `sesiones` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3d65d2472709007f2f836debfd4deb44', '201.241.158.100', 'Mozilla/5.0 (Linux; U; Android 4.2.2; es-us; GT-I9060L Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 M', 1466726682, ''),
('88fea071aaf2a4e2b4a62bb5defd99b6', '190.20.139.177', 'Mozilla/5.0 (Linux; U; Android 4.2.2; es-us; GT-I9063T Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 M', 1466724222, ''),
('9cb5861c5efa15022751b67c6ba6cafb', '138.219.56.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1466747354, ''),
('acb9e6c17732e4c0cc7c24093fd02751', '190.44.232.196', 'Mozilla/5.0 (Windows NT 10.0; rv:47.0) Gecko/20100101 Firefox/47.0', 1466735382, ''),
('b723b1efd7d587b2e61d221f469d5e0b', '66.249.66.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1466734641, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `usuario_comuna` varchar(128) NOT NULL,
  `usuario_nombres` varchar(64) NOT NULL,
  `usuario_apellidos` varchar(128) NOT NULL,
  `usuario_telefono_fijo` varchar(32) DEFAULT NULL,
  `usuario_celular` varchar(32) DEFAULT NULL,
  `usuario_email` varchar(128) NOT NULL,
  `usuario_prevision` varchar(16) NOT NULL,
  `usuario_prevision_tipo` varchar(32) DEFAULT NULL,
  `usuario_edad` int(11) NOT NULL,
  `usuario_genero` varchar(16) NOT NULL,
  `usuario_ocupacion` varchar(32) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3542 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `region_id`, `usuario_comuna`, `usuario_nombres`, `usuario_apellidos`, `usuario_telefono_fijo`, `usuario_celular`, `usuario_email`, `usuario_prevision`, `usuario_prevision_tipo`, `usuario_edad`, `usuario_genero`, `usuario_ocupacion`) VALUES
(3082, 13, 'pudahuel sur', 'solange marcela', 'naipayan delgadillo', '27479535', '79696897', 'solesmnd@gmail.com', 'fonasa', 'Nivel C', 27, 'F', 'dueña de casa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`comuna_id`);

--
-- Indices de la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`etapa_id`);

--
-- Indices de la tabla `etapas_datos`
--
ALTER TABLE `etapas_datos`
  ADD PRIMARY KEY (`etapa_dato_id`);

--
-- Indices de la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`region_id`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`session_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunas`
--
ALTER TABLE `comunas`
  MODIFY `comuna_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `etapas`
--
ALTER TABLE `etapas`
  MODIFY `etapa_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `etapas_datos`
--
ALTER TABLE `etapas_datos`
  MODIFY `etapa_dato_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=268982;
--
-- AUTO_INCREMENT de la tabla `regiones`
--
ALTER TABLE `regiones`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3542;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
