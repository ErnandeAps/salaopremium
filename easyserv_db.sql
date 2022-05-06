-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Fev-2018 às 12:36
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
-- Estrutura da tabela `adms`
--

DROP TABLE IF EXISTS `adms`;
CREATE TABLE IF NOT EXISTS `adms` (
  `matsup` varchar(10) DEFAULT '0',
  `nome` varchar(20) DEFAULT NULL,
  `senha` varchar(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adms`
--

INSERT INTO `adms` (`matsup`, `nome`, `senha`) VALUES
('admin', 'Administrador', 'abc123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dia` text NOT NULL,
  `mes` text NOT NULL,
  `ano` text NOT NULL,
  `nome` text NOT NULL,
  `descri` text NOT NULL,
  `contato` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `dia`, `mes`, `ano`, `nome`, `descri`, `contato`) VALUES
(18, '12', '7', '2010', 'teste', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda2`
--

DROP TABLE IF EXISTS `agenda2`;
CREATE TABLE IF NOT EXISTS `agenda2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(200) NOT NULL,
  `dtevento` varchar(10) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hora` varchar(5) NOT NULL,
  `conteudo` text NOT NULL,
  `local` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL,
  `razao` varchar(80) DEFAULT NULL,
  `fantasia` varchar(30) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `fone` varchar(80) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `razao`, `fantasia`, `endereco`, `fone`, `bairro`, `cidade`, `uf`) VALUES
(1, 'CAMARIM PRIME', 'STUDIO DE BELEZA', 'RUA DO CUPIM, 259 - LOJA 102', '81 3037.6550', 'GRACAS', 'RECIFE', 'PE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `cargo` text NOT NULL,
  `telefone` text NOT NULL,
  `orkut` text NOT NULL,
  `arquivo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `title` varchar(200) DEFAULT NULL,
  `start` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`title`, `start`) VALUES
('gggggg', '2018-01-19'),
('teste', '2018-01-28 15:00'),
('novo', '2018-01-19'),
('Suportek consultoria 17:00', '2018-01-19'),
('teste', '2018-01-19'),
('Compra Mat. rede', '2018-01-20'),
('Ernande A.P. Santana', '2018-01-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressora`
--

DROP TABLE IF EXISTS `impressora`;
CREATE TABLE IF NOT EXISTS `impressora` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `porta` varchar(30) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `impressora`
--

INSERT INTO `impressora` (`id`, `nome`, `porta`) VALUES
(1, 'mp4200', 'com3');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `cod_sala` int(20) UNSIGNED DEFAULT '0',
  `matricula` int(20) UNSIGNED DEFAULT '0',
  `datatempo` datetime DEFAULT NULL,
  `ticket` varchar(255) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`cod_sala`, `matricula`, `datatempo`, `ticket`) VALUES
(1, 999995, '2005-04-06 09:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

DROP TABLE IF EXISTS `salas`;
CREATE TABLE IF NOT EXISTS `salas` (
  `cod_sala` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_sala` varchar(255) DEFAULT NULL,
  KEY `cod_sala` (`cod_sala`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`cod_sala`, `nome_sala`) VALUES
(1, 'S?o Paulo'),
(2, 'Ribeir?o Preto'),
(3, 'Blue Room'),
(4, 'Video Conference');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sups`
--

DROP TABLE IF EXISTS `sups`;
CREATE TABLE IF NOT EXISTS `sups` (
  `matsup` int(11) DEFAULT NULL,
  `nome_sup` varchar(255) DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL,
  `ilha` int(11) DEFAULT NULL,
  `pri` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `sups`
--

INSERT INTO `sups` (`matsup`, `nome_sup`, `senha`, `ilha`, `pri`) VALUES
(999995, 'Usuário de Teste', '123', 99, 0);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL,
  `perfil` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`id`, `nome`, `login`, `senha`, `perfil`) VALUES
(1, 'administrador', 'admin', '123', 'adm'),
(6, 'Teste novo', 'teste', '321', 'usu'),
(20, 'Usuario', 'Usuario', '1234', 'usu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
