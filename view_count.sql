/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : videopedia

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2016-05-07 02:17:10
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `view_count`
-- ----------------------------
DROP TABLE IF EXISTS `view_count`;
CREATE TABLE `view_count` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `moviename` varchar(50) DEFAULT NULL,
  `count` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of view_count
-- ----------------------------
INSERT INTO `view_count` VALUES ('1', 'user', null, null);
INSERT INTO `view_count` VALUES ('2', 'user', 'The Jungle Book', null);
INSERT INTO `view_count` VALUES ('3', 'user', 'The Monkey King 2', '1');
INSERT INTO `view_count` VALUES ('4', 'user', 'Fan', '1');
INSERT INTO `view_count` VALUES ('5', 'user', 'Fan', '1');
INSERT INTO `view_count` VALUES ('6', 'user', 'Fan', '1');
INSERT INTO `view_count` VALUES ('7', 'user', 'The Jungle Book', '1');
INSERT INTO `view_count` VALUES ('8', 'user', 'The Jungle Book', '1');
INSERT INTO `view_count` VALUES ('9', 'user', 'The Jungle Book', '1');
INSERT INTO `view_count` VALUES ('10', 'user', 'Batman v Superman: Dawn of Justice', '1');
