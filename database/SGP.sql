-- MySQL dump 10.13  Distrib 5.5.16, for Win64 (x86)
--
-- Host: localhost    Database: sgp
-- ------------------------------------------------------
-- Server version	5.5.16

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
-- Current Database: `sgp`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `sgp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sgp`;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cliente` (
  `cli_codigo` int(11) NOT NULL,
  `cli_sigla` char(2) DEFAULT NULL,
  `cli_nome` varchar(45) DEFAULT NULL,
  `cli_descricao` varchar(45) DEFAULT NULL,
  `cli_inativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`cli_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_controle_entrega`
--

DROP TABLE IF EXISTS `tb_controle_entrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_controle_entrega` (
  `coe_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_codigo` int(11) NOT NULL,
  `coe_descricao_transportadora` varchar(255) NOT NULL,
  `coe_hora_chegada` datetime NOT NULL,
  `dep_codigo` int(11) NOT NULL,
  `coe_hora_agendada` datetime NOT NULL,
  `coe_nome_motorista` varchar(255) NOT NULL,
  `coe_rg_motorista` varchar(20) NOT NULL,
  `coe_placa` varchar(8) NOT NULL,
  `tve_codigo` int(11) NOT NULL,
  `coe_ajudante` text,
  `doc_codigo` int(11) NOT NULL,
  `coe_observacao` text,
  `coe_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usu_codigo` int(11) NOT NULL,
  `coe_inicio_descarregamento` datetime NOT NULL,
  `coe_fim_descarregamento` datetime NOT NULL,
  PRIMARY KEY (`coe_codigo`),
  KEY `fk_hospital_idx` (`cli_codigo`),
  KEY `fk_departamento_idx` (`dep_codigo`),
  KEY `fk_coe_dep_idx` (`dep_codigo`),
  KEY `fk_tipo_veiculo_idx` (`tve_codigo`),
  KEY `fk_doca_idx` (`doc_codigo`),
  KEY `fk_usuario_idx` (`usu_codigo`),
  CONSTRAINT `fk_cliente_entrega` FOREIGN KEY (`cli_codigo`) REFERENCES `tb_cliente` (`cli_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_coe_dep` FOREIGN KEY (`dep_codigo`) REFERENCES `tb_departamento` (`dep_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_doca` FOREIGN KEY (`doc_codigo`) REFERENCES `tb_doca` (`doc_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipo_veiculo` FOREIGN KEY (`tve_codigo`) REFERENCES `tb_tipo_veiculo` (`tve_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`usu_codigo`) REFERENCES `tb_usuario` (`usu_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_controle_entrega`
--

LOCK TABLES `tb_controle_entrega` WRITE;
/*!40000 ALTER TABLE `tb_controle_entrega` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_controle_entrega` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_departamento`
--

DROP TABLE IF EXISTS `tb_departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_departamento` (
  `dep_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `dep_descricao` varchar(70) NOT NULL,
  `dep_responsavel` varchar(70) NOT NULL,
  PRIMARY KEY (`dep_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_departamento`
--

LOCK TABLES `tb_departamento` WRITE;
/*!40000 ALTER TABLE `tb_departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_doca`
--

DROP TABLE IF EXISTS `tb_doca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_doca` (
  `doc_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `doc_descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`doc_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_doca`
--

LOCK TABLES `tb_doca` WRITE;
/*!40000 ALTER TABLE `tb_doca` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_doca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tipo_veiculo`
--

DROP TABLE IF EXISTS `tb_tipo_veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tipo_veiculo` (
  `tve_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tve_descricao` varchar(60) NOT NULL,
  PRIMARY KEY (`tve_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tipo_veiculo`
--

LOCK TABLES `tb_tipo_veiculo` WRITE;
/*!40000 ALTER TABLE `tb_tipo_veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tipo_veiculo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usuario` (
  `usu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(45) DEFAULT NULL,
  `usu_ramal` varchar(45) DEFAULT NULL,
  `usu_email` varchar(255) DEFAULT NULL,
  `usu_login` varchar(70) DEFAULT NULL,
  `usu_senha` varchar(40) DEFAULT NULL,
  `usu_status` char(1) NOT NULL DEFAULT '1',
  `dep_codigo` int(11) NOT NULL,
  PRIMARY KEY (`usu_codigo`),
  KEY `fk_departamento_idx` (`dep_codigo`),
  CONSTRAINT `fk_departamento` FOREIGN KEY (`dep_codigo`) REFERENCES `tb_departamento` (`dep_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-23 16:49:24
