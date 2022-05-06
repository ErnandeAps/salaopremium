-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Fev-2018 às 16:27
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
-- Estrutura da tabela `tbcadfuncionario`
--

DROP TABLE IF EXISTS `tbcadfuncionario`;
CREATE TABLE IF NOT EXISTS `tbcadfuncionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `fone` varchar(12) DEFAULT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id_new` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcadfuncionario`
--

INSERT INTO `tbcadfuncionario` (`id`, `nome`, `endereco`, `bairro`, `cidade`, `uf`, `fone`, `celular`, `rg`, `email`, `cargo`) VALUES
(7, 'Maria Carla', 'dSDSDF', 'SDF', 'SADFSA', 'DF', 'SDFSD', 'sdfsdfsSDFS', 'sdfSDF', 'SDFAS', 'Adm'),
(9, 'Suportek consultoria', 'R. bela vista, 383', 'conj. alv. pajucara', 'natal', 'rn', '0000', '0000', '0000', '000000', 'Adm'),
(12, 'Alexandre', 'R. Sem fim', 'Caxanga', 'Recife', 'PE', '', '81 978876543', '000000', '', 'Atendente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
