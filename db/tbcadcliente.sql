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
-- Estrutura da tabela `tbcadcliente`
--

DROP TABLE IF EXISTS `tbcadcliente`;
CREATE TABLE IF NOT EXISTS `tbcadcliente` (
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `tbcadcliente`
--

INSERT INTO `tbcadcliente` (`id`, `nome`, `endereco`, `bairro`, `cidade`, `uf`, `fone`, `celular`, `rg`, `email`) VALUES
(1, 'Suportek', 'Bela vista', 'Pajucara', 'Natal', 'RN', '84 33026370', '84 998715995', '00000000000', '00000000000000'),
(2, 'SUPORTE', 'BELA VISTA', 'PAJUCARA', 'NATAL', 'RN', '33026370', '999', '2024540', 'suportek'),
(6, 'JORGENETE ALVES DA SILVA', 'R. BELA VISTA, 383', 'CONJ. ALVORADA', 'NATAL', 'RN', '8433026370', '84 997065221', '000000', 'suportekconsultoria@gmail.com'),
(10, 'Bruna Franca', 'Rua sem futuro', 'Torre', 'Recife', 'PE', '99999999', '98767654', '000000', 'Suporte@hotmail.com'),
(11, 'Cliente novo', 'Rtwet', 'wert', 'ertwet', 'rt', '3452345', '34123', '3452345', 'gfdgsdgsdgfs');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
