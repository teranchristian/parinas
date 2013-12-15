-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for login
DROP DATABASE IF EXISTS `login`;
CREATE DATABASE IF NOT EXISTS `login` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `login`;


-- Dumping structure for table login.auth_actions
DROP TABLE IF EXISTS `auth_actions`;
CREATE TABLE IF NOT EXISTS `auth_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `navigation_item` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table login.auth_actions: ~2 rows (approximately)
DELETE FROM `auth_actions`;
/*!40000 ALTER TABLE `auth_actions` DISABLE KEYS */;
INSERT INTO `auth_actions` (`id`, `date_entered`, `date_modified`, `name`, `module_id`, `type`, `navigation_item`) VALUES
	(1, '2009-02-12 18:49:31', '2009-02-12 18:49:31', 'centro de costo', 1, 'index', 1),
	(2, '2009-02-12 18:49:31', '2009-02-12 18:49:31', 'Delete the users', 1, 'delete', 1),
	(3, NULL, NULL, 'ver obras', 2, 'index', 1);
/*!40000 ALTER TABLE `auth_actions` ENABLE KEYS */;


-- Dumping structure for table login.auth_actions_auth_roles
DROP TABLE IF EXISTS `auth_actions_auth_roles`;
CREATE TABLE IF NOT EXISTS `auth_actions_auth_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auth_role_id` int(11) DEFAULT NULL,
  `auth_action_id` int(11) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table login.auth_actions_auth_roles: ~2 rows (approximately)
DELETE FROM `auth_actions_auth_roles`;
/*!40000 ALTER TABLE `auth_actions_auth_roles` DISABLE KEYS */;
INSERT INTO `auth_actions_auth_roles` (`id`, `auth_role_id`, `auth_action_id`, `date_modified`) VALUES
	(1, 1, 1, '2009-02-12 18:47:56'),
	(2, 1, 2, '2009-02-12 18:47:56'),
	(3, 1, 3, NULL);
/*!40000 ALTER TABLE `auth_actions_auth_roles` ENABLE KEYS */;


-- Dumping structure for table login.modules
DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `enabled` tinyint(4) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table login.modules: ~1 rows (approximately)
DELETE FROM `modules`;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`id`, `name`, `description`, `enabled`, `date_created`, `type`) VALUES
	(1, 'Centro de Costo', 'Here the user of the backend can make some changes to the pages', 1, '2009-02-12 18:54:00', 'centroCosto'),
	(2, 'Obra', 'obras', 1, NULL, 'obra');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;


-- Dumping structure for table login.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `date_modified` datetime DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table login.roles: ~2 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `description`, `date_modified`, `date_entered`) VALUES
	(1, 'administrator', 'Some administrator account', '2009-02-12 18:02:49', '2009-02-12 18:02:49'),
	(2, 'logistica', NULL, NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table login.roles_users
DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE IF NOT EXISTS `roles_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `auth_role_id` int(11) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table login.roles_users: ~2 rows (approximately)
DELETE FROM `roles_users`;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
INSERT INTO `roles_users` (`id`, `user_id`, `auth_role_id`, `date_modified`) VALUES
	(1, 1, 1, '2009-02-12 18:02:10'),
	(2, 2, 2, NULL);
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;


-- Dumping structure for table login.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `lastName` varchar(150) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table login.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `name`, `lastName`, `password`, `active`, `deleted`) VALUES
	(1, 'a', 'Miguel', 'Montero', '0cc175b9c0f1b6a831c399e269772661', 1, 0),
	(2, 'b', 'Jorge Luis', 'Montero', '92eb5ffee6ae2fec3ad71c777531578f', 1, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table login.user_tokens
DROP TABLE IF EXISTS `user_tokens`;
CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_agent` varchar(32) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;

-- Dumping data for table login.user_tokens: ~2 rows (approximately)
DELETE FROM `user_tokens`;
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
INSERT INTO `user_tokens` (`id`, `user_id`, `user_agent`, `token`, `created`, `expires`) VALUES
	(140, 2, '2a45585bf6fbca9e24972054edb9a714', '03d6adaca18897861ea58c13b4c10820634b3a7a', 1387068879, 1388278479),
	(253, 1, '2a45585bf6fbca9e24972054edb9a714', 'c435b80566dd61ca3a63eae74849bb28a2e76e25', 1387114467, 1388324067);
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;


-- Dumping database structure for mycparinas
DROP DATABASE IF EXISTS `mycparinas`;
CREATE DATABASE IF NOT EXISTS `mycparinas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mycparinas`;


-- Dumping structure for table mycparinas.area
DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `idArea` int(10) NOT NULL AUTO_INCREMENT,
  `area` varchar(50) DEFAULT NULL,
  `codigoArea` varchar(5) DEFAULT NULL,
  `creado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT 'ACTIVO',
  PRIMARY KEY (`idArea`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.area: ~2 rows (approximately)
DELETE FROM `area`;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` (`idArea`, `area`, `codigoArea`, `creado`, `status`) VALUES
	(1, 'ADMINISTRACION', '1000', NULL, 'ACTIVO'),
	(2, 'TRABAJOS LIMA-OTROS', '2000', NULL, 'ACTIVO');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;


-- Dumping structure for table mycparinas.centrocosto
DROP TABLE IF EXISTS `centrocosto`;
CREATE TABLE IF NOT EXISTS `centrocosto` (
  `idCentroCosto` int(10) NOT NULL AUTO_INCREMENT,
  `idArea` int(11) NOT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `creado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT 'ACTIVO',
  PRIMARY KEY (`idCentroCosto`),
  KEY `FK_centrocosto_area` (`idArea`),
  CONSTRAINT `FK_centrocosto_area` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.centrocosto: ~22 rows (approximately)
DELETE FROM `centrocosto`;
/*!40000 ALTER TABLE `centrocosto` DISABLE KEYS */;
INSERT INTO `centrocosto` (`idCentroCosto`, `idArea`, `codigo`, `descripcion`, `creado`, `status`) VALUES
	(1, 1, '1000', 'ADMINISTRACION', NULL, 'ELIMINADO'),
	(2, 1, '101', 'ADMINISTRACION TALARA', NULL, 'ACTIVO'),
	(3, 1, '102', 'FINANZAS Y CONTABILIDAD TALARA ', NULL, 'ACTIVO'),
	(4, 1, '103', 'LOGISTICA  TALARA       ', NULL, 'ACTIVO'),
	(5, 1, '104', 'AREA OPERACIONES TALARA', NULL, 'ACTIVO'),
	(6, 1, '105', 'AREA COSTOS Y PRESUPUESTOS', NULL, 'ACTIVO'),
	(7, 1, '106', 'AREA TECNICA', NULL, 'ACTIVO'),
	(8, 1, '107', 'AREA DE MANTENIMIENTO', NULL, 'ACTIVO'),
	(9, 1, '108', 'AREA INGENIERIA Y DESARROLLO', NULL, 'ACTIVO'),
	(10, 1, '109', 'AREA SISTEMA INTEGRADO DE GESTION', NULL, 'ACTIVO'),
	(11, 1, '110', 'GERENCIA', NULL, 'ACTIVO'),
	(12, 1, '111', 'CONTROL DE CALIDAD', NULL, 'ACTIVO'),
	(13, 1, '201', 'ADMINISTRACION LIMA ', NULL, 'ACTIVO'),
	(14, 1, '202', 'FINANZAS Y CONTABILIDAD LIMA', NULL, 'ACTIVO'),
	(15, 2, '2200', 'REFINERIA CONCHAN', NULL, 'ACTIVO'),
	(16, 2, '3004', 'Orlando', NULL, 'ELIMINADO'),
	(17, 2, '2200', 'COCO1', NULL, 'ACTIVO'),
	(18, 1, '123', 'AS ASDAS ASD1', NULL, 'ELIMINADO'),
	(19, 2, '12312', 'COKE JEFE', NULL, 'ACTIVO'),
	(20, 1, '123', 'AS ASDAS ASD12', NULL, 'ELIMINADO'),
	(21, 1, '001', '0', NULL, 'ELIMINADO'),
	(22, 1, '2', '222', NULL, 'ELIMINADO');
/*!40000 ALTER TABLE `centrocosto` ENABLE KEYS */;


-- Dumping structure for table mycparinas.estadoobra
DROP TABLE IF EXISTS `estadoobra`;
CREATE TABLE IF NOT EXISTS `estadoobra` (
  `idEstadoObra` int(10) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'ACTIVO',
  `creado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idEstadoObra`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.estadoobra: ~3 rows (approximately)
DELETE FROM `estadoobra`;
/*!40000 ALTER TABLE `estadoobra` DISABLE KEYS */;
INSERT INTO `estadoobra` (`idEstadoObra`, `descripcion`, `status`, `creado`) VALUES
	(1, 'Ejecucion', 'ACTIVO', NULL),
	(2, 'Por Operar', 'ACTIVO', NULL),
	(3, 'En Juicio', 'ACTIVO', NULL);
/*!40000 ALTER TABLE `estadoobra` ENABLE KEYS */;


-- Dumping structure for table mycparinas.obra
DROP TABLE IF EXISTS `obra`;
CREATE TABLE IF NOT EXISTS `obra` (
  `idObra` int(10) NOT NULL AUTO_INCREMENT,
  `idCentroCosto` int(10) NOT NULL,
  `idEstadoObra` int(10) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `montoContrato` int(11) DEFAULT NULL,
  `moneda` varchar(2) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`idObra`),
  KEY `FK_obra_centrocosto` (`idCentroCosto`),
  KEY `FK_obra_estadoobra` (`idEstadoObra`),
  KEY `FK_obra_usuario` (`idUsuario`),
  CONSTRAINT `FK_obra_centrocosto` FOREIGN KEY (`idCentroCosto`) REFERENCES `centrocosto` (`idCentroCosto`),
  CONSTRAINT `FK_obra_estadoobra` FOREIGN KEY (`idEstadoObra`) REFERENCES `estadoobra` (`idEstadoObra`),
  CONSTRAINT `FK_obra_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.obra: ~22 rows (approximately)
DELETE FROM `obra`;
/*!40000 ALTER TABLE `obra` DISABLE KEYS */;
INSERT INTO `obra` (`idObra`, `idCentroCosto`, `idEstadoObra`, `idUsuario`, `descripcion`, `montoContrato`, `moneda`, `fechaInicio`, `fechaFin`, `creado`, `status`) VALUES
	(1, 2, 1, 2, '21', 123, NULL, '2013-07-07', NULL, '2013-07-07 10:30:58', 'ELIMINADO'),
	(2, 2, 3, 2, 'test', 123, NULL, NULL, NULL, '2013-07-07 10:31:33', 'ELIMINADO'),
	(3, 2, 1, 2, 'Obra 1', 123, 'd', '2013-07-10', '2013-10-07', '2013-07-07 10:49:18', 'ACTIVO'),
	(4, 2, 1, 2, 'Qwe', 123, NULL, '2013-07-10', NULL, '2013-07-07 10:49:50', 'ELIMINADO'),
	(5, 2, 1, 2, 'Qwe', 123, NULL, NULL, NULL, '2013-07-07 10:50:08', 'ELIMINADO'),
	(6, 2, 1, 2, 'Qwe', 13, NULL, NULL, NULL, '2013-07-07 10:50:48', 'ELIMINADO'),
	(7, 2, 1, 2, 'Test', 13, NULL, '2013-07-09', '2013-07-10', '2013-07-07 10:53:13', 'ELIMINADO'),
	(8, 2, 1, 2, 'Test 2', 12, NULL, '1969-12-31', '1969-12-31', '2013-07-07 10:53:44', 'ELIMINADO'),
	(9, 2, 1, 2, 'Test 2', 12, NULL, NULL, NULL, '2013-07-07 10:55:24', 'ELIMINADO'),
	(10, 13, 1, 2, 'Test', 12, NULL, NULL, NULL, '2013-07-08 22:36:55', 'ELIMINADO'),
	(11, 17, 1, 2, 'Servicio De Fabrication', 123, NULL, NULL, NULL, '2013-07-08 22:39:36', 'ACTIVO'),
	(12, 2, 1, 2, '21', 123, NULL, NULL, NULL, '2013-11-28 19:53:17', 'ELIMINADO'),
	(13, 2, 1, 2, '21', 123, NULL, NULL, NULL, '2013-11-28 19:53:25', 'ELIMINADO'),
	(14, 2, 1, 2, '21', 123, NULL, '2013-07-07', '2013-11-27', '2013-11-28 19:59:39', 'ELIMINADO'),
	(15, 2, 1, 2, '21', 123, NULL, '2013-07-07', '2013-11-28', '2013-11-28 20:05:12', 'ELIMINADO'),
	(16, 2, 1, 2, 'Test 2013', 123, NULL, '2013-11-29', '2013-12-03', '2013-11-28 20:06:01', 'ELIMINADO'),
	(17, 2, 1, 2, 'Test 2013 123', 123, NULL, '2013-11-29', '2013-12-03', '2013-11-28 20:06:28', 'ELIMINADO'),
	(18, 2, 1, 2, '21 New', 123, NULL, '2013-07-07', '2013-11-28', '2013-11-28 20:08:56', 'ACTIVO'),
	(19, 2, 1, 2, '21', 123, NULL, '2013-07-07', NULL, '2013-11-28 20:09:21', 'ELIMINADO'),
	(20, 2, 1, 2, '21', 123, NULL, '2013-07-07', NULL, '2013-11-28 20:09:43', 'ELIMINADO'),
	(21, 2, 1, 2, '21', 123, NULL, '2013-07-07', NULL, '2013-11-28 20:09:49', 'ELIMINADO'),
	(22, 2, 1, 2, '21', 123, NULL, '2013-07-07', NULL, '2013-11-28 20:09:58', 'ELIMINADO');
/*!40000 ALTER TABLE `obra` ENABLE KEYS */;


-- Dumping structure for table mycparinas.orden
DROP TABLE IF EXISTS `orden`;
CREATE TABLE IF NOT EXISTS `orden` (
  `idOrden` int(10) NOT NULL AUTO_INCREMENT,
  `idProcesoOrden` int(11) NOT NULL DEFAULT '1',
  `idObra` int(11) DEFAULT NULL,
  `idSolicitante` int(11) NOT NULL,
  `cliente` varchar(100) DEFAULT NULL,
  `fechaOrden` date DEFAULT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVO',
  `moneda` varchar(3) DEFAULT NULL,
  `mensaje` text,
  PRIMARY KEY (`idOrden`),
  KEY `FK__obra` (`idObra`),
  KEY `FK__usuario` (`idSolicitante`),
  KEY `FK_orden_procesoorden` (`idProcesoOrden`),
  CONSTRAINT `FK_orden_procesoorden` FOREIGN KEY (`idProcesoOrden`) REFERENCES `procesoorden` (`idProcesoOrden`),
  CONSTRAINT `FK__obra` FOREIGN KEY (`idObra`) REFERENCES `obra` (`idObra`),
  CONSTRAINT `FK__usuario` FOREIGN KEY (`idSolicitante`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.orden: ~5 rows (approximately)
DELETE FROM `orden`;
/*!40000 ALTER TABLE `orden` DISABLE KEYS */;
INSERT INTO `orden` (`idOrden`, `idProcesoOrden`, `idObra`, `idSolicitante`, `cliente`, `fechaOrden`, `creado`, `status`, `moneda`, `mensaje`) VALUES
	(9, 4, 3, 1, 'Christian Test 2', '2013-12-11', '2013-12-05 20:30:43', 'ACTIVO', 'USD', '<b>Montero Miguel</b><span class=\'float:right;\'> - (01:12 am 13/12/2013)</span></br><hr> - Listo</br></p><b>Montero Miguel</b><span class="float:right;"> - (01:12 am 13/12/2013)</span><br><hr> - Listo<br><p></p><b> Coke</b><span class="float:right;"> - (04:12 pm 12/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (04:12 pm 12/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (04:12 pm 12/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (06:12 am 12/12/2013)</span><br><hr> - orden de pedido lista<br><p></p><b> Coke</b><span class="float:right;"> - (06:12 am 12/12/2013)</span><br><hr> - <br><p></p>null'),
	(10, 3, 3, 1, 'Christian Test', '2013-12-11', '2013-12-05 20:31:34', 'ACTIVO', 'PEN', '<b>Montero Miguel</b><span class=\'float:right;\'> - (01:12 am 13/12/2013)</span></br><hr> - Cambiar cantidad de productos</br></p><b>Montero Miguel</b><span class="float:right;"> - (01:12 am 13/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (04:12 pm 12/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (04:12 pm 12/12/2013)</span><br><hr> - <br><p></p>'),
	(11, 4, 11, 1, 'Felix Teran Suarez', '2013-12-13', '2013-12-05 20:33:45', 'ACTIVO', 'PEN', '<b>Montero Miguel</b><span class=\'float:right;\'> - (02:12 am 13/12/2013)</span></br><hr> - </br></p><b> Coke</b><span class="float:right;"> - (02:12 am 13/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (09:12 pm 12/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (05:12 pm 12/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (05:12 pm 12/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (05:12 pm 12/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (05:12 pm 12/12/2013)</span><br><hr> - comprar mas armarios<br><p></p>'),
	(34, 1, 3, 2, '', NULL, '2013-12-13 14:18:20', 'ACTIVO', 'PEN', '<b> Coke</b><span class=\'float:right;\'> - (09:12 pm 12/12/2013)</span></br><hr> - </br></p>'),
	(35, 4, 18, 1, '', NULL, '2013-12-13 17:21:59', 'ACTIVO', 'PEN', '<b>Montero Miguel</b><span class=\'float:right;\'> - (04:12 pm 13/12/2013)</span></br><hr> - </br></p><b> Coke</b><span class="float:right;"> - (04:12 pm 13/12/2013)</span><br><hr> - <br><p></p><b>Montero Miguel</b><span class="float:right;"> - (04:12 pm 13/12/2013)</span><br><hr> - wilfrodo, po asdjasd asdlkjhaslkjaslkjsdjlk<br><p></p><b> Coke</b><span class="float:right;"> - (04:12 pm 13/12/2013)</span><br><hr> - <br><p></p><b> Coke</b><span class="float:right;"> - (04:12 pm 13/12/2013)</span><br><hr> - falta agregar producto. ya que, no esta en stock.<br><p></p><b> Coke</b><span class="float:right;"> - (12:12 am 13/12/2013)</span><br><hr> - <br><p></p>');
/*!40000 ALTER TABLE `orden` ENABLE KEYS */;


-- Dumping structure for table mycparinas.procesoorden
DROP TABLE IF EXISTS `procesoorden`;
CREATE TABLE IF NOT EXISTS `procesoorden` (
  `idProcesoOrden` int(10) NOT NULL AUTO_INCREMENT,
  `procesoOrden` varchar(20) DEFAULT NULL,
  `procesoOrdenColor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idProcesoOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.procesoorden: ~4 rows (approximately)
DELETE FROM `procesoorden`;
/*!40000 ALTER TABLE `procesoorden` DISABLE KEYS */;
INSERT INTO `procesoorden` (`idProcesoOrden`, `procesoOrden`, `procesoOrdenColor`) VALUES
	(1, 'Nueva Orden', NULL),
	(2, 'Por aprobar', 'label-warning'),
	(3, 'Modificar', 'label-info'),
	(4, 'Aprobada', 'label-success');
/*!40000 ALTER TABLE `procesoorden` ENABLE KEYS */;


-- Dumping structure for table mycparinas.producto
DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(10) NOT NULL AUTO_INCREMENT,
  `idOrden` int(11) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `unidad` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `status` varchar(10) DEFAULT 'ACTIVO',
  PRIMARY KEY (`idProducto`),
  KEY `FK_producto_orden` (`idOrden`),
  CONSTRAINT `FK_producto_orden` FOREIGN KEY (`idOrden`) REFERENCES `orden` (`idOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.producto: ~36 rows (approximately)
DELETE FROM `producto`;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`idProducto`, `idOrden`, `descripcion`, `unidad`, `cantidad`, `precio`, `status`) VALUES
	(33, 9, 'Uno', '2', 2, 2, 'ACTIVO'),
	(34, 9, '22', '3', 3, 3, 'ELIMINADO'),
	(35, 9, '3', '3', 3, 3, 'ELIMINADO'),
	(36, 9, '4123', '4', 4, 4, 'ELIMINADO'),
	(37, 9, '5', '5', 5, 5, 'ELIMINADO'),
	(38, 9, '6', '6', 6, 6, 'ELIMINADO'),
	(39, 9, '8', '8', 8, 8, 'ELIMINADO'),
	(40, 9, '1', '1', 1, 1, 'ELIMINADO'),
	(41, 9, '6', '6', 6, 6, 'ELIMINADO'),
	(42, 9, '9', '9', 9, 9, 'ELIMINADO'),
	(43, 9, '10', '10', 10, 10, 'ELIMINADO'),
	(44, 9, '1', '1', 1, 1, 'ELIMINADO'),
	(45, 9, '13', '1', 1, 1, 'ELIMINADO'),
	(46, 9, '3 3', 'meters', 10, 40, 'ELIMINADO'),
	(47, 9, 'New Itam', 'metros', 12, 12, 'ELIMINADO'),
	(48, 9, 'W', '1', 1, 1, 'ELIMINADO'),
	(49, 9, '17', '12', 12, 12, 'ELIMINADO'),
	(50, 9, '18', '18', 18, 18, 'ELIMINADO'),
	(51, 9, '19', '19', 19, 19, 'ELIMINADO'),
	(52, 9, '4', '10', 10, 10, 'ELIMINADO'),
	(53, 9, '5', '5', 5, 5, 'ELIMINADO'),
	(54, 9, '6', '6', 6, 6, 'ELIMINADO'),
	(55, 9, '7', '7', 7, 7, 'ELIMINADO'),
	(56, 9, '88', '8', 8, 8, 'ELIMINADO'),
	(57, 9, '9', '9', 9, 9, 'ELIMINADO'),
	(58, 9, '9', '9', 9, 9, 'ELIMINADO'),
	(59, 9, '9', '9', 1, 2, 'ELIMINADO'),
	(60, 9, 'Dos', '4', 4, 4, 'ACTIVO'),
	(61, 9, 'Three', 'metros', 60, 100, 'ACTIVO'),
	(62, 9, 'Cuadro', 'metros', 30, 500, 'ACTIVO'),
	(63, 10, 'Producto', 'metros', 23, 20, 'ACTIVO'),
	(64, 11, 'Armarios', 'cantidad', 2, 20, 'ACTIVO'),
	(65, 34, 'Akex', 'dss', 1, 20, 'ACTIVO'),
	(66, 34, 'Kjh', 'kjh', 123, 2, 'ACTIVO'),
	(67, 35, 'Clavos', 'docenas', 4, 120, 'ACTIVO'),
	(68, 35, 'Fierros', 'metros', 40, 4, 'ACTIVO');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;


-- Dumping structure for table mycparinas.proveedor
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `idProveedor` int(10) NOT NULL AUTO_INCREMENT,
  `proveedor` varchar(50) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `ruc` varchar(20) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVO',
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.proveedor: ~2 rows (approximately)
DELETE FROM `proveedor`;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` (`idProveedor`, `proveedor`, `direccion`, `ruc`, `telefono`, `fax`, `email`, `status`, `creado`) VALUES
	(1, 'ACE - Maestro', '', '123', '', '', '', 'ACTIVO', '2013-12-13 13:51:51'),
	(2, 'ACE - Maestro', 'calle 1 num 1414, corpad', '', '', '', '', 'ACTIVO', '2013-12-13 14:01:57');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;


-- Dumping structure for table mycparinas.rol
DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `idRol` int(10) NOT NULL AUTO_INCREMENT,
  `rol` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.rol: ~2 rows (approximately)
DELETE FROM `rol`;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`idRol`, `rol`) VALUES
	(1, 'Gerencia'),
	(2, 'Logistica');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;


-- Dumping structure for table mycparinas.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `idRol` int(11) NOT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `key` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'ACTIVO',
  `dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `LastLogin` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `FK_usuario_rol` (`idRol`),
  CONSTRAINT `FK_usuario_rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.usuario: ~2 rows (approximately)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idUsuario`, `idRol`, `cargo`, `nombre`, `apellido`, `email`, `password`, `key`, `status`, `dt`, `LastLogin`) VALUES
	(1, 1, 'Ing.', 'Miguel', 'Montero', 'test@test.com', 'Parra2013', NULL, 'ACTIVO', '2013-07-03 18:27:24', 1385632783),
	(2, 2, 'Ing.', 'Coke', NULL, 'test1@test.com', 'Parra2013', NULL, 'ACTIVO', '2013-07-04 22:16:58', 1385633065);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
