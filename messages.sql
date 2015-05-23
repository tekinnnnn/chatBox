/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : helpdesk

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-05-18 13:27:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text,
  `sender` varchar(255) DEFAULT NULL,
  `datetime` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', 'deneme ilk mesaj', 'tekin', '10:16:02');
INSERT INTO `messages` VALUES ('2', 'bunu da yazdım', 'tekin', '12:16:43');
INSERT INTO `messages` VALUES ('3', 'deneme', 'tekin', '12:17:29');
INSERT INTO `messages` VALUES ('4', 'bu admin', 'admin', '12:32:12');
INSERT INTO `messages` VALUES ('5', 'bu da müşteri', 'tekin', '12:32:25');
INSERT INTO `messages` VALUES ('6', 'deneme', 'tekin', '12:32:48');
INSERT INTO `messages` VALUES ('7', 'tekin', 'admin', '12:33:03');
INSERT INTO `messages` VALUES ('8', 'bu müşteri', 'tekin', '12:35:14');
INSERT INTO `messages` VALUES ('9', 'bu da admin', 'admin', '12:35:47');
INSERT INTO `messages` VALUES ('10', 'tekin', 'tekin', '12:37:35');
INSERT INTO `messages` VALUES ('11', 'bu çok çok uzun bir admin mesajı olacak bayağı büyük olması gerek', 'admin', '12:59:19');
INSERT INTO `messages` VALUES ('12', 'deneme', 'tekin', '13:20:44');
