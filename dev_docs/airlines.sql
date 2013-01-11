/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : airlines

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-01-11 14:20:09
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

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
-- Table structure for `pasajeros`
-- ----------------------------
DROP TABLE IF EXISTS `pasajeros`;
CREATE TABLE `pasajeros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_reservacion` int(11) NOT NULL,
  `nombre` char(255) NOT NULL,
  `apellidos` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pasajeros
-- ----------------------------
INSERT INTO `pasajeros` VALUES ('6', '0', '', '');
INSERT INTO `pasajeros` VALUES ('7', '0', '', '');
INSERT INTO `pasajeros` VALUES ('8', '0', '', '');
INSERT INTO `pasajeros` VALUES ('9', '0', 'a', 'b');
INSERT INTO `pasajeros` VALUES ('10', '0', 'a2', 'b2');
INSERT INTO `pasajeros` VALUES ('11', '16', '', '');
INSERT INTO `pasajeros` VALUES ('12', '18', 's', 'a');
INSERT INTO `pasajeros` VALUES ('13', '18', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('14', '19', 's', 'a');
INSERT INTO `pasajeros` VALUES ('15', '19', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('16', '20', 's', 'a');
INSERT INTO `pasajeros` VALUES ('17', '20', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('18', '21', 's', 'a');
INSERT INTO `pasajeros` VALUES ('19', '21', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('20', '22', 's', 'a');
INSERT INTO `pasajeros` VALUES ('21', '22', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('22', '23', 's', 'a');
INSERT INTO `pasajeros` VALUES ('23', '23', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('24', '24', 's', 'a');
INSERT INTO `pasajeros` VALUES ('25', '24', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('26', '25', 's', 'a');
INSERT INTO `pasajeros` VALUES ('27', '25', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('28', '26', 's', 'a');
INSERT INTO `pasajeros` VALUES ('29', '26', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('30', '27', 's', 'a');
INSERT INTO `pasajeros` VALUES ('31', '27', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('32', '28', 's', 'a');
INSERT INTO `pasajeros` VALUES ('33', '28', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('34', '29', 's', 'a');
INSERT INTO `pasajeros` VALUES ('35', '29', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('36', '30', 's', 'a');
INSERT INTO `pasajeros` VALUES ('37', '30', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('38', '31', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('39', '31', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('40', '32', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('41', '32', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('42', '33', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('43', '33', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('44', '34', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('45', '34', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('46', '35', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('47', '35', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('48', '36', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('49', '36', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('50', '37', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('51', '37', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('52', '38', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('53', '38', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('54', '39', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('55', '39', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('56', '40', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('57', '40', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('58', '41', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('59', '41', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('60', '42', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('61', '42', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('62', '43', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('63', '43', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('64', '44', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('65', '44', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('66', '45', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('67', '45', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('68', '46', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('69', '46', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('70', '47', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('71', '47', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('72', '48', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('73', '48', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('74', '49', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('75', '49', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('76', '50', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('77', '50', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('78', '51', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('79', '51', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('80', '52', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('81', '52', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('82', '53', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('83', '53', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('84', '54', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('85', '54', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('86', '55', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('87', '55', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('88', '56', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('89', '56', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('90', '57', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('91', '57', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('92', '58', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('93', '58', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('94', '59', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('95', '59', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('96', '60', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('97', '60', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('98', '61', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('99', '61', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('100', '62', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('101', '62', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('102', '63', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('103', '63', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('104', '64', 'a', 'a');
INSERT INTO `pasajeros` VALUES ('105', '64', 'b', 'b');
INSERT INTO `pasajeros` VALUES ('106', '65', 'a', 'qq');
INSERT INTO `pasajeros` VALUES ('107', '65', 'qqq', 'qww');
INSERT INTO `pasajeros` VALUES ('108', '65', 'q22', '222');

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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reservaciones
-- ----------------------------
INSERT INTO `reservaciones` VALUES ('16', '', '', '', '253');
INSERT INTO `reservaciones` VALUES ('17', null, null, null, null);
INSERT INTO `reservaciones` VALUES ('18', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('19', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('20', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('21', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('22', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('23', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('24', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('25', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('26', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('27', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('28', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('29', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('30', 'email', 'tel', 'nom', '253');
INSERT INTO `reservaciones` VALUES ('31', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('32', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('33', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('34', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('35', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('36', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('37', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('38', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('39', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('40', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('41', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('42', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('43', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('44', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('45', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('46', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('47', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('48', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('49', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('50', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('51', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('52', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('53', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('54', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('55', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('56', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('57', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('58', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('59', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('60', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('61', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('62', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('63', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('64', 'email', 'telefono', 'nombre', '253');
INSERT INTO `reservaciones` VALUES ('65', 'aaaaa', 'aaa', 'aaa', '253');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vuelos
-- ----------------------------
INSERT INTO `vuelos` VALUES ('1', '1', '2', '2013-01-10 16:43:17', '20', '250', '1500.00');
INSERT INTO `vuelos` VALUES ('2', '1', '2', '2013-01-10 16:43:46', '40', '251', '1500.00');
INSERT INTO `vuelos` VALUES ('3', '1', '2', '2013-01-10 16:50:32', '20', '252', '1500.00');
INSERT INTO `vuelos` VALUES ('4', '1', '2', '2013-01-11 12:25:00', '50', '253', '1600.00');
INSERT INTO `vuelos` VALUES ('5', '1', '4', '2013-01-11 12:31:29', '12', '255', '1500.00');
