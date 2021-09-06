-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 03:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `isi_kuesioner`
--

CREATE TABLE `isi_kuesioner` (
  `id_isikuesioner` int(20) NOT NULL,
  `id_mahasiswa` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `id_kuesioner` int(20) NOT NULL,
  `pilihan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kuliah`
--

CREATE TABLE `jadwal_kuliah` (
  `id_jadwal_kuliah` int(20) NOT NULL,
  `id_mahasiswa` int(20) NOT NULL,
  `id_mata_kuliah` int(20) NOT NULL,
  `jadwal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` int(20) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `task` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `total_hour` int(11) NOT NULL,
  `pr` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(20) NOT NULL,
  `lokasi` text NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `tinggi` varchar(6) NOT NULL,
  `berat` varchar(6) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `tamat` varchar(4) NOT NULL,
  `id_orangtua` int(11) NOT NULL,
  `id_programstudi` int(11) NOT NULL,
  `referal` varchar(40) NOT NULL,
  `mahasiswa_level` enum('daftar','aktif','nonaktif','') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `lokasi`, `nim`, `nama`, `tgl_lahir`, `tmpt_lahir`, `alamat`, `jenis_kelamin`, `hp`, `email`, `agama`, `tinggi`, `berat`, `facebook`, `instagram`, `foto`, `pendidikan`, `jurusan`, `sekolah`, `tamat`, `id_orangtua`, `id_programstudi`, `referal`, `mahasiswa_level`, `id_user`) VALUES
(1, '', '234234234', 'tes', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mata_kuliah` int(20) NOT NULL,
  `nama_matkul` varchar(40) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `id_programstudi` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mata_kuliah`, `nama_matkul`, `periode`, `id_programstudi`, `id_pegawai`) VALUES
(1, 'asdasdasdad', '34534', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id` int(11) NOT NULL,
  `nama_modul` varchar(100) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_programstudi` int(11) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `absen` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `midterm` int(11) NOT NULL,
  `sikap` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `id_programstudi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orangtua` int(20) NOT NULL,
  `id_mahasiswa` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `pegawai_level` enum('admin','dosen','dospem') NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `email`, `hp`, `pegawai_level`, `user_id`) VALUES
(4, '123456789', 'ASDAS', 'asd@aasd.com', '08567343', 'admin', 0),
(5, '454645', '657567878', '787987', '789789', 'dosen', 45435);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id_programstudi` int(20) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id_programstudi`, `nama_prodi`) VALUES
(1, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `catatan` text NOT NULL,
  `keterangan` text NOT NULL,
  `nim` int(11) NOT NULL,
  `id_programstudi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_log`
--

INSERT INTO `student_log` (`id`, `tanggal`, `jam`, `catatan`, `keterangan`, `nim`, `id_programstudi`) VALUES
(2, '2020-12-19', '18:29:00', ' sfsdfd', 'sdfsdfsdf', 234234234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_level` enum('orangtua','mahasiswa','dosen','admin','dospem') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `created_at`, `updated_at`, `user_level`) VALUES
(29, '123456789', 'asd@aasd.com', 'lkjhhh', '0000-00-00 00:00:00', NULL, 'admin'),
(30, '3345', 'dsfsd', 'asdsd', '2020-12-19 12:56:47', NULL, 'admin'),
(31, '3345', 'dsfsd', 'asdsd', '2020-12-19 12:57:34', NULL, 'admin'),
(32, '3345', 'dsfsd', 'asdsd', '2020-12-19 12:58:28', NULL, 'admin'),
(33, '3345', 'dsfsd', 'asdsd', '2020-12-19 12:58:49', NULL, 'admin'),
(34, '3345', 'dsfsd', 'asdsd', '2020-12-19 13:07:13', NULL, 'admin'),
(35, '3345', 'dsfsd', 'asdsd', '2020-12-19 13:07:32', NULL, 'admin'),
(36, '3345', 'dsfsd', 'asdsd', '2020-12-19 13:07:50', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isi_kuesioner`
--
ALTER TABLE `isi_kuesioner`
  ADD PRIMARY KEY (`id_isikuesioner`);

--
-- Indexes for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD PRIMARY KEY (`id_jadwal_kuliah`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mata_kuliah`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_orangtua`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_programstudi`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isi_kuesioner`
--
ALTER TABLE `isi_kuesioner`
  MODIFY `id_isikuesioner` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  MODIFY `id_jadwal_kuliah` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mata_kuliah` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orangtua` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_programstudi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
