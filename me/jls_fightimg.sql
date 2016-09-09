/*
Navicat MySQL Data Transfer

Source Server         : 101.200.82.5
Source Server Version : 50629
Source Host           : 101.200.82.5:3306
Source Database       : jiliansai

Target Server Type    : MYSQL
Target Server Version : 50629
File Encoding         : 65001

Date: 2016-09-09 16:06:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jls_fightimg
-- ----------------------------
DROP TABLE IF EXISTS `jls_fightimg`;
CREATE TABLE `jls_fightimg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titile` varchar(255) NOT NULL DEFAULT '',
  `img` varchar(255) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '1',
  `comment` varchar(255) NOT NULL DEFAULT '',
  `stime` int(11) NOT NULL DEFAULT '0',
  `etime` int(11) NOT NULL DEFAULT '0',
  `timeline` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jls_fightimg
-- ----------------------------
