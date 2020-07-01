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
  PRIMARY KEY (`idAtleta`),
  UNIQUE KEY `idAtleta_UNIQUE` (`idAtleta`),
  KEY `idAtletaIndex` (`idAtleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `compite`
--

DROP TABLE IF EXISTS `compite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compite` (
  `idAtleta` int(11) NOT NULL,
  `idDisciplina` int(11) NOT NULL,
  PRIMARY KEY (`idAtleta`),
  UNIQUE KEY `idAtleta_UNIQUE` (`idAtleta`),
  UNIQUE KEY `idDisciplina_UNIQUE` (`idDisciplina`),
  CONSTRAINT `idAtletaFK` FOREIGN KEY (`idAtleta`) REFERENCES `atleta` (`idAtleta`),
  CONSTRAINT `idDisciplinaFK` FOREIGN KEY (`idDisciplina`) REFERENCES `disciplina` (`idDisciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-01 11:44:45
