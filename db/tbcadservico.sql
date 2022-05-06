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
-- Estrutura da tabela `tbcadservico`
--

DROP TABLE IF EXISTS `tbcadservico`;
CREATE TABLE IF NOT EXISTS `tbcadservico` (
  `tbcadSid` int(11) NOT NULL AUTO_INCREMENT,
  `tbcadSdescricao` varchar(40) NOT NULL,
  `tbcadSvalor` double NOT NULL,
  PRIMARY KEY (`tbcadSid`),
  UNIQUE KEY `tbcadSid` (`tbcadSid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `tbcadservico`
--

INSERT INTO `tbcadservico` (`tbcadSid`, `tbcadSdescricao`, `tbcadSvalor`) VALUES
(5, 'Corte de cabelo masculino', 40),
(2, 'Corte de cabelo simples', 45.1),
(6, 'Corte de cabelo Feminino', 100),
(19, 'MANICURA ', 35),
(20, 'PEDICURE', 45.5),
(21, 'Coloracao', 100),
(22, 'Limpeza de pele', 120),
(23, 'Ggftrddgbh ggg', 40),
(24, 'Ytgfffg bggv  g', 23),
(25, 'Yhfvhjn uggg', 69.4),
(26, 'Tfdrfg ggh  hhhb', 56.89),
(27, 'Tgffgyhuh bhuytb', 67.9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
