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

-- Volcando estructura para tabla ci3.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ci3.ci_sessions: ~0 rows (aproximadamente)
DELETE FROM `ci_sessions`;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('5fa0d14eb16c0e55c2c73eeaa1b82ad46af41f46', '::1', 1456858577, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313435363835383537353B6369337C4E3B69647C733A313A2231223B7469706F7C733A323A223838223B6E6F6D6272657C733A343A224A686F6E223B436F6E74726F6C6C65724D6573736167657C733A31353A224269656E76656E69646F204A686F6E223B5F5F63695F766172737C613A313A7B733A31373A22436F6E74726F6C6C65724D657373616765223B733A333A226F6C64223B7D),
	('8ce27a929e89cd0b67aacaa288d234709da99e16', '::1', 1456862378, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313435363836323337383B6369337C4E3B69647C733A313A2231223B7469706F7C733A323A223838223B6E6F6D6272657C733A343A224A686F6E223B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Volcando estructura para tabla ci3.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idt` tinyint(1) NOT NULL COMMENT 'Nivel de Acceso del Usuario',
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `passfrase` char(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Passfrase',
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
	(1, 88, 'Jhon', 'Connor', NULL, 'jhon.connor@skynet.com', '7d23c9c86b47456da971802a213b5b2a80f7e0c7', '', NULL, NULL, '2015-12-11 15:33:29', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
