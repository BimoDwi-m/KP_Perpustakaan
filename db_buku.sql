-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.7-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_buku.tbl_anggota
CREATE TABLE IF NOT EXISTS `tbl_anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nia` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_buku.tbl_anggota: ~2 rows (approximately)
DELETE FROM `tbl_anggota`;
/*!40000 ALTER TABLE `tbl_anggota` DISABLE KEYS */;
INSERT INTO `tbl_anggota` (`id_anggota`, `nia`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `jenis`) VALUES
	(1, '13213', 'bimo', '', 'lumajang', '2020-01-13', 'siswa'),
	(2, '1111', 'alinda', 'perempuan', 'lumajang', '2009-08-11', 'guru');
/*!40000 ALTER TABLE `tbl_anggota` ENABLE KEYS */;

-- Dumping structure for table db_buku.tbl_peminjaman
CREATE TABLE IF NOT EXISTS `tbl_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` varchar(50) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_buku.tbl_peminjaman: ~0 rows (approximately)
DELETE FROM `tbl_peminjaman`;
/*!40000 ALTER TABLE `tbl_peminjaman` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_peminjaman` ENABLE KEYS */;

-- Dumping structure for table db_buku.tbl_pengembalian
CREATE TABLE IF NOT EXISTS `tbl_pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` varchar(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  PRIMARY KEY (`id_pengembalian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_buku.tbl_pengembalian: ~0 rows (approximately)
DELETE FROM `tbl_pengembalian`;
/*!40000 ALTER TABLE `tbl_pengembalian` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pengembalian` ENABLE KEYS */;

-- Dumping structure for table db_buku.tb_buku
CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id_buku` int(15) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahun` int(15) NOT NULL,
  `halaman` int(4) NOT NULL,
  `id_kategori` int(15) NOT NULL,
  `lokasi` enum('Novel','Majalah','Referensi','Cerita Anak','Al-Qur''an','Pertanian','Masakan','Teknologi','Peternakan','Olahraga','Kesenian','Bahasa','Motivasi') NOT NULL,
  `sinopsis` text NOT NULL,
  `id_lokasi` int(50) NOT NULL,
  `stok` int(15) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL DEFAULT 0,
  `best` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table db_buku.tb_buku: ~0 rows (approximately)
DELETE FROM `tb_buku`;
/*!40000 ALTER TABLE `tb_buku` DISABLE KEYS */;
INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun`, `halaman`, `id_kategori`, `lokasi`, `sinopsis`, `id_lokasi`, `stok`, `cover`, `rating`, `best`) VALUES
	(28, 'Pendidikan Agama Islam | Kelas VIIa', 'Drs. Soepardjo, S.Ag. | Drs. N', 'KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN', 2005, 250, 1, 'Novel', '&lt;p&gt;aaaaaaaaaa&lt;/p&gt;', 0, 5, 'bse-a_597972cbc19ab462804168.jpg', 4, '1');
/*!40000 ALTER TABLE `tb_buku` ENABLE KEYS */;

-- Dumping structure for table db_buku.tb_kategori
CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(15) NOT NULL AUTO_INCREMENT,
  `judul_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table db_buku.tb_kategori: ~4 rows (approximately)
DELETE FROM `tb_kategori`;
/*!40000 ALTER TABLE `tb_kategori` DISABLE KEYS */;
INSERT INTO `tb_kategori` (`id_kategori`, `judul_kategori`) VALUES
	(1, 'Buku Referensi'),
	(22, 'Novel'),
	(23, 'Al-Qur\'an'),
	(24, 'Agama');
/*!40000 ALTER TABLE `tb_kategori` ENABLE KEYS */;

-- Dumping structure for table db_buku.tb_komentar
CREATE TABLE IF NOT EXISTS `tb_komentar` (
  `id_komentar` int(15) NOT NULL AUTO_INCREMENT,
  `id_buku` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi_komentar` text NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT 0,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table db_buku.tb_komentar: ~15 rows (approximately)
DELETE FROM `tb_komentar`;
/*!40000 ALTER TABLE `tb_komentar` DISABLE KEYS */;
INSERT INTO `tb_komentar` (`id_komentar`, `id_buku`, `nama`, `isi_komentar`, `hapus`, `tgl`) VALUES
	(1, 1, 'Rino Ridlo Julianto', 'Wah, bukunya bagus sekali. Ceritanya menarik, berkaitan dengan sejarah yang dibumbui dengan cerita fiksi', 0, '2017-06-20 08:51:00'),
	(4, 6, 'Rino Ridlo Julianto', 'Cerintanya bagus, namun banyak hal yang susah dicerna karena sudut pandang novel yang tidak biasa', 0, '2017-06-20 05:41:02'),
	(5, 1, 'Renanda Yudha Prasetya', 'Lumayan sih novelnya, tapi sayang yang tidak mengikuti franchise Assasins Creed sebelumnya pasti kesulitan mengikuti alurnya.', 0, '2017-06-20 05:42:23'),
	(6, 1, 'Yulia Atika Rahmawati', 'Bagus bukunya, saya penggemar sejak lama serial Assassin\'s Creed baik game maupun novelnya', 0, '2017-06-20 10:46:10'),
	(7, 4, 'Gina Kriwul', 'Komentar ndaaaaa', 1, '2017-06-20 12:22:30'),
	(8, 4, 'Rino Ridlo Julianto', 'Salah satu karya epic J.R.R Tolkien lagi nih. Sudah baca, dan ceritanya super keren banget.', 0, '2017-06-20 12:33:47'),
	(9, 5, 'Dera Diah Y', 'Wah, yang dinanti-nanti akhirnya keluar', 0, '2017-06-20 12:38:31'),
	(10, 6, 'Anonymous', 'Bacanya bikin pusing gan -_-"', 1, '2017-06-20 12:49:57'),
	(11, 4, 'atong', 'mantap', 1, '2017-06-20 12:57:08'),
	(12, 1, 'Desmond Miles', 'Ane dah mainin game yang versi ini gan, tapi setelah baca novelnya ternyata lumayan banyak detail cerita yang dikurangi di game-nya :\'D', 0, '2017-06-20 02:03:03'),
	(13, 1, 'Arno Dorian', 'Novel ini ceritanya mantap dah.', 0, '2017-06-20 02:05:17'),
	(14, 2, 'Raja Shaman', 'Akhirnya komik yang ditunggu-tunggu keluar juga.', 0, '2017-06-20 14:09:07'),
	(15, 14, 'Rino Ridlo Julianto', 'Bukunya bagus, isinya inspiratif sekali. Alur ceritanya tersusun sangat baik hingga pembaca ikut terbawa suasana.', 0, '2017-06-22 13:30:23'),
	(16, 14, 'Tere Liye Fans', 'Satu lagi karya master piece dari tere liye', 0, '2017-06-22 13:31:13'),
	(17, 1, 'Bot', '<p><strong>Wow&nbsp;</strong>bagus sekali</p>', 1, '2017-06-22 13:45:08');
/*!40000 ALTER TABLE `tb_komentar` ENABLE KEYS */;

-- Dumping structure for table db_buku.tb_lokasi
CREATE TABLE IF NOT EXISTS `tb_lokasi` (
  `id_lokasi` int(15) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_buku.tb_lokasi: ~5 rows (approximately)
DELETE FROM `tb_lokasi`;
/*!40000 ALTER TABLE `tb_lokasi` DISABLE KEYS */;
INSERT INTO `tb_lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
	(1, 'Siswa'),
	(2, 'Guru'),
	(3, 'sdfdsf'),
	(4, 'Buku Paket'),
	(5, 'Wisata');
/*!40000 ALTER TABLE `tb_lokasi` ENABLE KEYS */;

-- Dumping structure for table db_buku.tb_slide
CREATE TABLE IF NOT EXISTS `tb_slide` (
  `id_slide` int(15) NOT NULL AUTO_INCREMENT,
  `judul_slide` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `urutan` int(11) NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_buku.tb_slide: ~6 rows (approximately)
DELETE FROM `tb_slide`;
/*!40000 ALTER TABLE `tb_slide` DISABLE KEYS */;
INSERT INTO `tb_slide` (`id_slide`, `judul_slide`, `keterangan`, `gambar`, `urutan`) VALUES
	(2, 'Tasawuf Modern', 'Serial tasawuf modern karya penulis Agus Mustofa', 'slide.jpg', 4),
	(3, 'Buku Gudang Ilmu', 'Buku adalah gudang ilmu, maka dari itu banyak-banyaklah membaca buku untuk membuka wawasan.', 'o-BOOKS-facebook.jpg', 3),
	(4, 'Ramadhan Kareem', 'Selamat menunaikan ibadah puasa', 'Ramadan-Mubarak-Cover.jpg', 2),
	(5, 'Selamat Hari Lebaran', 'Minal \'aidzin wal faidzin. Mohon maaf lahir dan batin. Selamat hari lebaran 1438H', 'idul-fitri-mubarak-greetings.jpg', 1),
	(7, 'Koleksi Kasus Sherlock Holmes', 'Dapatkan buku koleksi kasus yang berhasil dipecahkan oleh sherlock holmes di toko kami', 're_banner_picture_17.jpg', 5),
	(8, 'Mutiara Akhlak dalam Pendidika', 'asda', 'perpus1.jpg', 6);
/*!40000 ALTER TABLE `tb_slide` ENABLE KEYS */;

-- Dumping structure for table db_buku.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(60) DEFAULT NULL,
  `otp` char(6) DEFAULT NULL,
  `role` enum('admin','member') NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table db_buku.tb_user: ~2 rows (approximately)
DELETE FROM `tb_user`;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `email`, `password`, `otp`, `role`, `avatar`) VALUES
	(1, 'admin utama', 'admin', '29assd@yahoo.com', '$2y$10$L8.VwZbHVfI.oUexUtgAeOK0THsEaSu7hkqS3MN8HCVAWcwxCui8a', '', 'admin', ''),
	(10, 'Bimo', 'bimo', '29online@gmail.com', 'bimo', '', 'member', '');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
