-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 01:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_data_mining_nila`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE IF NOT EXISTS `data_anggota` (
  `id` int(10) NOT NULL,
  `no_pembiayaan` varchar(50) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `Jaminan` varchar(50) NOT NULL,
  `Jenis_Pembiayaan` varchar(50) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Jumlah_Tanggungan` varchar(50) NOT NULL,
  `Jumlah_Pembiayaan` varchar(50) NOT NULL,
  `Keperluan_Pembiayaan` varchar(50) NOT NULL,
  `Jangka_Waktu` varchar(50) NOT NULL,
  `Total_Penghasilan` varchar(50) NOT NULL,
  `Karakter` varchar(50) NOT NULL,
  `Kelayakan` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=848 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `no_pembiayaan`, `nama_anggota`, `Jaminan`, `Jenis_Pembiayaan`, `Pekerjaan`, `Jumlah_Tanggungan`, `Jumlah_Pembiayaan`, `Keperluan_Pembiayaan`, `Jangka_Waktu`, `Total_Penghasilan`, `Karakter`, `Kelayakan`) VALUES
(743, '8', 'aoeuaoeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'rendah', 'sedang', 'Tambah Modal', '12 bulan', 'lebih', 'Bermasalah', 'Tidak'),
(744, '3', 'oeu', 'Kartu Pasar', 'Pendidikan', 'Usaha', 'rendah', 'sangat tinggi', 'Pendidikan', '12 bulan', 'lebih', 'Bermasalah', 'Tidak'),
(745, '4', 'oeu', 'Kartu Pasar', 'Modal Usaha', 'Usaha', 'rendah', 'tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(746, '5', 'oeu', 'Barang Berharga', 'Pembiayaan', 'Non Usaha', 'sangat rendah', 'lebih', 'Tambah Modal', '11minggu', 'rendah', 'Bagus', 'Ya'),
(747, '6', 'oeu', 'Kartu Pasar', 'Pendidikan', 'Usaha', 'lebih tinggi', 'lebih tinggi', 'Pendidikan', '12 bulan', 'lebih', 'Bagus', 'Tidak'),
(748, '7', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'lebih', 'lebih', 'Pendidikan', '11minggu', 'rendah', 'Bermasalah', 'Tidak'),
(749, '8', 'oeu', 'Barang Berharga', 'Modal Usaha', 'Non Usaha', 'tinggi', 'sedang', 'Tambah Modal', '12 bulan', 'lebih', 'Bagus', 'Ya'),
(750, '9', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Non Usaha', 'rendah', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'sedang', 'Bermasalah', 'Tidak'),
(751, '10', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Non Usaha', 'sangat rendah', 'tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(752, '11', 'oeu', 'Barang Berharga', 'Modal Usaha', 'Usaha', 'sedang', 'rendah', 'Tambah Modal', '11minggu', 'lebih', 'Bermasalah', 'Tidak'),
(753, '12', 'oeu', 'Barang Berharga', 'Modal Usaha', 'Usaha', 'rendah', 'tinggi', 'Tambah Modal', '12 bulan', 'lebih', 'Bagus', 'Ya'),
(754, '13', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Usaha', 'rendah', 'lebih tinggi', 'Tambah Modal', '12 bulan', 'lebih', 'Bermasalah', 'Tidak'),
(755, '14', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Usaha', 'lebih tinggi', 'sangat tinggi', 'Beli Barang', '12 bulan', 'lebih', 'Bagus', 'Tidak'),
(756, '15', 'oeu', 'Barang Berharga', 'Pembiayaan', 'Usaha', 'tinggi', 'rendah', 'Tambah Modal', '11minggu', 'rendah', 'Bermasalah', 'Tidak'),
(757, '16', 'oeu', 'BPKB Motor', 'Pendidikan', 'Non Usaha', 'sangat tinggi', 'lebih', 'Pendidikan', '11minggu', 'lebih', 'Bagus', 'Tidak'),
(758, '17', 'oeu', 'BPKB Motor', 'Pendidikan', 'Non Usaha', 'lebih tinggi', 'sedang', 'Pendidikan', '12 bulan', 'sangat rendah', 'Bermasalah', 'Tidak'),
(759, '18', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'rendah', 'sangat tinggi', 'Pendidikan', '12 bulan', 'sangat rendah', 'Bermasalah', 'Tidak'),
(760, '19', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'kurang tinggi', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'sangat rendah', 'Bermasalah', 'Tidak'),
(761, '20', 'oeu', 'Sertifikat Tanah', 'Modal Usaha', 'Usaha', 'sedang', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bermasalah', 'Tidak'),
(762, '21', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'rendah', 'kurang tinggi', 'Pendidikan', '11minggu', 'sedang', 'Bermasalah', 'Tidak'),
(763, '22', 'oeu', 'Barang Berharga', 'Pembiayaan', 'Usaha', 'sedang', 'sedang', 'Beli Barang', '11minggu', 'lebih', 'Bagus', 'Tidak'),
(764, '23', 'oeu', 'Kartu Pasar', 'Modal Usaha', 'Usaha', 'lebih', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bermasalah', 'Tidak'),
(765, '24', 'oeu', 'BPKB Motor', 'Pendidikan', 'Non Usaha', 'rendah', 'sangat tinggi', 'Pendidikan', '12 bulan', 'lebih', 'Bermasalah', 'Tidak'),
(766, '25', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'tinggi', 'sangat tinggi', 'Tambah modal', '12 bulan', 'lebih', 'Bagus', 'Tidak'),
(767, '26', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Non Usaha', 'sangat rendah', 'tinggi', 'Beli Barang', '11minggu', 'lebih', 'Bermasalah', 'Tidak'),
(768, '27', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'sangat rendah', 'sangat tinggi', 'Pendidikan', '11minggu', 'rendah', 'Bermasalah', 'Tidak'),
(769, '28', 'oeu', 'BPKB Motor', 'Pendidikan', 'Usaha', 'kurang tinggi', 'tinggi', 'Pendidikan', '12 bulan', 'rendah', 'Bermasalah', 'Tidak'),
(770, '29', 'oeu', 'BPKB Mobil', 'Modal Usaha', 'Non Usaha', 'lebih tinggi', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Tidak'),
(771, '30', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'kurang tinggi', 'lebih tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bermasalah', 'Tidak'),
(772, '31', 'oeu', 'Barang Berharga', 'Modal Usaha', 'Usaha', 'kurang tinggi', 'sangat tinggi', 'Tambah modal', '12 bulan', 'sedang', 'Bermasalah', 'Tidak'),
(773, '32', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Usaha', 'sangat rendah', 'lebih', 'Beli Barang', '11minggu', 'lebih', 'Bagus', 'Ya'),
(774, '33', 'oeu', 'BPKB Mobil', 'Modal Usaha', 'Usaha', 'sedang', 'lebih tinggi', 'Tambah Modal', '11minggu', 'tinggi', 'Bagus', 'Ya'),
(775, '34', 'oeu', 'BPKB Mobil', 'Pembiayaan', 'Usaha', 'kurang tinggi', 'sangat tinggi', 'Beli Barang', '12 bulan', 'kurang tinggi', 'Bagus', 'Ya'),
(776, '35', 'oeu', 'BPKB mobil', 'Pembiayaan', 'Usaha', 'kurang tinggi', 'sangat tinggi', 'Beli Barang', '12 bulan', 'kurang tinggi', 'Bagus', 'Ya'),
(777, '36', 'oeu', 'Barang Berharga', 'Pembiayaan', 'Usaha', 'kurang tinggi', 'sangat tinggi', 'Beli Barang', '12 bulan', 'tinggi', 'Bagus', 'Ya'),
(778, '37', 'oeu', 'BPKB Mobil', 'Pendidikan', 'Usaha', 'kurang tinggi', 'sangat tinggi', 'Pendidikan', '12 bulan', 'sedang', 'Bagus', 'Ya'),
(779, '38', 'oeu', 'BPKB Mobil', 'Pendidikan', 'Usaha', 'sedang', 'sedang', 'Pendidikan', '11minggu', 'sedang', 'Bagus', 'Ya'),
(780, '39', 'oeu', 'BPKB Motor', 'Pendidikan', 'Usaha', 'rendah', 'sangat tinggi', 'Pendidikan', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(781, '40', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Non Usaha', 'lebih', 'lebih tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(782, '41', 'oeu', 'Barang Berharga', 'Modal Usaha', 'Usaha', 'kurang tinggi', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'lebih', 'Bagus', 'Ya'),
(783, '42', 'oeu', 'BPKB Motor', 'Pendidikan', 'Usaha', 'sedang', 'tinggi', 'Pendidikan', '11minggu', 'rendah', 'Bagus', 'Ya'),
(784, '43', 'oeu', 'Kartu Pasar', 'Pembiayaan', 'Usaha', 'kurang tinggi', 'sedang', 'Beli Barang', '11minggu', 'rendah', 'Bagus', 'Ya'),
(785, '44', 'oeu', 'Barang Berharga', 'Modal Usaha', 'Usaha', 'sedang', 'lebih', 'Tambah Modal', '11minggu', 'sedang', 'Bagus', 'Ya'),
(786, '45', 'oeu', 'Kartu Pasar', 'Pendidikan', 'Usaha', 'rendah', 'lebih', 'Pendidikan', '11minggu', 'rendah', 'Bagus', 'Ya'),
(787, '46', 'oeu', 'Sertifikat Tanah', 'Modal Usaha', 'Usaha', 'sedang', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(788, '47', 'oeu', 'Kartu Pasar', 'Pembiayaan', 'Usaha', 'sedang', 'tinggi', 'Beli Barang', '11minggu', 'sedang', 'Bagus', 'Ya'),
(789, '48', 'oeu', 'Sertifikat Tanah', 'Pendidikan', 'Usaha', 'rendah', 'sangat tinggi', 'Pendidikan', '12 bulan', 'lebih', 'Bagus', 'Ya'),
(790, '49', 'oeu', 'BPKB Mobil', 'Pendidikan', 'Non Usaha', 'rendah', 'tinggi', 'Pendidikan', '12 bulan', 'sedang', 'Bagus', 'Ya'),
(791, '50', 'oeu', 'BPKB Mobil', 'Modal Usaha', 'Non Usaha', 'rendah', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'sedang', 'Bagus', 'Ya'),
(792, '51', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'rendah', 'lebih tinggi', 'Tambah Modal', '11minggu', 'rendah', 'Bagus', 'Ya'),
(793, '52', 'oeu', 'Sertifikat Tanah', 'Modal Usaha', 'Usaha', 'sedang', 'tinggi', 'Tambah Modal', '12 bulan', 'sangat tinggi', 'Bagus', 'Ya'),
(794, '53', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Non Usaha', 'rendah', 'sangat tinggi', 'Tambah Modal', '12bulan', 'sedang', 'Bagus', 'Ya'),
(795, '54', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'sedang', 'tinggi', 'Tambah Modal', '11minggu', 'sedang', 'Bagus', 'Ya'),
(796, '55', 'oeu', 'Barang Berharga', 'Pembiayaan', 'Non Usaha', 'lebih', 'rendah', 'Beli Barang', '11minggu', 'rendah', 'Bagus', 'Ya'),
(797, '56', 'oeu', 'Sertifikat Tanah', 'Pembiayaan', 'Usaha', 'sedang', 'kurang tinggi', 'Beli Barang', '11minggu', 'sangat rendah', 'Bagus', 'Ya'),
(798, '57', 'oeu', 'Sertifikat Tanah', 'Pembiayaan', 'Usaha', 'sedang', 'rendah', 'Beli Barang', '11minggu', 'sangat rendah', 'Bagus', 'Ya'),
(799, '58', 'oeu', 'Barang Berharga', 'Pendidikan', 'Non Usaha', 'sedang', 'kurang tinggi', 'Pendidikan', '12 bulan', 'sangat tinggi', 'Bagus', 'Ya'),
(800, '59', 'oeu', 'Kartu Pasar', 'Pendidikan', 'Usaha', 'rendah', 'sangat tinggi', 'Pendidikan', '12 bulan', 'sedang', 'Bagus', 'Ya'),
(801, '60', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Non Usaha', 'sangat rendah', 'tinggi', 'Beli Barang', '11minggu', 'lebih', 'Bagus', 'Ya'),
(802, '61', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Non Usaha', 'lebih', 'sedang', 'Beli Barang', '11minggu', 'rendah', 'Bagus', 'Ya'),
(803, '62', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'tinggi', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(804, '63', 'oeu', 'Barang Berharga', 'Pembiayaan', 'Usaha', 'rendah', 'lebih tinggi', 'Beli Barang', '11minggu', 'lebih', 'Bagus', 'Ya'),
(805, '64', 'oeu', 'BPKB Mobil', 'Pembiayaan', 'Usaha', 'rendah', 'kurang tinggi', 'Tambah Modal', '12 bulan', 'sangat tinggi', 'Bagus', 'Ya'),
(806, '65', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'rendah', 'sangat tinggi', 'Tambah Modal', '11minggu', 'sangat tinggi', 'Bagus', 'Ya'),
(807, '66', 'oeu', 'BPKB Mobil', 'Modal Usaha', 'Usaha', 'tinggi', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'sangat tinggi', 'Bagus', 'Ya'),
(808, '67', 'oeu', 'Sertifikat Tanah', 'Modal Usaha', 'Usaha', 'rendah', 'tinggi', 'Tambah Modal', '12 bulan', 'lebih tinggi', 'Bagus', 'Ya'),
(809, '68', 'oeu', 'BPKB Mobil', 'Pembiayaan', 'Usaha', 'sangat rendah', 'rendah', 'Beli Barang', '11minggu', 'lebih', 'Bagus', 'Ya'),
(810, '69', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'sangat rendah', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(811, '70', 'oeu', 'BPKB Motor', 'Pendidikan', 'Usaha', 'sangat rendah', 'tinggi', 'Pendidikan', '12 bulan', 'sangat rendah', 'Bagus', 'Ya'),
(812, '71', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'sedang', 'lebih', 'Beli Barang', '11minggu', 'lebih', 'Bagus', 'Ya'),
(813, '72', 'oeu', 'BPKB Mobil', 'Modal Usaha', 'Usaha', 'sedang', 'sedang', 'Tambah Modal', '11minggu', 'sedang', 'Bagus', 'Ya'),
(814, '73', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Usaha', 'sedang', 'sedang', 'Beli Barang', '11minggu', 'rendah', 'Bagus', 'Ya'),
(815, '74', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'lebih', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'lebih', 'Bagus', 'Ya'),
(816, '75', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Usaha', 'lebih', 'sedang', 'Beli Barang', '11minggu', 'rendah', 'Bagus', 'Ya'),
(817, '76', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'sedang', 'lebih tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(818, '77', 'oeu', 'Barang Berharga', 'Pembiayaan', 'Usaha', 'sedang', 'tinggi', 'Beli Barang', '11minggu', 'rendah', 'Bagus', 'Ya'),
(819, '78', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Usaha', 'sedang', 'rendah', 'Beli Barang', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(820, '79', 'oeu', 'Sertifikat Tanah', 'Pendidikan', 'Usaha', 'kurang tinggi', 'rendah', 'Pendidikan', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(821, '80', 'oeu', 'Setifikat Tanah', 'Pendidikan', 'Usaha', 'kurang tinggi', 'sedang', 'Pendidikan', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(822, '81', 'oeu', 'Kartu Pasar', 'Pendidikan', 'Usaha', 'sedang', 'sangat tinggi', 'Pendidikan', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(823, '82', 'oeu', 'Kartu Pasar', 'Modal Usaha', 'Usaha', 'kurang tinggi', 'lebih', 'Tambah Modal', '11minggu', 'rendah', 'Bagus', 'Ya'),
(824, '83', 'oeu', 'Serifikat Tanah', 'Pembiayaan', 'Usaha', 'sedang', 'tinggi', 'Beli Barang', '11minggu', 'tinggi', 'Bagus', 'Ya'),
(825, '84', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'rendah', 'tinggi', 'Tambah Modal', '12 bulan', 'sedang', 'Bagus', 'Ya'),
(826, '85', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'sedang', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(827, '86', 'oeu', 'Kartu Pasar', 'Modal Usaha', 'Usaha', 'sedang', 'tinggi', 'Tambah Modal', '11minggu', 'rendah', 'Bagus', 'Ya'),
(828, '87', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'lebih', 'tinggi', 'Pendidikan', '12 bulan', 'sedang', 'Bagus', 'Ya'),
(829, '88', 'oeu', 'Kartu Pasar', 'Modal Usaha', 'Usaha', 'rendah', 'sangat tinggi', 'Tambah Modal', '10 bulan', 'sedang', 'Bagus', 'Ya'),
(830, '89', 'oeu', 'Kartu Pasar', 'Pembiayaan', 'Usaha', 'lebih', 'sedang', 'Beli Barang', '12 bulan', 'lebih', 'Bagus', 'Ya'),
(831, '90', 'oeu', 'Sertifikat Tanah', 'Pembiayaan', 'Non Usaha', 'lebih', 'sangat tinggi', 'Beli Barang', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(832, '91', 'oeu', 'Sertifikat Tanah', 'Pendidikan', 'Non Usaha', 'lebih', 'kurang tinggi', 'Pendidikan', '24 bulan', 'lebih', 'Bagus', 'Ya'),
(833, '92', 'oeu', 'Sertifikat Tanah', 'Modal Usaha', 'Usaha', 'sedang', 'sedang', 'Tambah Modal', '10 bulan', 'lebih', 'Bagus', 'Ya'),
(834, '93', 'oeu', 'BPKB Motor', 'Pembiayaan', 'Usaha', 'rendah', 'lebih', 'Beli Barang', '11minggu', 'lebih', 'Bagus', 'Ya'),
(835, '94', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'lebih', 'sangat tinggi', 'Tambah Modal', '11minggu', 'lebih', 'Bagus', 'Ya'),
(836, '95', 'oeu', 'BPKB Motor', 'Modal Usaha', 'Usaha', 'sangat rendah', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(837, '96', 'oeu', 'Sertifikat Tanah', 'Pembiayaan', 'Usaha', 'sedang', 'sedang', 'Beli Barang', '11minggu', 'tinggi', 'Bagus', 'Ya'),
(838, '97', 'oeu', 'Sertifikat Tanah', 'Modal Usaha', 'Usaha', 'lebih', 'sangat tinggi', 'Tambah Modal', '12 bulan', 'kurang tinggi', 'Bagus', 'Ya'),
(839, '98', 'oeu', 'Barang Berharga', 'Modal Usaha', 'Usaha', 'rendah', 'lebih', 'Tambah Modal', '11minggu', 'sangat rendah', 'Bagus', 'Ya'),
(840, '99', 'oeu', 'Barang Berharaga', 'Modal Usaha', 'Usaha', 'sedang', 'rendah', 'Tambah modal', '11minggu', 'lebih', 'Bagus', 'Ya'),
(841, '100', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'lebih', 'rendah', 'Pendidikan', '11minggu', 'lebih', 'Bagus', 'Ya'),
(842, '101', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'rendah', 'sedang', 'Pendidikan', '12 bulan', 'sangat rendah', 'Bagus', 'Ya'),
(843, '102', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'sangat rendah', 'sedang', 'Pendidikan', '2 bulan', 'sangat rendah', 'Bagus', 'Ya'),
(844, '103', 'oeu', 'Barang Berharga', 'Modal Usaha', 'Usaha', 'sangat rendah', 'sangat rendah', 'Tambah Modal', '11minggu', 'sangat rendah', 'Bagus', 'Ya'),
(845, '104', 'oeu', 'Kartu Pasar', 'Modal Usaha', 'Usaha', 'kurang tinggi', 'sedang', 'Tambah Modal', '12 bulan', 'rendah', 'Bagus', 'Ya'),
(846, '105', 'oeu', 'Barang Berharga', 'Pendidikan', 'Usaha', 'tinggi', 'rendah', 'Pendidikan', '11minggu', 'rendah', 'Bagus', 'Ya'),
(847, '106', 'oeu', 'Kartu Pasar', 'Pembiayaan', 'Usaha', 'kurang tinggi', 'lebih', 'Beli barang', '11minggu', 'lebih', 'Bagus', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `data_prediksi`
--

CREATE TABLE IF NOT EXISTS `data_prediksi` (
  `id` int(10) NOT NULL,
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
  `tampil` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `rule_pohon_keputusan`
--

CREATE TABLE IF NOT EXISTS `rule_pohon_keputusan` (
  `id` int(10) NOT NULL,
  `id_parent` int(10) NOT NULL,
  `rule` varchar(200) NOT NULL,
  `variabel` varchar(50) DEFAULT NULL,
  `kelayakan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rule_pohon_keputusan`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `status_nasabah`
--

CREATE TABLE IF NOT EXISTS `status_nasabah` (
  `id` int(11) NOT NULL,
  `data_prediksi` int(11) NOT NULL DEFAULT '0',
  `keterangan` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tampil_pohon_keputusan`
--

CREATE TABLE IF NOT EXISTS `tampil_pohon_keputusan` (
  `id` int(11) NOT NULL,
  `variable` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `id_parent` int(11) DEFAULT '0',
  `id_tree` int(11) DEFAULT '0',
  `tidak` int(11) DEFAULT '0',
  `ya` int(11) DEFAULT '0',
  `kelayakan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tampil_pohon_keputusan`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `tampil_rule_prediksi`
--

CREATE TABLE IF NOT EXISTS `tampil_rule_prediksi` (
  `id` int(11) NOT NULL,
  `id_parent` int(11) DEFAULT '0',
  `variable` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `kelayakan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tampil_rule_prediksi`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `variabel`
--

CREATE TABLE IF NOT EXISTS `variabel` (
  `id` int(10) NOT NULL,
  `variabel` varchar(50) NOT NULL,
  `nilai_variabel` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variabel`
--

INSERT INTO `variabel` (`id`, `variabel`, `nilai_variabel`) VALUES
(32, 'Jaminan', 'Barang Berharga'),
(34, 'Jaminan', 'BPKB Mobil'),
(30, 'Jaminan', 'BPKB Motor'),
(31, 'Jaminan', 'Kartu Pasar'),
(33, 'Jaminan', 'Sertifikat Tanah'),
(35, 'Jaminan', 'Setifikat Tanah'),
(27, 'Jangka_Waktu', '10 bulan'),
(26, 'Jangka_Waktu', '11 minggu'),
(25, 'Jangka_Waktu', '12 bulan'),
(29, 'Jangka_Waktu', '2 bulan'),
(28, 'Jangka_Waktu', '24 bulan'),
(1, 'Jenis_Pembiayaan', 'Modal Usaha'),
(3, 'Jenis_Pembiayaan', 'Pembiayaan'),
(2, 'Jenis_Pembiayaan', 'Pendidikan'),
(20, 'Jumlah_Pembiayaan', 'kurang tinggi'),
(17, 'Jumlah_Pembiayaan', 'lebih'),
(18, 'Jumlah_Pembiayaan', 'lebih tinggi'),
(19, 'Jumlah_Pembiayaan', 'rendah'),
(21, 'Jumlah_Pembiayaan', 'sangat rendah'),
(15, 'Jumlah_Pembiayaan', 'sangat tinggi'),
(14, 'Jumlah_Pembiayaan', 'sedang'),
(16, 'Jumlah_Pembiayaan', 'tinggi'),
(13, 'Jumlah_Tanggungan', 'kurang tinggi'),
(9, 'Jumlah_Tanggungan', 'lebih'),
(8, 'Jumlah_Tanggungan', 'lebih tinggi'),
(6, 'Jumlah_Tanggungan', 'rendah'),
(7, 'Jumlah_Tanggungan', 'sangat rendah'),
(12, 'Jumlah_Tanggungan', 'sangat tinggi'),
(11, 'Jumlah_Tanggungan', 'sedang'),
(10, 'Jumlah_Tanggungan', 'tinggi'),
(46, 'Karakter', 'Bagus'),
(45, 'Karakter', 'Bermasalah'),
(24, 'Keperluan_Pembiayaan', 'Beli Barang'),
(23, 'Keperluan_Pembiayaan', 'Pendidikan'),
(22, 'Keperluan_Pembiayaan', 'Tambah Modal'),
(5, 'Pekerjaan', 'Non Usaha'),
(4, 'Pekerjaan', 'Usaha'),
(42, 'Total_Penghasilan', 'kurang tinggi'),
(37, 'Total_Penghasilan', 'lebih'),
(44, 'Total_Penghasilan', 'lebih tinggi'),
(38, 'Total_Penghasilan', 'rendah'),
(40, 'Total_Penghasilan', 'sangat rendah'),
(43, 'Total_Penghasilan', 'sangat tinggi'),
(39, 'Total_Penghasilan', 'sedang'),
(41, 'Total_Penghasilan', 'tinggi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_prediksi`
--
ALTER TABLE `data_prediksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule_pohon_keputusan`
--
ALTER TABLE `rule_pohon_keputusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_nasabah`
--
ALTER TABLE `status_nasabah`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `data_prediksi` (`data_prediksi`);

--
-- Indexes for table `tampil_pohon_keputusan`
--
ALTER TABLE `tampil_pohon_keputusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tampil_rule_prediksi`
--
ALTER TABLE `tampil_rule_prediksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variabel`
--
ALTER TABLE `variabel`
  ADD PRIMARY KEY (`id`), ADD KEY `variabel_nilai_variabel` (`variabel`,`nilai_variabel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=848;
--
-- AUTO_INCREMENT for table `data_prediksi`
--
ALTER TABLE `data_prediksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rule_pohon_keputusan`
--
ALTER TABLE `rule_pohon_keputusan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `status_nasabah`
--
ALTER TABLE `status_nasabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tampil_pohon_keputusan`
--
ALTER TABLE `tampil_pohon_keputusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tampil_rule_prediksi`
--
ALTER TABLE `tampil_rule_prediksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `variabel`
--
ALTER TABLE `variabel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `status_nasabah`
--
ALTER TABLE `status_nasabah`
ADD CONSTRAINT `FK__data_prediksi` FOREIGN KEY (`data_prediksi`) REFERENCES `data_prediksi` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
