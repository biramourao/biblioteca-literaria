-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2014 às 06:53
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `biblioteca_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bibliotecario`
--

CREATE TABLE IF NOT EXISTS `bibliotecario` (
  `matr_bibliotecario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_bibliotecario` varchar(45) DEFAULT NULL,
  `login_bibliotecario` varchar(45) NOT NULL,
  `senha_bibliotecario` int(11) NOT NULL,
  PRIMARY KEY (`matr_bibliotecario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `bibliotecario`
--

INSERT INTO `bibliotecario` (`matr_bibliotecario`, `nome_bibliotecario`, `login_bibliotecario`, `senha_bibliotecario`) VALUES
(1, 'ADMINISTRADOR DO SISTEMA', 'ADMIN', 1),
(2, 'UBIRATAN LEITAO MOURAO', 'BIRA', 1),
(3, 'JEADSON ALVES', 'JEADSON', 1),
(4, 'LUIS FERNANDO', 'LUIS', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE IF NOT EXISTS `emprestimo` (
  `cod_emprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date NOT NULL,
  `Leitor_CPF` varchar(11) NOT NULL,
  `Bibliotecario_matr_bibliotecario` int(11) NOT NULL,
  `Exemplar_cod_exemplar` int(11) NOT NULL,
  PRIMARY KEY (`cod_emprestimo`),
  KEY `fk_Emprestimo_Leitor_idx` (`Leitor_CPF`),
  KEY `fk_Emprestimo_Bibliotecario1_idx` (`Bibliotecario_matr_bibliotecario`),
  KEY `Exemplar_cod_exemplar` (`Exemplar_cod_exemplar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`cod_emprestimo`, `data_emprestimo`, `data_devolucao`, `Leitor_CPF`, `Bibliotecario_matr_bibliotecario`, `Exemplar_cod_exemplar`) VALUES
(34, '2014-06-05', '2014-06-12', '58962356895', 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exemplar`
--

CREATE TABLE IF NOT EXISTS `exemplar` (
  `cod_exemplar` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo_cod_titulo` int(11) NOT NULL,
  `disponibilidade` tinyint(1) NOT NULL,
  PRIMARY KEY (`cod_exemplar`),
  KEY `fk_Exemplar_Titulo1_idx` (`Titulo_cod_titulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `exemplar`
--

INSERT INTO `exemplar` (`cod_exemplar`, `Titulo_cod_titulo`, `disponibilidade`) VALUES
(5, 2, 0),
(6, 2, 1),
(8, 3, 1),
(9, 3, 1),
(10, 3, 1),
(19, 4, 1),
(20, 4, 1),
(21, 4, 1),
(22, 4, 1),
(23, 4, 1),
(24, 4, 1),
(25, 4, 1),
(26, 4, 1),
(27, 4, 1),
(28, 3, 1),
(29, 7, 1),
(30, 7, 1),
(31, 7, 1),
(32, 7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `faixa_etaria`
--

CREATE TABLE IF NOT EXISTS `faixa_etaria` (
  `cod_faixa_etaria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_faixa_etaria` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_faixa_etaria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `faixa_etaria`
--

INSERT INTO `faixa_etaria` (`cod_faixa_etaria`, `descricao_faixa_etaria`) VALUES
(1, 'LIVRE'),
(2, '5 ANOS'),
(3, '10 ANOS'),
(4, '14 ANOS'),
(5, '16 ANOS'),
(6, '18 ANOS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `cod_genero` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_genero` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`cod_genero`, `descricao_genero`) VALUES
(1, 'ação'),
(2, 'drama'),
(3, 'romance'),
(4, 'suspense'),
(5, 'religioso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitor`
--

CREATE TABLE IF NOT EXISTS `leitor` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `idade` int(11) NOT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `logradouro` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `leitor`
--

INSERT INTO `leitor` (`cpf`, `nome`, `idade`, `rua`, `numero`, `logradouro`, `cep`) VALUES
('58962356895', 'Afonso Tavares', 20, '', '', 'QR 315 Conj 1 Casa 07', '72307601'),
('58965235857', 'Luis Fernando2', 18, 'Rua do Posto', '410', 'Quadra 55 Conjunto K', '72755011');

-- --------------------------------------------------------

--
-- Estrutura da tabela `titulo`
--

CREATE TABLE IF NOT EXISTS `titulo` (
  `cod_titulo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_titulo` varchar(50) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `Faixa_etaria_cod_faixa_etaria` int(11) NOT NULL,
  PRIMARY KEY (`cod_titulo`),
  KEY `fk_Titulo_Faixa_etaria1_idx` (`Faixa_etaria_cod_faixa_etaria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `titulo`
--

INSERT INTO `titulo` (`cod_titulo`, `nome_titulo`, `autor`, `Faixa_etaria_cod_faixa_etaria`) VALUES
(2, 'CODIGO DA VINCI', 'DAN BROWN', 4),
(3, 'O SENHOR DOS ANEIS', 'J.R.R. Tolkien', 4),
(4, 'Livro do Bira', 'UBIRATAN LEITAO MOURAO', 6),
(7, 'O DEDO DE DEUS', 'DAN BROWN', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `titulo_genero`
--

CREATE TABLE IF NOT EXISTS `titulo_genero` (
  `Titulo_cod_titulo` int(11) NOT NULL,
  `Genero_cod_genero` int(11) NOT NULL,
  PRIMARY KEY (`Titulo_cod_titulo`,`Genero_cod_genero`),
  KEY `fk_Titulo_has_Genero_Genero1_idx` (`Genero_cod_genero`),
  KEY `fk_Titulo_has_Genero_Titulo1_idx` (`Titulo_cod_titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `titulo_genero`
--

INSERT INTO `titulo_genero` (`Titulo_cod_titulo`, `Genero_cod_genero`) VALUES
(3, 1),
(4, 2),
(2, 4),
(7, 4);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`Exemplar_cod_exemplar`) REFERENCES `exemplar` (`cod_exemplar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emprestimo_ibfk_3` FOREIGN KEY (`Leitor_CPF`) REFERENCES `leitor` (`cpf`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emprestimo_ibfk_4` FOREIGN KEY (`Bibliotecario_matr_bibliotecario`) REFERENCES `bibliotecario` (`matr_bibliotecario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `exemplar`
--
ALTER TABLE `exemplar`
  ADD CONSTRAINT `exemplar_ibfk_1` FOREIGN KEY (`Titulo_cod_titulo`) REFERENCES `titulo` (`cod_titulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `titulo`
--
ALTER TABLE `titulo`
  ADD CONSTRAINT `titulo_ibfk_1` FOREIGN KEY (`Faixa_etaria_cod_faixa_etaria`) REFERENCES `faixa_etaria` (`cod_faixa_etaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `titulo_genero`
--
ALTER TABLE `titulo_genero`
  ADD CONSTRAINT `titulo_genero_ibfk_2` FOREIGN KEY (`Genero_cod_genero`) REFERENCES `genero` (`cod_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `titulo_genero_ibfk_1` FOREIGN KEY (`Titulo_cod_titulo`) REFERENCES `titulo` (`cod_titulo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
