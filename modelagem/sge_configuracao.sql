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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-13 23:23:03
