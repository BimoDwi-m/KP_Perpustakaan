-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2020 pada 04.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nia` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nia`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `jenis`) VALUES
(1, '13213', 'bimo', '', 'lumajang', '2020-01-13', 'siswa'),
(2, '1111', 'alinda', 'perempuan', 'lumajang', '2009-08-11', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` varchar(50) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengembalian`
--

CREATE TABLE `tbl_pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` varchar(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(15) NOT NULL,
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
  `best` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun`, `halaman`, `id_kategori`, `lokasi`, `sinopsis`, `id_lokasi`, `stok`, `cover`, `rating`, `best`) VALUES
(28, 'Pendidikan Agama Islam | Kelas VIIa', 'Drs. Soepardjo, S.Ag. | Drs. N', 'KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN', 2005, 250, 1, 'Novel', '&lt;p&gt;aaaaaaaaaa&lt;/p&gt;', 0, 5, 'bse-a_597972cbc19ab462804168.jpg', 4, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(15) NOT NULL,
  `judul_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `judul_kategori`) VALUES
(1, 'Buku Referensi'),
(22, 'Novel'),
(23, 'Al-Qur\'an'),
(24, 'Agama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(15) NOT NULL,
  `id_buku` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi_komentar` text NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT 0,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_buku`, `nama`, `isi_komentar`, `hapus`, `tgl`) VALUES
(1, 1, 'Rino Ridlo Julianto', 'Wah, bukunya bagus sekali. Ceritanya menarik, berkaitan dengan sejarah yang dibumbui dengan cerita fiksi', 0, '2017-06-20 08:51:00'),
(4, 6, 'Rino Ridlo Julianto', 'Cerintanya bagus, namun banyak hal yang susah dicerna karena sudut pandang novel yang tidak biasa', 0, '2017-06-20 05:41:02'),
(5, 1, 'Renanda Yudha Prasetya', 'Lumayan sih novelnya, tapi sayang yang tidak mengikuti franchise Assasins Creed sebelumnya pasti kesulitan mengikuti alurnya.', 0, '2017-06-20 05:42:23'),
(6, 1, 'Yulia Atika Rahmawati', 'Bagus bukunya, saya penggemar sejak lama serial Assassin\'s Creed baik game maupun novelnya', 0, '2017-06-20 10:46:10'),
(7, 4, 'Gina Kriwul', 'Komentar ndaaaaa', 1, '2017-06-20 12:22:30'),
(8, 4, 'Rino Ridlo Julianto', 'Salah satu karya epic J.R.R Tolkien lagi nih. Sudah baca, dan ceritanya super keren banget.', 0, '2017-06-20 12:33:47'),
(9, 5, 'Dera Diah Y', 'Wah, yang dinanti-nanti akhirnya keluar', 0, '2017-06-20 12:38:31'),
(10, 6, 'Anonymous', 'Bacanya bikin pusing gan -_-\"', 1, '2017-06-20 12:49:57'),
(11, 4, 'atong', 'mantap', 1, '2017-06-20 12:57:08'),
(12, 1, 'Desmond Miles', 'Ane dah mainin game yang versi ini gan, tapi setelah baca novelnya ternyata lumayan banyak detail cerita yang dikurangi di game-nya :\'D', 0, '2017-06-20 02:03:03'),
(13, 1, 'Arno Dorian', 'Novel ini ceritanya mantap dah.', 0, '2017-06-20 02:05:17'),
(14, 2, 'Raja Shaman', 'Akhirnya komik yang ditunggu-tunggu keluar juga.', 0, '2017-06-20 14:09:07'),
(15, 14, 'Rino Ridlo Julianto', 'Bukunya bagus, isinya inspiratif sekali. Alur ceritanya tersusun sangat baik hingga pembaca ikut terbawa suasana.', 0, '2017-06-22 13:30:23'),
(16, 14, 'Tere Liye Fans', 'Satu lagi karya master piece dari tere liye', 0, '2017-06-22 13:31:13'),
(17, 1, 'Bot', '<p><strong>Wow&nbsp;</strong>bagus sekali</p>', 1, '2017-06-22 13:45:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(15) NOT NULL,
  `nama_lokasi` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'Siswa'),
(2, 'Guru'),
(3, 'sdfdsf'),
(4, 'Buku Paket'),
(5, 'Wisata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id_slide` int(15) NOT NULL,
  `judul_slide` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_slide`
--

INSERT INTO `tb_slide` (`id_slide`, `judul_slide`, `keterangan`, `gambar`, `urutan`) VALUES
(2, 'Tasawuf Modern', 'Serial tasawuf modern karya penulis Agus Mustofa', 'slide.jpg', 4),
(3, 'Buku Gudang Ilmu', 'Buku adalah gudang ilmu, maka dari itu banyak-banyaklah membaca buku untuk membuka wawasan.', 'o-BOOKS-facebook.jpg', 3),
(4, 'Ramadhan Kareem', 'Selamat menunaikan ibadah puasa', 'Ramadan-Mubarak-Cover.jpg', 2),
(5, 'Selamat Hari Lebaran', 'Minal \'aidzin wal faidzin. Mohon maaf lahir dan batin. Selamat hari lebaran 1438H', 'idul-fitri-mubarak-greetings.jpg', 1),
(7, 'Koleksi Kasus Sherlock Holmes', 'Dapatkan buku koleksi kasus yang berhasil dipecahkan oleh sherlock holmes di toko kami', 're_banner_picture_17.jpg', 5),
(8, 'Mutiara Akhlak dalam Pendidika', 'asda', 'perpus1.jpg', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` enum('admin','member') NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `email`, `level`, `avatar`) VALUES
(1, 'admin utama', 'admin', 'admin', '29assd@yahoo.com', 'admin', ''),
(4, 'Admin Bookstore', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'rinoridlojulianto@gmail.com', 'admin', ''),
(10, 'Bimo', 'BimoD', '12345678', '29online@gmail.com', 'member', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `id_slide` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
