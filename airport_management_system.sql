-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: DBMS
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `airline`
--

DROP TABLE IF EXISTS `airline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `airline` (
  `airline_id` varchar(3) NOT NULL,
  `airline_name` varchar(50) DEFAULT NULL,
  `3_digit_code` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`airline_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airline`
--

LOCK TABLES `airline` WRITE;
/*!40000 ALTER TABLE `airline` DISABLE KEYS */;
INSERT INTO `airline` VALUES ('9W','Jet Airways','789'),('AA','American Airlines','001'),('AI','Air India Limited','098'),('BA','British Airways','125'),('EK','Emirates','176'),('EY','Ethiad Airways','607'),('LH','Lufthansa','220'),('QR','Qatar Airways','157');
/*!40000 ALTER TABLE `airline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `airport`
--

DROP TABLE IF EXISTS `airport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `airport` (
  `ap_name` varchar(100) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city_name` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ap_name`),
  UNIQUE KEY `website` (`website`),
  KEY `CNAME` (`city_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airport`
--

LOCK TABLES `airport` WRITE;
/*!40000 ALTER TABLE `airport` DISABLE KEYS */;
INSERT INTO `airport` VALUES ('Chandigarh International Airport','India','Chandigarh','http://airportchandigarh.com/'),('Chatrapati Shivaji International Airport','India','Mumbai','http://www.csia.in/'),('Dallas/Fort Worth International Airport','United States','Fort Worth','https://www.dfwairport.com'),('Frankfurt Airport','Germany','Frankfurt','https://www.frankfurt-airport.com/en/flights---more/flights.html'),('George Bush Intercontinental Airport','United States','Houston','https://www.airport-houston.com/'),('Indira Gandhi International Airport','India','New Delhi','https://www.newdelhiairport.in/Default.aspx'),('John F. Kennedy International Airport','United States','New York City','https://www.airport-jfk.com/'),('Kempegowda International Airport','India','Bengaluru','http://www.bengaluruairport.com'),('Louisville International Airport','United States','Louisville','http://www.flylouisville.com/'),('Rajiv Gandhi International Airport','India','Hyderabad','http://www.hyderabad.aero/traveller.aspx'),('San Francisco International Airport','United States','San Francisco','https://www.flysfo.com/');
/*!40000 ALTER TABLE `airport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arrivals`
--

DROP TABLE IF EXISTS `arrivals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arrivals` (
  `flight_number` varchar(20) NOT NULL,
  `arriving_from` varchar(100) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  PRIMARY KEY (`flight_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arrivals`
--

LOCK TABLES `arrivals` WRITE;
/*!40000 ALTER TABLE `arrivals` DISABLE KEYS */;
INSERT INTO `arrivals` VALUES ('AA6261','Milan ','2017-11-15'),('AA6288','Barcelona ','2017-11-15'),('AA6581','Frankfurt ','2017-11-15'),('AA6693','Newcastle ','2017-11-15'),('AB5229','Newcastle ','2017-11-15'),('AC6035','Athens','2017-11-15'),('AC6910','Dublin ','2017-11-15'),('AF8095','Nairobi ','2017-11-16'),('AT800','Casablanca ','2017-11-16'),('AY5458','Los Angeles ','2017-11-16'),('BA038','Kolkata','2017-11-16'),('BA1333','Newcastle ','2017-11-16'),('BA268','Chennai','2017-11-16'),('BA475','Goa','2017-11-16'),('BA589','New Delhi','2017-11-16'),('BA5968','Dublin ','2017-11-16'),('BA859','Shillong','2017-11-16'),('BA883','Kiev ','2017-11-17'),('BA891','Sofia ','2017-11-17'),('BA927','Munich ','2017-11-17'),('CA937','Mumbai','2017-11-17'),('CX1292','Newcastle ','2017-11-17'),('EI168','Dublin ','2017-11-17'),('EI8968','Los Angeles ','2017-11-17'),('IB4662','Los Angeles ','2017-11-17'),('IB7458','Barcelona ','2017-11-17'),('IB7547','Newcastle ','2017-11-17'),('JJ2787','Newcastle ','2017-11-17'),('JL7722','Prague ','2017-11-17'),('JL7742','Barcelona ','2017-11-17'),('JL7752','Newcastle ','2017-11-17'),('KL4224','Nairobi ','2017-11-17'),('KQ100','Nairobi ','2017-11-18'),('LH2476','Munich ','2017-11-18'),('LH910','Frankfurt ','2017-11-18'),('MU8793','Newcastle ','2017-11-18'),('NH211','Tokyo ','2017-11-18'),('QR5982','Newcastle ','2017-11-18'),('SQ2501','Dubai ','2017-11-18'),('SQ2862','Athens','2017-11-18'),('TP7444','Athens','2017-11-18'),('TU790','Tunis ','2017-11-18'),('UA7668','Dublin ','2017-11-18'),('UA9088','Frankfurt ','2017-11-18'),('UA9175','Munich ','2017-11-18'),('VS401','Dubai ','2017-11-18'),('VS7937','Beijing ','2017-11-18');
/*!40000 ALTER TABLE `arrivals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `car_number` varchar(255) NOT NULL,
  `car_model` varchar(555) DEFAULT NULL,
  `manufacture_year` int(4) DEFAULT NULL,
  PRIMARY KEY (`car_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES ('1111','i10',2015),('2222','alto',2011),('3333','swift dzire',2013),('4444','micra',2000),('5555','Baleno',1995);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departures`
--

DROP TABLE IF EXISTS `departures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departures` (
  `flight_number` varchar(20) NOT NULL,
  `departing_to` varchar(100) DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  PRIMARY KEY (`flight_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departures`
--

LOCK TABLES `departures` WRITE;
/*!40000 ALTER TABLE `departures` DISABLE KEYS */;
INSERT INTO `departures` VALUES ('9W4932',' Paris','2017-11-15'),('AA6180',' Los Angeles','2017-11-15'),('AA6197',' Chicago','2017-11-15'),('AA6282',' Madrid','2017-11-15'),('AA6386','Alabama','2017-11-15'),('AA6450',' Duesseldorf','2017-11-15'),('AA6454',' Stockholm','2017-11-15'),('AA6744',' Madrid','2017-11-16'),('AB5048',' Munich','2017-11-16'),('AB5275',' Duesseldorf','2017-11-16'),('AC6952',' Cologne/Bonn','2017-11-16'),('AC9941',' Oslo','2017-11-16'),('AF1781',' Paris','2017-11-16'),('AM6046',' Paris','2017-11-16'),('AY5459',' Los Angeles','2017-11-16'),('AY5537',' Chicago','2017-11-16'),('AY5932',' Stockholm','2017-11-17'),('BA269',' Los Angeles','2017-11-17'),('BA297','Chicago','2017-11-17'),('BA462',' Madrid','2017-11-17'),('BA518',' Madrid','2017-11-17'),('BA782','Manchester','2017-11-17'),('BA944',' Duesseldorf','2017-11-17'),('BA960',' Munich','2017-11-17'),('DL8721',' Paris','2017-11-17'),('EI8969',' Los Angeles','2017-11-17'),('EI8997',' Chicago','2017-11-17'),('EW465','Leh','2017-11-17'),('EW9465',' Duesseldorf','2017-11-17'),('EY7474',' Oslo','2017-11-17'),('G35089',' Paris','2017-11-18'),('IB3177',' Madrid','2017-11-18'),('IB4663',' Los Angeles','2017-11-18'),('IB4677',' Chicago','2017-11-18'),('IB4784',' Stockholm','2017-11-18'),('IB7447',' Madrid','2017-11-18'),('JL7151',' Stockholm','2017-11-18'),('JL7839',' Madrid','2017-11-18'),('KL1020',' Amsterdam','2017-11-18'),('KQ1020',' Amsterdam','2017-11-18'),('KU102',' Kuwait','2017-11-18'),('LH909',' Frankfurt','2017-11-18'),('MK9419',' Paris','2017-11-18'),('MU4980',' Paris','2017-11-18'),('NZ001','Los Angeles And  Auckland','2017-11-18'),('SK806',' Mumbai','2017-11-18'),('UA7035',' Oslo','2017-11-18'),('UA9622',' Duesseldorf','2017-11-18'),('UA9648',' Cologne/Bonn','2017-11-18'),('UU8781',' Paris','2017-11-18');
/*!40000 ALTER TABLE `departures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `SSN` int(11) NOT NULL,
  `FNAME` varchar(20) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `PHONE` int(11) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `SALARY` int(11) DEFAULT NULL,
  `SEX` varchar(1) DEFAULT NULL,
  `JOBTYPE` varchar(30) DEFAULT NULL,
  `SHIFT` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`SSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (123456789,'LINDA','GOODMAN','731 Fondren, Houston, TX',2147483647,35,50000,'F','ADMINISTRATIVE SUPPORT','NIGHT'),(125478909,'PRATIK','GOMES','334 VITRUVIAN PARK, ALBANY, NY',2147483647,56,50000,'M','TRAFFIC MONITOR','DAY'),(324567897,'ADIT','DESAI','987 SOMNATH, CHANDIGARH, INDIA',2147483647,36,50000,'M','TRAFFIC MONITOR','DAY'),(333445555,'JOHNY','PAUL','638 Voss, Houston, TX',2147483647,40,50000,'M','ADMINISTRATIVE SUPPORT','DAY'),(666884444,'SHELDON','COOPER','345 CHERRY PARK, HESSE,GERMANY',1254678903,55,50000,'M','TRAFFIC MONITOR','NIGHT'),(987654321,'SHERLOCK','HOLMES','123 TOP HILL, SAN Francisco,CA',2147483647,47,50000,'M','TRAFFIC MONITOR','DAY'),(987987987,'NIKITA','PAUL','110 SYNERGY PARK, DALLAS,TX',2147483647,33,50000,'F','ENGINEER','DAY'),(999887777,'JAMES','BOND','3321 Castle, Spring, TX',2147483647,50,50000,'M','ENGINEER','NIGHT');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flight`
--

DROP TABLE IF EXISTS `flight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flight` (
  `scheduled` time DEFAULT NULL,
  `airline` varchar(255) DEFAULT NULL,
  `flight_number` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) DEFAULT NULL,
  `terminal` int(11) DEFAULT NULL,
  `flight_details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`flight_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flight`
--

LOCK TABLES `flight` WRITE;
/*!40000 ALTER TABLE `flight` DISABLE KEYS */;
INSERT INTO `flight` VALUES ('15:35:00','Jet Airways','9W4932','Flight Closing',4,'http://www.heathrow.com/departures/flight-details/9w4932-paris-cdg'),('15:30:00','American Airlines','AA6180','Flight closing',5,'http://www.heathrow.com/departures/flight-details/aa6180-los-angeles-lax'),('15:45:00','American Airlines','AA6197','Flight closing',5,'http://www.heathrow.com/departures/flight-details/aa6197-chicago-ord'),('15:25:00','American Airlines','AA6261','Landed 15:15:00',5,'http://www.heathrow.com/arrivals/flight-details/aa6261-milan-lin'),('15:35:00','American Airlines','AA6282','Gate closed',5,'http://www.heathrow.com/departures/flight-details/aa6282-madrid-mad'),('15:40:00','American Airlines','AA6288','Expected 16:08:00',3,'http://www.heathrow.com/arrivals/flight-details/aa6288-barcelona-bcn'),('15:30:00','American Airlines','AA6386','Gate closed',5,'http://www.heathrow.com/departures/flight-details/aa6386-munich-muc'),('15:50:00','American Airlines','AA6450','Flight closing',5,'http://www.heathrow.com/departures/flight-details/aa6450-duesseldorf-dus'),('15:40:00','American Airlines','AA6454','Gate closed',5,'http://www.heathrow.com/departures/flight-details/aa6454-stockholm-arn'),('15:55:00','American Airlines','AA6581','Expected 15:35:00',5,'http://www.heathrow.com/arrivals/flight-details/aa6581-frankfurt-fra'),('15:40:00','American Airlines','AA6693','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/aa6693-newcastle-ncl'),('15:45:00','American Airlines','AA6744','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/aa6744-madrid-mad'),('15:30:00','Air Berlin','AB5048','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ab5048-munich-muc'),('15:40:00','Air Berlin','AB5229','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/ab5229-newcastle-ncl'),('15:50:00','Air Berlin','AB5275','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ab5275-duesseldorf-dus'),('15:30:00','Air Canada','AC6035','Landed 15:12:00',2,'http://www.heathrow.com/arrivals/flight-details/ac6035-athens-ath'),('15:30:00','Air Canada','AC6910','Landed 15:11:00',2,'http://www.heathrow.com/arrivals/flight-details/ac6910-dublin-dub'),('15:50:00','Air Canada','AC6952','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/ac6952-cologne-bonn-cgn'),('15:35:00','Air Canada','AC9941','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/ac9941-oslo-osl'),('15:35:00','Air France','AF1781','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/af1781-paris-cdg'),('15:30:00','Air France','AF8095','Expected 15:40:00',4,'http://www.heathrow.com/arrivals/flight-details/af8095-nairobi-nbo'),('15:35:00','Aeromexico','AM6046','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/am6046-paris-cdg'),('15:50:00','Royal Air Maroc','AT800','Expected 15:51:00',4,'http://www.heathrow.com/arrivals/flight-details/at800-casablanca-cmn'),('15:25:00','Finnair','AY5458','Expected 15:48:00',5,'http://www.heathrow.com/arrivals/flight-details/ay5458-los-angeles-lax'),('15:30:00','Finnair','AY5459','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ay5459-los-angeles-lax'),('15:45:00','Finnair','AY5537','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ay5537-chicago-ord'),('15:40:00','Finnair','AY5932','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ay5932-stockholm-arn'),('15:35:00','Indian Airlines','BA038','Expected 15:06:00',5,'http://www.heathrow.com/arrivals/flight-details/ba038-beijing-pek'),('15:40:00','British Airways','BA1333','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/ba1333-newcastle-ncl'),('15:25:00','Indian Airlines','BA268','Expected 15:48:00',5,'http://www.heathrow.com/arrivals/flight-details/ba268-los-angeles-lax'),('15:30:00','British Airways','BA269','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ba269-los-angeles-lax'),('15:45:00','British Airways','BA297','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ba297-chicago-ord'),('15:35:00','British Airways','BA462','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ba462-madrid-mad'),('15:40:00','Indian Airlines','BA475','Expected 16:08:00',3,'http://www.heathrow.com/arrivals/flight-details/ba475-barcelona-bcn'),('15:45:00','British Airways','BA518','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ba518-madrid-mad'),('15:25:00','Indigo','BA589','Expected 15:15:00',5,'http://www.heathrow.com/arrivals/flight-details/ba589-milan-lin'),('15:30:00','British Airways','BA5968','Expected 15:11:00',2,'http://www.heathrow.com/arrivals/flight-details/ba5968-dublin-dub'),('15:40:00','British Airways','BA782','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ba782-stockholm-arn'),('15:40:00','GoAir','BA859','Expected 15:23:00',3,'http://www.heathrow.com/arrivals/flight-details/ba859-prague-prg'),('15:50:00','British Airways','BA883','Expected 15:17:00',5,'http://www.heathrow.com/arrivals/flight-details/ba883-kiev-kbp'),('15:40:00','British Airways','BA891','Expected 15:35:00',5,'http://www.heathrow.com/arrivals/flight-details/ba891-sofia-sof'),('15:45:00','British Airways','BA927','Expected 15:39:00',5,'http://www.heathrow.com/arrivals/flight-details/ba927-munich-muc'),('15:50:00','British Airways','BA944','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ba944-duesseldorf-dus'),('15:30:00','British Airways','BA960','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ba960-munich-muc'),('15:55:00','Air India','CA937','Expected 15:37:00',2,'http://www.heathrow.com/arrivals/flight-details/ca937-beijing-pek'),('15:40:00','Cathay Pacific Airways','CX1292','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/cx1292-newcastle-ncl'),('15:35:00','Delta Air Lines','DL8721','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/dl8721-paris-cdg'),('15:30:00','Aer Lingus','EI168','Expected 15:11:00',2,'http://www.heathrow.com/arrivals/flight-details/ei168-dublin-dub'),('15:25:00','Aer Lingus','EI8968','Expected 15:48:00',5,'http://www.heathrow.com/arrivals/flight-details/ei8968-los-angeles-lax'),('15:30:00','Aer Lingus','EI8969','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ei8969-los-angeles-lax'),('15:45:00','Aer Lingus','EI8997','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ei8997-chicago-ord'),('15:50:00','Jet Airways','EW465','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/ew465-cologne-bonn-cgn'),('15:40:00','Eurowings','EW9465','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/ew9465-duesseldorf-dus'),('15:35:00','Etihad Airways','EY7474','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/ey7474-oslo-osl'),('15:35:00','Gol Transportes AÃ©reos','G35089','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/g35089-paris-cdg'),('15:45:00','Iberia','IB3177','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ib3177-madrid-mad'),('15:25:00','Iberia','IB4662','Expected 15:48:00',5,'http://www.heathrow.com/arrivals/flight-details/ib4662-los-angeles-lax'),('15:30:00','Iberia','IB4663','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ib4663-los-angeles-lax'),('15:45:00','Iberia','IB4677','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ib4677-chicago-ord'),('15:40:00','Iberia','IB4784','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ib4784-stockholm-arn'),('15:35:00','Iberia','IB7447','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/ib7447-madrid-mad'),('15:40:00','Iberia','IB7458','Expected 16:08:00',3,'http://www.heathrow.com/arrivals/flight-details/ib7458-barcelona-bcn'),('15:40:00','Iberia','IB7547','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/ib7547-newcastle-ncl'),('15:40:00','LATAM Airlines','JJ2787','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/jj2787-newcastle-ncl'),('15:40:00','Japan Airlines','JL7151','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/jl7151-stockholm-arn'),('15:40:00','Japan Airlines','JL7722','Expected 15:23:00',3,'http://www.heathrow.com/arrivals/flight-details/jl7722-prague-prg'),('15:40:00','Japan Airlines','JL7742','Expected 16:08:00',3,'http://www.heathrow.com/arrivals/flight-details/jl7742-barcelona-bcn'),('15:40:00','Japan Airlines','JL7752','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/jl7752-newcastle-ncl'),('15:35:00','Japan Airlines','JL7839','Expected On Time',5,'http://www.heathrow.com/departures/flight-details/jl7839-madrid-mad'),('15:45:00','KLM - Royal Dutch Airlines','KL1020','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/kl1020-amsterdam-ams'),('15:30:00','KLM - Royal Dutch Airlines','KL4224','Expected 15:40:00',4,'http://www.heathrow.com/arrivals/flight-details/kl4224-nairobi-nbo'),('15:30:00','Kenya Airways','KQ100','Expected 15:40:00',4,'http://www.heathrow.com/arrivals/flight-details/kq100-nairobi-nbo'),('15:45:00','Kenya Airways','KQ1020','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/kq1020-amsterdam-ams'),('15:35:00','Kuwait Airways','KU102','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/ku102-kuwait-kwi'),('15:45:00','Lufthansa','LH2476','Expected 15:30:00',2,'http://www.heathrow.com/arrivals/flight-details/lh2476-munich-muc'),('15:30:00','Lufthansa','LH909','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/lh909-frankfurt-fra'),('15:45:00','Lufthansa','LH910','Expected 15:31:00',2,'http://www.heathrow.com/arrivals/flight-details/lh910-frankfurt-fra'),('15:35:00','Air Mauritius','MK9419','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/mk9419-paris-cdg'),('15:35:00','China Eastern ','MU4980','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/mu4980-paris-cdg'),('15:40:00','China Eastern ','MU8793','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/mu8793-newcastle-ncl'),('15:25:00','ANA','NH211','Expected 15:28:00',2,'http://www.heathrow.com/arrivals/flight-details/nh211-tokyo-hnd'),('15:30:00','Air New Zealand','NZ001','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/nz001-auckland-akl'),('15:40:00','Qatar Airways','QR5982','Expected 15:33:00',5,'http://www.heathrow.com/arrivals/flight-details/qr5982-newcastle-ncl'),('15:35:00','SiceJet','SK806','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/sk806-oslo-osl'),('15:40:00','Singapore Airlines','SQ2501','Expected 15:42:00',3,'http://www.heathrow.com/arrivals/flight-details/sq2501-dubai-dxb'),('15:30:00','Singapore Airlines','SQ2862','Expected 15:12:00',2,'http://www.heathrow.com/arrivals/flight-details/sq2862-athens-ath'),('15:30:00','TAP Portugal','TP7444','Expected 15:12:00',2,'http://www.heathrow.com/arrivals/flight-details/tp7444-athens-ath'),('15:50:00','Tunisair','TU790','Expected 16:16:00',4,'http://www.heathrow.com/arrivals/flight-details/tu790-tunis-tun'),('15:35:00','United Airlines','UA7035','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/ua7035-oslo-osl'),('15:30:00','United Airlines','UA7668','Expected 15:11:00',2,'http://www.heathrow.com/arrivals/flight-details/ua7668-dublin-dub'),('15:45:00','United Airlines','UA9088','Expected 15:31:00',2,'http://www.heathrow.com/arrivals/flight-details/ua9088-frankfurt-fra'),('15:45:00','United Airlines','UA9175','Expected 15:30:00',2,'http://www.heathrow.com/arrivals/flight-details/ua9175-munich-muc'),('15:40:00','United Airlines','UA9622','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/ua9622-duesseldorf-dus'),('15:50:00','United Airlines','UA9648','Expected On Time',2,'http://www.heathrow.com/departures/flight-details/ua9648-cologne-bonn-cgn'),('15:35:00','Air Austral','UU8781','Expected On Time',4,'http://www.heathrow.com/departures/flight-details/uu8781-paris-cdg'),('15:40:00','Virgin Atlantic','VS401','Expected 15:42:00',3,'http://www.heathrow.com/arrivals/flight-details/vs401-dubai-dxb'),('15:55:00','Virgin Atlantic','VS7937','Expected 15:37:00',2,'http://www.heathrow.com/arrivals/flight-details/vs7937-beijing-pek');
/*!40000 ALTER TABLE `flight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parking`
--

DROP TABLE IF EXISTS `parking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parking` (
  `service_id` int(11) DEFAULT '4',
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `contact` int(15) DEFAULT NULL,
  `car_number` int(8) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `entry_time` time DEFAULT NULL,
  `exit_date` date DEFAULT NULL,
  `exit_time` time DEFAULT NULL,
  `parking_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(5) DEFAULT NULL,
  PRIMARY KEY (`parking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parking`
--

LOCK TABLES `parking` WRITE;
/*!40000 ALTER TABLE `parking` DISABLE KEYS */;
INSERT INTO `parking` VALUES (4,'volcanus','sa@s.vom',323423,2345,'2017-11-11','11:11:00','2017-11-11','11:11:00',1,312),(4,'sa','s@g.com',55,3468,'2017-11-11','14:12:00','2017-11-11','16:12:00',2,394),(4,'mohit','mohit@mohit.com',777,1234,'2017-11-11','14:12:00','2017-11-11','16:12:00',3,408),(4,'Saksham','saksham@gmail.com',2147483647,378,'2017-11-15','12:00:00','2017-11-16','18:00:00',4,177);
/*!40000 ALTER TABLE `parking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rentals`
--

DROP TABLE IF EXISTS `rentals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rentals` (
  `service_id` int(11) DEFAULT '3',
  `rental_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(555) DEFAULT NULL,
  `contact` int(20) DEFAULT NULL,
  `license_number` varchar(44) DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `pickup_time` time DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `return_time` time DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `car_number` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`rental_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rentals`
--

LOCK TABLES `rentals` WRITE;
/*!40000 ALTER TABLE `rentals` DISABLE KEYS */;
INSERT INTO `rentals` VALUES (3,1,'Saksham Aggarwal','sakshamagarwal1997@gmail.com',2147483647,'RÄjasthÄn','2017-06-05','14:12:00','2017-06-11','11:11:00',3856,'bmw','3333'),(3,2,'volcanus','sa@s.vom',56456,'54654','2017-11-11','11:11:00','2017-11-11','11:11:00',3602,'audi','2222'),(3,3,'mohit','mohit@mohit.com',7777,'1234','2017-11-11','14:12:00','2017-11-11','12:12:00',3021,'Alto','2222'),(3,4,'adarsh','sakshamagarwal1997@gmail.com',2147483647,'213213','2012-12-12','12:12:00','2013-12-12','12:12:00',3081,'Baleno','5555'),(3,5,'adarsh','adarshjain583@gmail.com',67890,'54456','2017-11-15','13:00:00','2017-11-15','00:00:00',2695,'Swift Dzire','3333');
/*!40000 ALTER TABLE `rentals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurant_category`
--

DROP TABLE IF EXISTS `restaurant_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurant_category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurant_category`
--

LOCK TABLES `restaurant_category` WRITE;
/*!40000 ALTER TABLE `restaurant_category` DISABLE KEYS */;
INSERT INTO `restaurant_category` VALUES (1,'Casual Dining'),(2,'Coffee Shop'),(3,'Food Court'),(4,'Quick Service Restaurants');
/*!40000 ALTER TABLE `restaurant_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurants` (
  `service_id` int(11) NOT NULL DEFAULT '2',
  `rest_number` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `details` varchar(5000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `restaurant_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rest_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurants`
--

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
INSERT INTO `restaurants` VALUES (2,1,'T1 Departures','Baker Street is a Premium European style bakery cafe serving truly Italian Brewed Coffees and hot teas.\n','uploads/baker.png',2,'BAKER STREET'),(2,10,' T1 Departures ','The Irish House which serves lip-smacking food and a host of International and Domestic beers is one of the happening watering-holes in town.','uploads/irish.jpg',1,'The IRISH HOUSE'),(2,12,'T3 International Departures ','Mull over your favourite drink, grab a quick bite, relish a complete continental or Indian meal, or indulge your sweet tooth, all at one versatile cafe.','uploads/grid.png',3,'GRID BAR'),(2,23,'T3 International Departures ','Au Bon Pain is an American fast-casual bakery and cafe chain','uploads/au.jpg',4,'AU BON PAIN'),(2,34,'T2 Departures','Cafe Espresso is not just a quick serve cafe it is a concept providing patrons with a meeting place that is casual.\n','uploads/cafe-latte.jpg',2,'CAFE ESPRESSO'),(2,39,'T3 departures','\nYour favourite drink, grab a quick bite, relish a complete continental or Indian meal, or indulge your sweet tooth, all at one versatile cafe.','uploads/conn.png',1,'Connexions'),(2,47,'T5 domestic arrivals','Bercos is very well known for its appetizing Chinese and Thai food, Bercos is one of the most distinguished names in the culinary world.','uploads/bercos.jpg',3,'BERCOS'),(2,50,'T3 departures','Come and share with us the royalty and enigma of a \'POPCORN\'in a way that you have never experienced before. ','uploads/4700_BC_ComboPack_Black_2.png',4,'4700 BC');
/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'shops'),(2,'restaurants'),(3,'car_rental'),(4,'parking');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_category`
--

DROP TABLE IF EXISTS `shop_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_category` (
  `c_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_category`
--

LOCK TABLES `shop_category` WRITE;
/*!40000 ALTER TABLE `shop_category` DISABLE KEYS */;
INSERT INTO `shop_category` VALUES (8,'Convenience, Travel and News'),(2,'Duty Free'),(1,'Electronics'),(3,'Fashion'),(4,'Jewelery'),(6,'Perfume and Cosmetics'),(5,'Soveniers and Gifts'),(7,'Travel Accessories');
/*!40000 ALTER TABLE `shop_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shops` (
  `service_id` int(11) NOT NULL DEFAULT '1',
  `shop_number` int(11) NOT NULL DEFAULT '0',
  `category` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `details` varchar(5000) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `shop_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`shop_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shops`
--

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` VALUES (1,1,5,'uploads/5_1.png','Ferns N Petals, one the famous names in florist industry, offers you fresh flowers and gifts for all occasions ','T3 International Departures','FERNS & PETALS'),(1,2,4,'uploads/4_2.png','Amrapali is a globally renowned, respected and coveted luxury jewellery brand. ','T3 International Departures','AMRAPALI'),(1,4,4,'uploads/4_4.png','Tanishq jewellerynhas been synonymous with superior craftsmanship, exclusive designs and guaranteed product quality.','T1 Departures','TANISHQ'),(1,5,2,'uploads/2_5.png','For last minute impulsive buying of an extensive range of luxury watches and watch accessories from CFB, Omega, Tag Heuer, Rado and many more.','T3 International Departures','ETHOS'),(1,7,6,'uploads/6_7.png','India\'s leading Ayurveda Company offers Natural and Organic Treatment for Skin, Hair and Body Care ','T1 Departures','FOREST ESSENTIALS'),(1,8,5,'uploads/5_8.png','An ideal blend of the traditional and contemporary Indian gifts & souvenirs ','T3 International Departures','INDIAN DELITE'),(1,11,6,'uploads/6_11.png','Offering a large selection of professional quality makeup must-haves for All Ages, All Races, ','T1 Departures','MAC'),(1,12,3,'uploads/3_12.png','An impeccable collection of leather products that include ladies handbags, men bags, briefcases, garments and luggage in the finest Italian leathers. ','T1 Departures','DA MILANO'),(1,13,7,'uploads/7_13.png','A specialist shop for everything you need in for trekking and mountaineering. ','T3 Domestic Departures','BASECAMP'),(1,14,7,'uploads/7_14.png','Gute Reise -a one-stop solution for all your travel needs \r\n','T3 Domestic Arrivals','GUTE REISE'),(1,15,3,'uploads/3_15.png','Chic Handbags and accessories resonate through strong classic shapes that blend with modern textures and colours ','T3 Domestic Departures','COVO'),(1,21,1,'uploads/1_21.png','One stop shop for you and your gadget needs. Product categories are varied as appliances. ','T1 Arrivals','GADGET POINT'),(1,23,8,'uploads/8_23.png','RELAY is the world leading brand in Books, Press and Traveler Convenience by LS Travel Retail.','T1 Arrivals','RELAY'),(1,25,1,'uploads/1_25.png','A specialist retail chain for product categories as varied as appliances, entertainment, computers, imaging and communication.','T1 Departures','CROMA ZIP'),(1,27,8,'uploads/8_27.png','A newspaper, magazine, drink or snack, all your travel essentials. Pick up a bestseller or stock up on supplies.','T3 Domestic Arrivals','WH SMITH'),(1,40,2,'uploads/2_40.png','Armani is an Italian fashion house founded by Giorgio Armani which designs, distributes and retails haute couture, shoes, watches, jewelry',' T3 International Departures ','ARMANI JEANS'),(1,78,1,'uploads/airport_logo.png','hgcfyfdjfygjfy','fdhfxxfh','gfhf');
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time_table`
--

DROP TABLE IF EXISTS `time_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `time_table` (
  `airline` varchar(100) DEFAULT NULL,
  `flight_number` varchar(50) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `flight_type` varchar(20) DEFAULT NULL,
  `to_from` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_table`
--

LOCK TABLES `time_table` WRITE;
/*!40000 ALTER TABLE `time_table` DISABLE KEYS */;
INSERT INTO `time_table` VALUES ('Etihad Airways','EY228','Abu Dhabi','2017-11-15','07:55:00','International','Arrival'),('Etihad Airways','EY224','Abu Dhabi','2017-11-15','19:30:00','International','Arrival'),('Air India','AI113','Amritsar','2017-11-15','11:45:00','International','Arrival'),('Thai','TG331','Bangkok','2017-11-15','02:20:00','International','Arrival'),('Air India','AI333','Bangkok','2017-11-15','12:05:00','International','Arrival'),('Thai','TG315','Bangkok','2017-11-15','23:00:00','International','Arrival'),('Thai','TG323','Bangkok','2017-11-15','09:55:00','International','Arrival'),('Singapore Airlines','SQ406','Singapore','2017-11-15','20:20:00','International','Arrival'),('Singapore Airlines','SQ402','Singapore','2017-11-15','05:55:00','International','Arrival'),('Air India','AI381','Singapore','2017-11-15','11:30:00','International','Arrival'),('Air India Express','IX115','Abu Dhabi','2017-11-15','20:50:00','International','Departure'),('Etihad Airways','EY223','Abu Dhabi','2017-11-15','21:05:00','International','Departure'),('Etihad Airways','EY229','Abu Dhabi','2017-11-15','09:00:00','International','Departure'),('Air India','AI114','Amritsar','2017-11-16','12:40:00','International','Departure'),('Thai','TG316','Bangkok','2017-11-16','00:20:00','International','Departure'),('Thai','TG332','Bangkok','2017-11-16','03:30:00','International','Departure'),('Thai','TG324','Bangkok','2017-11-16','11:10:00','International','Departure'),('Air India','AI332','Bangkok','2017-11-16','13:45:00','International','Departure'),('Singapore Airlines','SQ401','Singapore','2017-11-16','09:05:00','International','Departure'),('Singapore Airlines','SQ403','Singapore','2017-11-16','22:10:00','International','Departure'),('Air India','AI380','Singapore','2017-11-16','23:00:00','International','Departure'),('Jet Airways','9W2642','Bhopal','2017-11-16','08:55:00','Domestic','Arrival'),('Air India','AI436','Bhopal','2017-11-17','09:25:00','Domestic','Arrival'),('Air India','AI763','Kolkata','2017-11-17','09:10:00','Domestic','Arrival'),('Jet Airways','9W2315','Kolkata','2017-11-17','09:30:00','Domestic','Arrival'),('Air Asia','I5549','Kolkata','2017-11-17','19:00:00','Domestic','Arrival'),('Air Asia','I5547','Kolkata','2017-11-17','01:20:00','Domestic','Arrival'),('Jet Airways','9W353','Mumbai','2017-11-17','19:05:00','Domestic','Arrival'),('Jet Airways','9W339','Mumbai','2017-11-17','05:05:00','Domestic','Arrival'),('SpiceJet','SG160','Mumbai','2017-11-17','08:10:00','Domestic','Arrival'),('Air India','AI677','Mumbai','2017-11-17','15:20:00','Domestic','Arrival'),('Air Asia','AI850','Pune','2017-11-17','21:00:00','Domestic','Arrival'),('Air Asia','AI854','Pune','2017-11-17','00:10:00','Domestic','Arrival'),('Jet Airways','9W2641','Bhopal','2017-11-17','05:40:00','Domestic','Departure'),('Air Asia','I5548','Kolkata','2017-11-18','04:55:00','Domestic','Departure'),('Air Asia','I5546','Kolkata','2017-11-18','19:10:00','Domestic','Departure'),('Air Asia','I5545','Kolkata','2017-11-18','11:45:00','Domestic','Departure'),('Air India','AI636','Mumbai','2017-11-18','15:05:00','Domestic','Departure'),('Air India','AI865','Mumbai','2017-11-18','10:00:00','Domestic','Departure'),('Air India','AI805','Mumbai','2017-11-18','20:00:00','Domestic','Departure'),('Jet Airways','9W354','Mumbai','2017-11-18','19:45:00','Domestic','Departure'),('Air India','AI853','Pune','2017-11-18','19:00:00','Domestic','Departure'),('Air India','AI849','Pune','2017-11-18','16:05:00','Domestic','Departure'),('Jet Airways','9W369','Pune','2017-11-18','16:10:00','Domestic','Departure');
/*!40000 ALTER TABLE `time_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-01 17:37:21
