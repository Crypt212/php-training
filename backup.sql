/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.13-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: docker-php
-- ------------------------------------------------------
-- Server version	10.11.13-MariaDB-ubu2204

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(161,'Ahmed Amr',32),
(162,'Ahmed Mohammed',13),
(163,'Hatim Amr',7),
(164,'Hatim Ahmed',36),
(165,'Ahmed Ahmed',39),
(166,'Hatim Hatim',30),
(167,'Hatim Amr',22),
(168,'Amr Hatim',13),
(169,'Hatim Hatim',12),
(170,'Khalid Amr',30),
(171,'Hatim Amr',30),
(172,'Amr Ahmed',28),
(173,'Ahmed Khalid',27),
(174,'Ahmed Mohammed',14),
(175,'Amr Hatim',23),
(176,'Ahmed Amr',27),
(177,'Khalid Ahmed',19),
(178,'Khalid Hatim',24),
(179,'Hatim Khalid',34),
(180,'Khalid Mohammed',11),
(181,'Khalid Mohammed',7),
(182,'Ahmed Ahmed',16),
(183,'Hatim Amr',25),
(184,'Khalid Hatim',16),
(185,'Mohammed Mohammed',15),
(186,'Khalid Hatim',7),
(187,'Khalid Mohammed',21),
(188,'Mohammed Mohammed',29),
(189,'Hatim Amr',33),
(190,'Hatim Hatim',35),
(191,'Khalid Hatim',17),
(192,'Amr Hatim',10),
(193,'Khalid Khalid',20),
(194,'Mohammed Khalid',38),
(195,'Mohammed Hatim',35),
(196,'Khalid Mohammed',14),
(197,'Hatim Amr',30),
(198,'Khalid Amr',31),
(199,'Mohammed Khalid',36),
(200,'Ahmed Hatim',19),
(201,'Mohammed Mohammed',20),
(202,'Mohammed Ahmed',31),
(203,'Ahmed Hatim',25),
(204,'Khalid Amr',25),
(205,'Hatim Khalid',32),
(206,'Mohammed Khalid',24),
(207,'Khalid Ahmed',7),
(208,'Hatim Mohammed',16),
(209,'Ahmed Ahmed',10),
(210,'Hatim Amr',33),
(211,'Mohammed Amr',24),
(212,'Mohammed Khalid',40),
(213,'Amr Khalid',25),
(214,'Amr Ahmed',19),
(215,'Mohammed Amr',22),
(216,'Hatim Ahmed',36),
(217,'Ahmed Hatim',26),
(218,'Hatim Amr',14),
(219,'Ahmed Mohammed',23),
(220,'Hatim Hatim',11),
(221,'Ahmed Amr',36),
(222,'Ahmed Ahmed',17),
(223,'Amr Mohammed',9),
(224,'Ahmed Khalid',23),
(225,'Ahmed Khalid',26),
(226,'Khalid Khalid',22),
(227,'Mohammed Khalid',25),
(228,'Ahmed Mohammed',33),
(229,'Hatim Mohammed',33),
(230,'Khalid Mohammed',20),
(231,'Hatim Khalid',9),
(232,'Mohammed Khalid',21),
(233,'Mohammed Ahmed',39),
(234,'Hatim Ahmed',28),
(235,'Khalid Ahmed',15),
(236,'Khalid Amr',34),
(237,'Ahmed Mohammed',13),
(238,'Khalid Hatim',14),
(239,'Khalid Khalid',34),
(240,'Amr Amr',36),
(241,'Hatim Mohammed',20),
(242,'Hatim Hatim',7),
(243,'Amr Khalid',28),
(244,'Amr Khalid',27),
(245,'Mohammed Hatim',14),
(246,'Ahmed Mohammed',18),
(247,'Amr Amr',39),
(248,'Ahmed Hatim',18),
(249,'Amr Amr',16),
(250,'Hatim Khalid',9),
(251,'Hatim Hatim',16),
(252,'Hatim Amr',32),
(253,'Amr Mohammed',25),
(254,'Ahmed Ahmed',7),
(255,'Khalid Mohammed',40),
(256,'Amr Ahmed',32),
(257,'Mohammed Ahmed',33);
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

-- Dump completed on 2025-07-07  6:39:35
