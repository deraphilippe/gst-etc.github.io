-- MariaDB dump 10.18  Distrib 10.4.16-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: etatcivil
-- ------------------------------------------------------
-- Server version	10.4.16-MariaDB

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
-- Temporary table structure for view `acteadoption`
--

DROP TABLE IF EXISTS `acteadoption`;
/*!50001 DROP VIEW IF EXISTS `acteadoption`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `acteadoption` (
  `numAdopt` tinyint NOT NULL,
  `numActeAdopt` tinyint NOT NULL,
  `nomPerePers` tinyint NOT NULL,
  `prenomPerePers` tinyint NOT NULL,
  `vivPere` tinyint NOT NULL,
  `nomMerePers` tinyint NOT NULL,
  `prenomMerePers` tinyint NOT NULL,
  `vivMere` tinyint NOT NULL,
  `numOff` tinyint NOT NULL,
  `codeReg` tinyint NOT NULL,
  `dateAdopt` tinyint NOT NULL,
  `heureAdopt` tinyint NOT NULL,
  `lieuAdopt` tinyint NOT NULL,
  `dateEcrit` tinyint NOT NULL,
  `numTem1` tinyint NOT NULL,
  `numTem2` tinyint NOT NULL,
  `imgActeAdopt` tinyint NOT NULL,
  `typeImgAdopt` tinyint NOT NULL,
  `pereAdoptant` tinyint NOT NULL,
  `mereAdoptant` tinyint NOT NULL,
  `nomOff` tinyint NOT NULL,
  `fonction` tinyint NOT NULL,
  `nomAdoptant` tinyint NOT NULL,
  `dateAdoptant` tinyint NOT NULL,
  `lieuAdoptant` tinyint NOT NULL,
  `adrAdoptant` tinyint NOT NULL,
  `profAdoptant` tinyint NOT NULL,
  `nomTem1` tinyint NOT NULL,
  `dateTem1` tinyint NOT NULL,
  `lieuTem1` tinyint NOT NULL,
  `adrTem1` tinyint NOT NULL,
  `profTem1` tinyint NOT NULL,
  `nomTem2` tinyint NOT NULL,
  `dateTem2` tinyint NOT NULL,
  `lieuTem2` tinyint NOT NULL,
  `adrTem2` tinyint NOT NULL,
  `profTem2` tinyint NOT NULL,
  `nomEnfant` tinyint NOT NULL,
  `prenomEnfant` tinyint NOT NULL,
  `nomCompletEnfant` tinyint NOT NULL,
  `sexeEnfant` tinyint NOT NULL,
  `dateNaissEnfant` tinyint NOT NULL,
  `lieuNaissEnfant` tinyint NOT NULL,
  `numPers` tinyint NOT NULL,
  `nomMere` tinyint NOT NULL,
  `nomPere` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `actedeces`
--

DROP TABLE IF EXISTS `actedeces`;
/*!50001 DROP VIEW IF EXISTS `actedeces`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `actedeces` (
  `numDeces` tinyint NOT NULL,
  `numActeDeces` tinyint NOT NULL,
  `nomDef` tinyint NOT NULL,
  `prenomDef` tinyint NOT NULL,
  `nomDeces` tinyint NOT NULL,
  `dateDeces` tinyint NOT NULL,
  `heureDeces` tinyint NOT NULL,
  `lieuDeces` tinyint NOT NULL,
  `profDeces` tinyint NOT NULL,
  `adrDeces` tinyint NOT NULL,
  `sexeDecedes` tinyint NOT NULL,
  `dateNaissDeces` tinyint NOT NULL,
  `lieuNaissDeces` tinyint NOT NULL,
  `nomMere` tinyint NOT NULL,
  `vivantMere` tinyint NOT NULL,
  `adrPere` tinyint NOT NULL,
  `profPere` tinyint NOT NULL,
  `adrMere` tinyint NOT NULL,
  `profMere` tinyint NOT NULL,
  `nomPere` tinyint NOT NULL,
  `vivantPere` tinyint NOT NULL,
  `nomOff` tinyint NOT NULL,
  `fonction` tinyint NOT NULL,
  `codeReg` tinyint NOT NULL,
  `imgActeDec` tinyint NOT NULL,
  `typeImgDec` tinyint NOT NULL,
  `typeDec` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `actemariage`
--

DROP TABLE IF EXISTS `actemariage`;
/*!50001 DROP VIEW IF EXISTS `actemariage`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `actemariage` (
  `numMariage` tinyint NOT NULL,
  `numActeMariage` tinyint NOT NULL,
  `dateMariage` tinyint NOT NULL,
  `heureMariage` tinyint NOT NULL,
  `numHomme` tinyint NOT NULL,
  `numFemme` tinyint NOT NULL,
  `numTem1` tinyint NOT NULL,
  `numTem2` tinyint NOT NULL,
  `numOff` tinyint NOT NULL,
  `codeReg` tinyint NOT NULL,
  `imgActeMar` tinyint NOT NULL,
  `typeImgMar` tinyint NOT NULL,
  `nomHomme` tinyint NOT NULL,
  `prenomHomme` tinyint NOT NULL,
  `nomHommeComplet` tinyint NOT NULL,
  `dateNaissHomme` tinyint NOT NULL,
  `lieuNaissHomme` tinyint NOT NULL,
  `adrHomme` tinyint NOT NULL,
  `profHomme` tinyint NOT NULL,
  `nationalHomme` tinyint NOT NULL,
  `nomFemme` tinyint NOT NULL,
  `prenomFemme` tinyint NOT NULL,
  `nomFemmeComplet` tinyint NOT NULL,
  `dateNaissFemme` tinyint NOT NULL,
  `lieuNaissFemme` tinyint NOT NULL,
  `adrFemme` tinyint NOT NULL,
  `profFemme` tinyint NOT NULL,
  `nationalFemme` tinyint NOT NULL,
  `nomTem1` tinyint NOT NULL,
  `prenomTem1` tinyint NOT NULL,
  `nomTem1Complet` tinyint NOT NULL,
  `dateNaissTem1` tinyint NOT NULL,
  `lieuNaissTem1` tinyint NOT NULL,
  `adrTem1` tinyint NOT NULL,
  `profTem1` tinyint NOT NULL,
  `nomTem2` tinyint NOT NULL,
  `prenomTem2` tinyint NOT NULL,
  `nomTem2Complet` tinyint NOT NULL,
  `dateNaissTem2` tinyint NOT NULL,
  `lieuNaissTem2` tinyint NOT NULL,
  `adrTem2` tinyint NOT NULL,
  `profTem2` tinyint NOT NULL,
  `numMereHomme` tinyint NOT NULL,
  `nomMereHommeComplet` tinyint NOT NULL,
  `nomMereHomme` tinyint NOT NULL,
  `prenomMereHomme` tinyint NOT NULL,
  `dateNaissMereHomme` tinyint NOT NULL,
  `lieuNaissMereHomme` tinyint NOT NULL,
  `adrMereHomme` tinyint NOT NULL,
  `profMereHomme` tinyint NOT NULL,
  `vivMereHomme` tinyint NOT NULL,
  `numPereHomme` tinyint NOT NULL,
  `nomPereHommeComplet` tinyint NOT NULL,
  `nomPereHomme` tinyint NOT NULL,
  `prenomPereHomme` tinyint NOT NULL,
  `dateNaissPereHomme` tinyint NOT NULL,
  `lieuNaissPereHomme` tinyint NOT NULL,
  `adrPereHomme` tinyint NOT NULL,
  `profPereHomme` tinyint NOT NULL,
  `vivPereHomme` tinyint NOT NULL,
  `numMereFemme` tinyint NOT NULL,
  `nomMereFemmeComplet` tinyint NOT NULL,
  `nomMereFemme` tinyint NOT NULL,
  `prenomMereFemme` tinyint NOT NULL,
  `dateNaissMereFemme` tinyint NOT NULL,
  `lieuNaissMereFemme` tinyint NOT NULL,
  `adrMereFemme` tinyint NOT NULL,
  `profMereFemme` tinyint NOT NULL,
  `vivMereFemme` tinyint NOT NULL,
  `numPereFemme` tinyint NOT NULL,
  `nomPereFemmeComplet` tinyint NOT NULL,
  `nomPereFemme` tinyint NOT NULL,
  `prenomPereFemme` tinyint NOT NULL,
  `dateNaissPereFemme` tinyint NOT NULL,
  `lieuNaissPereFemme` tinyint NOT NULL,
  `adrPereFemme` tinyint NOT NULL,
  `profPereFemme` tinyint NOT NULL,
  `vivPereFemme` tinyint NOT NULL,
  `nomOff` tinyint NOT NULL,
  `fonction` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `actenaissance`
--

DROP TABLE IF EXISTS `actenaissance`;
/*!50001 DROP VIEW IF EXISTS `actenaissance`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `actenaissance` (
  `numNaiss` tinyint NOT NULL,
  `numActeNaiss` tinyint NOT NULL,
  `legitime` tinyint NOT NULL,
  `typeNaiss` tinyint NOT NULL,
  `nomEnfant` tinyint NOT NULL,
  `prenomEnfant` tinyint NOT NULL,
  `sexeEnfant` tinyint NOT NULL,
  `dateNaissEnfant` tinyint NOT NULL,
  `heureNaissEnfant` tinyint NOT NULL,
  `lieuNaissEnfant` tinyint NOT NULL,
  `codeReg` tinyint NOT NULL,
  `numPere` tinyint NOT NULL,
  `numMere` tinyint NOT NULL,
  `numOff` tinyint NOT NULL,
  `imgActeNaiss` tinyint NOT NULL,
  `typeImgNaiss` tinyint NOT NULL,
  `jumeau` tinyint NOT NULL,
  `nomCompletEnfant` tinyint NOT NULL,
  `nomPere` tinyint NOT NULL,
  `dateNaissPere` tinyint NOT NULL,
  `lieuNaissPere` tinyint NOT NULL,
  `profPere` tinyint NOT NULL,
  `adrPere` tinyint NOT NULL,
  `agePere` tinyint NOT NULL,
  `vivPere` tinyint NOT NULL,
  `nomMere` tinyint NOT NULL,
  `dateNaissMere` tinyint NOT NULL,
  `lieuNaissMere` tinyint NOT NULL,
  `profMere` tinyint NOT NULL,
  `adrMere` tinyint NOT NULL,
  `ageMere` tinyint NOT NULL,
  `vivMere` tinyint NOT NULL,
  `nomOff` tinyint NOT NULL,
  `fonction` tinyint NOT NULL,
  `nomReg` tinyint NOT NULL,
  `dateReg` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `actereconnaissance`
--

DROP TABLE IF EXISTS `actereconnaissance`;
/*!50001 DROP VIEW IF EXISTS `actereconnaissance`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `actereconnaissance` (
  `numRec` tinyint NOT NULL,
  `numActeRec` tinyint NOT NULL,
  `codeReg` tinyint NOT NULL,
  `numOff` tinyint NOT NULL,
  `dateRec` tinyint NOT NULL,
  `heureRec` tinyint NOT NULL,
  `imgActeRec` tinyint NOT NULL,
  `typeImgRec` tinyint NOT NULL,
  `nomEnfant` tinyint NOT NULL,
  `prenomEnfant` tinyint NOT NULL,
  `nomCompletEnfant` tinyint NOT NULL,
  `sexeEnfant` tinyint NOT NULL,
  `dateNaissEnfant` tinyint NOT NULL,
  `lieuNaissEnfant` tinyint NOT NULL,
  `nomMere` tinyint NOT NULL,
  `numPers` tinyint NOT NULL,
  `nomPers` tinyint NOT NULL,
  `prenomPers` tinyint NOT NULL,
  `dateNaissPers` tinyint NOT NULL,
  `lieuNaissPers` tinyint NOT NULL,
  `adressePers` tinyint NOT NULL,
  `profPers` tinyint NOT NULL,
  `vivant` tinyint NOT NULL,
  `nationalite` tinyint NOT NULL,
  `age` tinyint NOT NULL,
  `nomPere` tinyint NOT NULL,
  `nomOff` tinyint NOT NULL,
  `fonction` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `adopter`
--

DROP TABLE IF EXISTS `adopter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adopter` (
  `numAdopt` varchar(10) DEFAULT NULL,
  `numPers` int(11) DEFAULT NULL,
  `nomEnfant` varchar(40) DEFAULT NULL,
  `prenomEnfant` varchar(50) DEFAULT NULL,
  `sexeEnfant` varchar(8) DEFAULT NULL,
  `dateNaissEnfant` varchar(10) DEFAULT NULL,
  `lieuNaissEnfant` varchar(70) DEFAULT NULL,
  `nomMere` varchar(40) DEFAULT NULL,
  `prenomMere` varchar(50) DEFAULT NULL,
  `nomPere` varchar(40) DEFAULT NULL,
  `prenomPere` varchar(50) DEFAULT NULL,
  KEY `constrAdopt1` (`numAdopt`),
  KEY `constrAdopt2` (`numPers`),
  CONSTRAINT `constrAdopt1` FOREIGN KEY (`numAdopt`) REFERENCES `adoption` (`numAdopt`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrAdopt2` FOREIGN KEY (`numPers`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adopter`
--

LOCK TABLES `adopter` WRITE;
/*!40000 ALTER TABLE `adopter` DISABLE KEYS */;
INSERT INTO `adopter` VALUES ('1A2021',243,'Rakotonirina','Jean Baptiste','lehilahy','1989-10-27','Ankijabe Ambalavao','Razafimandimby','Gabriel','Razanatsoa','Alphonsine'),('1A2021',243,'Razafimandimby','Tolojanahary Emmanuël','lehilahy','2007-12-31','Vidia Vohitsaoka','Razafinandrasana','Jonah Bruno','Rasoamampionona','Lucie Jeanne Florette');
/*!40000 ALTER TABLE `adopter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adoption`
--

DROP TABLE IF EXISTS `adoption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adoption` (
  `numAdopt` varchar(10) NOT NULL,
  `numActeAdopt` int(11) DEFAULT NULL,
  `nomPerePers` varchar(40) DEFAULT NULL,
  `prenomPerePers` varchar(60) DEFAULT NULL,
  `vivPere` varchar(3) DEFAULT NULL,
  `nomMerePers` varchar(40) DEFAULT NULL,
  `prenomMerePers` varchar(60) DEFAULT NULL,
  `vivMere` varchar(3) DEFAULT NULL,
  `numOff` int(11) DEFAULT NULL,
  `codeReg` varchar(20) DEFAULT NULL,
  `dateAdopt` date DEFAULT NULL,
  `heureAdopt` time DEFAULT NULL,
  `lieuAdopt` varchar(20) DEFAULT NULL,
  `dateEcrit` date DEFAULT NULL,
  `numTem1` int(11) DEFAULT NULL,
  `numTem2` int(11) DEFAULT NULL,
  `imgActeAdopt` longblob DEFAULT NULL,
  `typeImgAdopt` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`numAdopt`),
  KEY `constrTemoin1` (`numTem1`),
  KEY `constrTemoin2` (`numTem2`),
  CONSTRAINT `constrTemoin1` FOREIGN KEY (`numTem1`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrTemoin2` FOREIGN KEY (`numTem2`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adoption`
--

LOCK TABLES `adoption` WRITE;
/*!40000 ALTER TABLE `adoption` DISABLE KEYS */;
INSERT INTO `adoption` VALUES ('1A2021',1,'','','non','Rampisamimalaza','','non',3,'Adoption-2021','2021-05-12','09:00:00','commune','0000-00-00',244,245,NULL,'');
/*!40000 ALTER TABLE `adoption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autorisation`
--

DROP TABLE IF EXISTS `autorisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autorisation` (
  `idAuto` varchar(15) NOT NULL,
  `codeAuto` varchar(25) DEFAULT NULL,
  `typeAuto` varchar(15) DEFAULT NULL,
  `dateAuto` date DEFAULT NULL,
  `donneur` text DEFAULT NULL,
  `numPers` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAuto`),
  KEY `constrAuto` (`numPers`),
  CONSTRAINT `constrAuto` FOREIGN KEY (`numPers`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autorisation`
--

LOCK TABLES `autorisation` WRITE;
/*!40000 ALTER TABLE `autorisation` DISABLE KEYS */;
/*!40000 ALTER TABLE `autorisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `concernerjugement`
--

DROP TABLE IF EXISTS `concernerjugement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concernerjugement` (
  `numDeces` varchar(10) DEFAULT NULL,
  `numJugement` varchar(10) DEFAULT NULL,
  KEY `constJugement3` (`numDeces`),
  KEY `constJugement4` (`numJugement`),
  CONSTRAINT `constJugement3` FOREIGN KEY (`numDeces`) REFERENCES `deces` (`numDeces`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constJugement4` FOREIGN KEY (`numJugement`) REFERENCES `jugement` (`numJugement`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concernerjugement`
--

LOCK TABLES `concernerjugement` WRITE;
/*!40000 ALTER TABLE `concernerjugement` DISABLE KEYS */;
/*!40000 ALTER TABLE `concernerjugement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deces`
--

DROP TABLE IF EXISTS `deces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deces` (
  `numDeces` varchar(10) NOT NULL,
  `numActeDeces` int(11) DEFAULT NULL,
  `nomDeces` varchar(40) DEFAULT NULL,
  `prenomDeces` varchar(50) DEFAULT NULL,
  `dateDeces` varchar(10) DEFAULT NULL,
  `heureDeces` time DEFAULT NULL,
  `lieuDeces` varchar(70) DEFAULT NULL,
  `profDeces` varchar(90) DEFAULT NULL,
  `adrDeces` varchar(70) DEFAULT NULL,
  `sexeDecedes` varchar(8) DEFAULT NULL,
  `dateNaissDeces` varchar(10) DEFAULT NULL,
  `lieuNaissDeces` varchar(70) DEFAULT NULL,
  `nomMere` varchar(40) DEFAULT NULL,
  `prenomMere` varchar(60) DEFAULT NULL,
  `profMere` varchar(70) DEFAULT NULL,
  `vivantMere` varchar(3) DEFAULT NULL,
  `nomPere` varchar(40) DEFAULT NULL,
  `prenomPere` varchar(60) DEFAULT NULL,
  `profPere` varchar(70) DEFAULT NULL,
  `vivantPere` varchar(3) DEFAULT NULL,
  `numOff` int(11) DEFAULT NULL,
  `codeReg` varchar(20) DEFAULT NULL,
  `imgActeDec` longblob DEFAULT NULL,
  `typeImgDec` varchar(15) DEFAULT NULL,
  `typeDec` varchar(15) DEFAULT NULL,
  `adrMere` varchar(70) DEFAULT NULL,
  `adrPere` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`numDeces`),
  KEY `constDeces4` (`numOff`),
  KEY `constDeces6` (`codeReg`),
  CONSTRAINT `constDeces4` FOREIGN KEY (`numOff`) REFERENCES `officier` (`numOff`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constDeces6` FOREIGN KEY (`codeReg`) REFERENCES `registre` (`codeReg`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deces`
--

LOCK TABLES `deces` WRITE;
/*!40000 ALTER TABLE `deces` DISABLE KEYS */;
INSERT INTO `deces` VALUES ('104D2021',104,'Andriambolo','Honoré','2021-05-14','11:00:00','Tambohonapapa Vatofotsy  Ambalavao','','','lehilahy','1924-00-00','Mahazoarivo','Raravonoro','','','oui','Andrianaimalaza','Pierre','','oui',3,'Deces-2021','','','declaration','',''),('110D2021',110,'Razafimamonjy','Romuald','2021-05-18','07:00:00','Ambohimahasoa Bemahalanja Ambalavao','','','lehilahy','1966-01-15','Ambalavao','Ravaha','','','oui','Randevo','Samuël','','oui',1,'Deces-2021','','','declaration','',''),('37D2016',37,'Razafindranoro','Marie Monthez Aveline','2016-03-10','15:00:00','Sahamasy Ambalavao','','Sahamasy','vehivavy','1956-08-04','','Rabakoliarimanana','Clémentine','','oui','Razafindratsio','Louis Hubert','','oui',9,'Deces-2016','','','declaration','',''),('96D2021',96,'Ratalata','Emmanuel','2021-05-06','03:00:00','Soarano-Nord','','','lehilahy','1957-00-00','Tsianindohany','Renivao','','','non','Ravelo ','Daniel','','non',3,'Deces-2021','','','declaration','',''),('97D2021',97,'Ramananjanahary','Clarisse','2021-05-05','10:00:00','Sonjosoa-Est Bemahalanja ','','','vehivavy','1954-09-18','Ambovombe Centre','Razafindrasoa','Alberthine','','oui','Ratsimbazafy ','Antoine','','oui',3,'Deces-2021','','','declaration','',''),('99D2021',99,'Razanamamiarisoa','Balisama','2021-05-05','10:00:00','Tsarahonenana Alatsinainy Ambalavao','','','vehivavy','1972-06-12','Fiadanana-Est Mahazoarivo Fandriana','Razanamahasoa','','','oui','Rakotoarisaona','','','non',3,'Deces-2021','','','declaration','','');
/*!40000 ALTER TABLE `deces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `declarantdeces`
--

DROP TABLE IF EXISTS `declarantdeces`;
/*!50001 DROP VIEW IF EXISTS `declarantdeces`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `declarantdeces` (
  `numDeces` tinyint NOT NULL,
  `declarant` tinyint NOT NULL,
  `dateDecDeces` tinyint NOT NULL,
  `heureDecDeces` tinyint NOT NULL,
  `nomDec` tinyint NOT NULL,
  `prenomDec` tinyint NOT NULL,
  `lieuNaissDec` tinyint NOT NULL,
  `dateNaissDec` tinyint NOT NULL,
  `profDec` tinyint NOT NULL,
  `adrDec` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `declarantnaissance`
--

DROP TABLE IF EXISTS `declarantnaissance`;
/*!50001 DROP VIEW IF EXISTS `declarantnaissance`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `declarantnaissance` (
  `numNaiss` tinyint NOT NULL,
  `declarant` tinyint NOT NULL,
  `dateDecNaiss` tinyint NOT NULL,
  `heureDecNaiss` tinyint NOT NULL,
  `present` tinyint NOT NULL,
  `nomDec` tinyint NOT NULL,
  `prenomDec` tinyint NOT NULL,
  `lieuNaissDec` tinyint NOT NULL,
  `dateNaissDec` tinyint NOT NULL,
  `profDec` tinyint NOT NULL,
  `adrDec` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `declarerdeces`
--

DROP TABLE IF EXISTS `declarerdeces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `declarerdeces` (
  `numDeces` varchar(10) DEFAULT NULL,
  `numPers` int(11) DEFAULT NULL,
  `declarant` varchar(15) DEFAULT NULL,
  `dateDecDeces` date DEFAULT NULL,
  `heureDecDeces` time DEFAULT NULL,
  KEY `constDeclarerDeces1` (`numDeces`),
  KEY `constDeclarerDeces2` (`numPers`),
  CONSTRAINT `constDeclarerDeces1` FOREIGN KEY (`numDeces`) REFERENCES `deces` (`numDeces`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constDeclarerDeces2` FOREIGN KEY (`numPers`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `declarerdeces`
--

LOCK TABLES `declarerdeces` WRITE;
/*!40000 ALTER TABLE `declarerdeces` DISABLE KEYS */;
INSERT INTO `declarerdeces` VALUES ('104D2021',172,'zanany','2021-05-17','08:00:00'),('97D2021',173,'vadin\'ilay maty','2021-05-11','08:00:00'),('99D2021',261,'zaodahiny','2021-05-17','08:00:00'),('110D2021',292,'rahalahiny','2021-05-21','10:00:00'),('96D2021',338,'fianakaviany','2021-05-11','08:00:00'),('37D2016',456,'','2016-03-11','09:00:00');
/*!40000 ALTER TABLE `declarerdeces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `declarernaiss`
--

DROP TABLE IF EXISTS `declarernaiss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `declarernaiss` (
  `numNaiss` varchar(10) DEFAULT NULL,
  `numPers` int(11) DEFAULT NULL,
  `declarant` varchar(15) DEFAULT NULL,
  `dateDecNaiss` date DEFAULT NULL,
  `heureDecNaiss` time DEFAULT NULL,
  `present` varchar(3) DEFAULT NULL,
  KEY `constDeclarer1` (`numNaiss`),
  KEY `constDeclarer2` (`numPers`),
  CONSTRAINT `constDeclarer1` FOREIGN KEY (`numNaiss`) REFERENCES `naissance` (`numNaiss`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constDeclarer2` FOREIGN KEY (`numPers`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `declarernaiss`
--

LOCK TABLES `declarernaiss` WRITE;
/*!40000 ALTER TABLE `declarernaiss` DISABLE KEYS */;
INSERT INTO `declarernaiss` VALUES ('1360N2000',1,'Rain-jaza','2000-12-31','17:40:00',NULL),('198N1992',5,'','1992-03-09','08:00:00',NULL),('1135N2003',19,'','2003-10-17','11:45:00',NULL),('978N2002',23,'','2002-09-27','08:00:00',NULL),('1195N2002',26,'','2002-11-11','10:25:00',NULL),('559N2003',29,'','2003-06-23','08:30:00',NULL),('515N1995',31,'','1995-01-29','08:10:00','non'),('968N2003',33,'','2003-09-15','08:15:00',NULL),('892N2017',36,'','2017-09-07','08:10:00',NULL),('651N2006',39,'','2006-07-27','08:15:00',NULL),('237N2003',42,'','2003-03-31','08:15:00',NULL),('253N2001',45,'','2001-03-29','08:30:00',NULL),('269N1964',48,'','2011-04-13','08:10:00',NULL),('1420N2015',50,'','2015-12-31','16:05:00',NULL),('1106N1986',52,'Rain-jaza','1986-12-24','08:15:00',NULL),('426N1994',66,'','1994-05-15','14:00:00',NULL),('691N2001',67,'Rain-jaza','2001-08-10','08:40:00',NULL),('691N2001',67,'Rain-jaza','2001-08-10','08:40:00',NULL),('N1964',20,'','0000-00-00','00:00:00',NULL),('691N2001',67,'Rain-jaza','2001-08-10','08:40:00',NULL),('691N2001',67,'Rain-jaza','2001-08-10','08:40:00',NULL),('939N1991',71,'','1991-10-29','08:30:00',NULL),('269N2011',48,'','2011-04-13','08:10:00','non'),('271N1993',72,'Rain-jaza','1993-04-01','09:15:00',NULL),('853N1997',91,'','1997-09-04','09:00:00',NULL),('85N2003',93,'','2003-02-09','08:10:00',NULL),('655N2003',96,'','2003-07-12','08:35:00',NULL),('1072N1999',97,'Rain-jaza','1999-10-14','08:15:00',NULL),('1075N1980',101,'','1980-12-02','08:15:00',NULL),('731N2012',102,'Rain-jaza','2012-08-22','08:10:00',NULL),('N1964',20,'','0000-00-00','00:00:00',NULL),('74N2020',106,'','2020-01-20','08:55:00',NULL),('678N1970',109,'','1970-09-28','10:30:00',NULL),('260N1969',112,'','1969-04-30','19:30:00',NULL),('215N1969',114,'','1969-04-10','08:30:00',NULL),('270N1965',117,'','1965-10-13','10:00:00',NULL),('232N1968',119,'','1968-04-04','08:00:00',NULL),('800N1992',19,'','1992-09-20','08:00:00',NULL),('1146N1997',122,'Rain-jaza','1997-11-16','09:00:00',NULL),('1246N1997',126,'','1997-12-13','08:30:00',NULL),('1074N1990',127,'Rain-jaza','1990-10-10','08:15:00',NULL),('839N2001',129,'Rain-jaza','2001-09-30','10:10:00',NULL),('343N2006',133,'','2006-04-18','08:00:00',NULL),('1014N1978',135,'','1978-09-21','08:00:00',NULL),('277N2001',138,'','2001-04-05','09:30:00',NULL),('575N1974',135,'','1974-07-01','14:30:00',NULL),('795N2003',142,'','2003-08-15','09:00:00',NULL),('809N1974',135,'','1974-09-07','08:30:00',NULL),('966N1995',146,'','1995-09-28','08:40:00',NULL),('801N1998',149,'','1998-08-11','11:15:00',NULL),('518N1995',150,'Rain-jaza','1995-05-11','09:00:00',NULL),('169N2003',29,'','2003-03-14','08:45:00',NULL),('1346N1988',162,'','1988-12-31','08:15:00','non'),('17N1991',165,'','1991-01-12','08:00:00',NULL),('253N1994',174,'Rain-jaza','1994-04-05','15:30:00','non'),('873N2008',178,'','2008-09-19','08:00:00','non'),('105N2011',181,'','2011-02-10','08:10:00','non'),('383N1998',184,'','1998-04-30','09:30:00','non'),('N1998',20,'','0000-00-00','00:00:00','non'),('881N2003',210,'','2003-08-27','08:00:00','non'),('92N1994',211,'Rain-jaza','1994-02-13','08:30:00','non'),('1025N2002',215,'','2002-10-07','10:45:00','non'),('106N1995',216,'Rain-jaza','1995-01-25','08:20:00','non'),('68N1987',220,'Rain-jaza','1987-01-28','09:00:00','non'),('835N1998',224,'','1998-08-18','09:20:00','non'),('1101N1988',135,'','1988-10-08','08:30:00','non'),('1197N1977',228,'','1977-10-27','08:30:00','non'),('630N1994',229,'Rain-jaza','1994-06-29','11:30:00','non'),('267N1991',233,'','1991-04-01','08:00:00','non'),('1063N1997',241,'Rain-jaza','1997-10-25','08:45:00','non'),('91N1987',135,'','1987-02-05','09:10:00','non'),('277N1961',249,'','1961-06-09','09:15:00','oui'),('24N1987',253,'','1987-01-13','10:00:00','non'),('301N1981',255,'','1981-04-16','16:00:00','non'),('74N2000',258,'','2000-01-22','08:00:00','non'),('927N2003',33,'','2003-09-07','09:05:00','non'),('71N1983',135,'','1983-01-30','09:00:00','non'),('94N2004',142,'','2004-02-10','09:45:00','non'),('397N2017',268,'','2017-05-03','08:40:00','non'),('314N2008',29,'','2008-04-07','08:50:00','non'),('1083N2010',272,'','2010-11-29','08:00:00','non'),('181N2013',275,'','2013-02-27','08:15:00','non'),('446N1997',278,'','1997-05-26','10:30:00','non'),('425N1998',253,'','1998-05-12','08:20:00','non'),('1024N1999',281,'Rain-jaza','1999-10-03','14:15:00','non'),('529N1988',285,'','1988-05-02','11:15:00','non'),('239N2005',286,'','2005-03-12','08:15:00','non'),('500N1998',288,'Rain-jaza','1998-05-29','08:20:00','non'),('568N2003',142,'','2003-06-23','09:15:00','non'),('568N2003',142,'','2003-06-23','09:15:00','non'),('N2003',182,'','0000-00-00','00:00:00','non'),('568N2003',142,'','2003-06-23','09:15:00','non'),('474N2003',295,'','2003-05-31','15:45:00','non'),('99N1995',296,'Rain-jaza','1995-01-23','09:00:00','non'),('369N1996',298,'','1996-05-06','09:15:00','non'),('544N2001',302,'','2001-07-04','09:00:00','non'),('249N2017',306,'','2017-03-21','08:05:00','non'),('702N1994',307,'Rain-jaza','1994-07-06','16:00:00','non'),('49N2003',311,'','2003-01-25','08:00:00','non'),('622N1981',312,'Rain-jaza','1981-08-08','08:00:00','non'),('826N1975',315,'','1975-08-22','08:00:00','non'),('571N2003',317,'','2003-06-23','09:30:00','non'),('144N2015',319,'','2015-02-18','08:20:00','non'),('1049N1989',320,'Rain-jaza','1989-12-11','08:30:00','non'),('280N1996',162,'','1996-04-06','10:00:00','non'),('889N1999',326,'','1999-08-30','09:45:00','non'),('904N1980',101,'','1980-10-13','17:00:00','non'),('649N1987',328,'Rain-jaza','1987-08-11','08:15:00','non'),('524N1961',332,'','1961-10-18','10:00:00','oui'),('1238N2015',335,'','2015-12-01','08:10:00','non'),('930N1994',336,'Rain-jaza','1994-08-29','09:15:00','non'),('348N1961',249,'','1961-07-17','09:00:00','oui'),('12N1982',351,'','1982-01-07','14:15:00','non'),('394N1967',354,'','1967-07-07','08:30:00','non'),('957N1994',162,'','1994-09-05','09:00:00','non'),('349N1965',359,'','1965-07-09','14:00:00','non'),('185N1970',362,'','1970-03-27','08:00:00','non'),('N1961',182,'','0000-00-00','00:00:00','non'),('108N2000',371,'','2000-02-03','09:15:00','non'),('730N2000',380,'','2000-07-20','09:15:00','non'),('297N1970',383,'','1970-05-11','08:30:00','non'),('N1961',182,'','0000-00-00','00:00:00','non'),('573N2001',386,'','2001-07-15','08:10:00','non'),('124N2003',389,'','2003-02-19','09:00:00','non'),('882N1978',392,'','1978-08-18','09:00:00','non'),('345N2001',45,'','2001-05-04','09:15:00','non'),('N1961',182,'','0000-00-00','00:00:00','non'),('N1961',182,'','0000-00-00','00:00:00','non'),('N1961',182,'','0000-00-00','00:00:00','non'),('564N1989',19,'','1989-07-12','09:00:00','non'),('72N1961',182,'','0000-00-00','00:00:00','non'),('72N2018',405,'','2018-01-17','08:40:00','non'),('937N2002',407,'','2002-09-22','08:30:00','non'),('188N1961',410,'','1961-04-13','16:00:00','oui'),('230N1987',412,'','1987-03-20','08:00:00','non'),('549N1994',415,'','1994-06-13','11:15:00','non'),('575N1996',416,'Rain-jaza','1996-07-08','11:00:00','non'),('439N2003',419,'','2003-05-20','08:35:00','non'),('787N1969',421,'','1969-11-17','09:00:00','non'),('493N2021',424,'','2021-05-25','08:00:00','non'),('933N2015',427,'','2015-09-14','08:50:00','non'),('518N2021',434,'Rain-jaza','2021-05-26','14:30:00','non'),('508N2021',438,'','2021-05-25','15:15:00','non'),('521N2021',441,'','2021-05-27','14:00:00','non'),('522N2021',444,'','2021-05-27','14:15:00','non'),('523N2021',446,'','2021-05-28','09:00:00','non'),('716N1987',449,'','1987-08-27','09:00:00','non'),('999N1986',19,'','1986-11-25','08:30:00','non'),('496N2021',453,'','2021-05-25','08:30:00','non'),('242N1992',182,'Rain-jaza','1992-03-17','10:00:00','non'),('1114N1986',457,'Rain-jaza','1986-12-26','09:00:00','non'),('751N1988',459,'Rain-jaza','1988-06-27','08:00:00','non'),('246N2000',463,'','2000-03-09','09:00:00','non'),('761N1995',464,'Rain-jaza','1995-07-23','09:10:00','non'),('N1995',20,'','0000-00-00','00:00:00','non');
/*!40000 ALTER TABLE `declarernaiss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devise`
--

DROP TABLE IF EXISTS `devise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devise` (
  `numDev` int(11) NOT NULL,
  `devise` mediumtext DEFAULT NULL,
  PRIMARY KEY (`numDev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devise`
--

LOCK TABLES `devise` WRITE;
/*!40000 ALTER TABLE `devise` DISABLE KEYS */;
INSERT INTO `devise` VALUES (1,'Fitiavana-Tanindrazana-Fandrosoana');
/*!40000 ALTER TABLE `devise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enoncerjugement`
--

DROP TABLE IF EXISTS `enoncerjugement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enoncerjugement` (
  `numJugement` varchar(10) DEFAULT NULL,
  `numNaiss` varchar(10) DEFAULT NULL,
  KEY `constJugement1` (`numNaiss`),
  KEY `constJugement2` (`numJugement`),
  CONSTRAINT `constJugement1` FOREIGN KEY (`numNaiss`) REFERENCES `naissance` (`numNaiss`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constJugement2` FOREIGN KEY (`numJugement`) REFERENCES `jugement` (`numJugement`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enoncerjugement`
--

LOCK TABLES `enoncerjugement` WRITE;
/*!40000 ALTER TABLE `enoncerjugement` DISABLE KEYS */;
INSERT INTO `enoncerjugement` VALUES ('2206','143');
/*!40000 ALTER TABLE `enoncerjugement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jugegreffier`
--

DROP TABLE IF EXISTS `jugegreffier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jugegreffier` (
  `numJuge` int(11) NOT NULL AUTO_INCREMENT,
  `nomJuge` varchar(100) DEFAULT NULL,
  `nomGreffier` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`numJuge`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugegreffier`
--

LOCK TABLES `jugegreffier` WRITE;
/*!40000 ALTER TABLE `jugegreffier` DISABLE KEYS */;
/*!40000 ALTER TABLE `jugegreffier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jugement`
--

DROP TABLE IF EXISTS `jugement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jugement` (
  `numJugement` varchar(10) NOT NULL,
  `numJuge` int(11) DEFAULT NULL,
  `dateJugement` date DEFAULT NULL,
  `dateReception` date DEFAULT NULL,
  `dateEnregistre` date DEFAULT NULL,
  `objetJugement` varchar(20) DEFAULT NULL,
  `origineJugement` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`numJugement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugement`
--

LOCK TABLES `jugement` WRITE;
/*!40000 ALTER TABLE `jugement` DISABLE KEYS */;
INSERT INTO `jugement` VALUES ('2206',NULL,'2002-10-04','0000-00-00','2002-10-04','Fahaterahana','Fianarantsoa');
/*!40000 ALTER TABLE `jugement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `jugementdeces`
--

DROP TABLE IF EXISTS `jugementdeces`;
/*!50001 DROP VIEW IF EXISTS `jugementdeces`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `jugementdeces` (
  `numJugement` tinyint NOT NULL,
  `numJuge` tinyint NOT NULL,
  `dateJugement` tinyint NOT NULL,
  `dateReception` tinyint NOT NULL,
  `dateEnregistre` tinyint NOT NULL,
  `objetJugement` tinyint NOT NULL,
  `origineJugement` tinyint NOT NULL,
  `numDeces` tinyint NOT NULL,
  `nomJuge` tinyint NOT NULL,
  `nomGreffier` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `jugementnaissance`
--

DROP TABLE IF EXISTS `jugementnaissance`;
/*!50001 DROP VIEW IF EXISTS `jugementnaissance`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `jugementnaissance` (
  `numJugement` tinyint NOT NULL,
  `numJuge` tinyint NOT NULL,
  `dateJugement` tinyint NOT NULL,
  `dateReception` tinyint NOT NULL,
  `dateEnregistre` tinyint NOT NULL,
  `objetJugement` tinyint NOT NULL,
  `origineJugement` tinyint NOT NULL,
  `numNaiss` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `jugesortir`
--

DROP TABLE IF EXISTS `jugesortir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jugesortir` (
  `numJuge` int(11) DEFAULT NULL,
  `numJugement` varchar(10) DEFAULT NULL,
  KEY `constJuge1` (`numJuge`),
  KEY `constJuge2` (`numJugement`),
  CONSTRAINT `constJuge1` FOREIGN KEY (`numJuge`) REFERENCES `jugegreffier` (`numJuge`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constJuge2` FOREIGN KEY (`numJugement`) REFERENCES `jugement` (`numJugement`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugesortir`
--

LOCK TABLES `jugesortir` WRITE;
/*!40000 ALTER TABLE `jugesortir` DISABLE KEYS */;
/*!40000 ALTER TABLE `jugesortir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mariage`
--

DROP TABLE IF EXISTS `mariage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mariage` (
  `numMariage` varchar(10) NOT NULL,
  `numActeMariage` int(11) DEFAULT NULL,
  `dateMariage` date DEFAULT NULL,
  `heureMariage` time DEFAULT NULL,
  `numHomme` int(11) DEFAULT NULL,
  `numFemme` int(11) DEFAULT NULL,
  `numTem1` int(11) DEFAULT NULL,
  `numTem2` int(11) DEFAULT NULL,
  `numOff` int(11) DEFAULT NULL,
  `codeReg` varchar(20) DEFAULT NULL,
  `imgActeMar` longblob DEFAULT NULL,
  `typeImgMar` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`numMariage`),
  KEY `constrMariage1` (`codeReg`),
  KEY `constrMariage2` (`numHomme`),
  KEY `constrMariage3` (`numOff`),
  KEY `constrMariage5` (`numFemme`),
  KEY `constrMariage6` (`numTem1`),
  KEY `constrMariage7` (`numTem2`),
  CONSTRAINT `constrMariage1` FOREIGN KEY (`codeReg`) REFERENCES `registre` (`codeReg`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrMariage2` FOREIGN KEY (`numHomme`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrMariage3` FOREIGN KEY (`numOff`) REFERENCES `officier` (`numOff`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrMariage5` FOREIGN KEY (`numFemme`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrMariage6` FOREIGN KEY (`numTem1`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrMariage7` FOREIGN KEY (`numTem2`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mariage`
--

LOCK TABLES `mariage` WRITE;
/*!40000 ALTER TABLE `mariage` DISABLE KEYS */;
INSERT INTO `mariage` VALUES ('36M2021',36,'2021-05-12','10:00:00',9,6,15,3,3,'Mariage-2021','',''),('37M2021',37,'2021-05-14','10:00:00',57,54,60,61,3,'Mariage-2021','',''),('38M2021',38,'2021-05-15','10:00:00',77,74,79,80,3,'Mariage-2021','',''),('39M2021',39,'2021-05-15','11:00:00',84,81,87,88,3,'Mariage-2021','',''),('40M2021',40,'2021-05-21','10:00:00',155,153,157,158,3,'Mariage-2021','',''),('41M2004',41,'2004-09-04','10:00:00',203,200,206,207,34,'Mariage-2004','',''),('41M2021',41,'2021-05-21','10:30:00',169,166,157,171,3,'Mariage-2021','',''),('42M2021',42,'2021-05-21','11:00:00',188,185,191,192,3,'Mariage-2021','',''),('43M2021',43,'2021-05-21','11:30:00',195,193,198,199,3,'Mariage-2021','',''),('44M2021',44,'2021-05-21','12:00:00',237,234,239,240,3,'Mariage-2021','',''),('45M2021',45,'2021-05-27','11:00:00',342,339,345,346,3,'Mariage-2021','',''),('46M2021',46,'2021-05-29','10:00:00',365,363,368,369,3,'Mariage-2021','',''),('47M2021',47,'2021-05-29','10:30:00',374,372,377,378,3,'Mariage-2021','',''),('48M2021',48,'2021-05-29','11:30:00',396,393,399,400,3,'Mariage-2021','',''),('76M2017',76,'2017-12-26','11:00:00',430,428,432,433,53,'Mariage-2017','','');
/*!40000 ALTER TABLE `mariage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mentionmarginal`
--

DROP TABLE IF EXISTS `mentionmarginal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mentionmarginal` (
  `numMention` int(11) NOT NULL AUTO_INCREMENT,
  `mention` text DEFAULT NULL,
  `numNaiss` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`numMention`),
  KEY `constMention` (`numNaiss`),
  CONSTRAINT `constMention` FOREIGN KEY (`numNaiss`) REFERENCES `naissance` (`numNaiss`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mentionmarginal`
--

LOCK TABLES `mentionmarginal` WRITE;
/*!40000 ALTER TABLE `mentionmarginal` DISABLE KEYS */;
INSERT INTO `mentionmarginal` VALUES (1,'Nozanahan\'i Mahatroatse Zephyrin, tao amin\'ny 4ème Arrondissement ao Antananarivo, tamin\'ny  29 Aogositra 1997, Acte n°7424, ny mpiandraikitra sora-piankohonana, signé: Illisible','198N1992'),(2,'Nozanahan\'i Rakotondramana Lantoniaina Justin, tao Ambalavao, tamin\'ny 20 Oktobra 1997, acte n°1039, Ny mpiandraikitra sora-piankohonana, signé: Illisible','515N1995'),(3,'Soratra an-tsisiny:\r\nNozanahan\'i Randrianitiana Jean Pascal, tao Ambalavao, tamin\'ny 12 Mey 2021, acte n°458, Ny mpiandraikitra sora-piankohonana, signé:Illisible','269N2011'),(4,'Nozanahan\'i Rakotomalala Jean Albert, tao Ambalavao, tamin\'ny 16 Avrily 1969, acte n°230','215N1969'),(5,'Nozanahan\'i Rakotomalala Jean Albert, tao Ambalavao, tamin\'ny 27 Oktobra 1965, acte n°591, Ny mpiandraikitra sora-piankohonana, signé: Illisible','270N1965'),(6,'Nozanahan\'i Rakotomalala Jean Albert, tao Ambalavao, tamin\'ny 17 Mey 1968, acte n°331, ny mpiandraikitra sora-piankohonana, signé:Illisible','232N1968'),(7,'Nozanahan\'i Rasolohery Roger Andriamihaja, tao Ambalavao, tamin\'ny 11 Aogositra 2002, acte n°704, Ny mpiandraikitra  sora-piankohonana, signé: Illisible\r\n\r\nNanambady an\'i Andrianjafitsara Andry Nandrasana Marie, tao Antananarivo 2ème Arrondissement, acte n°M-02202000000651, tamin\'ny 03 Desambra 2020, Ny mpiandraikitra sora-piankohonana, signé: Illisible','800N1992'),(8,'Nozanahan\'i Randrianantenaina Jean Flavien, tao Ambalavao, tamin\'ny 09 Aogositra 2003, acte n°765, Ny mpiandraikitra sora-piankohonana, signé: Illisible','169N2003'),(9,'Nozanahan\'i Razafimanandrehy Rabesahala, tao Ambalavao, tamin\'ny 07 Jiona 2007, acte n°382','24N1987'),(10,'Nanambady an\'i RAZANADIMBY Rasoanandrasana Françoise, tao Ambalavao, tamin\'ny 18 Septambra 2002, acte n°44, Ny mpiandraikitra sora-piankohonana, signé: Illisible','826N1975'),(11,'Nanambady an\'i Gustave Eliane, tao Tanana Ambony Fianarantsoa 1, tamin\'ny 21 Avrily 1990, acte n°24, Ny mpiandraikitra sora-piankohonana, signé: Illisible','524N1961'),(12,'Nisara-panambadiana tamin\'i Gustave Eliane, araka ny didim-pitsarana navoakan\'ny Fitsarana Ambaratonga Voalohany ao Fianarantsoa, tamin\'ny 09 Jolay 1996, acte n°899, Ny mpiandraikitra sora-piankohonana, signé:Illisible','524N1961'),(13,'Nanambady an\'i Ramananjanahary Lucien, tao Ambalavao, tamin\'ny 28 Desambra 1991, acte n°32, Ny mpiandraikitra sora-piankohonana, signé: Illisible','188N1961'),(14,'Nozanahan\'i Randriampananampy, tao Ambalavao, tamin\'ny 16 Marsa 1970, acte n°168, Ny mpiandraikitra sora-piankohonana, signé: Illisble','787N1969'),(15,'Nanambady an\'i Randriambololona Modeste, tao amin\'ny Mairie du quatrième Arrondissement, tamin\'ny 13 Novambra 2003, acte n°885, Ny mpiandraikitra sora-pienkohonana, signé: Illisible','787N1969'),(16,'Nanambady an\'i Anjarasoa Onjamalala Anne Marie Julie, tao Ambalavao, tamin\'ny 11 Novambra 2011, acte n°92, Ny mpiandraikitra sora-piankohonana, signé: Illisible','1114N1986'),(17,'Nanambady an\'i Rafanomezantsoa  Patrick Ruphin, tao Ambalavao, tamin\'ny 09 Oktobra 2015, Acte n° 88','751N1988');
/*!40000 ALTER TABLE `mentionmarginal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mere`
--

DROP TABLE IF EXISTS `mere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mere` (
  `numEnfant` int(11) DEFAULT NULL,
  `numMere` int(11) DEFAULT NULL,
  KEY `constMere1` (`numEnfant`),
  KEY `constMere2` (`numMere`),
  CONSTRAINT `constMere1` FOREIGN KEY (`numEnfant`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constMere2` FOREIGN KEY (`numMere`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mere`
--

LOCK TABLES `mere` WRITE;
/*!40000 ALTER TABLE `mere` DISABLE KEYS */;
INSERT INTO `mere` VALUES (3,3),(3,3),(9,11),(6,8),(9,14),(6,8),(51,20),(20,20),(57,59),(54,56),(77,78),(74,76),(84,86),(81,83),(155,156),(153,154),(169,170),(166,168),(188,190),(185,187),(195,197),(193,194),(203,205),(200,202),(237,238),(234,236),(342,344),(339,341),(365,367),(363,364),(374,376),(372,373),(396,398),(393,395),(430,431),(428,429);
/*!40000 ALTER TABLE `mere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `naissance`
--

DROP TABLE IF EXISTS `naissance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `naissance` (
  `numNaiss` varchar(10) NOT NULL,
  `numActeNaiss` int(11) DEFAULT NULL,
  `legitime` varchar(3) DEFAULT NULL,
  `typeNaiss` varchar(20) DEFAULT NULL,
  `nomEnfant` varchar(50) DEFAULT NULL,
  `prenomEnfant` varchar(60) DEFAULT NULL,
  `sexeEnfant` varchar(8) DEFAULT NULL,
  `dateNaissEnfant` varchar(10) DEFAULT NULL,
  `heureNaissEnfant` time DEFAULT NULL,
  `lieuNaissEnfant` varchar(70) DEFAULT NULL,
  `codeReg` varchar(20) DEFAULT NULL,
  `numPere` int(11) DEFAULT NULL,
  `numMere` int(11) DEFAULT NULL,
  `numOff` int(11) DEFAULT NULL,
  `imgActeNaiss` longblob DEFAULT NULL,
  `typeImgNaiss` varchar(15) DEFAULT NULL,
  `jumeau` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`numNaiss`),
  KEY `constNaiss1` (`numPere`),
  KEY `constNaiss2` (`numMere`),
  KEY `constNaiss4` (`numOff`),
  KEY `constNaiss6` (`codeReg`),
  CONSTRAINT `constNaiss1` FOREIGN KEY (`numPere`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constNaiss2` FOREIGN KEY (`numMere`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constNaiss4` FOREIGN KEY (`numOff`) REFERENCES `officier` (`numOff`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constNaiss6` FOREIGN KEY (`codeReg`) REFERENCES `registre` (`codeReg`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naissance`
--

LOCK TABLES `naissance` WRITE;
/*!40000 ALTER TABLE `naissance` DISABLE KEYS */;
INSERT INTO `naissance` VALUES ('1014N1978',1014,'non','declaration','Rasoanandrasana','Euphrasie','zazavavy','1978-09-20','16:00:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1978',20,134,30,'','','unique'),('1024N1999',1024,'non','declaration','Narindra','Fredeline','zazavavy','1999-10-02','20:00:00','Ampasinakanga Maroparasy Ambalavao','Naissance-1999',281,282,2,'','','unique'),('1025N2002',1025,'non','declaration','Ramasimahavola','Olivier','zazalahy','2002-10-07','10:30:00','Ambalamafana Ambohitsoa Ambalavao','Naissance-2002',213,214,1,'','','unique'),('1049N1989',1049,'non','declaration','Randriamamelo','Fanantenana René','zazalahy','1989-12-10','03:00:00','Namongo Ambalavao','Naissance-1989',320,321,16,'','','unique'),('105N2011',105,'non','declaration','Nofiniaina','Angelah Marie Thérèse','zazavavy','2011-02-09','04:10:00','Sahamasy Ambalavao','Naissance-2011',179,180,4,'','','unique'),('1063N1997',1063,'oui','declaration','Ramisarivony','Nantenaina','zazalahy','1997-10-24','20:30:00','Ambalavao','Naissance-1997',241,242,2,'','','unique'),('106N1995',106,'non','declaration','Razafindrapiera','Mamitiana Jean Félidé','zazalahy','1995-01-24','09:00:00','Ambalamahavelo 2 Ambalavao','Naissance-1995',216,217,8,'','','unique'),('1072N1999',1072,'non','declaration','Raveloarisoa','Myriame Lucienne','zazavavy','1999-10-13','04:30:00','Ambinanany Vondrokely','Naissance-1999',97,98,2,'','','unique'),('1074N1990',1074,'non','declaration','Rafanomezantsoa','Denis Jules','zazalahy','1990-10-09','22:00:00','Avaratsena Ambalavao','Naissance-1990',127,128,6,'','','unique'),('1075N1980',1075,'non','declaration','Ranaivoson','Rivo Mamy','zazalahy','1980-12-01','12:40:00','Ambalavao','Naissance-1980',99,100,20,'','','unique'),('1083N2010',1083,'non','declaration','Rafahasahiana','Tianjalahy Fanirisoa David Nuelto','zazalahy','2010-11-28','21:15:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2010',270,271,4,'','','unique'),('108N2000',108,'oui','declaration','Razanabololona','Angella Marcelline','zazavavy','2000-02-02','22:10:00','Avaratsena Ambalavao','Naissance-2000',182,370,2,'','','unique'),('1101N1988',1101,'oui','declaration','Ratoejanahary','Fanirintsoa Fanambina','zazalahy','1988-10-07','18:35:00','Trano fampiterahana ao Ambalavao','Naissance-1988',225,226,16,'','','unique'),('1106N1986',1106,'non','declaration','Ravololoniaina','Marie Anne','zazavavy','1986-12-23','14:00:00','Sahamasy Ambalavao','Naissance-1986',52,53,16,'','','unique'),('1114N1986',1114,'oui','declaration','Andrianandy','Harinoely Martin Mourjon','zazalahy','1986-12-24','10:00:00','Soatanana-Sud ','Naissance-1986',457,458,16,'','','unique'),('1135N2003',1135,'non','declaration','Rasolonirina','Nantenaina Prisca','zazavavy','2003-10-08','08:00:00','Tanambao Tsaramandroso','Naissance-2003',17,18,1,'','','unique'),('1146N1997',1146,'non','declaration','Ratoloniaina','Tafika Aimé','zazalahy','1997-11-15','23:30:00','Tanambao Bemahalanja Ambalavao','Naissance-1997',122,123,2,'','','unique'),('1195N2002',1195,'oui','declaration','Ramialisoanirina','Hasina Nomenjanahary Esther','zazavavy','2002-11-07','23:00:00','Ambalasoa Ambalavao','Naissance-2002',24,25,1,'','','unique'),('1197N1977',1197,'oui','declaration','Fomentsoa','Ingénu','zazalahy','1977-10-27','03:00:00','amin\'ny trano fampiterahana Ambalavao','Naissance-1977',182,227,30,'','','unique'),('1238N2015',1238,'non','declaration','Andriamihaja','Natiora Vintana Kanto Diarrah','zazalahy','2015-11-30','01:15:00','amin\'ny trano fampiterahana Ambalavao','Naissance-2015',333,334,9,'','','unique'),('1246N1997',1246,'oui','declaration','Rakotoarisoanjanahary','Luc Gaël','zazalahy','1997-12-12','06:56:00','Atsinanamanda Ambalavao','Naissance-1997',124,125,2,'','','unique'),('124N2003',124,'oui','declaration','Rafaraniaina','Nomenjanahary Volatantely','zazalahy','2003-02-18','07:30:00','Ambohijafy Ambalavao','Naissance-2003',387,388,1,'','',''),('12N1982',12,'non','declaration','Andrianasolo','Alexandrine Françoise','zazavavy','1982-01-07','11:00:00','Trano fampiterahana ao Ambalavao','Naissance-1982',349,350,40,'','','unique'),('1346N1988',1346,'non','declaration','Oeliarihoasa','Francia Richard Annick','zazavavy','1988-12-30','03:00:00','Avaramanda Ambalavao','Naissance-1988',160,161,16,'','','unique'),('1360N2000',1360,'non','declaration','Randrianasoavina','Fanambinantsoa Germain','zazalahy','2000-12-15','16:00:00','Androka Ambalavao','Naissance-2000',1,2,1,'','','unique'),('1420N2015',1420,'non','declaration','Randriamanantena','Jean Romule ','zazalahy','2015-12-30','19:00:00','Sahamasy Ambalavao','Naissance-2015',20,49,9,'','','unique'),('143',143,'oui','jugement','Vololonirina','Fitahiantsoa Nocia','zazavavy','2001-05-17','00:00:00','Ambalasoa Ambalavao',NULL,264,265,1,'','','unique'),('144N2015',144,'non','declaration','Nomenjanahary','Hanitriniaina Félicia','zazavavy','2015-01-08','11:00:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2015',182,318,51,'','','unique'),('169N2003',169,'oui','declaration','Rafarasoa','Voary Nampionona Lucia','zazavavy','2003-02-26','05:35:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2003',20,159,1,'','','unique'),('17N1991',17,'oui','declaration','Rasoavololona','Dimbisoa Barijaona Pauline','zazavavy','1991-01-11','14:00:00','Ambalamanga Ambalavao','Naissance-1991',163,164,6,'','','unique'),('181N2013',181,'non','declaration','Rafahasahiana','David Mickaël','zazalahy','2013-02-26','10:35:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2013',273,274,4,'','','unique'),('185N1970',185,'non','declaration','Ramanalina','Herinirina','zazalahy','1970-03-26','21:30:00','amin\'ny trano fampiterahana ao Ambalavao, vakim-pileovan\'io ihany','Naissance-1970',360,361,23,'','','unique'),('188N1961',188,'non','declaration','Razanadimby','Hanitriniala Stéphane','zazavavy','1961-04-10','23:00:00','Trano fiterahana ao Ambalavao','Naissance-1961',408,409,52,'','','unique'),('198N1992',198,'oui','declaration','Rakotozafy','Marie Yolande','zazavavy','1992-03-06','02:00:00','Vatofotsy Ambalavao','Naissance-1992',3,4,6,'','','unique'),('215N1969',215,'oui','declaration','Rakotomalala','Aimé Radoniaina','zazalahy','1969-04-09','19:00:00','amin\'ny trano fampiterahana ao Ambalavao, vakim-pileovan\'io ihany','Naissance-1969',20,113,24,'','','unique'),('230N1987',230,'oui','declaration','Rakamisy','Justine','zazavavy','1987-03-19','18:00:00','Soaseranana Ambalavao','Naissance-1987',182,411,16,'','','unique'),('232N1968',232,'oui','declaration','Rakotomalala','Aimé Rivoniaina','zazavavy','1968-04-03','12:45:00','amin\'ny trano fampiterahana ao Ambalavao, vakim-pileovan\'io ihany','Naissance-1968',20,118,26,'','','unique'),('237N2003',237,'non','declaration','Harivololona','Rogea Justine','zazavavy','2003-03-28','22:00:00','Fonenantsoa Ambalavao','Naissance-2003',40,41,1,'','','unique'),('239N2005',239,'non','declaration','Rahaovalahy','Nirina Abel Pierson','zazalahy','2005-03-08','06:00:00','Tanambao  Avaramanda Ambalavao','Naissance-2005',290,287,4,'','','unique'),('242N1992',242,'non','declaration','Sitrakamarolahy','Rasoarinivo','zazavavy','1992-03-16','23:00:00','Ambohijafy Ambalavao','Naissance-1992',454,455,6,'','',''),('246N2000',246,'non','declaration','Andriamihaja','Miarisoa Florent Fidelys','zazalahy','2000-03-08','00:00:00','','Naissance-2000',461,462,50,'','',''),('249N2017',249,'non','declaration','Niriantsoa','Nasandratra Diamondra Thania','zazavavy','2017-03-20','00:45:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2017',304,305,9,'','','unique'),('24N1987',24,'oui','declaration','Razafindratoandro','Aimée','zazavavy','1987-01-13','10:00:00','amin\'ny trano fampiterahana Ambalavao','Naissance-1987',182,252,16,'','','unique'),('253N1994',253,'non','declaration','Ratahiry Njanahary','Herinjo','zazalahy','1994-04-02','04:00:00','Sahamasy Ambalavao','Naissance-1994',174,175,19,'','','unique'),('253N2001',253,'non','declaration','Rasoarimalala','Banjine Cendia','zazavavy','2001-03-29','02:30:00','Avaramanda Ambalavao','Naissance-2001',43,44,2,'','','unique'),('260N1969',260,'oui','declaration','Ramampiandra','Nomenjanahary Claude','zazalahy','1969-04-30','19:00:00','amin\'ny trano fampiterahana ao Ambalavao, vakim-pileovan\'io ihany','Naissance-1969',110,111,24,'','','unique'),('267N1991',267,'oui','declaration','Rasaholimanitraniaina','Marie Louisée','zazavavy','1991-03-29','16:00:00','Angodongodona Ambalavao','Naissance-1991',231,232,6,'','','unique'),('269N1964',269,'oui','declaration','Rasoanirina','Estelle','zazavavy','2011-04-02','13:00:00','Mandamako','Naissance-1964',20,47,4,'','','unique'),('269N2011',269,'oui','declaration','Rasoanirina','Estelle','zazavavy','2011-04-02','15:00:00','Mandamako','Naissance-2011',20,47,4,'','','unique'),('270N1965',270,'non','declaration','Vololoniaina','Aimée Albertine','zazavavy','1965-10-13','15:30:00','amin\'ny trano fampiterahana ao Ambalavao, vakim-pileovan\'io ihany','Naissance-1965',20,116,25,'','','unique'),('271N1993',271,'non','declaration','Randrianitiana','Jean Pascal','zazalahy','1993-03-31','22:00:00','Vondrondava Bemahalanja Ambalavao','Naissance-1993',72,73,8,'','','unique'),('277N1961',277,'oui','declaration','Ranaivoson','Louis de Gonzagues','zazalahy','1961-06-05','05:00:00','amin\'ny trano fiterahana ao Ambalavao','Naissance-1961',247,248,36,'','','unique'),('277N2001',277,'non','declaration','Tojoantenaina','Nirina Princy','zazalahy','2001-04-05','05:03:00','Atsinanamanda Ambalavao','Naissance-2001',136,137,2,'','','unique'),('280N1996',280,'oui','declaration','Valisoasarobidy','José Gabriel','zazalahy','1996-04-05','05:00:00','Ambohitsoa Ambalavao','Naissance-1996',322,323,2,'','',''),('297N1970',297,'non','declaration','Raharimanantena','Voahangy Marie Roberte','zazavavy','1970-05-10','06:00:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1970',381,382,23,'','','unique'),('301N1981',301,'oui','declaration','Randrianandrasana','Joseph Pascal','zazalahy','1981-04-16','13:55:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1981',182,254,20,'','','unique'),('314N2008',314,'non','declaration','Anjamalala','Zomenia Fafah Styvannie','zazavavy','2008-04-06','09:30:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2008',182,269,4,'','','unique'),('343N2006',343,'non','declaration','Rajaonarisoa','Dimbiniaina Abelino','zazalahy','2006-04-17','02:30:00','Ambalataretra Ambalavao','Naissance-2006',131,132,4,'','','unique'),('345N2001',345,'oui','declaration','Randriamihaja','Patrick','zazalahy','2001-04-30','22:55:00','Antsinanamanda Ambalavao','Naissance-2001',182,401,2,'','',''),('348N1961',348,'non','declaration','Ramanalina','Francine Pierrette','zazavavy','1961-07-14','20:00:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1961',347,348,52,'','','unique'),('349N1965',349,'oui','declaration','Ramanalina','Andrianirina Mahatoky','zazalahy','1965-07-07','00:30:00','amin\'ny trano fampiterahana Ambalavao','Naissance-1965',357,358,25,'','',''),('369N1996',369,'non','declaration','Rafaliniaina','Nicolas','zazalahy','1996-05-03','20:00:00','Tondrompo Ambalavao','Naissance-1996',298,299,2,'','','unique'),('383N1998',383,'oui','declaration','Razafimandimby','Jean Noël Maurice','zazalahy','1998-04-29','15:45:00','Ambohijafy Ambalavao','Naissance-1998',182,183,2,'','','unique'),('394N1967',394,'oui','declaration','Ramanalina','Mamisoa','zazavavy','1967-07-06','16:30:00','amin\'ny trano fampiterahana ao Ambalavao, vakim-pileovan\'io ihany','Naissance-1967',352,353,25,'','',''),('397N2017',397,'non','declaration','Andriamahasahy','Nomenafifaliana','zazalahy','2017-05-02','21:15:00','Avaramanda Ambalavao','Naissance-2017',266,267,9,'','','unique'),('425N1998',425,'non','declaration','Andriamaro','Zo Toavina','zazalahy','1998-05-11','08:10:00','Ankofika Ambalavao','Naissance-1998',279,280,2,'','','unique'),('426N1994',426,'non','declaration','Raboba','François','zazalahy','1994-05-14','21:00:00','amin','Naissance-1994',64,65,8,'','','unique'),('439N2003',439,'oui','declaration','Andriamialy','Hery Fanilo','zazalahy','2003-05-12','00:00:00','Avaramanda Ambalavao','Naissance-2003',182,418,1,'','','unique'),('446N1997',446,'non','declaration','Inambinindrazany','Donnacie Philibertine','zazavavy','1997-05-24','03:00:00','Avaratsena Ambalavao','Naissance-1997',276,277,2,'','','unique'),('474N2003',474,'oui','declaration','Niandrinomenjanahary','Nianjara Tina','zazavavy','2003-05-25','11:30:00','Ambohijafy Ambalavao','Naissance-2003',293,294,1,'','',''),('493N2021',493,'non','declaration','Ralovamanana','Mino Vatosoa','zazavavy','2021-05-18','19:25:00','amin\'ny Mté CHRD Ambalavao','Naissance-2021',422,423,3,'','',''),('496N2021',496,'non','declaration','Tianarisoa','Tojoniaiko','zazavavy','2021-05-16','18:30:00','Antanambao Ambalasoa Ezaka Ambalavao','Naissance-2021',451,452,3,'','','unique'),('49N2003',49,'non','declaration','Razafimamonjy','Sombiniana Patricia','zazavavy','2003-01-25','06:00:00','Mitsinjony Ambalavao','Naissance-2003',309,310,1,'','','unique'),('500N1998',500,'non','declaration','Manantenasoa','Jean Olivier','zazalahy','1998-05-28','03:30:00','Soaseranana Ambalalova avaratra Ambalavao','Naissance-1998',288,289,2,'','','unique'),('508N2021',508,'non','declaration','Ratanteliniaina','Sarobidy Nomenjanahary Henintsoa','zazavavy','2021-05-15','10:30:00','Andrefamanda Ambalavao','Naissance-2021',436,437,3,'','','unique'),('515N1995',515,'non','declaration','Rasoamizana','Lalao Marie Justine','zazavavy','1995-01-28','17:00:00',' amin\'ny trano fampiterahana ao Ambalavao','Naissance-1995',20,30,8,'','','unique'),('518N1995',518,'non','declaration','Razafindravao','Fanjanirina Ernestine','zazavavy','1995-05-10','18:20:00','Ambalavao','Naissance-1995',150,151,8,'','','unique'),('518N2021',518,'non','declaration','Raherivelomamonjy','Félixie','zazavavy','2021-05-19','22:20:00','Ambohitrandriana Ankofika Ambalavao','Naissance-2021',434,435,3,'','',''),('521N2021',521,'non','declaration','Herinirina','Antsaniaina','zazavavy','2021-05-24','00:30:00','Ankofika-Est Ankofika Ambalavao','Naissance-2021',439,440,3,'','','unique'),('522N2021',522,'non','declaration','Fifiantsoa','Stivanie Joliçia','zazavavy','2021-05-22','14:40:00','Tanambao Ambalasoa Ezaka Ambalavao','Naissance-2021',442,443,3,'','','unique'),('523N2021',523,'oui','declaration','Tojoniaina','Nomenjanahary Chantal','zazalahy','2021-05-18','07:30:00','Varindry Bemahalanja Ambalavao','Naissance-2021',182,445,3,'','',''),('524N1961',524,'non','declaration','Martin-Philibert','','zazalahy','1961-10-16','22:00:00','Andrefamanda Ambalavao','Naissance-1961',330,331,52,'','','unique'),('529N1988',529,'non','declaration','Veloarijaona','Zara Emmanuëlla','zazavavy','1988-05-01','23:25:00','Ambalavao','Naissance-1988',283,284,16,'','','Kambana II'),('544N2001',544,'non','declaration','Sitrakiniavo','Miadantsoa Perline','zazavavy','2001-07-03','21:00:00','Alatsinainy Ambalavao','Naissance-2001',300,301,2,'','','unique'),('549N1994',549,'non','declaration','Randriamalala','Rojo Nirina Jean Emile','zazalahy','1994-06-12','04:00:00','Ikita Ambalavao','Naissance-1994',413,414,8,'','','unique'),('559N2003',559,'non','declaration','Maminirintsoa','Cyrhia Nella','zazavavy','2003-05-08','02:30:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2003',27,28,1,'','','unique'),('564N1989',564,'oui','declaration','Andriamihaja','Rémi Christophe','zazalahy','1989-07-11','23:50:00','Ambalataretra','Naissance-1989',182,402,16,'','','unique'),('568N2003',568,'oui','declaration','Nekendrainy','Jean Noël','zazalahy','2003-05-14','02:30:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2003',182,291,1,'','',''),('571N2003',571,'oui','declaration','Rafalimanantsoa','Valimbavaka','zazavavy','2003-05-22','09:10:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2003',182,316,1,'','',''),('573N2001',573,'oui','declaration','Rakotoniaina','Manitrisoa Tanjona','zazalahy','2001-07-14','15:30:00','Ambohijafy Ambalavao','Naissance-2001',384,385,2,'','','unique'),('575N1974',575,'oui','declaration','Andriamarofara','François Jean Marcellin','zazalahy','1974-06-30','09:10:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1974',20,139,31,'','','unique'),('575N1996',575,'non','declaration','Razanabololona','Blandine','zazavavy','1996-07-07','02:00:00','Andohasakalava Ambalavao','Naissance-1996',416,417,2,'','',''),('622N1981',622,'non','declaration','Rasoamampionona','Frédeline Marie Mélanie','zazavavy','1981-08-07','16:00:00','Angodongodona Ambalavao','Naissance-1981',312,313,40,'','','unique'),('630N1994',630,'non','declaration','Mahasandratravo','Fanampitsoa','zazalahy','1994-06-18','07:00:00','Ambohijafy lot 3-E-34 bis Ambalavao','Naissance-1994',229,230,8,'','','unique'),('649N1987',649,'non','declaration','Ravolamalazaondra','Pierrette','zazavavy','1987-08-10','20:00:00','Andohasakalava Ambalavao','Naissance-1987',328,329,16,'','','unique'),('651N2006',651,'oui','declaration','Fanantenana','Sitrakiniaina Narindra Charlie','zazavavy','2006-07-26','02:30:00','Namongo Bemahalanja Ambalavao','Naissance-2006',20,38,4,'','','unique'),('655N2003',655,'non','declaration','Hanitriniaina','Indrafo Elisà','zazavavy','2003-07-06','21:00:00','Angodongodona  Maroparasy Ambalavao','Naissance-2003',94,95,1,'','','unique'),('678N1970',678,'oui','declaration','Rakotonirina','Jean Claude','zazalahy','1970-09-28','06:00:00','amin\'ny trano fampiterahana ao Ambalavao, vakim-pileovan\'io ihany','Naissance-1970',107,108,23,'','','unique'),('68N1987',68,'non','declaration','Randrianirina','Mandimbisoa Christophère','zazalahy','1987-01-27','10:30:00','Beravina Ambalavao','Naissance-1987',220,221,16,'','','unique'),('691N2001',691,'non','declaration','Randrianiaina','Romain','zazalahy','2001-07-16','15:00:00','Atsinanamanda Ambalavao','Naissance-2001',67,68,2,'','','unique'),('702N1994',702,'oui','declaration','Razanatsoa','Marie Olga','zazavavy','1994-07-05','21:15:00','Ankofika Ambalavao','Naissance-1994',307,308,8,'','',''),('716N1987',716,'non','declaration','Rakotozandry','Marie Christine','zazavavy','1987-08-26','21:30:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1987',447,448,16,'','','unique'),('71N1983',71,'oui','declaration','Razanamaholy','Rindra Mamy Tiana','zazavavy','1983-01-30','06:00:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1983',182,262,40,'','','unique'),('72N1961',72,'non','declaration','Fanomezantsoa','JeannotTafita Andy','zazavavy','2018-01-16','21:30:00','Antsinanamanda AM','Naissance-1961',182,182,1,'','',''),('72N2018',72,'non','declaration','Fanomezantsoa','Jeannot Tafita Andy','zazalahy','2018-01-16','21:30:00','Antsinanamanda Ambalavao','Naissance-2018',403,404,9,'','','unique'),('730N2000',730,'oui','declaration','Randriambololona ','Jean Francklin','zazalahy','2000-07-19','09:00:00','Ambohimahasoa Namongo Bemahalanja Ambalavao','Naissance-2000',182,379,2,'','',''),('731N2012',731,'non','declaration','Rasolofoarilala','Jinah Raymonde','zazavavy','2012-08-21','22:00:00','Ankidita-Nord Bemahalanja','Naissance-2012',102,103,4,'','','unique'),('74N2000',74,'non','declaration','Rasoanirina','Nomenjanahary Prisca','zazavavy','2000-01-21','14:30:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2000',256,257,2,'','','unique'),('74N2020',74,'non','declaration','Randrianasolo','Nomenjanahary Jean Balthazar','zazalahy','2020-01-19','10:45:00','amin\'ny CHRD Ambalavao','Naissance-2020',104,105,21,'','','unique'),('751N1988',751,'oui','declaration','Volamaharavo','Harilanto Martine Nesmy','zazavavy','1988-06-25','04:00:00','Soatanana-Sud Ambalavao','Naissance-1988',459,460,16,'','','unique'),('761N1995',761,'non','declaration','Randrianantenaina','Jeannot Henri','zazalahy','1995-07-22','05:00:00','Ambalatanimena Ambalavao','Naissance-1995',464,465,8,'','','unique'),('787N1969',787,'oui','declaration','Rasoanirina','Marcelline','zazavavy','1969-11-16','07:00:00','amin\'ny trano fampiterahana ao Ambalavao, vakim-pileovan\'io ihany','Naissance-1969',182,420,24,'','','unique'),('795N2003',795,'non','declaration','Faneva','Tantely Juliette','zazavavy','2003-07-27','05:00:00','Trano fampiterahana ao Ambalavao','Naissance-2003',140,141,1,'','','unique'),('800N1992',800,'non','declaration','Solotsimaniry','Noumé Herimanitra','zazavavy','1992-09-19','17:00:00','Avaratsena Ambalavao','Naissance-1992',120,121,8,'','','unique'),('801N1998',801,'non','declaration','Avinirina','Jimmy Celestor','zazalahy','1998-08-10','07:00:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1998',147,148,2,'','','unique'),('809N1974',809,'oui','declaration','Razafiarisoa','Céline','zazavavy','1974-09-05','14:20:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1974',20,143,31,'','','unique'),('826N1975',826,'oui','declaration','Rakotonirina','Alexandre','zazalahy','1975-08-21','13:00:00','Behasy Anosilava Ambalavao','Naissance-1975',182,314,31,'','',''),('835N1998',835,'non','declaration','Fenohoby','Nohasoavina Tahindraza Jackiella','zazalahy','1998-08-17','18:00:00','Ambohijafy Ambalavao','Naissance-1998',222,223,2,'','','unique'),('839N2001',839,'non','declaration','Tolojanahary','Ranjanantenaina Bieneture Herman','zazalahy','2001-09-30','02:00:00','Ambaibo FKT Tsaranoro Ambalavao','Naissance-2001',129,130,2,'','','unique'),('853N1997',853,'non','declaration','Razafiarison','José Kristy','zazalahy','1997-09-03','23:00:00','Ambohijafy Ambalavao','Naissance-1997',89,90,2,'','','unique'),('85N2003',85,'non','declaration','Fanomezantsoa','Jeannot Patrick','zazalahy','2003-02-03','07:45:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2003',20,92,1,'','','unique'),('873N2008',873,'oui','declaration','Tahirimalala','Marchelline Mélinà','zazavavy','2008-09-18','08:00:00','Androka Ambalavao','Naissance-2008',176,177,4,'','','unique'),('881N2003',881,'non','declaration','Randrianantenaina','Nasandratriniavo Chrystoph','zazalahy','2003-08-26','05:10:00','Ambohijafy ','Naissance-2003',208,209,1,'','','unique'),('882N1978',882,'oui','declaration','Rasoarimalala','Victoire Gabriéline','zazavavy','1978-08-17','17:00:00','Tanakorery Ambalavao','Naissance-1978',390,391,30,'','','unique'),('889N1999',889,'oui','declaration','Razafindrakoto','Harilala','zazalahy','1999-08-29','01:10:00','Ambohijafy Ambalavao','Naissance-1999',324,325,2,'','',''),('892N2017',892,'non','declaration','Andriamanankasy','Aïsha','zazavavy','2017-09-06','08:10:00','Andrefamanda Ezaka Ambalavao','Naissance-2017',34,35,9,'','','unique'),('904N1980',904,'oui','declaration','Razanajatovo','Stella Marcel','zazalahy','1980-10-13','15:15:00','Ambalavao','Naissance-1980',182,327,20,'','','unique'),('91N1987',91,'oui','declaration','Andrianantenaina','Olivier Emmanuël','zazalahy','1987-02-04','03:40:00','amin\'ny maternité Ambalavao','Naissance-1987',182,246,16,'','','unique'),('927N2003',927,'non','declaration','Volamanjava','Helisoa Ginette','zazavavy','2003-09-02','07:30:00','Atsinanamanda Ambalavao','Naissance-2003',259,260,1,'','','unique'),('92N1994',92,'non','declaration','Radama','Félix','zazalahy','1994-02-11','10:00:00','Ankondromalaza Ambalavao','Naissance-1994',211,212,8,'','','unique'),('930N1994',930,'non','declaration','Rasoanirina','Elsa Horthance','zazavavy','1994-08-28','14:50:00','Sahamasy Ambalavao','Naissance-1994',336,337,8,'','','unique'),('933N2015',933,'non','declaration','Tolojanahary','Soanandrasana Samuelie','zazavavy','2015-09-11','11:00:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2015',425,426,51,'','','unique'),('937N2002',937,'oui','declaration','Rasoazanany','Odette Justine','zazavavy','2002-06-01','08:00:00','Namongoi Bemahalanja Ambalavao','Naissance-2002',182,406,1,'','','unique'),('939N1991',939,'non','declaration','Fifaliana','Honoré Hezekia','zazalahy','1991-10-28','06:45:00','Ambohijafy Ambalavao','Naissance-1991',69,70,6,'','','unique'),('94N2004',94,'oui','declaration','Solofomiadana','Mampionona Fabrice','zazalahy','2004-02-06','22:00:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-2004',182,263,4,'','','unique'),('957N1994',957,'non','declaration','Raherison','Maharesy Bienvenu','zazalahy','1994-09-04','17:20:00','Ambarinakoho Ambalavao','Naissance-1994',355,356,8,'','',''),('966N1995',966,'non','declaration','Andrianomenjanahary','Lalaonirina','zazavavy','1995-09-27','20:30:00','Trano fampiterahana ao Ambalavao','Naissance-1995',144,145,8,'','','unique'),('968N2003',968,'oui','declaration','Sedratiana','Aina Bruno','zazalahy','2003-09-12','08:20:00','Andrefamanda Ambalavao','Naissance-2003',20,32,1,'','','unique'),('978N2002',978,'non','declaration','Salohiniaina','Aimée Christinà','zazavavy','2002-09-26','12:00:00','Ambanitsena Ambalavao','Naissance-2002',21,22,1,'','','unique'),('999N1986',999,'oui','declaration','Miarison','René Theophile','zazalahy','1986-11-24','14:15:00','amin\'ny trano fampiterahana ao Ambalavao','Naissance-1986',182,450,16,'','',''),('99N1995',99,'non','declaration','Rajaonarivelo','Rivo Mandaniaina','zazalahy','1995-01-22','23:10:00','Ambalasoa Ambalavao','Naissance-1995',296,297,8,'','','unique'),('N1961',0,'non','declaration','','','zazavavy','-00-00','00:00:00','','Naissance-1961',182,182,1,'','',''),('N1964',0,'non','declaration','','','zazavavy','-00-00','00:00:00','','Naissance-1964',20,20,1,'','','unique'),('N1995',0,'non','declaration','','','zazavavy','-00-00','00:00:00','','Naissance-1995',20,20,1,'','',''),('N1998',0,'non','declaration','','','zazavavy','-00-00','00:00:00','','Naissance-1998',20,20,1,'','','unique'),('N2003',0,'non','declaration','','','zazavavy','-00-00','00:00:00','','Naissance-2003',182,182,1,'','','');
/*!40000 ALTER TABLE `naissance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `naissance_jugement`
--

DROP TABLE IF EXISTS `naissance_jugement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `naissance_jugement` (
  `numJug` int(11) NOT NULL AUTO_INCREMENT,
  `numActeJug` int(11) DEFAULT NULL,
  `dateJug` date DEFAULT NULL,
  `numPers` int(11) DEFAULT NULL,
  PRIMARY KEY (`numJug`),
  CONSTRAINT `constJug` FOREIGN KEY (`numJug`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naissance_jugement`
--

LOCK TABLES `naissance_jugement` WRITE;
/*!40000 ALTER TABLE `naissance_jugement` DISABLE KEYS */;
INSERT INTO `naissance_jugement` VALUES (1,6,'2017-12-14',339),(4,6,'2017-12-14',339);
/*!40000 ALTER TABLE `naissance_jugement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `officier`
--

DROP TABLE IF EXISTS `officier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `officier` (
  `numOff` int(11) NOT NULL AUTO_INCREMENT,
  `nomOff` varchar(40) DEFAULT NULL,
  `prenomOff` varchar(50) DEFAULT NULL,
  `fonction` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`numOff`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `officier`
--

LOCK TABLES `officier` WRITE;
/*!40000 ALTER TABLE `officier` DISABLE KEYS */;
INSERT INTO `officier` VALUES (1,'Randrimampionona','Narcisse',''),(2,'Ravoajanahary','Gilbert',''),(3,'Randrianirina','Yves Georges','Ben\'ny tanana'),(4,'Andrianilana','Edmond',''),(6,'Ralaivao','Jeanmuël Andriamaro',''),(8,'Randriamampihaona','Paul',''),(9,'Razafindrabe ','Bien Aimé Patrick','Ben\'ny tanana'),(12,'Andriambolo ','Honoré',''),(16,'Tolojanahary ','Joseph Rafanoharana',''),(19,'Randriamampihaona','Paul',''),(20,'Rakotovao ','Raphaél',''),(21,'Razafimahatratra','Jean de Dieu Fils Noël Thibaut',''),(23,'Rakotoarivelo','Justin',''),(24,'Razafindralahatra ','Samoelison',''),(25,'Ratsimbazafy','Emmanuël',''),(26,'Razafindralahatra ','Samoelison',''),(29,'Andrianilana','Edmond',''),(30,'Randriatsaravola','Aléxis',''),(31,'Rakotondratsimba','Burleigh',''),(34,'Andriamosarisoa','Jean Anicet',''),(36,'Ratsimbazafy','Ramampy Daniel',''),(40,'Ratsimbazafy','Seraphin',''),(49,'Andriambolo ','Honoré','Ben\'ny tanàna lefitra faharoa'),(50,'Ravoajanahary ','Gilbert',''),(51,'Andrianilana','Edmond','Filohan\'ny Délégasiona manokana'),(52,'Ratsimbazafy','Ramampy Daniel','Lefitra voalohan\'ny Ben\'ny tanàna'),(53,'Razafindrakoto','Joseph',''),(54,'Razafindrabe','Samuël','');
/*!40000 ALTER TABLE `officier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `parentnaissance`
--

DROP TABLE IF EXISTS `parentnaissance`;
/*!50001 DROP VIEW IF EXISTS `parentnaissance`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `parentnaissance` (
  `numNaiss` tinyint NOT NULL,
  `nomMere` tinyint NOT NULL,
  `prenomMere` tinyint NOT NULL,
  `dateNaissMere` tinyint NOT NULL,
  `lieuNaissMere` tinyint NOT NULL,
  `adrMere` tinyint NOT NULL,
  `ageMere` tinyint NOT NULL,
  `profMere` tinyint NOT NULL,
  `vivPere` tinyint NOT NULL,
  `nomPere` tinyint NOT NULL,
  `prenomPere` tinyint NOT NULL,
  `dateNaissPere` tinyint NOT NULL,
  `lieuNaissPere` tinyint NOT NULL,
  `adrPere` tinyint NOT NULL,
  `agePere` tinyint NOT NULL,
  `profPere` tinyint NOT NULL,
  `vivMere` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `parents`
--

DROP TABLE IF EXISTS `parents`;
/*!50001 DROP VIEW IF EXISTS `parents`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `parents` (
  `numMere` tinyint NOT NULL,
  `numPere` tinyint NOT NULL,
  `nomMere` tinyint NOT NULL,
  `prenomMere` tinyint NOT NULL,
  `dateNaissMere` tinyint NOT NULL,
  `lieuNaissMere` tinyint NOT NULL,
  `adrMere` tinyint NOT NULL,
  `ageMere` tinyint NOT NULL,
  `profMere` tinyint NOT NULL,
  `vivMere` tinyint NOT NULL,
  `nomPere` tinyint NOT NULL,
  `prenomPere` tinyint NOT NULL,
  `dateNaissPere` tinyint NOT NULL,
  `lieuNaissPere` tinyint NOT NULL,
  `adrPere` tinyint NOT NULL,
  `agePere` tinyint NOT NULL,
  `profPere` tinyint NOT NULL,
  `vivPere` tinyint NOT NULL,
  `numEnfant` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `pere`
--

DROP TABLE IF EXISTS `pere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pere` (
  `numEnfant` int(11) DEFAULT NULL,
  `numPere` int(11) DEFAULT NULL,
  KEY `constPere1` (`numEnfant`),
  KEY `constPere2` (`numPere`),
  CONSTRAINT `constPere1` FOREIGN KEY (`numEnfant`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constPere2` FOREIGN KEY (`numPere`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pere`
--

LOCK TABLES `pere` WRITE;
/*!40000 ALTER TABLE `pere` DISABLE KEYS */;
INSERT INTO `pere` VALUES (3,3),(3,3),(9,10),(6,7),(9,13),(6,12),(51,20),(20,20),(57,58),(54,55),(77,20),(74,75),(84,85),(81,82),(155,20),(153,20),(169,20),(166,167),(188,189),(185,186),(195,196),(193,182),(203,204),(200,201),(237,182),(234,235),(342,343),(339,340),(365,366),(363,182),(374,375),(372,182),(396,397),(393,394),(430,182),(428,182);
/*!40000 ALTER TABLE `pere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne` (
  `numPers` int(11) NOT NULL AUTO_INCREMENT,
  `nomPers` varchar(50) DEFAULT NULL,
  `prenomPers` varchar(90) DEFAULT NULL,
  `dateNaissPers` varchar(10) DEFAULT NULL,
  `lieuNaissPers` varchar(90) DEFAULT NULL,
  `adressePers` varchar(70) DEFAULT NULL,
  `profPers` varchar(90) DEFAULT NULL,
  `vivant` varchar(3) DEFAULT NULL,
  `nationalite` varchar(15) DEFAULT NULL,
  `age` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`numPers`)
) ENGINE=InnoDB AUTO_INCREMENT=466 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` VALUES (1,'Razafinay','Nicolas Hervé','1973-07-14','Ambalamarina II','Ambalamarina II','mpamboly','oui','malagasy',0),(2,'Raherinomenjanahary','','1975-11-12','Ambalavao','Ambalamarina II','mpamboly','oui','malagasy',0),(3,'Rabemorasata','Alexandre','1972-04-05','amin\'ny trano fampiterahana ao Ambalavao','Ambalamahavelo 1 Teloambinifolo Ambalavao','mpamboly','oui','malagasy',0),(4,'Rasodivelo','Marie','1973-00-00','Vatofotsy Ambalavao','Vatofotsy','mpamboly','oui','malagasy',0),(5,'Razara','Fanomezantsoa Alphonse','1950-00-00','','Vatofotsy','Mpivaro-boakazo','oui','malagasy',0),(6,'Ravavisoa','Vonimboahirana Marie Claire','1986-08-15','Ambalamahavelo 1 Ambalavao','Ambaibo Tsaranoro Ambalavao','mpamboly','oui','Malagasy',0),(7,'Rasata','Benjamin','1954-00-00','Ambalamahavelo 1','Ambalamahavelo 1 Teloambinifolo Ambalavao','mpamboly','oui','malagasy',0),(8,'Razanadia','Marie Jeanne','1965-00-00','Ankijabe','Ambalamahavelo 1 Teloambinifolo Ambalavao','mpamboly','oui','malagasy',0),(9,'Rakamisy','Jean Arsène','1983-02-16','Soaseranana Ambalavao','Ambaibo Tsaranoro Ambalavao','mpamboly','oui','Malagasy',0),(10,'Ratombo ','Pierre','1934-00-00','Ambaibo','Ambaibo Tsaranoro Ambalavao','mpamboly','oui','malagasy',0),(11,'Ratsizafy ','Françoise','1945-00-00','Anjomà','Ambaibo Tsaranoro Ambalavao','mpamboly','oui','malagasy',0),(12,'Rasata','Benjamin','-00-00','Ambalamahavelo 1','Ambalamahavelo 1 Teloambinifolo Ambalavao','mpamboly','oui','malagasy',0),(13,'Ratombo','Pierre','1934-00-00','Ambaibo','Ambaibo Tsaranoro Ambalavao','mpamboly','oui','malagasy',0),(14,'Ratsizafy ','Françoise','1945-00-00','Anjomà','Ambaibo Tsaranoro  Ambalavao','mpamboly','oui','malagasy',0),(15,'Rakotomalala','Jean Louis Pierrot','1977-03-24','Ambalavao','Ambaibo Tsaranoro Ambalavao','mpamboly','oui','malagasy',0),(16,'Ratahirinjanahary','Herinjo','1994-04-02','Sahamasy Ambalavao','Sahamasy Ambalavao','mpianatra','oui','malagasy',0),(17,'Ialy','','1977-03-22','Andalatanosy','Tanambao Tsaramandroso','mpamboly','oui','malagasy',0),(18,'Rahaingovololona ','Olive Eliane','1984-02-12','Ambalavao','Tanambao Tsaramandroso','mbmboly','oui','malagasy',0),(19,'Raeliasinony ','Emilie','1948-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(20,'','','-00-00','','','','oui','malagasy',0),(21,'Randrianantenaina','Paul Christophe','1969-07-25','Fianarantsoa','Ambanitsena Ambalavao','Meteur de l\'entreprise','oui','malagasy',0),(22,'Razafindramanga','Saholinirina Aimée','1979-07-11','Ambalavao','Ambanitsena Ambalavao','ménagère','oui','malagasy',0),(23,'Raeliasinony ','Emilie Ursule','1948-00-00','Ambalavao','Ambalavao','mpampivelona','oui','malagasy',0),(24,'Andrianirina','Jean Emile','1975-06-09','Ambalavao','Ambalasoa ','maçon','oui','malagasy',0),(25,'Ranomenjanahary','Zafimanga Noëline','1986-01-10','Ambalavao','Ambalasoa ','ménagère','oui','malagasy',0),(26,'Rasoamanahirana ','Angeline Agathe','1934-00-00','Betroka','Atsinanamanda','Sage-femme en retraitée','oui','malagasy',0),(27,'Mamy','Arison Félicien','1983-09-27','Ambalavao','Sahamasy','mpivarotra','oui','malagasy',0),(28,'Rasoazanany','Andriantsoa Ony','1986-01-25','Kianjavato','Sahamasy','ménagère','oui','malagasy',0),(29,'Rasoarilina','Henriette','1950-01-12','Fandriana','','mpampivelona','oui','malagasy',0),(30,'Rasoamizana','Merline','1981-06-02','Ambalavao','Antsenanomby Ambalavao','mpivarotra','oui','malagasy',0),(31,'Faliarilanto','Rafanomezantsoa Danielle','1963-00-00','','','mpampivelona','oui','malagasy',0),(32,'Sambanihanitra','Hoby Natacha','1987-08-24','Ambalavao','Andrefamanda Ambalavao','mpanjaitra','oui','malagasy',0),(33,'Ramanantsoa','Eulalie','1937-02-11','','','Assistante de santé retraitée','oui','malagasy',0),(34,'Andry','Harijohn','1988-02-28','Antaninandro','Andrefamanda Ezaka Ambalavao','Photographe','oui','malagasy',0),(35,'Andriamihaja','Annick Jennifer','1992-01-23','Andrefamanda Ambalavao','Andrefamanda Ezaka Ambalavao','ménagère','oui','malagasy',0),(36,'Rasoanandrasana','Isabelle Odette','1957-02-20','Ambohimahasoa','Ambalasoa Ezaka Ambalavao','mpampivelona','oui','malagasy',0),(37,'Ravoavy','Michel','1953-03-11','Ambalavao','Andohasakalava','mpamboly','oui','malagasy',0),(38,'Rahasinarivo ','Haingo Marina Berthine','2006-12-10','Namongo','Namongo','mpamboly','oui','malagasy',0),(39,'Rakotozafy','Alexandre','1955-04-05','Ambalavao','','Chef fokontany','oui','malagasy',0),(40,'Andrianaivo','Lantoniaina Justin','1976-07-14','Ambalavao','Fonenantsoa','mpamboly','oui','malagasy',0),(41,'Rasoanirina','Alphonsine','1981-03-12','Anjomà','Fonenantsoa','mpamboly','oui','malagasy',0),(42,'Ramaly ','Anatolie','1953-07-08','Ambalavao','Ambalavao','mpamboly','oui','malagasy',0),(43,'Rahasandrainibe','Richard Fidélis','1975-08-13','Ambalavao','Anararoa','mpamboly','oui','malagasy',0),(44,'Rasoarimalala','Voahangy Marie Odette','1983-12-24','Anjomà','Anararoa','mpamboly','oui','malagasy',0),(45,'Rasoamanahirana','Angéline Agathe','1934-11-03','Betroka','Atsinanamanda','Sage femme','oui','malagasy',0),(46,'Rabotovao ','François Marcel','1963-05-18','Ambalavao','Alatsinainy Ambalavao','Personnel CUA Ambalavao','oui','malagasy',0),(47,'Rasoanandrasana','Berthine','1996-08-13','Ambalavao','Mandamako','mpamboly','oui','malagasy',0),(48,'Rasolo','Andrianony','1955-12-13','Ambalavao','','Adjoint fokontany','oui','malagasy',0),(49,'Ranjarasoa','Nomenjanahary Claudine','1985-05-12','Besoa','Masombahoaka Antako Besoa','mpamboly','oui','malagasy',0),(50,'Rakotozafy','Jean Baptiste','1954-00-00','Fenoarivo Ambalavao','Masombahoaka Besoa','mpamboly','oui','malagasy',0),(51,'Randrianitiana','Jean Pierre','-00-00','Vondrondava Bemahalanja Ambalavao','','mpamboly','oui','Malagasy',0),(52,'Rakotozafy ','Jean Baptiste','1954-00-00','Fenoarivo','Sahamasy','mpamboly','oui','malagasy',0),(53,'Ramoma','Marie','1958-00-00','Ikalaomba','Sahamasy','','oui','malagasy',0),(54,'Rasoanandrasana','Berthine','1996-08-13',' amin\'ny trano fampiterana ao Ambalavao ','Vondrondava Bemahalanja Ambalavao','mpamboly','oui','Malagasy',0),(55,'Ravaoavy ','Pierre','-00-00','','','','non','malagasy',0),(56,'Ramija','Rasoanandrasana','1965-06-13','amin\'ny trano fampiterahana ao Ambalavao','Mandamako Bemahalanja Ambalavao','mpamboly','oui','malagasy',0),(57,'Randrianitiana','Jean Pascal','1993-04-01','Vondrondava Bemahalanja Ambalavao','Vondrondava Bemahalanja Ambalavao','mpamboly','oui','Malagasy',0),(58,'Rady','Jean Pierre','1968-00-00','Vondrondava','Vondrondava Bemahalanja Ambalavao','mpamboly','oui','malagasy',0),(59,'Rasoamanantena','Rosalie','1973-00-00','Vondrondava','Vondrondava Bemahalanja Ambalavao','mpamboly','oui','malagasy',0),(60,'Ratsiafa','Jean Freddy','1979-05-10','Ambalavao','Vondrondava Bemahalanja Ambalavao','mpamboly','oui','malagasy',0),(61,'Andriniaina','Jean Claude','1983-10-04','amin\'ny trano fampiterahana ao Miarinarivo Ambinanindovoka  Ambalavao','Mandamako Bemahalanja Ambalavao','mpamboly','oui','malagasy',0),(62,'Rasolofoson','François','1910-00-00','','Antsenanomby Ambalavao','mpamboly','oui','malagasy',0),(63,'Ravoavy','Michel','1950-00-00','','Andohasakalava Ambalavao','mpamboly','oui','malagasy',0),(64,'Ramanantsoa','Jérôme','1972-00-00','Ambalavao','Maroparasy','mpamboly','oui','malagasy',0),(65,'Ravaoarisoa','Noëline','1973-00-00','Ambalavao','Maroparasy','mpamboly','oui','malagasy',0),(66,'Faliarilanto','Rafanomezantsoa Danielle','1963-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(67,'','','1972-00-00','Andemaka Vohipeno','Atsinanamanda','mpiasan','oui','malagasy',0),(68,'Razafimamy','Bernadette','1975-11-24','Vohimarina Ambalavao','Atsinanamanda','mpanjaitra','oui','malagasy',0),(69,'Rakotondrasoa','Berthina Honoré','1963-05-27','Andranovorivato','Ambohijafy','mpamboly','oui','malagasy',0),(70,'Ravaoarisoa','Viviane Voahirana','1971-03-05','Ambalavao','Ambohijafy','ménagère','oui','malagasy',0),(71,'Ravololoniaina','Joséphine','1939-00-00','','Ambalavao','Assistante de santé ','oui','malagasy',0),(72,'Rady','Jean Pierre','1968-00-00','Vondrondava','Vondrondava Ambalavao','mpamboly','oui','malagasy',0),(73,'Rasoanantenaina','Rosalie','1973-00-00','Vondrondava','Vondrondava Ambalavao','mpandrary','oui','malagasy',0),(74,'Andrianirija','Kanto Miora Ny Avo','2003-12-31','amin\'ny trano fampiterahana ao Antaboaka Arivonimamo 2','Ambohitrandriana Ambalavao','Etudiante','oui','Malagasy',0),(75,'Ravalison','Mamonjisoa  Andrianiaina','1972-12-29','Befelatanana ','Ambohitrandriana Ambalavao','Pasteur','oui','malagasy',0),(76,'Rijarimanantsoa','Mina Olina','1974-07-17','Antsirabe','Ambohitrandriana Ambalavao','Infirmière','oui','malagasy',0),(77,'Avotriniaina','Andrianaivo ','2002-01-08','amin\'ny Centre de Santé de base 2 Tsitondroina','Ambohitsoa Ambalavao','Etudiant','oui','Malagasy',0),(78,'Voahiraniaina','Violette','1968-10-22','Fianarantsoa','Tsitondroina','mpamboly','oui','malagasy',0),(79,'Voahanginirina Hanitriniaina','Charlotte Aimée','1988-09-07','Ambohitrandriana Ambalavao','Ambohitrandriana Ambalavao','mpivarotra','oui','malagasy',0),(80,'Andriamparany','Tsiory Henintsoa','1988-04-22','Avaramanda Ambalavao','Ambalakajaha-Est Ambalavao','Consultant Individuel','oui','malagasy',0),(81,'Rakotomalala','Tsihosena Odile','1988-12-22','amin\'ny trano fampivelomana ao Sendrisoa','Ambalataretra Ambalavao','Evangelistra','oui','Malagasy',0),(82,'Rakotomalala','Jocelyn Martial','-00-00','','','','non','malagasy',0),(83,'Ralalarizaka','Jeanne Clairodine','1957-00-00','Manampatrana','Sendrisoa','mpivarotra','oui','malagasy',0),(84,'Tolotra','Mamitiana Joëla Fandresena','2000-01-08','amin\'ny trano fampivelomana Ankaramena','Sahamasy Ambalavao','mpivarotra','oui','Malagasy',0),(85,'Lemirova','Yves Tafety','1964-00-00','Manapatrana','Sahamasy  Ambalavao','mpanjaitra','oui','malagasy',0),(86,'Ramarovavy','Delphine','1966-00-00','Sahasinaka','Sahamasy  Ambalavao','mpampianatra','oui','malagasy',0),(87,'Ramaroson','Niriniaina Léonce','1992-02-16','sahamasy Ambalavao','Sahamasy Ambalavao','mpandrafitra','oui','malagasy',0),(88,'Razafimalala','Angeline Marie Jeannine','1973-02-10','trano fampiterahana ao Anjomà Ambalavao','Ankofika Ambalavao','mpamboly','oui','malagasy',0),(89,'Razafiarison','José Kly','1962-00-00','Ambalavao','Ambohijafy','mpamboly','oui','malagasy',0),(90,'Ianitrarivelo','Marie Eugènie','1966-00-00','Ambalavao','Ambohijafy','ménagère','oui','malagasy',0),(91,'Rasoanirina','Germaine','1950-06-27','','Ambalavao','mpampivelona','oui','malagasy',0),(92,'Razafindraibe','Hobiniaina','1986-06-11','Ambalavao','Sahamasy Ambalavao','','oui','malagasy',0),(93,'Faliarilanto','Rafanomezantsoa Danielle','1963-12-08','Ambohitromby','','mpampivelona','oui','malagasy',0),(94,'Andrianarison','Solofoniaina Jean Didier','1974-00-00','','Talatamaty Antananarivo','Gendarme Stagiaire','oui','malagasy',0),(95,'Rahanitramamy','Isabelle','1978-00-00','Ambalavao','Talatamaty Antananarivo','ménagère','oui','malagasy',0),(96,'Rakotoarisoa','Gilbert','1955-00-00','Ambatondrazaka','','mpamboly','oui','malagasy',0),(97,'Raveloarison','Odon Fidèle','1965-01-23','Ambalavao','Ambinany Vondrokely Ambalavao','mpamboly','oui','malagasy',0),(98,'Razanantsoa','Cécile','1966-06-01','Ambalavao','Ambinany Vondrokely Ambalavao','','oui','malagasy',0),(99,'Ranaivoson','Martin Alfred','1950-05-17','Ambalavao','Ampanaovantsavony','mpamboly','oui','malagasy',0),(100,'Ravololonarisoa','Madel de Pazzy','1957-09-22','Bekily','Ampanaovantsavony','','oui','malagasy',0),(101,'Razanabao','Tertiare Ernestine','1949-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(102,'Razafindravaha','Solofoniaina Emmanuël','1988-09-07','Ambalavao','Ankidita-Nord','mpamboly','oui','malagasy',0),(103,'Rasoarilalao','Julia Armandine','1991-08-25','Iarintsena','Ankidita-Nord','mpamboly','oui','malagasy',0),(104,'Rasolondraibe','Fanomezantsoa Jean de Dieu','1990-12-19','Fanjakana','Ambalamarina','mpamboly','oui','malagasy',0),(105,'Rasoafaranomenjanahary','Marie Rosine','1998-03-10','Andranomiditra','Ambalamarina','mpandary','oui','malagasy',0),(106,'Hasinarivony','Lucia Samuelle','1991-07-19','Ambinanindovoka','Alatsinainy Ambalavao','mpampivelona','oui','malagasy',0),(107,'Ramampiandra','','1948-06-07','Anosilava','Ambohijafy','mpamily fiarakodia','oui','malagasy',0),(108,'Rasoanirina','Georgette','1950-05-12','Ambalavao','Ambohijafy','','oui','malagasy',0),(109,'Razanatsoa','Noëline','1933-00-00','Fianarantsoa','Ambalavao','mpampivelona','oui','malagasy',0),(110,'Ramampiandra','Clovis','1948-00-00','Anosilava, vakim-pileovan\'Ambalavao','Ambohijafy, vakim-pileovan\'Ambalavao','mpanampy ny mpamily fiarakodia','oui','malagasy',0),(111,'Rasoanirina','Georgette','1951-00-00','Ambalavao','Ambohijafy','','oui','malagasy',0),(112,'Razanatsoa','Noëline','1933-00-00','Fianarantsoa','Ambalavao','mpampivelona','oui','malagasy',0),(113,'Ravaomalala','Aimée Arsène','1942-00-00','Ambalavao','Atsimotsena, vakim-pileovan\'Ambalavao','mpanjaitra','oui','malagasy',0),(114,'Ravaonirina','Louise','1929-00-00','','','mpanampin\'ny mpampivelona','oui','malagasy',0),(115,'','','1929-00-00','','monina ao Ambalavao','','oui','malagasy',0),(116,'Rasoamalala','Aimée','1942-00-00','Ambalavao,vakim-pileovan\'io ihany','Alatsinainy, vakim-pileovan\'Ambalavao','mpanjaitra','oui','malagasy',0),(117,'Razanajafy','Justine','1910-00-00','Atsinanan\'i Vinany, vakim-pileovan\'Ambositra','Ambalavao','mpampivelona','oui','malagasy',0),(118,'Rasoamalala','Aimée','1942-00-00','Ambohibary, faribohitr\'io ihany','Antsimontsena, vakim-pileovan\'Ambalavao','mpanjaitra','oui','malagasy',0),(119,'Raharivelo','Mariette','1934-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(120,'Rasolohery','Roger Andriamihaja','1955-08-19','Antananarivo','Avaratsena','Dokotera','oui','malagasy',0),(121,'Rasoanandrasana','Janine ','1955-08-31','Fianarantsoa','Avaratsena','Dokotera','oui','malagasy',0),(122,'Ramora','Justin','1961-11-17','Ambalavao','Tanambao Bemahalanja ','mpamboly','oui','malagasy',0),(123,'Rampimalazamanga','Justine','1967-00-00','Ivahy Ambohimandroso','Tanambao Bemahalanja ','mpamboly','oui','malagasy',0),(124,'Rakotonanahary','Guy Jean Michel','1965-01-30','Ambalavao','Atsinanamanda Ambalavao','mpampianatra \" privé\"','oui','malagasy',0),(125,'Rahaingotiana','Bakoly Myriame','1977-07-27','Andranovorivato','Atsinanamanda Ambalavao','mpandrary','oui','malagasy',0),(126,'Rasoamanahirana ','Angeline Agathe','1934-00-00','','Atsinanamanda','mpampivelona misotro ronono','oui','malagasy',0),(127,'Razainjafy','Jules Vincent','1953-00-00','Fianarantsoa','Avaratsena Ambalavao','maçon','oui','malagasy',0),(128,'Raketsa','Victoire','1962-00-00','Fianarantsoa','Avaratsena Ambalavao','mpanjaitra','oui','malagasy',0),(129,'Randrianantenaina','Jean Fidel','1978-06-30','Ambalavao','Ambaibo','mpamboly','oui','malagasy',0),(130,'Rafanomenjanahary ','Gertrude Violette','1980-00-00','Soaseranana Ambalavao','Ambaibo','mpamboly','oui','malagasy',0),(131,'Zafinirinarimanga','Jaonarisoa Abel','1972-09-10','Fort-Dauphin','Ambatolampy','Gendarme','oui','malagasy',0),(132,'Razafindravolanandrasana','Marie Eugénie','1972-12-08','Nosy-Varika','Ambatolampy','mpampianatra','oui','malagasy',0),(133,'Rasoamanahirana ','Angeline Agathe','1934-11-03','Betroka','','mpampivelona','oui','malagasy',0),(134,'Ravaoarisoa','Martine','1938-00-00','Ambalavao','Angodongodona','mpamboly','oui','malagasy',0),(135,'Rasoarimanga','Florentine','1932-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(136,'Razafinimanana','Nirina Roger','1978-06-14','amin\'ny trano fampiterahana ao Ambalavao','Atsinanamanda','mpivarotra','oui','malagasy',0),(137,'Ralisaniaina','Dida Arimalala','1978-07-10','amin\'ny trano fampiterahana ao Fianarantsoa','Atsinanamanda','mpivarotra','oui','malagasy',0),(138,'Rasoamanahirana ','Angeline Agathe','1934-00-00','Betroka','Atsinanamanda','Sage-femme','oui','malagasy',0),(139,'Razanamanga','Martine','1955-06-12','Antavy, faribohitr\'i Iarintsena','Antokodambo Iarintsena','mpamboly','oui','malagasy',0),(140,'Rabemananjara','Joseph Tantely Lalason','1964-02-21','Ihosy','Ambohitsoa','mpiasan\'ny Kaominina Ambalavao','oui','malagasy',0),(141,'Nivonomenjanahary  ','Ignace Thorène Elisabeth','1975-09-04','Mananjary','Ambohitsoa','ménagère','oui','malagasy',0),(142,'Faliarilanto','Rafanomezantsoa Danielle','1963-12-08','Ambohimandry','','mpampivelona','oui','malagasy',0),(143,'Rampizaivola','Martine','1936-00-00','Farihilava Iarintsena','Ambohiborona, faribohitr\'Iarintsena','mpamboly','oui','malagasy',0),(144,'Raherinirina','Dieu Donné','1962-01-27','Ihosy','Ambohijafy Ambalavao','mpamboly','oui','malagasy',0),(145,'Nomenjanahary','Lalao Lydia','1970-05-14','Antananarivo','Ambohijafy Ambalavao','mpamboly','oui','malagasy',0),(146,'Faliarilanto','Rfanomezantsoa Danielle','1963-00-00','Ambalavao','Ambalavao','mpampivelona','oui','malagasy',0),(147,'Andriamarofara','François Jean Marcellin','1974-06-30','Ambalavao','Antavy Iarintsena Ambalavao','mpamboly','oui','malagasy',0),(148,'Razafiarisoa','Céline','1974-09-05','Ambalavao','Antavy Iarintsena Ambalavao','mpamboly','oui','malagasy',0),(149,'Ramavomalalarosoa','Valentine','1951-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(150,'Randriamitondrasoa','Hoanirainy François','1968-08-28','Ambalavao','Mahavanona Iarintsena Ambalavao','mpamboly','oui','malagasy',0),(151,'Razafiampivola','Ernestine','1971-11-22','Ambalavao','Mahavanona Iarintsena Ambalavao','mpamboly','oui','malagasy',0),(152,'Razafimandimby','Arsene Marcel','1988-07-09','Ambalavao','Avaratsena Atsinanamanda Ambalavao','mpivarotra','oui','malagasy',0),(153,'Razafiarisoa','Céline','1974-09-05','amin\'ny trano fampiterahana ao Ambalavao','Antavy Iarintsena ','mpamboly','oui','Malagasy',0),(154,'Rampizaivola','Martine','1936-00-00','Farihilava Iarintsena','Ambohiborona Iarintsena','mpamboly','oui','malagasy',0),(155,'Andriamarofara','François Jean Marcellin','1974-06-30','amin\'ny trano fampiterahana ao Ambalavao','Antavy Lalangina Iarintsena','mpamboly','oui','Malagasy',0),(156,'Razanamanga','Martine','1955-06-12','Antavy Iarintsena','Antavy Iarintsena','mpamboly','oui','malagasy',0),(157,'Andriatianafara','Joachin Hervé','1988-02-20','Ambalavao','Antavy Iarintsena','mpampianatra','oui','malagasy',0),(158,'Saholy','Noëline','1966-03-14','Anorimbato','Ambohijafy Ambalavao','mpamboly','oui','malagasy',0),(159,'Razafindravony','Alisoa Clarisse','1980-10-07','Ambalavao','Andrefamanda Ambalavao','ménagère','oui','malagasy',0),(160,'Ranohasa','Richard','1947-03-02','Ambalavao','Avaramanda Ambalavao','mpampianatra','oui','malagasy',0),(161,'Ravao','Martine Razanajaza','1951-11-10','Mahasoabe Fianarantsoa 2','Avaramanda Ambalavao','mpampianatra','oui','malagasy',0),(162,'Ramanantsoa','Eulalie','1937-00-00','','Ambalavao','Assistante de santé ','oui','malagasy',0),(163,'Randriamampionona','Mandimbisolaza Jules','1962-07-21','Andranovorivato','Ambalamanga Soamanandray Ambalavao','mpamboly','oui','malagasy',0),(164,'Rasoanirina','Bernadette','1972-00-00','Talata Ampano','Ambalamanga Soamanandray Ambalavao','','oui','malagasy',0),(165,'Rakotozafy ','Barijaona','1936-00-00','','Ambalamanga','mpamboly','oui','malagasy',0),(166,'Rahavamamy','Fanilo Meltine','1986-03-17','Ambaibo 1','Antavy Lalangina  Iarintsena ','mpamboly','oui','Malagasy',0),(167,'Rakoto','Daniel','1943-00-00','Ambaibo 1','Ambaibo Anjomà','mpamboly','oui','malagasy',0),(168,'Rabozy','','-00-00','','','','non','malagasy',0),(169,'Tolojara','Nomenjanahary Jean Julien','1982-02-14','amin\'ny trano fampiterahana ao Ambalavao','Antavy Lalangina Iarintsena','mpamboly','oui','Malagasy',0),(170,'Razanamanga','Martine','1955-00-00','Antavy','Antavy Lalangina Iarintsena','mpamboly','oui','malagasy',0),(171,'Randriampanahinony','Samuëlson Edouard','1968-08-25','Amà','Masimbao Iarintsena','mpamboly','oui','malagasy',0),(172,'Andrianandrasana','Honoré','1976-06-04','Ambalavao','Tambohonapapa Vatofotsy','mpamboly','oui','malagasy',0),(173,'Rakotozafy ','Ignace ','1953-03-04','Sonjosoa-Est','','Gendarme misotro ronono','oui','malagasy',0),(174,'Randrianasolo','Frederic','1971-12-25','Ambalavao','Ambohimandroso','mpamboly','oui','malagasy',0),(175,'Ravololoniaina','Solange','1971-09-13','Ambalavao','Ambohimandroso','ménagère','oui','malagasy',0),(176,'Velo','Martial','1947-03-15','Mahabako','Androka Ambalavao','mpamboly','oui','malagasy',0),(177,'Razanamahasoa','Berthine Justine','1975-05-06','Ambalavao','Androka Ambalavao','mpamboly','oui','malagasy',0),(178,'Rafanomezanjanahary','Honoré Florent','1965-11-21','Alakamisy Itenina','','Chef Fokontany','oui','malagasy',0),(179,'Randrianasolo','Noël Fredéric','1971-12-22','Ambalavao','CSB2','Gardien CSB2','oui','malagasy',0),(180,'Ravololoniaina','Solange','1971-00-00','Ambalavao','CSB2','ménagère','oui','malagasy',0),(181,'Rasoambary','Marjaona Liliane','1980-06-02','Ihosy','','mpampivelona','oui','malagasy',0),(182,'Rakotozafy ','Gilbert','1958-00-00','','Malalia','mpamboly','oui','malagasy',0),(183,'Razafindrakoto','Noëlla','1981-02-14','Avaratsena Ambalavao','Ambohijafy','mpamboly','oui','malagasy',0),(184,'Razanamandimby','Zénaïde','1955-05-15','','Ambohijafy Ambalavao','mpampianatra','oui','malagasy',0),(185,'Raheliarilanto','Martine','1985-10-11','Antsenanomby Ambalavao','Tsaramandroso Antsenanomby Ambalavao','ménagère','oui','Malagasy',0),(186,'Randrianasolo','Joseph Arson','-00-00','','','','non','malagasy',0),(187,'Razafindramanana','','1959-02-03','Ampitatafika Antanifotsy','Antsenanomby Ambalavao','ménagère','oui','malagasy',0),(188,'Alison','Julien Joseph','1987-10-20','Tsaramandroso Ambalavao','Tsaramandroso Antsenanomby Ambalavao','mpamboly','oui','Malagasy',0),(189,'Alimana','Gilbert','1940-00-00','Ambasy','Tsaramandroso Antsenanomby Ambalavao','mpamboly','oui','malagasy',0),(190,'Razanatsoa','Marie Joseph','-00-00','','','','non','malagasy',0),(191,'Thomas','Gilbert','1951-12-03','Tsaramandroso  Ambalavao','Tanambao Antsenanomby Ambalavao','retraité','oui','malagasy',0),(192,'Razafimanantsoa','Hanitriniaina','1984-03-06','Antsenanomby Ambalavao','Antsenanomby Ambalavao','mpanjaitra','oui','malagasy',0),(193,'Dina Heriniaina','Famonjena Lova Tahina','1994-09-04','Ankofafa Ambony Fianarantsoa','Ankofafa Fianarantsoa','mpampianatra','oui','Malagasy',0),(194,'Saholiarihanta','Norotiana','1973-11-10','Alakamisy Ambohimaha','Ankofafa Ambony Fianarantsoa','mpampianatra','oui','malagasy',0),(195,'Fifaliana','Honoré Hezekia','1991-10-28','Ambohijafy Ambalavao','Ambalataretra Ambalavao','Etudiant','oui','Malagasy',0),(196,'Rakotondrasoa ','Berthina Honoré','1963-05-27','Andranovorivato','Andranovorivato','mpamboly','oui','malagasy',0),(197,'Ravaoarisoa','Viviane Voahirana','1971-03-05','Ambalavao','Andranovorivato','ménagère','oui','malagasy',0),(198,'Rasendrasoa','Juliette','1961-03-08','Vohipeno Ambohimahasoa','Sahamasy Ambalavao','Pasteur','oui','malagasy',0),(199,'Randrianalisoa','Tovosolo Onjaniaina','1977-05-30','Ambodin\'Isotry Antananarivo','Antsahavony Fianarantsoa','Ingenieur Informaticien','oui','malagasy',0),(200,'Lalaonandrasana','Soloniaina Abeline Odette','1980-12-28','Fianarantsoa','Ankaramena','ménagère','oui','Malagasy',0),(201,'Rakotondrasoa','Solonjatovo','1952-08-09','Antsirabe','Ankaramena','mpivarotra','oui','malagasy',0),(202,'Lalaonandrasana','Isabelle Odette','1958-07-14','Ambinaniroa Toby Ankaramena','Ankaramena','mpivarotra','oui','malagasy',0),(203,'Rakotomandimby','Andrianiaina Elson','1977-12-06','Ambalamahalova Iarintsena','Sahamasy Ambalavao','Chauffeur','oui','Malagasy',0),(204,'Rakotomavo','Edson','1932-00-00','Kelisatrana Ambalavao','Ambalakajaha Andrefana Ambalavao','chauffeur','oui','malagasy',0),(205,'Ravaoarinelina','Esther Ramanganirina','1953-05-17','Ambalamahalova','Lalangina Iarintsena','mpitsabo mpanampy','oui','malagasy',0),(206,'Randrianasolo','Louis Claude','1962-05-08','Soanierana Antananarivo','Ambohimandroso','Adjoint d\'Administration','oui','malagasy',0),(207,'Harisoamalala','Eléonore Olivier','1966-02-14','Ambohimandroso','Ankaramena','ménagère','oui','malagasy',0),(208,'Randrianantenaina','Jean  Chrysostum','1970-02-26','Fianarantsoa','Ambohijafy','mpivarotra','oui','malagasy',0),(209,'Soloaritiana','Jeanne Fidéline','1981-08-29','Farafangana','Ambohijafy','mpivarotra','oui','malagasy',0),(210,'Ravololoniaina','Joséphine','1939-03-14','Ambositra','','Assistante de santé retraitée','oui','malagasy',0),(211,'Ra-Dolphe','François','1966-00-00','Anorimbato','Anorimbato Iarintsena','mpamboly','oui','malagasy',0),(212,'Rajoma','Justine','1968-00-00','Tambohobe Iarintsena','Anorimbato Iarintsena','mpandrary','oui','malagasy',0),(213,'Ramasimahavola','Philibert','1974-10-25','Ambalavao','Ambalamafana Ambalavao','maçon','oui','malagasy',0),(214,'Rahasinanantenaina','Oliva','1981-11-01','Mahazony','Ambalamafana Ambalavao','ménagère','oui','malagasy',0),(215,'Rafanomezana','Emilson','1946-00-00','Bezaha','Ambohitsoa','mpamboly','oui','malagasy',0),(216,'Randrianandrasana','Jean  Baptiste','1972-00-00','Ambalavao','Manarinony Iarintsena','mpamboly','oui','malagasy',0),(217,'Rasoanandrasana','Marie Clotilde','1966-00-00','Alakamisy Itenina','Manarinony Iarintsena','mpandary','oui','malagasy',0),(219,'Ratsija','','-00-00','','','','oui','malagasy',0),(220,'Randriamanantsoa','Gilbert','1961-11-07','Ambalavao','Beravina Ambalamahasoa-Sud','mpamboly','oui','malagasy',0),(221,'Ratsija','Martine','1967-11-02','Ambalavao','Beravina Ambalamahasoa-Sud','','oui','malagasy',0),(222,'Ratovonirina','Jean','1957-05-06','Fianarantsoa','Ambohijafy Avaratra Ambalavao','mpivarotra','oui','malagasy',0),(223,'Razafitsoa','Eléonore','1957-08-05','Ambovombe','Ambohijafy Avaratra Ambalavao','mpampianatra','oui','malagasy',0),(224,'Rakajy','Philomène','1930-00-00','','Sahamasy','mpamboly','oui','malagasy',0),(225,'Ratovonirina','Jean','1957-05-06','Fianarantsoa','Mandrabary Iarintsena','mpamboly','oui','malagasy',0),(226,'Razafitsoa','Eléonore','1957-08-05','Ambovombe Androy','Mandrabary Iarintsena','mpampianatra','oui','malagasy',0),(227,'Razafisoa','Eléonore','1957-00-00','Ambovombe Androy','Ambohijafy','','oui','malagasy',0),(228,'Ranorondramasy','Marcelline','1947-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(229,'Ratovonirina','Jean','1957-05-06','Fianarantsoa','Ambohijafy','mpivarotra','oui','malagasy',0),(230,'Razafitsoa','Eléonore','1957-08-05','Ambovombe Androy','Ambohijafy','mpampianatra','oui','malagasy',0),(231,'Randriamampitsiry','Joseph','1946-00-00','Soanataondray Ambalavao','Angodongodona','mpamboly','oui','malagasy',0),(232,'Ravaoarimavo','Pauline','1953-00-00','Talata Ampano','Angodongodona','mpamboly','oui','malagasy',0),(233,'Randriamampitsiry','Joseph','1946-00-00','','Soanataondray','mpamboly','oui','malagasy',0),(234,'Ravololoniaina','Marie Anne','1986-12-23','Sahamasy Ambalavao','Fiadanana Besoa','mpamboly','oui','Malagasy',0),(235,'Rakotozafy ','Jean Baptiste','1954-00-00','Fenoarivo','Masombahoaka Besoa','mpamboly','oui','malagasy',0),(236,'Ramoma','Marie','1958-00-00','Ikalaomba','Masombahoaka Besoa','mpamboly','oui','malagasy',0),(237,'Ramandimbisoa','Pascal Justin','1985-02-22','amin\'ny Tobim-pahasalamana Besoa','Fiadanana Besoa','mpamboly','oui','Malagasy',0),(238,'Rakajy','Marcelline','-00-00','','','','non','malagasy',0),(239,'Laivelo','Martial','1953-12-05','Ankaramena Ambalavao','Ambohimahasoa Besoa','Pasteur','oui','malagasy',0),(240,'Raherivonjy','Jean Xavier','1980-08-03','Ankotsobe Besoa','Ambalatsihomehy Besoa','mpamboly','oui','malagasy',0),(241,'Ramisarivo','Eric Michel','1972-06-27','Fianarantsoa','Sahamasy lot 2A-103','mpivarotra','oui','malagasy',0),(242,'Ravoniarisoa','Charlisse Philiberthine','1976-04-16','Fandriana','Sahamasy lot 2A-103','ménagère','oui','malagasy',0),(243,'Ratsarazafy','Valala','1950-12-27','Tomanga Ambalavao','Tomanga','mpamboly','oui','malagasy',0),(244,'Velonandro','Martine','1964-12-30','Ambalamarina dit Tamekoarivo','Tomanga Maroparasy Ambalavao','mpamboly','oui','malagasy',0),(245,'Rafanomezantsoa','Jean Chrysostome','1972-05-28','amin\'ny Mté Manamisoa','Soafierena Manamisoa','mpamboly','oui','malagasy',0),(246,'Voahiraniaina','Pierrette Isabelle','1969-09-01','Ambalavao','Amparihifotsy','mpandrary','oui','malagasy',0),(247,'Ranaivo','Jerôme','-00-00','Ankazofady Ambohimandroso','Ankazofady Ambohimandroso','mpamboly','oui','malagasy',40),(248,'Rampizafy','Marie Esther, vadiny','-00-00','Ankazofady Ambohimandroso','Ankazofady Ambohimandroso','mpamoly','oui','malagasy',38),(249,'Razanajafy','Justine','-00-00','','Ambalavao','mpampivelona','oui','malagasy',51),(250,'Ratsifanananjaka 6','Hervy','1980-06-07','Mahazony','Besoa','mpamboly','oui','malagasy',0),(251,'Razafindrazana','Vonimboahirana','1988-06-16','Ambalavao','Besoa','mpamboly','oui','malagasy',0),(252,'Razafimamy','Marie Louise','1966-00-00','Ambalavao','Besosoa Ambalavao','mpanjaitra','oui','malagasy',0),(253,'Raeliasinony ','Emilie Ursule','1948-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(254,'Razafy','Jeanne d\'Arc','1951-12-18','Soananandray Anjoma','Fihasinana Iarintsena','mpandrary','oui','malagasy',0),(255,'Razanabao','Tertiaire Ernestine','1949-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(256,'Razafimandimby','Pierre','1973-09-28','Ambalavao','Angodongodona Maroparasy Ambalavao','mpamboly','oui','malagasy',0),(257,'Rasoarimalala','Justine Angèle','1974-12-27','Angodongodona','Angodongodona Maroparasy Ambalavao','mpamboly','oui','malagasy',0),(258,'Rasoarilina','Henriette','1950-00-00','','Ambalavao','Sage femme','oui','malagasy',0),(259,'Solondranarivelo','Soanantenaina','1979-11-03','Ambalavao','Sahamasy Ambalavao','mpamboly','oui','malagasy',0),(260,'Haingomalala','Gina','1086-03-19','Ambalavao','Sahamasy Ambalavao','mpamboly','oui','malagasy',0),(261,'Rakotomanga','Rajaonarison','1961-05-13','Ambalavao','Ambany Stade Ambohitsoa Ambalavao lot III-H-1H','mpampianatra','oui','malagasy',0),(262,'Raholiarisoa','Jeannine Yvette','1955-09-04','Ambalavao','Besoa','mpampianatra','oui','malagasy',0),(263,'Ravaomihantasolo','Perline','1977-01-05','Ambalavao','Sahamasy ','mpivarotra','oui','malagasy',0),(264,'Tojotiana','Alain Claude','-00-00','','Ambalasoa','','oui','malagasy',0),(265,'Razafinimanana','Voahangy Lalao','-00-00','','Ambalasoa','','oui','malagasy',0),(266,'Rafahasahiana','Roindahy Donis','1984-10-23','Manambaro','Volotara','mpamboly','oui','malagasy',0),(267,'Anjarasoa','Annick Marie Laurence','1988-08-18','Fianarantsoa','Volotara','Professeur','oui','malagasy',0),(268,'Rasoamanahirana','Angeline Agathe','1934-12-03','Betroka','Atsinanamanda Ambalavao','mpampivelona','oui','malagasy',0),(269,'Anjarasoa','Annick Marie Laurence','1988-08-12','Fianarantsoa','Avaramanda Ambalavao','Professeur','oui','malagasy',0),(270,'Rafahasahiana','Roindahy Donis','1984-10-23','Manambaro','Besoa','mpamboly','oui','malagasy',0),(271,'Anjarasoa','Annick Marie Laurence','1988-08-12','Fosarato','Besoa','mpamboly','oui','malagasy',0),(272,'Raketamanga','Zinette','1981-08-28','Fianarantsoa','','Réalisateur Adjointe de la Santé','oui','malagasy',0),(273,'Rafahasahiana','Roindahy Donis','1984-10-24','Manambaro','Besoa','mpamboly','oui','malagasy',0),(274,'Anjarasoa','Annick Marie Laurence','1988-08-12','Fianarantsoa','Besoa','mpampianatra','oui','malagasy',0),(275,'Ratsimbazafy','Vololontiana','1976-10-20','Imito Fandriana','Ambalavao','mpampivelona','oui','malagasy',0),(276,'Rabotovao','Rolland Philibert','1969-06-23','Ambalavao','Ambarinakoho','mpamboly','oui','malagasy',0),(277,'Razafinitiana','Lucie Marcel','1972-03-23','Ambohimandroso','Ambarinakoho','mpandrary','oui','malagasy',0),(278,'Ramanantsoa','Eulalie','1937-00-00','','Avaramanda','Assistante de santé retraitée','oui','malagasy',0),(279,'Andriamaro','Hasina Ralaivao','1968-09-05','amin\'ny trano fampiterahana ao Fianarantsoa','Ankofika Ambalavao','secretaire','oui','malagasy',0),(280,'Raharivelosoa','Hortense Ida','1971-04-11','Ambohimandroso','Ankofika Ambalavao','ménagère','oui','malagasy',0),(281,'Razafitsalama','Wilfred Gaston','1971-05-20','Ambohimahasoa','Ampasinakanga Maroparasy','mpiasan\'ny Sociiété Chan Foui','oui','malagasy',0),(282,'Rasoamampionona','Nirina','1974-02-08','Ambalavao','Ampasinakanga Maroparasy','ménagère','oui','malagasy',0),(283,'Razara','Emmanuël','1959-00-00','Mahasoabe Fianarantsoa 2','Soaniherena Anjomà','mpamboly','oui','malagasy',0),(284,'Ravaonirina','Marie Monique','1957-06-17','Soaniherena Anjomà','Soaniherena Anjomà','mpampianatra','oui','malagasy',0),(285,'Ravololoniaina','Joséphine','1939-00-00','','Ambalavao','Assistant de Santé','oui','malagasy',0),(286,'Razamaria','Esther','1953-07-21','Sendrisoa','Tanambao Avaramanda Ambalavao','ménagère','oui','malagasy',0),(287,'Rasoavololona','Hantanirina Charlotte','1973-08-03','Ambalavao','Tanambao Avaramanda Ambalavao','ménagère','oui','malagasy',0),(288,'Rahaovalahy','Jean François de Paul','1974-06-26','Ambalavao','Soaseranana Ambalalova avaratra ','mpamboly','oui','malagasy',0),(289,'Nirisoa','Marie Célestine','1979-02-10','Ambalavao','Soaseranana Ambalalova avaratra','mpanjaitra','oui','malagasy',0),(290,'Rahaovalahy','','1957-00-00','Landasoa','Tanambao Avaramanda Ambalavao','mpivarotra','oui','malagasy',0),(291,'Rasoahafamirana','Léa Justine','1985-10-24','Ambalavao','Avaramanda Ambalavao','ménagère','oui','malagasy',0),(292,'Randrianandrasana','Désiré','1973-05-01','Ambalavao','Ambohimahasoa Bemahalanja Ambalavao','mpamboly','oui','malagasy',0),(293,'Nirina','Rasamimandimby Nomenjanahary Stephan','1959-05-12','Ambalavao','Ambohijafy Ambalavao','Vurgarisateur Agricole','oui','malagasy',0),(294,'Razafindramavo','Vonifanja','1970-10-24','Ankadinondry Sakay','Ambohijafy Ambalavao','mpikarakara tokatrano','oui','malagasy',0),(295,'Andry','Miarantseheno Gisèle','1961-03-03','Antananarivo','','mpitsabo','oui','malagasy',0),(296,'Rajaonarivelo','Emmanuël','1966-07-27','Mantasoa Manjakandriana','Ambalasoa','mpiompy','oui','malagasy',0),(297,'Raharisoa','Lucie Aimée','1965-12-13','Mahafasa Farafangana','Ambalasoa','ménagère','oui','malagasy',0),(298,'Ratsimbazafy ','Dieu Donné','1966-00-00','Ambalavao','Tondrompo Ankondromalaza','mpamboly','oui','malagasy',0),(299,'Ramampionona','Angeline Hanitra','1971-06-30','Ambalavao','Tondrompo Ankondromalaza','','oui','malagasy',0),(300,'Ravolalahy','Pierre Claver','1957-01-20','Ambohimahamarina','Alatsinainy','Employée de Service','oui','malagasy',0),(301,'Rakalabia','Henriette Florine','1969-00-00','Soatanana-Nord Ambalavao','Alatsinainy','ménagère','oui','malagasy',0),(302,'Razainjafy','Florentine','1952-05-20','','Ambany Stade Ambohitsoa-Ambalavao','Infirmière, diplômée d\'Etat','oui','malagasy',0),(303,'Randrianaivo','Christophère','-00-00','Ambalavao, vakim-pileovan\'io ihany','Fianarantsoa','miaramila','oui','malagasy',26),(304,'Fanomezantsoa','Jean Fleurie','1991-09-06','Ambositra','Ambohimadera Ambalalova-Nord Ambalavao','mpamboly','oui','malagasy',0),(305,'Rafanomezantsoa ','Celestine','1977-08-24','Andoharanomaintso','Ambohimadera Ambalalova-Nord Ambalavao','mpivarotra','oui','malagasy',0),(306,'Razafialisoa','Imeldà','1973-06-01','Ivoamba F2','Alatsinainy Ambalavao','mpampivelona','oui','malagasy',0),(307,'Razafimamonjy','Bernard','1969-07-01','Ambohimandroso','Mahavelona','mpamboly','oui','malagasy',0),(308,'Rasoamampionona','Marie Olga','1970-10-28','Ambalavao','Mahavelona','','oui','malagasy',0),(309,'Razafimamonjy','Richard Isidore','1964-10-12','Befelatanana Antananarivo','Mitsinjony','mpampianatra','oui','malagasy',0),(310,'Rivoarimanana','Sombiniaina Voahanginirina Gisèle Sylvie','1982-10-12','Mitsinjony','Mitsinjony','mpamboly','oui','malagasy',0),(311,'Randriamboavonjy','Vincent','1954-01-20','Ambalavao','Ankondromalaza ','mpamboly','oui','malagasy',0),(312,'Ratsimbazafy 2','Jean Baptiste','1949-00-00','Andranovorivato','Angodongodona','mpamboly','oui','malagasy',0),(313,'Ravelo','Marie Louise','1946-00-00','Andohasakalava','Angodongodona','','oui','malagasy',0),(314,'Razanabao','Juliette','1950-00-00','Ambalavao','Behasy','mpamoly','oui','malagasy',0),(315,'Razafindrianony','','1933-00-00','','Behasy','mpiasatany','oui','malagasy',0),(316,'Onjatiana','Véronique','1978-00-00','Ambalavao','Morafeno-Sud Ankaramena','mpamboly','oui','malagasy',0),(317,'Rasoarilina','Henriette','1950-01-12','','','mpampivelona','oui','malagasy',0),(318,'Ravoahanginirina','Menjarisoa Lydia Florence','1987-07-26','Talata Ampano','Ambalakajaha','mpivarotra','oui','malagasy',0),(319,'Razafialisoa','Imeldà','1973-06-01','Ivoamba ','Alatsinainy Ambalavao','mpampivelona','oui','malagasy',0),(320,'Rakotondravita','René','1959-11-11','Namongo','Namongo','mpamboly','oui','malagasy',0),(321,'Razafindravao','Monique','1957-01-29','Besarety Antananarivo','Namongo','mpandrary','oui','malagasy',0),(322,'Randriamampionona','Gabriel','1961-01-14','Tarazo','Ambohitsoa','mpampianatra','oui','malagasy',0),(323,'Razafimamay','Justine','1965-06-22','Ambalavao','Ambohitsoa','mpampianatra','oui','malagasy',0),(324,'Razafindrakoto','Joseph Désiré','1974-01-31','Fianarantsoa','Ambohijafy Ambalavao','Opérateur Economique','oui','malagasy',0),(325,'Ranaivonasy','Noro Malala Holisoa','1975-07-27','Antsirabe','Ambohijafy Ambalavao','mpianatra','oui','malagasy',0),(326,'Rasoanirina','Germaine','1950-00-00','','Ambohijafy Ambalavao','mpampivelona','oui','malagasy',0),(327,'Razanajaza','Céline','1959-00-00','Anorimbato Iarintsena','Imigo Besoa','mpandrary','oui','malagasy',0),(328,'Ramasy ','Pierre','1960-00-00','Tomboarivo','Tamboarivo','mpamboly','oui','malagasy',0),(329,'Razanabao','Philomène','1958-00-00','Manambelo Lamosy','Tomboarivo','mpamboly','oui','malagasy',0),(330,'Martin','','-00-00','Ambondrona Ambalavao','Andrefamanda','mpamboly','oui','malagasy',44),(331,'Razanatsimba','Philomène, vadiny','-00-00','Andranovorivato','Andrefamanda','mpanjaitra','oui','malagasy',35),(332,'Rasana','Gabrielle','-00-00','','','mpampivelona, tsy miasa fanjakana','oui','malagasy',71),(333,'Andriamihaja','Joseph Albert','1986-02-08','Anjomà','Alatsinainy Ambalavao','mpianatra','oui','malagasy',0),(334,'Onjarivelo','Tiankavany','1991-08-22','Ambalavao','Alatsinainy Ambalavao','mpianatra','oui','malagasy',0),(335,'Malalatiana','Hanitriniala Raholisoa','1975-06-16','Fianarantsoa','Sahamasy','mpampivelona','oui','malagasy',0),(336,'Ramilison','Hary Malala','1964-04-27','Fianarantsoa','Sahamasy Ambalavao','secreteur comptable','oui','malagasy',0),(337,'Ravaonirina','Historine Razoarivelo','1973-03-19','Ejeda','Sahamasy Ambalavao','','oui','malagasy',0),(338,'Rasana','François','1956-05-15','amin','Soarano-Sud','mpamboly','oui','malagasy',0),(339,'Ratolotriniaina','Marie Germaine','1994-00-00','Ianohy-Nord Iarintsena','Ambohibory-Nord Lalangina Iarintsena','mpamboly','oui','Malagasy',0),(340,'Rasoamandimby','Jean Claude','1974-08-20','Ianohy-Nord ','Ianohy-Nord Iarintsena','mpamboly','oui','malagasy',0),(341,'Ralalasoanirina','Pulcherie Emma','1975-00-00','Anjomà','Ambalavaokely Anaody Anjomà','mpamboly','oui','malagasy',0),(342,'Rasolomampiandra','Justin','1987-10-13','Ambalavao','Ambohibory-Nord Lalangina Iarintsena','mpampianatra','oui','Malagasy',0),(343,'Ramija','','1952-02-10','Ambalavao','Ambohibory-Nord Lalangina Iarintsena','mpamboly','oui','malagasy',0),(344,'Razanamoelina','Justine','1953-08-20','Mahaditra','Ambohibory-Nord Lalangina Iarintsena','mpamboly','oui','malagasy',0),(345,'Solotovoniaina','Pierre Xavier Freddy','1998-05-15','Sendrisoa Ambalavao','Ambohijafy Ambalavao','mpamboly','oui','malagasy',0),(346,'Rasoanirina','Marie Françoise','1996-09-06','Ambalataretra Ambalavao','Ambalataretra Ambalavao','mpamboly','oui','malagasy',0),(347,'Ramanalina','Pierre','-00-00','Ambalavao','Ambalataratasy Fianarantsoa','mpanoratra ao amin\'ny fikambanana mikarakara ny toe-pahasalamana ao Fianarantsoa','oui','malagasy',26),(348,'Razanadimby','Séraphine, vadiny','-00-00','Anjomà Ambalavao','Ambalataratasy Fianarantsoa','mpanjaitra','oui','malagasy',22),(349,'Andrinasolo','Nicolas','1951-00-00','Bekatra','Alatsinainy','mpampianatra','oui','malagasy',0),(350,'Rasoalalao','Johanne Razafindralambo','1963-02-02','Ambalavao','Alatsinainy','','oui','malagasy',0),(351,'Ranorondramasy','Marclline','1947-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(352,'Ramanalina','Pierre','1937-00-00','Ambalavaokely, faribohitr\'Anjomà, vakim-pileovan\'Ambalavao','Ambositra','mpitantsoratra','oui','malagasy',0),(353,'Razanadimby','Seraphine','1938-00-00','Anjomà, farihohitr\'io ihany, vakim-pileovan\'Ambalavao','Ambositra','','oui','malagasy',0),(354,'Raharivelo','Mariette','1934-00-00','Antalata, vakim-pileovan\'Ambohimahasoa','Ambalavao','mpampivelona','oui','malagasy',0),(355,'Raherison ','Bruno','1972-10-23','Ambalavao','Mahasoa Ambohimandroso','mpamboly','oui','malagasy',0),(356,'Rasoaharijaona','Célestine Eliane','1975-09-04','Ambalavao','Mahasoa Ambohimandroso','','oui','malagasy',0),(357,'Ramanalina','Pierre','1937-00-00','Ambalavaokely Anjomà Ambalavao','Ambositra','mpitan-tsoratra','oui','malagasy',0),(358,'Razanadimby','Seraphine','1938-00-00','Ambalavao','Ambositra','','oui','malagasy',0),(359,'Razanajafy','Justine','1910-00-00','','Ambalavao','mpampivelona','oui','malagasy',0),(360,'Ramanalina','Pierre','1937-00-00','Ambavaokely, faribohitr\'Anjomà','Ankofafalahy, vakim-pileovan\'i Fianarantsoa','mpitantsoratra','oui','malagasy',0),(361,'Razanadimby','Séraphine','1938-00-00','Ambalavao, vakim-pileovan\'io ihany','Ankofafalahy, voalaza eo ambony','','oui','malagasy',0),(362,'Andriasy','Ruth Odette','1941-00-00','Tsaralalana','Ambalavao','Infirmière d\'Etat','oui','malagasy',0),(363,'Ravaomananarivo','Alice Nadia','1984-06-13','Andohabevava Tsaramandroso Fianarantsoa','Ambonifahidrano Fianarantsoa','ménagère','oui','Malagasy',0),(364,'Ravaonjanahary','Jeanine','1963-03-11','Andranovorivato','Andohabevava Fianarantsoa','ménagère','oui','malagasy',0),(365,'Rasolonjatovo','Marius Florentin','1987-07-23','amin\'ny trano fampiterahana ao Fianarantsoa','Ambonifahidrano Fianarantsoa','Agent d\'Exploitation','oui','Malagasy',0),(366,'Rasolonjatovo','Maurice','-00-00','','','','non','malagasy',0),(367,'Razafimandimby','Marie Florentine','1968-03-09','Ambalavao','Antsenanomby Ambalavao','ménagère','oui','malagasy',0),(368,'Razafimandimby','Jean','1982-07-12','Ambalavao','Antsenanomby Ambalavao','maçon','oui','malagasy',0),(369,'Rasoarimalala','Justine','1965-12-01','Amboninanosy Fianarantsoa','Andohabevava Fianarantsoa','ménagère','oui','malagasy',0),(370,'Razanadralay ','Therésèse d\'Avilà','1948-00-00','Isoanala','Avaratsena Ambalavao','ménagère','oui','malagasy',0),(371,'Ralaimangidy ','Jean Pierre','1942-00-00','','Avaratsena Ambalavao','Mpampianatra','oui','malagasy',0),(372,'Onjarivelo ','Tiankavany','1991-08-22','amin\'ny trano fampiterahana ao Ambalavao','Alatsinainy Ambalavao','mpampianatra','oui','Malagasy',0),(373,'Ravaoarisoa','Marie Aimée Flavienne','1973-07-03','Ambalavao','Sahamasy Ambalavao','mpivarotra','oui','malagasy',0),(374,'Andriamihaja','Joseph Albert','1986-02-08','amin\'ny fampivelomana ao Anjomà','Alatsinainy Ambalavao','mpandraharaha','oui','Malagasy',0),(375,'Ratsimbazafy','Joseph','-00-00','','','','non','malagasy',0),(376,'Ravaosolo','Jeanne d\'Arc','1960-02-09','Soaindrana','Ambohibory Ankazosoaravina Anjomà','retraitée','oui','malagasy',0),(377,'Rakotozafy','Romain','1976-05-15','amin\'ny trano fampiterahana ao Fianarantsoa','Ambohitsoa Ambalavao','Technicien Hydrolique','oui','malagasy',0),(378,'Razanamahafaly','Mbolatiana Françoise','1980-07-29','Sahamasy Ambalavao','Sahamasy Ambalavao','mpivarotra','oui','malagasy',0),(379,'Baotemoro','Jeanne Guialberthine','1956-07-12','Sendrisoa Ambalavao','Ambohimahasoa Namongo Bemahalanja Ambalavao','mpamboly','oui','malagasy',0),(380,'Randriamampionona ','Narcisse','-00-00','','','Filoha Lefitra Fahatelon\'ny Ben\'ny Tananan\'Ambalavao antampon-tanana ','oui','malagasy',0),(381,'Rafaralalahy ','Jean de Dieu Robert','1943-05-26','Talata Ampano ','Ambohijafy Ambalavao, vakim-pileovanan\'Ambalavao','Agent technique d\'agriculture','oui','malagasy',0),(382,'Rasoaharisoa ','','1950-12-11','Ambohibato','Ambohijafy, voalaza eo ambony ','mpampianatra ','oui','malagasy',0),(383,'Razanantsoa ','Noeline','1933-00-00','Fianarantsoa','Ambalavao','mpampivelona','oui','malagasy',0),(384,'Rakotoniaina','Richard Edmond','1968-07-08','Ampitatafika','Ambohijafy','mécanicien','oui','malagasy',0),(385,'Rasoarimanana','Mariette','1973-10-10','Andafiatsinana Ambatolampy','Ambohijafy','mpiompy','oui','malagasy',0),(386,'Andry','Miarantseheno Gisèle','1961-03-03','','Ambalavao','Dokotera','oui','malagasy',0),(387,'Rakotoniaina','Richard Edmond','1968-07-08','Ampitatafika','Ambohijafy Ambalavao','garagiste mécanicien','oui','malagasy',0),(388,'Rasoarimanana','Mariette','1973-10-10','Andafiatsinana Ambatolampy','Ambohijafy Ambalavao','mpiompy','oui','malagasy',0),(389,'Andry','Miarantseheno Gisèle','1961-03-03','','','Dokotera','oui','malagasy',0),(390,'Razafimandimby','Joseph Gabriel','1954-00-00','Tsikahoe','Tsikahoe','mpamboly','oui','malagasy',0),(391,'Rasoary','Lucie Jacqueline','1959-12-19','Tanakorery','Tsikahoe','mpamboly','oui','malagasy',0),(392,'José','Maurice Martin','1959-09-30','Ambalavao','Tanakorery','mpamboly','oui','malagasy',0),(393,'Ionimalala','Ratsimbarisoa Félicia','1999-07-10','Sahamasy Ambalavao','Ambohijafy Ambalavao','mpivarotra','oui','Malagasy',0),(394,'Ratsimbarison','Rijanantenaina Jean Félicien','1973-04-12','amin\'ny trano fampiterahana ao Ambalavao','Ambohijafy Ambalavao','Chauffeur','oui','malagasy',0),(395,'Raveloarimanana','Clarisse','1978-02-12','Ambalavao','Ambohijafy Avaratra Ambalavao','mpivarotra','oui','malagasy',0),(396,'Nomenjanahary ','Michaël','1999-11-09','amin\'ny trano fampiterahana ao Ambalavao','Antsenanomby Ambalavao','Chauffeur','oui','Malagasy',0),(397,'Rakotomanana','Floret Joë','1976-00-00','Antsenanomby','Antsenanomby Ambalavao','mpivarotra','oui','malagasy',0),(398,'Ravaonirina','Sendrasoa','1975-00-00','Betafo','Antsenanomby Ambalavao','mpivarotra','oui','malagasy',0),(399,'Ravololoniaina','Joëline','1983-06-19','Mandoto','Antsenanomby Ambalavao','mpivarotra','oui','malagasy',0),(400,'Ratsimbarison ','Derandraibe Hasiniaina Jerisoa','1984-03-25',' Ambalavao','Ambohijafy Ambalavao','mpivarotra','oui','malagasy',0),(401,'Lantonirina','Sthéila Rosa','1979-05-22','Ambalavao','Antsinanamanda','mpamboly ','oui','malagasy',0),(402,'Ralitera','Sahondra Ravaonoro ','1964-00-00','Ambalavao','Ambalataretra Ambalavao','mpikarakara tokatrano ','oui','malagasy',0),(403,'Razanajao ','Jeannot Fidèl ','1982-11-07','Sahamasy Ambalavao','Sahamasy','Aide chauffeur','oui','malagasy',0),(404,'Razafindrabe ','Holilalao','1986-06-11','Ambalavao','Sahamasy','ménagère','oui','malagasy',0),(405,'Rasoja ','Marchelline','1946-07-14','Ambalamisaotra Vohitrafeno','Ambalavao','Infirmiére retraitée','oui','malagasy',0),(406,'Razanasoa','Bernadette','1976-00-00','Namongo Bemahalanja',' ihany','mpamboly','oui','malagasy',0),(407,'Rakotondravita ','René','1959-11-11','Namongo Bemahalanja','ihany','mpamboly','oui','malagasy',0),(408,'Rasamidimby','Stéphan','-00-00','Nosilava','Fenomby Mahabako','mpampianatra','oui','malagasy',30),(409,'Ramampiandra','Thérèse, vadiny','-00-00','Andronivato Sendrisoa','Fenomby Mahabako','mpanjaitra','oui','malagasy',24),(410,'Razanajafy','Justine','-00-00','','','mpampivelona','oui','malagasy',0),(411,'Razainjafy','Delphine','1969-00-00','Soaseranana','Soaseranana','mpamboly','oui','malagasy',0),(412,'Rakoto','Jean Marie','1925-00-00','','Soaseranana','mpamboly','oui','malagasy',0),(413,'Randriamalala ','Raymond Jean Emile','1968-06-04','Befelatanana','Ambinanindovoka','Mpamboly','oui','malagasy',0),(414,'Ravaosolo','Marcelline Marie Odile','1971-01-19','Ambohimahamasina','Ambinanindovoka','Mpamboly','oui','malagasy',0),(415,'Ramanantsoa ','Eulalie','1937-00-00','','Ambalavao','Assistante de Sante Publique','oui','malagasy',0),(416,'Ranaivo ','Jaona','1957-09-10','Andohasakalava','Andohasakalava','Mpamboly','oui','malagasy',0),(417,'Ravaonoro','Blandine','1958-00-00','Ambiaty','Andohasakalava','','oui','malagasy',0),(418,'Rakotoarimalala','Helimanitra Gabrielle','1973-09-19','Anjomà','Avaramanda','mpanjaitra','oui','malagasy',0),(419,'Rasoamanahirana ','Angeline Agathe','1934-11-03','Betroka','','Sage-femme ','oui','malagasy',0),(420,'Ravita','Delphine','1944-00-00','Andongoza, vakim-pileovan\'Ambalavao','Ambalatanimena, vakim-pileovan\'Ambalavao','mpamoly','oui','malagasy',0),(421,'Razafiarisoa','Cécile','1931-00-00','Fianarantsoa','Ambalavao','mpanampin\'ny mpampivelona','oui','malagasy',0),(422,'Rakotomanana','Tantely Mamy','1980-11-23','Itaosy Antananarivo','Androka Ambalavao','mpampianatra','oui','malagasy',0),(423,'Ravololonirina','Francine Aimée','1999-10-08','Ambalavao','Androka Ambalavao','ménagère','oui','malagasy',0),(424,'Zafimahafehisoahanitra','Joviale Melisse Offrande','1964-02-17','Manambaro Taolagnaro','Ambalavao','mpitsabo mpanampy','oui','malagasy',0),(425,'Rasoja','Samuel','1959-01-11','Mahavelo','Ampapa','mpamboly','oui','malagasy',0),(426,'Rasoanandrasana','Angeline','1976-08-30','Ambalavao','Ampapa','mpamboly','oui','malagasy',0),(427,'Malalatiana','Hanitriniala Raholisoa','1975-06-16','Fianarantsoa','Ankofika Atsimo','mpampivelona','oui','malagasy',0),(428,'Rasoanandrasana','Angeline','1976-08-30','amin\'ny trano fampiterahana ao Ambalavao','Mahavelo Anjà Iarintsena','mpamboly','oui','Malagasy',0),(429,'Ravasa','Marcelline','1952-08-09','Ambalavao','Mahatsinjony Andrea Ambohimandroso','mpamboly','oui','malagasy',0),(430,'Rasoja','Samuël','1959-01-11','Mahavelo Iarintsena','Mahavelo Iarintsena','mpamboly','oui','Malagasy',0),(431,'Razafimangaitso','','-00-00','','','','non','malagasy',0),(432,'Razafimandimby','Ernest','1962-02-14','Mahavelo Iarintsena','Mahavelo Anjà Iarintsena','mpamboly','oui','malagasy',0),(433,'Rasoamampionona','Angeline','1991-06-24','Iampody','Mahavelo Anjà Iarintsena','mpamboly','oui','malagasy',0),(434,'Raherivelomamonjy','Mbolatiana Adoré','1986-02-27','Antsonga','Ambohitrandriana Ambalavao','Responsable de Projet ONN','oui','malagasy',0),(435,'Ralahamaly','Barisoloniaina','1995-05-31','Antsahavory I Mangidy Ikalamavony','Ambohitrandriana Ambalavao','Animatrice','oui','malagasy',0),(436,'Randriamilijaona','Henintsoa','1990-01-04','Fianarantsoa','Ivolo Ankazosoaravy Anjomà','mpamboly','oui','malagasy',0),(437,'Rahantaniaina','Jeanne Philbertine','1991-07-07','amin\'ny trano fampiterahana ao Ambinanindivoka','Ivolo Ankazosoaravy Anjomà','mpampianatra','oui','malagasy',0),(438,'Rasoanandrasana','Isabelle Odette','1957-02-20','Ambohimahasoa','Tanambao Ezaka Ambalavao','Sage-femme retraitée','oui','malagasy',0),(439,'Raherimanana','Anicet Joseph Aimé','1984-03-27','Toamasina','Ankofika-Est Ambalavao','maçon','oui','malagasy',0),(440,'Heritiana','Nomenjanahary Mialisoa','2001-06-02','Kiririoka Andrainjato','Ankofika-Est Ambalavao','ménagère','oui','malagasy',0),(441,'Behamizana','Rahaovasoa Landiniaina','2021-05-27','Alakamisy Ambohimaha','Alatsinainy Ambalavao','Sage-femme ','oui','malagasy',0),(442,'Alexandre','Fidèle','1997-00-00','Matavilamba Tanakambana Ikongo','Tanambao Ambalasoa Ambalavao','mpivarotra','oui','malagasy',0),(443,'Raharinirina','Marie Anicent','2000-07-26','Tsitondroina','Tanambao Ambalasoa Ambalavao','mpivarotra','oui','malagasy',0),(444,'Rasoanandrasana','Isabelle Odette','1957-02-20','Ambohimahasoa','Tanambao Ambalasoa','Sage-femme retraitée','oui','malagasy',0),(445,'Kakay','Asy Volamamonjy','1990-11-12','Ihosy','Amborokotsy Ambohimandroso','mpamboly','oui','malagasy',0),(446,'Herinazy','Félix','1996-11-06','Mahazoarivo Ambalavao','Amborokotsy','mpamboly','oui','malagasy',0),(447,'Rakotozandry','Jean Christophe','1960-00-00','Ampasy -Nananasana-Vangaindrano','Ambositra','Gendarme','oui','malagasy',0),(448,'Razafisambo','Marie Madeleine','1957-04-16','Vohipeno Manakara','Ambositra','','oui','malagasy',0),(449,'Lalaoarisoa','Claire','1960-00-00','','Ankofika Ambalavao','mpampivelona','oui','malagasy',0),(450,'Rasoanandrasana','Collette','1969-08-28','Farafangana','Fort-Carnot','ménagère','oui','malagasy',0),(451,'Andriamanantena','Tojoniaina François','1987-11-13','Androka','Antanambao Ambalavao','Chauffeur','oui','malagasy',0),(452,'Raharisoa','Cynthia','1994-04-22','Ambalataretra','Antanambao Ambalavao','ménagère','oui','malagasy',0),(453,'Rasoanandrasana','Isabelle Odette','1957-02-20','Ambohimahasoa','Antanambao Ambalavao','Sage-femme retraitée','oui','malagasy',0),(454,'Ramarolahy','Maurice Marcel','1952-11-23','Ambalavao','Ambohijafy Ambalavao','mpamboly','oui','malagasy',0),(455,'Rasoarinivo','Olive','1959-04-03','Bekily','Ambohijafy Ambalavao','mpiompy','oui','malagasy',0),(456,'Rakotozandry','Jean de la Croix','1972-08-03','Fianarantsoa','Sahamasy','Chauffeur','oui','malagasy',0),(457,'Nandro','Harisaona','1947-06-24','Borobontsy Fanjakana Beroroha','Soatanana-Sud','mpampianatra','oui','malagasy',0),(458,'Rampinaivola','Martine','1951-07-25','Ambalavao','Soatanana-Sud','','oui','malagasy',0),(459,'Nandro','Harisaona','1947-06-24','Fanjakana Beroroha Toliary','Soatanana-Sud','mpampianatra','oui','malagasy',0),(460,'Rampinaivola','Martine','1951-07-25','Ambalavao','Soatanana-Sud','mpampianatra','oui','malagasy',0),(461,'Andriamihaja','Naivoson Emile Fidèle','1977-10-10','Ambalavao','Ankofika atsimo Ambalavao','mpamboly','oui','malagasy',0),(462,'Raholiarisoa','Julie Estelle','1980-10-18','Ambalavao','Ankofika atsimo Ambalavao','mpamboly','oui','malagasy',0),(463,'Ranaivoson','Emile ','1943-00-00','','Ankofika atsimo Ambalavao','Comptable','oui','malagasy',0),(464,'Rakotozafy ','Gilbert','1958-00-00','Ambalavao','Malalia','mpamboly','oui','malagasy',0),(465,'Rahafa','Philomène','1961-00-00','Vohimarina Lamosina','Malalia','mpamboly','oui','malagasy',0);
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reconnaissance`
--

DROP TABLE IF EXISTS `reconnaissance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reconnaissance` (
  `numRec` varchar(10) NOT NULL,
  `numActeRec` int(11) DEFAULT NULL,
  `codeReg` varchar(20) DEFAULT NULL,
  `numOff` int(11) DEFAULT NULL,
  `dateRec` date DEFAULT NULL,
  `heureRec` time DEFAULT NULL,
  `imgActeRec` longblob DEFAULT NULL,
  `typeImgRec` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`numRec`),
  KEY `constrRec1` (`codeReg`),
  KEY `constrRec4` (`numOff`),
  CONSTRAINT `constrRec1` FOREIGN KEY (`codeReg`) REFERENCES `registre` (`codeReg`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrRec4` FOREIGN KEY (`numOff`) REFERENCES `officier` (`numOff`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reconnaissance`
--

LOCK TABLES `reconnaissance` WRITE;
/*!40000 ALTER TABLE `reconnaissance` DISABLE KEYS */;
INSERT INTO `reconnaissance` VALUES ('598N1963',598,'Naissance-1963',49,'1963-09-11','15:00:00',NULL,''),('N1961',0,'Naissance-1961',1,'0000-00-00','00:00:00',NULL,'');
/*!40000 ALTER TABLE `reconnaissance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reconnaitre`
--

DROP TABLE IF EXISTS `reconnaitre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reconnaitre` (
  `numRec` varchar(10) DEFAULT NULL,
  `numPere` int(11) DEFAULT NULL,
  `nomEnfant` varchar(40) DEFAULT NULL,
  `prenomEnfant` varchar(50) DEFAULT NULL,
  `sexeEnfant` varchar(8) DEFAULT NULL,
  `dateNaissEnfant` varchar(10) DEFAULT NULL,
  `lieuNaissEnfant` varchar(70) DEFAULT NULL,
  `nomMere` varchar(40) DEFAULT NULL,
  `prenomMere` varchar(50) DEFAULT NULL,
  KEY `consRec6` (`numRec`),
  KEY `constrRec5` (`numPere`),
  CONSTRAINT `consRec6` FOREIGN KEY (`numRec`) REFERENCES `reconnaissance` (`numRec`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constrRec5` FOREIGN KEY (`numPere`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reconnaitre`
--

LOCK TABLES `reconnaitre` WRITE;
/*!40000 ALTER TABLE `reconnaitre` DISABLE KEYS */;
INSERT INTO `reconnaitre` VALUES ('N1961',182,'','','zazavavy','-00-00','','',''),('598N1963',303,'Randrianaivonirina','Julie Christine','zazavavy','1963-07-14','amin\'ny trano fampiterahana ao Ambalavao','Ravaonirina','Julienne');
/*!40000 ALTER TABLE `reconnaitre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registre`
--

DROP TABLE IF EXISTS `registre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registre` (
  `codeReg` varchar(20) NOT NULL,
  `nomReg` varchar(15) DEFAULT NULL,
  `dateReg` year(4) DEFAULT NULL,
  PRIMARY KEY (`codeReg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registre`
--

LOCK TABLES `registre` WRITE;
/*!40000 ALTER TABLE `registre` DISABLE KEYS */;
INSERT INTO `registre` VALUES ('Adoption-1995','Adoption',1995),('Adoption-2004','Adoption',2004),('Adoption-2021','Adoption',2021),('Deces-1991','Deces',1991),('Deces-1994','Deces',1994),('Deces-1999','Deces',1999),('Deces-2000','Deces',2000),('Deces-2015','Deces',2015),('Deces-2016','Deces',2016),('Deces-2019','Deces',2019),('Deces-2020','Deces',2020),('Deces-2021','Deces',2021),('Jugement-2001','Jugement',2001),('Jugement-2002','Jugement',2002),('Mariage-1999','Mariage',1999),('Mariage-2004','Mariage',2004),('Mariage-2017','Mariage',2017),('Mariage-2021','Mariage',2021),('Naissance-1961','Naissance',1961),('Naissance-1963','Naissance',1963),('Naissance-1964','Naissance',1964),('Naissance-1965','Naissance',1965),('Naissance-1967','Naissance',1967),('Naissance-1968','Naissance',1968),('Naissance-1969','Naissance',1969),('Naissance-1970','Naissance',1970),('Naissance-1974','Naissance',1974),('Naissance-1975','Naissance',1975),('Naissance-1977','Naissance',1977),('Naissance-1978','Naissance',1978),('Naissance-1980','Naissance',1980),('Naissance-1981','Naissance',1981),('Naissance-1982','Naissance',1982),('Naissance-1983','Naissance',1983),('Naissance-1986','Naissance',1986),('Naissance-1987','Naissance',1987),('Naissance-1988','Naissance',1988),('Naissance-1989','Naissance',1989),('Naissance-1990','Naissance',1990),('Naissance-1991','Naissance',1991),('Naissance-1992','Naissance',1992),('Naissance-1993','Naissance',1993),('Naissance-1994','Naissance',1994),('Naissance-1995','Naissance',1995),('Naissance-1996','Naissance',1996),('Naissance-1997','Naissance',1997),('Naissance-1998','Naissance',1998),('Naissance-1999','Naissance',1999),('Naissance-2000','Naissance',2000),('Naissance-2001','Naissance',2001),('Naissance-2002','Naissance',2002),('Naissance-2003','Naissance',2003),('Naissance-2004','Naissance',2004),('Naissance-2005','Naissance',2005),('Naissance-2006','Naissance',2006),('Naissance-2008','Naissance',2008),('Naissance-2009','Naissance',2009),('Naissance-2010','Naissance',2010),('Naissance-2011','Naissance',2011),('Naissance-2012','Naissance',2012),('Naissance-2013','Naissance',2013),('Naissance-2015','Naissance',2015),('Naissance-2017','Naissance',2017),('Naissance-2018','Naissance',2018),('Naissance-2020','Naissance',2020),('Naissance-2021','Naissance',2021),('Naissance-939','Naissance',0000);
/*!40000 ALTER TABLE `registre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `situation_matrimoniale`
--

DROP TABLE IF EXISTS `situation_matrimoniale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situation_matrimoniale` (
  `codeSit` varchar(15) NOT NULL,
  `description` text DEFAULT NULL,
  `numPers` int(11) DEFAULT NULL,
  PRIMARY KEY (`codeSit`),
  KEY `sit` (`numPers`),
  CONSTRAINT `sit` FOREIGN KEY (`numPers`) REFERENCES `personne` (`numPers`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situation_matrimoniale`
--

LOCK TABLES `situation_matrimoniale` WRITE;
/*!40000 ALTER TABLE `situation_matrimoniale` DISABLE KEYS */;
INSERT INTO `situation_matrimoniale` VALUES ('430-2017-12-26','maty vady tamin\'i Rabia Pheline, tamin\'ny 04 Aogositra 2017, soratra faha 86',430);
/*!40000 ALTER TABLE `situation_matrimoniale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `nomUser` varchar(20) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `modif` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`nomUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','hotel','oui'),('user','commune','non');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `acteadoption`
--

/*!50001 DROP TABLE IF EXISTS `acteadoption`*/;
/*!50001 DROP VIEW IF EXISTS `acteadoption`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `acteadoption` AS select `adopt1`.`numAdopt` AS `numAdopt`,`adopt1`.`numActeAdopt` AS `numActeAdopt`,`adopt1`.`nomPerePers` AS `nomPerePers`,`adopt1`.`prenomPerePers` AS `prenomPerePers`,`adopt1`.`vivPere` AS `vivPere`,`adopt1`.`nomMerePers` AS `nomMerePers`,`adopt1`.`prenomMerePers` AS `prenomMerePers`,`adopt1`.`vivMere` AS `vivMere`,`adopt1`.`numOff` AS `numOff`,`adopt1`.`codeReg` AS `codeReg`,`adopt1`.`dateAdopt` AS `dateAdopt`,`adopt1`.`heureAdopt` AS `heureAdopt`,`adopt1`.`lieuAdopt` AS `lieuAdopt`,`adopt1`.`dateEcrit` AS `dateEcrit`,`adopt1`.`numTem1` AS `numTem1`,`adopt1`.`numTem2` AS `numTem2`,`adopt1`.`imgActeAdopt` AS `imgActeAdopt`,`adopt1`.`typeImgAdopt` AS `typeImgAdopt`,concat(`adopt1`.`nomPerePers`,' ',`adopt1`.`prenomPerePers`) AS `pereAdoptant`,concat(`adopt1`.`nomMerePers`,' ',`adopt1`.`prenomMerePers`) AS `mereAdoptant`,concat(`off`.`nomOff`,' ',`off`.`prenomOff`) AS `nomOff`,`off`.`fonction` AS `fonction`,concat(`adoptant`.`nomPers`,' ',`adoptant`.`prenomPers`) AS `nomAdoptant`,`adoptant`.`dateNaissPers` AS `dateAdoptant`,`adoptant`.`lieuNaissPers` AS `lieuAdoptant`,`adoptant`.`adressePers` AS `adrAdoptant`,`adoptant`.`profPers` AS `profAdoptant`,concat(`tem1`.`nomPers`,' ',`tem1`.`prenomPers`) AS `nomTem1`,`tem1`.`dateNaissPers` AS `dateTem1`,`tem1`.`lieuNaissPers` AS `lieuTem1`,`tem1`.`adressePers` AS `adrTem1`,`tem1`.`profPers` AS `profTem1`,concat(`tem2`.`nomPers`,' ',`tem2`.`prenomPers`) AS `nomTem2`,`tem2`.`dateNaissPers` AS `dateTem2`,`tem2`.`lieuNaissPers` AS `lieuTem2`,`tem2`.`adressePers` AS `adrTem2`,`tem2`.`profPers` AS `profTem2`,`adopt2`.`nomEnfant` AS `nomEnfant`,`adopt2`.`prenomEnfant` AS `prenomEnfant`,concat(`adopt2`.`nomEnfant`,' ',`adopt2`.`prenomEnfant`) AS `nomCompletEnfant`,`adopt2`.`sexeEnfant` AS `sexeEnfant`,`adopt2`.`dateNaissEnfant` AS `dateNaissEnfant`,`adopt2`.`lieuNaissEnfant` AS `lieuNaissEnfant`,`adopt2`.`numPers` AS `numPers`,concat(`adopt2`.`nomMere`,' ',`adopt2`.`prenomMere`) AS `nomMere`,concat(`adopt2`.`nomPere`,' ',`adopt2`.`prenomPere`) AS `nomPere` from (((((`adoption` `adopt1` join `adopter` `adopt2`) join `personne` `adoptant`) join `officier` `off`) join `personne` `tem1`) join `personne` `tem2`) where `adopt1`.`numAdopt` = `adopt2`.`numAdopt` and `adopt2`.`numPers` = `adoptant`.`numPers` and `adopt1`.`numOff` = `off`.`numOff` and `adopt1`.`numTem1` = `tem1`.`numPers` and `adopt1`.`numTem2` = `tem2`.`numPers` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `actedeces`
--

/*!50001 DROP TABLE IF EXISTS `actedeces`*/;
/*!50001 DROP VIEW IF EXISTS `actedeces`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `actedeces` AS select `d`.`numDeces` AS `numDeces`,`d`.`numActeDeces` AS `numActeDeces`,`d`.`nomDeces` AS `nomDef`,`d`.`prenomDeces` AS `prenomDef`,concat(`d`.`nomDeces`,' ',`d`.`prenomDeces`) AS `nomDeces`,`d`.`dateDeces` AS `dateDeces`,`d`.`heureDeces` AS `heureDeces`,`d`.`lieuDeces` AS `lieuDeces`,`d`.`profDeces` AS `profDeces`,`d`.`adrDeces` AS `adrDeces`,`d`.`sexeDecedes` AS `sexeDecedes`,`d`.`dateNaissDeces` AS `dateNaissDeces`,`d`.`lieuNaissDeces` AS `lieuNaissDeces`,concat(`d`.`nomMere`,' ',`d`.`prenomMere`) AS `nomMere`,`d`.`vivantMere` AS `vivantMere`,`d`.`adrPere` AS `adrPere`,`d`.`profPere` AS `profPere`,`d`.`adrMere` AS `adrMere`,`d`.`profMere` AS `profMere`,concat(`d`.`nomPere`,' ',`d`.`prenomPere`) AS `nomPere`,`d`.`vivantPere` AS `vivantPere`,concat(`off`.`nomOff`,' ',`off`.`prenomOff`) AS `nomOff`,`off`.`fonction` AS `fonction`,`d`.`codeReg` AS `codeReg`,`d`.`imgActeDec` AS `imgActeDec`,`d`.`typeImgDec` AS `typeImgDec`,`d`.`typeDec` AS `typeDec` from (`deces` `d` join `officier` `off`) where `d`.`numOff` = `off`.`numOff` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `actemariage`
--

/*!50001 DROP TABLE IF EXISTS `actemariage`*/;
/*!50001 DROP VIEW IF EXISTS `actemariage`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `actemariage` AS select `m`.`numMariage` AS `numMariage`,`m`.`numActeMariage` AS `numActeMariage`,`m`.`dateMariage` AS `dateMariage`,`m`.`heureMariage` AS `heureMariage`,`m`.`numHomme` AS `numHomme`,`m`.`numFemme` AS `numFemme`,`m`.`numTem1` AS `numTem1`,`m`.`numTem2` AS `numTem2`,`m`.`numOff` AS `numOff`,`m`.`codeReg` AS `codeReg`,`m`.`imgActeMar` AS `imgActeMar`,`m`.`typeImgMar` AS `typeImgMar`,`h`.`nomPers` AS `nomHomme`,`h`.`prenomPers` AS `prenomHomme`,concat(`h`.`nomPers`,' ',`h`.`prenomPers`) AS `nomHommeComplet`,`h`.`dateNaissPers` AS `dateNaissHomme`,`h`.`lieuNaissPers` AS `lieuNaissHomme`,`h`.`adressePers` AS `adrHomme`,`h`.`profPers` AS `profHomme`,`h`.`nationalite` AS `nationalHomme`,`f`.`nomPers` AS `nomFemme`,`f`.`prenomPers` AS `prenomFemme`,concat(`f`.`nomPers`,' ',`f`.`prenomPers`) AS `nomFemmeComplet`,`f`.`dateNaissPers` AS `dateNaissFemme`,`f`.`lieuNaissPers` AS `lieuNaissFemme`,`f`.`adressePers` AS `adrFemme`,`f`.`profPers` AS `profFemme`,`f`.`nationalite` AS `nationalFemme`,`t1`.`nomPers` AS `nomTem1`,`t1`.`prenomPers` AS `prenomTem1`,concat(`t1`.`nomPers`,' ',`t1`.`prenomPers`) AS `nomTem1Complet`,`t1`.`dateNaissPers` AS `dateNaissTem1`,`t1`.`lieuNaissPers` AS `lieuNaissTem1`,`t1`.`adressePers` AS `adrTem1`,`t1`.`profPers` AS `profTem1`,`t2`.`nomPers` AS `nomTem2`,`t2`.`prenomPers` AS `prenomTem2`,concat(`t2`.`nomPers`,' ',`t2`.`prenomPers`) AS `nomTem2Complet`,`t2`.`dateNaissPers` AS `dateNaissTem2`,`t2`.`lieuNaissPers` AS `lieuNaissTem2`,`t2`.`adressePers` AS `adrTem2`,`t2`.`profPers` AS `profTem2`,`homme`.`numMere` AS `numMereHomme`,concat(`homme`.`nomMere`,' ',`homme`.`prenomMere`) AS `nomMereHommeComplet`,`homme`.`nomMere` AS `nomMereHomme`,`homme`.`prenomMere` AS `prenomMereHomme`,`homme`.`dateNaissMere` AS `dateNaissMereHomme`,`homme`.`lieuNaissMere` AS `lieuNaissMereHomme`,`homme`.`adrMere` AS `adrMereHomme`,`homme`.`profMere` AS `profMereHomme`,`homme`.`vivMere` AS `vivMereHomme`,`homme`.`numPere` AS `numPereHomme`,concat(`homme`.`nomPere`,' ',`homme`.`prenomPere`) AS `nomPereHommeComplet`,`homme`.`nomPere` AS `nomPereHomme`,`homme`.`prenomPere` AS `prenomPereHomme`,`homme`.`dateNaissPere` AS `dateNaissPereHomme`,`homme`.`lieuNaissPere` AS `lieuNaissPereHomme`,`homme`.`adrPere` AS `adrPereHomme`,`homme`.`profPere` AS `profPereHomme`,`homme`.`vivPere` AS `vivPereHomme`,`femme`.`numMere` AS `numMereFemme`,concat(`femme`.`nomMere`,' ',`femme`.`prenomMere`) AS `nomMereFemmeComplet`,`femme`.`nomMere` AS `nomMereFemme`,`femme`.`prenomMere` AS `prenomMereFemme`,`femme`.`dateNaissMere` AS `dateNaissMereFemme`,`femme`.`lieuNaissMere` AS `lieuNaissMereFemme`,`femme`.`adrMere` AS `adrMereFemme`,`femme`.`profMere` AS `profMereFemme`,`femme`.`vivMere` AS `vivMereFemme`,`femme`.`numPere` AS `numPereFemme`,concat(`femme`.`nomPere`,' ',`femme`.`prenomPere`) AS `nomPereFemmeComplet`,`femme`.`nomPere` AS `nomPereFemme`,`femme`.`prenomPere` AS `prenomPereFemme`,`femme`.`dateNaissPere` AS `dateNaissPereFemme`,`femme`.`lieuNaissPere` AS `lieuNaissPereFemme`,`femme`.`adrPere` AS `adrPereFemme`,`femme`.`profPere` AS `profPereFemme`,`femme`.`vivPere` AS `vivPereFemme`,concat(`off`.`nomOff`,' ',`off`.`prenomOff`) AS `nomOff`,`off`.`fonction` AS `fonction` from (((((((`mariage` `m` join `personne` `h`) join `personne` `f`) join `personne` `t1`) join `personne` `t2`) join `parents` `femme`) join `parents` `homme`) join `officier` `off`) where `m`.`numHomme` = `h`.`numPers` and `m`.`numFemme` = `f`.`numPers` and `m`.`numTem1` = `t1`.`numPers` and `m`.`numTem2` = `t2`.`numPers` and `off`.`numOff` = `m`.`numOff` and `femme`.`numEnfant` = `m`.`numFemme` and `homme`.`numEnfant` = `m`.`numHomme` group by `m`.`numActeMariage` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `actenaissance`
--

/*!50001 DROP TABLE IF EXISTS `actenaissance`*/;
/*!50001 DROP VIEW IF EXISTS `actenaissance`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `actenaissance` AS select `n`.`numNaiss` AS `numNaiss`,`n`.`numActeNaiss` AS `numActeNaiss`,`n`.`legitime` AS `legitime`,`n`.`typeNaiss` AS `typeNaiss`,`n`.`nomEnfant` AS `nomEnfant`,`n`.`prenomEnfant` AS `prenomEnfant`,`n`.`sexeEnfant` AS `sexeEnfant`,`n`.`dateNaissEnfant` AS `dateNaissEnfant`,`n`.`heureNaissEnfant` AS `heureNaissEnfant`,`n`.`lieuNaissEnfant` AS `lieuNaissEnfant`,`n`.`codeReg` AS `codeReg`,`n`.`numPere` AS `numPere`,`n`.`numMere` AS `numMere`,`n`.`numOff` AS `numOff`,`n`.`imgActeNaiss` AS `imgActeNaiss`,`n`.`typeImgNaiss` AS `typeImgNaiss`,`n`.`jumeau` AS `jumeau`,concat(`n`.`nomEnfant`,' ',`n`.`prenomEnfant`) AS `nomCompletEnfant`,concat(`pere`.`nomPers`,' ',`pere`.`prenomPers`) AS `nomPere`,`pere`.`dateNaissPers` AS `dateNaissPere`,`pere`.`lieuNaissPers` AS `lieuNaissPere`,`pere`.`profPers` AS `profPere`,`pere`.`adressePers` AS `adrPere`,`pere`.`age` AS `agePere`,`pere`.`vivant` AS `vivPere`,concat(`mere`.`nomPers`,' ',`mere`.`prenomPers`) AS `nomMere`,`mere`.`dateNaissPers` AS `dateNaissMere`,`mere`.`lieuNaissPers` AS `lieuNaissMere`,`mere`.`profPers` AS `profMere`,`mere`.`adressePers` AS `adrMere`,`mere`.`age` AS `ageMere`,`mere`.`vivant` AS `vivMere`,concat(`off`.`nomOff`,' ',`off`.`prenomOff`) AS `nomOff`,`off`.`fonction` AS `fonction`,`reg`.`nomReg` AS `nomReg`,`reg`.`dateReg` AS `dateReg` from ((((`naissance` `n` join `personne` `pere`) join `personne` `mere`) join `officier` `off`) join `registre` `reg`) where `n`.`numMere` = `mere`.`numPers` and `n`.`numPere` = `pere`.`numPers` and `off`.`numOff` = `n`.`numOff` and `n`.`codeReg` = `reg`.`codeReg` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `actereconnaissance`
--

/*!50001 DROP TABLE IF EXISTS `actereconnaissance`*/;
/*!50001 DROP VIEW IF EXISTS `actereconnaissance`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `actereconnaissance` AS select `r1`.`numRec` AS `numRec`,`r1`.`numActeRec` AS `numActeRec`,`r1`.`codeReg` AS `codeReg`,`r1`.`numOff` AS `numOff`,`r1`.`dateRec` AS `dateRec`,`r1`.`heureRec` AS `heureRec`,`r1`.`imgActeRec` AS `imgActeRec`,`r1`.`typeImgRec` AS `typeImgRec`,`r2`.`nomEnfant` AS `nomEnfant`,`r2`.`prenomEnfant` AS `prenomEnfant`,concat(`r2`.`nomEnfant`,' ',`r2`.`prenomEnfant`) AS `nomCompletEnfant`,`r2`.`sexeEnfant` AS `sexeEnfant`,`r2`.`dateNaissEnfant` AS `dateNaissEnfant`,`r2`.`lieuNaissEnfant` AS `lieuNaissEnfant`,concat(`r2`.`nomMere`,' ',`r2`.`prenomMere`) AS `nomMere`,`p`.`numPers` AS `numPers`,`p`.`nomPers` AS `nomPers`,`p`.`prenomPers` AS `prenomPers`,`p`.`dateNaissPers` AS `dateNaissPers`,`p`.`lieuNaissPers` AS `lieuNaissPers`,`p`.`adressePers` AS `adressePers`,`p`.`profPers` AS `profPers`,`p`.`vivant` AS `vivant`,`p`.`nationalite` AS `nationalite`,`p`.`age` AS `age`,concat(`p`.`nomPers`,' ',`p`.`prenomPers`) AS `nomPere`,concat(`off`.`nomOff`,' ',`off`.`prenomOff`) AS `nomOff`,`off`.`fonction` AS `fonction` from (((`reconnaissance` `r1` join `reconnaitre` `r2`) join `personne` `p`) join `officier` `off`) where `off`.`numOff` = `r1`.`numOff` and `p`.`numPers` = `r2`.`numPere` and `r1`.`numRec` = `r2`.`numRec` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `declarantdeces`
--

/*!50001 DROP TABLE IF EXISTS `declarantdeces`*/;
/*!50001 DROP VIEW IF EXISTS `declarantdeces`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `declarantdeces` AS select `d`.`numDeces` AS `numDeces`,`d`.`declarant` AS `declarant`,`d`.`dateDecDeces` AS `dateDecDeces`,`d`.`heureDecDeces` AS `heureDecDeces`,`p`.`nomPers` AS `nomDec`,`p`.`prenomPers` AS `prenomDec`,`p`.`lieuNaissPers` AS `lieuNaissDec`,`p`.`dateNaissPers` AS `dateNaissDec`,`p`.`profPers` AS `profDec`,`p`.`adressePers` AS `adrDec` from (`declarerdeces` `d` join `personne` `p`) where `d`.`numPers` = `p`.`numPers` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `declarantnaissance`
--

/*!50001 DROP TABLE IF EXISTS `declarantnaissance`*/;
/*!50001 DROP VIEW IF EXISTS `declarantnaissance`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `declarantnaissance` AS select `d`.`numNaiss` AS `numNaiss`,`d`.`declarant` AS `declarant`,`d`.`dateDecNaiss` AS `dateDecNaiss`,`d`.`heureDecNaiss` AS `heureDecNaiss`,`d`.`present` AS `present`,`p`.`nomPers` AS `nomDec`,`p`.`prenomPers` AS `prenomDec`,`p`.`lieuNaissPers` AS `lieuNaissDec`,`p`.`dateNaissPers` AS `dateNaissDec`,`p`.`profPers` AS `profDec`,`p`.`adressePers` AS `adrDec` from (`declarernaiss` `d` join `personne` `p`) where `d`.`numPers` = `p`.`numPers` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `jugementdeces`
--

/*!50001 DROP TABLE IF EXISTS `jugementdeces`*/;
/*!50001 DROP VIEW IF EXISTS `jugementdeces`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `jugementdeces` AS select `j`.`numJugement` AS `numJugement`,`j`.`numJuge` AS `numJuge`,`j`.`dateJugement` AS `dateJugement`,`j`.`dateReception` AS `dateReception`,`j`.`dateEnregistre` AS `dateEnregistre`,`j`.`objetJugement` AS `objetJugement`,`j`.`origineJugement` AS `origineJugement`,`c`.`numDeces` AS `numDeces`,`jg`.`nomJuge` AS `nomJuge`,`jg`.`nomGreffier` AS `nomGreffier` from (((`jugement` `j` join `concernerjugement` `c`) join `jugesortir` `js`) join `jugegreffier` `jg`) where `j`.`numJugement` = `c`.`numJugement` and `j`.`numJugement` = `js`.`numJugement` and `js`.`numJuge` = `jg`.`numJuge` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `jugementnaissance`
--

/*!50001 DROP TABLE IF EXISTS `jugementnaissance`*/;
/*!50001 DROP VIEW IF EXISTS `jugementnaissance`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `jugementnaissance` AS select `j`.`numJugement` AS `numJugement`,`j`.`numJuge` AS `numJuge`,`j`.`dateJugement` AS `dateJugement`,`j`.`dateReception` AS `dateReception`,`j`.`dateEnregistre` AS `dateEnregistre`,`j`.`objetJugement` AS `objetJugement`,`j`.`origineJugement` AS `origineJugement`,`c`.`numNaiss` AS `numNaiss` from (`jugement` `j` join `enoncerjugement` `c`) where `j`.`numJugement` = `c`.`numJugement` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `parentnaissance`
--

/*!50001 DROP TABLE IF EXISTS `parentnaissance`*/;
/*!50001 DROP VIEW IF EXISTS `parentnaissance`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `parentnaissance` AS select `n`.`numNaiss` AS `numNaiss`,`mere`.`nomPers` AS `nomMere`,`mere`.`prenomPers` AS `prenomMere`,`mere`.`dateNaissPers` AS `dateNaissMere`,`mere`.`lieuNaissPers` AS `lieuNaissMere`,`mere`.`adressePers` AS `adrMere`,`mere`.`age` AS `ageMere`,`mere`.`profPers` AS `profMere`,`pere`.`vivant` AS `vivPere`,`pere`.`nomPers` AS `nomPere`,`pere`.`prenomPers` AS `prenomPere`,`pere`.`dateNaissPers` AS `dateNaissPere`,`pere`.`lieuNaissPers` AS `lieuNaissPere`,`pere`.`adressePers` AS `adrPere`,`pere`.`age` AS `agePere`,`pere`.`profPers` AS `profPere`,`mere`.`vivant` AS `vivMere` from ((`personne` `pere` join `personne` `mere`) join `naissance` `n`) where `n`.`numPere` = `pere`.`numPers` and `n`.`numMere` = `mere`.`numPers` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `parents`
--

/*!50001 DROP TABLE IF EXISTS `parents`*/;
/*!50001 DROP VIEW IF EXISTS `parents`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `parents` AS select `mere`.`numPers` AS `numMere`,`pere`.`numPers` AS `numPere`,`mere`.`nomPers` AS `nomMere`,`mere`.`prenomPers` AS `prenomMere`,`mere`.`dateNaissPers` AS `dateNaissMere`,`mere`.`lieuNaissPers` AS `lieuNaissMere`,`mere`.`adressePers` AS `adrMere`,`mere`.`age` AS `ageMere`,`mere`.`profPers` AS `profMere`,`mere`.`vivant` AS `vivMere`,`pere`.`nomPers` AS `nomPere`,`pere`.`prenomPers` AS `prenomPere`,`pere`.`dateNaissPers` AS `dateNaissPere`,`pere`.`lieuNaissPers` AS `lieuNaissPere`,`pere`.`adressePers` AS `adrPere`,`pere`.`age` AS `agePere`,`pere`.`profPers` AS `profPere`,`pere`.`vivant` AS `vivPere`,`p`.`numEnfant` AS `numEnfant` from (((`pere` `p` join `mere` `m`) join `personne` `pere`) join `personne` `mere`) where `p`.`numEnfant` = `m`.`numEnfant` and `pere`.`numPers` = `p`.`numPere` and `mere`.`numPers` = `m`.`numMere` */;
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

-- Dump completed on 2021-05-31 10:30:01
