-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.21 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla ci3.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idt` tinyint(1) NOT NULL COMMENT 'Nivel de Acceso del Usuario',
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `passfrase` char(32) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Contraseña en condificada en MD5',
  `passfrasekey` char(32) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Este valor se conjuga con el passfrase para validar el acceso.',
  `img` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Imágen de perfil del usuario.',
  `url` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'URL de perfil de usuario',
  `registro` datetime NOT NULL COMMENT 'Fecha de registro',
  `estado` tinyint(1) unsigned NOT NULL COMMENT 'Estado del usuario [1] Activo [0] Inactivo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ci3.usuarios: ~0 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `idt`, `nombres`, `apellidos`, `dni`, `email`, `passfrase`, `passfrasekey`, `img`, `url`, `registro`, `estado`) VALUES
	(1, 88, 'Jhon', 'Connor', NULL, 'jhon.connor@skynet.com', 'bc9b94efba8d78cf552a7de3f235b1d7', '', NULL, NULL, '2015-12-11 15:33:29', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
