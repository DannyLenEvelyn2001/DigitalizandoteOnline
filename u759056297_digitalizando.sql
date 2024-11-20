SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `u759056297_digitalizando` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `u759056297_digitalizando`;

DROP TABLE IF EXISTS `cataplantilla`;
CREATE TABLE `cataplantilla` (
  `idcataPlantilla` int(11) NOT NULL,
  `categoria` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `cataplantilla`;
INSERT INTO `cataplantilla` (`idcataPlantilla`, `categoria`, `nombre`, `descripcion`, `activo`) VALUES
(1, 'COMIDA', 'RESTAURANTE', 'puede ser usada para la gastronomía', '1'),
(2, 'MECANICA', 'MECAINOSDF', 'dsadasdsada', '1');

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `categoria` varchar(405) NOT NULL,
  `fecha` varchar(405) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `categoria`;
INSERT INTO `categoria` (`idcategoria`, `categoria`, `fecha`, `activo`) VALUES
(1, 'diseño web', '', 1);

DROP TABLE IF EXISTS `colaborador`;
CREATE TABLE `colaborador` (
  `idColaborador` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `tel` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `colaborador`;
INSERT INTO `colaborador` (`idColaborador`, `nombre`, `cargo`, `tel`, `email`, `fecha`, `activo`) VALUES
(8, 'DANIELA EVELYN GARCIA GUTIERREZ', 'csdc', '1234567890', 'alexijr14ki@gmail.com', '', ''),
(20, 'prueba dos', 'holsssss', '09878909', 'holaaaaaaaaa@hotmail.com', '', '1'),
(26, 'SIGUEN SIENDO PRUEBAS', 'ING. TECNOLOGIAS ', '159487263', 'pruebas.garcia@gmail.com', '', '1'),
(27, 'ghfgh', 'ghfh', 'fhfhfhf', 'fghfh@gmail.com', '', '1'),
(29, 'prueba', 'ingeniero', '1234560987', 'inge@gmail.com', '2024/09/25 09:10:09', '1'),
(30, 'CAMBIO', 'FDSFD', 'fffd', 'dfghcg@gmail.com', '2024/09/25 11:29:12', '1'),
(31, 'VICTOR', 'DVD', '1234567890', 'castelanxd1@gmail.com', '2024/09/25 11:29:46', '1'),
(32, 'fdfsdf', 'dffsfs', '1234567890', 'arcia18@gmail.com', '2024/09/25 11:30:16', '0'),
(33, 'FDGDFGDFG', 'FDGDGDF', 'gdfgdfgdg', 'fgdgrcia18@gmail.com', '2024/09/25 11:30:38', '1'),
(34, 'trt', 't', 't', 'dani.eve.garcia18@gmail.com', '2024/09/25 11:42:44', '0'),
(35, 'daniela', 'r', '1234567890', 'rrr8@gmail.com', '2024/09/25 11:43:22', '0'),
(36, 'daniela evelyn garcia gutierrez', 'secretaria', '1234567890', 'dani.eve.garcia18@gmail.com', '2024/10/02 10:49:23', '1'),
(37, 'GARCIA GUTIERREZ DANIELA EVELYN', 'ING TECNOLOGIAS DE LA INFORMACION', '7222336714', 'daniela.evelyn@netrabbit.online', '2024/10/02 11:22:56', '1'),
(38, 'ENCASTIN', 'WKDHAOSFAOK', '24981793', 'qsjf@dsfl.es', '2024/10/02 11:23:30', '1'),
(39, 'ASSFDG', 'DFGF', 'ewrt', 'ew@wd', '2024/10/02 11:26:33', '1'),
(40, 'EVELYN', 'FDFGDFGFDG', '12343254', 'castelanxd1@gmail.com', '2024/10/02 11:50:41', '1'),
(41, 'BN', 'SDASD', '1243564534', 'alexijr14ki@gmail.com', '2024/10/02 11:53:15', '1'),
(42, 'WEARTYUIYTE3', '21', 'qwertyugjytdgrsaSASADVDBGFNDH', 'EFRGET@ksfhlf', '2024/10/02 11:54:45', '1'),
(43, 'QSDFAGEWRG', 'WTRETQ', '43625463526324', 'dfsggrfe@fsakgodhh', '2024/10/02 11:56:29', '1'),
(44, 'QWERETUI', 'SDZFG', 'zfdgdsthr5yq34', 'alexijr14ki@gmail.com', '2024/10/02 12:04:26', '1'),
(45, 'EFRGDBFHNYERWRGFS', '12321243564', 'dsfgfnfrwr4tewt', 'castelanxd1@gmail.com', '2024/10/02 12:06:13', '1'),
(46, 'LA DANY', 'ING TECNOLOGIAS DE LA INFORMACION', '1234567890', 'daniela.evelyn@netrabbit.online', '2024/10/02 12:06:48', '1'),
(47, 'DANYLEN', 'ESTUDIANTE', '824681748', 'sdahihd@knfow', '2024/10/02 12:08:11', '1'),
(48, 'ASDFGHJ', 'SDFGH', '1234567', 'daniela.eve.garcia18@gmail.com', '2024/10/03 11:11:01', '1');

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `activo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `empresa`;
INSERT INTO `empresa` (`idEmpresa`, `nombre`, `descripcion`, `direccion`, `telefono`, `email`, `fecha`, `activo`) VALUES
(2, 'PRUEBITA', '213467SDWF', 'OLA', '1234567890', 'prueba@asdad.com', '2024/09/25 11:42:26', '1'),
(3, 'perfil 2', 'prueba del perfil dos', '5 de mayo', '1234567890', 'prueba2@gmail.com', '2024/09/25 09:09:36', '1'),
(4, 'prueba daniela', 'sdffds', 'fdfdsf', '1234567890', 'preuebas@gmail.com', '2024/09/25 11:28:53', '1'),
(5, 'dess', 'fgdfadf', 'direccion', 'telefono', 'email', '2024/09/25 11:42:26', '1'),
(6, 'PRUEBA 2', 'AD,LSBAFKJ', 'T.I.', '12345678', 'prubitas@ccdksdn.es', '2024/10/02 11:22:13', '1'),
(7, 'SSSS1', 'SSS', 'SSS', '11234567', 'fff@hotmail.com', '2024/10/03 11:09:52', '1');

DROP TABLE IF EXISTS `planalimento`;
CREATE TABLE `planalimento` (
  `id` int(11) NOT NULL,
  `colortitulo` varchar(45) NOT NULL,
  `negocio` varchar(250) NOT NULL,
  `colorEncabezado` varchar(45) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `celular` varchar(250) NOT NULL,
  `imgFondo` varchar(250) NOT NULL,
  `imgFrontal` varchar(250) NOT NULL,
  `colorT1` varchar(45) NOT NULL,
  `titulo1` varchar(100) NOT NULL,
  `descChech` varchar(250) NOT NULL,
  `colorSubtitulo` varchar(45) NOT NULL,
  `colorDesc` varchar(45) NOT NULL,
  `subTitulo1` varchar(250) NOT NULL,
  `descSub1` varchar(250) NOT NULL,
  `imgSub1` varchar(300) NOT NULL,
  `subTitulo2` varchar(250) NOT NULL,
  `descSub2` varchar(250) NOT NULL,
  `imgSub2` varchar(300) NOT NULL,
  `color2` varchar(45) NOT NULL,
  `titulo2` varchar(250) NOT NULL,
  `descripcionTitulo2` varchar(200) NOT NULL,
  `img1` varchar(300) NOT NULL,
  `img2` varchar(300) NOT NULL,
  `img3` varchar(300) NOT NULL,
  `img4` varchar(300) NOT NULL,
  `color3` varchar(45) NOT NULL,
  `perfil1` varchar(300) NOT NULL,
  `imgP1` varchar(300) NOT NULL,
  `color4` varchar(45) NOT NULL,
  `descripcion1` varchar(250) NOT NULL,
  `perfil2` varchar(300) NOT NULL,
  `imgP2` varchar(300) NOT NULL,
  `descripcion2` varchar(250) NOT NULL,
  `perfil3` varchar(300) NOT NULL,
  `imgP3` varchar(300) NOT NULL,
  `descripcion3` varchar(250) NOT NULL,
  `color5` varchar(45) NOT NULL,
  `tituloNavar` varchar(250) NOT NULL,
  `descNavar` varchar(250) NOT NULL,
  `imgFin` varchar(250) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(45) NOT NULL,
  `pinteres` varchar(45) NOT NULL,
  `youtube` varchar(45) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planalimento`;
INSERT INTO `planalimento` (`id`, `colortitulo`, `negocio`, `colorEncabezado`, `nombre`, `celular`, `imgFondo`, `imgFrontal`, `colorT1`, `titulo1`, `descChech`, `colorSubtitulo`, `colorDesc`, `subTitulo1`, `descSub1`, `imgSub1`, `subTitulo2`, `descSub2`, `imgSub2`, `color2`, `titulo2`, `descripcionTitulo2`, `img1`, `img2`, `img3`, `img4`, `color3`, `perfil1`, `imgP1`, `color4`, `descripcion1`, `perfil2`, `imgP2`, `descripcion2`, `perfil3`, `imgP3`, `descripcion3`, `color5`, `tituloNavar`, `descNavar`, `imgFin`, `facebook`, `twitter`, `pinteres`, `youtube`, `activo`) VALUES
(1, '#1a1919', 'pollitos', '#7dd4ce', 'DANIELA EVELYN GARCIA GUTIERREZ', '7225736178', 'imgFondo.jpg', 'imgFrontal.jpg', '#e74008', 'servicios', 'servicio prueba 1', '#0722ed', '#6f06ef', 'servicio 1', 'descripción del servicio de prueba', 'imgSub1.png', 'servicio 2', 'descripción del servicio de prueba', 'imgSub2.png', '#06f9f5', 'galería dos', 'carrusel de imágenes de platillos', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '#05ad19', 'Daniela', 'imgP1.png', '#000000', 'los platillos son los buenos', 'Evelyn', 'imgP2.jpg', 'los platillos son los buenos 2', 'Brian', 'imgP3.jpg', 'los platillos son los buenos 3', '#db0a0a', 'hola', 'hola', 'imgFin.jpg', 'https://www.facebook.com/DANNY%LEN', 'https://www.twitter.com/DANNY', 'https://mx.pinterest.com/', 'https://www.youtube.com/', 1);

DROP TABLE IF EXISTS `planarquitectura`;
CREATE TABLE `planarquitectura` (
  `idplanArquitectura` int(11) NOT NULL,
  `tituloEnc` varchar(145) NOT NULL,
  `cargo` varchar(145) NOT NULL,
  `nombre` varchar(145) NOT NULL,
  `miniDesc` varchar(250) NOT NULL,
  `celular` varchar(145) NOT NULL,
  `imgFondoE` varchar(145) NOT NULL,
  `tituloAbout` varchar(145) NOT NULL,
  `descAbout` varchar(250) NOT NULL,
  `descAbout2` varchar(250) NOT NULL,
  `descAbout3` varchar(250) NOT NULL,
  `descAbout4` varchar(250) NOT NULL,
  `servicios` varchar(250) NOT NULL,
  `descServ` varchar(250) NOT NULL,
  `tituloIcon1` varchar(250) NOT NULL,
  `iconT1` varchar(250) NOT NULL,
  `iconT2` varchar(250) NOT NULL,
  `iconT3` varchar(250) NOT NULL,
  `iconT4` varchar(250) NOT NULL,
  `iconT5` varchar(250) NOT NULL,
  `iconT6` varchar(250) NOT NULL,
  `iconDesc1` varchar(250) NOT NULL,
  `iconDesc2` varchar(250) NOT NULL,
  `iconDesc3` varchar(250) NOT NULL,
  `iconDesc4` varchar(250) NOT NULL,
  `iconDesc5` varchar(250) NOT NULL,
  `iconDesc6` varchar(250) NOT NULL,
  `colorIcon` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `tituloImg` varchar(250) NOT NULL,
  `descripcionImg` varchar(250) NOT NULL,
  `imgIzq` varchar(250) NOT NULL,
  `tituloIcon2` varchar(250) NOT NULL,
  `tituloIcon3` varchar(150) NOT NULL,
  `tituloIcon4` varchar(150) NOT NULL,
  `descIcon1` varchar(150) NOT NULL,
  `descIcon2` varchar(150) NOT NULL,
  `descIcon3` varchar(150) NOT NULL,
  `descIcon4` varchar(150) NOT NULL,
  `imgFondo3` varchar(45) NOT NULL,
  `tituloFondo` varchar(150) NOT NULL,
  `descFondo` varchar(150) NOT NULL,
  `portaTitulo` varchar(150) NOT NULL,
  `descPorta` varchar(400) NOT NULL,
  `imgApp1` varchar(45) NOT NULL,
  `imgApp2` varchar(45) NOT NULL,
  `imgApp3` varchar(45) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `imgCard1` varchar(45) NOT NULL,
  `imgCard2` varchar(45) NOT NULL,
  `imgCard3` varchar(45) NOT NULL,
  `imgWeb1` varchar(45) NOT NULL,
  `imgWeb2` varchar(45) NOT NULL,
  `imgWeb3` varchar(45) NOT NULL,
  `pricingT1` varchar(45) NOT NULL,
  `descPrin` varchar(45) NOT NULL,
  `contacto` varchar(45) NOT NULL,
  `descContac` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planarquitectura`;
DROP TABLE IF EXISTS `planauditores`;
CREATE TABLE `planauditores` (
  `idplanAuditores` int(11) NOT NULL,
  `colorEnc` varchar(45) NOT NULL,
  `imgEnc` varchar(45) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `certificacion` varchar(150) NOT NULL,
  `titulo1REsc` varchar(150) NOT NULL,
  `descEscoger` varchar(250) NOT NULL,
  `imgEsc` varchar(45) NOT NULL,
  `servicios` varchar(150) NOT NULL,
  `tituloRazon1` varchar(45) NOT NULL,
  `descServ1` varchar(250) NOT NULL,
  `tituloRazon2` varchar(45) NOT NULL,
  `descServ2` varchar(150) NOT NULL,
  `tituloRazon3` varchar(45) NOT NULL,
  `descServ3` varchar(150) NOT NULL,
  `tituloRazon4` varchar(45) NOT NULL,
  `descServ4` varchar(150) NOT NULL,
  `tituloRazon5` varchar(45) NOT NULL,
  `descServ5` varchar(150) NOT NULL,
  `tituloRazon6` varchar(45) NOT NULL,
  `descServ6` varchar(150) NOT NULL,
  `imgFon1` varchar(250) NOT NULL,
  `descFondo` varchar(200) NOT NULL,
  `tituloFondo` varchar(45) NOT NULL,
  `funcionestitulo` varchar(150) NOT NULL,
  `punto1` varchar(150) NOT NULL,
  `punto2` varchar(150) NOT NULL,
  `punto3` varchar(150) NOT NULL,
  `punto4` varchar(150) NOT NULL,
  `punto5` varchar(150) NOT NULL,
  `punto6` varchar(150) NOT NULL,
  `punto7` varchar(150) NOT NULL,
  `punto8` varchar(150) NOT NULL,
  `imgPunto` varchar(45) NOT NULL,
  `contacto` varchar(150) NOT NULL,
  `descContac` varchar(300) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `whatsapp` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `instagram` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planauditores`;
DROP TABLE IF EXISTS `planconstruccion`;
CREATE TABLE `planconstruccion` (
  `idplanConstruccion` int(11) NOT NULL,
  `imgEnca` varchar(45) NOT NULL,
  `tituloEnc` varchar(45) NOT NULL,
  `descrip` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `cel` varchar(45) NOT NULL,
  `titulo2` varchar(67) NOT NULL,
  `desc2` varchar(300) NOT NULL,
  `img` varchar(45) NOT NULL,
  `titulo3` varchar(45) NOT NULL,
  `desc3` varchar(200) NOT NULL,
  `img1` varchar(45) NOT NULL,
  `descImg1` varchar(200) NOT NULL,
  `img2` varchar(45) NOT NULL,
  `descImg2` varchar(200) NOT NULL,
  `img3` varchar(45) NOT NULL,
  `descImg3` varchar(200) NOT NULL,
  `img4` varchar(45) NOT NULL,
  `descImg4` varchar(200) NOT NULL,
  `tituloServ` varchar(45) NOT NULL,
  `descServ` varchar(200) NOT NULL,
  `servi1` varchar(200) NOT NULL,
  `servi2` varchar(200) NOT NULL,
  `servi3` varchar(200) NOT NULL,
  `servi4` varchar(200) NOT NULL,
  `servi5` varchar(200) NOT NULL,
  `servi6` varchar(200) NOT NULL,
  `titulo4` varchar(45) NOT NULL,
  `descripcion4` varchar(400) NOT NULL,
  `imgtitulo4` varchar(45) NOT NULL,
  `titulo 5` varchar(45) NOT NULL,
  `imgRemod1` varchar(45) NOT NULL,
  `imgRemod2` varchar(45) NOT NULL,
  `imgConst1` varchar(45) NOT NULL,
  `imgConst2` varchar(45) NOT NULL,
  `imgConst3` varchar(45) NOT NULL,
  `imgRefac1` varchar(45) NOT NULL,
  `imgRefac2` varchar(45) NOT NULL,
  `imgRefac3` varchar(45) NOT NULL,
  `imgDiseno1` varchar(45) NOT NULL,
  `imgDiseno2` varchar(45) NOT NULL,
  `imgDiseno3` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `whatsapp` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planconstruccion`;
DROP TABLE IF EXISTS `planconta`;
CREATE TABLE `planconta` (
  `id` int(11) NOT NULL,
  `imgPerfil` varchar(200) NOT NULL,
  `imgEncabezado` varchar(250) NOT NULL,
  `nombrePerfil` varchar(200) NOT NULL,
  `nombreEncab` varchar(250) NOT NULL,
  `descripcion1` varchar(250) NOT NULL,
  `about1` varchar(250) NOT NULL,
  `descripcion2` varchar(250) NOT NULL,
  `subT1` varchar(250) NOT NULL,
  `text1` varchar(250) NOT NULL,
  `birth` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `degree` varchar(250) NOT NULL,
  `phemail` varchar(250) NOT NULL,
  `text` varchar(250) NOT NULL,
  `subT2` varchar(250) NOT NULL,
  `text2` varchar(250) NOT NULL,
  `subT3` varchar(250) NOT NULL,
  `text3` varchar(250) NOT NULL,
  `subT4` varchar(250) NOT NULL,
  `text4` varchar(250) NOT NULL,
  `subT5` varchar(250) NOT NULL,
  `text5` varchar(250) NOT NULL,
  `subT6` varchar(250) NOT NULL,
  `text6` varchar(250) NOT NULL,
  `subT7` varchar(250) NOT NULL,
  `text7` varchar(250) NOT NULL,
  `subT8` varchar(250) NOT NULL,
  `text8` varchar(250) NOT NULL,
  `subT9` varchar(250) NOT NULL,
  `text9` varchar(250) NOT NULL,
  `subT10` varchar(250) NOT NULL,
  `text10` varchar(250) NOT NULL,
  `subT11` varchar(250) NOT NULL,
  `text11` varchar(250) NOT NULL,
  `portafolio` varchar(250) NOT NULL,
  `descripcion3` varchar(250) NOT NULL,
  `all1` text NOT NULL,
  `app1` text NOT NULL,
  `card1` text NOT NULL,
  `web1` text NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `img4` varchar(250) NOT NULL,
  `img5` varchar(250) NOT NULL,
  `img6` varchar(250) NOT NULL,
  `img7` varchar(250) NOT NULL,
  `img8` varchar(250) NOT NULL,
  `img9` varchar(250) NOT NULL,
  `descripcion4` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL,
  `texto1` varchar(250) NOT NULL,
  `texto2` varchar(250) NOT NULL,
  `texto3` varchar(250) NOT NULL,
  `texto4` varchar(250) NOT NULL,
  `texto5` varchar(250) NOT NULL,
  `texto6` varchar(250) NOT NULL,
  `subTesti` varchar(250) NOT NULL,
  `descripcion5` varchar(250) NOT NULL,
  `testi1` varchar(250) NOT NULL,
  `nomTes1` varchar(205) NOT NULL,
  `testi2` varchar(250) NOT NULL,
  `nomTes2` varchar(205) NOT NULL,
  `testi3` varchar(250) NOT NULL,
  `nomTes3` varchar(205) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `descripcion6` varchar(250) NOT NULL,
  `face` text NOT NULL,
  `whatsapp` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planconta`;
INSERT INTO `planconta` (`id`, `imgPerfil`, `imgEncabezado`, `nombrePerfil`, `nombreEncab`, `descripcion1`, `about1`, `descripcion2`, `subT1`, `text1`, `birth`, `phone`, `city`, `age`, `degree`, `phemail`, `text`, `subT2`, `text2`, `subT3`, `text3`, `subT4`, `text4`, `subT5`, `text5`, `subT6`, `text6`, `subT7`, `text7`, `subT8`, `text8`, `subT9`, `text9`, `subT10`, `text10`, `subT11`, `text11`, `portafolio`, `descripcion3`, `all1`, `app1`, `card1`, `web1`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `descripcion4`, `service`, `texto1`, `texto2`, `texto3`, `texto4`, `texto5`, `texto6`, `subTesti`, `descripcion5`, `testi1`, `nomTes1`, `testi2`, `nomTes2`, `testi3`, `nomTes3`, `contact`, `descripcion6`, `face`, `whatsapp`, `instagram`, `twitter`, `activo`) VALUES
(1, '', 'imgPerfil.jpg', '', 'scfc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1');

DROP TABLE IF EXISTS `plancoworking`;
CREATE TABLE `plancoworking` (
  `id` int(11) NOT NULL,
  `colorEnca` varchar(45) NOT NULL,
  `tituloEnca` varchar(100) NOT NULL,
  `inicio` varchar(45) NOT NULL,
  `espacio` varchar(45) NOT NULL,
  `servicios` varchar(45) NOT NULL,
  `imgEncabezado` varchar(250) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `btnModal1` varchar(50) NOT NULL,
  `color2` varchar(45) NOT NULL,
  `titulo1` varchar(105) NOT NULL,
  `subtitulo1` varchar(100) NOT NULL,
  `subtitulo2` varchar(100) NOT NULL,
  `subtitulo3` varchar(100) NOT NULL,
  `color3` varchar(45) NOT NULL,
  `descrip1` varchar(100) NOT NULL,
  `descrip2` varchar(100) NOT NULL,
  `descrip3` varchar(100) NOT NULL,
  `color4T` varchar(100) NOT NULL,
  `titulo2` varchar(100) NOT NULL,
  `color5S` varchar(45) NOT NULL,
  `subD1` varchar(45) NOT NULL,
  `subS2` varchar(45) NOT NULL,
  `color6T` varchar(100) NOT NULL,
  `textSub1` varchar(100) NOT NULL,
  `textSub2` varchar(100) NOT NULL,
  `imgSub1` varchar(250) NOT NULL,
  `imgSub2` varchar(250) NOT NULL,
  `titulo3` varchar(105) NOT NULL,
  `btnPart1` varchar(100) NOT NULL,
  `btnPart2` varchar(100) NOT NULL,
  `color7P` varchar(100) NOT NULL,
  `textTitulo1` varchar(80) NOT NULL,
  `textTitulo2` varchar(80) NOT NULL,
  `textTitulo3` varchar(80) NOT NULL,
  `textTitulo4` varchar(80) NOT NULL,
  `textTitulo5` varchar(80) NOT NULL,
  `textTitulo6` varchar(80) NOT NULL,
  `textTitulo7` varchar(80) NOT NULL,
  `textTitulo8` varchar(80) NOT NULL,
  `color8P` varchar(100) NOT NULL,
  `precio1` varchar(45) NOT NULL,
  `precio2` varchar(45) NOT NULL,
  `precio3` varchar(45) NOT NULL,
  `precio4` varchar(45) NOT NULL,
  `precio5` varchar(45) NOT NULL,
  `precio6` varchar(45) NOT NULL,
  `precio7` varchar(45) NOT NULL,
  `precio8` varchar(45) NOT NULL,
  `color9D` varchar(45) NOT NULL,
  `punto11` varchar(80) NOT NULL,
  `punto12` varchar(80) NOT NULL,
  `punto21` varchar(80) NOT NULL,
  `punto22` varchar(80) NOT NULL,
  `punto31` varchar(80) NOT NULL,
  `punto32` varchar(80) NOT NULL,
  `punto41` varchar(80) NOT NULL,
  `punto42` varchar(80) NOT NULL,
  `punto51` varchar(80) NOT NULL,
  `punto52` varchar(80) NOT NULL,
  `punto61` varchar(80) NOT NULL,
  `punto62` varchar(80) NOT NULL,
  `punto71` varchar(80) NOT NULL,
  `punto72` varchar(80) NOT NULL,
  `punto81` varchar(80) NOT NULL,
  `punto82` varchar(80) NOT NULL,
  `color10` varchar(45) NOT NULL,
  `titulo4` varchar(45) NOT NULL,
  `colo11` varchar(45) NOT NULL,
  `subTi1` varchar(100) NOT NULL,
  `subTi2` varchar(100) NOT NULL,
  `subTi3` varchar(100) NOT NULL,
  `subTi4` varchar(100) NOT NULL,
  `subTi5` varchar(100) NOT NULL,
  `subTi6` varchar(100) NOT NULL,
  `color12` varchar(45) NOT NULL,
  `descTitulo1` varchar(105) NOT NULL,
  `descTitulo2` varchar(105) NOT NULL,
  `descTitulo3` varchar(105) NOT NULL,
  `descTitulo4` varchar(105) NOT NULL,
  `descTitulo5` varchar(105) NOT NULL,
  `descTitulo6` varchar(105) NOT NULL,
  `color13` varchar(45) NOT NULL,
  `titulo5` varchar(45) NOT NULL,
  `colo14` varchar(45) NOT NULL,
  `autor1` varchar(45) NOT NULL,
  `autor2` varchar(45) NOT NULL,
  `autor3` varchar(45) NOT NULL,
  `color15` varchar(45) NOT NULL,
  `opinion1` varchar(105) NOT NULL,
  `opinion2` varchar(105) NOT NULL,
  `opinion3` varchar(105) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(45) NOT NULL,
  `whatsapp` varchar(45) NOT NULL,
  `intagram` varchar(45) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `plancoworking`;
DROP TABLE IF EXISTS `plandiseno`;
CREATE TABLE `plandiseno` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `home1` varchar(250) NOT NULL,
  `about` varchar(250) NOT NULL,
  `portafolio` varchar(250) NOT NULL,
  `blog` varchar(250) NOT NULL,
  `colorEncabezado` varchar(100) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion1` varchar(250) NOT NULL,
  `imgEncabezado` varchar(250) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `imgContenido` varchar(250) NOT NULL,
  `color1` varchar(100) NOT NULL,
  `descripcion2` varchar(250) NOT NULL,
  `colorIconos` varchar(100) NOT NULL,
  `color2Primario` varchar(100) NOT NULL,
  `cajaT1` varchar(100) NOT NULL,
  `cajaT2` varchar(100) NOT NULL,
  `cajaT3` varchar(100) NOT NULL,
  `cajaT4` varchar(100) NOT NULL,
  `cajaT5` varchar(100) NOT NULL,
  `cajaT6` varchar(100) NOT NULL,
  `color3Secundario` varchar(100) NOT NULL,
  `subCaja1` varchar(100) NOT NULL,
  `subCaja2` varchar(100) NOT NULL,
  `subCaja3` varchar(100) NOT NULL,
  `subCaja4` varchar(100) NOT NULL,
  `subCaja5` varchar(100) NOT NULL,
  `subCaja6` varchar(100) NOT NULL,
  `color4` varchar(100) NOT NULL,
  `tituloPor` varchar(50) NOT NULL,
  `c1img` varchar(250) NOT NULL,
  `c1img2` varchar(250) NOT NULL,
  `c2img` varchar(250) NOT NULL,
  `c2img2` varchar(45) NOT NULL,
  `c3img` varchar(250) NOT NULL,
  `c3img2` varchar(45) NOT NULL,
  `color5` varchar(100) NOT NULL,
  `subTitulo` varchar(50) NOT NULL,
  `imgc1` varchar(250) NOT NULL,
  `imgc2` varchar(250) NOT NULL,
  `imgc3` varchar(250) NOT NULL,
  `color6` varchar(100) NOT NULL,
  `color7` varchar(100) NOT NULL,
  `hiperImg1` varchar(100) NOT NULL,
  `separa1` varchar(100) NOT NULL,
  `hiperImg2` varchar(100) NOT NULL,
  `separa2` varchar(100) NOT NULL,
  `hiperImg3` varchar(100) NOT NULL,
  `separa3` varchar(100) NOT NULL,
  `color8` varchar(100) NOT NULL,
  `all1` varchar(50) NOT NULL,
  `app1` varchar(50) NOT NULL,
  `card1` varchar(50) NOT NULL,
  `web1` varchar(50) NOT NULL,
  `color9` varchar(100) NOT NULL,
  `get` varchar(100) NOT NULL,
  `color10` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `tel` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `plandiseno`;
INSERT INTO `plandiseno` (`id`, `logo`, `home1`, `about`, `portafolio`, `blog`, `colorEncabezado`, `nombre`, `descripcion1`, `imgEncabezado`, `whatsapp`, `facebook`, `instagram`, `twitter`, `imgContenido`, `color1`, `descripcion2`, `colorIconos`, `color2Primario`, `cajaT1`, `cajaT2`, `cajaT3`, `cajaT4`, `cajaT5`, `cajaT6`, `color3Secundario`, `subCaja1`, `subCaja2`, `subCaja3`, `subCaja4`, `subCaja5`, `subCaja6`, `color4`, `tituloPor`, `c1img`, `c1img2`, `c2img`, `c2img2`, `c3img`, `c3img2`, `color5`, `subTitulo`, `imgc1`, `imgc2`, `imgc3`, `color6`, `color7`, `hiperImg1`, `separa1`, `hiperImg2`, `separa2`, `hiperImg3`, `separa3`, `color8`, `all1`, `app1`, `card1`, `web1`, `color9`, `get`, `color10`, `calle`, `ciudad`, `tel`, `email`, `fecha`, `activo`) VALUES
(10, 'logo', 'home1', 'about', 'portafolio', 'blog', '', 'nombre', 'descripcion1', 'imgEncabezado', 'whatsapp', 'facebook', 'instagram', 'twitter', 'imgContenido', '', 'descripcion2', '', '', 'cajaT1', 'cajaT2', 'cajaT3', 'cajaT4', 'cajaT5', 'cajaT6', '', 'subCaja1', 'subCaja2', 'subCaja3', 'subCaja4', 'subCaja5', 'subCaja6', '', 'tituloPor', 'c1img', '', 'c2img', '', 'c3img', '', '', 'subTitulo', 'imgc1', 'imgc2', 'imgc3', '', '', 'hiperImg1', 'separa1', 'hiperImg2', 'separa2', 'hiperImg3', 'separa3', '', 'all1', 'app1', 'card1', 'web1', '', 'get', '', 'call1e', 'ciudad', 'tel', 'email', '', '1'),
(11, 'logo', 'home1', 'about', 'portafolio', 'blog', '', 'nombre', 'descripcion1', 'imgEncabezado', 'whatsapp', 'facebook', 'instagram', 'twitter', 'imgContenido', '', 'descripcion2', '', '', 'cajaT1', 'cajaT2', 'cajaT3', 'cajaT4', 'cajaT5', 'cajaT6', '', 'subCaja1', 'subCaja2', 'subCaja3', 'subCaja4', 'subCaja5', 'subCaja6', '', 'tituloPor', 'c1img', '', 'c2img', '', 'c3img', '', '', 'subTitulo', 'imgc1', 'imgc2', 'imgc3', '', '', 'hiperImg1', 'separa1', 'hiperImg2', 'separa2', 'hiperImg3', 'separa3', '', 'all1', 'app1', 'card1', 'web1', '', 'get', '', 'call1e', 'ciudad', 'tel', 'email', '', '1'),
(12, 'logo.jpg', 'qqq', 'www', 'rrrr', 'tttt', '', 'yyyyy', 'uuuuu', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'https://www.whatsapp.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'imgContenido.jpg', '', 'aaaaaaaaaaaaaaaaaaaaa', '', '', 'sssssssssssssss', 'dddddddddddd', 'ffffffffffffff', 'gggggggggggg', 'hhhhhhhhhhhhhhhh', 'jjjjjjjjjjjjj', '', 'kkkkkkkkkkkkkk', 'llllllllllllllll', 'ññññññññññññ', 'zzzzzzzzzzz', 'xxxxxxxxxxxx', 'ccccccccccccc', '', 'vvvvvvvvvvvvvvvvvvvvvvv', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '', 'mmmmmmmmmmmm', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', '', '', 'qwer', 'asd', 'zxc', 'vfr', 'bhy', 'gtr', '', 'all', 'app', 'card', 'web', '', 'direc', '', 'sdasd', 'sdcszdcz', 'dvvsdvsd', 'dvdxv dxcv', '', '1'),
(13, 'logo.jpg', 'qqq', 'www', 'rrrr', 'tttt', '', 'yyyyy', 'uuuuu', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'https://www.whatsapp.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'imgContenido.jpg', '', 'aaaaaaaaaaaaaaaaaaaaa', '', '', 'sssssssssssssss', 'dddddddddddd', 'ffffffffffffff', 'gggggggggggg', 'hhhhhhhhhhhhhhhh', 'jjjjjjjjjjjjj', '', 'kkkkkkkkkkkkkk', 'llllllllllllllll', 'ññññññññññññ', 'zzzzzzzzzzz', 'xxxxxxxxxxxx', 'ccccccccccccc', '', 'vvvvvvvvvvvvvvvvvvvvvvv', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '', 'mmmmmmmmmmmm', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', '', '', 'qwer', 'asd', 'zxc', 'vfr', 'bhy', 'gtr', '', 'all', 'app', 'card', 'web', '', 'direc', '', 'sdasd', 'sdcszdcz', 'dvvsdvsd', 'dvdxv dxcv', '', '1'),
(14, 'logo.jpg', 'qwertyuiop', 'ásdfghjklññ', 'zxcvbnm', 'qwsdcv', '', 'INGENIERO DANIELA EVELYN', 'DISEÑADOR MOVIL', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'imgContenido.jpg', '', 'asdfgh', '', '', 'sdhfjghj', 'sfdgfgh', 'szdgfgh', 'sfdgfgh', 'sfdgfgh', 'dfgfghb', '', 'dgfgvhb', 'dgfgh', 'zfdxgfcgvh', 'fdxgfhgfh', 'dxgfghmj', 'dxgfcgnvmbj', '', 'dgxfcgvhmbj', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '', 'asfdghjh', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', '', '', 'szfdxgfchgvh', 'zdgxfhcgvhbjk', 'dfghjk', 'sedrtfyguh', 'rdftjgy', 'rh gjh', '', 'all', 'app', 'card', 'web', '', 'dfxfh', '', 'hfcdhcfnh', 'ncvhncvnh', '12345678888', 'usui_kyoutya15@hotmail.com', '', '1'),
(19, 'logo.jpg', 'qwertyuiop', 'ásdfghjklññ', 'zxcvbnm', 'qwsdcv', '', 'INGENIERO DANIELA EVELYN', 'DISEÑADOR MOVIL', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'imgContenido.jpg', '', 'asdfgh', '', '', 'sdhfjghj', 'sfdgfgh', 'szdgfgh', 'sfdgfgh', 'sfdgfgh', 'dfgfghb', '', 'dgfgvhb', 'dgfgh', 'zfdxgfcgvh', 'fdxgfhgfh', 'dxgfghmj', 'dxgfcgnvmbj', '', 'dgxfcgvhmbj', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '', 'asfdghjh', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', '', '', 'szfdxgfchgvh', 'zdgxfhcgvhbjk', 'dfghjk', 'sedrtfyguh', 'rdftjgy', 'rh gjh', '', 'all', 'app', 'card', 'web', '', 'dfxfh', '', 'hfcdhcfnh', 'ncvhncvnh', '12345678888', 'usui_kyoutya15@hotmail.com', '', '1'),
(20, 'logo.jpg', 'qwertyuiop', 'ásdfghjklññ', 'zxcvbnm', 'qwsdcv', '', 'INGENIERO DANIELA EVELYN', 'DISEÑADOR MOVIL', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'imgContenido.jpg', '', 'asdfgh', '', '', 'sdhfjghj', 'sfdgfgh', 'szdgfgh', 'sfdgfgh', 'sfdgfgh', 'dfgfghb', '', 'dgfgvhb', 'dgfgh', 'zfdxgfcgvh', 'fdxgfhgfh', 'dxgfghmj', 'dxgfcgnvmbj', '', 'dgxfcgvhmbj', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '', 'asfdghjh', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', '', '', 'szfdxgfchgvh', 'zdgxfhcgvhbjk', 'dfghjk', 'sedrtfyguh', 'rdftjgy', 'rh gjh', '', 'all', 'app', 'card', 'web', '', 'dfxfh', '', 'hfcdhcfnh', 'ncvhncvnh', '12345678888', 'usui_kyoutya15@hotmail.com', '', '1'),
(24, 'logo.jpg', 'sazqazsza', 'gvcvbc', 'bcgvbc', 'dgbcfb', '', 'DANIELA EVELYN', 'INGENIERO EN TECNOLOGIAS DE LA INFORMACION', 'imgEncabezado.jpg', 'https://www.whatsapp.com/FS', 'https://www.facebook.com/GGG', '', '', 'imgContenido.jpg', '', 'XCVBNDCFVGBHNJKJKHGJFHG', '', '', '1', '2', '3', '4', '5', '6', '', '11', '22', '33', '44', '55', '66', '', 'CAGZCXSHNANASMBXJM', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '', 'JEDCGBJDCBJSDJBC', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', '', '', 'AFSXHSAXHSAGX', 'XASBNXVHNVHASGSGXJAMGASNASV', 'GFCXSBNAVXNASVX', 'VXSHAXGMASNBMNASBXMASGBXM', 'DSCZDSC', 'VHMVNMBMJN', '', 'DBC DM', 'BM', 'BMB', 'BMBMBM', '', 'XVDSHXVASNB', '', 'HIDALGOSXHSA', 'TOLUCA MEXICO', '123576132', 'usuiFF_kyouya15@hotmail.com', '', '1'),
(25, 'logo.jpg', 'wsx', 'qws', 'qws', 'qws', '#c809c1', 'DANIELA EVELYN GARCIA GUTIERREZ', 'DISEÑADORA WEB', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'facebook.com', 'https://www.instagram.com/', 'https://www.twitter.com/', 'imgContenido.jpg', '#2950c7', 'Prueba pre final', '#e70808', '#097c1c', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', '#b88a0a', 'one', 'two', 'three', 'four', 'five', 'six', '#421e05', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#cf0772', 'Esta sigue siendo una prueba', '#bc0b0b', '#0a850c', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'hola', 'como estas?', 'hola2', 'como estas', 'hola3', 'como estas3', '#070dd5', 'todo', 'aplicacion', 'diseño', 'web', '#5a7b14', 'dirección', '#b93c3c', 'HIDALGO', 'toluca', '1234567890', 'alexijr14ki@gmail.com', '', '1'),
(26, 'logo.jpg', 'wsx', 'qws', 'qws', 'qws', '#c809c1', 'DANIELA EVELYN GARCIA GUTIERREZ', 'DISEÑADORA WEB', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'facebook.com', 'https://www.instagram.com/', 'https://www.twitter.com/', 'imgContenido.jpg', '#2950c7', 'Prueba pre final', '#e70808', '#097c1c', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', '#b88a0a', 'one', 'two', 'three', 'four', 'five', 'six', '#421e05', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#cf0772', 'Esta sigue siendo una prueba', '#bc0b0b', '#0a850c', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'hola', 'como estas?', 'hola2', 'como estas', 'hola3', 'como estas3', '#070dd5', 'todo', 'aplicacion', 'diseño', 'web', '#5a7b14', 'dirección', '#b93c3c', 'HIDALGO', 'toluca', '1234567890', 'alexijr14ki@gmail.com', '', '1'),
(27, 'logo.jpg', '1', '2', '3', '4', '#1e0368', 'GARCIA GUTIERREZ DANIELA EVELYN', 'Descripción 1', 'imgEncabezado.jpg', 'https://www.whatsapp.com/7226626180', 'https://www.facebook.com/degg', 'https://www.instagram.com/DANNY.', 'https://www.twitter.com/DANNY.', 'imgContenido.jpg', '#155a02', 'Embárcate en la aventura del anime con Crunchyroll, el mejor lugar donde podrás disfrutar de un enorme catálogo de series y películas de anime.', '#879801', '#5c0467', 'titulo de icono 1', 'titulo de icono 2', 'titulo de icono 3', 'titulo de icono 4', 'titulo de icono 5', 'titulo de icono 6', '#c809c1', 'informacion icono 1', 'informacion icono 2', 'informacion icono 3', 'informacion icono 4', 'informacion icono 5', 'informacion icono 6', '#07b09d', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#1e3a57', 'descripcion del portafolio', '#e40c0c', '#540808', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'imagen del titulo 1', 'descripcion de imagen del titulo 1', 'imagen de titulo 2', 'descripcion de imagen de titulo 2', 'imagen de titulo 3', 'descripcion de imagen de titulo 3', '#85a805', 'todo', 'aplicaciones', 'diseño', 'web', '#12108e', 'dirección', '#f1f1f1', 'hidalgo sn san andres cuexcontitlan', 'toluca', '7222336714', 'daniela.eve.garcia18@gmail.com', '', '1'),
(28, 'logo.jpg', '1', '2', '3', '4', '#1e0368', 'GARCIA GUTIERREZ DANIELA EVELYN', 'Descripción 1', 'imgEncabezado.jpg', 'https://www.whatsapp.com/7226626180', 'https://www.facebook.com/degg', 'https://www.instagram.com/DANNY.', 'https://www.twitter.com/DANNY.', 'imgContenido.jpg', '#155a02', 'Embárcate en la aventura del anime con Crunchyroll, el mejor lugar donde podrás disfrutar de un enorme catálogo de series y películas de anime.', '#879801', '#5c0467', 'titulo de icono 1', 'titulo de icono 2', 'titulo de icono 3', 'titulo de icono 4', 'titulo de icono 5', 'titulo de icono 6', '#c809c1', 'informacion icono 1', 'informacion icono 2', 'informacion icono 3', 'informacion icono 4', 'informacion icono 5', 'informacion icono 6', '#07b09d', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#1e3a57', 'descripcion del portafolio', '#e40c0c', '#540808', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'imagen del titulo 1', 'descripcion de imagen del titulo 1', 'imagen de titulo 2', 'descripcion de imagen de titulo 2', 'imagen de titulo 3', 'descripcion de imagen de titulo 3', '#85a805', 'todo', 'aplicaciones', 'diseño', 'web', '#12108e', 'dirección', '#4b2b06', 'hidalgo sn san andres cuexcontitlan', 'toluca', '7222336714', 'daniela.eve.garcia18@gmail.com', '', '1'),
(29, 'logo.jpg', '1', '2', '3', '4', '#1e0368', 'GARCIA GUTIERREZ DANIELA EVELYN', 'Descripción 1', 'imgEncabezado.jpg', 'https://www.whatsapp.com/7226626180', 'https://www.facebook.com/degg', 'https://www.instagram.com/DANNY.', 'https://www.twitter.com/DANNY.', 'imgContenido.jpg', '#155a02', 'Embárcate en la aventura del anime con Crunchyroll, el mejor lugar donde podrás disfrutar de un enorme catálogo de series y películas de anime.', '#879801', '#5c0467', 'titulo de icono 1', 'titulo de icono 2', 'titulo de icono 3', 'titulo de icono 4', 'titulo de icono 5', 'titulo de icono 6', '#c809c1', 'informacion icono 1', 'informacion icono 2', 'informacion icono 3', 'informacion icono 4', 'informacion icono 5', 'informacion icono 6', '#07b09d', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#1e3a57', 'descripcion del portafolio', '#e40c0c', '#540808', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'imagen del titulo 1', 'descripcion de imagen del titulo 1', 'imagen de titulo 2', 'descripcion de imagen de titulo 2', 'imagen de titulo 3', 'descripcion de imagen de titulo 3', '#85a805', 'todo', 'aplicaciones', 'diseño', 'web', '#12108e', 'dirección', '#4b2b06', 'hidalgo sn san andres cuexcontitlan', 'toluca', '7222336714', 'daniela.eve.garcia18@gmail.com', '', '1'),
(30, 'logo.jpg', '1', '2', '3', '4', '#1e0368', 'GARCIA GUTIERREZ DANIELA EVELYN', 'Descripción 1', 'imgEncabezado.jpg', 'https://www.whatsapp.com/7226626180', 'https://www.facebook.com/degg', 'https://www.instagram.com/DANNY.', 'https://www.twitter.com/DANNY.', 'imgContenido.jpg', '#155a02', 'Embárcate en la aventura del anime con Crunchyroll, el mejor lugar donde podrás disfrutar de un enorme catálogo de series y películas de anime.', '#879801', '#5c0467', 'titulo de icono 1', 'titulo de icono 2', 'titulo de icono 3', 'titulo de icono 4', 'titulo de icono 5', 'titulo de icono 6', '#c809c1', 'informacion icono 1', 'informacion icono 2', 'informacion icono 3', 'informacion icono 4', 'informacion icono 5', 'informacion icono 6', '#07b09d', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#1e3a57', 'descripcion del portafolio', '#e40c0c', '#540808', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'imagen del titulo 1', 'descripcion de imagen del titulo 1', 'imagen de titulo 2', 'descripcion de imagen de titulo 2', 'imagen de titulo 3', 'descripcion de imagen de titulo 3', '#85a805', 'todo', 'aplicaciones', 'diseño', 'web', '#12108e', 'dirección', '#4b2b06', 'hidalgo sn san andres cuexcontitlan', 'toluca', '7222336714', 'daniela.eve.garcia18@gmail.com', '', '1'),
(31, 'logo.jpg', '1', '2', '3', '4', '#1e0368', 'GARCIA GUTIERREZ DANIELA EVELYN', 'Descripción 1', 'imgEncabezado.jpg', 'https://www.whatsapp.com/7226626180', 'https://www.facebook.com/degg', 'https://www.instagram.com/DANNY.', 'https://www.twitter.com/DANNY.', 'imgContenido.jpg', '#155a02', 'Embárcate en la aventura del anime con Crunchyroll, el mejor lugar donde podrás disfrutar de un enorme catálogo de series y películas de anime.', '#879801', '#5c0467', 'titulo de icono 1', 'titulo de icono 2', 'titulo de icono 3', 'titulo de icono 4', 'titulo de icono 5', 'titulo de icono 6', '#c809c1', 'informacion icono 1', 'informacion icono 2', 'informacion icono 3', 'informacion icono 4', 'informacion icono 5', 'informacion icono 6', '#07b09d', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#1e3a57', 'descripcion del portafolio', '#e40c0c', '#540808', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'imagen del titulo 1', 'descripcion de imagen del titulo 1', 'imagen de titulo 2', 'descripcion de imagen de titulo 2', 'imagen de titulo 3', 'descripcion de imagen de titulo 3', '#85a805', 'todo', 'aplicaciones', 'diseño', 'web', '#12108e', 'dirección', '#4b2b06', 'hidalgo sn san andres cuexcontitlan', 'toluca', '7222336714', 'daniela.eve.garcia18@gmail.com', '', '1'),
(32, 'logo.jpg', '1', '2', '3', '4', '#1e0368', 'GARCIA GUTIERREZ DANIELA EVELYN', 'Descripción 1', 'imgEncabezado.jpg', 'https://www.whatsapp.com/7226626180', 'https://www.facebook.com/degg', 'https://www.instagram.com/DANNY.', 'https://www.twitter.com/DANNY.', 'imgContenido.jpg', '#155a02', 'Embárcate en la aventura del anime con Crunchyroll, el mejor lugar donde podrás disfrutar de un enorme catálogo de series y películas de anime.', '#879801', '#5c0467', 'titulo de icono 1', 'titulo de icono 2', 'titulo de icono 3', 'titulo de icono 4', 'titulo de icono 5', 'titulo de icono 6', '#c809c1', 'informacion icono 1', 'informacion icono 2', 'informacion icono 3', 'informacion icono 4', 'informacion icono 5', 'informacion icono 6', '#07b09d', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#1e3a57', 'descripcion del portafolio', '#e40c0c', '#540808', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'imagen del titulo 1', 'descripcion de imagen del titulo 1', 'imagen de titulo 2', 'descripcion de imagen de titulo 2', 'imagen de titulo 3', 'descripcion de imagen de titulo 3', '#85a805', 'todo', 'aplicaciones', 'diseño', 'web', '#12108e', 'dirección', '#4b2b06', 'hidalgo sn san andres cuexcontitlan', 'toluca', '7222336714', 'daniela.eve.garcia18@gmail.com', '', '1'),
(33, 'logo.jpg', '1', '2', '3', '4', '#1e0368', 'GARCIA GUTIERREZ DANIELA EVELYN', 'Descripción 1', 'imgEncabezado.jpg', 'https://www.whatsapp.com/7226626180', 'https://www.facebook.com/degg', 'https://www.instagram.com/DANNY.', 'https://www.twitter.com/DANNY.', 'imgContenido.jpg', '#155a02', 'Embárcate en la aventura del anime con Crunchyroll, el mejor lugar donde podrás disfrutar de un enorme catálogo de series y películas de anime.', '#879801', '#5c0467', 'titulo de icono 1', 'titulo de icono 2', 'titulo de icono 3', 'titulo de icono 4', 'titulo de icono 5', 'titulo de icono 6', '#c809c1', 'informacion icono 1', 'informacion icono 2', 'informacion icono 3', 'informacion icono 4', 'informacion icono 5', 'informacion icono 6', '#07b09d', 'PORTAFOLIO', 'c1img.jpg', '', 'c2img.jpg', '', 'c3img.jpg', '', '#1e3a57', 'descripcion del portafolio', '#e40c0c', '#540808', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'imagen del titulo 1', 'descripcion de imagen del titulo 1', 'imagen de titulo 2', 'descripcion de imagen de titulo 2', 'imagen de titulo 3', 'descripcion de imagen de titulo 3', '#85a805', 'todo', 'aplicaciones', 'diseño', 'web', '#12108e', 'dirección', '#4b2b06', 'hidalgo sn san andres cuexcontitlan', 'toluca', '7222336714', 'daniela.eve.garcia18@gmail.com', '', '1'),
(48, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024/09/05 01:48:02', '1'),
(49, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024/09/05 01:49:00', '1'),
(50, 'logo.jpg', 'g', 'g', 'g', 'g', '#c38d8d', 'bn', 'bn', '', 'bn n v', 'n bv nbv', 'n bv', '', '', '#d92020', '', '#f1f1f1', '#f1f1f1', 'hj', 'bb', 'hb', 'h', 'bh', 'b', '#460606', '', '', 'jj', 'kn', 'kjn', 'kjn', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/05 01:50:37', '1'),
(51, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024/09/05 01:52:48', '1'),
(52, 'logo.jpg', 'g', 'g', 'g', 'g', '#c38d8d', 'bn', 'bn', '', 'bn n v', 'n bv nbv', 'n bv', '', '', '#d92020', '', '#f1f1f1', '#f1f1f1', 'hj', 'bb', 'hb', 'h', 'bh', 'b', '#460606', '', '', 'jj', 'kn', 'kjn', 'kjn', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/05 02:01:20', '1'),
(53, 'logo.jpg', 'g', 'g', 'g', 'g', '#c38d8d', 'bn', 'bn', '', 'bn n v', 'n bv nbv', 'n bv', '', '', '#d92020', '', '#f1f1f1', '#f1f1f1', 'hj', 'bb', 'hb', 'h', 'bh', 'b', '#460606', '', '', 'jj', 'kn', 'kjn', 'kjn', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/05 02:03:01', '1'),
(54, 'logo.png', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', 'jnghvbj', 'ngvbnhgvb', 'gcvhngcvh', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/05 02:27:32', '1'),
(55, 'logo.jpg', 'g', 'g', 'g', 'g', '#c38d8d', 'bn', 'bn', '', 'bn n v', 'n bv nbv', 'n bv', '', '', '#d92020', '', '#f1f1f1', '#f1f1f1', 'hj', 'bb', 'hb', 'h', 'bh', 'b', '#460606', '', '', 'jj', 'kn', 'kjn', 'kjn', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/05 02:33:09', '1'),
(56, 'logo.jpg', 'g', 'g', 'g', 'g', '#c38d8d', 'bn', 'bn', '', 'bn n v', 'n bv nbv', 'n bv', '', '', '#d92020', '', '#f1f1f1', '#f1f1f1', 'hj', 'bb', 'hb', 'h', 'bh', 'b', '#460606', '', '', 'jj', 'kn', 'kjn', 'kjn', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/05 02:33:42', '1'),
(57, 'logo.jpg', 'g', 'g', 'g', 'g', '#c38d8d', 'bn', 'bn', '', 'bn n v', 'n bv nbv', 'n bv', '', '', '#d92020', '', '#f1f1f1', '#f1f1f1', 'hj', 'bb', 'hb', 'h', 'bh', 'b', '#460606', 'hjghjhb', 'jhbjbhjbh', 'jj', 'kn', 'kjn', 'kjn', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '#f1f1f1', '', '', 'jhbjhbjhbj', 'hjjhb', '', '', '#f1f1f1', 'mjkb nh', 'jkmhb njkmh', 'bnjmkbvj', 'mh bnjhbn', '#f1f1f1', 'jhbv gjvhg', '#f1f1f1', 'hbjhbvj', 'hbj', 'jhbj', 'hjhbjhbj', '2024/09/05 02:56:33', '1'),
(58, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024/09/05 04:17:53', '1'),
(59, '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', 'fg', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/10 10:47:58', '1'),
(60, 'logo.jpg', 'ghfh', 'fghhf', 'ghf', 'ghfgh', '#9d2525', 'thfhftg', 'hfghfgh', 'imgEncabezado.jpg', '', '', '', '', 'imgContenido.png', '#d28383', 'b,mbn,', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/10 11:35:27', '1'),
(61, 'logo.jpg', 'q', 'q', 'q', 'q', '#e90707', 'daniela', 'pprueba final de plantilla', 'imgEncabezado.jpg', 'https://www.whatsapp.com/dano', 'https://www.facebook.com/dg', 'https://www.instagram.com/pr', 'https://www.x.com/', 'imgContenido.png', '#0b0a0a', 'sigue siendo una prueba', '#07b305', '#b5ef15', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '#a26b0b', 'sigue', 'sigue', 'sigue', 'sigue', 'sigue', 'sigue', '#0805a3', 'imagenes', 'c1img.jpg', 'c2img.png', 'c3img.jpg', 'c1img2.jpg', 'c2img2.jpg', 'c3img2.jpg', '#1f81b2', 'hiperimagenes', '#b92d77', '#b75757', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'hola', 'hola1', 'holaa', 'holaa2', 'holaaa', 'holaaa3', '#543a03', 'todo', 'parte 1', 'parte2', 'parte3', '#d3a6a6', 'sin colot', '#370349', 'sdfg', 'sdfgh', '0987654321', 'asdf@gmail.com', '2024/09/10 12:11:16', '1'),
(62, '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/10 12:21:17', '1'),
(63, 'logo.jpg', 'fsdfas', '', 'vhgv', 'hgv', '#da0b0b', 'dfvsdfdf', 'sdfsdfsdfsdfsdf', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'https://www.facebook.com/degg', 'iygyg', 'https://web.whatsapp.com/', 'imgContenido.jpg', '#c60606', 'dfsedfserdfg', '#d20404', '#cd0a0a', 'rfgdrfgdf', 'gdrfgrdf', 'g', 'bgib', 'b', 'bjhh', '#c40e0e', 'vb jhv jh', 'v jhvbjhb', 'vjhv jh', 'vjhb', 'jh', 'v', '#e30202', 'uijbnujbniji', 'c1img.jpg', 'c2img.jpg', 'c3img.jpg', 'c1img2.jpg', 'c2img2.jpg', 'c3img2.jpg', '#df1616', 'hvjkgbkijhn', '#d51010', '#d60505', 'imgc1.jpg', 'imgc2.jpg', 'imgc3.jpg', 'ghfhnfghn', 'ghfghfg', 'ghfgh', 'fghfghfgh', 'gfhf', 'fghfghg', '#da0b0b', 'gfhfghfg', 'hfghfg', 'hfgh', 'fghfgyh', '#d00606', 'fghfghfg', '#dc0909', 'fghfh', 'fghfghfgh', '1594872630', 'fgbvfbfd@gmail.com', '2024/09/10 05:47:03', '1'),
(64, '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/10 06:15:16', '1'),
(65, 'logo.jpg', 'PRUEBA', 'PRUEBA', 'PUREBS', 'PRUEBA', '#de1212', 'PRUEBAS', 'PRUEBA', 'imgEncabezado.jpg', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/12 11:48:27', '1'),
(66, '', 'PRUEBA', '<br /><b>Notice</b>:  Undefined variable: about1 in <b>C:xamppServerhtdocsdigitalizandotePlantillas	d1landing-form-edit.php</b> on line <b>123</b><br />', 'PUREBS', 'PRUEBA', '#12de2a', 'PRUEBAS', 'PRUEBA', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#000000', '#000000', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/12 11:48:52', '1'),
(67, '', 'fsdfas', '<br /><b>Notice</b>:  Undefined variable: about1 in <b>C:xamppServerhtdocsdigitalizandotePlantillas	d1landing-form-edit.php</b> on line <b>123</b><br />', 'vhgv', 'hgv', '#da0b0b', 'prueba cambio', 'sdfsdfsdfsdfsdf', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'https://www.facebook.com/degg', 'iygyg', 'https://web.whatsapp.com/', 'imgContenido.jpg', '#c60606', 'dfsedfserdfg', '#d20404', '#cd0a0a', 'rfgdrfgdf', 'gdrfgrdf', 'g', 'bgib', 'b', 'bjhh', '#c40e0e', 'vb jhv jh', 'v jhvbjhb', 'vjhv jh', 'vjhb', 'jh', 'v', '#e30202', '', '', '', '', '', '', '', '#df1616', 'hvjkgbkijhn', '#000000', '#000000', '', '', '', 'ghfhnfghn', '', 'ghfgh', '', 'gfhf', '', '#da0b0b', '', 'hfghfg', 'hfgh', '', '#d00606', 'fghfghfg', '#dc0909', 'fghfh', '', '1594872630', 'fgbvfbfd@gmail.com', '2024/09/12 11:52:55', '1'),
(68, '', 'PRUEBA', 'ya no', 'PUREBS', 'PRUEBA', '#de1212', 'adgkk', 'PRUEBA', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#000000', '#000000', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/12 11:55:37', '1'),
(69, '', 'PRUEBA', 'PRUEBA', 'PUREBS', 'PRUEBA', '#de1212', '122344545', 'asdszfxdf', 'imgEncabezado.jpg', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#000000', '#000000', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/12 11:56:08', '1'),
(70, '', 'PRUEBA', 'PRUEBA', 'PUREBS', 'PRUEBA', '#de1212', 'Pssssssssssssssss', 'PRUEBA', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#000000', '#000000', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/12 02:23:12', '1'),
(71, '', 'yhrth', 'thrth', 'hrt', 'hr', '#d20f0f', 'rhtrhfghtf', 'hfghf', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/12 02:24:09', '1'),
(72, '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/12 02:32:36', '1'),
(73, 'logo.jpg', 'q', 'q', 'q', 'q', '#f1f1f1', 'q', 'q', 'imgEncabezado.jpg', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/12 02:40:42', '1'),
(74, 'logo.jpg', 'wwwwwwww', 'w', 'ww', 'w', '#f1f1f1', '', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/18 01:27:20', '1'),
(75, 'logo.jpg', 'dani', 'bn gh', 'dxfgcfg', 'fcdghc', '#c41c1c', 'xfxchfchb mn', 'jkb jknb jkn ,mn ,', 'imgEncabezado.jpg', 'https://www.whatsapp.com/', 'https://www.facebook.com/degg', 'https://www.instagram.com/', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/18 03:49:58', '1'),
(76, 'logo.jpg', 'gvgh', 'gcgcgb', 'bvb', 'ghchnvh', '#f1f1f1', 'q', 'q', '', '', '', '', '', '', '#2f2828', 'mn mn ,m k,m .l', '#760404', '#48b918', 'mn nb', 'ghcngc', 'vjhvg', 'jhcvghcfg', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#000000', '#000000', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/18 03:51:00', '1'),
(77, '', 'q', 'q', 'q', 'q', '#f1f1f1', 'q', 'q', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', 'nb j', '', '', '', '#dc0909', '', '', 'mn m ,', '', '', '', '#51a11b', 'm ,m m', '', '', '', '', '', '', '#6a1616', '', '#000000', '#000000', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/18 03:52:36', '1'),
(78, '', '', '', '', '', '#f1f1f1', '', '', '', 'https://www.whatsapp.com/FS', '', 'https://www.instagram.com/', 'https://www.twitter.com/', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/18 05:21:38', '1'),
(79, '', '', '', '', '', '#c91313', '', '', '', 'https://www.whatsapp.com/', '', 'https://www.instagram.com/', 'https://www.twitter.com/', '', '#ce2222', '', '#cd0e0e', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/18 05:22:06', '1'),
(80, 'logo.jpg', 'pruebass', 'pruebass', 'pruebass', 'pruebass', '#d8e30d', 'pruebass', 'pruebass', 'imgEncabezado.jpg', '', 'https://www.facebook.com/DANNY%LEN', 'https://www.instagram.com/', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/19 10:55:02', '1'),
(81, '', '', '', '', '', '#f60909', 'ingeniero mecatrónico jose huerta', 'arregrlo todo tipo de maquinarias', 'imgEncabezado.png', '', 'https://www.facebook.com/Huerta%Jose', 'https://www.instagram.com/MECATRONICO', 'https://www.twitter.com/ING.HUERTA', 'imgContenido.jpg', '#3e0dc5', 'SOY INGENIERO EN MECATRONICA Y MAQUINARIA, CUENTO CON EXPERIENCIA EN 2 EMPRESAS', '#0b11b1', '#12120c', 'PUNTUALIDAD EN EMPLEOS', 'CUMPLIMIENTO DE ACTIVIDADES', 'ALTOS ESTANDARES', 'VISITAS Y ARREGLOS DE PROBLEMAS', 'TRABAJO DE DIA', 'HORARIOS DISPOBLES', '#f1f1f1', '', '', '', '', '', '', '#8e0b0b', 'MIS EVIDENCIAS', '', '', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '#f1f1f1', '', '', '', '', '', '', '', '', '', '#f1f1f1', '', '', '', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/09/19 01:16:44', '1'),
(82, '', 'fdghjtgrerweq', 'gdhfgfdwe', 'qewrttdhfgfweqw', 'ertshdyjhtgrfed', '#f1f1f1', 'gfdfhfgre', 'tyhhtsgdrfa', 'imgEncabezado.jpg', 'gfdhfd', 'sgdhfjgf', 'dhjgfds', 'hjgg', '', '#f1f1f1', 'hgfjjfdj', '#f1f1f1', '#f1f1f1', 'jhgfkhg', 'dfgkhdhgfkh', 'hfgkhj', 'fjkh', 'jfhgjgfhj', 'hgfjfghj', '#f1f1f1', 'jgfhjfg', 'hjgfhj', 'gfhjgh', 'jgfhjfj', 'hgjfghj', 'hgfjfhj', '#ef0101', 'fghjgfhjfghj', '', '', '', '', '', '', '#f1f1f1', 'jhgfghj', '#f1f1f1', '#f1f1f1', '', '', '', 'jghjgh', 'jgfhjhgfj', 'hgfjfghgfhjfg', 'hgjfghjghgfhj', 'hjgjfg', 'jfghjfghj', '#f1f1f1', 'jhgjf', 'jfghj', 'jgfhj', 'fghj', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/10/17 06:42:32', '1'),
(83, '', 'fdghjtgrerweq', 'gdhfgfdwe', 'qewrttdhfgfweqw', 'ertshdyjhtgrfed', '#f1f1f1', 'gfdfhfgre', 'tyhhtsgdrfa', 'imgEncabezado.jpeg', 'gfdhfd', 'sgdhfjgf', 'dhjgfds', 'hjgg', '', '#f1f1f1', 'hgfjjfdj', '#f1f1f1', '#f1f1f1', 'jhgfkhg', 'dfgkhdhgfkh', 'hfgkhj', 'fjkh', 'jfhgjgfhj', 'hgfjfghj', '#f1f1f1', 'jgfhjfg', 'hjgfhj', 'gfhjgh', 'jgfhjfj', 'hgjfghj', 'hgfjfhj', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', 'jhgfghj', '#f1f1f1', '#f1f1f1', '', '', '', 'jghjgh', '', 'hgfjfghgfhjfg', '', 'hjgjfg', '', '#f1f1f1', '', 'jfghj', 'jgfhj', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/10/17 06:48:32', '1'),
(84, '', 'fdghjtgrerweq', 'gdhfgfdwe', 'qewrttdhfgfweqw', 'ertshdyjhtgrfed', '#f1f1f1', 'gfdfhfgre', 'tyhhtsgdrfa', 'imgEncabezado.jpg', 'gfdhfd', 'sgdhfjgf', 'dhjgfds', 'hjgg', '', '#f1f1f1', 'hgfjjfdj', '#f1f1f1', '#f1f1f1', 'jhgfkhg', 'dfgkhdhgfkh', 'hfgkhj', 'fjkh', 'jfhgjgfhj', 'hgfjfghj', '#f1f1f1', 'jgfhjfg', 'hjgfhj', 'gfhjgh', 'jgfhjfj', 'hgjfghj', 'hgfjfhj', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', 'jhgfghj', '#f1f1f1', '#f1f1f1', '', '', '', 'jghjgh', '', 'hgfjfghgfhjfg', '', 'hjgjfg', '', '#f1f1f1', '', 'jfghj', 'jgfhj', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/10/17 06:58:48', '1'),
(85, '', 'fdghjtgrerweq', 'gdhfgfdwe', 'qewrttdhfgfweqw', 'ertshdyjhtgrfed', '#f1f1f1', 'gfdfhfgre', 'tyhhtsgdrfa', '', 'gfdhfd', 'sgdhfjgf', 'dhjgfds', 'hjgg', '', '#f1f1f1', 'hgfjjfdj', '#f1f1f1', '#f1f1f1', 'jhgfkhg', 'dfgkhdhgfkh', 'hfgkhj', 'fjkh', 'jfhgjgfhj', 'hgfjfghj', '#f1f1f1', 'jgfhjfg', 'hjgfhj', 'gfhjgh', 'jgfhjfj', 'hgjfghj', 'hgfjfhj', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', 'jhgfghj', '#f1f1f1', '#f1f1f1', '', '', '', 'jghjgh', '', 'hgfjfghgfhjfg', '', 'hjgjfg', '', '#f1f1f1', '', 'jfghj', 'jgfhj', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/10/24 10:26:15', '1'),
(86, '', 'fdghjtgrerweq', 'gdhfgfdwe', 'qewrttdhfgfweqw', 'ertshdyjhtgrfed', '#f1f1f1', 'gfdfhfgre', 'tyhhtsgdrfa', 'imgEncabezado.jpg', 'gfdhfd', 'sgdhfjgf', 'dhjgfds', 'hjgg', '', '#f1f1f1', 'hgfjjfdj', '#f1f1f1', '#f1f1f1', 'jhgfkhg', 'dfgkhdhgfkh', 'hfgkhj', 'fjkh', 'jfhgjgfhj', 'hgfjfghj', '#f1f1f1', 'jgfhjfg', 'hjgfhj', 'gfhjgh', 'jgfhjfj', 'hgjfghj', 'hgfjfhj', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', 'jhgfghj', '#f1f1f1', '#f1f1f1', '', '', '', 'jghjgh', '', 'hgfjfghgfhjfg', '', 'hjgjfg', '', '#f1f1f1', '', 'jfghj', 'jgfhj', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/10/24 10:27:42', '0'),
(87, '', 'fdghjtgrerweq', 'gdhfgfdwe', 'qewrttdhfgfweqw', 'ertshdyjhtgrfed', '#f1f1f1', 'Encastin', 'tyhhtsgdrfa', 'imgEncabezado.jpg', 'gfdhfd', 'sgdhfjgf', 'dhjgfds', 'hjgg', '', '#f1f1f1', 'hgfjjfdj', '#f1f1f1', '#f1f1f1', 'jhgfkhg', 'dfgkhdhgfkh', 'hfgkhj', 'fjkh', 'jfhgjgfhj', 'hgfjfghj', '#f1f1f1', 'jgfhjfg', 'hjgfhj', 'gfhjgh', 'jgfhjfj', 'hgjfghj', 'hgfjfhj', '#f1f1f1', '', '', '', '', '', '', '', '#f1f1f1', 'jhgfghj', '#f1f1f1', '#f1f1f1', '', '', '', 'jghjgh', '', 'hgfjfghgfhjfg', '', 'hjgjfg', '', '#f1f1f1', '', 'jfghj', 'jgfhj', '', '#f1f1f1', '', '#f1f1f1', '', '', '', '', '2024/10/24 10:40:54', '1');

DROP TABLE IF EXISTS `planentrenador`;
CREATE TABLE `planentrenador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `cargo` varchar(250) NOT NULL,
  `imgEncabezado` varchar(250) NOT NULL,
  `ints` varchar(250) NOT NULL,
  `what` varchar(250) NOT NULL,
  `face` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `about1` varchar(250) NOT NULL,
  `descAbout` varchar(250) NOT NULL,
  `imgPerfil` varchar(250) NOT NULL,
  `subTituloA` varchar(250) NOT NULL,
  `descSub` varchar(250) NOT NULL,
  `birthday` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `degree` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `descripcion2` varchar(250) NOT NULL,
  `sumary` varchar(250) NOT NULL,
  `descripcion3` varchar(250) NOT NULL,
  `nombreSumary` varchar(45) NOT NULL,
  `descSumary` varchar(250) NOT NULL,
  `nombreEscu` varchar(250) NOT NULL,
  `descEducacion` varchar(250) NOT NULL,
  `nombreProf` varchar(250) NOT NULL,
  `descProfe` varchar(250) NOT NULL,
  `nombreExp` varchar(45) NOT NULL,
  `descExpe` varchar(250) NOT NULL,
  `portaFo` varchar(250) NOT NULL,
  `descripcionPort` varchar(250) NOT NULL,
  `all1` varchar(45) NOT NULL,
  `app1` varchar(45) NOT NULL,
  `card1` varchar(45) NOT NULL,
  `web1` varchar(45) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `img4` varchar(250) NOT NULL,
  `img5` varchar(250) NOT NULL,
  `img6` varchar(250) NOT NULL,
  `img7` varchar(250) NOT NULL,
  `img8` varchar(250) NOT NULL,
  `img9` varchar(250) NOT NULL,
  `tituloServi` varchar(250) NOT NULL,
  `descServ` varchar(250) NOT NULL,
  `loremIpsum` varchar(250) NOT NULL,
  `descLorem` varchar(250) NOT NULL,
  `sedPer` varchar(250) NOT NULL,
  `descSed` varchar(250) NOT NULL,
  `magni` varchar(250) NOT NULL,
  `descMagni` varchar(250) NOT NULL,
  `localidad` varchar(250) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planentrenador`;
INSERT INTO `planentrenador` (`id`, `nombre`, `cargo`, `imgEncabezado`, `ints`, `what`, `face`, `twitter`, `about1`, `descAbout`, `imgPerfil`, `subTituloA`, `descSub`, `birthday`, `phone`, `city`, `age`, `degree`, `email`, `descripcion2`, `sumary`, `descripcion3`, `nombreSumary`, `descSumary`, `nombreEscu`, `descEducacion`, `nombreProf`, `descProfe`, `nombreExp`, `descExpe`, `portaFo`, `descripcionPort`, `all1`, `app1`, `card1`, `web1`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `tituloServi`, `descServ`, `loremIpsum`, `descLorem`, `sedPer`, `descSed`, `magni`, `descMagni`, `localidad`, `activo`) VALUES
(1, 'DANIELA EVELYN GARCIA GUTIERREZ', 'ing tecnologias de la informacion', 'imgEncabezado.jpg', 'https://www.instagram.com/', 'https://web.whatsapp.com/', 'https://web.facebook.com/', 'https://www.twitter.com/', '', '', 'imgPerfil.jpg', 'las letras si cumplen', 'todos los datos se ingresan de manera correcta', '27 de Julio', '7226636187', 'Toluca, Mexico', '2024', 'Ingenieria', 'dani.eve.garcia18@gmail.com', 'los datos son ingresados adecuadamente sin falta', 'Resumen sobre mi', 'el titulo y la descripción van bien', 'Daniela evelyn garcia gutierrez', 'estudiante universitaria', 'Universidad politecnica del valle de toluca', 'universidad donde reside mi estadia', 'net rabbit', 'empresa de desarrollo web', 'segunda empresa profesional', 'segunda descripcion', 'mi portafolio o imagenes', 'se muestra la descripcion de los traabajos con evidencias', 'todo', 'desarrollo', 'web', 'aplicaciones', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 'img7.jpg', 'img8.jpg', 'img9.jpg', 'mis servicios', 'se muestran los servicios que ofrezco', 'servicio 1', 'este es el servicio 1', 'servicio 2', 'este es el seervicio 2', 'servicio 3', 'este es el servicio 3', 'Toluca, Estado de Mexico', 1),
(2, 'DANIELA EVELYN GARCIA GUTIERREZ', 'ing tecnologias de la informacion', 'imgEncabezado.jpg', 'https://www.instagram.com/', 'https://web.whatsapp.com/', 'https://facebook.com/', 'https://www.twitter.com/', '', '', 'imgPerfil.jpg', 'sub titulo dos', 'vvcavckhbckjasbkjasdkjsandjnasjkc', '27 de Julio', '7226636187', 'toluca', '2024', 'doctorado', 'usui_kyouya15@hotmail.com', 'sbcahsvcbc kjacbksdgbvhsdbckadhc', 'resumen', 'saczahcbzjcb,hyusdbchdcds', 'Daniela evelyn garcia gutierrez', 'estudiante universitaria', 'Universidad politecnica del valle de toluca', 'universidad donde reside mi estadia', 'net rabbit', 'empresa de desarrollo web', 'segunda empresa profesional', 'segunda descripcion', 'cdsvsv', 'zvszdvszfxv', 'sdfxvzsdvsdv', 'sdfvdsvs', 'dsfdsfs', 'dfsdf', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 'img7.jpg', 'img8.jpg', 'img9.jpg', 'servicios', 'bdshcbsjdkclkzxncjkzcjdbjsdk', 'jvvnsdlnvl', 'fksdv kdnvlksn', 'vdjfkvnsjdkn', 'vjkdfvn lkdvn', 'vsjkdvn jskdn', 'vjdksvcn sjkdvn', 'Toluca, Estado de Mexico', 1),
(3, 'DANIELA EVELYN GARCIA GUTIERREZ', 'ing tecnologias de la informacion', 'imgEncabezado.jpg', 'https://www.instagram.com/', 'https://web.whatsapp.com/', 'https://facebook.com/', 'https://www.twitter.com/', '', '', 'imgPerfil.jpg', 'sub titulo dos', 'vvcavckhbckjasbkjasdkjsandjnasjkc', '27 de Julio', '7226636187', 'toluca', '2024', 'doctorado', 'usui_kyouya15@hotmail.com', 'sbcahsvcbc kjacbksdgbvhsdbckadhc', 'resumen', 'saczahcbzjcb,hyusdbchdcds', 'Daniela evelyn garcia gutierrez', 'estudiante universitaria', 'Universidad politecnica del valle de toluca', 'universidad donde reside mi estadia', 'net rabbit', 'empresa de desarrollo web', 'segunda empresa profesional', 'segunda descripcion', 'cdsvsv', 'zvszdvszfxv', 'sdfxvzsdvsdv', 'sdfvdsvs', 'dsfdsfs', 'dfsdf', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 'img7.jpg', 'img8.jpg', 'img9.jpg', 'servicios', 'bdshcbsjdkclkzxncjkzcjdbjsdk', 'jvvnsdlnvl', 'fksdv kdnvlksn', 'vdjfkvnsjdkn', 'vjkdfvn lkdvn', 'vsjkdvn jskdn', 'vjdksvcn sjkdvn', 'Toluca, Estado de Mexico', 1),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(5, 'gdgdx', 'gdgfgfdg', 'imgEncabezado.jpg', 'https://www.instagram.com/', 'https://web.whatsapp.com/', 'https://facebook.com/', 'https://www.twitter.com/', '', '', 'imgPerfil.png', 'xvxvg', 'fvxbgfc', 'cgfcgdf', '1594872630', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);

DROP TABLE IF EXISTS `planestilista`;
CREATE TABLE `planestilista` (
  `idplanEstilista` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `negocio` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `whatsapp` varchar(300) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `imgEnca` varchar(45) NOT NULL,
  `servicios` varchar(45) NOT NULL,
  `servT1` varchar(100) NOT NULL,
  `serv1` varchar(300) NOT NULL,
  `servT2` varchar(100) NOT NULL,
  `serv2` varchar(300) NOT NULL,
  `servT3` varchar(100) NOT NULL,
  `serv3` varchar(300) NOT NULL,
  `servT4` varchar(100) NOT NULL,
  `serv4` varchar(300) NOT NULL,
  `img2` varchar(45) NOT NULL,
  `titulo3` varchar(80) NOT NULL,
  `descripcion1` varchar(450) NOT NULL,
  `descripcion2` varchar(450) NOT NULL,
  `img3` varchar(45) NOT NULL,
  `tituloPrecios` varchar(140) NOT NULL,
  `precio1` varchar(45) NOT NULL,
  `descP1` varchar(150) NOT NULL,
  `precio2` varchar(45) NOT NULL,
  `descP2` varchar(150) NOT NULL,
  `precio3` varchar(45) NOT NULL,
  `descP3` varchar(150) NOT NULL,
  `precio4` varchar(45) NOT NULL,
  `descP4` varchar(150) NOT NULL,
  `slogan` varchar(450) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planestilista`;
DROP TABLE IF EXISTS `planfotografo`;
CREATE TABLE `planfotografo` (
  `id` int(11) NOT NULL,
  `tituloEnc` varchar(250) NOT NULL,
  `imgEnc` varchar(250) NOT NULL,
  `tituloNombre` varchar(250) NOT NULL,
  `tituloSubNom` varchar(250) NOT NULL,
  `imgPerfil` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `profile` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `celular` varchar(250) NOT NULL,
  `subTitu` varchar(250) NOT NULL,
  `descripcion1` varchar(250) NOT NULL,
  `tituloPort` varchar(250) NOT NULL,
  `descPorta` varchar(250) NOT NULL,
  `imgP1` varchar(250) NOT NULL,
  `imgP2` varchar(250) NOT NULL,
  `imgP3` varchar(250) NOT NULL,
  `imgP4` varchar(250) NOT NULL,
  `imgP5` varchar(250) NOT NULL,
  `imgP6` varchar(250) NOT NULL,
  `nomImg1` varchar(250) NOT NULL,
  `nomImg2` varchar(250) NOT NULL,
  `nomImg3` varchar(250) NOT NULL,
  `nomImg4` varchar(250) NOT NULL,
  `nomImg5` varchar(250) NOT NULL,
  `nomImg6` varchar(250) NOT NULL,
  `fechaImg1` varchar(250) NOT NULL,
  `fechaImg2` varchar(250) NOT NULL,
  `fechaImg3` varchar(250) NOT NULL,
  `fechaImg4` varchar(100) NOT NULL,
  `fechaImg5` varchar(100) NOT NULL,
  `fechaImg6` varchar(100) NOT NULL,
  `blogtitulo` varchar(100) NOT NULL,
  `descBlog` varchar(100) NOT NULL,
  `imgBlog1` varchar(100) NOT NULL,
  `imgBlog2` varchar(100) NOT NULL,
  `imgBlog3` varchar(100) NOT NULL,
  `tituloBlog1` varchar(100) NOT NULL,
  `tituloBlog2` varchar(100) NOT NULL,
  `tituloBlog3` varchar(100) NOT NULL,
  `descBlog1` varchar(100) NOT NULL,
  `descBlog2` varchar(100) NOT NULL,
  `descBlog3` varchar(100) NOT NULL,
  `subTget` varchar(250) NOT NULL,
  `desGet` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `face` varchar(250) NOT NULL,
  `ins` varchar(250) NOT NULL,
  `what` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `activo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planfotografo`;
INSERT INTO `planfotografo` (`id`, `tituloEnc`, `imgEnc`, `tituloNombre`, `tituloSubNom`, `imgPerfil`, `name`, `profile`, `email`, `celular`, `subTitu`, `descripcion1`, `tituloPort`, `descPorta`, `imgP1`, `imgP2`, `imgP3`, `imgP4`, `imgP5`, `imgP6`, `nomImg1`, `nomImg2`, `nomImg3`, `nomImg4`, `nomImg5`, `nomImg6`, `fechaImg1`, `fechaImg2`, `fechaImg3`, `fechaImg4`, `fechaImg5`, `fechaImg6`, `blogtitulo`, `descBlog`, `imgBlog1`, `imgBlog2`, `imgBlog3`, `tituloBlog1`, `tituloBlog2`, `tituloBlog3`, `descBlog1`, `descBlog2`, `descBlog3`, `subTget`, `desGet`, `direccion`, `face`, `ins`, `what`, `twitter`, `activo`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sxad', '', '1'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sdvsdbfvxcz', '', 'sxad', '', '1'),
(3, 'nnb n n', 'imgEnc.jpg', 'b n n', 'vhvmnv nbhn', 'imgPerfil.jpg', 'vb b b b', 'dxfvcbc', 'hvvbnvghnhh', '12345678', 'rrr', 'ggg', 'ggg', 'ggg', 'imgP1.jpg', 'imgP2.jpg', 'imgP3.jpg', 'imgP4.jpg', 'imgP5.jpg', 'imgP6.jpg', 'gggg', 'ggg', 'vvv', 'bbbb', 'bvbbbnn', 'hbnnb', 'ggg', 'ggg', 'vbbbvb', 'bnbnn', 'bnbnb', 'nnnn', 'nbnnb', 'nbnbnbnb', 'imgBlog1.jpg', 'imgBlog2.jpg', 'imgBlog3.jpg', 'bnbnb', 'vhj', 'v bnm', 'bvbvbvbv', 'gvhbjn', 'fcghjkl', 'cgvhb', 'vghbnm', 'vbnm,lknjbhvg', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', '1'),
(4, 'q', 'imgEnc.jpg', 'w', 'e', 'imgPerfil.jpg', 'e', 'e', 'e', '1', 'e', 'e', 'e', 'e', 'imgP1.jpg', 'imgP2.jpg', 'imgP3.jpg', 'imgP4.jpg', 'imgP5.jpg', 'imgP6.jpg', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'ww', 'w', 'w', 'w', 'imgBlog1.jpg', 'imgBlog2.jpg', 'imgBlog3.jpg', 'w', 'w', 'w', 'w', 'w', 'w', 'ww', 'ww', 'ww', 'https://web.facebook.com/', 'https://web.instagram.com/', 'https://web.whatsapp.com/', 'https://www.twitter.com/', '1');

DROP TABLE IF EXISTS `planfrelanser`;
CREATE TABLE `planfrelanser` (
  `idplanFrelanser` int(11) NOT NULL,
  `imgPerfil` varchar(45) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `colorEnca` varchar(45) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `whatsapp` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `colorDere` varchar(45) NOT NULL,
  `puntoT1` varchar(45) NOT NULL,
  `puntoT2` varchar(45) NOT NULL,
  `puntoT3` varchar(45) NOT NULL,
  `puntoT4` varchar(45) NOT NULL,
  `punDesc1` varchar(250) NOT NULL,
  `punDesc2` varchar(250) NOT NULL,
  `punDesc3` varchar(250) NOT NULL,
  `punDesc4` varchar(250) NOT NULL,
  `portafolio` varchar(250) NOT NULL,
  `imgWeb1` varchar(45) NOT NULL,
  `imgWeb2` varchar(45) NOT NULL,
  `imgWeb3` varchar(45) NOT NULL,
  `imgApp1` varchar(45) NOT NULL,
  `imgApp2` varchar(45) NOT NULL,
  `imgApp3` varchar(45) NOT NULL,
  `imgDiseño1` varchar(45) NOT NULL,
  `imgDiseño2` varchar(45) NOT NULL,
  `imgDiseño3` varchar(45) NOT NULL,
  `habilidades` varchar(100) NOT NULL,
  `habi1` varchar(45) NOT NULL,
  `habi2` varchar(45) NOT NULL,
  `habi3` varchar(45) NOT NULL,
  `habi4` varchar(45) NOT NULL,
  `imgFondo2` varchar(45) NOT NULL,
  `contactoDesc` varchar(450) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `activo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planfrelanser`;
DROP TABLE IF EXISTS `planmodas`;
CREATE TABLE `planmodas` (
  `idplanModas` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `imgEnca` varchar(100) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `imgRopa` varchar(45) NOT NULL,
  `imgCalzado` varchar(45) NOT NULL,
  `imgAccesorio` varchar(45) NOT NULL,
  `imgIzq` varchar(45) NOT NULL,
  `descIzq` varchar(100) NOT NULL,
  `titulo3` varchar(100) NOT NULL,
  `img1` varchar(45) NOT NULL,
  `tineda1` varchar(100) NOT NULL,
  `desc1` varchar(150) NOT NULL,
  `img2` varchar(45) NOT NULL,
  `tienda2` varchar(100) NOT NULL,
  `desc2` varchar(150) NOT NULL,
  `img3` varchar(45) NOT NULL,
  `tienda3` varchar(100) NOT NULL,
  `desc3` varchar(150) NOT NULL,
  `img4` varchar(45) NOT NULL,
  `tienda4` varchar(100) NOT NULL,
  `desc4` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planmodas`;
DROP TABLE IF EXISTS `planprofesor`;
CREATE TABLE `planprofesor` (
  `id` int(11) NOT NULL,
  `logoText` varchar(100) NOT NULL,
  `colorLogo` varchar(45) NOT NULL,
  `btnInicio` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `imgEnca` varchar(45) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `colorCargo` varchar(45) NOT NULL,
  `titulo1` varchar(100) NOT NULL,
  `color1` varchar(45) NOT NULL,
  `subTitu1` varchar(100) NOT NULL,
  `punt1` varchar(100) NOT NULL,
  `punt2` varchar(100) NOT NULL,
  `punt3` varchar(100) NOT NULL,
  `color2` varchar(45) NOT NULL,
  `img1` varchar(45) NOT NULL,
  `titulo2C` varchar(105) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `color3` varchar(45) NOT NULL,
  `3colorIconCUL` varchar(45) NOT NULL,
  `titulo3Corp` varchar(45) NOT NULL,
  `color4` varchar(45) NOT NULL,
  `descrip3` varchar(45) NOT NULL,
  `color5` varchar(45) NOT NULL,
  `titulo4Ulla` varchar(100) NOT NULL,
  `descrip4` varchar(45) NOT NULL,
  `titulo5Labore` varchar(100) NOT NULL,
  `descrp5` varchar(45) NOT NULL,
  `icon1` varchar(100) NOT NULL,
  `icon2` varchar(95) NOT NULL,
  `icon3` varchar(95) NOT NULL,
  `icon4` varchar(95) NOT NULL,
  `icon5` varchar(100) NOT NULL,
  `icon6` varchar(100) NOT NULL,
  `icon7` varchar(100) NOT NULL,
  `icon8` varchar(100) NOT NULL,
  `colorIconFondo` varchar(45) NOT NULL,
  `colorIcon` varchar(45) NOT NULL,
  `titulo6` varchar(100) NOT NULL,
  `color8` varchar(45) NOT NULL,
  `imgP1` varchar(100) NOT NULL,
  `imgP2` varchar(100) NOT NULL,
  `imgP3` varchar(100) NOT NULL,
  `precio1` decimal(10,2) NOT NULL,
  `precio2` decimal(10,2) NOT NULL,
  `precio3` decimal(10,2) NOT NULL,
  `color9` varchar(45) NOT NULL,
  `tituloP1` varchar(100) NOT NULL,
  `tituloP2` varchar(100) NOT NULL,
  `tituloP3` varchar(100) NOT NULL,
  `descP1` varchar(100) NOT NULL,
  `descP2` varchar(100) NOT NULL,
  `descP3` varchar(100) NOT NULL,
  `color10` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `color11` varchar(45) NOT NULL,
  `imgU1` varchar(100) NOT NULL,
  `imgU2` varchar(100) NOT NULL,
  `imgU3` varchar(100) NOT NULL,
  `nom1` varchar(100) NOT NULL,
  `nom2` varchar(100) NOT NULL,
  `nom3` varchar(100) NOT NULL,
  `colo12` varchar(45) NOT NULL,
  `descNom1` varchar(100) NOT NULL,
  `descNom2` varchar(100) NOT NULL,
  `descNom3` varchar(100) NOT NULL,
  `colo13` varchar(45) NOT NULL,
  `tituloF` varchar(100) NOT NULL,
  `color14` varchar(45) NOT NULL,
  `descrF` varchar(150) NOT NULL,
  `color15` varchar(45) NOT NULL,
  `tituloMentor` varchar(100) NOT NULL,
  `what` varchar(45) NOT NULL,
  `face` varchar(45) NOT NULL,
  `insta` varchar(45) NOT NULL,
  `xtwiter` varchar(45) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `activo` tinyblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planprofesor`;
DROP TABLE IF EXISTS `plantilla`;
CREATE TABLE `plantilla` (
  `idplantilla` int(11) NOT NULL,
  `plantilla` varchar(405) NOT NULL,
  `nombreTabla` varchar(405) NOT NULL,
  `carpeta` varchar(45) NOT NULL,
  `idcategoria` varchar(405) NOT NULL,
  `descripcion` varchar(405) NOT NULL,
  `fecha` varchar(405) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `plantilla`;
INSERT INTO `plantilla` (`idplantilla`, `plantilla`, `nombreTabla`, `carpeta`, `idcategoria`, `descripcion`, `fecha`, `activo`) VALUES
(1, 'diseño', 'plandiseno', 'td1', '1', 'Plantilla movil', '03/06/2024', 1),
(2, 'contador', 'planconta', 'td2', '2', 'Plantilla movil', '03/06/2024', 1),
(3, 'fotografo', 'planfotografo', 'td3', '3', 'Plantilla movil', '03/06/2024', 1),
(4, 'entrenador', 'planentrenador', 'td4', '4', 'Plantilla movil', '03/06/2024', 1),
(5, 'alimento', 'planalimento', 'td5', '5', 'Plantilla movil', '03/06/2024', 1),
(6, 'worker', 'plannetworker', 'td6', '6', 'Plantilla movil', '03/06/2024', 1),
(7, 'profesor', 'planprofesor', 'td7', '7', 'Plantilla movil', '03/06/2024', 1),
(8, 'coworking', 'plancoworking', 'td8', '8', 'Plantilla movil', '03/06/2024', 1),
(9, 'arquitectura', 'planarquitectura', 'td9', '9', 'Plantilla movil', '03/06/2024', 0),
(10, 'auditores', 'planauditores', 'td10', '10', 'Plantilla movil', '03/06/2024', 0),
(11, 'construccion', 'planconstruccion', 'td11', '11', 'Plantilla movil', '03/06/2024', 0),
(12, 'viajes', 'planviajes', 'td12', '12', 'Plantilla movil', '03/06/2024', 0),
(13, 'moda', 'planmodas', 'td13', '13', 'Plantilla movil', '03/06/2024', 0),
(14, 'estilista', 'planestilista', 'td14', '14', 'Plantilla movil', '03/06/2024', 0),
(15, 'Freelancer', 'planfreelancer', 'td15', '15', 'Plantilla movil', '03/06/2024', 0);

DROP TABLE IF EXISTS `planviajes`;
CREATE TABLE `planviajes` (
  `idplanViajes` int(11) NOT NULL,
  `imgPerfil` varchar(45) NOT NULL,
  `nomPlan` varchar(45) NOT NULL,
  `slogan` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `whatsapp` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `img1` varchar(45) NOT NULL,
  `img2` varchar(45) NOT NULL,
  `img3` varchar(45) NOT NULL,
  `img4` varchar(45) NOT NULL,
  `img5` varchar(45) NOT NULL,
  `img6` varchar(45) NOT NULL,
  `tituloSer1` varchar(200) NOT NULL,
  `serv1` varchar(200) NOT NULL,
  `tituloSer2` varchar(200) NOT NULL,
  `serv2` varchar(200) NOT NULL,
  `tituloSer3` varchar(200) NOT NULL,
  `serv3` varchar(200) NOT NULL,
  `tituloSer4` varchar(200) NOT NULL,
  `serv4` varchar(200) NOT NULL,
  `lugaresDesc` varchar(140) NOT NULL,
  `lugar1` varchar(140) NOT NULL,
  `descL1` varchar(200) NOT NULL,
  `lugar2` varchar(140) NOT NULL,
  `descL2` varchar(200) NOT NULL,
  `lugar3` varchar(140) NOT NULL,
  `descL3` varchar(200) NOT NULL,
  `lugar4` varchar(140) NOT NULL,
  `descL4` varchar(200) NOT NULL,
  `lugar5` varchar(140) NOT NULL,
  `descL5` varchar(200) NOT NULL,
  `lugar6` varchar(140) NOT NULL,
  `descL6` varchar(200) NOT NULL,
  `imgL1` varchar(45) NOT NULL,
  `imgL2` varchar(45) NOT NULL,
  `imgL3` varchar(45) NOT NULL,
  `imgL4` varchar(45) NOT NULL,
  `imgL5` varchar(45) NOT NULL,
  `imgL6` varchar(45) NOT NULL,
  `contacto` varchar(45) NOT NULL,
  `celular2` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `planviajes`;
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `categoria_producto` varchar(100) NOT NULL,
  `nombreProduc` varchar(100) NOT NULL,
  `cantidad` varchar(45) NOT NULL,
  `costo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `producto`;
INSERT INTO `producto` (`idproducto`, `categoria_producto`, `nombreProduc`, `cantidad`, `costo`, `descripcion`, `activo`) VALUES
(1, 'telefonia', 'tecel', '1', 540, 'paquete completo', 1),
(2, 'telefonia ', 'movistar', '2', 450, 'paquete compelto', 1),
(3, 'COMIDAWERRWE', 'CHEFQWQ', '11', 1, 'Hola', 0),
(4, 'TEG', 'SDVBSB', '1', 1234, 'sdxvsfdvf', 0),
(5, 'WE', 'QW', '1', 234, 'ertyuop', 0),
(6, 'TELEFONIA', 'MEGA CABLE', '1', 5600, 'telefonia e inernet', 0),
(7, 'COMIDA', 'CHEF', '1', 3500, 'estas son pruebas', 0),
(8, 'MAQUINARRRIA', 'MANTENIMIENTO DE MAQUINARIA', '1', 3500, 'reparacion de maquinaria pesada', 0),
(9, 'HOLA', 'SDSD', '5', 1234, 'sdfsdgdfcgcg', 1);

DROP TABLE IF EXISTS `relcolaborador`;
CREATE TABLE `relcolaborador` (
  `idRelcolaborador` int(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `idColaborador` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `relcolaborador`;
INSERT INTO `relcolaborador` (`idRelcolaborador`, `idEmpresa`, `idColaborador`, `fecha`, `activo`) VALUES
(1, 2, 28, '2024/09/24 15:16:24', 0),
(2, 3, 29, '2024/09/25 09:10:09', 1),
(3, 4, 30, '2024/09/25 11:29:12', 1),
(4, 7, 31, '2024/09/25 11:29:46', 1),
(5, 4, 32, '2024/09/25 11:30:16', 1),
(6, 5, 33, '2024/09/25 11:30:38', 1),
(7, 5, 34, '2024/09/25 11:42:44', 1),
(8, 5, 35, '2024/09/25 11:43:22', 1),
(9, 2, 36, '2024/10/02 10:49:23', 1),
(10, 6, 37, '2024/10/02 11:22:56', 1),
(11, 6, 38, '2024/10/02 11:23:30', 1),
(12, 6, 39, '2024/10/02 11:26:33', 1),
(13, 6, 40, '2024/10/02 11:50:41', 1),
(14, 0, 41, '2024/10/02 11:53:15', 1),
(15, 0, 42, '2024/10/02 11:54:45', 1),
(16, 0, 43, '2024/10/02 11:56:29', 1),
(17, 0, 44, '2024/10/02 12:04:26', 1),
(18, 2, 45, '2024/10/02 12:06:13', 1),
(19, 2, 46, '2024/10/02 12:06:48', 1),
(20, 2, 47, '2024/10/02 12:08:11', 1),
(21, 7, 48, '2024/10/03 11:11:01', 1);

DROP TABLE IF EXISTS `relempresa`;
CREATE TABLE `relempresa` (
  `idRelempresa` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `relempresa`;
INSERT INTO `relempresa` (`idRelempresa`, `idUsuario`, `idEmpresa`, `fecha`, `activo`) VALUES
(1, 1, 1, '2024/09/24 13:06:17', 1),
(2, 3, 2, '2024/09/24 13:18:22', 1),
(3, 2, 3, '2024/09/25 09:09:36', 1),
(4, 1, 4, '2024/09/25 11:28:53', 1),
(5, 1, 5, '2024/09/25 11:42:26', 1),
(6, 3, 6, '2024/10/02 11:22:13', 1),
(7, 1, 7, '2024/10/03 11:09:52', 1);

DROP TABLE IF EXISTS `relplantilla`;
CREATE TABLE `relplantilla` (
  `idRelplantilla` int(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `idPlantilla` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `relplantilla`;
INSERT INTO `relplantilla` (`idRelplantilla`, `idEmpresa`, `idPlantilla`, `fecha`, `activo`) VALUES
(1, 0, 1, '', 1),
(2, 0, 1, '', 1),
(4, 1, 1, '', 1),
(7, 0, 1, '', 1),
(8, 0, 1, '', 1),
(9, 0, 1, '', 1),
(10, 0, 1, '', 1),
(12, 0, 1, '', 1),
(15, 0, 1, '', 1),
(16, 0, 1, '', 1),
(17, 0, 1, '', 1),
(18, 0, 1, '', 1),
(19, 0, 1, '', 1),
(20, 0, 1, '', 1),
(25, 0, 1, '', 1),
(26, 0, 1, '', 1),
(27, 0, 1, '', 1),
(28, 0, 1, '', 1),
(29, 0, 1, '', 1),
(30, 0, 1, '', 1),
(31, 0, 1, '', 1),
(32, 0, 1, '', 1),
(33, 0, 1, '', 1),
(34, 0, 1, '', 1),
(35, 0, 1, '', 1),
(38, 0, 1, '', 1),
(40, 0, 1, '', 1),
(54, 0, 1, '', 1),
(55, 0, 1, '', 1),
(56, 0, 1, '', 1),
(57, 0, 1, '', 1),
(58, 0, 1, '', 1),
(59, 0, 1, '', 1),
(60, 0, 1, '', 1),
(61, 0, 1, '', 1),
(62, 0, 1, '', 1),
(63, 0, 1, '', 1),
(64, 0, 1, '', 1),
(65, 0, 1, '', 1),
(66, 0, 1, '', 1),
(67, 0, 1, '', 1),
(68, 0, 1, '', 1),
(69, 0, 1, '', 1),
(70, 0, 1, '', 1),
(71, 0, 1, '', 1),
(72, 1, 1, '', 1),
(73, 0, 1, '', 1),
(76, 1, 1, '', 1),
(78, 1, 1, '', 1),
(79, 0, 1, '', 1),
(80, 0, 1, '', 1),
(81, 0, 1, '', 1),
(82, 0, 1, '', 1),
(83, 0, 1, '', 1),
(84, 0, 1, '', 1),
(85, 0, 1, '', 1),
(86, 1, 1, '', 1),
(88, 1, 1, '', 1),
(89, 0, 1, '', 1),
(92, 0, 1, '', 1),
(93, 0, 1, '', 1),
(94, 1, 1, '', 1),
(95, 2, 1, '', 1),
(97, 2, 1, '', 1),
(98, 6, 1, '82', 1);

DROP TABLE IF EXISTS `reltarjeta`;
CREATE TABLE `reltarjeta` (
  `idReltarjeta` int(11) NOT NULL,
  `idColaborador` int(11) NOT NULL,
  `idPlantilla` int(11) NOT NULL,
  `idTarjeta` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `reltarjeta`;
INSERT INTO `reltarjeta` (`idReltarjeta`, `idColaborador`, `idPlantilla`, `idTarjeta`, `fecha`, `activo`) VALUES
(1, 0, 0, 0, '', 1),
(2, 0, 0, 0, '', 1),
(3, 0, 0, 0, '', 1),
(4, 0, 0, 0, '', 1),
(5, 0, 0, 0, '', 1),
(6, 0, 0, 0, '', 1),
(7, 0, 1, 9, '', 1),
(8, 0, 1, 10, '', 1),
(9, 0, 1, 11, '', 1),
(10, 7, 0, 12, '', 1),
(11, 2, 1, 13, '', 1),
(12, 7, 0, 14, '', 1),
(13, 7, 0, 15, '', 1),
(14, 7, 0, 16, '', 1),
(15, 38, 1, 25, '', 1),
(16, 0, 1, 83, '2024/10/17 06:48:32', 1),
(17, 47, 1, 84, '2024/10/17 06:58:48', 1),
(18, 40, 1, 85, '2024/10/24 10:26:15', 1),
(19, 46, 1, 86, '2024/10/24 10:27:42', 1),
(20, 38, 1, 87, '2024/10/24 10:40:54', 1);

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `idservicio` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `tipo_servicio` varchar(100) NOT NULL,
  `nom_servicio` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `costo` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `servicio`;
INSERT INTO `servicio` (`idservicio`, `usuario`, `tipo_servicio`, `nom_servicio`, `descripcion`, `costo`, `activo`) VALUES
(1, 'daniela', 'arquitectura', 'contrucciones', 'construccion de edificicios y mas', 50000, 0),
(2, 'IMELDA', 'DISEñO', 'DISEñA TU WEB', '234001', 0, 0),
(3, 'FDGDGD', 'MANTñENIMIENTO', 'DSWS', 'dasdsa', 13214, 0),
(4, 'TELFONIA3', 'TELEMX', 'NDSJAFNHJKSDFNSED', 'fdxfvsgvdsgvdf', 1223, 1),
(5, 'PRUEBA', 'PRUEBA', 'NOMBRE', 'JSADNFHJKDS', 159, 1);

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `nacimiento` varchar(100) NOT NULL,
  `paypal_email` varchar(100) NOT NULL,
  `deacuerdo` tinyint(1) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

TRUNCATE TABLE `usuario`;
INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellidos`, `sexo`, `celular`, `email`, `password`, `foto`, `descripcion`, `nacimiento`, `paypal_email`, `deacuerdo`, `fecha`, `activo`) VALUES
(1, 'DANIELA', 'GARCIA', '', '7226636178', 'dani.eve.garcia18@gmail.com', '$2y$10$0cFtLQPeFFTOZ4oi7tIGXe7FL4VFoWR8j62kq3/SJz5jJab2E0QG6', '', '', '', '', 1, '2024/07/10 09:28:08', 1),
(2, 'VICTOR MANUEL', 'ALARCON H', '', '7224959025', 'vicmah9@gmail.com', '$2y$10$G0y4rmdt1ZZrliuylef1teS76W9L78axVhJV3MWWlZ3q3GkPI9Nni', '', '', '', '', 1, '2024/08/26 14:50:27', 1),
(3, 'EDUARDO', 'ENCASTIN', '', '7292883979', 'eduardo.encastin@netrabbit.online', '$2y$10$me.QsSukY4fn4SJ691txZO.vlOAPuRGDpuMIRUx/580lQIMDYgdI6', '', '', '', '', 1, '2024/09/24 13:17:10', 1),
(4, 'JUAN', 'PRUEBA', '', '7222222222', 'prueba@netrabbit.online', '$2y$10$7qPc.kk/St5hyGihZp64C.0EofTkdQl69CueEHQCVtTevQ5HU3eTO', '', '', '', '', 1, '2024/10/24 10:50:51', 1);


ALTER TABLE `cataplantilla`
  ADD PRIMARY KEY (`idcataPlantilla`);

ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`idColaborador`);

ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

ALTER TABLE `planalimento`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `planarquitectura`
  ADD PRIMARY KEY (`idplanArquitectura`);

ALTER TABLE `planauditores`
  ADD PRIMARY KEY (`idplanAuditores`);

ALTER TABLE `planconstruccion`
  ADD PRIMARY KEY (`idplanConstruccion`);

ALTER TABLE `planconta`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `plancoworking`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `plandiseno`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `planentrenador`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `planestilista`
  ADD PRIMARY KEY (`idplanEstilista`);

ALTER TABLE `planfotografo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `planfrelanser`
  ADD PRIMARY KEY (`idplanFrelanser`);

ALTER TABLE `planmodas`
  ADD PRIMARY KEY (`idplanModas`);

ALTER TABLE `planprofesor`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`idplantilla`);

ALTER TABLE `planviajes`
  ADD PRIMARY KEY (`idplanViajes`);

ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`);

ALTER TABLE `relcolaborador`
  ADD PRIMARY KEY (`idRelcolaborador`);

ALTER TABLE `relempresa`
  ADD PRIMARY KEY (`idRelempresa`);

ALTER TABLE `relplantilla`
  ADD PRIMARY KEY (`idRelplantilla`);

ALTER TABLE `reltarjeta`
  ADD PRIMARY KEY (`idReltarjeta`);

ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idservicio`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);


ALTER TABLE `cataplantilla`
  MODIFY `idcataPlantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `colaborador`
  MODIFY `idColaborador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `planalimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `planarquitectura`
  MODIFY `idplanArquitectura` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `planauditores`
  MODIFY `idplanAuditores` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `planconstruccion`
  MODIFY `idplanConstruccion` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `planconta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `plancoworking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `plandiseno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

ALTER TABLE `planentrenador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `planestilista`
  MODIFY `idplanEstilista` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `planfotografo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `planfrelanser`
  MODIFY `idplanFrelanser` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `planmodas`
  MODIFY `idplanModas` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `planprofesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `plantilla`
  MODIFY `idplantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `planviajes`
  MODIFY `idplanViajes` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `relcolaborador`
  MODIFY `idRelcolaborador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE `relempresa`
  MODIFY `idRelempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `relplantilla`
  MODIFY `idRelplantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

ALTER TABLE `reltarjeta`
  MODIFY `idReltarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `servicio`
  MODIFY `idservicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
