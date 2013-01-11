/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : airlines

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-01-10 17:27:57
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of destinos
-- ----------------------------
INSERT INTO `destinos` VALUES ('1', 'Mazatlan');
INSERT INTO `destinos` VALUES ('2', 'La Paz');
INSERT INTO `destinos` VALUES ('3', 'Los Cabos');
INSERT INTO `destinos` VALUES ('4', 'Culiacan');
INSERT INTO `destinos` VALUES ('5', 'Guadalajara');
INSERT INTO `destinos` VALUES ('6', 'Mexico');

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
  `numVuelo` char(255) DEFAULT NULL,
  `costo` float(18,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vuelos
-- ----------------------------
INSERT INTO `vuelos` VALUES ('1', '1', '2', '2013-01-10 16:43:17', '20', '250', '1500.00');
INSERT INTO `vuelos` VALUES ('2', '1', '2', '2013-01-10 16:43:46', '40', '251', '1500.00');
INSERT INTO `vuelos` VALUES ('3', '1', '2', '2013-01-10 16:50:32', '20', '252', '1500.00');
