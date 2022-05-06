-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Fev-2018 às 16:26
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
-- Database: `easyserv_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrecebimento`
--

DROP TABLE IF EXISTS `tbrecebimento`;
CREATE TABLE IF NOT EXISTS `tbrecebimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idos` int(11) DEFAULT NULL,
  `idc` int(11) DEFAULT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `valorpg` double DEFAULT NULL,
  `idcaixa` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `desconto` double DEFAULT NULL,
  `dinheiro` double DEFAULT NULL,
  `cartao` double DEFAULT NULL,
  `cheque` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `tbrecebimento`
--

INSERT INTO `tbrecebimento` (`id`, `idos`, `idc`, `nome`, `data`, `valorpg`, `idcaixa`, `status`, `total`, `desconto`, `dinheiro`, `cartao`, `cheque`) VALUES
(1, 11, NULL, NULL, NULL, 45.1, 0, 1, 45.1, 0, 100, 0, 0),
(2, 12, NULL, NULL, NULL, 85.1, 0, 1, 85.1, 0, 90, 0, 0),
(3, 15, NULL, NULL, NULL, 200, 0, 1, 200, 0, 200, 0, 0),
(4, 16, NULL, NULL, NULL, 100, 0, 1, 120, 20, 100, 0, 0),
(5, 17, NULL, NULL, NULL, 190, 0, 1, 191.89, 1.89, 200, 0, 0),
(6, 13, NULL, NULL, NULL, 40, 0, 1, 40, 0, 40, 0, 0),
(7, 13, NULL, NULL, NULL, 40, 0, 1, 40, 0, 40, 0, 0),
(8, 13, NULL, NULL, NULL, 40, 0, 1, 40, 0, 40, 0, 0),
(9, 13, NULL, NULL, NULL, 40, 0, 1, 40, 0, 40, 0, 0),
(10, 13, NULL, NULL, NULL, 40, 0, 1, 40, 0, 40, 0, 0),
(11, 13, NULL, NULL, NULL, 40, 0, 1, 40, 0, 40, 0, 0),
(12, 9, NULL, NULL, NULL, 56.89, 0, 1, 56.89, 0, 60, 0, 0),
(13, 18, NULL, NULL, NULL, 35, 0, 1, 35, 0, 35, 0, 0),
(14, 21, NULL, NULL, '2024-01-18 18:11:00', 100, 0, 1, 100, 0, 100, 0, 0),
(15, 22, NULL, NULL, '2024-01-18 16:15:00', 45.1, 0, 1, 45.1, 0, 45.1, 0, 0),
(16, 23, NULL, NULL, '2018-01-24 16:17:00', 45.1, 0, 1, 45.1, 0, 45.1, 0, 0),
(17, 24, NULL, NULL, '2018-01-24 16:23:00', 200, 0, 1, 200, 0, 200, 0, 0),
(18, 25, NULL, NULL, '2018-01-24 16:26:00', 40, 0, 1, 40, 0, 40, 0, 0),
(19, 26, NULL, NULL, '2018-01-24 16:27:00', 45.1, 0, 1, 45.1, 0, 45.1, 0, 0),
(20, 1, NULL, NULL, '2024-01-18 16:37:00', 45.1, 0, 1, 45.1, 0, 45.1, 0, 0),
(21, 2, NULL, NULL, '2024-01-18 16:38:00', 90, 0, 1, 100, 10, 90, 0, 0),
(22, 3, NULL, NULL, '2024-01-18 16:39:00', 20, 0, 1, 20, 0, 20, 0, 0),
(23, 4, NULL, NULL, '2024-01-18 16:42:00', 45.1, 0, 1, 45.1, 0, 45.1, 0, 0),
(24, 6, NULL, NULL, '2025-01-18 19:25:00', 45.1, 0, 1, 45.1, 0, 45.1, 0, 0),
(25, 7, NULL, NULL, '2026-01-18 15:57:00', 145.1, 0, 1, 145.1, 0, 145.1, 0, 0),
(26, 7, NULL, NULL, '2031-01-18 15:23:00', 145.1, 0, 1, 145.1, 0, 145.1, 0, 0),
(27, 1, NULL, NULL, '2001-02-18 11:35:00', 40, 0, 1, 40, 0, 40, 0, 0),
(28, 2, NULL, NULL, '2001-02-18 11:37:00', 185.1, 0, 1, 185.1, 0, 185.1, 0, 0),
(29, 3, NULL, NULL, '2001-02-18 11:44:00', 100, 0, 1, 100, 0, 100, 0, 0),
(30, 4, NULL, NULL, '2001-02-18 14:31:00', 380.9, 0, 1, 380.9, 0, 380.9, 0, 0),
(31, 5, NULL, NULL, '2001-02-18 14:33:00', 265.6, 0, 1, 265.6, 0, 265.6, 0, 0),
(32, 6, NULL, NULL, '2001-02-18 14:33:00', 245.1, 0, 1, 245.1, 0, 245.1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
