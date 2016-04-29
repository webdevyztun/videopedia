/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : videopedia

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2016-04-30 03:10:03
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Cartoon');
INSERT INTO `categories` VALUES ('2', 'Super Hero');
INSERT INTO `categories` VALUES ('3', 'Drama');

-- ----------------------------
-- Table structure for `movies`
-- ----------------------------
DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) DEFAULT NULL,
  `moviename` varchar(255) NOT NULL,
  `directedby` varchar(255) DEFAULT NULL,
  `producedby` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `review` text,
  `smallimage` text,
  `largeimage` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movies
-- ----------------------------
INSERT INTO `movies` VALUES ('1', 'Cartoon', 'Zootopia', 'Byron Howard', 'Clark Spencer', 'Hollywood', 'From the largest elephant to the smallest shrew, the city of Zootopia is a mammal metropolis where various animals live and thrive. When Judy Hopps (Ginnifer Goodwin) becomes the first rabbit to join the police force, she quickly learns how tough it is to enforce the law. Determined to prove herself, Judy jumps at the opportunity to solve a mysterious case. Unfortunately, that means working with Nick Wilde (Jason Bateman), a wily fox who makes her job even harder.', 'smallimage_146196027710.jpg', 'largeimage_146196027713.jpg', null);
INSERT INTO `movies` VALUES ('2', 'Super Hero', 'Batman v Superman: Dawn of Justice', 'Zack Snyder', 'Charles Roven', 'Hollywood', 'It\'s been nearly two years since Superman\'s (Henry Cavill) colossal battle with Zod (Michael Shannon) devastated the city of Metropolis. The loss of life and collateral damage left many feeling angry and helpless, including crime-fighting billionaire Bruce Wayne (Ben Affleck). Convinced that Superman is now a threat to humanity, Batman embarks on a personal vendetta to end his reign on Earth, while the conniving Lex Luthor (Jesse Eisenberg) launches his own crusade against the Man of Steel.', 'smallimage_14619611505.jpg', 'largeimage_14619611505.jpg', null);
INSERT INTO `movies` VALUES ('3', 'Drama', 'The Jungle Book', 'Wolfgang Reitherman', 'Walt Disney', 'Hollywood', 'Raised by a family of wolves since birth, Mowgli (Neel Sethi) must leave the only home he\'s ever known when the fearsome tiger Shere Khan (Idris Elba) unleashes his mighty roar. Guided by a no-nonsense panther (Ben Kingsley) and a free-spirited bear (Bill Murray), the young boy meets an array of jungle animals, including a slithery python and a smooth-talking ape. Along the way, Mowgli learns valuable life lessons as his epic journey of self-discovery leads to fun and adventure.', 'smallimage_14619613288.jpg', 'largeimage_146196132810.jpg', null);
INSERT INTO `movies` VALUES ('4', 'Super Hero', 'The Monkey King 2', 'Cheang Pou-soi', 'Kiefer Liu', 'COC', 'The film is based on selected chapters of Wu Cheng\'en\'s classical novel Journey to the West and will tell the story of how the young monk Tang Sanzang\'s travels brings him to the Five fingers mountain and meets Sun Wukong where he\'s trapped beneath. It is there that they will form a bond as Master and disciple. In their travels, they will also meet Zhu Ba Jie and Sha Wu Jing whom also become the disciples of Sanzang and join them in their travels to Leiyin Temple at Vulture Peak in India to collect scriptures to bring back to Chang An. This sequel, will focus on the story arc of the White Bone Demon who is hell bent on consuming San Zang, because this will grant her Demon-hood for all eternity as she did not want to go through reincarnation.', 'smallimage_146196188511.jpg', 'largeimage_146196188515.jpg', null);
INSERT INTO `movies` VALUES ('5', 'Drama', 'Fan', 'Maneesh Sharma', 'Aditya Chopra', 'Bollywood', 'Gaurav Chadana (Shahrukh Khan) is a Delhi-based diehard fan of Bollywood superstar Aryan Khanna (also Shahrukh Khan). When Gaurav wins a local talent show competition impersonating his idol Aryan, he embarks on a journey to meet his idol in person and show him his winning trophy on his idol\'s birthday. Gaurav travels to Mumbai without a train ticket.', 'smallimage_14619623249.jpg', 'largeimage_146196232411.jpg', null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'user', 'user@gmail.com', '698d51a19d8a121ce581499d7b701668');
