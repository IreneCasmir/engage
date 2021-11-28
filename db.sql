-- MariaDB dump 10.19  Distrib 10.6.5-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mini_lms
-- ------------------------------------------------------
-- Server version	10.6.5-MariaDB-1:10.6.5+maria~bionic

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
-- Table structure for table `CS5678_Quiz1`
--

DROP TABLE IF EXISTS `CS5678_Quiz1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CS5678_Quiz1` (
  `qid` int(11) NOT NULL,
  `qn` varchar(200) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY (`qid`,`qn`,`opt1`,`opt2`,`opt3`,`ans`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CS5678_Quiz1`
--

LOCK TABLES `CS5678_Quiz1` WRITE;
/*!40000 ALTER TABLE `CS5678_Quiz1` DISABLE KEYS */;
INSERT INTO `CS5678_Quiz1` VALUES (1,'In what type of learning labelled training data is used','unsupervised learning','supervised learning','reinforcement learning','supervised learning'),(2,'Data used to build a data mining model.','validation data','test data','training data','training data'),(3,'what is ml','a','b','c','a');
/*!40000 ALTER TABLE `CS5678_Quiz1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CS6789_Quiz0`
--

DROP TABLE IF EXISTS `CS6789_Quiz0`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CS6789_Quiz0` (
  `qid` int(11) NOT NULL,
  `qn` varchar(200) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY (`qid`,`qn`,`opt1`,`opt2`,`opt3`,`ans`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CS6789_Quiz0`
--

LOCK TABLES `CS6789_Quiz0` WRITE;
/*!40000 ALTER TABLE `CS6789_Quiz0` DISABLE KEYS */;
/*!40000 ALTER TABLE `CS6789_Quiz0` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Questions`
--

DROP TABLE IF EXISTS `Questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Questions` (
  `course_id` varchar(20) NOT NULL,
  `qname` varchar(20) NOT NULL,
  `qn` varchar(200) DEFAULT NULL,
  `ans` varchar(100) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  PRIMARY KEY (`qname`,`course_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `Questions_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Questions`
--

LOCK TABLES `Questions` WRITE;
/*!40000 ALTER TABLE `Questions` DISABLE KEYS */;
INSERT INTO `Questions` VALUES ('CS1234','quiz1','Linux is not an operating system','false','false','true','none of the above');
/*!40000 ALTER TABLE `Questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Resources`
--

DROP TABLE IF EXISTS `Resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Resources` (
  `course_id` varchar(20) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `text` varchar(600) NOT NULL,
  PRIMARY KEY (`course_id`,`text`),
  CONSTRAINT `Resources_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Resources`
--

LOCK TABLES `Resources` WRITE;
/*!40000 ALTER TABLE `Resources` DISABLE KEYS */;
INSERT INTO `Resources` VALUES ('CS1234','https://www.geeksforgeeks.org/operating-systems/','Intro to Operating Systems'),('CS1234','','Popular Operating Systems are Windows,LINUX etc.,'),('CS1234','https://www.uow.edu.au/student/learning-co-op/technology-and-software/operating-systems/','understanding OS'),('CS2345','https://www.hitbullseye.com/Probability-Examples.php','questions on probability'),('CS4567','https://www.mips.com/','MIPS'),('CS5678','https://www.javatpoint.com/machine-learning-interview-questions','ml interview questions'),('CS5678','https://mcqmate.com/topic/3/machine-learning-set-1','questions on ML'),('CS6789','https://www.kaspersky.com/resource-center/definitions/what-is-cryptography','intro'),('CS9009','https://www.youtube.com/watch?v=NybHckSEQBI','algebra basics');
/*!40000 ALTER TABLE `Resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES ('CS1234','Operating Systems'),('CS2345','Probability'),('CS3456','Logic'),('CS4567','Computer Architecture'),('CS5678','Machine Learning'),('CS6789','Cryptography'),('CS9009','Algebra');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses_taken`
--

DROP TABLE IF EXISTS `courses_taken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses_taken` (
  `s_id` varchar(20) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  PRIMARY KEY (`s_id`,`course_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `courses_taken_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  CONSTRAINT `courses_taken_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses_taken`
--

LOCK TABLES `courses_taken` WRITE;
/*!40000 ALTER TABLE `courses_taken` DISABLE KEYS */;
INSERT INTO `courses_taken` VALUES ('11111','CS1234'),('11111','CS2345'),('11111','CS5678'),('11112','CS1234'),('11112','CS2345'),('11112','CS4567'),('11112','CS5678'),('11112','CS9009'),('11113','CS1234'),('11113','CS3456'),('11113','CS4567'),('11113','CS5678'),('11113','CS6789'),('11113','CS9009'),('11114','CS1234'),('11114','CS4567'),('11114','CS5678'),('11114','CS9009'),('11122','CS1234'),('11122','CS2345'),('11122','CS4567'),('11122','CS5678'),('11122','CS9009'),('11134','CS3456'),('11134','CS5678'),('11134','CS9009');
/*!40000 ALTER TABLE `courses_taken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses_taught`
--

DROP TABLE IF EXISTS `courses_taught`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses_taught` (
  `t_id` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  PRIMARY KEY (`t_id`,`course_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `courses_taught_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teacher` (`t_id`),
  CONSTRAINT `courses_taught_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses_taught`
--

LOCK TABLES `courses_taught` WRITE;
/*!40000 ALTER TABLE `courses_taught` DISABLE KEYS */;
INSERT INTO `courses_taught` VALUES ('T123','CS1234'),('T123','CS9009'),('T234','CS2345'),('T345','CS3456'),('T456','CS4567'),('T567','CS5678'),('T567','CS6789');
/*!40000 ALTER TABLE `courses_taught` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exams` (
  `course_id` varchar(20) NOT NULL,
  `quiz_name` varchar(100) NOT NULL,
  `quiz_date` date DEFAULT NULL,
  `quiz_time` time DEFAULT NULL,
  `duration` time DEFAULT NULL,
  PRIMARY KEY (`course_id`,`quiz_name`),
  CONSTRAINT `exams_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exams`
--

LOCK TABLES `exams` WRITE;
/*!40000 ALTER TABLE `exams` DISABLE KEYS */;
INSERT INTO `exams` VALUES ('CS1234','quiz1','2021-11-29','10:00:00','00:00:12'),('CS1234','quiz2','2021-11-29','10:00:00','00:01:20'),('CS5678','Quiz1','2021-11-30','10:00:00','00:00:10'),('CS6789','Quiz0','2021-11-30','10:00:00','00:00:10');
/*!40000 ALTER TABLE `exams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scores` (
  `s_id` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `q_name` varchar(20) NOT NULL,
  `score` float DEFAULT NULL,
  `flag` int(11) DEFAULT 0,
  PRIMARY KEY (`s_id`,`course_id`,`q_name`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  CONSTRAINT `scores_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scores`
--

LOCK TABLES `scores` WRITE;
/*!40000 ALTER TABLE `scores` DISABLE KEYS */;
/*!40000 ALTER TABLE `scores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `s_id` varchar(20) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('11111','Deena'),('11112','Gautham'),('11113','Geetha'),('11114','Hima'),('11115','Ishaan'),('11116','Jai'),('11122','Riya'),('11124','Rehan'),('11134','Tessy');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_login`
--

DROP TABLE IF EXISTS `student_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_login` (
  `id` varchar(20) NOT NULL,
  `password` varchar(270) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `student_login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_login`
--

LOCK TABLES `student_login` WRITE;
/*!40000 ALTER TABLE `student_login` DISABLE KEYS */;
INSERT INTO `student_login` VALUES ('11112','$2y$10$3ZjAmNq9e4z6rk/j0vc2qeVioyGVMFI.9YTNfKLcwWMTzpsMQQqC.'),('11113','$2y$10$u.xgGuYeLE02VIaFjhD88.6U9SLCuLfdajES7lSsprIFQ0RbG8NAK'),('11114','$2y$10$libcMlJbE5cXOSqLCl1obeXqjQ5YjKUnx.v0bXCtC5WWsEujeohsG');
/*!40000 ALTER TABLE `student_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `t_id` varchar(20) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES ('T123','Jaya'),('T234','Sara'),('T345','Harry'),('T456','Jeni'),('T567','Ron');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_login`
--

DROP TABLE IF EXISTS `teacher_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_login` (
  `id` varchar(20) NOT NULL,
  `password` varchar(270) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `teacher_login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `teacher` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_login`
--

LOCK TABLES `teacher_login` WRITE;
/*!40000 ALTER TABLE `teacher_login` DISABLE KEYS */;
INSERT INTO `teacher_login` VALUES ('T123','$2y$10$s17wWLPIlrphK7k7gO1UoOHtLKaOJiUnk7Kb03XhPgf.HF80ayqq2'),('T345','$2y$10$cKH5Vok0IA.OxGa7/LWxJOtrhgBCB6vVi4tP7ElZeYTEPIKB5jP6S'),('T567','$2y$10$M3wjb/03ilk7D2OfiNpZkOf/m9G.D50uZQQait9vxE9czzxDkH/g.');
/*!40000 ALTER TABLE `teacher_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-28 17:46:32
