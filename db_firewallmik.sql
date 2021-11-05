/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.20-MariaDB : Database - db_firewallmik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_firewallmik` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_firewallmik`;

/*Table structure for table `firewallfilter` */

DROP TABLE IF EXISTS `firewallfilter`;

CREATE TABLE `firewallfilter` (
  `chain` varchar(20) DEFAULT NULL,
  `layer7protokol` varchar(30) DEFAULT NULL,
  `action` varchar(30) DEFAULT NULL,
  `comment` varchar(30) DEFAULT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `idfilter` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`no`),
  KEY `FK_firewallfilter` (`layer7protokol`),
  CONSTRAINT `FK_firewallfilter` FOREIGN KEY (`layer7protokol`) REFERENCES `layer7protokol` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `firewallfilter` */

/*Table structure for table `layer7protokol` */

DROP TABLE IF EXISTS `layer7protokol`;

CREATE TABLE `layer7protokol` (
  `name` varchar(30) NOT NULL,
  `regexp` varchar(30) DEFAULT NULL,
  `id` varchar(30) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `layer7protokol` */

/*Table structure for table `tb_remotelogin` */

DROP TABLE IF EXISTS `tb_remotelogin`;

CREATE TABLE `tb_remotelogin` (
  `no` int(11) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_remotelogin` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
