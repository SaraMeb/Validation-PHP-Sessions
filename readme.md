Validation php:
vagrant configurée avec l'ip : 192.168.33.20
Malheuresueemtn je n'ai pas eu le temps de finir ce que je voulais fournir

Le  dump de ma base de données:

-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `Shop-DB` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Shop-DB`;

DROP TABLE IF EXISTS `shoes`;
CREATE TABLE `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` bigint(20) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_id` (`type_id`),
  CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `shoes` (`id`, `name`, `quantity`, `size`, `type_id`) VALUES
(1,	'Derbies en cuir Marrons',	10,	0,	6),
(3,	'Adidas Stan Smith',	6,	0,	7),
(6,	'Mocassins dorés',	7,	0,	8),
(7,	'Escarpins à plateforme bleu',	3,	0,	3),
(11,	'Richelieus à lacets noires',	7,	0,	5),
(12,	'Sandales à talons noir',	15,	0,	4);

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `types` (`id`, `type`) VALUES
(3,	'Escarpins'),
(4,	'Sandales'),
(5,	'Bottes et Bottines'),
(6,	'Chaussures à lacets'),
(7,	'Sneakers'),
(8,	'Chaussures plates');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `email` text NOT NULL,
  `password` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1,	'Iris',	'iris69@gmail.com',	'password');

-- 2018-12-13 16:19:07
