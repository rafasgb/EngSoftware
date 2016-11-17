-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Nov-2016 às 15:33
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `engsoftware`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UNIQUE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOGIN` varchar(20) NOT NULL,
  `SENHA` varchar(50) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  PRIMARY KEY (`UNIQUE_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`UNIQUE_ID`, `LOGIN`, `SENHA`, `EMAIL`) VALUES
(1, 'testeFernando', '000', 'fe@live.com'),
(11, 'fernando', 'c6f057b86584942e415435ffb1fa93d4', 'fe@live.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `POST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POST_TITULO` varchar(40) NOT NULL,
  `POST_MAT` varchar(25) NOT NULL,
  `POST_DESC` text NOT NULL,
  `POST_DATA` date NOT NULL,
  `POST_VALOR` int(11) NOT NULL,
  `POST_TIPO` varchar(5) NOT NULL,
  PRIMARY KEY (`POST_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`POST_ID`, `POST_TITULO`, `POST_MAT`, `POST_DESC`, `POST_DATA`, `POST_VALOR`, `POST_TIPO`) VALUES
(2, 'fernando', 'engenharia de software', 'teste', '2016-11-16', 2, 'grupo'),
(3, 'fernando1', 'engenharia de software', 'teste', '2016-11-16', 2, 'grupo'),
(8, 'teste2', 'ciencia da computacao', 'teste01', '2016-11-16', 1, 'grupo'),
(7, 'teste', 'ciencia da computacao', 'teste01', '2016-11-16', 0, 'grupo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rel_user_post`
--

CREATE TABLE IF NOT EXISTS `rel_user_post` (
  `UNIQUE_ID` int(11) NOT NULL,
  `POST_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `rel_user_post`
--

INSERT INTO `rel_user_post` (`UNIQUE_ID`, `POST_ID`) VALUES
(1, 7),
(1, 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
