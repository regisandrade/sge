-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 25/03/2014 às 11:41:31
-- Versão do Servidor: 5.0.96
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ipecon1_ipecon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `us_id` int(11) NOT NULL auto_increment COMMENT 'ID',
  `us_nome` varchar(200) default NULL,
  `us_estado` char(2) default NULL,
  `us_cidade` varchar(200) default NULL,
  `us_telefone` varchar(14) default NULL,
  `us_email` varchar(200) default NULL,
  `us_pw` varchar(100) default NULL,
  `us_permissao` text,
  `us_tipo` int(2) default '1',
  `us_ativo` int(1) default '1',
  `us_time` varchar(30) default '',
  PRIMARY KEY  (`us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`us_id`, `us_nome`, `us_estado`, `us_cidade`, `us_telefone`, `us_email`, `us_pw`, `us_permissao`, `us_tipo`, `us_ativo`, `us_time`) VALUES
(1, 'Ipecon Consultoria', 'GO', 'Goiânia', '8978667678', 'ipecon@ipecon.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 1, 1, '1384192145'),
(2, 'Administrador do site', 'GO', 'Goiânia', '62 8222-9786', 'regisandrade@gmail.com', '588ac6276c061a445c2d6722e742f5ee31c17477', '{"banners":{"adicionar":"1","editar":"1","remover":"1"}}', 2, 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
