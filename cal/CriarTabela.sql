CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dia` text NOT NULL,
  `mes` text NOT NULL,
  `ano` text NOT NULL,
  `nome` text NOT NULL,
  `descri` text NOT NULL,
  `contato` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

INSERT INTO `agenda` (`id`, `dia`, `mes`, `ano`, `nome`, `descri`, `contato`) VALUES
(18, '12', '7', '2010', 'teste', 'teste', 'teste');
