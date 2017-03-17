-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for db_data_mining_nila
CREATE DATABASE IF NOT EXISTS `db_data_mining_nila` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_data_mining_nila`;


-- Dumping structure for table db_data_mining_nila.data_anggota
CREATE TABLE IF NOT EXISTS `data_anggota` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kelayakan` enum('Ya','Tidak') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.data_anggota: ~1 rows (approximately)
DELETE FROM `data_anggota`;
/*!40000 ALTER TABLE `data_anggota` DISABLE KEYS */;
INSERT INTO `data_anggota` (`id`, `kelayakan`) VALUES
	(41, 'Ya');
/*!40000 ALTER TABLE `data_anggota` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.data_deskripsi
CREATE TABLE IF NOT EXISTS `data_deskripsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.data_deskripsi: ~2 rows (approximately)
DELETE FROM `data_deskripsi`;
/*!40000 ALTER TABLE `data_deskripsi` DISABLE KEYS */;
INSERT INTO `data_deskripsi` (`id`, `nama`) VALUES
	(1, 'No. Pembiayan'),
	(2, 'Nama'),
	(3, 'No. Kependudukan');
/*!40000 ALTER TABLE `data_deskripsi` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.data_deskripsi_value
CREATE TABLE IF NOT EXISTS `data_deskripsi_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11) DEFAULT NULL,
  `id_deskripsi` int(11) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_anggota_id_deskripsi` (`id_anggota`,`id_deskripsi`),
  KEY `FK__data_deskripsi` (`id_deskripsi`),
  CONSTRAINT `FK__data_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK__data_deskripsi` FOREIGN KEY (`id_deskripsi`) REFERENCES `data_deskripsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.data_deskripsi_value: ~3 rows (approximately)
DELETE FROM `data_deskripsi_value`;
/*!40000 ALTER TABLE `data_deskripsi_value` DISABLE KEYS */;
INSERT INTO `data_deskripsi_value` (`id`, `id_anggota`, `id_deskripsi`, `value`) VALUES
	(31, 41, 1, 'sdfa'),
	(32, 41, 2, 'asdf'),
	(33, 41, 3, 'asdf');
/*!40000 ALTER TABLE `data_deskripsi_value` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.data_latih
CREATE TABLE IF NOT EXISTS `data_latih` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11) NOT NULL,
  `id_value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_anggota_id_value` (`id_anggota`,`id_value`),
  KEY `FK_data_deskripsi_data_deskripsi` (`id_value`),
  CONSTRAINT `FK_data_deskripsi_data_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_deskripsi_data_deskripsi` FOREIGN KEY (`id_value`) REFERENCES `data_value_variable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.data_latih: ~9 rows (approximately)
DELETE FROM `data_latih`;
/*!40000 ALTER TABLE `data_latih` DISABLE KEYS */;
INSERT INTO `data_latih` (`id`, `id_anggota`, `id_value`) VALUES
	(209, 41, 1),
	(204, 41, 4),
	(207, 41, 6),
	(208, 41, 14),
	(205, 41, 22),
	(210, 41, 25),
	(211, 41, 30),
	(203, 41, 37),
	(206, 41, 45);
/*!40000 ALTER TABLE `data_latih` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.data_prediksi
CREATE TABLE IF NOT EXISTS `data_prediksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pembiayaan` varchar(50) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `Jaminan` varchar(50) DEFAULT NULL,
  `Jenis_Pembiayaan` varchar(50) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Jumlah_Tanggungan` varchar(50) NOT NULL,
  `Jumlah_Pembiayaan` varchar(50) NOT NULL,
  `Keperluan_Pembiayaan` varchar(50) NOT NULL,
  `Jangka_Waktu` varchar(50) NOT NULL,
  `Total_Penghasilan` varchar(50) NOT NULL,
  `Karakter` varchar(50) NOT NULL,
  `Kelayakan` enum('Ya','Tidak') NOT NULL,
  `keputusan_c45` varchar(50) NOT NULL,
  `rule` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `current_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `tampil` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.data_prediksi: ~0 rows (approximately)
DELETE FROM `data_prediksi`;
/*!40000 ALTER TABLE `data_prediksi` DISABLE KEYS */;
INSERT INTO `data_prediksi` (`id`, `no_pembiayaan`, `nama_anggota`, `Jaminan`, `Jenis_Pembiayaan`, `Pekerjaan`, `Jumlah_Tanggungan`, `Jumlah_Pembiayaan`, `Keperluan_Pembiayaan`, `Jangka_Waktu`, `Total_Penghasilan`, `Karakter`, `Kelayakan`, `keputusan_c45`, `rule`, `value`, `current_time`, `tampil`) VALUES
	(1, '', '', 'Sertifikat Tanah', 'Modal Usaha', 'Usaha', 'kurang tinggi', 'sedang', 'Pendidikan', '12 bulan', 'kurang tinggi', 'Bagus', 'Ya', 'ya', 'Karakter', 'Bagus', '2016-06-06 13:41:38', 0);
/*!40000 ALTER TABLE `data_prediksi` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.data_value_variable
CREATE TABLE IF NOT EXISTS `data_value_variable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_variable` int(10) NOT NULL DEFAULT '0',
  `nilai_variable` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `variabel_nilai_variabel` (`nilai_variable`),
  KEY `FK_data_value_variable_data_variable` (`id_variable`),
  CONSTRAINT `FK_data_value_variable_data_variable` FOREIGN KEY (`id_variable`) REFERENCES `data_variable` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.data_value_variable: ~45 rows (approximately)
DELETE FROM `data_value_variable`;
/*!40000 ALTER TABLE `data_value_variable` DISABLE KEYS */;
INSERT INTO `data_value_variable` (`id`, `id_variable`, `nilai_variable`) VALUES
	(1, 3, 'Modal Usaha'),
	(2, 3, 'Pendidikan'),
	(3, 3, 'Pembiayaan'),
	(4, 8, 'Usaha'),
	(5, 8, 'Non Usaha'),
	(6, 5, 'rendah'),
	(7, 5, 'sangat rendah'),
	(8, 5, 'lebih tinggi'),
	(9, 5, 'lebih'),
	(10, 5, 'tinggi'),
	(11, 5, 'sedang'),
	(12, 5, 'sangat tinggi'),
	(13, 5, 'kurang tinggi'),
	(14, 4, 'sedang'),
	(15, 4, 'sangat tinggi'),
	(16, 4, 'tinggi'),
	(17, 4, 'lebih'),
	(18, 4, 'lebih tinggi'),
	(19, 4, 'rendah'),
	(20, 4, 'kurang tinggi'),
	(21, 4, 'sangat rendah'),
	(22, 7, 'Tambah Modal'),
	(23, 7, 'Pendidikan'),
	(24, 7, 'Beli Barang'),
	(25, 2, '12 bulan'),
	(26, 2, '11 minggu'),
	(27, 2, '10 bulan'),
	(28, 2, '24 bulan'),
	(29, 2, '2 bulan'),
	(30, 1, 'BPKB Motor'),
	(31, 1, 'Kartu Pasar'),
	(32, 1, 'Barang Berharga'),
	(33, 1, 'Sertifikat Tanah'),
	(34, 1, 'BPKB Mobil'),
	(35, 1, 'Setifikat Tanah'),
	(37, 9, 'lebih'),
	(38, 9, 'rendah'),
	(39, 9, 'sedang'),
	(40, 9, 'sangat rendah'),
	(41, 9, 'tinggi'),
	(42, 9, 'kurang tinggi'),
	(43, 9, 'sangat tinggi'),
	(44, 9, 'lebih tinggi'),
	(45, 6, 'Bermasalah'),
	(46, 6, 'Bagus');
/*!40000 ALTER TABLE `data_value_variable` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.data_variable
CREATE TABLE IF NOT EXISTS `data_variable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.data_variable: ~8 rows (approximately)
DELETE FROM `data_variable`;
/*!40000 ALTER TABLE `data_variable` DISABLE KEYS */;
INSERT INTO `data_variable` (`id`, `nama`) VALUES
	(1, 'Jaminan'),
	(2, 'Jangka_Waktu'),
	(3, 'Jenis_Pembiayaan'),
	(4, 'Jumlah_Pembiayaan'),
	(5, 'Jumlah_Tanggungan'),
	(6, 'Karakter'),
	(7, 'Keperluan_Pembiayaan'),
	(8, 'Pekerjaan'),
	(9, 'Total_Penghasilan');
/*!40000 ALTER TABLE `data_variable` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table db_data_mining_nila.karyawan: ~2 rows (approximately)
DELETE FROM `karyawan`;
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`id`, `username`, `password`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.rule_pohon_keputusan
CREATE TABLE IF NOT EXISTS `rule_pohon_keputusan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_parent` int(10) NOT NULL,
  `rule` varchar(200) NOT NULL,
  `variabel` varchar(50) DEFAULT NULL,
  `kelayakan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- Dumping data for table db_data_mining_nila.rule_pohon_keputusan: ~38 rows (approximately)
DELETE FROM `rule_pohon_keputusan`;
/*!40000 ALTER TABLE `rule_pohon_keputusan` DISABLE KEYS */;
INSERT INTO `rule_pohon_keputusan` (`id`, `id_parent`, `rule`, `variabel`, `kelayakan`) VALUES
	(1, 0, 'Karakter', 'Bagus', '?'),
	(2, 0, 'Karakter', 'Bermasalah', 'tidak'),
	(3, 1, 'Jumlah_Tanggungan', 'kurang tinggi', 'ya'),
	(4, 1, 'Jumlah_Tanggungan', 'lebih', 'ya'),
	(5, 1, 'Jumlah_Tanggungan', 'lebih tinggi', 'tidak'),
	(6, 1, 'Jumlah_Tanggungan', 'rendah', 'ya'),
	(7, 1, 'Jumlah_Tanggungan', 'sangat rendah', 'ya'),
	(8, 1, 'Jumlah_Tanggungan', 'sangat tinggi', 'tidak'),
	(9, 1, 'Jumlah_Tanggungan', 'sedang', '?'),
	(10, 1, 'Jumlah_Tanggungan', 'tinggi', '?'),
	(11, 9, 'Total_Penghasilan', 'kurang tinggi', 'tidak'),
	(12, 9, 'Total_Penghasilan', 'lebih', '?'),
	(13, 9, 'Total_Penghasilan', 'lebih tinggi', 'tidak'),
	(14, 9, 'Total_Penghasilan', 'rendah', 'ya'),
	(15, 9, 'Total_Penghasilan', 'sangat rendah', 'ya'),
	(16, 9, 'Total_Penghasilan', 'sangat tinggi', 'ya'),
	(17, 9, 'Total_Penghasilan', 'sedang', 'ya'),
	(18, 9, 'Total_Penghasilan', 'tinggi', 'ya'),
	(19, 10, 'Total_Penghasilan', 'kurang tinggi', 'tidak'),
	(20, 10, 'Total_Penghasilan', 'lebih', '?'),
	(21, 10, 'Total_Penghasilan', 'lebih tinggi', 'tidak'),
	(22, 10, 'Total_Penghasilan', 'rendah', 'ya'),
	(23, 10, 'Total_Penghasilan', 'sangat rendah', 'tidak'),
	(24, 10, 'Total_Penghasilan', 'sangat tinggi', 'ya'),
	(25, 10, 'Total_Penghasilan', 'sedang', 'tidak'),
	(26, 10, 'Total_Penghasilan', 'tinggi', 'tidak'),
	(27, 12, 'Jaminan', 'Barang Berharga', 'tidak'),
	(28, 12, 'Jaminan', 'BPKB Mobil', 'tidak'),
	(29, 12, 'Jaminan', 'BPKB Motor', 'ya'),
	(30, 12, 'Jaminan', 'Kartu Pasar', 'tidak'),
	(31, 12, 'Jaminan', 'Sertifikat Tanah', 'ya'),
	(32, 12, 'Jaminan', 'Setifikat Tanah', 'tidak'),
	(33, 20, 'Jaminan', 'Barang Berharga', 'ya'),
	(34, 20, 'Jaminan', 'BPKB Mobil', 'tidak'),
	(35, 20, 'Jaminan', 'BPKB Motor', 'tidak'),
	(36, 20, 'Jaminan', 'Kartu Pasar', 'tidak'),
	(37, 20, 'Jaminan', 'Sertifikat Tanah', 'tidak'),
	(38, 20, 'Jaminan', 'Setifikat Tanah', 'tidak');
/*!40000 ALTER TABLE `rule_pohon_keputusan` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.status_nasabah
CREATE TABLE IF NOT EXISTS `status_nasabah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_prediksi` int(11) NOT NULL DEFAULT '0',
  `keterangan` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_prediksi` (`data_prediksi`),
  CONSTRAINT `FK__data_prediksi` FOREIGN KEY (`data_prediksi`) REFERENCES `data_prediksi` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.status_nasabah: ~0 rows (approximately)
DELETE FROM `status_nasabah`;
/*!40000 ALTER TABLE `status_nasabah` DISABLE KEYS */;
/*!40000 ALTER TABLE `status_nasabah` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.tampil_pohon_keputusan
CREATE TABLE IF NOT EXISTS `tampil_pohon_keputusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `variable` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `id_parent` int(11) DEFAULT '0',
  `id_tree` int(11) DEFAULT '0',
  `tidak` int(11) DEFAULT '0',
  `ya` int(11) DEFAULT '0',
  `kelayakan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.tampil_pohon_keputusan: ~38 rows (approximately)
DELETE FROM `tampil_pohon_keputusan`;
/*!40000 ALTER TABLE `tampil_pohon_keputusan` DISABLE KEYS */;
INSERT INTO `tampil_pohon_keputusan` (`id`, `variable`, `value`, `id_parent`, `id_tree`, `tidak`, `ya`, `kelayakan`) VALUES
	(1, 'Karakter', 'Bagus', 0, 0, 6, 80, '?'),
	(2, 'Karakter', 'Bermasalah', 0, 0, 19, 0, 'tidak'),
	(3, 'Jumlah_Tanggungan', 'kurang tinggi', 1, 1, 0, 11, 'ya'),
	(4, 'Jumlah_Tanggungan', 'lebih', 1, 1, 0, 12, 'ya'),
	(5, 'Jumlah_Tanggungan', 'lebih tinggi', 1, 1, 3, 0, 'tidak'),
	(6, 'Jumlah_Tanggungan', 'rendah', 1, 1, 0, 19, 'ya'),
	(7, 'Jumlah_Tanggungan', 'sangat rendah', 1, 1, 0, 10, 'ya'),
	(8, 'Jumlah_Tanggungan', 'sangat tinggi', 1, 1, 1, 0, 'tidak'),
	(9, 'Jumlah_Tanggungan', 'sedang', 1, 1, 1, 24, '?'),
	(10, 'Jumlah_Tanggungan', 'tinggi', 1, 1, 1, 4, '?'),
	(11, 'Total_Penghasilan', 'kurang tinggi', 9, 2, 0, 0, 'tidak'),
	(12, 'Total_Penghasilan', 'lebih', 9, 2, 1, 3, '?'),
	(13, 'Total_Penghasilan', 'lebih tinggi', 9, 2, 0, 0, 'tidak'),
	(14, 'Total_Penghasilan', 'rendah', 9, 2, 0, 9, 'ya'),
	(15, 'Total_Penghasilan', 'sangat rendah', 9, 2, 0, 2, 'ya'),
	(16, 'Total_Penghasilan', 'sangat tinggi', 9, 2, 0, 2, 'ya'),
	(17, 'Total_Penghasilan', 'sedang', 9, 2, 0, 5, 'ya'),
	(18, 'Total_Penghasilan', 'tinggi', 9, 2, 0, 3, 'ya'),
	(19, 'Total_Penghasilan', 'kurang tinggi', 10, 2, 0, 0, 'tidak'),
	(20, 'Total_Penghasilan', 'lebih', 10, 2, 1, 1, '?'),
	(21, 'Total_Penghasilan', 'lebih tinggi', 10, 2, 0, 0, 'tidak'),
	(22, 'Total_Penghasilan', 'rendah', 10, 2, 0, 2, 'ya'),
	(23, 'Total_Penghasilan', 'sangat rendah', 10, 2, 0, 0, 'tidak'),
	(24, 'Total_Penghasilan', 'sangat tinggi', 10, 2, 0, 1, 'ya'),
	(25, 'Total_Penghasilan', 'sedang', 10, 2, 0, 0, 'tidak'),
	(26, 'Total_Penghasilan', 'tinggi', 10, 2, 0, 0, 'tidak'),
	(27, 'Jaminan', 'Barang Berharga', 12, 3, 1, 0, 'tidak'),
	(28, 'Jaminan', 'BPKB Mobil', 12, 3, 0, 0, 'tidak'),
	(29, 'Jaminan', 'BPKB Motor', 12, 3, 0, 1, 'ya'),
	(30, 'Jaminan', 'Kartu Pasar', 12, 3, 0, 0, 'tidak'),
	(31, 'Jaminan', 'Sertifikat Tanah', 12, 3, 0, 1, 'ya'),
	(32, 'Jaminan', 'Setifikat Tanah', 12, 3, 0, 0, 'tidak'),
	(33, 'Jaminan', 'Barang Berharga', 20, 3, 0, 1, 'ya'),
	(34, 'Jaminan', 'BPKB Mobil', 20, 3, 0, 0, 'tidak'),
	(35, 'Jaminan', 'BPKB Motor', 20, 3, 1, 0, 'tidak'),
	(36, 'Jaminan', 'Kartu Pasar', 20, 3, 0, 0, 'tidak'),
	(37, 'Jaminan', 'Sertifikat Tanah', 20, 3, 0, 0, 'tidak'),
	(38, 'Jaminan', 'Setifikat Tanah', 20, 3, 0, 0, 'tidak');
/*!40000 ALTER TABLE `tampil_pohon_keputusan` ENABLE KEYS */;


-- Dumping structure for table db_data_mining_nila.tampil_rule_prediksi
CREATE TABLE IF NOT EXISTS `tampil_rule_prediksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) DEFAULT '0',
  `variable` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `kelayakan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- Dumping data for table db_data_mining_nila.tampil_rule_prediksi: ~38 rows (approximately)
DELETE FROM `tampil_rule_prediksi`;
/*!40000 ALTER TABLE `tampil_rule_prediksi` DISABLE KEYS */;
INSERT INTO `tampil_rule_prediksi` (`id`, `id_parent`, `variable`, `value`, `kelayakan`) VALUES
	(1, 0, 'Karakter', 'Bagus', '?'),
	(2, 0, 'Karakter', 'Bermasalah', 'tidak'),
	(3, 1, 'Jumlah_Tanggungan', 'kurang tinggi', 'ya'),
	(4, 1, 'Jumlah_Tanggungan', 'lebih', 'ya'),
	(5, 1, 'Jumlah_Tanggungan', 'lebih tinggi', 'tidak'),
	(6, 1, 'Jumlah_Tanggungan', 'rendah', 'ya'),
	(7, 1, 'Jumlah_Tanggungan', 'sangat rendah', 'ya'),
	(8, 1, 'Jumlah_Tanggungan', 'sangat tinggi', 'tidak'),
	(9, 1, 'Jumlah_Tanggungan', 'sedang', '?'),
	(10, 1, 'Jumlah_Tanggungan', 'tinggi', '?'),
	(11, 9, 'Total_Penghasilan', 'kurang tinggi', 'tidak'),
	(12, 9, 'Total_Penghasilan', 'lebih', '?'),
	(13, 9, 'Total_Penghasilan', 'lebih tinggi', 'tidak'),
	(14, 9, 'Total_Penghasilan', 'rendah', 'ya'),
	(15, 9, 'Total_Penghasilan', 'sangat rendah', 'ya'),
	(16, 9, 'Total_Penghasilan', 'sangat tinggi', 'ya'),
	(17, 9, 'Total_Penghasilan', 'sedang', 'ya'),
	(18, 9, 'Total_Penghasilan', 'tinggi', 'ya'),
	(19, 10, 'Total_Penghasilan', 'kurang tinggi', 'tidak'),
	(20, 10, 'Total_Penghasilan', 'lebih', '?'),
	(21, 10, 'Total_Penghasilan', 'lebih tinggi', 'tidak'),
	(22, 10, 'Total_Penghasilan', 'rendah', 'ya'),
	(23, 10, 'Total_Penghasilan', 'sangat rendah', 'tidak'),
	(24, 10, 'Total_Penghasilan', 'sangat tinggi', 'ya'),
	(25, 10, 'Total_Penghasilan', 'sedang', 'tidak'),
	(26, 10, 'Total_Penghasilan', 'tinggi', 'tidak'),
	(27, 12, 'Jaminan', 'Barang Berharga', 'tidak'),
	(28, 12, 'Jaminan', 'BPKB Mobil', 'tidak'),
	(29, 12, 'Jaminan', 'BPKB Motor', 'ya'),
	(30, 12, 'Jaminan', 'Kartu Pasar', 'tidak'),
	(31, 12, 'Jaminan', 'Sertifikat Tanah', 'ya'),
	(32, 12, 'Jaminan', 'Setifikat Tanah', 'tidak'),
	(33, 20, 'Jaminan', 'Barang Berharga', 'ya'),
	(34, 20, 'Jaminan', 'BPKB Mobil', 'tidak'),
	(35, 20, 'Jaminan', 'BPKB Motor', 'tidak'),
	(36, 20, 'Jaminan', 'Kartu Pasar', 'tidak'),
	(37, 20, 'Jaminan', 'Sertifikat Tanah', 'tidak'),
	(38, 20, 'Jaminan', 'Setifikat Tanah', 'tidak');
/*!40000 ALTER TABLE `tampil_rule_prediksi` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
