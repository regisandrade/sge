-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1:3306
-- Data de Criação: 21-Maio-2014 às 08:19
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
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL COMMENT 'Relaciona com a tabela de cursos',
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `data_nascimento` date NOT NULL DEFAULT '0000-00-00',
  `naturalidade` varchar(150) COLLATE utf8_bin NOT NULL,
  `uf_naturalidade` char(2) COLLATE utf8_bin NOT NULL,
  `nacionalidade` varchar(150) COLLATE utf8_bin NOT NULL,
  `sexo` enum('Masculino','Feminino') COLLATE utf8_bin NOT NULL DEFAULT 'Masculino',
  `rg` varchar(25) COLLATE utf8_bin NOT NULL,
  `orgao` varchar(15) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(14) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Ativo','Inativo','Excluído') COLLATE utf8_bin NOT NULL DEFAULT 'Ativo',
  `cidade_curso` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Cidades aceitas: Anápolis, Ceres, Cidade de Goiás, Goianésia, Itumbiara, Pires do Rio, Porangatu, Rio Verde, Trindade e Uruaçu',
  `web` enum('Sim','Não') COLLATE utf8_bin NOT NULL DEFAULT 'Sim',
  `enviado` enum('Sim','Não') COLLATE utf8_bin NOT NULL DEFAULT 'Não',
  `usuario_alteracao` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `data_alteracao` date DEFAULT NULL,
  `data_vencimento` char(2) COLLATE utf8_bin DEFAULT NULL,
  `tituloEleitoral` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `reservista` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `estadoCivil` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `filiacaoPai` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `filiacaoMae` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `twitter` varchar(115) COLLATE utf8_bin DEFAULT NULL,
  `facebook` varchar(115) COLLATE utf8_bin DEFAULT NULL,
  `ficouSabendo` enum('Mala Direta','Outdoor','E-mail Marketing','Folder','Eventos','Indicação de ex-alunos') COLLATE utf8_bin DEFAULT 'Mala Direta',
  `ficouSabendoOutro` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`,`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `id_curso`, `nome`, `data_nascimento`, `naturalidade`, `uf_naturalidade`, `nacionalidade`, `sexo`, `rg`, `orgao`, `cpf`, `email`, `data_cadastro`, `status`, `cidade_curso`, `web`, `enviado`, `usuario_alteracao`, `data_alteracao`, `data_vencimento`, `tituloEleitoral`, `reservista`, `estadoCivil`, `filiacaoPai`, `filiacaoMae`, `twitter`, `facebook`, `ficouSabendo`, `ficouSabendoOutro`) VALUES
(1, 1, 'Regis Rodrigues de Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Feminino', '4581128', 'SSP/GO', '254.088.518-77', 'regisandrade@gmail.com', '2014-05-12 03:00:00', 'Excluído', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, '@regisandrade', 'facebook.com/regisandrade', 'Mala Direta', NULL),
(2, 1, 'Regis Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Masculino', '4581128', 'SSP/GO', '254.088.518-77', 'regisandrade@gmail.com', '2014-05-12 03:00:00', 'Ativo', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(3, 1, 'Regis Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Masculino', '4581128', 'SSP/GO', '254.088.518-77', 'regis@gmail.com', '2014-05-12 03:00:00', 'Ativo', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(4, 1, 'Regis Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Masculino', '4581128', 'SSP/GO', '254.088.518-77', 'regisandrade@gmail.com', '2014-05-12 03:00:00', 'Ativo', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(5, 1, 'Regis Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Masculino', '4581128', 'SSP/GO', '254.088.518-77', 'regisandrade@gmail.com', '2014-05-12 03:00:00', 'Ativo', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(6, 1, 'Regis Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Masculino', '4581128', 'SSP/GO', '254.088.518-77', 'regisandrade@gmail.com', '2014-05-12 03:00:00', 'Ativo', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(7, 1, 'Regis Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Masculino', '4581128', 'SSP/GO', '254.088.518-77', 'regisandrade@gmail.com', '2014-05-12 03:00:00', 'Ativo', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(8, 1, 'Regis Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Masculino', '4581128', 'SSP/GO', '254.088.518-77', 'regisandrade@gmail.com', '2014-05-12 03:00:00', 'Ativo', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(9, 1, 'Regis Andrade', '1976-12-15', 'Rialma', 'GO', 'Brasileira', 'Masculino', '4581128', 'SSP/GO', '254.088.518-77', 'regisandrade@gmail.com', '2014-05-12 03:00:00', 'Ativo', NULL, 'Não', 'Não', '1', '2014-05-12', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(10, 1, 'Rogério Rodrigues de Andrade', '0000-00-00', 'Rialma', 'GO', 'Brasileira', 'Masculino', '123', 'SSP/GO', '111.111.111-33', 'rogeriora25@gmail.com', '2014-05-14 01:36:43', 'Ativo', NULL, 'Não', 'Não', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(11, 1, 'Rogério Rodrigues de Andrade', '1974-10-03', 'Rialma', 'GO', 'Brasileira', 'Masculino', '123', 'SSP/GO', '111.111.111-33', 'rogeriora25@gmail.com', '2014-05-14 01:37:50', 'Ativo', NULL, 'Não', 'Não', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(12, 1, 'Rogério Rodrigues de Andrade', '1974-10-03', 'Rialma', 'GO', 'Brasileira', 'Masculino', '123', 'SSP/GO', '111.111.111-33', 'rogeriora25@gmail.com', '2014-05-14 01:44:42', 'Ativo', NULL, 'Não', 'Não', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(13, 1, 'Rogério Rodrigues de Andrade', '1974-10-03', 'Rialma', 'GO', 'Brasileira', 'Masculino', '123', 'SSP/GO', '111.111.111-11', 'rogeriora25@gmail.com', '2014-05-14 02:03:22', 'Ativo', NULL, 'Sim', 'Não', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(14, 1, 'Rogério Rodrigues de Andrade', '1974-10-03', 'Rialma', 'GO', 'Brasileira', 'Masculino', '123', 'SSP/GO', '111.111.111-11', 'rogeriora25@gmail.com', '2014-05-14 02:05:28', 'Ativo', NULL, 'Sim', 'Não', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(15, 1, 'Rogério Rodrigues de Andrade', '1974-10-03', 'Rialma', 'GO', 'Brasileira', 'Masculino', '123', 'SSP/GO', '111.111.111-11', 'rogeriora25@gmail.com', '2014-05-14 02:06:21', 'Ativo', NULL, 'Sim', 'Não', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mala Direta', NULL),
(16, 1, 'Rogério Rodrigues de Andrade', '1974-10-03', 'Rialma', 'GO', 'Brasileira', 'Masculino', '1357', 'SSP/GO', '222.333.444-55', 'rogeriora25@gmail.com', '2014-05-14 02:11:41', 'Ativo', NULL, 'Sim', 'Não', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '@rogerioandrade', 'facebook.com/rogerio', 'Mala Direta', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) COLLATE utf8_bin NOT NULL,
  `arquivo` varchar(150) COLLATE utf8_bin NOT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `descricao`, `arquivo`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'OPA', 'reciboIpecon2014.pdf', 1, '2014-05-05 21:30:09', '2014-05-05 21:30:09', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `descricao` text COLLATE utf8_bin,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `titulo`, `descricao`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'titulo', 0x446573637269c3a7c3a36f, 1, '2014-04-29 21:59:10', '2014-04-29 21:59:10', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bancos`
--

CREATE TABLE IF NOT EXISTS `bancos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `site` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `bancos`
--

INSERT INTO `bancos` (`id`, `nome`, `site`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'Itau', 'itau.com.br', 1, '2014-04-29 22:11:25', '2014-05-01 22:11:53', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id_banners` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `titulo` varchar(200) COLLATE utf8_bin NOT NULL,
  `link` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_banners`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_contas`
--

CREATE TABLE IF NOT EXISTS `categorias_contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` enum('Receita','Despesa') COLLATE utf8_bin NOT NULL DEFAULT 'Receita',
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `categorias_contas`
--

INSERT INTO `categorias_contas` (`id`, `tipo`, `nome`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'Receita', 'Salário', 1, '2014-05-05 21:36:44', '2014-05-05 21:36:44', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracao`
--

CREATE TABLE IF NOT EXISTS `configuracao` (
  `id_configuracao` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(200) DEFAULT NULL,
  `slogan` varchar(200) DEFAULT NULL,
  `descricao` text,
  `email` varchar(200) DEFAULT NULL,
  `endereco` text NOT NULL,
  `telefone_1` varchar(15) DEFAULT NULL,
  `telefone_2` varchar(15) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `meta_descricao` text NOT NULL,
  `latitude_endereco` text NOT NULL,
  `longitude_endereco` text NOT NULL,
  `arquivo` varchar(45) DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_configuracao`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `configuracao`
--

INSERT INTO `configuracao` (`id_configuracao`, `empresa`, `slogan`, `descricao`, `email`, `endereco`, `telefone_1`, `telefone_2`, `facebook`, `twitter`, `linkedin`, `meta_descricao`, `latitude_endereco`, `longitude_endereco`, `arquivo`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'Ipecon - Ensino e Consultoria', 'IPECON', 'Descrição', 'ipecon@ipecon.com.br', 'Av. T-4, nº 1.478, Ed. Absolut Business Style, sala A-132 (13º andar)\nSetor Bueno, Goiânia/GO - CEP: 74.230-030', '(62) 3214-2563 ', '3214-3229', 'facebook.com/ipecon', 'twitter.com/ipecongoias', 'br.linkedin.com/in/ipecon', 'ipecon goias goiania pos-graduacao pos', '-16.7195695', '-49.2669304', 'logo.png', 1, '2014-02-23 10:50:17', '2014-02-23 10:50:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_conta_bancaria` int(11) DEFAULT '0',
  `id_categoria` int(11) DEFAULT '0',
  `tipo` enum('Receita','Despesa') COLLATE utf8_bin NOT NULL DEFAULT 'Receita',
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `valor` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `data_vencimento` date DEFAULT NULL,
  `pago` enum('Sim','Não') COLLATE utf8_bin NOT NULL DEFAULT 'Não',
  `recorrencia` enum('Sim','Não') COLLATE utf8_bin NOT NULL DEFAULT 'Não',
  `frequencia` enum('Diária','Semanal','Mensal','Bimestral','Trimestral','Semestral','Anual') COLLATE utf8_bin NOT NULL DEFAULT 'Diária',
  `data_competencia` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `observacoes` text COLLATE utf8_bin,
  `arquivo` varchar(150) COLLATE utf8_bin NOT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_bancarias`
--

CREATE TABLE IF NOT EXISTS `contas_bancarias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_banco` int(11) DEFAULT '0',
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `agencia` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `numero` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `operacao` int(11) DEFAULT '0',
  `gerente` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `contas_bancarias`
--

INSERT INTO `contas_bancarias` (`id`, `id_banco`, `nome`, `agencia`, `numero`, `operacao`, `gerente`, `telefone`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 1, 'Conta corrente', '123', '1223', 1, 'João', '(62) 2222-2222', 1, '2014-04-29 22:12:18', '2014-04-29 22:12:18', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cronogramas`
--

CREATE TABLE IF NOT EXISTS `cronogramas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_turma` int(11) DEFAULT '0',
  `id_disciplina` int(11) DEFAULT '0',
  `data_01` date DEFAULT NULL,
  `data_02` date DEFAULT NULL,
  `data_03` date DEFAULT NULL,
  `data_04` date DEFAULT NULL,
  `data_05` date DEFAULT NULL,
  `data_06` date DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cronogramas`
--

INSERT INTO `cronogramas` (`id`, `id_turma`, `id_disciplina`, `data_01`, `data_02`, `data_03`, `data_04`, `data_05`, `data_06`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 1, 1, '2014-05-01', '2014-05-03', '2014-05-09', '2014-05-10', '2014-05-16', '2014-05-17', 1, '2014-04-28 22:08:32', '2014-04-28 22:08:32', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculos`
--

CREATE TABLE IF NOT EXISTS `curriculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) DEFAULT '0',
  `id_professor` int(11) DEFAULT '0',
  `url` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `titulacao` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `curriculos`
--

INSERT INTO `curriculos` (`id`, `id_curso`, `id_professor`, `url`, `titulacao`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 1, 1, 'globo.com', 'Mestre', 1, '2014-04-28 22:13:38', '2014-04-28 22:13:38', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `qtdeHoras` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `dataInicio` date DEFAULT NULL,
  `dataFim` date DEFAULT NULL,
  `status` enum('Ativo','Inativo') COLLATE utf8_bin NOT NULL DEFAULT 'Ativo',
  `flagMba` enum('Sim','Não') COLLATE utf8_bin NOT NULL DEFAULT 'Sim',
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `qtdeHoras`, `dataInicio`, `dataFim`, `status`, `flagMba`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'MBA em Psicologia, Saúde e Clínica: abordagens e práticas interdisciplinares', '375h', '2014-05-01', '2014-05-30', 'Ativo', 'Sim', 1, '2014-05-07 23:38:53', '2014-05-07 23:38:53', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimentos`
--

CREATE TABLE IF NOT EXISTS `depoimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) DEFAULT '0',
  `id_aluno` int(11) DEFAULT '0',
  `depoimento` text COLLATE utf8_bin,
  `data_depoimento` date DEFAULT NULL,
  `status` enum('Ativo','Inativo') COLLATE utf8_bin NOT NULL DEFAULT 'Ativo',
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `descricaoCursos`
--

CREATE TABLE IF NOT EXISTS `descricaoCursos` (
  `id_descricao_curso` int(11) NOT NULL AUTO_INCREMENT,
  `codg_curso_descricao` int(11) DEFAULT '0',
  `apresentacao` text COLLATE utf8_bin,
  `publico` text COLLATE utf8_bin,
  `datas` text COLLATE utf8_bin,
  `inscricao` text COLLATE utf8_bin,
  `avaliacao` text COLLATE utf8_bin,
  `disciplinas` text COLLATE utf8_bin,
  `metodologia` text COLLATE utf8_bin,
  `certificados` text COLLATE utf8_bin,
  `duracao` text COLLATE utf8_bin,
  `numeroVagas` text COLLATE utf8_bin,
  `coordenacaogeral` text COLLATE utf8_bin,
  `coordenacaoacademica` text COLLATE utf8_bin,
  `horario` text COLLATE utf8_bin,
  `processo` text COLLATE utf8_bin,
  `corpoDocente` text COLLATE utf8_bin,
  `informacoes` text COLLATE utf8_bin,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_descricao_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nome`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'Disciplina 01', 1, '2014-04-28 22:05:57', '2014-04-28 22:05:57', 1),
(2, 'Disciplina 02', 1, '2014-04-28 22:06:05', '2014-04-28 22:06:05', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas_turmas`
--

CREATE TABLE IF NOT EXISTS `disciplinas_turmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_turma` int(11) DEFAULT '0',
  `id_disciplina` int(11) DEFAULT '0',
  `id_professor` int(11) DEFAULT '0',
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `disciplinas_turmas`
--

INSERT INTO `disciplinas_turmas` (`id`, `id_turma`, `id_disciplina`, `id_professor`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 1, 1, 1, 1, '2014-04-28 22:14:14', '2014-04-28 22:14:14', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `texto` text COLLATE utf8_bin,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `endereco` varchar(255) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(150) COLLATE utf8_bin NOT NULL,
  `cep` varchar(10) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(150) COLLATE utf8_bin NOT NULL,
  `uf_endereco` char(2) COLLATE utf8_bin NOT NULL,
  `fone_residencial` varchar(15) COLLATE utf8_bin NOT NULL,
  `fone_comercial` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `fone_celular` varchar(15) COLLATE utf8_bin NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_pessoa` enum('Aluno','Professor') COLLATE utf8_bin NOT NULL DEFAULT 'Aluno',
  `usuario_alteracao` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`,`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `id_aluno`, `endereco`, `bairro`, `cep`, `cidade`, `uf_endereco`, `fone_residencial`, `fone_comercial`, `fone_celular`, `data_cadastro`, `tipo_pessoa`, `usuario_alteracao`) VALUES
(1, 14, 'qq', 'qqq', '88888-888', 'Goiânia', 'GO', '', NULL, '(55) 5555-5555', '2014-05-14 02:05:28', 'Aluno', NULL),
(2, 15, 'qq', 'qqq', '88888-888', 'Anapolis', 'GO', '(44) 4444-4444', NULL, '(55) 5555-5555', '2014-05-14 02:06:21', 'Aluno', NULL),
(3, 16, 'Rua C-75, Qd 181, Lt 14, Casa 1', 'Setor Sudoeste', '74000-123', 'São Paulo', 'SP', '(62) 3233-6619', '(62) 3322-1213', '(62) 8222-9876', '2014-05-14 02:11:41', 'Aluno', NULL),
(4, 13, 'qq', 'qqq', '88888-888', 'Goiânia', 'GO', '', NULL, '(55) 5555-5555', '2014-05-14 02:05:28', 'Aluno', NULL),
(5, 1, 'qq', 'qqq', '88888-888', 'Goiânia', 'GO', '', NULL, '(55) 5555-5555', '2014-05-14 02:05:28', 'Aluno', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_bin NOT NULL,
  `sigla` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `nome`, `sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galerias`
--

CREATE TABLE IF NOT EXISTS `galerias` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `graduacoes`
--

CREATE TABLE IF NOT EXISTS `graduacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `curso` varchar(255) COLLATE utf8_bin NOT NULL,
  `instituicao` varchar(150) COLLATE utf8_bin NOT NULL,
  `sigla` varchar(15) COLLATE utf8_bin NOT NULL,
  `ano_conclusao` varchar(4) COLLATE utf8_bin NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario_alteracao` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`,`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `graduacoes`
--

INSERT INTO `graduacoes` (`id`, `id_aluno`, `curso`, `instituicao`, `sigla`, `ano_conclusao`, `data_cadastro`, `usuario_alteracao`) VALUES
(1, 16, 'Administração', 'IPOG', 'IFG', '2002', '2014-05-14 02:11:41', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`id`, `nome`, `url`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'Terra', 'www.terra.com.br', 1, '2014-04-28 21:24:40', '2014-04-28 21:24:40', 1),
(2, 'Globo', 'globo.com', 1, '2014-04-28 21:24:58', '2014-04-28 21:24:58', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8_bin NOT NULL,
  `nome` varchar(150) COLLATE utf8_bin NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=330 ;

--
-- Extraindo dados da tabela `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `nome`, `data_cadastro`) VALUES
(4, 'tiagopca@gmail.com', 'Tiago', '2012-03-01 00:00:00'),
(5, 'oneziomreis@yahoo.com.br', 'Onezio', '2012-03-01 00:00:00'),
(6, 'tiagobatista08@gmail.com', 'Tiago Batista', '2012-03-01 00:00:00'),
(7, 'JGERALDOB@YAHOO.COM.BR', 'jose geraldo borges', '2012-03-01 00:00:00'),
(8, 'pedropaulo_diniz@yahoo.com.br', 'Pedro Paulo', '2012-03-01 00:00:00'),
(9, 'felipenetobb@hotmail.com', 'Felipe Machado Neto', '2012-03-01 00:00:00'),
(10, 'jr__elias@hotmail.com', 'Elias Bento da Silva Junior', '2012-03-01 00:00:00'),
(11, 'rosams55@hotmail.com', 'Rosa Maria da Silva', '2012-03-01 00:00:00'),
(12, 'selmafsilva2@hotmail.com', 'Selma de Fatima', '2012-03-01 00:00:00'),
(13, 'martagrillipsi@hotmail.com', 'Marta Grilli Alessandri', '2012-03-01 00:00:00'),
(14, 'ivanetesantos12@hotmail.com', ' Ivanete Santos', '2012-03-01 00:00:00'),
(15, 'darjube@hotmail.com', 'Darleide JubÃ©', '2012-03-01 00:00:00'),
(16, 'liamar.carneiro@gmail.com', 'Liamar Aparecida Carneiro Martins', '2012-03-01 00:00:00'),
(17, 'maia_preta@hotmail.com', 'Marilia', '2012-03-01 00:00:00'),
(18, 'nborgesg@yahoo.com.br', 'napoleao borges', '2012-03-01 00:00:00'),
(19, 'glaucie_mendes@hotmail.com', 'Glaucie Mendes de Souza', '2012-03-01 00:00:00'),
(20, 'kyaratl@hotmail.com', 'kyara', '2012-03-01 00:00:00'),
(22, 'adailtoncbc@gmail.com', 'ADAILTON FERREIRA', '2012-03-01 00:00:00'),
(24, 'vilelasf@gmail.com', 'vilelasf@gmail.com', '2012-03-01 00:00:00'),
(25, 'juceliadarc@hotmail.com', 'Jucelia Darc', '2012-03-01 00:00:00'),
(26, 'ap_love11@hotmail.com', 'ANA PAULA', '2012-03-01 00:00:00'),
(27, 'leidiana.costa@grupofarias.com.br', 'Leidiana Camargo da Costa', '2012-03-01 00:00:00'),
(28, 'wjferreira2009@gmail.com', 'William', '2012-03-01 00:00:00'),
(29, 'eduardomaiagomes@hotmail.com', 'EDUARDO MAIA GOMES', '2012-03-01 00:00:00'),
(30, 'chrisposse@yahoo.com.br', 'Christiane Martins', '2012-03-01 00:00:00'),
(31, 'cleusaludovico@yahoo.com.br', 'Cleusa ludovico A. Pereira', '2012-03-01 00:00:00'),
(32, 'ricardolbessa3@gmail.com', 'Ricardo Leite Bessa', '2012-03-01 00:00:00'),
(33, 'sandraherlindiniz@hotmail.com', 'sandraherlynsavino diniz', '2012-03-01 00:00:00'),
(34, 'carlosoliversantos@hotmail.com', 'CARLOS ROSA DOS SANTOS', '2012-03-01 00:00:00'),
(35, 'giztorres@hotmail.com', 'Giselle', '2012-03-01 00:00:00'),
(36, 'alex_malta@yahoo.co.uk', 'Alexandre Malta', '2012-03-01 00:00:00'),
(37, 'rosenilda_alves@yahoo.com.br', 'rosenilda', '2012-03-01 00:00:00'),
(40, 'maria.eleuza@correios.com.br', 'maria eleuza pereira', '2012-03-01 00:00:00'),
(41, 'celsoaraujo.psi@hotmail.com', 'Celso Araújo', '2012-03-01 00:00:00'),
(43, 'kmspr_angel@hotmail.com', 'katieli mariano da silva', '2012-03-01 00:00:00'),
(44, 'alessandramendesm@yahoo.com', 'Alessandra Mendes da Silva Martins', '2012-03-01 00:00:00'),
(45, 'elienecarrijo@yahoo.com.br', 'Eliene Carrijo', '2012-03-01 00:00:00'),
(46, 'alcebiadesmonteiro@pifpaf.com.br', 'Alcebiades Monteiro', '2012-03-01 00:00:00'),
(47, 'missilene_s@yahoo.com.br', 'missilene', '2012-03-01 00:00:00'),
(48, 'flavinhacbc@gmail.com', 'Flavia Ribeiro de Souza', '2012-03-01 00:00:00'),
(49, 'mary@tre-go.gov.br', 'Mary Denize', '2012-03-01 00:00:00'),
(50, 'beto-viper@hotmail.com', 'alberto', '2012-03-01 00:00:00'),
(51, 'hlab@superig.com.br', 'HEITOR LUÍS A. BARBOSA', '2012-03-01 00:00:00'),
(52, 'vivaldoandrade@uol.com.br', 'Vivaldo', '2012-03-01 00:00:00'),
(53, 'gleybruna@hotmail.com', 'Glei ', '2012-03-01 00:00:00'),
(54, 'valeskabaroni@hotmail.com', 'Valeska Baroni', '2012-03-01 00:00:00'),
(56, 'tecnicon-financeiro@hotmail.com', 'LEONICE APARECIDA DE JESUS', '2012-03-01 00:00:00'),
(57, 'nicecontap@hotmail.com', 'Ionice Rodrigues da Silva ', '2012-03-01 00:00:00'),
(66, 'gtc2305@hotmail.com', 'Geruza Tomás da Cunha', '2012-03-01 00:00:00'),
(70, 'bianca.gf@celg.com.br', 'Bianca', '2012-03-01 00:00:00'),
(72, 'julianopires99@hotmail.com', 'juliano', '2012-03-01 00:00:00'),
(73, 'fabianagarcia@bol.com.br', 'FABIANA GARCIA', '2012-03-01 00:00:00'),
(74, 'hildebrando76@hotmail.com', 'HILDEBRANDO GARCIA DA SILVA JUNIOR', '2012-03-01 00:00:00'),
(75, 'leonice1234@hotmail.com', 'Leonice Aparecida de Jesus', '2012-03-01 00:00:00'),
(76, 'ssgarcias@terra.com.br', 'Sergio De Souza Garcias', '2012-03-01 00:00:00'),
(81, 'fabiogadm@yahoo.com.br', 'FABIO GONÇALVES NASCIMENTO', '2012-03-01 00:00:00'),
(83, 'aylane.drogaria@santamarta.com.br', 'AYLANE ', '2012-03-01 00:00:00'),
(84, 'dynelle_@hotmail.com', 'Dynelle Seixas Santana', '2012-03-01 00:00:00'),
(85, 'nicesevilha13@hotmail.com', 'Ionice', '2012-03-01 00:00:00'),
(86, 'morgana_eventos@hotmail.com', 'Morgana Marys de Sousa Martins', '2012-03-01 00:00:00'),
(87, 'rikarttnc@hotmail.com', 'RIKARTT FERREIRA ', '2012-03-01 00:00:00'),
(89, 'm.a.r.i_ro@hotmail.com', 'Mariana Rodrigues ', '2012-03-01 00:00:00'),
(91, 'mendes@pesogo.com.br', 'nivaldo jose mendes', '2012-03-01 00:00:00'),
(93, 'juliane.beda@yahoo.com.br', 'Juliane Beda', '2012-03-01 00:00:00'),
(94, 'regilenegoncalves@hotmail.com', 'regilene', '2012-03-01 00:00:00'),
(95, 'gilrodriguesjr@msn.com', 'Gilberto Rodrigues da Silva Junior', '2012-03-01 00:00:00'),
(96, 'alemaismais@gmail.com', 'Alessandra Ferreira Gomes ', '2012-03-01 00:00:00'),
(100, 'demetereis@BOL.COM.BR', 'DEMETE', '2012-03-01 00:00:00'),
(101, 'fabianafigueiredo.f@hotmail.com', 'FABIANA FIGUEIRDO FONSECA', '2012-03-01 00:00:00'),
(102, 'julianalganzarolli@hotmail.com', 'Juliana Lino ganzarolli', '2012-03-01 00:00:00'),
(105, 'julioacchacha@hotmail.com', 'Julio Augusto Cardoso Chacha', '2012-03-01 00:00:00'),
(106, 'maristrela82@hotmail.com', 'Maristela Germina', '2012-03-01 00:00:00'),
(107, 'Seu e-mail edmarsilva@correios.com.br', 'Seu nome Edmar Cardoso da Silva', '2012-03-01 00:00:00'),
(108, 'rebeca.lima@mbinvestimentos.com.br', 'rebeca de lima queiroz', '2012-03-01 00:00:00'),
(109, 'Solange@mbinvestimentos.com.bre-mail', 'Solange', '2012-03-01 00:00:00'),
(110, 'leidymai@hotmail.com', 'LEIDIR RIBEIRO DA SILVA PIMENTEL', '2012-03-01 00:00:00'),
(111, 'alessandrareginabueno@hotmail.com', 'alessandra', '2012-03-01 00:00:00'),
(113, 'pauloorlandojunior@gmail.com', 'PAULO ORLANDO ALVES DE JESUS JUNIOR', '2012-03-01 00:00:00'),
(114, 'ivanasimpatia@gmail.com', 'Ivana Silva Nascimento', '2012-03-01 00:00:00'),
(116, 'jack.sb.kk@gmail.com', 'Jackeline da Silva', '2012-03-01 00:00:00'),
(118, 'vinhal1804@hotmail.com', 'maria aparecida', '2012-03-01 00:00:00'),
(119, 'Seu e-maillilian_barrozo@hotmail.com', 'Seu nomelilian barrozo', '2012-03-01 00:00:00'),
(120, 'albertorassi@yahoo.com.br', 'Alberto Rassi Jr', '2012-03-01 00:00:00'),
(121, 'fabiola@rhede.ind.br', 'FABÍOLA ', '2012-03-01 00:00:00'),
(122, 'taiza-silva@uol.com.br', 'Taiza', '2012-03-01 00:00:00'),
(124, 'karenmaria27@hotmail.com', 'Karen ', '2012-03-01 00:00:00'),
(125, 'gilmaalv@gmail.com', 'Gilma Alves', '2012-03-01 00:00:00'),
(130, 'agson_jonatas@hotmail.com', 'Agson Jonatas', '2012-03-01 00:00:00'),
(131, 'dr.erivaniaf@hotmail.com', 'Erivania Strom', '2012-03-01 00:00:00'),
(132, 'nutyrodrigues@hotmail.com', 'Nutiene Rodrigues', '2012-03-01 00:00:00'),
(134, 'izacolnaghi@hotmail.com', 'Izabel Vargas Colnaghi', '2012-03-01 00:00:00'),
(135, 'daniel_saullo2010@hotmail.com', 'DANIEL SAULO', '2012-03-01 00:00:00'),
(136, 'samcontini@hotmail.com', 'Samara Contini', '2012-03-01 00:00:00'),
(137, 'patriciabya@hotmail.com', 'Patricia Cristina Corrêa', '2012-03-01 00:00:00'),
(139, 'IZABELLASANTTOS@HOTMAIL.COM', 'IZABELA ADELAIDE SANTOS', '2012-03-01 00:00:00'),
(140, 'jocenibonzanini@hotmail.com', 'Joceni jacinta de Avilla Bonzanini', '2012-03-01 00:00:00'),
(141, 'anapaula_m19@hotmail.com', 'Ana Paula Ramalho Martins', '2012-03-01 00:00:00'),
(142, 'dianinhacmachado@hotmail.com', 'DIANA', '2012-03-01 00:00:00'),
(143, 'abmrgyn@gmail.com', 'ALYNE BORGES MARQUES', '2012-03-01 00:00:00'),
(144, 'vanessa_mpp@hotmail.com', 'Vanessa Maria Pires do Prado', '2012-03-01 00:00:00'),
(145, 'fabianamendes1201@gmail.com', 'FABIANA MENDES MOREIRA', '2012-03-01 00:00:00'),
(146, 'cristianeferreirasilva@hotmail.com', 'Cristiane Silva', '2012-03-01 00:00:00'),
(147, 'atiliofreitas@hotmail.com', 'Caroline Atílio de Freitas', '2012-03-01 00:00:00'),
(148, 'meciasbrito@yahoo.com.br', 'mecias', '2012-03-01 00:00:00'),
(149, 'carlosottavio9@hotmail.com', 'CARLOS OTAVIO DE CARVALHO', '2012-03-01 00:00:00'),
(150, 'alessandra3231@hotmail.com', 'alessandra', '2012-03-01 00:00:00'),
(151, 'maparecida@saneago.com.br', 'maria aparecida da silva vitoria', '2012-03-01 00:00:00'),
(152, 'lanusse.or@celg.com.br', 'Lanusse Oliveira Lourenco', '2012-03-01 00:00:00'),
(153, 'glaucia_aj@hotmail.com', 'GLAUCIA', '2012-03-01 00:00:00'),
(154, 'alta.cir@hotmail.com', 'Altacir Bunde', '2012-03-01 00:00:00'),
(155, 'rodrigo.r.o@hotmail.com', 'Rodrigo', '2012-03-01 00:00:00'),
(156, 'supportecontabilidade@hotmail.com', 'carlos albertho', '2012-03-01 00:00:00'),
(157, 'valdilenecontabil@hotmail.com', 'maria valdilene pereira santana', '2012-03-01 00:00:00'),
(158, 'garciaconsultoria@hotmail.com', 'VANDERLEI GARCIA', '2012-03-01 00:00:00'),
(159, 'karinne.nobrega@bol.com.br', 'karinne ', '2012-03-01 00:00:00'),
(160, 'henrique@sicoobjuriscred.com.br', 'Henrique', '2012-03-01 00:00:00'),
(161, 'suzannamagh@hotmail.com', 'SUZANNA MAGHALLI RODRIGUES DE OLIVEIRA MORAES', '2012-03-01 00:00:00'),
(162, 'josedgn_1@hotmal.com', 'JOSE DIAS FERREIRA', '2012-03-01 00:00:00'),
(163, 'fred.curado@bol.com.br', 'frederico lobo brandão curado', '2012-03-01 00:00:00'),
(164, 'mangrichmsc@hotmail.com', 'Mirian Mangrich', '2012-03-01 00:00:00'),
(165, 'alevaz.galega@hotmail.com', 'Alessandra', '2012-03-01 00:00:00'),
(166, 'advaldoalves.adm@gmail.com', 'Advaldo Alves', '2012-03-01 00:00:00'),
(167, 'edward@aauditec.com.br', 'edward cordeiro peixoto', '2012-03-01 00:00:00'),
(168, 'luciene2006-2010@hotmail.com', 'LUCIENE DE FÁTIMA DOS SANTOS SILVA', '2012-03-01 00:00:00'),
(169, 'henrique.silvacarrijo@gmail.com', 'HENRIQUE SILVA CARRIJO', '2012-03-01 00:00:00'),
(170, 'dina.ro@ig.com.br', 'ERONDINA RODRIGUES DA SILVA', '2012-03-01 00:00:00'),
(171, 'kelikachristina@hotmail.com', 'Kélika Christina O. Sousa ', '2012-03-01 00:00:00'),
(172, 'dyane20@hotmail.com', 'LEIDIANE DOS SANTOS PEREIRA', '2012-03-01 00:00:00'),
(173, 'lferrojunior@hotmail.com', 'Luiz Péricles', '2012-03-01 00:00:00'),
(174, 'bersaniantonio@yahoo.com.b', 'Antônio Luiz Bersani', '2012-03-01 00:00:00'),
(175, 'amelia.porto@otmail.com', 'maria amelia', '2012-03-01 00:00:00'),
(176, 'getulio_exato@hotmail.com', 'GETULIO PEREIRA DE SOUSA', '2012-03-01 00:00:00'),
(177, 'laycegarcia@hotmail.com', 'lucia Garcia', '2012-03-01 00:00:00'),
(178, 'ferhta15@hotmail.com', 'Fernanda', '2012-03-01 00:00:00'),
(179, 'kenialuci@bol.com.br', 'Kenia Lucia', '2012-03-01 00:00:00'),
(180, 'indialma27@hotmail.com', 'indialma antunes barbosa lima', '2012-03-01 00:00:00'),
(181, 'elepereira@yahoo.com.br', 'Leandro da Conceição Pereira', '2012-03-01 00:00:00'),
(182, 'engmec3d@gmail.com', 'Dêib Martins de Souza', '2012-03-01 00:00:00'),
(183, 'mara@eletra.org.br', 'Mara Marques Medeiros', '2012-03-01 00:00:00'),
(185, 'ede.assis@hotmail.com', 'eder', '2012-03-01 00:00:00'),
(186, 'simonelmarques@hotmail.com', 'Simone Lourenço Marques', '2012-03-01 00:00:00'),
(187, 'vida-dias@hotmail.com', 'veronice', '2012-03-01 00:00:00'),
(188, 'daianapereira66@hotmail.com', 'Daiana Maria', '2012-03-01 00:00:00'),
(189, 'marinalvakananda@hotmail.com', 'marinalva fonseca borges', '2012-03-01 00:00:00'),
(190, 'MARIA.ELEUZA@CORREIOS.COM.BR', 'MARIA.ELEUZA@CORREIOS.COM.BR', '2012-03-01 00:00:00'),
(191, 'betaniamrosa@hotmail.com', 'BETÂNIA MOREIRA ROSA', '2012-03-01 00:00:00'),
(192, 'almirbgomes@hotmail.com', 'Almir', '2012-03-01 00:00:00'),
(193, 'fernandoribeir@gmail.com', 'Fernando Ribeiro', '2012-03-01 00:00:00'),
(194, 'juniornatu@yahoo.com.br', 'JUNIOR', '2012-03-01 00:00:00'),
(198, 'narakelynfr@hotmail.com', 'narakelly de Faria Rezende', '2012-05-29 00:00:00'),
(200, 'brunacarolinapr@hotmail.com', 'Bruna Reis', '2012-06-15 00:00:00'),
(201, 'narakellynfr@hotmail.com', 'Narakelly Rezende', '2012-06-21 00:00:00'),
(202, 'gleysoniead@yahoo.com.br', 'Gleyson Faria da Silva', '2012-06-21 00:00:00'),
(203, 'vp_martins@hotmail.com', 'Poliana ', '2012-06-22 00:00:00'),
(205, 'zury_zadi@hotmail.com', 'zury zadi francisca alves', '2012-06-28 00:00:00'),
(206, 'heliojalmeida@yahoo.com.br', 'HELIO JOSE DE ALMEIDA', '2012-07-07 00:00:00'),
(207, 'toledo.sucesso@gmail.com', 'Doraci Batista de Tolêdo Manguci', '2012-07-10 00:00:00'),
(208, 'bancofiat3@pinauto.com.br', 'Matheus Trindade', '2012-07-13 00:00:00'),
(210, 'derciliojunior45@hotmail.com', 'DERCILIO HONORATO JUNIOR', '2012-08-09 00:00:00'),
(211, 'ramses_alves@hotmail.com', 'Ramsés Alves Resende', '2012-08-16 00:00:00'),
(213, 'marques2109@hotmail.com', 'Elisangela', '2012-08-19 00:00:00'),
(214, 'laianaraujo@hotmail.com', 'LAIANA ARAÚJO', '2012-09-04 00:00:00'),
(215, 'martafrare@bol.com.br', 'Marta Costa', '2012-09-11 00:00:00'),
(216, 'financeiro@flamboyant.com.br', 'Dielle Barbosa', '2012-09-11 00:00:00'),
(217, 'leidianeb@hotmail.com', 'LEIDIANI MOREIRA BONGIOVANI', '2012-09-17 00:00:00'),
(218, 'fernando@ewn.com.br', 'fernando roberto santos aguiar', '2012-09-17 00:00:00'),
(219, 'emersonsouzadavila@hotmail.com', 'Emerson de Souza Davila', '2012-09-17 00:00:00'),
(221, 'marcelavtaveira@hotmail.com', 'Marcela', '2012-09-23 00:00:00'),
(222, 'wuandisley-adm@hotmail.com', 'wuandisley', '2012-09-27 00:00:00'),
(223, 'ysa_as@hotmail.com', 'laysa Alves da Silva', '2012-10-01 00:00:00'),
(224, 'recmoraismendes@hotmail.com', 'Renata de Castro Morais Mendes', '2012-10-08 00:00:00'),
(226, 'dyklecia@hotmail.com', 'diane clecia', '2012-10-23 00:00:00'),
(227, 'claudiacontadora@hotmail.com', 'claudia', '2012-10-27 00:00:00'),
(228, 'paulinho_filho1@hotmail.com', 'PAULO FILHO', '2012-11-01 00:00:00'),
(229, 'tgof@hotmail.com', 'telma goncalves', '2012-11-01 00:00:00'),
(230, 'selma.silva@grupomilenio.com.br', 'SELMA', '2012-11-09 00:00:00'),
(231, 'gerop@grupocoral.com.br', 'FERNANDA OLIVEIRA DE SOUZA', '2012-11-12 00:00:00'),
(232, 'leticia@masterlocacao.com', 'Lara Denise', '2012-11-12 00:00:00'),
(233, 'jopplavor@yahoo.com.br', 'Jorgiany', '2012-11-13 00:00:00'),
(234, 'lays.camargo@cnortemudas.com.br', 'Lays Camargo Castilho', '2012-11-13 00:00:00'),
(236, 'idelmasilv@hotmail.com', 'Idelma Aparecida Silva', '2012-11-15 00:00:00'),
(237, 'jamaraxjrb@hotmail.com', 'Jamara', '2012-11-19 00:00:00'),
(238, 'jovelina-gyn@hotmail.com', 'Jovelina de Souza Lima', '2012-11-22 00:00:00'),
(239, 'rogeria.fiscal@contarcontabilidade.com', 'ROGÉRIA MARIA DO NASCIMENTO', '2012-12-07 00:00:00'),
(240, 'andresina77@gmail.com', 'andresina', '2012-12-10 00:00:00'),
(241, 'maura.rocha@hotmail.com', 'Maura', '2012-12-18 00:00:00'),
(242, 'debora_gynazevedo@hotmail.com', 'debora', '2012-12-19 00:00:00'),
(244, 'elizabetesr@homail.com', 'Elizabete Silva Ribeiro', '2013-01-10 00:00:00'),
(246, 'alisandramattana@hotmail.com', 'Alisandra Da Silva Mattana', '2013-01-20 00:00:00'),
(247, 'rcbnunes@hotmail.com', 'Roberto Carlos', '2013-01-23 00:00:00'),
(248, 'edilenenunes1@hotmail.com', 'edilene de fatima nunes', '2013-01-25 00:00:00'),
(250, 'thatiabrao@hotmail.com', 'Thatiana', '2013-01-28 00:00:00'),
(251, 'pedrofhcont@hotmail.com', 'pedro', '2013-02-04 00:00:00'),
(252, 'cassis@brhomecenters.com.br', 'Cristiano Assis', '2013-02-05 00:00:00'),
(253, 'jow_silva_andrade@hotmail.com', 'Jonathan Silva de Andrade', '2013-02-08 00:00:00'),
(254, 'jow_silva_andrade@hotmail.com', 'Jonathan Silva de Andrade', '2013-02-08 00:00:00'),
(255, 'esquerdinhamendes@hotmail.com', 'WANDERSON', '2013-02-18 00:00:00'),
(256, 'fribeiro.pollyanna@hotmail.com', 'poliana', '2013-02-19 00:00:00'),
(257, 'contabil@redemil.com.br', 'Kássio', '2013-02-19 00:00:00'),
(258, 'marcos@rinetto.com.br', 'Marcos Henrique', '2013-02-20 00:00:00'),
(259, 'rayllahgta@hotmail.com', 'RAYLLA CORREIA DE SOUSA', '2013-02-21 00:00:00'),
(260, 'andreia_agoncalves@hotmail.com', 'ANDREIA', '2013-02-22 00:00:00'),
(261, 'pabyane@hotmail.com', 'Pabyane', '2013-02-26 00:00:00'),
(262, 'annakato@gmail.com', 'ANA LUCIA PACHECO KATOPODIS', '2013-03-04 00:00:00'),
(263, 'luninee@yahoo.com.br', 'Luciane Janine B de Oliveira', '2013-03-10 00:00:00'),
(264, 'salvinaveras@hotmail.com', 'Salvina Veras', '2013-03-10 00:00:00'),
(265, 'mari_aneferrao@hotmail.com', 'marielle ', '2013-03-13 00:00:00'),
(266, 'juliettoliver@hotmail.com', 'julieta', '2013-03-18 00:00:00'),
(267, 'ramoselton@hotmail.com', 'ELTON ROCHA RAMOS', '2013-03-25 00:00:00'),
(268, 'euripedesferroperola@hotmail.com', 'euripedes ferrro da costa', '2013-04-12 00:00:00'),
(269, 'annapaulapsic@hotmail.com', 'ana ', '2013-04-15 00:00:00'),
(270, 'ana_elisa85@hotmail.com', 'Ana Elisa', '2013-04-22 00:00:00'),
(271, 'anapaula_meubem@hotmail.com', 'Ana Paula de O S Machado', '2013-05-09 00:00:00'),
(272, 'melquiades.silva@hotmail.com', 'Melquiades', '2013-05-10 00:00:00'),
(274, 'erondinalm@hotmail.com', 'Erondina Lopes Moreira', '2013-05-11 00:00:00'),
(275, 'fpinheirodarocha@hotmail.com', 'FRANCISCO PINHEIRO DA ROCHA', '2013-05-13 00:00:00'),
(276, 'karlieneback@hotmail.com', 'KARLIENE PEREIRA DOS SANTOS', '2013-05-21 00:00:00'),
(277, 'alyne.assis@hypermarcas.com.br', 'Alyne Alcântara de Assis', '2013-06-03 00:00:00'),
(278, 'bigtote@uol.com.br', 'antoniom cardoso', '2013-06-05 00:00:00'),
(279, 'tania-pedagoga@hotmail.com', 'Tânia Maria da Silva', '2013-06-10 00:00:00'),
(280, 'waltercam@uol.com.br', 'WALTER DA SILVA CAMPOS', '2013-06-13 00:00:00'),
(281, 'pamela.tallita@hotmail.com', 'Pâmela Tallita', '2013-06-19 00:00:00'),
(282, 'thiago.yn@hotmail.com', 'Thiago Leite Franco', '2013-06-28 00:00:00'),
(283, 'thiago.leitefranco@gmail.com', 'Thiago Leite Franco', '2013-06-28 00:00:00'),
(284, 'imprensa@minhapos.com.br', 'Minha Pós', '2013-07-08 00:00:00'),
(285, 'jack_klm@hotmail.com', 'Jaqueline', '2013-07-31 00:00:00'),
(286, 'jaitima_darck@hotmail.com', 'jaitima correia darc', '2013-08-02 00:00:00'),
(287, 'fabianerosa@tropicalurbanismo.com.br', 'Fabiane Rosa de Jesus', '2013-08-02 00:00:00'),
(288, 'fabiane.rosajs@hotmail.com', 'Fabiane Rosa de Jesus', '2013-08-02 00:00:00'),
(289, 'helidamav@hotmail.com', 'Helida Maria de Avila Vilela', '2013-08-05 00:00:00'),
(290, 'elienaialmeida_ouro@hotmail.com', 'elienai', '2013-08-05 00:00:00'),
(291, 'mendes@persogo.com.br', 'Nivaldo Jose Mendes', '2013-08-06 00:00:00'),
(292, 'neurufc@gmail.com', 'neuru faustino', '2013-08-19 00:00:00'),
(293, 'wanderley@intral.com.br', 'wanderley', '2013-08-22 00:00:00'),
(294, 'tauynni.brandao@piracanjuba.com.br', 'tauynni', '2013-09-02 00:00:00'),
(295, 'cardosomaceio@ig.com.br', 'JORUATAN CARDOSO', '2013-09-04 00:00:00'),
(296, 'gizelly_87@hotmail.com', 'gizelly', '2013-09-13 00:00:00'),
(297, 'joel_albert@invivo-nsa.com.br', 'JOEL CARIS', '2013-09-14 00:00:00'),
(298, 'joneybelo22@hotmail.com', 'joney belo dos santos', '2013-09-19 00:00:00'),
(299, 'graycerosa@hotmail.com', 'Grayce', '2013-09-19 00:00:00'),
(300, 'grayce.miranda@hotmail.com .br', 'Grayce', '2013-09-19 00:00:00'),
(301, 'mgspassos@gmail.com', 'Maria das Graças de Souza Passos', '2013-09-23 00:00:00'),
(302, 'dayannecandidas@hotmail.com', 'Dayanne Candida da Silva', '2013-09-26 00:00:00'),
(303, 'pathycruz_1@hotmail.com', 'patricia cruz', '2013-09-27 00:00:00'),
(304, 'marcioesc1@gmail.com', 'marcio', '2013-10-02 00:00:00'),
(305, 'marcio.costa@grupofarias.com.br', 'marcio', '2013-10-02 00:00:00'),
(306, 'nailza@megacontab.com.br', 'Nailza Lima', '2013-10-02 00:00:00'),
(307, 'jff.adv@hotmail.com', 'jose fleury de araujo faria', '2013-10-02 00:00:00'),
(308, 'zuleykadias@gmail.com', 'Zuleyka Xavier', '2013-10-06 00:00:00'),
(309, 'emerson_nsilva@hotmail.com', 'Emerson Nogueira da Silva', '2013-10-21 00:00:00'),
(310, 'maria.fcamargo@hotmail.com', 'MARIA DE FATIMA CAMARGO ', '2013-11-04 00:00:00'),
(311, 'karollzynhaps@gmail.com', 'Karolliny', '2013-11-25 00:00:00'),
(312, 'mcabrini@gmail.com', 'Murilo', '2013-11-29 00:00:00'),
(314, 'valdisonps@hotmail.com', 'valdison Pedro de Sá', '2013-12-14 00:00:00'),
(315, 'raimundoffonseca433@hotmail.com', 'Raimundo Ferreira Fonseca', '2013-12-15 00:00:00'),
(316, 'vilmonescontador@hotmail.com', 'VILMONES SOUSA DE PAULO', '2013-12-18 00:00:00'),
(317, 'lilianliriol@yahoo.com.br', 'Lilian de Cassia Oliveira Coutinho', '2013-12-30 00:00:00'),
(318, 'andre.luis.sales@gmail.com', 'André Luís Sales da Silva', '2014-01-21 00:00:00'),
(319, 'rosymoni_ferreira@hotmail.com', 'Rosimone', '2014-01-29 00:00:00'),
(320, 'VILMONESCONTADOR@HOTMAIL.COM', 'VILMONES SOUSA DE PAULO', '2014-01-31 00:00:00'),
(321, 'roseapl@hotmail.com', 'ROSIMEIRE A P LEAO', '2014-02-05 00:00:00'),
(322, 'pedro.filho@denusa.com.br', 'PEDRO FILHO', '2014-02-10 00:00:00'),
(323, 'fernandez_contabeis@hotmail.com', 'Franciele Fernandes', '2014-02-12 00:00:00'),
(324, 'joao@gecontcontabil.com.br', 'Joao Batista Bitencourt dos Santos', '2014-02-18 00:00:00'),
(325, 'luisclouzada@hotmail.com', 'LUIS CARLOS LOUZADA', '2014-02-20 00:00:00'),
(326, 'anaadm_88@hotmail.com', 'Ana Maria Rosa dos Santos', '2014-02-26 00:00:00'),
(328, 'THAISSANTOS22@HOTMAIL.COM', 'THAISS=', '2014-03-14 00:00:00'),
(329, 'carla.lq@hotmail.com', 'Carla Queiroz', '2014-03-31 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas_frequencias`
--

CREATE TABLE IF NOT EXISTS `notas_frequencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) DEFAULT '0',
  `id_turma` int(11) DEFAULT '0',
  `id_disciplina` int(11) DEFAULT '0',
  `id_professor` int(11) DEFAULT '0',
  `id_aluno` int(11) DEFAULT '0',
  `nota` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `texto` text COLLATE utf8_bin,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` enum('Masculino','Feminino') COLLATE utf8_bin NOT NULL DEFAULT 'Masculino',
  `rg` int(11) DEFAULT '0',
  `orgao_expedidor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8_bin DEFAULT NULL,
  `pis` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `banco` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `agencia` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `conta` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `data_nascimento`, `sexo`, `rg`, `orgao_expedidor`, `cpf`, `pis`, `banco`, `agencia`, `conta`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'Nome do professor', '2014-05-15', 'Masculino', 123, 'SSP/GO', '254.088.518-77', '12333', 'Itaú', '1589', '123456-0', 1, '2014-04-28 22:13:22', '2014-04-28 22:13:22', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `id_curso` int(11) DEFAULT '0',
  `turma_fechada` enum('Sim','Não') COLLATE utf8_bin NOT NULL DEFAULT 'Não',
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `sigla`, `nome`, `id_curso`, `turma_fechada`, `data_inicio`, `data_fim`, `ordem`, `insert_data`, `update_data`, `us_id`) VALUES
(1, 'PSC001', 'Turma de Psicologia - Especial', 1, 'Não', '2014-05-27', '2014-05-29', 1, '2014-05-07 23:03:56', '2014-05-07 23:40:42', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `us_nome` varchar(200) DEFAULT NULL,
  `us_estado` char(2) DEFAULT NULL,
  `us_cidade` varchar(200) DEFAULT NULL,
  `us_telefone` varchar(14) DEFAULT NULL,
  `us_email` varchar(200) DEFAULT NULL,
  `us_pw` varchar(100) DEFAULT NULL,
  `us_permissao` text,
  `us_tipo` int(2) DEFAULT '1',
  `us_ativo` int(1) DEFAULT '1',
  `us_time` varchar(30) DEFAULT '',
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`us_id`, `us_nome`, `us_estado`, `us_cidade`, `us_telefone`, `us_email`, `us_pw`, `us_permissao`, `us_tipo`, `us_ativo`, `us_time`) VALUES
(1, 'Ipecon Consultoria', 'GO', 'Goiânia', '(62) 3233-6619', 'ipecon@ipecon.com.br', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', 1, 1, '1384192145'),
(2, 'Administrador do site', 'GO', 'Goiânia', '(62) 8222-9786', 'regisandrade@gmail.com', '588ac6276c061a445c2d6722e742f5ee31c17477', '{"banners":{"adicionar":"1","editar":"1","remover":"1"}}', 2, 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_alunos`
--

CREATE TABLE IF NOT EXISTS `usuarios_alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `login` varchar(115) COLLATE utf8_bin NOT NULL,
  `senha` varchar(40) COLLATE utf8_bin NOT NULL,
  `status` enum('Ativo','Inativo') COLLATE utf8_bin NOT NULL DEFAULT 'Ativo',
  PRIMARY KEY (`id`,`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
