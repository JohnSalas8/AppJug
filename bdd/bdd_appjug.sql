CREATE DATABASE  IF NOT EXISTS `app jug` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `app jug`;
-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: app jug
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `compra_dlc`
--

DROP TABLE IF EXISTS `compra_dlc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra_dlc` (
  `id_DLC` int(10) unsigned NOT NULL DEFAULT '0',
  `id_Factura` int(10) unsigned NOT NULL DEFAULT '0',
  `habilitado` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_DLC`,`id_Factura`),
  KEY `FK_Compra_DLC_id_Factura` (`id_Factura`),
  CONSTRAINT `FK_Compra_DLC_id_DLC` FOREIGN KEY (`id_DLC`) REFERENCES `dlc` (`id_DLC`),
  CONSTRAINT `FK_Compra_DLC_id_Factura` FOREIGN KEY (`id_Factura`) REFERENCES `factura` (`id_Factura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra_dlc`
--

LOCK TABLES `compra_dlc` WRITE;
/*!40000 ALTER TABLE `compra_dlc` DISABLE KEYS */;
INSERT INTO `compra_dlc` VALUES (2,5,1),(2,7,1),(3,2,1),(3,4,1);
/*!40000 ALTER TABLE `compra_dlc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra_juego`
--

DROP TABLE IF EXISTS `compra_juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra_juego` (
  `id_Juego` int(10) unsigned NOT NULL DEFAULT '0',
  `id_Factura` int(10) unsigned NOT NULL DEFAULT '0',
  `habilitado` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Juego`,`id_Factura`),
  KEY `FK_Compra_Juego_id_Factura` (`id_Factura`),
  CONSTRAINT `FK_Compra_Juego_id_Factura` FOREIGN KEY (`id_Factura`) REFERENCES `factura` (`id_Factura`),
  CONSTRAINT `FK_Compra_Juego_id_Juego` FOREIGN KEY (`id_Juego`) REFERENCES `juego` (`id_Juego`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra_juego`
--

LOCK TABLES `compra_juego` WRITE;
/*!40000 ALTER TABLE `compra_juego` DISABLE KEYS */;
INSERT INTO `compra_juego` VALUES (2,1,1),(2,3,1),(2,8,1);
/*!40000 ALTER TABLE `compra_juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dlc`
--

DROP TABLE IF EXISTS `dlc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dlc` (
  `id_DLC` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `descripcion` varchar(999) NOT NULL DEFAULT '',
  `precio` float unsigned NOT NULL DEFAULT '0',
  `id_Juego` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_DLC`),
  KEY `FK_DLC_id_Juego` (`id_Juego`),
  CONSTRAINT `FK_DLC_id_Juego` FOREIGN KEY (`id_Juego`) REFERENCES `juego` (`id_Juego`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dlc`
--

LOCK TABLES `dlc` WRITE;
/*!40000 ALTER TABLE `dlc` DISABLE KEYS */;
INSERT INTO `dlc` VALUES (1,'Tarjetas Pokemon','Skins',37.99,1),(2,'Tarjetas Goku','Skins',42.99,1),(3,'Tarjetas Navideñas','Skins',17.99,2);
/*!40000 ALTER TABLE `dlc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estadisticas`
--

DROP TABLE IF EXISTS `estadisticas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estadisticas` (
  `id_Perfil` int(10) unsigned NOT NULL DEFAULT '0',
  `id_Juego` int(10) unsigned NOT NULL DEFAULT '0',
  `intentos` int(10) unsigned NOT NULL DEFAULT '0',
  `date_inicio` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_final` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nivel` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Perfil`,`id_Juego`,`date_inicio`),
  KEY `FK_Estadisticas_id_Juego` (`id_Juego`),
  CONSTRAINT `FK_Estadisticas_id_Juego` FOREIGN KEY (`id_Juego`) REFERENCES `juego` (`id_Juego`),
  CONSTRAINT `FK_Estadisticas_id_Perfil` FOREIGN KEY (`id_Perfil`) REFERENCES `perfil` (`id_Perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadisticas`
--

LOCK TABLES `estadisticas` WRITE;
/*!40000 ALTER TABLE `estadisticas` DISABLE KEYS */;
INSERT INTO `estadisticas` VALUES (1,1,145,'2017-11-26 20:54:52','2017-11-26 20:55:02',1),(1,1,145,'2017-11-26 20:59:01','2017-11-26 20:59:10',1),(1,1,140,'2017-11-26 20:59:13','2017-11-26 20:59:22',1),(1,1,135,'2017-11-26 20:59:26','2017-11-26 20:59:33',1),(1,1,135,'2017-11-26 20:59:37','2017-11-26 20:59:46',1),(1,1,140,'2017-11-26 21:15:45','2017-11-26 21:16:10',2),(1,1,180,'2017-11-26 21:16:14','2017-11-26 21:16:25',2),(1,1,125,'2017-11-26 21:16:32','2017-11-26 21:16:57',2),(1,1,165,'2017-11-26 21:18:22','2017-11-26 21:18:37',2),(1,1,125,'2017-11-26 21:18:46','2017-11-26 21:19:03',2),(1,1,190,'2017-11-26 21:19:57','2017-11-26 21:20:30',3),(1,1,130,'2017-11-26 21:20:37','2017-11-26 21:21:36',3),(1,1,140,'2017-11-26 21:25:18','2017-11-26 21:26:17',3),(1,1,110,'2017-11-26 21:27:15','2017-11-26 21:27:24',3),(1,1,80,'2017-11-26 21:28:04','2017-11-26 21:28:12',3),(1,1,100,'2017-11-29 00:40:29','2017-11-29 00:40:37',1),(1,1,100,'2017-11-29 00:48:23','2017-11-29 00:48:36',1),(1,1,100,'2017-11-29 00:50:51','2017-11-29 00:50:53',2),(1,1,100,'2017-11-29 00:50:57','2017-11-29 00:51:02',3),(1,1,100,'2017-11-29 01:42:19','2017-11-29 01:42:28',2),(1,1,100,'2017-11-29 04:17:30','2017-11-29 04:17:37',1),(1,1,100,'2017-11-29 04:17:44','2017-11-29 04:17:47',1),(1,1,100,'2017-11-29 04:19:03','2017-11-29 04:19:05',1),(1,1,100,'2017-11-29 04:19:10','2017-11-29 04:19:11',1),(1,1,80,'2017-11-29 04:19:16','2017-11-29 04:19:33',1),(1,1,100,'2017-11-29 04:21:39','2017-11-29 04:21:44',1),(1,1,160,'2017-12-04 09:08:03','2017-12-04 09:08:34',1),(1,1,100,'2017-12-04 09:09:15','2017-12-04 09:09:30',2),(1,1,0,'2017-12-11 09:38:28','2017-12-11 09:40:33',1),(1,1,125,'2017-12-11 09:40:52','2017-12-11 09:44:17',2),(1,2,5,'2017-11-25 23:09:34','2017-11-25 23:10:54',1),(1,2,1,'2017-11-25 23:10:50','2017-11-25 23:10:56',1),(1,2,5,'2017-11-25 23:11:00','2017-11-25 23:15:59',1),(1,2,1,'2017-11-25 23:11:28','2017-11-25 23:11:32',1),(1,2,5,'2017-11-25 23:12:06','2017-11-25 23:16:00',1),(1,2,5,'2017-11-25 23:12:32','2017-11-25 23:18:29',2),(1,2,5,'2017-11-25 23:12:44','2017-11-25 23:13:41',2),(1,2,4,'2017-11-25 23:13:44','2017-11-25 23:14:41',2),(1,2,3,'2017-11-25 23:15:44','2017-11-25 23:16:44',2),(1,2,4,'2017-11-25 23:25:44','2017-11-25 23:30:41',2),(1,2,5,'2017-11-25 23:30:32','2017-11-25 23:31:29',3),(1,2,5,'2017-11-25 23:33:44','2017-11-25 23:34:41',3),(1,2,4,'2017-11-25 23:36:44','2017-11-25 23:37:41',3),(1,2,3,'2017-11-25 23:41:44','2017-11-25 23:42:44',3),(1,2,4,'2017-11-25 23:45:44','2017-11-25 23:46:41',3),(1,2,5,'2017-11-29 03:06:44','2017-11-29 03:13:45',1),(1,2,5,'2017-12-04 09:09:40','2017-12-04 09:09:30',1),(1,2,1,'2017-12-11 09:45:09','2017-12-11 09:45:19',1),(2,1,105,'2017-11-26 21:29:44','2017-11-26 21:29:49',1),(2,1,95,'2017-11-26 21:29:52','2017-11-26 21:29:54',1),(2,1,120,'2017-11-26 21:29:56','2017-11-26 21:29:59',1),(2,1,115,'2017-11-26 21:30:01','2017-11-26 21:30:11',1),(2,1,140,'2017-11-26 21:30:55','2017-11-26 21:31:02',1),(2,1,135,'2017-11-26 21:31:08','2017-11-26 22:34:40',2),(2,1,125,'2017-11-26 22:38:14','2017-11-26 22:38:39',2),(2,1,135,'2017-11-26 22:38:41','2017-11-26 22:38:47',2),(2,1,145,'2017-11-26 22:38:50','2017-11-26 22:38:59',2),(2,1,135,'2017-11-26 22:39:01','2017-11-26 22:39:06',2),(2,1,70,'2017-11-26 22:39:08','2017-11-26 22:39:15',3),(2,1,115,'2017-11-26 22:39:18','2017-11-26 22:39:31',3),(2,1,135,'2017-11-26 22:39:36','2017-11-26 22:39:51',3),(2,1,130,'2017-11-26 22:39:54','2017-11-26 22:40:51',3),(2,1,170,'2017-11-26 22:41:09','2017-11-26 22:41:43',3),(2,1,100,'2017-11-29 04:07:23','2017-11-29 04:07:27',1),(2,1,100,'2017-11-29 04:25:01','2017-11-29 04:25:09',1),(2,1,155,'2017-12-04 00:04:01','2017-12-04 00:04:15',1),(2,2,5,'2017-11-25 20:09:34','2017-11-25 20:10:54',1),(2,2,5,'2017-11-25 20:10:50','2017-11-25 20:10:56',1),(2,2,4,'2017-11-25 20:11:00','2017-11-25 20:15:59',1),(2,2,3,'2017-11-25 20:11:28','2017-11-25 20:11:32',1),(2,2,5,'2017-11-25 20:12:06','2017-11-25 20:18:00',1),(2,2,5,'2017-11-25 20:12:32','2017-11-25 20:14:29',2),(2,2,5,'2017-11-25 20:12:44','2017-11-25 20:20:41',2),(2,2,3,'2017-11-25 20:13:44','2017-11-25 20:14:41',2),(2,2,4,'2017-11-25 20:15:44','2017-11-25 20:16:44',2),(2,2,3,'2017-11-25 20:25:44','2017-11-25 20:26:41',2),(2,2,5,'2017-11-25 20:30:32','2017-11-25 20:31:29',3),(2,2,4,'2017-11-25 20:33:44','2017-11-25 20:34:41',3),(2,2,4,'2017-11-25 20:36:44','2017-11-25 20:37:41',3),(2,2,3,'2017-11-25 20:41:44','2017-11-25 20:42:44',3),(2,2,5,'2017-11-25 20:45:44','2017-11-25 20:46:41',3),(3,1,100,'2017-11-26 22:43:12','2017-11-26 22:43:15',1),(3,1,115,'2017-11-26 22:43:17','2017-11-26 22:43:21',1),(3,1,135,'2017-11-26 22:43:24','2017-11-26 22:43:32',1),(3,1,160,'2017-11-26 22:43:37','2017-11-26 22:43:40',1),(3,1,145,'2017-11-26 22:43:44','2017-11-26 22:43:50',1),(3,1,100,'2017-11-26 22:43:55','2017-11-26 22:43:57',2),(3,1,130,'2017-11-26 22:43:59','2017-11-26 22:44:13',2),(3,1,125,'2017-11-26 22:44:16','2017-11-26 22:44:32',2),(3,1,135,'2017-11-26 22:44:35','2017-11-26 22:44:52',2),(3,1,185,'2017-11-26 22:45:07','2017-11-26 22:45:15',2),(3,1,80,'2017-11-26 22:45:20','2017-11-26 22:45:27',3),(3,1,115,'2017-11-26 22:45:29','2017-11-26 22:45:39',3),(3,1,125,'2017-11-26 22:45:41','2017-11-26 22:46:03',3),(3,1,150,'2017-11-26 22:46:06','2017-11-26 22:46:48',3),(3,1,165,'2017-11-26 22:47:13','2017-11-26 22:47:39',3),(3,1,100,'2017-11-29 01:37:22','2017-11-29 01:38:00',1),(3,1,100,'2017-11-29 01:48:12','2017-11-29 01:48:53',3),(3,1,100,'2017-11-29 01:48:56','2017-11-29 01:51:03',2),(3,1,100,'2017-11-29 04:22:25','2017-11-29 04:22:27',1),(3,1,100,'2017-11-29 04:22:34','2017-11-29 04:22:35',1),(3,1,100,'2017-11-29 04:23:22','2017-11-29 04:23:25',1),(3,2,5,'2017-11-25 19:09:34','2017-11-25 19:11:54',1),(3,2,4,'2017-11-25 19:10:50','2017-11-25 19:10:56',1),(3,2,4,'2017-11-25 19:11:00','2017-11-25 19:15:59',1),(3,2,5,'2017-11-25 19:11:28','2017-11-25 19:11:32',1),(3,2,4,'2017-11-25 19:12:06','2017-11-25 19:15:00',1),(3,2,5,'2017-11-25 19:12:32','2017-11-25 19:15:29',2),(3,2,4,'2017-11-25 19:12:44','2017-11-25 19:15:41',2),(3,2,4,'2017-11-25 19:13:44','2017-11-25 19:15:41',2),(3,2,5,'2017-11-25 19:15:44','2017-11-25 19:16:44',2),(3,2,3,'2017-11-25 19:25:44','2017-11-25 19:26:41',2),(3,2,5,'2017-11-25 19:30:32','2017-11-25 19:31:29',3),(3,2,5,'2017-11-25 19:33:44','2017-11-25 19:34:41',3),(3,2,5,'2017-11-25 19:36:44','2017-11-25 19:37:41',3),(3,2,4,'2017-11-25 19:41:44','2017-11-25 19:42:44',3),(3,2,4,'2017-11-25 19:45:44','2017-11-25 19:46:41',3),(4,1,95,'2017-11-26 22:56:21','2017-11-26 22:56:24',1),(4,1,130,'2017-11-26 22:56:25','2017-11-26 22:56:31',1),(4,1,100,'2017-11-26 22:56:32','2017-11-26 22:56:34',1),(4,1,130,'2017-11-26 22:56:35','2017-11-26 22:56:45',1),(4,1,100,'2017-11-26 22:57:24','2017-11-26 22:57:25',1),(4,1,130,'2017-11-26 22:58:36','2017-11-26 22:58:50',1),(4,1,95,'2017-11-26 23:03:22','2017-11-26 23:03:24',2),(4,1,115,'2017-11-26 23:04:48','2017-11-26 23:04:58',2),(4,1,130,'2017-11-26 23:05:01','2017-11-26 23:05:07',2),(4,1,95,'2017-11-26 23:05:09','2017-11-26 23:05:24',2),(4,1,110,'2017-11-26 23:05:27','2017-11-26 23:05:46',2),(4,1,85,'2017-11-26 23:06:01','2017-11-26 23:06:08',3),(4,1,140,'2017-11-26 23:06:11','2017-11-26 23:06:37',3),(4,1,100,'2017-11-26 23:06:39','2017-11-26 23:06:41',3),(4,1,170,'2017-11-26 23:06:42','2017-11-26 23:07:17',3),(4,1,180,'2017-11-26 23:07:48','2017-11-26 23:08:16',3),(4,1,145,'2017-11-26 23:08:19','2017-11-26 23:08:54',3),(4,1,100,'2017-11-29 04:08:09','2017-11-29 04:08:11',1),(4,2,4,'2017-11-25 17:09:34','2017-11-25 17:15:54',1),(4,2,4,'2017-11-25 17:10:50','2017-11-25 17:10:56',1),(4,2,5,'2017-11-25 17:11:00','2017-11-25 17:13:59',1),(4,2,4,'2017-11-25 17:11:28','2017-11-25 17:11:32',1),(4,2,2,'2017-11-25 17:12:06','2017-11-25 17:15:00',1),(4,2,1,'2017-11-25 17:12:32','2017-11-25 17:16:29',2),(4,2,5,'2017-11-25 17:12:44','2017-11-25 17:14:41',2),(4,2,5,'2017-11-25 17:13:44','2017-11-25 17:14:41',2),(4,2,1,'2017-11-25 17:15:44','2017-11-25 17:16:44',2),(4,2,4,'2017-11-25 17:25:44','2017-11-25 17:26:41',2),(4,2,5,'2017-11-25 17:30:32','2017-11-25 17:31:29',3),(4,2,4,'2017-11-25 17:33:44','2017-11-25 17:34:41',3),(4,2,4,'2017-11-25 17:36:44','2017-11-25 17:37:41',3),(4,2,3,'2017-11-25 17:41:44','2017-11-25 17:42:44',3),(4,2,4,'2017-11-25 17:45:44','2017-11-25 17:46:41',3),(5,1,100,'2017-11-26 22:48:03','2017-11-26 22:48:04',1),(5,1,125,'2017-11-26 22:48:07','2017-11-26 22:48:15',1),(5,1,135,'2017-11-26 22:48:17','2017-11-26 22:48:21',1),(5,1,155,'2017-11-26 22:48:22','2017-11-26 22:48:26',1),(5,1,155,'2017-11-26 22:48:48','2017-11-26 22:48:52',1),(5,1,90,'2017-11-26 22:49:45','2017-11-26 22:49:48',2),(5,1,170,'2017-11-26 22:49:51','2017-11-26 22:50:07',2),(5,1,90,'2017-11-26 22:50:12','2017-11-26 22:50:16',2),(5,1,145,'2017-11-26 22:50:19','2017-11-26 22:50:40',2),(5,1,135,'2017-11-26 22:50:46','2017-11-26 22:51:11',2),(5,1,80,'2017-11-26 22:52:24','2017-11-26 22:52:30',3),(5,1,120,'2017-11-26 22:52:34','2017-11-26 22:52:42',3),(5,1,140,'2017-11-26 22:52:44','2017-11-26 22:53:00',3),(5,1,145,'2017-11-26 22:53:03','2017-11-26 22:53:35',3),(5,1,195,'2017-11-26 22:54:05','2017-11-26 22:54:52',3),(5,1,100,'2017-11-27 06:57:22','2017-11-27 07:15:42',1),(5,1,100,'2017-11-27 09:33:15','2017-11-27 09:33:25',1),(5,1,100,'2017-11-27 09:51:38','2017-11-27 09:51:41',1),(5,1,100,'2017-11-27 09:51:54','2017-11-27 09:52:34',1),(5,1,100,'2017-11-28 23:28:42','2017-11-28 23:31:09',1),(5,2,5,'2017-11-25 12:30:32','2017-11-25 12:31:29',3),(5,2,5,'2017-11-25 16:09:34','2017-11-25 16:10:54',1),(5,2,4,'2017-11-25 16:10:50','2017-11-25 16:10:56',1),(5,2,4,'2017-11-25 16:11:00','2017-11-25 16:12:59',1),(5,2,4,'2017-11-25 16:11:28','2017-11-25 16:11:32',1),(5,2,4,'2017-11-25 16:12:06','2017-11-25 16:13:00',1),(5,2,5,'2017-11-25 16:12:32','2017-11-25 16:13:29',2),(5,2,5,'2017-11-25 16:12:44','2017-11-25 16:13:41',2),(5,2,5,'2017-11-25 16:13:44','2017-11-25 16:14:41',2),(5,2,3,'2017-11-25 16:15:44','2017-11-25 16:16:44',2),(5,2,3,'2017-11-25 16:25:44','2017-11-25 16:26:41',2),(5,2,5,'2017-11-25 16:30:32','2017-11-25 16:31:29',3),(5,2,4,'2017-11-25 16:33:44','2017-11-25 16:34:41',3),(5,2,4,'2017-11-25 16:36:44','2017-11-25 16:37:41',3),(5,2,3,'2017-11-25 16:41:44','2017-11-25 16:42:44',3),(5,2,3,'2017-11-25 16:45:44','2017-11-25 16:46:41',3),(6,1,105,'2017-11-26 13:48:03','2017-11-26 13:48:04',1),(6,1,125,'2017-11-26 13:48:07','2017-11-26 13:48:15',1),(6,1,130,'2017-11-26 13:48:17','2017-11-26 13:48:21',1),(6,1,150,'2017-11-26 13:48:22','2017-11-26 13:48:26',1),(6,1,160,'2017-11-26 13:48:48','2017-11-26 13:48:52',1),(6,1,90,'2017-11-26 13:49:45','2017-11-26 13:49:48',2),(6,1,160,'2017-11-26 13:49:51','2017-11-26 13:50:07',2),(6,1,95,'2017-11-26 13:50:12','2017-11-26 13:50:16',2),(6,1,150,'2017-11-26 13:50:19','2017-11-26 13:50:40',2),(6,1,140,'2017-11-26 13:50:46','2017-11-26 13:51:11',2),(6,1,90,'2017-11-26 13:52:24','2017-11-26 13:52:30',3),(6,1,110,'2017-11-26 13:52:34','2017-11-26 13:52:42',3),(6,1,150,'2017-11-26 13:52:44','2017-11-26 13:53:00',3),(6,1,140,'2017-11-26 13:53:03','2017-11-26 13:53:35',3),(6,1,180,'2017-11-26 13:54:05','2017-11-26 13:54:52',3),(6,2,4,'2017-11-25 12:09:34','2017-11-25 12:10:54',1),(6,2,4,'2017-11-25 12:10:50','2017-11-25 12:10:56',1),(6,2,4,'2017-11-25 12:11:00','2017-11-25 12:12:59',1),(6,2,4,'2017-11-25 12:11:28','2017-11-25 12:11:32',1),(6,2,5,'2017-11-25 12:12:06','2017-11-25 12:13:00',1),(6,2,5,'2017-11-25 12:12:32','2017-11-25 12:14:29',2),(6,2,4,'2017-11-25 12:12:44','2017-11-25 12:14:41',2),(6,2,5,'2017-11-25 12:13:44','2017-11-25 12:15:41',2),(6,2,4,'2017-11-25 12:15:44','2017-11-25 12:16:44',2),(6,2,2,'2017-11-25 12:25:44','2017-11-25 12:26:41',2),(6,2,4,'2017-11-25 12:33:44','2017-11-25 12:34:41',3),(6,2,4,'2017-11-25 12:36:44','2017-11-25 12:37:41',3),(6,2,4,'2017-11-25 12:41:44','2017-11-25 12:42:44',3),(6,2,2,'2017-11-25 12:45:44','2017-11-25 12:46:41',3);
/*!40000 ALTER TABLE `estadisticas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `id_Factura` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_Resp` int(10) unsigned NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_Factura`),
  KEY `FK_Factura_id_Resp` (`id_Resp`),
  CONSTRAINT `FK_Factura_id_Resp` FOREIGN KEY (`id_Resp`) REFERENCES `responsable` (`id_Resp`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
INSERT INTO `factura` VALUES (1,1,'2017-11-12 14:30:14'),(2,1,'2017-11-17 09:13:12'),(3,3,'2017-11-10 17:41:02'),(4,2,'2017-11-18 09:01:01'),(5,3,'2017-11-18 13:06:52'),(7,2,'2018-05-11 05:10:05'),(8,2,'2018-05-11 05:22:52');
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juego`
--

DROP TABLE IF EXISTS `juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juego` (
  `id_Juego` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `descripcion` varchar(999) NOT NULL DEFAULT '',
  `categoria` varchar(45) NOT NULL DEFAULT '',
  `precio` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Juego`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juego`
--

LOCK TABLES `juego` WRITE;
/*!40000 ALTER TABLE `juego` DISABLE KEYS */;
INSERT INTO `juego` VALUES (1,'Cinquilllo','Memorama','Arcade',0),(2,'Manjong','Rompecabezas','Arcade',31.99);
/*!40000 ALTER TABLE `juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opinion`
--

DROP TABLE IF EXISTS `opinion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opinion` (
  `id_Resp` int(10) unsigned NOT NULL DEFAULT '0',
  `id_Juego` int(10) unsigned NOT NULL DEFAULT '0',
  `descrip_Opinion` varchar(999) NOT NULL DEFAULT '',
  `puntuacion` int(10) unsigned NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_Resp`,`id_Juego`,`fecha`),
  KEY `FK_Opinion_id_Juego` (`id_Juego`),
  CONSTRAINT `FK_Opinion_id_Juego` FOREIGN KEY (`id_Juego`) REFERENCES `juego` (`id_Juego`),
  CONSTRAINT `FK_Opinion_id_Resp` FOREIGN KEY (`id_Resp`) REFERENCES `responsable` (`id_Resp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opinion`
--

LOCK TABLES `opinion` WRITE;
/*!40000 ALTER TABLE `opinion` DISABLE KEYS */;
INSERT INTO `opinion` VALUES (1,1,'Hola mundo!!',3,'2017-12-04 08:57:54'),(1,1,'hola',1,'2017-12-11 09:23:03'),(2,1,'Excelente app, la recomiendo',5,'2017-11-23 17:49:50'),(2,2,'Es buen juego. :v',3,'2018-05-11 03:07:08'),(2,2,'Tengo sueÃ±o. :c',5,'2018-05-11 04:37:55'),(3,1,'Mi hijo en realidad ama este juego, y ademas de que he notado mejoras en su habilidad motriz',5,'2017-11-21 14:02:19');
/*!40000 ALTER TABLE `opinion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id_Perfil` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `id_Resp` int(10) unsigned NOT NULL DEFAULT '0',
  `fecha_Nac` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id_Perfil`),
  KEY `FK_Perfil_id_Resp` (`id_Resp`),
  CONSTRAINT `FK_Perfil_id_Resp` FOREIGN KEY (`id_Resp`) REFERENCES `responsable` (`id_Resp`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Juan Carlos',1,'2004-09-06'),(2,'Mariana Estrada',1,'2009-01-21'),(3,'Andrea',1,'2009-07-02'),(4,'Juan Diego',2,'2006-12-14'),(5,'Ximena',3,'2008-02-09'),(6,'Kevin Jesus',3,'2007-11-27');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsable` (
  `id_Resp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `ap_Pat` varchar(45) NOT NULL DEFAULT '',
  `ap_Mat` varchar(45) NOT NULL DEFAULT '',
  `RFC` varchar(13) DEFAULT NULL,
  `ciudad` varchar(45) NOT NULL DEFAULT '',
  `calle` varchar(45) NOT NULL DEFAULT '',
  `CP` int(10) unsigned NOT NULL DEFAULT '0',
  `telefono` bigint(20) unsigned NOT NULL DEFAULT '0',
  `numero` int(10) unsigned NOT NULL DEFAULT '0',
  `correo` varchar(45) NOT NULL DEFAULT '',
  `pass` varchar(45) NOT NULL DEFAULT '',
  `fracc` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_Resp`),
  UNIQUE KEY `telefono` (`telefono`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `RFC` (`RFC`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsable`
--

LOCK TABLES `responsable` WRITE;
/*!40000 ALTER TABLE `responsable` DISABLE KEYS */;
INSERT INTO `responsable` VALUES (1,'Jorge Alejandro','Gonzalez','Frias','GOFJ960115S28','Aguascalientes','San Geronimo',20190,4494264524,318,'jorge.gonzalez@gmail.com','jorge.gonzalez','Ojocaliente I'),(2,'Juan Gustavo','Salas','Garcia','SAGJ961228KK2','Aguascalientes','Ejote',20190,4491634973,911,'juan.salas@gmail.com','salas.garcia','Los Bosques'),(3,'Martin de Jesus','Flores','Ibarra','FOIM960818NE8','Aguascalienrtes','Palo alto',20182,4492094813,69,'martin.flores@gmail.com','martin.flores','Cumbres'),(25,'Jose Gustavo','NuÃ±ez','Salazar','123456789','Aguascalientes','Canario',20298,123456789,3,'itachi94@gmail.com','123','Villasuncion');
/*!40000 ALTER TABLE `responsable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjeta`
--

DROP TABLE IF EXISTS `tarjeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjeta` (
  `num_Tarjeta` bigint(20) unsigned NOT NULL DEFAULT '0',
  `mes` int(10) unsigned NOT NULL DEFAULT '0',
  `clave` int(10) unsigned NOT NULL DEFAULT '0',
  `id_Resp` int(10) unsigned NOT NULL DEFAULT '0',
  `miembro_Desde` year(4) NOT NULL DEFAULT '2000',
  `anio` year(4) NOT NULL DEFAULT '2000',
  PRIMARY KEY (`num_Tarjeta`),
  KEY `FK_Tarjeta_id_Resp` (`id_Resp`),
  CONSTRAINT `FK_Tarjeta_id_Resp` FOREIGN KEY (`id_Resp`) REFERENCES `responsable` (`id_Resp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjeta`
--

LOCK TABLES `tarjeta` WRITE;
/*!40000 ALTER TABLE `tarjeta` DISABLE KEYS */;
INSERT INTO `tarjeta` VALUES (123456789,6,123,25,2016,2018),(347023821602020,9,963,2,2015,2018),(372078241061288,7,323,1,2016,2019),(379088774586638,4,179,3,2015,2018);
/*!40000 ALTER TABLE `tarjeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_dlc`
--

DROP TABLE IF EXISTS `view_dlc`;
/*!50001 DROP VIEW IF EXISTS `view_dlc`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_dlc` AS SELECT 
 1 AS `id_DLC`,
 1 AS `nombre`,
 1 AS `descripcion`,
 1 AS `precio`,
 1 AS `id_Juego`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_juegos`
--

DROP TABLE IF EXISTS `view_juegos`;
/*!50001 DROP VIEW IF EXISTS `view_juegos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_juegos` AS SELECT 
 1 AS `id_Juego`,
 1 AS `nombre`,
 1 AS `descripcion`,
 1 AS `categoria`,
 1 AS `precio`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_perfiles`
--

DROP TABLE IF EXISTS `view_perfiles`;
/*!50001 DROP VIEW IF EXISTS `view_perfiles`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_perfiles` AS SELECT 
 1 AS `id_Perfil`,
 1 AS `id_Resp`,
 1 AS `nombre`,
 1 AS `edad`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'app jug'
--

--
-- Dumping routines for database 'app jug'
--
/*!50003 DROP FUNCTION IF EXISTS `califPromGame` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `califPromGame`(id_juego int) RETURNS int(11)
begin
	return (
		select avg(opinion.puntuacion) 
			from opinion 
            where opinion.id_Juego=id_juego
	);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fn_calculateAge` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_calculateAge`(id_Perfil int) RETURNS int(2)
begin
	declare edad int;

	set edad := (
		select TIMESTAMPDIFF(year, fecha_Nac, CURRENT_TIMESTAMP)
        from perfil p
        where p.id_Perfil = id_Perfil
	);

    return (edad);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fn_getMediaAttempts` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_getMediaAttempts`(id_Perfil int, id_Juego int) RETURNS decimal(6,2)
begin
	declare suma double;
    declare n double;

	set suma := (
		select sum(intentos)
        from estadisticas e
        where e.id_Perfil = id_Perfil and e.id_Juego = id_Juego
	);

	set n := (
		select fn_getNTuples(id_Perfil, id_Juego)
    );

    return (suma / n);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fn_getMediaMinutes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_getMediaMinutes`(id_Perfil int, id_Juego int) RETURNS decimal(6,2)
begin
	declare differenceSeconds double;
    declare n double;

	set differenceSeconds := (
        select sum(TIMESTAMPDIFF(second, date_inicio, date_final))
        from estadisticas e
        where e.id_Perfil = id_Perfil and e.id_Juego = id_Juego
	);
    
    set n := (
		select fn_getNTuples(id_Perfil, id_Juego)
    );

    return ((differenceSeconds / 60) / n);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fn_getNTuples` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_getNTuples`(id_Perfil int, id_Juego int) RETURNS int(4)
BEGIN

RETURN (select count(*) from estadisticas e where e.id_Perfil = id_Perfil and e.id_Juego = id_Juego);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fn_getTotalAttempts` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_getTotalAttempts`(id_Perfil int, id_Juego int) RETURNS int(6)
begin
	declare suma int;

	set suma := (
		select sum(intentos)
        from estadisticas e
        where e.id_Perfil = id_Perfil and e.id_Juego = id_Juego
	);

    return (suma);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fn_getTotalMinutes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_getTotalMinutes`(id_Perfil int, id_Juego int) RETURNS decimal(6,2)
begin
	declare differenceSeconds double;

	set differenceSeconds := (
        select sum(TIMESTAMPDIFF(second, date_inicio, date_final))
        
        from estadisticas e
        where e.id_Perfil = id_Perfil and e.id_Juego = id_Juego
	);

    return (differenceSeconds / 60);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fn_martin` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_martin`(id_Resp int) RETURNS int(2)
begin
	declare eu int;


	set eu := (
		select id_DLC
        from compra_dlc join factura on factura.id_Resp=id_Resp and compra_dlc.id_Factura = factura.id_Factura
	);

    return (eu);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fn_validateGames` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_validateGames`(id_Resp int) RETURNS int(2)
begin
	declare acquired int;

	set acquired := (
        select habilitado
        from compra_juego c
        where c.id_Factura in (select id_Factura from factura f where f.id_Resp = id_Resp)
	);

    return (acquired);
    
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `toDateText` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `toDateText`(fecha datetime) RETURNS longtext CHARSET utf8
begin
	declare fechatxt longtext;
    
    case dayname(fecha)
		when 'Monday' then set fechatxt = 'Lunes ';
        when 'Tuesday' then set fechatxt = 'Martes ';
        when 'Wednessday' then set fechatxt = 'Miércoles ';
        when 'Thursday' then set fechatxt = 'Jueves ';
        when 'Friday' then set fechatxt = 'Viernes ';
        when 'Saturday' then set fechatxt = 'Sábado ';
        when 'Sunday' then set fechatxt = 'Domingo ';
    end case;
    set fechatxt = concat(
					fechatxt, 
                    extract(day from fecha), 
                    ' de ');
                    
	case extract(month from fecha)
		when 1 then set fechatxt = concat(fechatxt, 'Enero de ');
        when 2 then set fechatxt = concat(fechatxt, 'Febrero de ');
        when 3 then set fechatxt = concat(fechatxt, 'Marzo de ');
        when 4 then set fechatxt = concat(fechatxt, 'Abril de ');
        when 5 then set fechatxt = concat(fechatxt, 'Mayo de ');
        when 6 then set fechatxt = concat(fechatxt, 'Junio de ');
        when 7 then set fechatxt = concat(fechatxt, 'Julio de ');
        when 8 then set fechatxt = concat(fechatxt, 'Agosto de ');
        when 9 then set fechatxt = concat(fechatxt, 'Septiembre de ');
        when 10 then set fechatxt = concat(fechatxt, 'Octubre de ');
        when 11 then set fechatxt = concat(fechatxt, 'Noviembre de ');
        when 12 then set fechatxt = concat(fechatxt, 'Dicembre de ');
    end case;
    
    set fechatxt = concat(
		fechatxt, 
        extract(year from fecha), ', ', 
        extract(hour from fecha), ':', 
        extract(minute from fecha)
	);
    
    return fechatxt;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `procedure1` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure1`()
begin
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `view_dlc`
--

/*!50001 DROP VIEW IF EXISTS `view_dlc`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_dlc` AS select `dlc`.`id_DLC` AS `id_DLC`,`dlc`.`nombre` AS `nombre`,`dlc`.`descripcion` AS `descripcion`,`dlc`.`precio` AS `precio`,`dlc`.`id_Juego` AS `id_Juego` from `dlc` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_juegos`
--

/*!50001 DROP VIEW IF EXISTS `view_juegos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_juegos` AS select `juego`.`id_Juego` AS `id_Juego`,`juego`.`nombre` AS `nombre`,`juego`.`descripcion` AS `descripcion`,`juego`.`categoria` AS `categoria`,`juego`.`precio` AS `precio` from `juego` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_perfiles`
--

/*!50001 DROP VIEW IF EXISTS `view_perfiles`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_perfiles` AS select `perfil`.`id_Perfil` AS `id_Perfil`,`perfil`.`id_Resp` AS `id_Resp`,`perfil`.`nombre` AS `nombre`,timestampdiff(YEAR,`perfil`.`fecha_Nac`,now()) AS `edad` from `perfil` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-11  5:30:01
