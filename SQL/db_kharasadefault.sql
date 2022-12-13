-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 04:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kharasadefault`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `nilai_booking` int(11) NOT NULL,
  `bukti_booking` varchar(255) NOT NULL,
  `status_booking` enum('belum dikonfirmasi','sudah dikonfirmasi','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_kamar`, `id_pengguna`, `tanggal_booking`, `nilai_booking`, `bukti_booking`, `status_booking`) VALUES
(1, 1, 2, '2022-08-07', 1200000, '77bba9c8784001580b274611be150ee2.jpg', 'sudah dikonfirmasi'),
(3, 2, 3, '2022-08-08', 800000, 'ec7c1b5248d6704a361cee880d095bd7.jpg', 'sudah dikonfirmasi'),
(4, 3, 4, '2022-09-07', 1000000, '4776e3a4beff1031c84c474293eb4efd.jpg', 'sudah dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_akses` int(1) NOT NULL,
  `nama_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_akses`, `nama_akses`) VALUES
(1, 'Admin'),
(2, 'Penghuni'),
(3, 'Calon Penghuni'),
(4, 'Nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `info_kost`
--

CREATE TABLE `info_kost` (
  `id_kost` int(11) NOT NULL,
  `jenis_kost` enum('Kost Putra','Kost Putri','Kontrakan') NOT NULL,
  `nama_kost` varchar(255) NOT NULL,
  `alamat_kost` varchar(255) NOT NULL,
  `provinsi_kost` varchar(255) NOT NULL,
  `kota_kost` varchar(255) NOT NULL,
  `no_kost` varchar(255) NOT NULL,
  `email_kost` varchar(255) NOT NULL,
  `logo_kost` varchar(255) NOT NULL,
  `foto_kost` varchar(255) NOT NULL,
  `deskripsi_kost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_kost`
--

INSERT INTO `info_kost` (`id_kost`, `jenis_kost`, `nama_kost`, `alamat_kost`, `provinsi_kost`, `kota_kost`, `no_kost`, `email_kost`, `logo_kost`, `foto_kost`, `deskripsi_kost`) VALUES
(1, 'Kontrakan', 'Kharasa House', 'KP. BABAKAN CIMAHPAR (PURI BABAKAN SAKINAH) NO.26, RT 04 RW 09, CIMAHPAR, KOTA BOGOR UTARA, KOTA BOGOR, 16155', 'Jawa Barat', 'Bogor', '087777769016', 'kharasahouse@gmail.com', '', '5e1a933f6a2c9.jpeg', 'Rumah Kontrakan yang nyaman, aman, dan bersih. Lokasi yang strategis, dengan fasilitas lengkap dan harga terjangkau. Cocok untuk mahasiswa, perantau maupun pasutri.');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengeluaran`
--

CREATE TABLE `jenis_pengeluaran` (
  `id_jenis_pengeluaran` int(11) NOT NULL,
  `kode_pengeluaran` varchar(255) NOT NULL,
  `kategori_pengeluaran` enum('Biaya Operasional','Biaya Pemeliharaan','Biaya Makanan','Biaya Marketing','Biaya Lainnya','Pajak') NOT NULL,
  `nama_pengeluaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pengeluaran`
--

INSERT INTO `jenis_pengeluaran` (`id_jenis_pengeluaran`, `kode_pengeluaran`, `kategori_pengeluaran`, `nama_pengeluaran`) VALUES
(1, 'P0001', 'Pajak', 'Pajak Bumi dan Bangunan'),
(2, 'P0002', 'Biaya Operasional', 'Listrik (PLN)'),
(3, 'P0003', 'Biaya Operasional', 'Air (PDAM)'),
(4, 'P0004', 'Biaya Pemeliharaan', 'Kebersihan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_status_pembayaran`
--

CREATE TABLE `jenis_status_pembayaran` (
  `id_status` int(11) NOT NULL,
  `nama_status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_status_pembayaran`
--

INSERT INTO `jenis_status_pembayaran` (`id_status`, `nama_status_pembayaran`) VALUES
(1, 'sudah dikonfirmasi'),
(2, 'belum dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomor_kamar` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `luas_kamar` varchar(255) NOT NULL,
  `lantai_kamar` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `kapasitas_kamar` int(11) NOT NULL,
  `deskripsi_kamar` varchar(255) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `harga_harian` double DEFAULT NULL,
  `harga_mingguan` double DEFAULT NULL,
  `harga_bulanan` double NOT NULL,
  `harga_tahunan` double NOT NULL,
  `denda` double NOT NULL,
  `foto_kamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nomor_kamar`, `id_tipe`, `luas_kamar`, `lantai_kamar`, `kapasitas_kamar`, `deskripsi_kamar`, `id_layanan`, `harga_harian`, `harga_mingguan`, `harga_bulanan`, `harga_tahunan`, `denda`, `foto_kamar`) VALUES
(1, 1, 2, '72 m²', '1', 5, '2 kamar, kamar mandi dalam (kloset jongkok), ruang makan, dapur, ruang tamu, dan parkiran', 1, NULL, NULL, 1200000, 12000000, 100000, '5e166d07c1269.jpg'),
(2, 2, 1, '4x4 m', '1', 2, '1 kamar, kamar mandi dalam (kloset jongkok) dan dapur', 1, NULL, NULL, 800000, 8000000, 50000, '3ebac18627eb64c0d701a19ecaaa0b55.jpg'),
(3, 3, 2, '3x7 m', '2', 2, '1 kamar, kamar mandi dalam (kloset jongkok), ruang santai, dapur, balkon, dan parkiran', 1, NULL, NULL, 1000000, 10000000, 100000, '5e166d36598d9.jpg'),
(4, 4, 1, '4x4 m', '1', 2, '1 kamar dan kamar mandi dalam (kloset jongkok)', 1, NULL, NULL, 500000, 5000000, 50000, '5e166d4179726.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `id_komplain` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `tanggal_komplain` date NOT NULL,
  `perihal` varchar(256) NOT NULL,
  `isi` varchar(256) NOT NULL,
  `status_komplain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `harga_bulanan` double NOT NULL,
  `harga_tahunan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `harga_bulanan`, `harga_tahunan`) VALUES
(1, 'Tidak Ada Layanan', 0, 0),
(2, 'Laundry', 30000, 330000),
(3, 'Setrika', 20000, 220000);

-- --------------------------------------------------------

--
-- Table structure for table `menghuni`
--

CREATE TABLE `menghuni` (
  `id_menghuni` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menghuni`
--

INSERT INTO `menghuni` (`id_menghuni`, `id_kamar`, `id_pengguna`, `tanggal_masuk`, `tanggal_keluar`) VALUES
(1, 1, 2, '2022-08-07', '0000-00-00'),
(2, 2, 3, '2022-08-08', '0000-00-00'),
(3, 3, 4, '2022-09-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_menghuni` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `nilai_pembayaran` double NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_menghuni`, `tanggal_pembayaran`, `nilai_pembayaran`, `bukti_pembayaran`, `keterangan`, `id_status`) VALUES
(1, 1, '2022-08-07', 1200000, '77bba9c8784001580b274611be150ee2.jpg', 'Pembayaran booking kamar no.1 tanggal: 2022-08-07', 1),
(2, 2, '2022-08-08', 800000, 'ec7c1b5248d6704a361cee880d095bd7.jpg', 'Pembayaran booking kamar no.2 tanggal: 2022-08-08', 1),
(3, 3, '2022-09-07', 1000000, '4776e3a4beff1031c84c474293eb4efd.jpg', 'Pembayaran booking kamar no.3 tanggal: 2022-09-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `id_jenis_pengeluaran` int(11) NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `nilai_pengeluaran` double NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `bukti_pengeluaran` varchar(255) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `alamat_pengguna` varchar(255) DEFAULT NULL,
  `provinsi_pengguna` varchar(255) DEFAULT NULL,
  `kota_pengguna` varchar(255) DEFAULT NULL,
  `telepon_pengguna` varchar(32) NOT NULL,
  `email_pengguna` varchar(255) NOT NULL,
  `kelamin_pengguna` enum('Pria','Wanita') DEFAULT NULL,
  `tanggal_lahir_pengguna` date DEFAULT NULL,
  `no_ktp_pengguna` varchar(32) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id_akses` int(1) NOT NULL,
  `foto_pengguna` varchar(255) DEFAULT NULL,
  `time_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `alamat_pengguna`, `provinsi_pengguna`, `kota_pengguna`, `telepon_pengguna`, `email_pengguna`, `kelamin_pengguna`, `tanggal_lahir_pengguna`, `no_ktp_pengguna`, `password`, `id_akses`, `foto_pengguna`, `time_created`) VALUES
(1, 'admin', 'Kp. Babakan Cimahpar', 'Jawa Barat', 'Bogor', '087777769016', 'admin@gmail.com', 'Pria', '2000-07-30', '3271053007000006', '$2y$10$uNePkUVflznvUM9/hdNVcO1W6OavFN7Uzu18JtOWYRTq3Msk0klLy', 1, '7826565a03f2d2da367d2410dfe7c274.jpg', 1659689973),
(2, 'anonim', 'Cimahpar', 'Jawa Barat', 'Bogor', '081234567890', 'anonim@gmail.com', 'Pria', '2000-07-30', '1234567890987654', '$2y$10$vej2YjWGGWvXSspI8noUPOHxBdR3G4d4A02ZZt5lkDbnmLpYoM7hm', 2, '5d0d308ec4a2bdb6bbf841dccd0e14a9.png', 1659689973),
(3, 'nay', 'Bekasi Timur Permai', 'Jawa Barat', 'Bekasi', '081234567890', 'nay@gmail.com', 'Wanita', '2000-04-26', '1234567890987654', '$2y$10$KIMGARnkbpgM.VKvmm6ru.vWxhSjEA6oTfdbz4z8tHa1Ad5BSVlTW', 2, '3badb649593ca8ef0e271e3aacb74d97.png', 1659964321),
(4, 'user', 'srengseng', 'dki jakarta', 'jakarta', '081234567890', 'user@gmail.com', 'Pria', '2000-07-30', '1234567890987654', '$2y$10$yuwLjw.cbQ3MZ3UjCjZuLOaotd0IWbl7Po1ZSGqCLuymS16KvgTLG', 2, '190c09d2830d564c2cd4d5b9ccebea63.jpg', 1660008250);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` varchar(256) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'user', 5, 'Kost nyaman!', '2022-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `status_komplain`
--

CREATE TABLE `status_komplain` (
  `id` int(11) NOT NULL,
  `name_status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_komplain`
--

INSERT INTO `status_komplain` (`id`, `name_status`) VALUES
(1, 'Menunggu Tindakan'),
(2, 'Sedang Dikerjakan'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_tipe`, `nama_tipe`) VALUES
(1, 'Kost'),
(2, 'Kontrakan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_kamar_2` (`id_kamar`,`id_pengguna`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `info_kost`
--
ALTER TABLE `info_kost`
  ADD PRIMARY KEY (`id_kost`);

--
-- Indexes for table `jenis_pengeluaran`
--
ALTER TABLE `jenis_pengeluaran`
  ADD PRIMARY KEY (`id_jenis_pengeluaran`);

--
-- Indexes for table `jenis_status_pembayaran`
--
ALTER TABLE `jenis_status_pembayaran`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_tipe` (`id_tipe`,`id_layanan`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id_komplain`),
  ADD KEY `komplain_ibfk_2` (`id_kamar`),
  ADD KEY `komplain_ibfk_1` (`id_pengguna`),
  ADD KEY `komplain_ibfk_3` (`status_komplain`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `menghuni`
--
ALTER TABLE `menghuni`
  ADD PRIMARY KEY (`id_menghuni`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_menghuni` (`id_menghuni`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_jenis_pengeluaran` (`id_jenis_pengeluaran`,`id_pengguna`),
  ADD KEY `pengeluaran_ibfk_2` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_akses` (`id_akses`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `status_komplain`
--
ALTER TABLE `status_komplain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_akses` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info_kost`
--
ALTER TABLE `info_kost`
  MODIFY `id_kost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_pengeluaran`
--
ALTER TABLE `jenis_pengeluaran`
  MODIFY `id_jenis_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_status_pembayaran`
--
ALTER TABLE `jenis_status_pembayaran`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komplain`
--
ALTER TABLE `komplain`
  MODIFY `id_komplain` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menghuni`
--
ALTER TABLE `menghuni`
  MODIFY `id_menghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_komplain`
--
ALTER TABLE `status_komplain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_kamar` (`id_tipe`),
  ADD CONSTRAINT `kamar_ibfk_4` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`);

--
-- Constraints for table `komplain`
--
ALTER TABLE `komplain`
  ADD CONSTRAINT `komplain_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komplain_ibfk_3` FOREIGN KEY (`status_komplain`) REFERENCES `status_komplain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menghuni`
--
ALTER TABLE `menghuni`
  ADD CONSTRAINT `menghuni_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menghuni_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_menghuni`) REFERENCES `menghuni` (`id_menghuni`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `jenis_status_pembayaran` (`id_status`) ON DELETE CASCADE;

--
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`id_jenis_pengeluaran`) REFERENCES `jenis_pengeluaran` (`id_jenis_pengeluaran`),
  ADD CONSTRAINT `pengeluaran_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `hak_akses` (`id_akses`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
