/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - tokobuah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tokobuah` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tokobuah`;

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dosen` */

insert  into `dosen`(`nip`,`nama`,`pass`,`level`) values 
('100001','Joko','e10adc3949ba59abbe56e057f20f883e',1),
('100002','Dasha','d8578edf8458ce06fbc5bb76a58c5ca4',2);

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`pass`) values 
('05111640000169','Mujahid Khairuddin','e10adc3949ba59abbe56e057f20f883e'),
('1210158','M Fikri','e10adc3949ba59abbe56e057f20f883e'),
('1210159','Keysha','d8578edf8458ce06fbc5bb76a58c5ca4');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(30) NOT NULL DEFAULT 'default',
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Menunggu',
  `dosbing1` varchar(50) NOT NULL DEFAULT 'Belum Ditentukan',
  `dosbing2` varchar(50) NOT NULL DEFAULT 'Belum Ditentukan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`product_id`,`name`,`price`,`image`,`description`,`status`,`dosbing1`,`dosbing2`) values 
('05111640000169','Mujahid Khairuddin','ALPRO','default.jpg','Ini judul skripsi','DITERIMA','Radityo Anggoro','Ary Mazharuddin'),
('12345','Mujahid Khairuddin111','default','12345.png','hahahahahaha','Menunggu','Belum Ditentukan','Belum Ditentukan');

/*Table structure for table `waktu_sidang` */

DROP TABLE IF EXISTS `waktu_sidang`;

CREATE TABLE `waktu_sidang` (
  `nrp` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  PRIMARY KEY (`nrp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `waktu_sidang` */

insert  into `waktu_sidang`(`nrp`,`nama`,`waktu_mulai`,`waktu_selesai`) values 
('05111640000169','Mujahid','2019-04-02 08:54:56','2019-04-24 08:54:59'),
('05111640000991','Juragan','2019-04-02 08:54:56','2019-04-24 08:54:59');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
