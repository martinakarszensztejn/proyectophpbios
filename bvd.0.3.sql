CREATE DATABASE  IF NOT EXISTS `proyectophpbios` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyectophpbios`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: proyectophpbios
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atleta`
--

DROP TABLE IF EXISTS `atleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `atleta` (
  `idAtleta` int(11) NOT NULL AUTO_INCREMENT,
  `NombreAtleta` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `FechaNacAtleta` date NOT NULL,
  `OrigenAtleta` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `idDisciplina` int(11) NOT NULL,
  PRIMARY KEY (`idAtleta`),
  UNIQUE KEY `idAtleta_UNIQUE` (`idAtleta`),
  KEY `idAtletaIndex` (`idAtleta`),
  KEY `fkDisciplina_idx` (`idDisciplina`),
  CONSTRAINT `fkDisciplina` FOREIGN KEY (`idDisciplina`) REFERENCES `disciplina` (`idDisciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atleta`
--

LOCK TABLES `atleta` WRITE;
/*!40000 ALTER TABLE `atleta` DISABLE KEYS */;
INSERT INTO `atleta` VALUES (22,'Angela Fernanda Buela Masullo','2002-05-13','Suecia',24),(23,'Milena Cabanelas','1992-01-01','Alemania',24),(24,'Santiago Illarze Mujica','2002-07-02','Paises Bajos',22),(25,'Juan Marcelo Mereles Vallejos','2001-11-30','Paises Bajos',22),(26,'Melissa Rios','1969-01-01','Paises Bajos',23),(27,'Melina Aymara Taramasco De la Torre','1998-01-18','Suecia',26),(28,'Guillermina Fedorczuk','1972-10-12','Suecia',25),(29,'Nicolas Trombotti','1996-12-24','Alemania',23),(30,'Ana Gabriela Schvartzman','1976-06-11','Suecia',26),(33,'Bruno Acosta','1999-11-19','Alemania',27),(34,'Agustín Martinez','1997-01-07','Alemania',27),(35,'Samira Carneiro','1989-07-07','Paises Bajos',28),(36,'Sofia Curcho','1976-08-05','Suecia',28);
/*!40000 ALTER TABLE `atleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disciplina` (
  `idDisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDisciplina` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idDisciplina`),
  UNIQUE KEY `idDisciplina_UNIQUE` (`idDisciplina`),
  UNIQUE KEY `NombreDisciplina_UNIQUE` (`NombreDisciplina`),
  KEY `idDisciplinaIndex` (`idDisciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplina`
--

LOCK TABLES `disciplina` WRITE;
/*!40000 ALTER TABLE `disciplina` DISABLE KEYS */;
INSERT INTO `disciplina` VALUES (23,'Ajedrez'),(26,'Bolos'),(24,'Damas Chinas'),(25,'Dardos'),(22,'E-Sports'),(27,'Ludo'),(28,'Ping Pong');
/*!40000 ALTER TABLE `disciplina` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-24 16:56:42
