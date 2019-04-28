/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : rizhi

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2019-04-26 11:46:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for rz
-- ----------------------------
DROP TABLE IF EXISTS `rz`;
CREATE TABLE `rz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `time1` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `zj` longtext,
  `jh` longtext CHARACTER SET utf8,
  `th` longtext CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of rz
-- ----------------------------
INSERT INTO `rz` VALUES ('10', '3', '2019-04-26 09:24:32', '2019:04:26', '313', '3113', '133');
INSERT INTO `rz` VALUES ('11', '3', '2019-04-26 10:24:43', '2019:04:26', '今天的我们很开心', '不加班', '不想加班');
INSERT INTO `rz` VALUES ('13', '2', '2019-04-26 10:55:09', '2019:04:26', '加班', '加班', '加班');
INSERT INTO `rz` VALUES ('12', '3', '2019-04-26 10:52:41', '2019:04:26', '4434', '343', '434');
INSERT INTO `rz` VALUES ('14', '2', '2019-04-26 11:30:39', '2019:04:26', '23212`', '434', '4432');
INSERT INTO `rz` VALUES ('15', '2', '2019-04-26 11:31:28', '2019:04:26', 'edwawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'waddaw', 'dwawa');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `time2` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'shuwen', 'de1737f4e8ef91bb48c9347952e2ddb5', '2019-04-26 11:31:28');
INSERT INTO `user` VALUES ('3', 'zhang', '96e79218965eb72c92a549dd5a330112', '2019-04-26 10:52:41');
