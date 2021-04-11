-- MySQL dump 10.16  Distrib 10.1.47-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	10.1.47-MariaDB-0ubuntu0.18.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'deporte'),(2,'drama'),(4,'fantasia'),(3,'horror');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inputs`
--

DROP TABLE IF EXISTS `inputs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inputs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `user` char(15) DEFAULT NULL,
  `title` char(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  KEY `user` (`user`),
  CONSTRAINT `inputs_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `inputs_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`user`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inputs`
--

LOCK TABLES `inputs` WRITE;
/*!40000 ALTER TABLE `inputs` DISABLE KEYS */;
INSERT INTO `inputs` VALUES (1,1,'chusofcb','De Jong remonta su extraño duelo de con Fede Valve','En enero de 2019, Fede Valverde era el jugador fetiche del Real Madrid. Había sido el mejor jugador de la final de la Supercopa y estaban en un momento álgido. Es entonces cuando las comparaciones con Frenkie de Jong afloraban. Se solía comparar los 5M de euros que había desembolsado el Real Madrid por lo 80M que invirtió el Barça en un jugador que estaba rindiendo menos.','2021-04-07'),(2,2,'norisprosperi','The Vampire Diaries','La trama gira en torno a la vida de Elena, sus amigos y otros habitantes de una pequeña ciudad de Virginia, llamada Mystic Falls. Elena Gilbert (Nina Dobrev), es una adolescente joven de la cual se enamoran dos hermanos vampiros, Stefan Salvatore (Paul Wesley), y su hermano Damon Salvatore (Ian Somerhalder). Elena es idéntica a Katherine, la mujer que los convirtió en vampiros y que jugó con el amor que ambos sentían por ella.\n\nThe Vampire Diaries fue estrenada en el canal The CW el 10 de septiembre del año 2009 con su primera temporada,1​ y el último episodio fue emitido el 10 de marzo de 2017 dándole fin a la octava y última temporada.','2021-04-07'),(3,3,'chusofcb','el conjuro','es una serie de películas de terror, distribuidas por la división New Line Cinema de Warner Bros. Pictures. Las películas presentan una toma de ficción sobre los casos de la vida real de Ed y Lorraine Warren, investigadores paranormales y autores asociados con casos importantes pero controvertidos. La saga principal del universo, The Conjuring, sigue sus intentos de ayudar a las personas que se encuentran poseídas por espíritus demoníacos, mientras que el resto de películas son spin-off que se centran en los orígenes de algunas de las entidades que los Warren han encontrado.','2021-04-07');
/*!40000 ALTER TABLE `inputs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `name` char(20) NOT NULL,
  `user` char(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `question` int(11) NOT NULL,
  `answer` char(15) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('jesus arias','chusofcb','32252792b9dccf239f5a5bd8e778dbc2',2,'verdoso',0),('eudorina prosperi','delvalleprosper','32252792b9dccf239f5a5bd8e778dbc2',3,'rojo',0),('noris prosperi','norisprosperi','32252792b9dccf239f5a5bd8e778dbc2',1,'lourdes',0),('rubenes prosperi','ruprosperi','32252792b9dccf239f5a5bd8e778dbc2',1,'noris',1),('thiago arias','thiago2020','32252792b9dccf239f5a5bd8e778dbc2',1,'genesis',1),('valle prosperi','valle2020','32252792b9dccf239f5a5bd8e778dbc2',1,'lourdes',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-10 20:09:05