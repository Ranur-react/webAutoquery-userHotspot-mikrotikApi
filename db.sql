/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.6-MariaDB : Database - db_antrian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_antrian` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_antrian`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

LOCK TABLES `admin` WRITE;

insert  into `admin`(`id`,`nama`,`password`,`level`) values ('admin','admin','202cb962ac59075b964b07152d234b70','Admin');

UNLOCK TABLES;

/*Table structure for table `tb_antrian` */

DROP TABLE IF EXISTS `tb_antrian`;

CREATE TABLE `tb_antrian` (
  `no` int(11) NOT NULL,
  `id_pasien` varchar(200) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` enum('SELESAI_ANTRI','1','2','3') DEFAULT NULL,
  PRIMARY KEY (`no`,`id_pasien`),
  KEY `id_pasien` (`id_pasien`),
  CONSTRAINT `tb_antrian_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_ktp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_antrian` */

LOCK TABLES `tb_antrian` WRITE;

UNLOCK TABLES;

/*Table structure for table `tb_antrianhistory` */

DROP TABLE IF EXISTS `tb_antrianhistory`;

CREATE TABLE `tb_antrianhistory` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `no` int(11) DEFAULT NULL,
  `id` varchar(200) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `status` enum('SELESAI_ANTRI') DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=latin1;

/*Data for the table `tb_antrianhistory` */

LOCK TABLES `tb_antrianhistory` WRITE;

insert  into `tb_antrianhistory`(`index`,`no`,`id`,`tgl`,`status`) values (200,1,'046E34AA7E4C80','2019-12-30','SELESAI_ANTRI'),(201,2,'6E34AA7E4C80','2019-12-30','SELESAI_ANTRI'),(202,3,'PSN','2019-12-30','SELESAI_ANTRI'),(203,4,'PSN-003','2019-12-31','SELESAI_ANTRI'),(204,1,'046E34AA7E4C80','2019-12-30','SELESAI_ANTRI'),(205,2,'6E34AA7E4C80','2019-12-30','SELESAI_ANTRI'),(206,3,'PSN','2019-12-29','SELESAI_ANTRI'),(207,4,'PSN-003','2019-12-30','SELESAI_ANTRI'),(211,1,'046E34AA7E4C80','2019-12-30','SELESAI_ANTRI'),(212,2,'6E34AA7E4C80','2019-12-30','SELESAI_ANTRI'),(213,3,'PSN','2019-12-30','SELESAI_ANTRI'),(214,4,'PSN-003','2019-12-30','SELESAI_ANTRI'),(215,5,'046E34AA7E4C80','2019-12-31','SELESAI_ANTRI'),(216,4,'292CC799','2019-12-31','SELESAI_ANTRI'),(217,5,'041F5ACAE22A80','2019-12-31','SELESAI_ANTRI'),(218,2,'041F5ACAE22A80','2019-12-31','SELESAI_ANTRI'),(219,1,'046E34AA7E4C80','2019-12-31','SELESAI_ANTRI'),(220,3,'292CC799','2019-12-31','SELESAI_ANTRI'),(221,4,'041F5ACAE22A80','2019-12-31','SELESAI_ANTRI'),(222,5,'046E34AA7E4C80','2019-12-31','SELESAI_ANTRI'),(224,3,'E7DB4952','2019-12-31','SELESAI_ANTRI'),(225,1,'046E34AA7E4C80','2019-12-31','SELESAI_ANTRI'),(226,2,'292CC799','2019-12-31','SELESAI_ANTRI'),(227,3,'041F5ACAE22A80','2019-12-31','SELESAI_ANTRI'),(228,1,'292CC799','2019-12-31','SELESAI_ANTRI'),(229,2,'046E34AA7E4C80','2019-12-31','SELESAI_ANTRI'),(230,3,'041F5ACAE22A80','2019-12-31','SELESAI_ANTRI'),(231,4,'292CC799','2019-12-31','SELESAI_ANTRI'),(232,5,'046E34AA7E4C80','2019-12-31','SELESAI_ANTRI'),(233,6,'E7DB4952','2019-12-31','SELESAI_ANTRI'),(237,1,'041F5ACAE22A80','2020-01-01','SELESAI_ANTRI'),(238,2,'046E34AA7E4C80','2020-01-01','SELESAI_ANTRI'),(239,3,'292CC799','2020-01-01','SELESAI_ANTRI'),(240,4,'E7DB4952','2020-01-01','SELESAI_ANTRI'),(244,1,'041F5ACAE22A80','2020-01-01','SELESAI_ANTRI'),(245,2,'046E34AA7E4C80','2020-01-01','SELESAI_ANTRI'),(246,3,'292CC799','2020-01-01','SELESAI_ANTRI'),(247,4,'E7DB4952','2020-01-01','SELESAI_ANTRI'),(251,1,'041F5ACAE22A80','2020-01-01','SELESAI_ANTRI'),(252,2,'046E34AA7E4C80','2020-01-01','SELESAI_ANTRI'),(253,3,'292CC799','2020-01-01','SELESAI_ANTRI'),(254,4,'E7DB4952','2020-01-01','SELESAI_ANTRI'),(255,1,'041F5ACAE22A80','2020-01-01','SELESAI_ANTRI'),(256,2,'046E34AA7E4C80','2020-01-01','SELESAI_ANTRI'),(257,3,'292CC799','2020-01-01','SELESAI_ANTRI'),(258,4,'E7DB4952','2020-01-01','SELESAI_ANTRI'),(259,1,'041F5ACAE22A80','2020-01-02','SELESAI_ANTRI'),(260,2,'046E34AA7E4C80','2020-01-02','SELESAI_ANTRI'),(261,3,'292CC799','2020-01-02','SELESAI_ANTRI'),(262,4,'E7DB4952','2020-01-02','SELESAI_ANTRI'),(263,1,'222','2020-01-02','SELESAI_ANTRI'),(264,2,'292CC799','2020-01-02','SELESAI_ANTRI'),(266,3,'046E34AA7E4C80','2020-01-03','SELESAI_ANTRI'),(267,2,'292CC799','2020-01-03','SELESAI_ANTRI'),(268,5,'046E34AA7E4C80','2020-01-03','SELESAI_ANTRI'),(269,1,'041F5ACAE22A80','2020-01-03','SELESAI_ANTRI'),(270,4,'E7DB4952','2020-01-03','SELESAI_ANTRI'),(271,1,'041F5ACAE22A80','2020-01-07','SELESAI_ANTRI'),(272,2,'046E34AA7E4C80','2020-01-07','SELESAI_ANTRI'),(273,3,'222','2020-01-07','SELESAI_ANTRI'),(274,4,'292CC799','2020-01-07','SELESAI_ANTRI'),(275,5,'E7DB4952','2020-01-07','SELESAI_ANTRI');

UNLOCK TABLES;

/*Table structure for table `tb_pasien` */

DROP TABLE IF EXISTS `tb_pasien`;

CREATE TABLE `tb_pasien` (
  `id_ktp` varchar(250) NOT NULL,
  `NIK` varchar(30) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `hp` double DEFAULT NULL,
  PRIMARY KEY (`id_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pasien` */

LOCK TABLES `tb_pasien` WRITE;

insert  into `tb_pasien`(`id_ktp`,`NIK`,`nama`,`tgl`,`alamat`,`hp`) values ('041F5ACAE22A80','13050228021998','AJO','1998-02-28','Solok',82281415382),('046E34AA7E4C80','13050228021998','URANG','1955-02-28','Solok',83182647716),('222','','','2020-01-03','Jl. Olo Ladang No 5A',0),('292CC799','13050228021998','Roti','1956-02-08','Pauah',83182647716),('E7DB4952','42342','Rahmat ','1998-02-28','Padang Utara',83182647716);

UNLOCK TABLES;

/*Table structure for table `tbl_book` */

DROP TABLE IF EXISTS `tbl_book`;

CREATE TABLE `tbl_book` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_book` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_book` */

LOCK TABLES `tbl_book` WRITE;

insert  into `tbl_book`(`id_book`,`tgl_book`,`total_harga`,`nama`,`alamat`,`email`,`no_hp`,`status`) values (1,'2014-12-17',800000,'alin','depok','alin@alin.com',2147483647,0);

UNLOCK TABLES;

/*Table structure for table `tbl_detailbook` */

DROP TABLE IF EXISTS `tbl_detailbook`;

CREATE TABLE `tbl_detailbook` (
  `id_detailbook` int(11) NOT NULL AUTO_INCREMENT,
  `id_book` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_check_in` date NOT NULL,
  `tgl_check_out` date NOT NULL,
  PRIMARY KEY (`id_detailbook`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_detailbook` */

LOCK TABLES `tbl_detailbook` WRITE;

insert  into `tbl_detailbook`(`id_detailbook`,`id_book`,`id_kamar`,`harga`,`tgl_check_in`,`tgl_check_out`) values (1,1,2221,300000,'2014-12-17','2014-12-19'),(2,1,2311,500000,'2014-12-17','2014-12-20');

UNLOCK TABLES;

/*Table structure for table `tbl_kamar` */

DROP TABLE IF EXISTS `tbl_kamar`;

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_typekamar` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kamar` */

LOCK TABLES `tbl_kamar` WRITE;

insert  into `tbl_kamar`(`id_kamar`,`id_typekamar`,`id_lokasi`,`status`) values (1231,3,1,0),(2221,2,2,0),(2311,1,2,0);

UNLOCK TABLES;

/*Table structure for table `tbl_lokasi` */

DROP TABLE IF EXISTS `tbl_lokasi`;

CREATE TABLE `tbl_lokasi` (
  `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_fax` int(11) NOT NULL,
  `no_telp` int(11) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_lokasi` */

LOCK TABLES `tbl_lokasi` WRITE;

insert  into `tbl_lokasi`(`id_lokasi`,`lokasi`,`alamat`,`kode_pos`,`no_fax`,`no_telp`) values (1,'Ulin Cikini','Cikini - Jakarta Pusat',26458,79878654,897654),(2,'Ulin Bogor Nirwana','BNR - Bogor',90876,890678,5678904);

UNLOCK TABLES;

/*Table structure for table `tbl_peg` */

DROP TABLE IF EXISTS `tbl_peg`;

CREATE TABLE `tbl_peg` (
  `id_peg` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_peg`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_peg` */

LOCK TABLES `tbl_peg` WRITE;

insert  into `tbl_peg`(`id_peg`,`nama`,`alamat`,`no_hp`,`email`,`jabatan`,`username`,`password`) values (1,'Alin Nur','Depok','09865454258','alinnurkhalifah@gmail.com','Admin','Nila','8df03bca3f48d310f74fe6092af08c95');

UNLOCK TABLES;

/*Table structure for table `tbl_transaksi` */

DROP TABLE IF EXISTS `tbl_transaksi`;

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_book` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_transaksi` */

LOCK TABLES `tbl_transaksi` WRITE;

UNLOCK TABLES;

/*Table structure for table `tbl_typekamar` */

DROP TABLE IF EXISTS `tbl_typekamar`;

CREATE TABLE `tbl_typekamar` (
  `id_typekamar` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL,
  PRIMARY KEY (`id_typekamar`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_typekamar` */

LOCK TABLES `tbl_typekamar` WRITE;

insert  into `tbl_typekamar`(`id_typekamar`,`type`,`harga`) values (1,'Deluxe','300000'),(2,'Suite','500000'),(3,'Superior','700000'),(4,'Super Deluxe','900000'),(5,'Super Junior','200000');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
