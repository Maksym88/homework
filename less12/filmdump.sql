-- MySQL dump 10.17  Distrib 10.3.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: filmss
-- ------------------------------------------------------
-- Server version	10.3.13-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `act`
--

DROP TABLE IF EXISTS `act`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `act` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Name',
  `surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'surname',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `act`
--

LOCK TABLES `act` WRITE;
/*!40000 ALTER TABLE `act` DISABLE KEYS */;
INSERT INTO `act` VALUES (69,'ѓ «м','ѓ ¤®в'),(70,'„¦г«Ёп','ђ®ЎҐавб'),(71,'„н­Ён«','ђн¤Є«Ёд'),(72,'‡®Ё','„®©з'),(73,'Њ вЁ«м¤ ','€­ЈаЁ¤'),(74,'„¦Ґа а¤','Ѓ в«Ґа'),(75,'„гн©­','„¦®­б®­'),(76,'• ўмҐа','Ѓ а¤Ґ¬'),(77,'ѓ «м','ѓ ¤®в'),(78,'„нўЁ¤','ЋгЄб'),(79,'„¦ҐббЁЄ ','Њ Є‹Ґ®¤'),(80,'ЃҐзЄ ','Ђ¤ ¬б'),(81,'Ђ­в®­Ё®','Ѓ ­¤Ґа б'),(82,'ђ © ­','ѓ®б«Ё­Ј'),(83,'ќ­бҐ«','ќ«Ј®ав'),(84,'„¦ҐббЁЄ ','—Ґ©бвҐ­'),(85,'Ђ­в®­Ё®','Ѓ ­¤Ґа б'),(86,'ЃЁ«','‘Є абЈ а¤'),(87,'ЊЁ« ','Љг­Ёб'),(88,'ЉЁ ­г','ђЁў§'),(89,'’®¬','•®«« ­¤'),(90,'— а«Ё','• ­­н¬'),(91,'‘ «м¬ ','ѓ ©ҐЄ');
/*!40000 ALTER TABLE `act` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dir`
--

DROP TABLE IF EXISTS `dir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dir` (
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'name',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sur_name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dir`
--

LOCK TABLES `dir` WRITE;
/*!40000 ALTER TABLE `dir` DISABLE KEYS */;
INSERT INTO `dir` VALUES ('Isaac',1,'Florentine'),('Jay',2,'Holben'),('Jeremy',4,'Lutter'),('Xavier',5,'Jans'),('Patty',6,'jenkins'),('Fernando',7,'Leon'),('Denis',8,'Villeneuve'),('Edgar',9,'Wright'),('Aaron',10,'Sorkin'),('Alain',11,'Derosher'),('Andres',12,'Muschetti'),('John',13,'Lucas'),('Chad',14,'Stahelsky'),('John',15,'Watts'),('Guy',16,'Ritchie'),('David',17,'Litch'),('Zack',18,'Snyder'),('Stephen',19,'Chboxy'),('Greg',20,'McLean'),('Max',21,'Winkler'),('Coralie',22,'Fargea'),('Dean',23,'Devlin'),('Jake',24,'Casdan');
/*!40000 ALTER TABLE `dir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'Horror'),(2,'Drama'),(3,'Fantasy'),(4,'Action movie'),(5,'Thriller'),(6,'Comedy');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mov`
--

DROP TABLE IF EXISTS `mov`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mov` (
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) NOT NULL DEFAULT 2020,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mov`
--

LOCK TABLES `mov` WRITE;
/*!40000 ALTER TABLE `mov` DISABLE KEYS */;
INSERT INTO `mov` VALUES ('„¦г¬ ­¤¦Ё',1,6),('ѓҐ®ив®а¬',2,3),('‚л¦Ёўи п',3,5),('‚§а®б«лҐ €Јал',4,6),('„¦г­Ј«Ё',5,2),('—г¤®',6,0),('‹ЁЈ  ‘Їа ўҐ¤«Ёў®бвЁ',7,3),('‚§алў­ п Ѓ«®­¤Ё­Є ',8,5),('ЊҐз Љ®а®«п Ђавга ',9,2),('—Ґ«®ўҐЄ Џ гЄ',10,4),('„¦®­ “ЁЄ',11,4),('ЋзҐ­м Џ«®еЁҐ Њ ¬ зЄЁ',12,6),('Ћ­®',13,1),('Ћеа ­­ЁЄ',14,5),('Ѓ®«ми п €Ја ',15,2),('Њ «ли ­  „а ©ўҐ',16,4),('ЃҐЈгйЁ© Ї® ‹Ґ§ўЁо 2049',17,3),('ЋЎҐв Њ®«з ­Ёп',18,0),('‘ва ­­лҐ џў«Ґ­Ёп',19,1),('„Ёвп ’м¬л',20,1),('Ђв« ­вЁ¤ ',21,1),('ќбЄ®Ў а',22,3),('—г¤® †Ґ­йЁ­ ',23,2);
/*!40000 ALTER TABLE `mov` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mov_act_dir`
--

DROP TABLE IF EXISTS `mov_act_dir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mov_act_dir` (
  `id_mov` int(11) NOT NULL DEFAULT 0,
  `id_act` int(11) NOT NULL DEFAULT 0,
  `id_dir` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mov_act_dir`
--

LOCK TABLES `mov_act_dir` WRITE;
/*!40000 ALTER TABLE `mov_act_dir` DISABLE KEYS */;
INSERT INTO `mov_act_dir` VALUES (1,75,24),(2,74,23),(3,73,22),(4,72,21),(5,71,20),(6,70,19),(7,69,18),(9,90,16),(10,89,15),(11,88,14),(12,87,13),(13,86,12),(14,85,11),(15,84,10),(16,83,9),(17,82,8),(18,81,1),(19,80,2),(20,79,4),(21,78,5),(22,77,6),(23,76,7);
/*!40000 ALTER TABLE `mov_act_dir` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-28 12:11:47
