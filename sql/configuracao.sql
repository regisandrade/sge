-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1:3306
-- Data de Criação: 25-Mar-2014 às 11:30
-- Versão do servidor: 5.5.34-0ubuntu0.13.04.1
-- versão do PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracao`
--

CREATE TABLE IF NOT EXISTS `configuracao` (
  `id_configuracao` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `slogan` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` text CHARACTER SET latin1,
  `email` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `endereco` text CHARACTER SET latin1 NOT NULL,
  `telefone_1` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `telefone_2` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `facebook` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `twitter` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `linkedin` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `meta_descricao` text CHARACTER SET latin1 NOT NULL,
  `latitude_endereco` text CHARACTER SET latin1 NOT NULL,
  `longitude_endereco` text CHARACTER SET latin1 NOT NULL,
  `logo` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_configuracao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Configuração do sistema' AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `configuracao`
--

INSERT INTO `configuracao` (`id_configuracao`, `empresa`, `slogan`, `descricao`, `email`, `endereco`, `telefone_1`, `telefone_2`, `facebook`, `twitter`, `linkedin`, `meta_descricao`, `latitude_endereco`, `longitude_endereco`, `logo`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'Ipecon - Ensino e Consultoria', 'IPECON', 'Descrição', 'ipecon@ipecon.com.br', 'Av. T-4, nº 1.478, Ed. Absolut Business Style, sala A-132 (13º andar)\nSetor Bueno, Goiânia/GO - CEP: 74.230-030', '(62) 3214-2563 ', '3214-3229', 'facebook.com/ipecon', 'twitter.com/ipecongoias', 'br.linkedin.com/in/ipecon', 'ipecon goias goiania pos-graduacao pos', '-16.7195695', '-49.2669304', 'logo.png', 1, '2014-02-23 10:50:17', '2014-02-23 10:50:17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
