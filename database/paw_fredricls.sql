-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jan 2019 pada 07.46
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw_fredricls`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL COMMENT 'PK id anggota',
  `nama` varchar(60) NOT NULL COMMENT 'nama lengkap',
  `alamat` varchar(75) NOT NULL COMMENT 'alamat',
  `jenis_kelamin` char(1) NOT NULL COMMENT 'jenis kelamin, L=Laki-laki, P=Perempuan',
  `tanggal_lahir` date NOT NULL COMMENT 'tanggal lahir',
  `agama_id` int(1) NOT NULL COMMENT 'agama 1=Islam, 2=Katolik, 3=Protestan, 4=Hindu, 5=Budha, 6=Lainnya',
  `pekerjaan_id` int(11) NOT NULL COMMENT 'relasi dengan tabel pekerjaan',
  `penghasilan_perbulan` int(11) NOT NULL COMMENT 'jumlah penghasilan perbulan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `agama_id`, `pekerjaan_id`, `penghasilan_perbulan`) VALUES
(1, 'Fredric Lesomar', 'Jl. Cerme, Sleman, Yogyakarta', 'L', '1945-02-02', 2, 3, 1200000),
(2, 'Febrio Angga', 'Kota Gede, Yogyakarta', 'L', '1986-02-04', 3, 1, 110000),
(3, 'Olliver Quin', 'Star City', 'L', '1983-07-14', 6, 1, 30000),
(4, 'Barry Alen', 'Central City', 'L', '1987-02-03', 6, 1, 15000000),
(5, 'Andi', 'Jl. Sukabumi no.3, Semarang', 'L', '2018-12-01', 1, 4, 800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran`
--

CREATE TABLE `angsuran` (
  `id` int(11) NOT NULL COMMENT 'id angsuran',
  `pinjaman_id` int(11) NOT NULL COMMENT 'id pinjaman',
  `anggota_id` int(11) NOT NULL COMMENT 'id anggota',
  `angsuran_ke` int(11) NOT NULL COMMENT 'angsuran ke',
  `besar_angsuran` int(11) NOT NULL COMMENT 'besar angsuran',
  `tanggal_jatuh_tempo` date NOT NULL COMMENT 'tanggal jatuh tempo',
  `tanggal_bayar` date NOT NULL COMMENT 'tanggal transaksi',
  `status_bayar` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'status bayar 0=belum bayar, 1=sudah bayar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `angsuran`
--

INSERT INTO `angsuran` (`id`, `pinjaman_id`, `anggota_id`, `angsuran_ke`, `besar_angsuran`, `tanggal_jatuh_tempo`, `tanggal_bayar`, `status_bayar`) VALUES
(11, 2, 2, 1, 550000, '2017-11-20', '2017-11-21', 1),
(12, 2, 2, 2, 550000, '2017-12-20', '2017-11-21', 1),
(13, 2, 2, 3, 550000, '2018-01-20', '2017-11-21', 1),
(14, 2, 2, 4, 550000, '2018-02-20', '2017-11-21', 1),
(15, 2, 2, 5, 550000, '2018-03-20', '0000-00-00', 0),
(16, 2, 2, 6, 550000, '2018-04-20', '0000-00-00', 0),
(17, 2, 2, 7, 550000, '2018-05-20', '0000-00-00', 0),
(18, 2, 2, 8, 550000, '2018-06-20', '0000-00-00', 0),
(19, 2, 2, 9, 550000, '2018-07-20', '0000-00-00', 0),
(20, 2, 2, 10, 550000, '2018-08-20', '0000-00-00', 0),
(21, 2, 2, 11, 550000, '2018-09-20', '0000-00-00', 0),
(22, 2, 2, 12, 550000, '2018-10-20', '0000-00-00', 0),
(23, 2, 2, 13, 550000, '2018-11-20', '0000-00-00', 0),
(24, 2, 2, 14, 550000, '2018-12-20', '0000-00-00', 0),
(25, 2, 2, 15, 550000, '2019-01-20', '0000-00-00', 0),
(26, 2, 2, 16, 550000, '2019-02-20', '0000-00-00', 0),
(27, 2, 2, 17, 550000, '2019-03-20', '0000-00-00', 0),
(28, 2, 2, 18, 550000, '2019-04-20', '0000-00-00', 0),
(29, 2, 2, 19, 550000, '2019-05-20', '0000-00-00', 0),
(30, 2, 2, 20, 550000, '2019-06-20', '0000-00-00', 0),
(31, 1, 1, 1, 55000, '2017-11-25', '2017-11-21', 1),
(32, 1, 1, 2, 55000, '2017-12-25', '2017-11-21', 1),
(33, 1, 1, 3, 55000, '2018-01-25', '2017-11-21', 1),
(34, 1, 1, 4, 55000, '2018-02-25', '2017-11-21', 1),
(35, 1, 1, 5, 55000, '2018-03-25', '2018-10-15', 1),
(36, 1, 1, 6, 55000, '2018-04-25', '2018-10-15', 1),
(37, 1, 1, 7, 55000, '2018-05-25', '0000-00-00', 0),
(38, 1, 1, 8, 55000, '2018-06-25', '0000-00-00', 0),
(39, 1, 1, 9, 55000, '2018-07-25', '0000-00-00', 0),
(40, 1, 1, 10, 55000, '2018-08-25', '0000-00-00', 0),
(41, 1, 1, 11, 55000, '2018-09-25', '0000-00-00', 0),
(42, 1, 1, 12, 55000, '2018-10-25', '0000-00-00', 0),
(43, 1, 1, 13, 55000, '2018-11-25', '0000-00-00', 0),
(44, 1, 1, 14, 55000, '2018-12-25', '0000-00-00', 0),
(45, 1, 1, 15, 55000, '2019-01-25', '0000-00-00', 0),
(46, 1, 1, 16, 55000, '2019-02-25', '0000-00-00', 0),
(47, 1, 1, 17, 55000, '2019-03-25', '0000-00-00', 0),
(48, 1, 1, 18, 55000, '2019-04-25', '0000-00-00', 0),
(49, 1, 1, 19, 55000, '2019-05-25', '0000-00-00', 0),
(50, 1, 1, 20, 55000, '2019-06-25', '0000-00-00', 0),
(51, 3, 3, 1, 0, '2019-01-18', '2018-10-15', 1),
(52, 3, 3, 2, 0, '2019-02-18', '2018-12-03', 1),
(53, 3, 3, 3, 0, '2019-03-18', '0000-00-00', 0),
(54, 4, 4, 1, 525000, '2018-12-14', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pinjaman`
--

CREATE TABLE `jenis_pinjaman` (
  `id` int(10) NOT NULL COMMENT 'id pinjaman',
  `jenis_pinjaman` varchar(30) NOT NULL COMMENT 'jenis pinjaman',
  `bunga` decimal(5,2) NOT NULL COMMENT 'bunga %'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pinjaman`
--

INSERT INTO `jenis_pinjaman` (`id`, `jenis_pinjaman`, `bunga`) VALUES
(1, 'Jangka Panjang', '10.50'),
(2, 'Jangka Pendek', '5.50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_kota` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`) VALUES
(1, 1, 'Sleman'),
(2, 1, 'Kodya Yogyakarta'),
(3, 2, 'Klaten'),
(4, 3, 'Bandung'),
(5, 4, 'Pacitan'),
(6, 4, 'Ngawi'),
(7, 3, 'Cirebon'),
(8, 2, 'Surakarta'),
(13, 3, 'Jepara'),
(14, 4, 'Madiun'),
(15, 1, 'Bantul'),
(16, 5, 'Jayapura'),
(17, 5, 'Biak'),
(18, 6, 'Manokwari'),
(19, 2, 'Semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Wiraswasta'),
(2, 'Pedagang'),
(3, 'PNS'),
(4, 'Petani'),
(5, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `jenis_pinjaman_id` int(11) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `diangsur_kali` int(11) NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `pokok_dibayar` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id`, `anggota_id`, `jenis_pinjaman_id`, `besar_pinjaman`, `diangsur_kali`, `tanggal_jatuh_tempo`, `pokok_dibayar`, `tanggal`) VALUES
(1, 1, 1, 1000000, 20, '2017-10-25', 1100000, '2017-10-24'),
(2, 2, 1, 10000000, 20, '2017-10-20', 11000000, '2017-10-17'),
(3, 3, 2, 50000000, 3, '2018-12-18', 52500000, '2018-10-15'),
(4, 4, 2, 500000, 1, '2018-11-14', 525000, '2018-10-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Daerah Istimewa Yogyakarta'),
(2, 'Jawa Tengah'),
(3, 'Jawa Barat'),
(4, 'Jawa Timur'),
(5, 'Papua'),
(6, 'Papua Barat'),
(7, 'Sulawesi Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` char(50) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `password`, `email`, `active`) VALUES
(1, 'Fredric Lesomar', 'fredricls', 'f856859fe5692323273a81b4ba260576', 'Fredriclesomar.id@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_anggota` (`pekerjaan_id`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_angsuran` (`pinjaman_id`),
  ADD KEY `FK_angsuran2` (`anggota_id`);

--
-- Indexes for table `jenis_pinjaman`
--
ALTER TABLE `jenis_pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `FK_kota` (`id_provinsi`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pinjaman` (`anggota_id`),
  ADD KEY `FK_pinjaman2` (`jenis_pinjaman_id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK id anggota', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id angsuran', AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `jenis_pinjaman`
--
ALTER TABLE `jenis_pinjaman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id pinjaman', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `FK_anggota` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  ADD CONSTRAINT `FK_angsuran` FOREIGN KEY (`pinjaman_id`) REFERENCES `pinjaman` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_angsuran2` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `FK_kota` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `FK_pinjaman` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pinjaman2` FOREIGN KEY (`jenis_pinjaman_id`) REFERENCES `jenis_pinjaman` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
