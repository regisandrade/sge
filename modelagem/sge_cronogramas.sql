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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-13 23:23:03
