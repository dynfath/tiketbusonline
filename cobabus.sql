/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.13-MariaDB : Database - cobabus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cobabus` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cobabus`;

/*Table structure for table `bus` */

DROP TABLE IF EXISTS `bus`;

CREATE TABLE `bus` (
  `kd_bus` char(5) NOT NULL,
  `nama_bus` varchar(20) DEFAULT NULL,
  `kapasitas` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`kd_bus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bus` */

insert  into `bus`(`kd_bus`,`nama_bus`,`kapasitas`) values 
('123','asudhjauishd','52');

/*Table structure for table `kota` */

DROP TABLE IF EXISTS `kota`;

CREATE TABLE `kota` (
  `id_kota` char(4) NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kota` */

insert  into `kota`(`id_kota`,`nama_kota`) values 
('3101','KABUPATEN KEPULAUAN SERIBU'),
('3171','KOTA JAKARTA SELATAN'),
('3172','KOTA JAKARTA TIMUR'),
('3173','KOTA JAKARTA PUSAT'),
('3174','KOTA JAKARTA BARAT'),
('3175','KOTA JAKARTA UTARA'),
('3201','KABUPATEN BOGOR'),
('3202','KABUPATEN SUKABUMI'),
('3203','KABUPATEN CIANJUR'),
('3204','KABUPATEN BANDUNG'),
('3205','KABUPATEN GARUT'),
('3206','KABUPATEN TASIKMALAYA'),
('3207','KABUPATEN CIAMIS'),
('3208','KABUPATEN KUNINGAN'),
('3209','KABUPATEN CIREBON'),
('3210','KABUPATEN MAJALENGKA'),
('3211','KABUPATEN SUMEDANG'),
('3212','KABUPATEN INDRAMAYU'),
('3213','KABUPATEN SUBANG'),
('3214','KABUPATEN PURWAKARTA'),
('3215','KABUPATEN KARAWANG'),
('3216','KABUPATEN BEKASI'),
('3217','KABUPATEN BANDUNG BARAT'),
('3218','KABUPATEN PANGANDARAN'),
('3271','KOTA BOGOR'),
('3272','KOTA SUKABUMI'),
('3273','KOTA BANDUNG'),
('3274','KOTA CIREBON'),
('3275','KOTA BEKASI'),
('3276','KOTA DEPOK'),
('3277','KOTA CIMAHI'),
('3278','KOTA TASIKMALAYA'),
('3279','KOTA BANJAR'),
('3301','KABUPATEN CILACAP'),
('3302','KABUPATEN BANYUMAS'),
('3303','KABUPATEN PURBALINGGA'),
('3304','KABUPATEN BANJARNEGARA'),
('3305','KABUPATEN KEBUMEN'),
('3306','KABUPATEN PURWOREJO'),
('3307','KABUPATEN WONOSOBO'),
('3308','KABUPATEN MAGELANG'),
('3309','KABUPATEN BOYOLALI'),
('3310','KABUPATEN KLATEN'),
('3311','KABUPATEN SUKOHARJO'),
('3312','KABUPATEN WONOGIRI'),
('3313','KABUPATEN KARANGANYAR'),
('3314','KABUPATEN SRAGEN'),
('3315','KABUPATEN GROBOGAN'),
('3316','KABUPATEN BLORA'),
('3317','KABUPATEN REMBANG'),
('3318','KABUPATEN PATI'),
('3319','KABUPATEN KUDUS'),
('3320','KABUPATEN JEPARA'),
('3321','KABUPATEN DEMAK'),
('3322','KABUPATEN SEMARANG'),
('3323','KABUPATEN TEMANGGUNG'),
('3324','KABUPATEN KENDAL'),
('3325','KABUPATEN BATANG'),
('3326','KABUPATEN PEKALONGAN'),
('3327','KABUPATEN PEMALANG'),
('3328','KABUPATEN TEGAL'),
('3329','KABUPATEN BREBES'),
('3371','KOTA MAGELANG'),
('3372','KOTA SURAKARTA'),
('3373','KOTA SALATIGA'),
('3374','KOTA SEMARANG'),
('3375','KOTA PEKALONGAN'),
('3376','KOTA TEGAL'),
('3401','KABUPATEN KULON PROGO'),
('3402','KABUPATEN BANTUL'),
('3403','KABUPATEN GUNUNG KIDUL'),
('3404','KABUPATEN SLEMAN'),
('3471','KOTA YOGYAKARTA'),
('3501','KABUPATEN PACITAN'),
('3502','KABUPATEN PONOROGO'),
('3503','KABUPATEN TRENGGALEK'),
('3504','KABUPATEN TULUNGAGUNG'),
('3505','KABUPATEN BLITAR'),
('3506','KABUPATEN KEDIRI'),
('3507','KABUPATEN MALANG'),
('3508','KABUPATEN LUMAJANG'),
('3509','KABUPATEN JEMBER'),
('3510','KABUPATEN BANYUWANGI'),
('3511','KABUPATEN BONDOWOSO'),
('3512','KABUPATEN SITUBONDO'),
('3513','KABUPATEN PROBOLINGGO'),
('3514','KABUPATEN PASURUAN'),
('3515','KABUPATEN SIDOARJO'),
('3516','KABUPATEN MOJOKERTO'),
('3517','KABUPATEN JOMBANG'),
('3518','KABUPATEN NGANJUK'),
('3519','KABUPATEN MADIUN'),
('3520','KABUPATEN MAGETAN'),
('3521','KABUPATEN NGAWI'),
('3522','KABUPATEN BOJONEGORO'),
('3523','KABUPATEN TUBAN'),
('3524','KABUPATEN LAMONGAN'),
('3525','KABUPATEN GRESIK'),
('3526','KABUPATEN BANGKALAN'),
('3527','KABUPATEN SAMPANG'),
('3528','KABUPATEN PAMEKASAN'),
('3529','KABUPATEN SUMENEP'),
('3571','KOTA KEDIRI'),
('3572','KOTA BLITAR'),
('3573','KOTA MALANG'),
('3574','KOTA PROBOLINGGO'),
('3575','KOTA PASURUAN'),
('3576','KOTA MOJOKERTO'),
('3577','KOTA MADIUN'),
('3578','KOTA SURABAYA'),
('3579','KOTA BATU'),
('3601','KABUPATEN PANDEGLANG'),
('3602','KABUPATEN LEBAK'),
('3603','KABUPATEN TANGERANG'),
('3604','KABUPATEN SERANG'),
('3671','KOTA TANGERANG'),
('3672','KOTA CILEGON'),
('3673','KOTA SERANG'),
('3674','KOTA TANGERANG SELATAN');

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `kd_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesan` char(16) DEFAULT NULL,
  `kd_tiket` char(5) DEFAULT NULL,
  `tgl_trans` date DEFAULT NULL,
  `jml_tiket` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`kd_pesan`),
  KEY `id_pelanggan` (`id_pemesan`),
  KEY `kd_tiket` (`kd_tiket`),
  CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `pengguna` (`id_pengguna`),
  CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`kd_tiket`) REFERENCES `tiket` (`kd_tiket`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pemesanan` */

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id_pengguna` char(16) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pengguna`),
  UNIQUE KEY `unik` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengguna` */

insert  into `pengguna`(`id_pengguna`,`nama`,`role`,`username`,`password`) values 
('0735560864643368','aaa','Pelanggan','aaa','aaa'),
('1234567812345678','Adsa','Admin','imadmin','admin'),
('222222222222222','Adwa','Pelanggan','pengguna1','pengguna1'),
('3657906945413848','aaaaaaaaaa','Pelanggan','aaaaaaaaaaaa','aaaaaaaaaaaa'),
('6973058894844498','hahahaha','Pelanggan','kalasasa','abcdefghijkl');

/*Table structure for table `tiket` */

DROP TABLE IF EXISTS `tiket`;

CREATE TABLE `tiket` (
  `kd_tiket` varchar(5) NOT NULL,
  `kd_bus` char(5) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `sisa_tiket` int(11) DEFAULT NULL,
  PRIMARY KEY (`kd_tiket`),
  KEY `kd_bus` (`kd_bus`),
  KEY `asal` (`asal`),
  KEY `tujuan` (`tujuan`),
  CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`kd_bus`) REFERENCES `bus` (`kd_bus`),
  CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`asal`) REFERENCES `kota` (`id_kota`),
  CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`tujuan`) REFERENCES `kota` (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tiket` */

insert  into `tiket`(`kd_tiket`,`kd_bus`,`tgl`,`jam`,`asal`,`tujuan`,`harga`,`sisa_tiket`) values 
('A0001','123','2018-01-11','13:00:00','3173','3273',75000,46),
('A0002','123','2018-01-11','11:00:00','3273','3173',75000,39),
('A0003','123','2018-01-11','14:00:00','3273','3175',80000,52),
('A0004','123','2018-01-11','12:00:00','3175','3273',80000,52),
('A0005','123','2018-01-14','15:00:00','3273','3173',80000,44);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
