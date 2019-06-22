

CREATE TABLE IF NOT EXISTS `cadastro` (
  `Nome` varchar(35) DEFAULT NULL,
  `Sobrenome` varchar(35) DEFAULT NULL,
  `Endereço` text,
  `Cidade` varchar(35) DEFAULT NULL,
  `Estado` varchar(25) DEFAULT NULL,
  `Email` text,
  `Celular` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
