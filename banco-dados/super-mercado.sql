-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03-Mar-2018 às 01:15
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super-mercado`
--
CREATE DATABASE IF NOT EXISTS `super-mercado` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `super-mercado`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(240) NOT NULL,
  `valor` varchar(240) NOT NULL,
  `tipo` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `valor`, `tipo`) VALUES
(1, 'sabão', '1,50', 'higiene'),
(2, 'shampoo', '6,35', 'higiene'),
(3, 'doritos', '8,70', 'comida'),
(4, 'picanha', '23,90', 'carne'),
(5, 'detergente', '3,20', 'limpeza'),
(6, 'desinfetante', '4,79', 'limpeza'),
(7, 'bolacha', '4,70', 'comida'),
(8, '4chan', '6,66', 'desconhecido');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
