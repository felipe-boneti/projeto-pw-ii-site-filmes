-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jun-2023 às 01:14
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
  `poster` text,
  `linkTrailer` text,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbfilme`
--

INSERT INTO `tbfilme` (`idFilme`, `titulo`, `diretor`, `duracao`, `sinopse`, `classificacao`, `anoLancamento`, `idGenero`, `poster`, `linkTrailer`) VALUES
(1, 'One Piece Film RED', 'Gorō Taniguchi', '115 min', 'Uta, a cantora mais amada do planeta, cuja voz foi descrita como \"de outro mundo\", é conhecida por esconder sua própria identidade ao se apresentar. Agora, pela primeira vez, ela se revelará ao mundo em um show ao vivo. Com a Marinha assistindo de perto, o local se enche de fãs de Uta - incluindo piratas animados e os Chapéus de Palha liderados por Luffy, que vieram para curtir sua performance - todos aguardam ansiosamente a voz que o mundo inteiro estava esperando. A história começa com a chocante revelação de que ela é a enigmática filha de Shanks.', '0', '2022', 3, 'op_red.png', 'https://www.youtube.com/embed/NDDU-_MwKHI'),
(2, 'One Piece STAMPEDE', 'Takashi Otsuka', '101 min', 'Luffy e sua tripulação são convidados para um festival pirata, onde haverá banquetes, tesouros e piratas conhecidos do mundo inteiro. Quem serão os oponentes, quem está por trás da organização desse evento, será uma boa ideia participar? Apenas sabemos que um tesouro deixado pelo próprio Rei dos Piratas, Gol D. Roger estará em jogo nesse festival.', '0', '2019', 3, 'op_stampede.png', 'https://www.youtube.com/embed/S8_YwFLCh4U'),
(3, 'One Piece Film Z', 'Tatsuya Nagamine', '107 min', 'Luffy e a turma salvam um almirante da Marinha desiludido que só tem um objetivo: matar todos os piratas do mundo, inclusive os Chapéus de Palha.', '0', '2012', 3, 'op_z.png', 'https://www.youtube.com/embed/PAa2_wNCjpU'),
(4, 'Pantera Negra', 'Ryan Coogler', '135 min', 'Em Pantera Negra, após a morte do rei T\'Chaka (John Kani), o príncipe T\'Challa (Chadwick Boseman) retorna a Wakanda para a cerimônia de coroação. Nela são reunidas as cinco tribos que compõem o reino, sendo que uma delas, os Jabari, não apoia o atual governo. T\'Challa logo recebe o apoio de Okoye (Danai Gurira), a chefe da guarda de Wakanda, da irmã Shuri (Letitia Wright), que coordena a área tecnológica do reino, e também de Nakia (Lupita Nyong\'o), a grande paixão do atual Pantera Negra, que não quer se tornar rainha. Juntos, eles estão à procura de Ulysses Klaue (Andy Serkis), que roubou de Wakanda um punhado de vibranium, alguns anos atrás.', '14', '2018', 9, 'pantera_negra.png', 'https://www.youtube.com/embed/wL4a4MafSjQ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

DROP TABLE IF EXISTS `tbgenero`;
CREATE TABLE IF NOT EXISTS `tbgenero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbgenero`
--

INSERT INTO `tbgenero` (`idGenero`, `genero`) VALUES
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
