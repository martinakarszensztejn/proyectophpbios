CREATE DATABASE  IF NOT EXISTS proyectophpbios ;
USE proyectophpbios;
 
 
DROP TABLE IF EXISTS `atleta`;
 
CREATE TABLE `atleta` (
  `idAtleta` int(11) NOT NULL AUTO_INCREMENT,
  `NombreAtleta` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `FechaNacAtleta` date NOT NULL,
  `OrigenAtleta` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `idDisciplina` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`idAtleta`),
  UNIQUE KEY `idAtleta_UNIQUE` (`idAtleta`),
  KEY `idAtletaIndex` (`idAtleta`),
  KEY `fkDisciplina_idx` (`idDisciplina`),
  CONSTRAINT `fkDisciplina` FOREIGN KEY (`idDisciplina`) REFERENCES `disciplina` (`idDisciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
 
 
INSERT INTO `atleta` VALUES (22,'Angela Fernanda Buela Masullo','2002-05-13','Suecia',24),(23,'Milena Cabanelas','1992-01-01','Alemania',24),(24,'Santiago Illarze Mujica','2002-07-02','Paises Bajos',22),(25,'Juan Marcelo Mereles Vallejos','2001-11-30','Paises Bajos',22),(26,'Melissa Rios','1969-01-01','Paises Bajos',23),(27,'Melina Aymara Taramasco De la Torre','1998-01-18','Suecia',26),(28,'Guillermina Fedorczuk','1972-10-12','Suecia',25),(29,'Nicolas Trombotti','1996-12-24','Alemania',23),(30,'Ana Gabriela Schvartzman','1976-06-11','Suecia',26),(33,'Bruno Acosta','1999-11-19','Alemania',27),(34,'Agustín Martinez','1997-01-07','Alemania',27),(35,'Samira Carneiro','1989-07-07','Paises Bajos',28),(36,'Sofia Curcho','1976-08-05','Suecia',28);
 
 
 
 
DROP TABLE IF EXISTS `disciplina`;
 
 
CREATE TABLE `disciplina` (
  `idDisciplina` INT (11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NombreDisciplina` VARCHAR (50) NOT NULL,
  PRIMARY KEY(`idDisciplina`), 
  UNIQUE(`idDisciplina`,`NombreDisciplina`))
  
ENGINE = InnoDB;
 
 
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