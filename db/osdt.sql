-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Fev-2018 às 16:40
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
-- Estrutura da tabela `osdt`
--

DROP TABLE IF EXISTS `osdt`;
CREATE TABLE IF NOT EXISTS `osdt` (
  `idos` int(11) DEFAULT NULL,
  `iddt` int(11) DEFAULT NULL,
  `idservico` int(11) DEFAULT NULL,
  `descservico` varchar(40) DEFAULT NULL,
  `qtd` int(11) DEFAULT NULL,
  `idprof` int(11) DEFAULT NULL,
  `nomeprof` varchar(50) DEFAULT NULL,
  `valorservico` double DEFAULT NULL,
  `data` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `osdt`
--

INSERT INTO `osdt` (`idos`, `iddt`, `idservico`, `descservico`, `qtd`, `idprof`, `nomeprof`, `valorservico`, `data`, `status`) VALUES
(1, 1, 5, 'Corte de cabelo masculino', 1, 7, 'Maria Carla', 40, '2018-02-01', 1),
(2, 1, 2, 'Corte de cabelo simples', 1, 7, 'Maria Carla', 45.1, '2018-02-01', 1),
(2, 2, 20, 'PEDICURE', 1, 12, 'Alexandre', 20, '2018-02-01', 1),
(2, 2, 22, 'Limpeza de pele', 1, 12, 'Alexandre', 120, '2018-02-01', 1),
(4, 2, 22, 'Limpeza de pele', 1, 9, 'Suportek consultoria', 120, '2018-02-01', 1),
(4, 1, 2, 'Corte de cabelo simples', 1, 7, 'Maria Carla', 45.1, '2018-02-01', 1),
(4, 3, 20, 'PEDICURE', 1, 7, 'Maria Carla', 45.5, '2018-02-01', 1),
(4, 3, 2, 'Corte de cabelo simples', 1, 9, 'Suportek consultoria', 45.1, '2018-02-01', 1),
(4, 3, 19, 'MANICURA ', 1, 7, 'Maria Carla', 35, '2018-02-01', 1),
(4, 3, 2, 'Corte de cabelo simples', 1, 12, 'Alexandre', 45.1, '2018-02-01', 1),
(4, 3, 2, 'Corte de cabelo simples', 1, 9, 'Suportek consultoria', 45.1, '2018-02-01', 1),
(5, 1, 2, 'Corte de cabelo simples', 1, 7, 'Maria Carla', 45.1, '2018-02-01', 1),
(5, 2, 6, 'Corte de cabelo Feminino', 1, 12, 'Alexandre', 100, '2018-02-01', 1),
(5, 2, 20, 'PEDICURE', 1, 12, 'Alexandre', 45.5, '2018-02-01', 1),
(5, 2, 19, 'MANICURA ', 1, 7, 'Maria Carla', 35, '2018-02-01', 1),
(5, 2, 5, 'Corte de cabelo masculino', 1, 7, 'Maria Carla', 40, '2018-02-01', 1),
(6, 1, 2, 'Corte de cabelo simples', 1, 7, 'Maria Carla', 45.1, '2018-02-01', 1),
(6, 2, 6, 'Corte de cabelo Feminino', 1, 12, 'Alexandre', 100, '2018-02-01', 1),
(6, 2, 6, 'Corte de cabelo Feminino', 1, 12, 'Alexandre', 100, '2018-02-01', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
