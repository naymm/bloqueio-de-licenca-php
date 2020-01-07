-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Jan-2020 às 20:01
-- Versão do servidor: 5.7.24
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licenca`
--
CREATE DATABASE IF NOT EXISTS `licenca` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `licenca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `licencas`
--

DROP TABLE IF EXISTS `licencas`;
CREATE TABLE IF NOT EXISTS `licencas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `license_key` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_activation` longtext COLLATE utf8_unicode_ci,
  `date_experation` longtext COLLATE utf8_unicode_ci,
  `days_license` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
