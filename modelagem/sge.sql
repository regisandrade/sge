CREATE DATABASE  IF NOT EXISTS `sge` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `sge`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sge
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alunos` (
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
  `status` enum('Ativo','Inativo') COLLATE utf8_bin NOT NULL DEFAULT 'Ativo',
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` VALUES (1,1,'Regis Rodrigues de Andrade','1976-12-15','Rialma','GO','Brasileira','Feminino','4581128','SSP/GO','254.088.518-77','regisandrade@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(2,1,'Regis Andrade','1976-12-15','Rialma','GO','Brasileira','Masculino','4581128','SSP/GO','254.088.518-77','regisandrade@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(3,1,'Regis Andrade','1976-12-15','Rialma','GO','Brasileira','Masculino','4581128','SSP/GO','254.088.518-77','regis@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(4,1,'Regis Andrade','1976-12-15','Rialma','GO','Brasileira','Masculino','4581128','SSP/GO','254.088.518-77','regisandrade@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(5,1,'Regis Andrade','1976-12-15','Rialma','GO','Brasileira','Masculino','4581128','SSP/GO','254.088.518-77','regisandrade@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(6,1,'Regis Andrade','1976-12-15','Rialma','GO','Brasileira','Masculino','4581128','SSP/GO','254.088.518-77','regisandrade@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(7,1,'Regis Andrade','1976-12-15','Rialma','GO','Brasileira','Masculino','4581128','SSP/GO','254.088.518-77','regisandrade@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(8,1,'Regis Andrade','1976-12-15','Rialma','GO','Brasileira','Masculino','4581128','SSP/GO','254.088.518-77','regisandrade@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(9,1,'Regis Andrade','1976-12-15','Rialma','GO','Brasileira','Masculino','4581128','SSP/GO','254.088.518-77','regisandrade@gmail.com','2014-05-12 03:00:00','Ativo',NULL,'Não','Não','1','2014-05-12','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(10,1,'Rogério Rodrigues de Andrade','0000-00-00','Rialma','GO','Brasileira','Masculino','123','SSP/GO','111.111.111-33','rogeriora25@gmail.com','2014-05-14 01:36:43','Ativo',NULL,'Não','Não',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(11,1,'Rogério Rodrigues de Andrade','1974-10-03','Rialma','GO','Brasileira','Masculino','123','SSP/GO','111.111.111-33','rogeriora25@gmail.com','2014-05-14 01:37:50','Ativo',NULL,'Não','Não',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(12,1,'Rogério Rodrigues de Andrade','1974-10-03','Rialma','GO','Brasileira','Masculino','123','SSP/GO','111.111.111-33','rogeriora25@gmail.com','2014-05-14 01:44:42','Ativo',NULL,'Não','Não',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(13,1,'Rogério Rodrigues de Andrade','1974-10-03','Rialma','GO','Brasileira','','123','SSP/GO','111.111.111-11','rogeriora25@gmail.com','2014-05-14 02:03:22','Ativo',NULL,'Não','Não',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(14,1,'Rogério Rodrigues de Andrade','1974-10-03','Rialma','GO','Brasileira','','123','SSP/GO','111.111.111-11','rogeriora25@gmail.com','2014-05-14 02:05:28','Ativo',NULL,'Não','Não',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(15,1,'Rogério Rodrigues de Andrade','1974-10-03','Rialma','GO','Brasileira','','123','SSP/GO','111.111.111-11','rogeriora25@gmail.com','2014-05-14 02:06:21','Ativo',NULL,'Não','Não',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL),(16,1,'Rogério Rodrigues de Andrade','1974-10-03','Rialma','GO','Brasileira','','123','SSP/GO','111.111.111-11','rogeriora25@gmail.com','2014-05-14 02:11:41','Ativo',NULL,'Não','Não',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mala Direta',NULL);
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artigos`
--

DROP TABLE IF EXISTS `artigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) COLLATE utf8_bin NOT NULL,
  `arquivo` varchar(150) COLLATE utf8_bin NOT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artigos`
--

LOCK TABLES `artigos` WRITE;
/*!40000 ALTER TABLE `artigos` DISABLE KEYS */;
INSERT INTO `artigos` VALUES (1,'OPA','reciboIpecon2014.pdf',1,'2014-05-05 21:30:09','2014-05-05 21:30:09',1);
/*!40000 ALTER TABLE `artigos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avisos`
--

DROP TABLE IF EXISTS `avisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `descricao` text COLLATE utf8_bin,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avisos`
--

LOCK TABLES `avisos` WRITE;
/*!40000 ALTER TABLE `avisos` DISABLE KEYS */;
INSERT INTO `avisos` VALUES (1,'titulo','Descrição',1,'2014-04-29 21:59:10','2014-04-29 21:59:10',1);
/*!40000 ALTER TABLE `avisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bancos`
--

DROP TABLE IF EXISTS `bancos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bancos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `site` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bancos`
--

LOCK TABLES `bancos` WRITE;
/*!40000 ALTER TABLE `bancos` DISABLE KEYS */;
INSERT INTO `bancos` VALUES (1,'Itau','itau.com.br',1,'2014-04-29 22:11:25','2014-05-01 22:11:53',1);
/*!40000 ALTER TABLE `bancos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id_banners` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `titulo` varchar(200) COLLATE utf8_bin NOT NULL,
  `link` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_banners`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias_contas`
--

DROP TABLE IF EXISTS `categorias_contas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias_contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` enum('Receita','Despesa') COLLATE utf8_bin NOT NULL DEFAULT 'Receita',
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias_contas`
--

LOCK TABLES `categorias_contas` WRITE;
/*!40000 ALTER TABLE `categorias_contas` DISABLE KEYS */;
INSERT INTO `categorias_contas` VALUES (1,'Receita','Salário',1,'2014-05-05 21:36:44','2014-05-05 21:36:44',1);
/*!40000 ALTER TABLE `categorias_contas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracao`
--

DROP TABLE IF EXISTS `configuracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuracao` (
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracao`
--

LOCK TABLES `configuracao` WRITE;
/*!40000 ALTER TABLE `configuracao` DISABLE KEYS */;
INSERT INTO `configuracao` VALUES (1,'Ipecon - Ensino e Consultoria','IPECON','Descrição','ipecon@ipecon.com.br','Av. T-4, nº 1.478, Ed. Absolut Business Style, sala A-132 (13º andar)\nSetor Bueno, Goiânia/GO - CEP: 74.230-030','(62) 3214-2563 ','3214-3229','facebook.com/ipecon','twitter.com/ipecongoias','br.linkedin.com/in/ipecon','ipecon goias goiania pos-graduacao pos','-16.7195695','-49.2669304','logo.png',1,'2014-02-23 10:50:17','2014-02-23 10:50:17');
/*!40000 ALTER TABLE `configuracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contas`
--

DROP TABLE IF EXISTS `contas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contas` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contas`
--

LOCK TABLES `contas` WRITE;
/*!40000 ALTER TABLE `contas` DISABLE KEYS */;
/*!40000 ALTER TABLE `contas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contas_bancarias`
--

DROP TABLE IF EXISTS `contas_bancarias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contas_bancarias` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contas_bancarias`
--

LOCK TABLES `contas_bancarias` WRITE;
/*!40000 ALTER TABLE `contas_bancarias` DISABLE KEYS */;
INSERT INTO `contas_bancarias` VALUES (1,1,'Conta corrente','123','1223',1,'João','(62) 2222-2222',1,'2014-04-29 22:12:18','2014-04-29 22:12:18',1);
/*!40000 ALTER TABLE `contas_bancarias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cronogramas`
--

DROP TABLE IF EXISTS `cronogramas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cronogramas` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cronogramas`
--

LOCK TABLES `cronogramas` WRITE;
/*!40000 ALTER TABLE `cronogramas` DISABLE KEYS */;
INSERT INTO `cronogramas` VALUES (1,1,1,'2014-05-01','2014-05-03','2014-05-09','2014-05-10','2014-05-16','2014-05-17',1,'2014-04-28 22:08:32','2014-04-28 22:08:32',1);
/*!40000 ALTER TABLE `cronogramas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curriculos`
--

DROP TABLE IF EXISTS `curriculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curriculos` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curriculos`
--

LOCK TABLES `curriculos` WRITE;
/*!40000 ALTER TABLE `curriculos` DISABLE KEYS */;
INSERT INTO `curriculos` VALUES (1,1,1,'globo.com','Mestre',1,'2014-04-28 22:13:38','2014-04-28 22:13:38',1);
/*!40000 ALTER TABLE `curriculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (1,'MBA em Psicologia, Saúde e Clínica: abordagens e práticas interdisciplinares','375h','2014-05-01','2014-05-30','Ativo','Sim',1,'2014-05-07 23:38:53','2014-05-07 23:38:53',1);
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `depoimentos`
--

DROP TABLE IF EXISTS `depoimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `depoimentos` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depoimentos`
--

LOCK TABLES `depoimentos` WRITE;
/*!40000 ALTER TABLE `depoimentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `depoimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descricaoCursos`
--

DROP TABLE IF EXISTS `descricaoCursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descricaoCursos` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descricaoCursos`
--

LOCK TABLES `descricaoCursos` WRITE;
/*!40000 ALTER TABLE `descricaoCursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `descricaoCursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplinas`
--

DROP TABLE IF EXISTS `disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplinas`
--

LOCK TABLES `disciplinas` WRITE;
/*!40000 ALTER TABLE `disciplinas` DISABLE KEYS */;
INSERT INTO `disciplinas` VALUES (1,'Disciplina 01',1,'2014-04-28 22:05:57','2014-04-28 22:05:57',1),(2,'Disciplina 02',1,'2014-04-28 22:06:05','2014-04-28 22:06:05',1);
/*!40000 ALTER TABLE `disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplinas_turmas`
--

DROP TABLE IF EXISTS `disciplinas_turmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disciplinas_turmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_turma` int(11) DEFAULT '0',
  `id_disciplina` int(11) DEFAULT '0',
  `id_professor` int(11) DEFAULT '0',
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplinas_turmas`
--

LOCK TABLES `disciplinas_turmas` WRITE;
/*!40000 ALTER TABLE `disciplinas_turmas` DISABLE KEYS */;
INSERT INTO `disciplinas_turmas` VALUES (1,1,1,1,1,'2014-04-28 22:14:14','2014-04-28 22:14:14',1);
/*!40000 ALTER TABLE `disciplinas_turmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `texto` text COLLATE utf8_bin,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enderecos` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
INSERT INTO `enderecos` VALUES (1,14,'qq','qqq','88888-888','qqq','AM','',NULL,'(55) 5555-5555','2014-05-14 02:05:28','Aluno',NULL),(2,15,'qq','qqq','88888-888','qqq','AM','(44) 4444-4444',NULL,'(55) 5555-5555','2014-05-14 02:06:21','Aluno',NULL),(3,16,'qq','qqq','88888-888','qqq','AM','(44) 4444-4444',NULL,'(55) 5555-5555','2014-05-14 02:11:41','Aluno',NULL);
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_bin NOT NULL,
  `sigla` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Acre','AC'),(2,'Alagoas','AL'),(3,'Amazonas','AM'),(4,'Amapá','AP'),(5,'Bahia','BA'),(6,'Ceará','CE'),(7,'Distrito Federal','DF'),(8,'Espírito Santo','ES'),(9,'Goiás','GO'),(10,'Maranhão','MA'),(11,'Minas Gerais','MG'),(12,'Mato Grosso do Sul','MS'),(13,'Mato Grosso','MT'),(14,'Pará','PA'),(15,'Paraíba','PB'),(16,'Pernambuco','PE'),(17,'Piauí','PI'),(18,'Paraná','PR'),(19,'Rio de Janeiro','RJ'),(20,'Rio Grande do Norte','RN'),(21,'Rondônia','RO'),(22,'Roraima','RR'),(23,'Rio Grande do Sul','RS'),(24,'Santa Catarina','SC'),(25,'Sergipe','SE'),(26,'São Paulo','SP'),(27,'Tocantins','TO');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galerias`
--

DROP TABLE IF EXISTS `galerias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galerias` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galerias`
--

LOCK TABLES `galerias` WRITE;
/*!40000 ALTER TABLE `galerias` DISABLE KEYS */;
/*!40000 ALTER TABLE `galerias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graduacoes`
--

DROP TABLE IF EXISTS `graduacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graduacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `curso` varchar(255) COLLATE utf8_bin NOT NULL,
  `instituicao` varchar(150) COLLATE utf8_bin NOT NULL,
  `sigla` varchar(15) COLLATE utf8_bin NOT NULL,
  `ano_conclusao` varchar(4) COLLATE utf8_bin NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario_alteracao` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`,`id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graduacoes`
--

LOCK TABLES `graduacoes` WRITE;
/*!40000 ALTER TABLE `graduacoes` DISABLE KEYS */;
INSERT INTO `graduacoes` VALUES (1,16,'','3e','222','2000','2014-05-14 02:11:41',NULL);
/*!40000 ALTER TABLE `graduacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'Terra','www.terra.com.br',1,'2014-04-28 21:24:40','2014-04-28 21:24:40',1),(2,'Globo','globo.com',1,'2014-04-28 21:24:58','2014-04-28 21:24:58',1);
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas_frequencias`
--

DROP TABLE IF EXISTS `notas_frequencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas_frequencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) DEFAULT '0',
  `id_turma` int(11) DEFAULT '0',
  `id_disciplina` int(11) DEFAULT '0',
  `id_professor` int(11) DEFAULT '0',
  `id_aluno` int(11) DEFAULT '0',
  `nota` varchar(10) COLLATE utf8_bin NOT NULL,
  `frequencia` int(11) DEFAULT '0',
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas_frequencias`
--

LOCK TABLES `notas_frequencias` WRITE;
/*!40000 ALTER TABLE `notas_frequencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas_frequencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `texto` text COLLATE utf8_bin,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  `us_id` int(11) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professores`
--

DROP TABLE IF EXISTS `professores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professores` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professores`
--

LOCK TABLES `professores` WRITE;
/*!40000 ALTER TABLE `professores` DISABLE KEYS */;
INSERT INTO `professores` VALUES (1,'Nome do professor','2014-05-15','Masculino',123,'SSP/GO','254.088.518-77','12333','Itaú','1589','123456-0',1,'2014-04-28 22:13:22','2014-04-28 22:13:22',1);
/*!40000 ALTER TABLE `professores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turmas`
--

DROP TABLE IF EXISTS `turmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turmas` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turmas`
--

LOCK TABLES `turmas` WRITE;
/*!40000 ALTER TABLE `turmas` DISABLE KEYS */;
INSERT INTO `turmas` VALUES (1,'PSC001','Turma de Psicologia - Especial',1,'Não','2014-05-27','2014-05-29',1,'2014-05-07 23:03:56','2014-05-07 23:40:42',1);
/*!40000 ALTER TABLE `turmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Ipecon Consultoria','GO','Goiânia','(62) 3233-6619','ipecon@ipecon.com.br','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','',1,1,'1384192145'),(2,'Administrador do site','GO','Goiânia','(62) 8222-9786','regisandrade@gmail.com','588ac6276c061a445c2d6722e742f5ee31c17477','{\"banners\":{\"adicionar\":\"1\",\"editar\":\"1\",\"remover\":\"1\"}}',2,1,'');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_alunos`
--

DROP TABLE IF EXISTS `usuarios_alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `login` varchar(115) COLLATE utf8_bin NOT NULL,
  `senha` varchar(40) COLLATE utf8_bin NOT NULL,
  `status` enum('Ativo','Inativo') COLLATE utf8_bin NOT NULL DEFAULT 'Ativo',
  PRIMARY KEY (`id`,`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_alunos`
--

LOCK TABLES `usuarios_alunos` WRITE;
/*!40000 ALTER TABLE `usuarios_alunos` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios_alunos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-13 23:23:49
