/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : airlines

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-01-15 17:33:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `destinos`
-- ----------------------------
DROP TABLE IF EXISTS `destinos`;
CREATE TABLE `destinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of destinos
-- ----------------------------
INSERT INTO `destinos` VALUES ('1', 'Mazatlan');
INSERT INTO `destinos` VALUES ('2', 'La Paz');
INSERT INTO `destinos` VALUES ('3', 'Los Cabos');
INSERT INTO `destinos` VALUES ('4', 'Puerto Vallarta');
INSERT INTO `destinos` VALUES ('5', 'Culiacan');

-- ----------------------------
-- Table structure for `pasajeros`
-- ----------------------------
DROP TABLE IF EXISTS `pasajeros`;
CREATE TABLE `pasajeros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_reservacion` int(11) NOT NULL,
  `nombre` char(255) NOT NULL,
  `apellidos` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pasajeros
-- ----------------------------
INSERT INTO `pasajeros` VALUES ('115', '71', 'Cesar', 'Bibriesca');
INSERT INTO `pasajeros` VALUES ('116', '72', 'Gerardo', 'Ortiz');
INSERT INTO `pasajeros` VALUES ('117', '73', 'a1', 'a1');
INSERT INTO `pasajeros` VALUES ('118', '73', 'b1', '');
INSERT INTO `pasajeros` VALUES ('119', '73', '', '');
INSERT INTO `pasajeros` VALUES ('120', '87', 'cesa', 'bibriesca');

-- ----------------------------
-- Table structure for `reservaciones`
-- ----------------------------
DROP TABLE IF EXISTS `reservaciones`;
CREATE TABLE `reservaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` char(255) DEFAULT NULL,
  `telefono` char(255) DEFAULT NULL,
  `nombre` char(255) DEFAULT NULL,
  `fk_vuelo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reservaciones
-- ----------------------------
INSERT INTO `reservaciones` VALUES ('71', 'cesar@email.com', '9848034', 'cesar', '251');
INSERT INTO `reservaciones` VALUES ('72', 'gerardo@email.com', '9801010', 'Gerardo', '252');
INSERT INTO `reservaciones` VALUES ('75', null, '123', 'a', null);
INSERT INTO `reservaciones` VALUES ('76', null, '123', 'b', null);
INSERT INTO `reservaciones` VALUES ('77', null, '123', 'b', null);
INSERT INTO `reservaciones` VALUES ('78', null, '123', 'c', null);
INSERT INTO `reservaciones` VALUES ('79', null, '123', 'c', null);
INSERT INTO `reservaciones` VALUES ('80', null, '123', 'd', null);
INSERT INTO `reservaciones` VALUES ('81', null, '123', 'd', null);
INSERT INTO `reservaciones` VALUES ('82', null, '123', 'e', null);
INSERT INTO `reservaciones` VALUES ('83', null, '123', 'e', null);
INSERT INTO `reservaciones` VALUES ('84', null, '123', 'f', null);
INSERT INTO `reservaciones` VALUES ('85', null, '123', 'f', null);
INSERT INTO `reservaciones` VALUES ('86', null, '123', 'g', null);
INSERT INTO `reservaciones` VALUES ('87', 'emal', '22534', 'nombre', '252');

-- ----------------------------
-- Table structure for `system_users`
-- ----------------------------
DROP TABLE IF EXISTS `system_users`;
CREATE TABLE `system_users` (
  `nick` char(255) NOT NULL,
  `pass` blob,
  `email` char(255) NOT NULL,
  `rol` int(11) DEFAULT '1',
  `fbid` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) NOT NULL DEFAULT '0',
  `picture` varchar(255) DEFAULT NULL,
  `originalName` char(255) DEFAULT NULL,
  `bio` varchar(150) DEFAULT NULL,
  `allowFavorites` tinyint(1) DEFAULT '1',
  `allowShared` tinyint(1) DEFAULT '1',
  `allowLiked` tinyint(1) DEFAULT '1',
  `keepLoged` tinyint(1) DEFAULT '0',
  `request` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nick` (`nick`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_users
-- ----------------------------
INSERT INTO `system_users` VALUES ('zesar1', 0xB12B642CA9534998F1768E82E35016B9, 'cbibriesca@hotmail.com', '2', null, '1', 'Zesar X', 'pic_1.jpg', 'retro_blue_background.jpg', 'sdfas ad asdasd a dasd ad asd asd asd asd as asd asd asd asd asd asd asd asd asd asd asd asd asd asd asd  as as as dasd sad asd asd asd asd asd asd as', '0', '1', '1', '1', '1355958733');
INSERT INTO `system_users` VALUES ('cesarx', 0xB12B642CA9534998F1768E82E35016B9, 'cesar@correo.com', '1', null, '2', '0', null, null, 'asdf', '1', '1', '1', '1', null);
INSERT INTO `system_users` VALUES ('asdfasdf', 0xB12B642CA9534998F1768E82E35016B9, 'asd@asd.com', '1', null, '3', '0', null, null, 'asdf', '1', '1', '1', '1', null);
INSERT INTO `system_users` VALUES ('', 0xB12B642CA9534998F1768E82E35016B9, '', '1', null, '4', '0', null, null, 'asfd', '1', '1', '1', '1', '1355891612');
INSERT INTO `system_users` VALUES ('username', 0xB12B642CA9534998F1768E82E35016B9, 'asdf@sadf.com', '1', null, '5', 'name', null, null, 'asdf', '1', '1', '1', '1', null);
INSERT INTO `system_users` VALUES ('zesar2', 0xB12B642CA9534998F1768E82E35016B9, 'zesar2@test.com', '1', null, '6', 'Zesar 2', null, null, null, '1', '1', '1', '0', null);
INSERT INTO `system_users` VALUES ('fouser', 0xB12B642CA9534998F1768E82E35016B9, 'userx2@email.com', '1', null, '10', '0', null, null, null, '1', '1', '1', '0', null);
INSERT INTO `system_users` VALUES ('TEST', 0xB12B642CA9534998F1768E82E35016B9, 'test@test.com', '1', null, '12', '0', null, null, null, '1', '1', '1', '0', null);

-- ----------------------------
-- Table structure for `vuelos`
-- ----------------------------
DROP TABLE IF EXISTS `vuelos`;
CREATE TABLE `vuelos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fk_origen` char(255) NOT NULL,
  `fk_destino` char(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `asientos_disponibles` int(11) DEFAULT NULL,
  `numVuelo` int(1) DEFAULT NULL,
  `costo` float(18,2) DEFAULT NULL,
  `asientos_totales` int(11) DEFAULT '40',
  PRIMARY KEY (`id`),
  UNIQUE KEY `numVuelo` (`numVuelo`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vuelos
-- ----------------------------
INSERT INTO `vuelos` VALUES ('12', '1', '2', '0000-00-00 00:00:00', '0', '2', '1.00', '40');
INSERT INTO `vuelos` VALUES ('13', '1', '2', '0000-00-00 00:00:00', '0', '1', '1.00', '40');
