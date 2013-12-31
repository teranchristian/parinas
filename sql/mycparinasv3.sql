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


-- Dumping structure for table mycparinas.auth_actions
DROP TABLE IF EXISTS `auth_actions`;
CREATE TABLE IF NOT EXISTS `auth_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `navigation_item` tinyint(4) DEFAULT NULL,
  `order` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.auth_actions: ~11 rows (approximately)
DELETE FROM `auth_actions`;
/*!40000 ALTER TABLE `auth_actions` DISABLE KEYS */;
INSERT INTO `auth_actions` (`id`, `date_entered`, `date_modified`, `name`, `module_id`, `type`, `navigation_item`, `order`) VALUES
	(1, '2009-02-12 18:49:31', '2009-02-12 18:49:31', 'Ver Ordenes', 1, 'gerencia', 1, 1),
	(2, '2009-02-12 18:49:31', '2009-02-12 18:49:31', 'Nueva Orden', 1, 'nuevo', 1, 2),
	(3, NULL, NULL, 'Ver Usuario', 2, 'index', 1, 1),
	(4, NULL, NULL, 'Ver Historial', 3, 'index', 1, 1),
	(5, NULL, NULL, 'Ver Centro de Costo', 4, '', 1, 1),
	(6, NULL, NULL, 'Nuevo Centro de Costo', 4, 'nuevo', 1, 2),
	(7, NULL, NULL, 'Ver Obras', 5, '', 1, 1),
	(8, NULL, NULL, 'Nueva Obra', 5, 'nuevo', 1, 2),
	(9, NULL, NULL, 'Ver Proveedores', 6, '', 1, 1),
	(10, NULL, NULL, 'Nuevo Proveedor', 6, 'nuevo', 1, 2),
	(11, NULL, NULL, 'Ver Ordenes', 1, 'logistica', 1, 1);
/*!40000 ALTER TABLE `auth_actions` ENABLE KEYS */;


-- Dumping structure for table mycparinas.auth_actions_auth_roles
DROP TABLE IF EXISTS `auth_actions_auth_roles`;
CREATE TABLE IF NOT EXISTS `auth_actions_auth_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auth_role_id` int(11) DEFAULT NULL,
  `auth_action_id` int(11) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.auth_actions_auth_roles: ~13 rows (approximately)
DELETE FROM `auth_actions_auth_roles`;
/*!40000 ALTER TABLE `auth_actions_auth_roles` DISABLE KEYS */;
INSERT INTO `auth_actions_auth_roles` (`id`, `auth_role_id`, `auth_action_id`, `date_modified`) VALUES
	(1, 1, 1, '2009-02-12 18:47:56'),
	(2, 1, 2, '2009-02-12 18:47:56'),
	(3, 1, 3, NULL),
	(4, 1, 4, NULL),
	(5, 2, 5, NULL),
	(6, 2, 6, NULL),
	(7, 2, 7, NULL),
	(8, 2, 8, NULL),
	(9, 2, 9, NULL),
	(10, 2, 10, NULL),
	(11, 2, 2, NULL),
	(12, 2, 11, NULL),
	(13, 2, 4, NULL);
/*!40000 ALTER TABLE `auth_actions_auth_roles` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.centrocosto: ~23 rows (approximately)
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
	(19, 2, '12312', 'COKE JEFE 1', NULL, 'ACTIVO'),
	(20, 1, '123', 'AS ASDAS ASD12', NULL, 'ELIMINADO'),
	(21, 1, '001', '0', NULL, 'ELIMINADO'),
	(22, 1, '2', '222', NULL, 'ELIMINADO'),
	(23, 1, '123', 'TICO', '2013-12-21 18:12:02', 'ELIMINADO');
/*!40000 ALTER TABLE `centrocosto` ENABLE KEYS */;


-- Dumping structure for table mycparinas.direccionempresa
DROP TABLE IF EXISTS `direccionempresa`;
CREATE TABLE IF NOT EXISTS `direccionempresa` (
  `idDireccionEmpresa` int(10) NOT NULL AUTO_INCREMENT,
  `idEmpresa` int(10) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `fax` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idDireccionEmpresa`),
  KEY `FK_direccionempresa_empresa` (`idEmpresa`),
  CONSTRAINT `FK_direccionempresa_empresa` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.direccionempresa: ~2 rows (approximately)
DELETE FROM `direccionempresa`;
/*!40000 ALTER TABLE `direccionempresa` DISABLE KEYS */;
INSERT INTO `direccionempresa` (`idDireccionEmpresa`, `idEmpresa`, `direccion`, `departamento`, `telefono`, `fax`) VALUES
	(1, 1, 'Av. Cesar Vallejo 1473 - Lince', 'Lima', '4408757', '2226292'),
	(2, 1, 'Av. Tarapaca 231', 'Piura', '382314', '381081');
/*!40000 ALTER TABLE `direccionempresa` ENABLE KEYS */;


-- Dumping structure for table mycparinas.empresa
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `idEmpresa` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) NOT NULL,
  `ruc` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.empresa: ~1 rows (approximately)
DELETE FROM `empresa`;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`idEmpresa`, `nombre`, `ruc`) VALUES
	(1, 'M y C Pariñas S.A.', '20222232750');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;


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


-- Dumping structure for table mycparinas.modules
DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `enabled` tinyint(4) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(100) DEFAULT NULL,
  `order` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.modules: ~6 rows (approximately)
DELETE FROM `modules`;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`id`, `name`, `description`, `enabled`, `date_created`, `type`, `order`) VALUES
	(1, 'Ordenes', 'Lista de Ordenes', 1, '2009-02-12 18:54:00', 'orden', 4),
	(2, 'Usuarios 2', 'Lista de usuario', 1, NULL, 'usuario', 5),
	(3, 'Historial', 'reportes pasados', 1, NULL, 'historial', 6),
	(4, 'Centro de Costo', 'mantenimiento de centro de costo', 1, NULL, 'centroCosto', 1),
	(5, 'Obra', 'mantenimiento de Obras', 1, NULL, 'obra', 2),
	(6, 'Proveedores', 'mantenimiento de proveedores', 1, '2013-12-21 17:18:09', 'proveedor', 3);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;


-- Dumping structure for table mycparinas.numeroorden
DROP TABLE IF EXISTS `numeroorden`;
CREATE TABLE IF NOT EXISTS `numeroorden` (
  `id` int(1) NOT NULL,
  `sufijo` varchar(5) DEFAULT NULL,
  `numeracion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='mantiene el numero de ordenes';

-- Dumping data for table mycparinas.numeroorden: ~1 rows (approximately)
DELETE FROM `numeroorden`;
/*!40000 ALTER TABLE `numeroorden` DISABLE KEYS */;
INSERT INTO `numeroorden` (`id`, `sufijo`, `numeracion`) VALUES
	(1, '', 7);
/*!40000 ALTER TABLE `numeroorden` ENABLE KEYS */;


-- Dumping structure for table mycparinas.obra
DROP TABLE IF EXISTS `obra`;
CREATE TABLE IF NOT EXISTS `obra` (
  `idObra` int(10) NOT NULL AUTO_INCREMENT,
  `idCentroCosto` int(10) NOT NULL,
  `idEstadoObra` int(10) NOT NULL,
  `idUsuario` int(11) NOT NULL,
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
  KEY `FK_obra_users` (`idUsuario`),
  CONSTRAINT `FK_obra_centrocosto` FOREIGN KEY (`idCentroCosto`) REFERENCES `centrocosto` (`idCentroCosto`),
  CONSTRAINT `FK_obra_estadoobra` FOREIGN KEY (`idEstadoObra`) REFERENCES `estadoobra` (`idEstadoObra`),
  CONSTRAINT `FK_obra_users` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.obra: ~22 rows (approximately)
DELETE FROM `obra`;
/*!40000 ALTER TABLE `obra` DISABLE KEYS */;
INSERT INTO `obra` (`idObra`, `idCentroCosto`, `idEstadoObra`, `idUsuario`, `descripcion`, `montoContrato`, `moneda`, `fechaInicio`, `fechaFin`, `creado`, `status`) VALUES
	(1, 2, 1, 2, '21', 123, NULL, '2013-07-07', NULL, '2013-07-07 10:30:58', 'ELIMINADO'),
	(2, 2, 3, 2, 'test', 123, NULL, NULL, NULL, '2013-07-07 10:31:33', 'ELIMINADO'),
	(3, 2, 1, 2, 'Obra 123', 123, 'd', '2013-07-10', '2013-10-07', '2013-07-07 10:49:18', 'ACTIVO'),
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
  `numeroOrden` varchar(10) DEFAULT NULL,
  `idProveedor` int(11) NOT NULL,
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
  KEY `FK_orden_procesoorden` (`idProcesoOrden`),
  KEY `FK__usuario` (`idSolicitante`),
  KEY `FK_orden_proveedor` (`idProveedor`),
  CONSTRAINT `FK_orden_procesoorden` FOREIGN KEY (`idProcesoOrden`) REFERENCES `procesoorden` (`idProcesoOrden`),
  CONSTRAINT `FK_orden_proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`),
  CONSTRAINT `FK__obra` FOREIGN KEY (`idObra`) REFERENCES `obra` (`idObra`),
  CONSTRAINT `FK__usuario` FOREIGN KEY (`idSolicitante`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.orden: ~13 rows (approximately)
DELETE FROM `orden`;
/*!40000 ALTER TABLE `orden` DISABLE KEYS */;
INSERT INTO `orden` (`idOrden`, `idProcesoOrden`, `numeroOrden`, `idProveedor`, `idObra`, `idSolicitante`, `cliente`, `fechaOrden`, `creado`, `status`, `moneda`, `mensaje`) VALUES
	(9, 5, '3', 1, 3, 1, 'Christian Test 2', '2013-12-11', '2013-12-05 20:30:43', 'ACTIVO', 'USD', ''),
	(10, 3, '2', 2, 11, 2, 'Christian Test 123', '2013-12-11', '2013-12-05 20:31:34', 'ACTIVO', 'USD', ''),
	(11, 4, '3', 1, 11, 1, 'Felix Teran Suarez', '2013-12-13', '2013-12-05 20:33:45', 'ACTIVO', 'USD', '<b>Montero Jorge Luis</b><span class=\'float:right;\'> - (03:12 am 29/12/2013)</span></br><hr> - nuevo 2</br></p>nueva nota'),
	(34, 3, '3', 1, 3, 1, '', NULL, '2013-12-13 14:18:20', 'ACTIVO', 'PEN', ''),
	(35, 5, '3', 1, 18, 1, '', NULL, '2013-12-13 17:21:59', 'ACTIVO', 'PEN', ''),
	(36, 1, '2', 2, 21, 1, NULL, NULL, '2013-12-30 20:30:04', 'ACTIVO', NULL, NULL),
	(37, 1, '2', 2, 19, 2, NULL, NULL, '2013-12-30 20:31:45', 'ACTIVO', NULL, NULL),
	(38, 1, '2', 1, 19, 3, NULL, NULL, '2013-12-30 20:35:06', 'ACTIVO', NULL, NULL),
	(39, 1, '3', 1, 19, 2, NULL, NULL, '2013-12-30 20:35:31', 'ACTIVO', NULL, NULL),
	(40, 1, '4', 2, 14, 3, NULL, NULL, '2013-12-30 22:40:56', 'ACTIVO', NULL, NULL),
	(41, 1, 'D5', 2, 20, 2, NULL, NULL, '2013-12-30 22:53:41', 'ACTIVO', NULL, NULL),
	(42, 1, 'D6', 1, 21, 2, NULL, NULL, '2013-12-30 22:53:59', 'ACTIVO', NULL, NULL),
	(43, 1, '7', 2, 20, 3, NULL, NULL, '2013-12-30 22:54:20', 'ACTIVO', NULL, NULL);
/*!40000 ALTER TABLE `orden` ENABLE KEYS */;


-- Dumping structure for table mycparinas.procesoorden
DROP TABLE IF EXISTS `procesoorden`;
CREATE TABLE IF NOT EXISTS `procesoorden` (
  `idProcesoOrden` int(10) NOT NULL AUTO_INCREMENT,
  `procesoOrden` varchar(20) DEFAULT NULL,
  `procesoOrdenColor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idProcesoOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='estado de la obra';

-- Dumping data for table mycparinas.procesoorden: ~5 rows (approximately)
DELETE FROM `procesoorden`;
/*!40000 ALTER TABLE `procesoorden` DISABLE KEYS */;
INSERT INTO `procesoorden` (`idProcesoOrden`, `procesoOrden`, `procesoOrdenColor`) VALUES
	(1, 'Nueva Orden', NULL),
	(2, 'Por aprobar', 'label-warning'),
	(3, 'Modificar', 'label-info'),
	(4, 'Aprobada', 'label-success'),
	(5, 'Archivada', 'label-success');
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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.producto: ~37 rows (approximately)
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
	(62, 11, 'Fierros', 'metros', 23, 8500.3, 'ACTIVO'),
	(63, 10, 'Producto', 'metros', 23, 20, 'ACTIVO'),
	(64, 11, 'Z Flex Policuretano X GLN asdasdasdasd asdasdasdasdasdasdasdjhaksldjlakjsd;lajsdlkjalksdj asdkjhsddlkfjhlsakjdfhl', 'cantidad', 2, 20, 'ACTIVO'),
	(65, 34, 'Akex', 'dss', 1, 20, 'ACTIVO'),
	(66, 34, 'Kjh', 'kjh', 123, 2, 'ACTIVO'),
	(67, 35, 'Clavos', 'docenas', 4, 120, 'ACTIVO'),
	(68, 35, 'Fierros', 'metros', 40, 4, 'ACTIVO'),
	(69, 34, 'Polos Negros', 'doces', 3, 100, 'ACTIVO');
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
	(1, 'ACE - Maestro', 'unit 4/1 cook st', '123', '4759564', '', '', 'ACTIVO', '2013-12-13 13:51:51'),
	(2, 'ACE', 'calle 1 num 1414, corpad', '', '', '', '', 'ACTIVO', '2013-12-13 14:01:57');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;


-- Dumping structure for table mycparinas.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `date_modified` datetime DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.roles: ~2 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `description`, `date_modified`, `date_entered`) VALUES
	(1, 'administrator', 'Some administrator account', '2009-02-12 18:02:49', '2009-02-12 18:02:49'),
	(2, 'logistica', NULL, NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table mycparinas.roles_users
DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE IF NOT EXISTS `roles_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `auth_role_id` int(11) DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.roles_users: ~3 rows (approximately)
DELETE FROM `roles_users`;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
INSERT INTO `roles_users` (`id`, `user_id`, `auth_role_id`, `date_modified`) VALUES
	(1, 1, 1, '2009-02-12 18:02:10'),
	(2, 2, 2, NULL),
	(3, 3, 2, NULL);
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;


-- Dumping structure for table mycparinas.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `lastName` varchar(150) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `name`, `lastName`, `password`, `active`, `deleted`) VALUES
	(1, 'a', 'Miguel', 'Montero', '0cc175b9c0f1b6a831c399e269772661', 1, 0),
	(2, 'b', 'Jorge Luis', 'Montero', '92eb5ffee6ae2fec3ad71c777531578f', 1, 0),
	(3, 'c', 'Christian', 'Teran', '4a8a08f09d37b73795649038408b5f33', 1, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table mycparinas.user_tokens
DROP TABLE IF EXISTS `user_tokens`;
CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_agent` varchar(32) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=340 DEFAULT CHARSET=latin1;

-- Dumping data for table mycparinas.user_tokens: ~2 rows (approximately)
DELETE FROM `user_tokens`;
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
INSERT INTO `user_tokens` (`id`, `user_id`, `user_agent`, `token`, `created`, `expires`) VALUES
	(337, 1, '2a45585bf6fbca9e24972054edb9a714', '2d0336091cbd32eef23fb71cd63225397ccc509a', 1388404618, 1389614218),
	(339, 2, '2a45585bf6fbca9e24972054edb9a714', '8178b57149f85c3d9bee71ef5bbf8cf52fa2af1c', 1388480392, 1389689992);
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;


-- Dumping structure for trigger mycparinas.OrdenNumero
DROP TRIGGER IF EXISTS `OrdenNumero`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `OrdenNumero` BEFORE INSERT ON `orden` FOR EACH ROW BEGIN
DECLARE numero_orden varchar(5);
DECLARE numero int;

/** Check if the sufijo variable is null **/
IF(select sufijo from numeroorden LIMIT 1 )is null THEN
	SET numero_orden = (select numeracion +1  from numeroorden LIMIT 1);
ELSE
	SET numero_orden = (select CONCAT(sufijo,'', numeracion+1) from numeroorden LIMIT 1);
END IF;

/** pass the new number to the 'numberoOrden' variable to be inserted **/
SET NEW.numeroOrden = numero_orden;

/** increase the 'numeracion' field on the 'numeroorden' table and update it **/
SET numero =(select numeracion +1  from numeroorden LIMIT 1);
update numeroorden SET numeracion=numero  where id=1;

END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
