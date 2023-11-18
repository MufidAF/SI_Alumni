/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - pj_sma
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pj_sma` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pj_sma`;

/*Table structure for table `data_orangtua` */

DROP TABLE IF EXISTS `data_orangtua`;

CREATE TABLE `data_orangtua` (
  `id_ortu` int(11) NOT NULL AUTO_INCREMENT,
  `id_alm` int(11) DEFAULT NULL,
  `nm_ayah` varchar(50) DEFAULT NULL,
  `pd_ayah` varchar(50) DEFAULT NULL,
  `pk_ayah` varchar(50) DEFAULT NULL,
  `alamat_ayah` varchar(100) DEFAULT NULL,
  `nm_ibu` varchar(50) DEFAULT NULL,
  `pd_ibu` varchar(50) DEFAULT NULL,
  `pk_ibu` varchar(50) DEFAULT NULL,
  `alamat_ibu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_ortu`),
  KEY `data_orangtua_ibfk_1` (`id_alm`),
  CONSTRAINT `data_orangtua_ibfk_1` FOREIGN KEY (`id_alm`) REFERENCES `db_alumni` (`id_alm`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_orangtua` */

insert  into `data_orangtua`(`id_ortu`,`id_alm`,`nm_ayah`,`pd_ayah`,`pk_ayah`,`alamat_ayah`,`nm_ibu`,`pd_ibu`,`pk_ibu`,`alamat_ibu`) values 
(76,76,'Setio Anggit','S1 Pendidikan Olahraga','Guru Olahraga','purwosari','Fifah Diyah','S1 Tataboga','Pengusaha','purwosari'),
(77,82,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(78,83,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `db_alumni` */

DROP TABLE IF EXISTS `db_alumni`;

CREATE TABLE `db_alumni` (
  `id_alm` int(11) NOT NULL AUTO_INCREMENT,
  `nis` char(11) DEFAULT '(NULL)',
  `nama` varchar(100) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `agama` enum('Islam','Kristen','Hindu','Buddha','Konghucu') DEFAULT NULL,
  `t_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jurusan` enum('IPA','IPS','KBC') DEFAULT NULL,
  `th_masuk` year(4) DEFAULT NULL,
  `th_lulus` year(4) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `psw` varchar(300) DEFAULT NULL,
  `level` int(1) DEFAULT 2,
  `ket` enum('Aktif','Tidak Aktif') DEFAULT 'Tidak Aktif',
  `foto` varchar(50) DEFAULT 'defauldprofil.png',
  PRIMARY KEY (`id_alm`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;

/*Data for the table `db_alumni` */

insert  into `db_alumni`(`id_alm`,`nis`,`nama`,`jk`,`agama`,`t_lahir`,`tgl_lahir`,`alamat`,`jurusan`,`th_masuk`,`th_lulus`,`no_hp`,`email`,`psw`,`level`,`ket`,`foto`) values 
(71,'1212121212','Anggi Noverlin','L','Islam','','0000-00-00','','',0000,0000,'','admin@gmail.com','123456',1,'Aktif','defauldprofil.png'),
(76,'1111100000','fajar','L','Islam','purwosari','2000-01-03','purwosari','IPA',2015,2018,'90909090','fajar@gmail.com','12345',2,'Aktif','defauldprofil.png'),
(82,'','Mufid Aden F','L','Islam','purwosari','2000-01-21','','IPS',0000,0000,'082179704031','mufidaf@gmail.com','12345',2,'Aktif','defauldprofil.png'),
(83,'1111100001','Zacky Alam Arif','L','Islam','purwosari','2000-02-01','purwosari','IPA',2019,2023,'90909090','zaky@gmail.com','12345',2,'Aktif','defauldprofil.png');

/*Table structure for table `db_berita` */

DROP TABLE IF EXISTS `db_berita`;

CREATE TABLE `db_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_alm` int(11) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `tgl_berita` datetime NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `db_berita_ibfk_1` (`id_alm`),
  CONSTRAINT `db_berita_ibfk_1` FOREIGN KEY (`id_alm`) REFERENCES `db_alumni` (`id_alm`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

/*Data for the table `db_berita` */

/*Table structure for table `db_kegiatan` */

DROP TABLE IF EXISTS `db_kegiatan`;

CREATE TABLE `db_kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_alm` int(11) DEFAULT NULL,
  `st_kgt` varchar(50) DEFAULT NULL,
  `nama_univ` varchar(50) DEFAULT NULL,
  `pg_studi` varchar(50) DEFAULT NULL,
  `jenjang` enum('S1','S2','S3','D3','D4') DEFAULT NULL,
  `th_masuk_u` varchar(4) DEFAULT NULL,
  `status` enum('Aktif','Lulus') DEFAULT NULL,
  `st_beasiswa` enum('YA','TIDAK') DEFAULT NULL,
  `ket_beasiswa` varchar(100) DEFAULT NULL,
  `nm_perusahaan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `th_masuk_p` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`),
  KEY `db_kegiatan_ibfk_1` (`id_alm`),
  CONSTRAINT `db_kegiatan_ibfk_1` FOREIGN KEY (`id_alm`) REFERENCES `db_alumni` (`id_alm`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

/*Data for the table `db_kegiatan` */

insert  into `db_kegiatan`(`id_kegiatan`,`id_alm`,`st_kgt`,`nama_univ`,`pg_studi`,`jenjang`,`th_masuk_u`,`status`,`st_beasiswa`,`ket_beasiswa`,`nm_perusahaan`,`jabatan`,`th_masuk_p`) values 
(43,71,'Kuliah','UNIVERSTAS TEKNOKRAT INDONESIA','TEKNOLOGI INFORMASI','S1','2018','Lulus','TIDAK','','','',''),
(47,76,'Kuliah','UNIVERSTAS TEKNOKRAT INDONESIA','TEKNOLOGI INFORMASI','S1','2018','Lulus','TIDAK','','','',''),
(48,82,'Kuliah','UNIVERSTAS TEKNOKRAT INDONESIA','TEKNOLOGI INFORMASI','S1','2018','Aktif','TIDAK','','','',''),
(49,83,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `db_sosmed` */

DROP TABLE IF EXISTS `db_sosmed`;

CREATE TABLE `db_sosmed` (
  `id_sosmed` int(11) NOT NULL AUTO_INCREMENT,
  `id_alm` int(11) DEFAULT NULL,
  `ig` varchar(50) DEFAULT NULL,
  `tw` varchar(50) DEFAULT NULL,
  `fb` varchar(50) DEFAULT NULL,
  `yt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sosmed`),
  KEY `db_sosmed_ibfk_2` (`id_alm`),
  CONSTRAINT `db_sosmed_ibfk_2` FOREIGN KEY (`id_alm`) REFERENCES `db_alumni` (`id_alm`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `db_sosmed` */

insert  into `db_sosmed`(`id_sosmed`,`id_alm`,`ig`,`tw`,`fb`,`yt`) values 
(18,71,NULL,NULL,NULL,NULL),
(20,76,'Fajar_dermaan','fjr','fajar','tvfajar'),
(21,82,'','','',''),
(22,83,NULL,NULL,NULL,NULL);

/*Table structure for table `jawaban` */

DROP TABLE IF EXISTS `jawaban`;

CREATE TABLE `jawaban` (
  `id_jawab` int(11) NOT NULL AUTO_INCREMENT,
  `id_alm` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `th_lulus` varchar(100) DEFAULT NULL,
  `q1` varchar(10) DEFAULT NULL,
  `q2` varchar(10) DEFAULT NULL,
  `q3` varchar(10) DEFAULT NULL,
  `q4` varchar(10) DEFAULT NULL,
  `q5` varchar(10) DEFAULT NULL,
  `q6` varchar(10) DEFAULT NULL,
  `q7` varchar(10) DEFAULT NULL,
  `q8` varchar(10) DEFAULT NULL,
  `q9` varchar(10) DEFAULT NULL,
  `q10` varchar(10) DEFAULT NULL,
  `q11` varchar(10) DEFAULT NULL,
  `q12` varchar(10) DEFAULT NULL,
  `kds` text DEFAULT NULL,
  PRIMARY KEY (`id_jawab`),
  KEY `id_alm` (`id_alm`),
  CONSTRAINT `jawaban_ibfk_3` FOREIGN KEY (`id_alm`) REFERENCES `db_alumni` (`id_alm`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jawaban` */

insert  into `jawaban`(`id_jawab`,`id_alm`,`nama`,`jurusan`,`th_lulus`,`q1`,`q2`,`q3`,`q4`,`q5`,`q6`,`q7`,`q8`,`q9`,`q10`,`q11`,`q12`,`kds`) values 
(14,82,'Mufid Aden F','IPS','0000','3','3','3','3','3','3','2','2','1','1','1','1','tetap berjuang menjadi yang terbaik');

/*Table structure for table `jawaban2` */

DROP TABLE IF EXISTS `jawaban2`;

CREATE TABLE `jawaban2` (
  `id_jwb` int(11) NOT NULL AUTO_INCREMENT,
  `id_alm` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `th_lulus` varchar(50) DEFAULT NULL,
  `f1` varchar(50) DEFAULT NULL,
  `f2` varchar(50) DEFAULT NULL,
  `f3` varchar(50) DEFAULT NULL,
  `f4` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jwb`),
  KEY `id_alm` (`id_alm`),
  CONSTRAINT `jawaban2_ibfk_1` FOREIGN KEY (`id_alm`) REFERENCES `db_alumni` (`id_alm`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jawaban2` */

insert  into `jawaban2`(`id_jwb`,`id_alm`,`nama`,`jurusan`,`th_lulus`,`f1`,`f2`,`f3`,`f4`) values 
(35,71,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(37,76,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(38,82,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(39,83,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `jawaban3` */

DROP TABLE IF EXISTS `jawaban3`;

CREATE TABLE `jawaban3` (
  `id_jwb3` int(11) NOT NULL AUTO_INCREMENT,
  `id_jwb2` int(11) DEFAULT NULL,
  `s1` varchar(200) DEFAULT NULL,
  `s2` varchar(200) DEFAULT NULL,
  `s3` varchar(200) DEFAULT NULL,
  `s4` varchar(200) DEFAULT NULL,
  `s5` varchar(200) DEFAULT NULL,
  `s6` varchar(200) DEFAULT NULL,
  `s7` varchar(200) DEFAULT NULL,
  `s8` varchar(200) DEFAULT NULL,
  `s9` varchar(200) DEFAULT NULL,
  `s10` varchar(200) DEFAULT NULL,
  `b1` varchar(200) DEFAULT NULL,
  `b2` varchar(200) DEFAULT NULL,
  `b3` varchar(200) DEFAULT NULL,
  `b4` varchar(200) DEFAULT NULL,
  `b5` varchar(200) DEFAULT NULL,
  `b6` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_jwb3`),
  KEY `id_jwb2` (`id_jwb2`),
  CONSTRAINT `jawaban3_ibfk_1` FOREIGN KEY (`id_jwb2`) REFERENCES `jawaban2` (`id_jwb`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jawaban3` */

/*Table structure for table `jawaban4` */

DROP TABLE IF EXISTS `jawaban4`;

CREATE TABLE `jawaban4` (
  `id_jwb4` int(11) NOT NULL AUTO_INCREMENT,
  `id_jwb2` int(11) DEFAULT NULL,
  `k1` int(1) DEFAULT NULL,
  `k2` int(1) DEFAULT NULL,
  `k3` int(1) DEFAULT NULL,
  `k4` int(1) DEFAULT NULL,
  `k5` int(1) DEFAULT NULL,
  `k6` int(1) DEFAULT NULL,
  `k7` int(1) DEFAULT NULL,
  `k8` int(1) DEFAULT NULL,
  `k9` int(1) DEFAULT NULL,
  `k10` int(1) DEFAULT NULL,
  `k11` int(1) DEFAULT NULL,
  `k12` int(1) DEFAULT NULL,
  `k13` int(1) DEFAULT NULL,
  `k14` int(1) DEFAULT NULL,
  `m1` int(1) DEFAULT NULL,
  `m2` int(1) DEFAULT NULL,
  `m3` int(1) DEFAULT NULL,
  `m4` int(1) DEFAULT NULL,
  `m5` int(1) DEFAULT NULL,
  `m6` int(1) DEFAULT NULL,
  `m7` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_jwb4`),
  KEY `id_jwb2` (`id_jwb2`),
  CONSTRAINT `jawaban4_ibfk_1` FOREIGN KEY (`id_jwb2`) REFERENCES `jawaban2` (`id_jwb`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jawaban4` */

/*Table structure for table `ketkq` */

DROP TABLE IF EXISTS `ketkq`;

CREATE TABLE `ketkq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alm` int(11) DEFAULT NULL,
  `no` int(11) DEFAULT 1,
  `no_` int(11) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `id_alm` (`id_alm`),
  CONSTRAINT `ketkq_ibfk_1` FOREIGN KEY (`id_alm`) REFERENCES `db_alumni` (`id_alm`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ketkq` */

insert  into `ketkq`(`id`,`id_alm`,`no`,`no_`) values 
(10,71,1,1),
(12,76,1,1),
(13,82,1,2),
(14,83,1,1);

/*Table structure for table `kuesioner` */

DROP TABLE IF EXISTS `kuesioner`;

CREATE TABLE `kuesioner` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `s1` text DEFAULT NULL,
  `s2` text DEFAULT NULL,
  `s3` text DEFAULT NULL,
  `s4` text DEFAULT NULL,
  `s5` text DEFAULT NULL,
  `s6` text DEFAULT NULL,
  `s7` text DEFAULT NULL,
  `s8` text DEFAULT NULL,
  `s9` text DEFAULT NULL,
  `s10` text DEFAULT NULL,
  `s11` text DEFAULT NULL,
  `s12` text DEFAULT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kuesioner` */

insert  into `kuesioner`(`id_soal`,`s1`,`s2`,`s3`,`s4`,`s5`,`s6`,`s7`,`s8`,`s9`,`s10`,`s11`,`s12`) values 
(1,'Apakah guru yang mengajar di SMA Negeri 1 Gadingrejo sudah berpengalaman dalam meberikan pelajaran','Apakah pembelajaran di SMA Ngeri 1 Gadingrejo sudah nyaman?','Apakan fasilitas yang ada di SMA Negeri 1 Gadingrejo sudah lengkap?','Apakah pelajaran yang didapatkan di SMA Negeri 1 Gadingrejo membantu dalam dunia kerja ?','Menurut anda apakah materi yang disampaikan oleh guru membatu setelah anda lulus?','Apakah kegiatan gebyar seni yang diadakan 1  tahun sekali dapat membantu setelah lulus?','Menrut anda kegiatan extrakulikuler di SMA Negeri 1 Gadingrejo sudah lengkap?','Apakah pelaksanaan  kegiatan apel pagi setiap hari membantu anda dalam menjadi pribadi yang lebih disiplin?','Menurut anda apakah buku yang tersedia di perpustakaan sudah lengkap?','Menurut anda apakah kemanan di lingkungan sekolah sudah baik?','Apa kegiatan yang anda lakukan saat ini?','Jika anda sudah bekerja, berapa lama waktu yang anda butuhkan dari mulai lulus sekolah hingga mendapat pekerjaan?');

/*Table structure for table `loker` */

DROP TABLE IF EXISTS `loker`;

CREATE TABLE `loker` (
  `id_loker` int(11) NOT NULL AUTO_INCREMENT,
  `nm_pt` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `tgl` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_loker`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `loker` */

insert  into `loker`(`id_loker`,`nm_pt`,`deskripsi`,`link`,`tgl`) values 
(3,'PT. CAHAYA BERKAH','Dicari pekerja dibagian logistik','https://sman1-gadingrejo.sch.id/fix/','2022-10-06 23:07:24');

/*Table structure for table `vw_berita` */

DROP TABLE IF EXISTS `vw_berita`;

/*!50001 DROP VIEW IF EXISTS `vw_berita` */;
/*!50001 DROP TABLE IF EXISTS `vw_berita` */;

/*!50001 CREATE TABLE  `vw_berita`(
 `id_berita` int(11) ,
 `kategori` varchar(30) ,
 `judul` varchar(100) ,
 `isi_berita` text ,
 `gambar` varchar(50) ,
 `tgl_berita` datetime ,
 `nama` varchar(100) ,
 `level` int(1) ,
 `foto` varchar(50) 
)*/;

/*Table structure for table `vw_cari_a` */

DROP TABLE IF EXISTS `vw_cari_a`;

/*!50001 DROP VIEW IF EXISTS `vw_cari_a` */;
/*!50001 DROP TABLE IF EXISTS `vw_cari_a` */;

/*!50001 CREATE TABLE  `vw_cari_a`(
 `nis` char(11) ,
 `nama` varchar(100) ,
 `jurusan` enum('IPA','IPS','KBC') ,
 `th_lulus` year(4) ,
 `foto` varchar(50) ,
 `nama_univ` varchar(50) ,
 `nm_perusahaan` varchar(50) ,
 `ig` varchar(50) ,
 `fb` varchar(50) ,
 `tw` varchar(50) ,
 `yt` varchar(50) 
)*/;

/*Table structure for table `vw_cari_p` */

DROP TABLE IF EXISTS `vw_cari_p`;

/*!50001 DROP VIEW IF EXISTS `vw_cari_p` */;
/*!50001 DROP TABLE IF EXISTS `vw_cari_p` */;

/*!50001 CREATE TABLE  `vw_cari_p`(
 `nama` varchar(100) ,
 `jurusan` enum('IPA','IPS','KBC') ,
 `th_lulus` year(4) 
)*/;

/*Table structure for table `vw_countuniv` */

DROP TABLE IF EXISTS `vw_countuniv`;

/*!50001 DROP VIEW IF EXISTS `vw_countuniv` */;
/*!50001 DROP TABLE IF EXISTS `vw_countuniv` */;

/*!50001 CREATE TABLE  `vw_countuniv`(
 `id_kegiatan` int(11) ,
 `nama_univ` varchar(50) ,
 `jumlah` bigint(21) 
)*/;

/*Table structure for table `vw_datakgt` */

DROP TABLE IF EXISTS `vw_datakgt`;

/*!50001 DROP VIEW IF EXISTS `vw_datakgt` */;
/*!50001 DROP TABLE IF EXISTS `vw_datakgt` */;

/*!50001 CREATE TABLE  `vw_datakgt`(
 `th_lulus` year(4) ,
 `alm_bkj` bigint(21) ,
 `alm_klh` bigint(21) ,
 `alm_cti` bigint(21) ,
 `jml_alm` bigint(21) 
)*/;

/*Table structure for table `vw_kegiatan` */

DROP TABLE IF EXISTS `vw_kegiatan`;

/*!50001 DROP VIEW IF EXISTS `vw_kegiatan` */;
/*!50001 DROP TABLE IF EXISTS `vw_kegiatan` */;

/*!50001 CREATE TABLE  `vw_kegiatan`(
 `id_kegiatan` int(11) ,
 `id_alm` int(11) ,
 `nama` varchar(100) ,
 `jurusan` enum('IPA','IPS','KBC') ,
 `st_kgt` varchar(50) ,
 `nama_univ` varchar(50) ,
 `pg_studi` varchar(50) ,
 `jenjang` enum('S1','S2','S3','D3','D4') ,
 `th_masuk_u` varchar(4) ,
 `status` enum('Aktif','Lulus') ,
 `st_beasiswa` enum('YA','TIDAK') ,
 `ket_beasiswa` varchar(100) ,
 `nm_perusahaan` varchar(50) ,
 `jabatan` varchar(50) ,
 `th_masuk_p` varchar(4) 
)*/;

/*Table structure for table `vw_ketquis` */

DROP TABLE IF EXISTS `vw_ketquis`;

/*!50001 DROP VIEW IF EXISTS `vw_ketquis` */;
/*!50001 DROP TABLE IF EXISTS `vw_ketquis` */;

/*!50001 CREATE TABLE  `vw_ketquis`(
 `nama` varchar(100) ,
 `jurusan` enum('IPA','IPS','KBC') ,
 `th_lulus` year(4) ,
 `no` int(11) ,
 `no_` int(11) 
)*/;

/*Table structure for table `vw_kuesioner2` */

DROP TABLE IF EXISTS `vw_kuesioner2`;

/*!50001 DROP VIEW IF EXISTS `vw_kuesioner2` */;
/*!50001 DROP TABLE IF EXISTS `vw_kuesioner2` */;

/*!50001 CREATE TABLE  `vw_kuesioner2`(
 `id_jwb` int(11) ,
 `nama` varchar(50) ,
 `jurusan` varchar(50) ,
 `th_lulus` varchar(50) ,
 `s1` varchar(200) ,
 `s2` varchar(200) ,
 `s3` varchar(200) ,
 `s4` varchar(200) ,
 `s5` varchar(200) ,
 `s6` varchar(200) ,
 `s7` varchar(200) ,
 `s8` varchar(200) ,
 `s9` varchar(200) ,
 `s10` varchar(200) ,
 `k1` int(1) ,
 `k2` int(1) ,
 `k3` int(1) ,
 `k4` int(1) ,
 `k5` int(1) ,
 `k6` int(1) ,
 `k7` int(1) ,
 `k8` int(1) ,
 `k9` int(1) ,
 `k10` int(1) ,
 `k11` int(1) ,
 `k12` int(1) ,
 `k13` int(1) ,
 `k14` int(1) 
)*/;

/*Table structure for table `vw_kuesioner3` */

DROP TABLE IF EXISTS `vw_kuesioner3`;

/*!50001 DROP VIEW IF EXISTS `vw_kuesioner3` */;
/*!50001 DROP TABLE IF EXISTS `vw_kuesioner3` */;

/*!50001 CREATE TABLE  `vw_kuesioner3`(
 `id_jwb` int(11) ,
 `nama` varchar(50) ,
 `jurusan` varchar(50) ,
 `th_lulus` varchar(50) ,
 `b1` varchar(200) ,
 `b2` varchar(200) ,
 `b3` varchar(200) ,
 `b4` varchar(200) ,
 `b5` varchar(200) ,
 `b6` varchar(200) ,
 `m1` int(1) ,
 `m2` int(1) ,
 `m3` int(1) ,
 `m4` int(1) ,
 `m5` int(1) ,
 `m6` int(1) ,
 `m7` int(1) 
)*/;

/*Table structure for table `vw_laporan` */

DROP TABLE IF EXISTS `vw_laporan`;

/*!50001 DROP VIEW IF EXISTS `vw_laporan` */;
/*!50001 DROP TABLE IF EXISTS `vw_laporan` */;

/*!50001 CREATE TABLE  `vw_laporan`(
 `nis` char(11) ,
 `nama` varchar(100) ,
 `jk` enum('L','P') ,
 `agama` enum('Islam','Kristen','Hindu','Buddha','Konghucu') ,
 `t_lahir` varchar(100) ,
 `tgl_lahir` date ,
 `alamat` varchar(100) ,
 `jurusan` enum('IPA','IPS','KBC') ,
 `th_lulus` year(4) ,
 `no_hp` varchar(20) ,
 `email` varchar(100) ,
 `st_kgt` varchar(50) ,
 `nama_univ` varchar(50) ,
 `pg_studi` varchar(50) ,
 `jenjang` enum('S1','S2','S3','D3','D4') ,
 `th_masuk_u` varchar(4) ,
 `status` enum('Aktif','Lulus') ,
 `st_beasiswa` enum('YA','TIDAK') ,
 `ket_beasiswa` varchar(100) ,
 `nm_perusahaan` varchar(50) ,
 `jabatan` varchar(50) ,
 `th_masuk_p` varchar(4) 
)*/;

/*Table structure for table `vw_ortu` */

DROP TABLE IF EXISTS `vw_ortu`;

/*!50001 DROP VIEW IF EXISTS `vw_ortu` */;
/*!50001 DROP TABLE IF EXISTS `vw_ortu` */;

/*!50001 CREATE TABLE  `vw_ortu`(
 `id_alm` int(11) ,
 `nis` char(11) ,
 `nama` varchar(100) ,
 `nm_ayah` varchar(50) ,
 `pd_ayah` varchar(50) ,
 `pk_ayah` varchar(50) ,
 `alamat_ayah` varchar(100) ,
 `nm_ibu` varchar(50) ,
 `pd_ibu` varchar(50) ,
 `pk_ibu` varchar(50) ,
 `alamat_ibu` varchar(100) 
)*/;

/*View structure for view vw_berita */

/*!50001 DROP TABLE IF EXISTS `vw_berita` */;
/*!50001 DROP VIEW IF EXISTS `vw_berita` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_berita` AS select `db_berita`.`id_berita` AS `id_berita`,`db_berita`.`kategori` AS `kategori`,`db_berita`.`judul` AS `judul`,`db_berita`.`isi_berita` AS `isi_berita`,`db_berita`.`gambar` AS `gambar`,`db_berita`.`tgl_berita` AS `tgl_berita`,`db_alumni`.`nama` AS `nama`,`db_alumni`.`level` AS `level`,`db_alumni`.`foto` AS `foto` from ((`db_berita` left join `db_alumni` on(`db_berita`.`id_alm` = `db_alumni`.`id_alm`)) left join `db_kegiatan` on(`db_kegiatan`.`id_alm` = `db_alumni`.`id_alm`)) order by `db_berita`.`id_berita` desc */;

/*View structure for view vw_cari_a */

/*!50001 DROP TABLE IF EXISTS `vw_cari_a` */;
/*!50001 DROP VIEW IF EXISTS `vw_cari_a` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_cari_a` AS select `db_alumni`.`nis` AS `nis`,`db_alumni`.`nama` AS `nama`,`db_alumni`.`jurusan` AS `jurusan`,`db_alumni`.`th_lulus` AS `th_lulus`,`db_alumni`.`foto` AS `foto`,`db_kegiatan`.`nama_univ` AS `nama_univ`,`db_kegiatan`.`nm_perusahaan` AS `nm_perusahaan`,`db_sosmed`.`ig` AS `ig`,`db_sosmed`.`fb` AS `fb`,`db_sosmed`.`tw` AS `tw`,`db_sosmed`.`yt` AS `yt` from ((`db_kegiatan` join `db_alumni` on(`db_kegiatan`.`id_alm` = `db_alumni`.`id_alm`)) join `db_sosmed` on(`db_sosmed`.`id_alm` = `db_alumni`.`id_alm`)) where `db_alumni`.`ket` = 'Aktif' and `db_alumni`.`level` = 2 */;

/*View structure for view vw_cari_p */

/*!50001 DROP TABLE IF EXISTS `vw_cari_p` */;
/*!50001 DROP VIEW IF EXISTS `vw_cari_p` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_cari_p` AS select `db_alumni`.`nama` AS `nama`,`db_alumni`.`jurusan` AS `jurusan`,`db_alumni`.`th_lulus` AS `th_lulus` from (`db_alumni` left join `db_kegiatan` on(`db_kegiatan`.`id_alm` = `db_alumni`.`id_alm`)) where `db_alumni`.`ket` = 'aktif' and `db_alumni`.`level` = 2 */;

/*View structure for view vw_countuniv */

/*!50001 DROP TABLE IF EXISTS `vw_countuniv` */;
/*!50001 DROP VIEW IF EXISTS `vw_countuniv` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_countuniv` AS (select `vw_kegiatan`.`id_kegiatan` AS `id_kegiatan`,`vw_kegiatan`.`nama_univ` AS `nama_univ`,count(0) AS `jumlah` from `vw_kegiatan` group by `vw_kegiatan`.`nama_univ`) */;

/*View structure for view vw_datakgt */

/*!50001 DROP TABLE IF EXISTS `vw_datakgt` */;
/*!50001 DROP VIEW IF EXISTS `vw_datakgt` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_datakgt` AS (select `vw_laporan`.`th_lulus` AS `th_lulus`,count(if(`vw_laporan`.`st_kgt` = 'Bekerja',1,NULL)) AS `alm_bkj`,count(if(`vw_laporan`.`st_kgt` = 'Kuliah',1,NULL)) AS `alm_klh`,count(if(`vw_laporan`.`st_kgt` = 'Tidak Kuliah dan Bekerja',1,NULL)) AS `alm_cti`,count(if(`vw_laporan`.`th_lulus`,1,NULL)) AS `jml_alm` from `vw_laporan` group by `vw_laporan`.`th_lulus`) */;

/*View structure for view vw_kegiatan */

/*!50001 DROP TABLE IF EXISTS `vw_kegiatan` */;
/*!50001 DROP VIEW IF EXISTS `vw_kegiatan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_kegiatan` AS (select `db_kegiatan`.`id_kegiatan` AS `id_kegiatan`,`db_alumni`.`id_alm` AS `id_alm`,`db_alumni`.`nama` AS `nama`,`db_alumni`.`jurusan` AS `jurusan`,`db_kegiatan`.`st_kgt` AS `st_kgt`,`db_kegiatan`.`nama_univ` AS `nama_univ`,`db_kegiatan`.`pg_studi` AS `pg_studi`,`db_kegiatan`.`jenjang` AS `jenjang`,`db_kegiatan`.`th_masuk_u` AS `th_masuk_u`,`db_kegiatan`.`status` AS `status`,`db_kegiatan`.`st_beasiswa` AS `st_beasiswa`,`db_kegiatan`.`ket_beasiswa` AS `ket_beasiswa`,`db_kegiatan`.`nm_perusahaan` AS `nm_perusahaan`,`db_kegiatan`.`jabatan` AS `jabatan`,`db_kegiatan`.`th_masuk_p` AS `th_masuk_p` from (`db_kegiatan` join `db_alumni` on(`db_kegiatan`.`id_alm` = `db_alumni`.`id_alm`)) where `db_alumni`.`level` = 2) */;

/*View structure for view vw_ketquis */

/*!50001 DROP TABLE IF EXISTS `vw_ketquis` */;
/*!50001 DROP VIEW IF EXISTS `vw_ketquis` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_ketquis` AS (select `db_alumni`.`nama` AS `nama`,`db_alumni`.`jurusan` AS `jurusan`,`db_alumni`.`th_lulus` AS `th_lulus`,`ketkq`.`no` AS `no`,`ketkq`.`no_` AS `no_` from (`ketkq` join `db_alumni` on(`ketkq`.`id_alm` = `db_alumni`.`id_alm`)) where `db_alumni`.`level` = 2) */;

/*View structure for view vw_kuesioner2 */

/*!50001 DROP TABLE IF EXISTS `vw_kuesioner2` */;
/*!50001 DROP VIEW IF EXISTS `vw_kuesioner2` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_kuesioner2` AS select `jawaban2`.`id_jwb` AS `id_jwb`,`jawaban2`.`nama` AS `nama`,`jawaban2`.`jurusan` AS `jurusan`,`jawaban2`.`th_lulus` AS `th_lulus`,`jawaban3`.`s1` AS `s1`,`jawaban3`.`s2` AS `s2`,`jawaban3`.`s3` AS `s3`,`jawaban3`.`s4` AS `s4`,`jawaban3`.`s5` AS `s5`,`jawaban3`.`s6` AS `s6`,`jawaban3`.`s7` AS `s7`,`jawaban3`.`s8` AS `s8`,`jawaban3`.`s9` AS `s9`,`jawaban3`.`s10` AS `s10`,`jawaban4`.`k1` AS `k1`,`jawaban4`.`k2` AS `k2`,`jawaban4`.`k3` AS `k3`,`jawaban4`.`k4` AS `k4`,`jawaban4`.`k5` AS `k5`,`jawaban4`.`k6` AS `k6`,`jawaban4`.`k7` AS `k7`,`jawaban4`.`k8` AS `k8`,`jawaban4`.`k9` AS `k9`,`jawaban4`.`k10` AS `k10`,`jawaban4`.`k11` AS `k11`,`jawaban4`.`k12` AS `k12`,`jawaban4`.`k13` AS `k13`,`jawaban4`.`k14` AS `k14` from ((`jawaban3` left join `jawaban2` on(`jawaban3`.`id_jwb2` = `jawaban2`.`id_jwb`)) left join `jawaban4` on(`jawaban4`.`id_jwb2` = `jawaban2`.`id_jwb`)) where `jawaban2`.`f4` = 1 */;

/*View structure for view vw_kuesioner3 */

/*!50001 DROP TABLE IF EXISTS `vw_kuesioner3` */;
/*!50001 DROP VIEW IF EXISTS `vw_kuesioner3` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_kuesioner3` AS (select `jawaban2`.`id_jwb` AS `id_jwb`,`jawaban2`.`nama` AS `nama`,`jawaban2`.`jurusan` AS `jurusan`,`jawaban2`.`th_lulus` AS `th_lulus`,`jawaban3`.`b1` AS `b1`,`jawaban3`.`b2` AS `b2`,`jawaban3`.`b3` AS `b3`,`jawaban3`.`b4` AS `b4`,`jawaban3`.`b5` AS `b5`,`jawaban3`.`b6` AS `b6`,`jawaban4`.`m1` AS `m1`,`jawaban4`.`m2` AS `m2`,`jawaban4`.`m3` AS `m3`,`jawaban4`.`m4` AS `m4`,`jawaban4`.`m5` AS `m5`,`jawaban4`.`m6` AS `m6`,`jawaban4`.`m7` AS `m7` from ((`jawaban3` left join `jawaban2` on(`jawaban3`.`id_jwb2` = `jawaban2`.`id_jwb`)) left join `jawaban4` on(`jawaban4`.`id_jwb2` = `jawaban2`.`id_jwb`)) where `jawaban2`.`f4` = 2 or `jawaban2`.`f4` = 3) */;

/*View structure for view vw_laporan */

/*!50001 DROP TABLE IF EXISTS `vw_laporan` */;
/*!50001 DROP VIEW IF EXISTS `vw_laporan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_laporan` AS select `db_alumni`.`nis` AS `nis`,`db_alumni`.`nama` AS `nama`,`db_alumni`.`jk` AS `jk`,`db_alumni`.`agama` AS `agama`,`db_alumni`.`t_lahir` AS `t_lahir`,`db_alumni`.`tgl_lahir` AS `tgl_lahir`,`db_alumni`.`alamat` AS `alamat`,`db_alumni`.`jurusan` AS `jurusan`,`db_alumni`.`th_lulus` AS `th_lulus`,`db_alumni`.`no_hp` AS `no_hp`,`db_alumni`.`email` AS `email`,`db_kegiatan`.`st_kgt` AS `st_kgt`,`db_kegiatan`.`nama_univ` AS `nama_univ`,`db_kegiatan`.`pg_studi` AS `pg_studi`,`db_kegiatan`.`jenjang` AS `jenjang`,`db_kegiatan`.`th_masuk_u` AS `th_masuk_u`,`db_kegiatan`.`status` AS `status`,`db_kegiatan`.`st_beasiswa` AS `st_beasiswa`,`db_kegiatan`.`ket_beasiswa` AS `ket_beasiswa`,`db_kegiatan`.`nm_perusahaan` AS `nm_perusahaan`,`db_kegiatan`.`jabatan` AS `jabatan`,`db_kegiatan`.`th_masuk_p` AS `th_masuk_p` from (`db_alumni` left join `db_kegiatan` on(`db_kegiatan`.`id_alm` = `db_alumni`.`id_alm`)) where `db_alumni`.`ket` = 'Aktif' and `db_alumni`.`level` = 2 */;

/*View structure for view vw_ortu */

/*!50001 DROP TABLE IF EXISTS `vw_ortu` */;
/*!50001 DROP VIEW IF EXISTS `vw_ortu` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_ortu` AS (select `db_alumni`.`id_alm` AS `id_alm`,`db_alumni`.`nis` AS `nis`,`db_alumni`.`nama` AS `nama`,`data_orangtua`.`nm_ayah` AS `nm_ayah`,`data_orangtua`.`pd_ayah` AS `pd_ayah`,`data_orangtua`.`pk_ayah` AS `pk_ayah`,`data_orangtua`.`alamat_ayah` AS `alamat_ayah`,`data_orangtua`.`nm_ibu` AS `nm_ibu`,`data_orangtua`.`pd_ibu` AS `pd_ibu`,`data_orangtua`.`pk_ibu` AS `pk_ibu`,`data_orangtua`.`alamat_ibu` AS `alamat_ibu` from (`data_orangtua` join `db_alumni` on(`data_orangtua`.`id_ortu` = `db_alumni`.`id_alm`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
