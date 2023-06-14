-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Maio-2023 às 01:26
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbaula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfilme`
--

DROP TABLE IF EXISTS `tbfilme`;
CREATE TABLE IF NOT EXISTS `tbfilme` (
  `idFilme` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `diretor` varchar(255) DEFAULT NULL,
  `duracao` varchar(100) DEFAULT NULL,
  `sinopse` varchar(2000) DEFAULT NULL,
  `classificacao` varchar(100) DEFAULT NULL,
  `anoLancamento` varchar(4) DEFAULT NULL,
  `idGenero` int(11) DEFAULT NULL,
  `imagemPrincipal` varchar(255) DEFAULT NULL,
  `imagemInterna` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

DROP TABLE IF EXISTS `tbgenero`;
CREATE TABLE IF NOT EXISTS `tbgenero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbgenero`
--

INSERT INTO `tbgenero` (`idGenero`, `nome`) VALUES
(1, 'Ação'),
(2, 'Aventura'),
(3, 'Animação'),
(4, 'Comédia'),
(5, 'Crime'),
(6, 'Documentário'),
(7, 'Drama'),
(8, 'Família'),
(9, 'Fantasia'),
(10, 'Ficção Científica'),
(11, 'Horror'),
(12, 'Mistério'),
(13, 'Musical'),
(14, 'Romance'),
(15, 'Suspense'),
(16, 'Terror'),
(17, 'Thriller'),
(18, 'Western'),
(19, 'Biografia'),
(20, 'Histórico'),
(21, 'Guerra'),
(22, 'Esporte'),
(23, 'Fantasia Científica'),
(24, 'Comédia Romântica'),
(25, 'Animação para Adultos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
