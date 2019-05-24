-- MySQL dump 10.13  Distrib 5.5.23, for Win32 (x86)
--
-- Host: localhost    Database: igr
-- ------------------------------------------------------
-- Server version	5.5.23

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
-- Table structure for table `forgot`
--

DROP TABLE IF EXISTS `forgot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forgot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hash` varchar(32) NOT NULL,
  `expire` int(10) unsigned NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forgot`
--

LOCK TABLES `forgot` WRITE;
/*!40000 ALTER TABLE `forgot` DISABLE KEYS */;
/*!40000 ALTER TABLE `forgot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itogzad`
--

DROP TABLE IF EXISTS `itogzad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itogzad` (
  `naim` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itogzad`
--

LOCK TABLES `itogzad` WRITE;
/*!40000 ALTER TABLE `itogzad` DISABLE KEYS */;
INSERT INTO `itogzad` VALUES ('Шла Саша по шоссе',1,'da'),('Такая-сякая сбежала из дворца ',2,'da'),('Кто-то счастье ждет, кто-то в сказку верит',4,'da'),('У старинушки три сына: старший — умный был детина, средний сын и так и сяк, младший — вовсе был дурак',5,'da'),('Два на два будет пять?”',6,'da'),('Ну-с, так вот что!',7,'da');
/*!40000 ALTER TABLE `itogzad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `koligr`
--

DROP TABLE IF EXISTS `koligr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `koligr` (
  `pol` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `koligr`
--

LOCK TABLES `koligr` WRITE;
/*!40000 ALTER TABLE `koligr` DISABLE KEYS */;
INSERT INTO `koligr` VALUES ('titow',1,318),('alex',2,9),('gamer1',3,2);
/*!40000 ALTER TABLE `koligr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1524224397),('m140209_132017_init',1549358753),('m140403_174025_create_account_table',1549358754),('m140504_113157_update_tables',1549358755),('m140504_130429_create_token_table',1549358756),('m140622_111540_create_image_table',1524224402),('m140622_111545_add_name_to_image_table',1524224403),('m140830_171933_fix_ip_field',1549358756),('m140830_172703_change_account_table_name',1549358756),('m141222_110026_update_ip_field',1549358756),('m141222_135246_alter_username_length',1549358756),('m150614_103145_update_social_account_table',1549358757),('m150623_212711_fix_username_notnull',1549358757),('m151218_234654_add_timezone_to_profile',1549358757),('m160929_103127_add_last_login_at_to_user_table',1549358758),('m190125_140113_create_user_table',1548425136);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raspis`
--

DROP TABLE IF EXISTS `raspis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `raspis` (
  `email` char(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raspis`
--

LOCK TABLES `raspis` WRITE;
/*!40000 ALTER TABLE `raspis` DISABLE KEYS */;
INSERT INTO `raspis` VALUES ('spirin.costia@yandex.ru');
/*!40000 ALTER TABLE `raspis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rez`
--

DROP TABLE IF EXISTS `rez`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rez` (
  `polzow` varchar(255) DEFAULT NULL,
  `igr` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pog` int(11) DEFAULT NULL,
  `rez` varchar(255) DEFAULT NULL,
  `zad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rez`
--

LOCK TABLES `rez` WRITE;
/*!40000 ALTER TABLE `rez` DISABLE KEYS */;
INSERT INTO `rez` VALUES ('titow',NULL,6,NULL,NULL,NULL),('titow',NULL,7,NULL,'proigr',NULL),('titow',NULL,8,NULL,'pob',2),('titow',244,9,NULL,'proigr',1),('titow',246,10,NULL,'proigr',1),('titow',261,11,NULL,'pob',1),('titow',263,12,NULL,'pob',1),('titow',266,13,NULL,'proigr',1),('titow',266,14,NULL,'proigr',1),('titow',266,15,NULL,'pob',2),('titow',266,16,NULL,'pob',1),('titow',266,17,NULL,'pob',1),('titow',266,18,NULL,'proigr',1),('titow',266,19,NULL,'proigr',2),('titow',266,20,NULL,'proigr',2),('titow',266,21,NULL,'proigr',6),('titow',266,22,NULL,'proigr',6),('titow',266,23,NULL,'proigr',6),('titow',266,24,NULL,'proigr',2),('titow',266,25,NULL,'proigr',2),('titow',266,26,NULL,'proigr',2),('titow',266,27,NULL,'proigr',2),('titow',266,28,NULL,'proigr',2),('titow',266,29,NULL,'pob',1),('titow',266,30,NULL,'proigr',1),('titow',266,31,NULL,'proigr',1),('titow',266,32,NULL,'pob',1),('titow',266,33,NULL,'pob',1),('titow',266,34,NULL,'pob',2),('titow',266,35,NULL,'proigr',2),('titow',266,36,NULL,'proigr',1),('titow',266,37,NULL,'pob',1),('titow',266,38,NULL,'pob',1),('titow',285,39,NULL,'proigr',1),('alex',3,40,NULL,'proigr',1),('alex',5,41,NULL,'proigr',1),('titow',287,42,NULL,'proigr',1),('titow',287,43,NULL,'proigr',1),('titow',287,44,NULL,'proigr',1),('titow',287,45,NULL,'proigr',1),('titow',287,46,NULL,'proigr',1),('titow',290,47,NULL,'proigr',1),('titow',292,48,NULL,'proigr',1),('titow',294,49,NULL,'proigr',1),('titow',304,50,NULL,'proigr',1),('titow',306,51,NULL,'proigr',1),('titow',309,52,NULL,'proigr',1),('titow',309,53,NULL,'proigr',1),('titow',310,54,NULL,'proigr',1),('titow',310,55,NULL,'proigr',1),('titow',310,56,NULL,'pob',2),('alex',8,57,NULL,'proigr',1),('alex',8,58,NULL,'proigr',1),('alex',8,59,NULL,'proigr',1),('alex',8,60,NULL,'pob',1),('titow',311,61,NULL,'proigr',1),('titow',311,62,NULL,'proigr',1),('alex',9,63,NULL,'pob',1),('titow',312,64,NULL,'proigr',1),('titow',312,65,NULL,'pob',1),('titow',317,66,NULL,'pob',1),('titow',317,67,NULL,'proigr',2),('titow',317,68,NULL,'proigr',4),('titow',317,69,NULL,'proigr',4),('titow',317,70,NULL,'proigr',1),('titow',317,71,NULL,'proigr',1),('titow',317,72,NULL,'proigr',1),('titow',318,73,NULL,'proigr',1),('titow',318,74,NULL,'pob',1),('titow',318,75,NULL,'pob',2),('titow',318,76,NULL,'proigr',4),('titow',318,77,NULL,'proigr',6),('titow',318,78,NULL,'proigr',6);
/*!40000 ALTER TABLE `rez` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_account`
--

DROP TABLE IF EXISTS `social_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  UNIQUE KEY `account_unique_code` (`code`),
  KEY `fk_user_account` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_account`
--

LOCK TABLES `social_account` WRITE;
/*!40000 ALTER TABLE `social_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `naim` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numz` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `token`
--

DROP TABLE IF EXISTS `token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `token`
--

LOCK TABLES `token` WRITE;
/*!40000 ALTER TABLE `token` DISABLE KEYS */;
/*!40000 ALTER TABLE `token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL,
  `tip` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`),
  UNIQUE KEY `user_unique_email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','konstanti.spirin@mail.ru','$2y$13$D1gcUUam3BQFTZmz.m/9Du7QfzkIFoOY7lLgT215PACa4si/IINbW','-r19Ld-B3tVFx3bkJHcHlJIN76n12GVh',1549972144,NULL,NULL,'86.57.181.195',1549972113,1549972113,0,1558699350,'admin'),(2,'gamer1','titov@mail.ru','$2y$13$cExRVDBD16Bpp6TUs9g3hOlY0Mn9TgDq.76JFkx9lxRIV6yem3aqe','24242',NULL,NULL,NULL,NULL,313425523,313425523,0,1558698961,NULL),(3,'gamer2','petrw@mail.ru','$2y$13$cExRVDBD16Bpp6TUs9g3hOlY0Mn9TgDq.76JFkx9lxRIV6yem3aqe','345678',NULL,NULL,NULL,NULL,313425524,313425524,0,1556782346,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `whod`
--

DROP TABLE IF EXISTS `whod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `whod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `whod` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `whod`
--

LOCK TABLES `whod` WRITE;
/*!40000 ALTER TABLE `whod` DISABLE KEYS */;
/*!40000 ALTER TABLE `whod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zikl`
--

DROP TABLE IF EXISTS `zikl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zikl` (
  `num` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zikl`
--

LOCK TABLES `zikl` WRITE;
/*!40000 ALTER TABLE `zikl` DISABLE KEYS */;
/*!40000 ALTER TABLE `zikl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-24 15:14:36
