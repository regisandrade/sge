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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-13 23:23:03
