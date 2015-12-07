-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 07-Dez-2015 às 15:53
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `mercadinho`
--
CREATE DATABASE IF NOT EXISTS `mercadinho` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mercadinho`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `idcadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `valor` float NOT NULL,
  `qtd` int(11) NOT NULL,
  `validade` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idcadastro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idcadastro`, `nome`, `valor`, `qtd`, `validade`) VALUES
(6, 'cenora', 30.66, 30, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
  `idhistorico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `valor` float NOT NULL,
  `qtd` int(11) NOT NULL,
  `validade` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`idhistorico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`idhistorico`, `nome`, `valor`, `qtd`, `validade`) VALUES
(1, 'feijao', 55.55, 45, '05/11/201'),
(2, 'beterraba', 100.99, 150, '12/11/201'),
(3, 'batata', 3, 55, '10/12/201'),
(4, 'batata', 3, 20, '12/12/201'),
(5, 'batata', 3.2, 55, '12/12/201'),
(6, 'bacon', 3.1, 60, '12/12/201'),
(7, 'batata', 3.1, 60, '12/12/201'),
(8, 'cenora', 20.99, 30, '12/12/201'),
(9, 'batata', 30.99, 30, '12/12/201'),
(10, 'cenora', 30.66, 30, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idlogin`, `nome`, `email`, `senha`) VALUES
(1, 'Diego', 'diegolkx@gmail.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
