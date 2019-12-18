-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `feedbackform`;
CREATE DATABASE `feedbackform` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `feedbackform`;

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameFO` varchar(55) NOT NULL,
  `text` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

TRUNCATE `message`;
INSERT INTO `message` (`id`, `nameFO`, `text`, `email`, `date`) VALUES
(1,	'asdfasdf',	'alert(\"Ð’Ð·Ð»Ð¾Ð¼Ð°Ð½Ñ‹\") ',	'23423@34213.ru',	'2019-12-18 12:02:54'),
(2,	'asdfasdf',	'asdfasdf alert(\"asdf\"); ',	'123@fasdf.ru',	'2019-12-18 12:03:30');

-- 2019-12-18 12:10:21
