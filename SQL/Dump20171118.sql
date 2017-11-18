CREATE DATABASE  IF NOT EXISTS `teste` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `teste`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: teste
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `aluno`
--

DROP TABLE IF EXISTS `aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aluno` (
  `id_aluno` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluno`
--

LOCK TABLES `aluno` WRITE;
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` VALUES (1,'diego','1991-08-16','rua 38a',35,'Cidade Nova','Manaus','AM','2017-11-17 00:00:00','69095260'),(2,'felipe','1990-05-26','rua beija-flor',334,'Cidade de Deus','Manaus','AM','2017-11-17 00:00:00','69095258'),(3,'Gustavo','1985-08-17','rua 331',22,'Japiim','Manaus','Amazonas',NULL,'69058623'),(5,'Antônio Silva Moraes','1980-12-25','Rua Professora Maria Orminda',25,'Cidade Nova','Manaus','AM',NULL,'69095260'),(6,'Carlos Guilherme','1980-12-22','Rua Osvaldo Monteiro',55,'Cidade Nova','Manaus','AM','2017-11-18 00:00:00','69095262');
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `id_curso` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (1,'Curso de PHP Básico','2016-08-16 00:00:00'),(2,'Curso de PHP POO','2017-08-16 00:00:00'),(3,'Curso de HTML',NULL),(4,'Curso de YII2',NULL),(5,'Curso de POO','2017-11-18 16:43:00');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id_notas` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nota_1` smallint(3) DEFAULT NULL,
  `nota_2` smallint(3) DEFAULT NULL,
  `nota_3` smallint(3) DEFAULT NULL,
  `nota_4` smallint(3) DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  `fk_id_curso` int(11) DEFAULT NULL,
  `fk_id_aluno` int(11) DEFAULT NULL,
  `fk_id_professor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notas`),
  KEY `fk_id_curso` (`fk_id_curso`),
  KEY `fk_id_aluno` (`fk_id_aluno`),
  KEY `fk_id_professor` (`fk_id_professor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` VALUES (1,10,9,8,7,'2017-11-17 00:00:00',1,1,1),(2,5,6,7,8,'2017-11-17 00:00:00',2,2,2),(3,10,10,10,10,'2017-11-18 16:48:00',1,1,1);
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professor`
--

DROP TABLE IF EXISTS `professor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professor` (
  `id_professor` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  `fk_id_curso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_professor`),
  KEY `fk_id_curso` (`fk_id_curso`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professor`
--

LOCK TABLES `professor` WRITE;
/*!40000 ALTER TABLE `professor` DISABLE KEYS */;
INSERT INTO `professor` VALUES (1,'Clício','1968-02-14','2017-11-17 00:00:00',1),(2,'Guanabara','1980-08-12','2017-11-17 00:00:00',2),(3,'João barbosa','1991-12-25','2017-11-18 16:53:00',1);
/*!40000 ALTER TABLE `professor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-18 13:09:05
