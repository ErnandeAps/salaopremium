-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Fev-2018 às 16:39
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
-- Estrutura da tabela `os`
--

DROP TABLE IF EXISTS `os`;
CREATE TABLE IF NOT EXISTS `os` (
  `idos` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `desconto` double DEFAULT NULL,
  `pag` double DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idos`),
  UNIQUE KEY `id` (`idos`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`idos`, `data`, `idcliente`, `nome`, `total`, `desconto`, `pag`, `status`) VALUES
(1, '2018-02-01', 10, 'Bruna Franca', 40, 0, 40, 1),
(2, '2018-02-01', 6, 'JORGENETE ALVES DA SILVA', 185.1, 0, 185.1, 1),
(4, '2018-02-01', 10, 'Bruna Franca', 380.9, 0, 380.9, 1),
(5, '2018-02-01', 6, 'JORGENETE ALVES DA SILVA', 265.6, 0, 265.6, 1),
(6, '2018-02-01', 6, 'JORGENETE ALVES DA SILVA', 245.1, 0, 245.1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
