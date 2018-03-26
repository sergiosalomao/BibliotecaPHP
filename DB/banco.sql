-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: livraria
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `tbcategoria`
--

DROP TABLE IF EXISTS `tbcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcategoria`
--

LOCK TABLES `tbcategoria` WRITE;
/*!40000 ALTER TABLE `tbcategoria` DISABLE KEYS */;
INSERT INTO `tbcategoria` VALUES (1,'Front-End'),(2,'bACK-eND');
/*!40000 ALTER TABLE `tbcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblivro`
--

DROP TABLE IF EXISTS `tblivro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblivro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tbCategoria` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `statusLeitura` varchar(45) DEFAULT NULL COMMENT 'Lido, Lendo ou Não Lido',
  `numPaginas` int(11) DEFAULT NULL,
  `capa` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tbLivro_tbcategoria_idx` (`id_tbCategoria`),
  CONSTRAINT `fk_tbLivro_tbcategoria` FOREIGN KEY (`id_tbCategoria`) REFERENCES `tbcategoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblivro`
--

LOCK TABLES `tblivro` WRITE;
/*!40000 ALTER TABLE `tblivro` DISABLE KEYS */;
INSERT INTO `tblivro` VALUES (11,2,'Crie aplicações com Angular','O novo framework do Google','Baixa',111,'https://cdn.shopify.com/s/files/1/0155/7645/products/Amazon-Aplicacoes-com-Angular_large.jpg?v=1494010530'),(12,2,'Java SE 8 Programmer I','O guia para sua certificação Oracle Certified Associate','NÃO LIDO',123,'https://cdn.shopify.com/s/files/1/0155/7645/products/certificacao-java-featured_large.png?v=1431470873'),(13,2,'Vire o jogo com Spring ','Framework','NÃO LIDO',234,'https://cdn.shopify.com/s/files/1/0155/7645/products/spring-framework-featured_large.png?v=1411567960'),(14,2,'Orientação a Objetos e SOLID para Ninjas','Projetando classes flexíveis','NÃO LIDO',123,'https://cdn.shopify.com/s/files/1/0155/7645/products/oo-solid-sumario-featured_large.png?v=1430310678'),(15,2,'Test-Driven Development','Teste e Design no Mundo Real','NÃO LIDO',123,'https://cdn.shopify.com/s/files/1/0155/7645/products/tdd-featured_large.png?v=1411567779'),(16,2,'SOA aplicado','Integrando com web services e além','NÃO LIDO',34,'https://cdn.shopify.com/s/files/1/0155/7645/products/soa-webservices-featured_large.png?v=1411567532'),(17,2,'Google Android','rie aplicações para celulares e tablets','NÃO LIDO',234,'https://cdn.shopify.com/s/files/1/0155/7645/products/android-featured_large.png?v=1411489561'),(21,1,'Testes automatizados de software','Um guia prático','NÃO LIDO',123,'https://cdn.shopify.com/s/files/1/0155/7645/products/testes-de-software-featured_large.png?v=1429091541');
/*!40000 ALTER TABLE `tblivro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbusuario`
--

LOCK TABLES `tbusuario` WRITE;
/*!40000 ALTER TABLE `tbusuario` DISABLE KEYS */;
INSERT INTO `tbusuario` VALUES (2,'sergio salomao','salomao.leite@hotmail.com','root','root','ATIVO');
/*!40000 ALTER TABLE `tbusuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-26 17:53:22
