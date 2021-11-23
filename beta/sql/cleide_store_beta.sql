-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: cleide_store_beta
-- ------------------------------------------------------
-- Server version	8.0.26

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

-- Banco de dados filezin

--
-- Table structure for table `aula`
--

DROP TABLE IF EXISTS `aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aula` (
  `id` int NOT NULL AUTO_INCREMENT,
  `estado` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aula`
--

LOCK TABLES `aula` WRITE;
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
INSERT INTO `aula` VALUES (1,'1','1'),(2,'13','4113'),(3,'7','1793'),(4,'5','325');
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidades`
--

DROP TABLE IF EXISTS `cidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cidades` (
  `estados_cod_estados` int DEFAULT NULL,
  `cod_cidades` int DEFAULT NULL,
  `nome` varchar(72) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `endereco_cliente` varchar(200) NOT NULL,
  `data_n_cliente` date NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `cliente_email` (`email_cliente`),
  KEY `cliente_nome` (`nome_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (2,'Alice Fernandes','alice@gmail.com','987654321','973-602 Auctor, Av.','2000-09-21'),(3,'madruga carecao LINDO','mail@mail.com','321987654545','123 asdlkmals','1999-10-01'),(4,'vlaliuinasd LINDI','asdasda','092802938640293','653 Ullamcorper, Street','2021-09-14'),(5,'Chloe Mcdowell','erat.neque@Nullam.ca','1321654987','6445 Ornare Rd.','2021-09-14'),(6,'Curran Chaney','sed.orci@turpisnonenim.edu','1321654987','P.O. Box 472, 1369 Accumsan Rd.','2021-09-14'),(7,'Teegan Mann','blandit.congue.In@mi.net','1321654987','P.O. Box 463, 816 Ultrices St.','2021-09-14'),(8,'Libby Chaney','Cras.dolor.dolor@nec.net','1321654987','P.O. Box 652, 6376 Posuere Street','2021-09-14'),(9,'Zachery Hansen','nisi@Nunc.org','1321654987','5952 Fames Rd.','2021-09-14'),(10,'Tyrone English','porttitor.vulputate.posuere@velvulputateeu.net','1321654987','Ap #526-4578 Nunc Rd.','2021-09-14'),(11,'Saimon alcântara bezerra','email@email.com','1321654987','rua sei la , av. invento depois','2021-09-14'),(12,'Usuario de Teste','user@user.com','258369147','1234 maid','2002-02-02'),(16,'maria vai com as outras2','lalala@lalala.co','321987654545','1234 maid','2016-12-31'),(23,'maria vai com as outras5','lalala@lalala.co12','123123123123','1234 maid','2016-12-31'),(26,'maria vai com as outras5','lalala@lalala.co1233','123123123123','1234 maid','2016-12-31'),(28,'maria vai com as outras32','lalala@lalala.co12334','123123123123','1234 maid','2016-12-31'),(32,'maria vai com as marias','maria@airam','21321654987978','321654654987','2001-01-01'),(33,'Admin','adm@adm.com','00000000','Casa do Adm','2021-01-01');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cupom`
--

DROP TABLE IF EXISTS `cupom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cupom` (
  `id_cupom` int NOT NULL AUTO_INCREMENT,
  `valor_cupom` int NOT NULL,
  `codigo_cupom` varchar(6) NOT NULL,
  `d_limite_cupom` date NOT NULL,
  PRIMARY KEY (`id_cupom`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cupom`
--

LOCK TABLES `cupom` WRITE;
/*!40000 ALTER TABLE `cupom` DISABLE KEYS */;
INSERT INTO `cupom` VALUES (1,5,'FIGMA1','2021-11-10'),(2,5,'TESTE1','2021-09-24');
/*!40000 ALTER TABLE `cupom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estados` (
  `cod_estados` int DEFAULT NULL,
  `sigla` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(72) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'AC','ACRE'),(2,'AL','ALAGOAS'),(3,'AP','AMAPÁ'),(4,'AM','AMAZONAS'),(5,'BA','BAHIA'),(6,'CE','CEARÁ'),(7,'DF','DISTRITO FEDERAL'),(8,'ES','ESPÍRITO SANTO'),(9,'RR','RORAIMA'),(10,'GO','GOIÁS'),(11,'MA','MARANHÃO'),(12,'MT','MATO GROSSO'),(13,'MS','MATO GROSSO DO SUL'),(14,'MG','MINAS GERAIS'),(15,'PA','PARÁ'),(16,'PB','PARAÍBA'),(17,'PR','PARANÁ'),(18,'PE','PERNAMBUCO'),(19,'PI','PIAUÍ'),(20,'RJ','RIO DE JANEIRO'),(21,'RN','RIO GRANDE DO NORTE'),(22,'RS','RIO GRANDE DO SUL'),(23,'RO','RONDÔNIA'),(24,'TO','TOCANTINS'),(25,'SC','SANTA CATARINA'),(26,'SP','SÃO PAULO'),(27,'SE','SERGIPE');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_pedido`
--

DROP TABLE IF EXISTS `item_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `item_pedido` (
  `id_item_pedido` int NOT NULL AUTO_INCREMENT,
  `fk_id_produto` int NOT NULL,
  `fk_id_pedido` int NOT NULL,
  `quantidade_item` int NOT NULL,
  PRIMARY KEY (`id_item_pedido`),
  KEY `fk_id_produto` (`fk_id_produto`),
  KEY `fk_id_pedido` (`fk_id_pedido`),
  CON-STRAINT `chavezinha feliz` FOREIGN KEY (`fk_id_pedido`) REFERENCES `pedido` (`id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_pedido`
--

LOCK TABLES `item_pedido` WRITE;
/*!40000 ALTER TABLE `item_pedido` DISABLE KEYS */;
INSERT INTO `item_pedido` VALUES (1,47,1,2),(2,48,1,1),(3,49,1,2),(4,50,1,2);
/*!40000 ALTER TABLE `item_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `fk_id_cliente` int NOT NULL,
  `fk_id_cupom` int NOT NULL,
  `tipo_entrega` varchar(100) NOT NULL,
  `CEP_pedido` varchar(20) NOT NULL,
  `endereco_pedido` varchar(200) NOT NULL,
  `data_pedido` datetime NOT NULL,
  `status_pedido` int NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_id_cliente` (`fk_id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,2,0,'entrega do ageu','','','2021-09-15 20:49:08',1),(2,4,0,'Correio - Caixa registrada','','','2021-09-01 06:49:08',4);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(150) NOT NULL,
  `desc_produto` varchar(200) NOT NULL,
  `valor_produto` float NOT NULL,
  `tamanho_produto` varchar(10) NOT NULL,
  `cor_produto` int NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `nome_produto` (`nome_produto`),
  KEY `nome_produto_2` (`nome_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (47,'Ageu - While maldito','Lorem ipsum dolor sit amet, Ageu',89.38,'1',1),(48,'Ageu - Sou lindo','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ageu',19.15,'5',1),(49,'Ageu - Kana-chan','Lorem ipsum dolor sit amet, consectetuer adipiscing Ageu',94.35,'5',5),(50,'Ageu - Sr é velho','Lorem ipsum dolor sit amet, Ageu',36.74,'5',6),(51,'Prof - Alegria','Lorem ipsum Prof',25.55,'2',2),(52,'Prof - Piramide','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur Prof',90.01,'3',5),(53,'Marcos - Sou burro','Lorem ipsum dolor sit amet, consectetuer adipiscing Marcos',35.3,'4',5),(54,'Ageu - Sigilo','Lorem ipsum dolor sit amet, consectetuer Ageu',26.56,'2',1),(55,'Prof - Não vou dormir','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur Prof',64.39,'5',5),(56,'Marcos - Desculpa Ageu','Lorem ipsum dolor sit amet, consectetuer Marcos',17.91,'1',5),(57,'Maciel - Minoxidil','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maciel',58.51,'4',4),(58,'Marcos - Bonito','Lorem ipsum dolor sit amet, consectetuer adipiscing Marcos',86.49,'4',6),(59,'Ageu - Vózinha','Lorem ipsum dolor sit amet, consectetuer Ageu',4.46,'2',2),(60,'Prof - É velho','Lorem ipsum dolor sit amet, Prof',78.96,'1',5);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suporte`
--

DROP TABLE IF EXISTS `suporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `suporte` (
  `id_suporte` int NOT NULL AUTO_INCREMENT,
  `fk_id_cliente` int NOT NULL,
  `fk_id_pedido` int DEFAULT NULL,
  `data_suporte` datetime NOT NULL,
  `status_suporte` text NOT NULL,
  `informacoes_suporte` text NOT NULL,
  PRIMARY KEY (`id_suporte`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf32;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suporte`
--

LOCK TABLES `suporte` WRITE;
/*!40000 ALTER TABLE `suporte` DISABLE KEYS */;
INSERT INTO `suporte` VALUES (2,2,NULL,'2021-09-27 20:09:00','Aprovado',''),(46,4,NULL,'2021-05-05 23:08:00','Aprovado','');
/*!40000 ALTER TABLE `suporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `fk_id_cliente` int DEFAULT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `senha_usuario` varchar(255) NOT NULL,
  `nivel_usuario` int NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_id_cliente` (`fk_id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,33,'adm@adm.com','$2y$10$S4UkDCiKS.zQ/d8kYbFYROsLKQJ1ZDCGZZI1szobvqIVvXvMKr1.C',2),(2,12,'user@user.com','$2y$10$RsvNxp1SvUikEM5x296OcO2Z0Lwn2DxGye.VcEh1sbU/veyhHZobO',1),(3,2,'alice@gmail.com','$2y$10$RsvNxp1SvUikEM5x296OcO2Z0Lwn2DxGye.VcEh1sbU/veyhHZobO',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-18 20:57:42
