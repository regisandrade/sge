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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-13 23:23:03
