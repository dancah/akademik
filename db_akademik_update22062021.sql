-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 11:12 AM
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

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `name`, `department`, `task`, `date`, `from`, `to`, `total_hour`, `pr`) VALUES
(1, 'Faried Anfasa', 'dsd', 'asdas', '2021-04-03', '03:00:00', '06:00:00', 12, 0);

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
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan_ortu` text NOT NULL,
  `alamat_ortu` text NOT NULL,
  `hp_ortu` varchar(15) NOT NULL,
  `id_orangtua` int(11) NOT NULL,
  `id_programstudi` int(11) NOT NULL,
  `program_class` varchar(50) NOT NULL,
  `referal` varchar(40) NOT NULL,
  `mahasiswa_level` enum('daftar','aktif','nonaktif','tdklulus','alumni') NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_pendaftaran` varchar(15) DEFAULT NULL,
  `daftar_ulang` set('1','0','','') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `lokasi`, `nim`, `nama`, `tgl_lahir`, `tmpt_lahir`, `alamat`, `jenis_kelamin`, `hp`, `email`, `agama`, `tinggi`, `berat`, `facebook`, `instagram`, `foto`, `pendidikan`, `jurusan`, `sekolah`, `tamat`, `nama_ortu`, `pekerjaan_ortu`, `alamat_ortu`, `hp_ortu`, `id_orangtua`, `id_programstudi`, `program_class`, `referal`, `mahasiswa_level`, `id_user`, `no_pendaftaran`, `daftar_ulang`) VALUES
(407, 'Aceh', '12121212', 'Faried Anfasa', '1998-01-06', 'Matang', 'Lingke, Banda Aceh', 'Laki-laki', '082212123434', 'fariedanfs776@gmail.com', 'Islam', '165', '100', 'https://facebook.com/sira', 'https://instagram.com/candubel', 'doctor-medicine-nurse-wallpaper-preview.jpg', 'SMA', 'Ipa', 'Sma unggul', '2016', 'Yasalam', 'Pns', 'Langsa', '082212231223', 0, 0, 'AIRLINE STAFF', 'Kantor ITC', 'aktif', 69, '202104010001', '1'),
(411, 'Padang', '1234', 'Mohd Asad', '1999-06-12', 'Matang', 'peurada', 'Laki-laki', '082212123434', 'mohd@gmail.com', 'Islam', '165', '40', 'https://facebook.com/sira', 'https://instagram.com/sira', 'cbdc54feb9a9d3b062b99fd0b400ba5b.jpg', 'SMA', 'Ipa', 'Sma unggul', '2016', 'Yasalam', 'Pns', 'Langsa', '082212231223', 0, 0, 'AIRLINE STAFF', 'Alumni ITC', 'aktif', 75, '202105100002', '0'),
(415, 'Aceh', '', 'Kurniadinur', '1998-06-10', 'Matang', 'Lingke, Banda Aceh', 'Laki-laki', '082212123434', 'dinur@gmail.com', 'Budha', '165', '44', 'https://facebook.com/sira', 'https://instagram.com/dinur', 'cbdc54feb9a9d3b062b99fd0b400ba5b.jpg', 'SMA', 'Ipa', 'Sma unggul', '2016', 'Yasalam', 'Pns', 'Langsa', '082212231223', 0, 0, 'AIRLINE STAFF', 'Alumni ITC', 'daftar', 79, '202105110003', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mata_kuliah` int(20) NOT NULL,
  `nama_matkul` varchar(40) NOT NULL,
  `kode_matkul` varchar(12) NOT NULL,
  `sks` varchar(5) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `id_programstudi` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nim`, `absen`, `tugas`, `midterm`, `sikap`, `final`, `id_programstudi`) VALUES
(2, '12121212', 12, 12, 12, 12, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orangtua` varchar(30) NOT NULL,
  `id_mahasiswa` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`id_orangtua`, `id_mahasiswa`, `nama`, `alamat`, `hp`, `pekerjaan`, `id_user`) VALUES
('P12121212', 407, 'Yasalam', 'Pns', '082212231223', 'Langsa', 89);

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
  `id_user` int(11) NOT NULL,
  `pegawai_level` enum('1','2','3','4','5') NOT NULL COMMENT '1.pegawai 2.orangtua 3.mahasiswa 4.admin 5.pembimbingojt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `email`, `hp`, `id_user`, `pegawai_level`) VALUES
(10, '12345', 'Aziz Arif', 'azizseparoh@gmail.com', '082212123422', 88, '5');

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id_programstudi` int(20) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` enum('1','2','3','4','5') NOT NULL COMMENT '1.pegawai 2.orangtua 3.mahasiswa 4.admin 5.pembimbingojt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `created_at`, `updated_at`, `level`) VALUES
(69, 'Faried Anfasa', '12121212', 'fariedanfs776@gmail.com', 'admin', '2021-03-31 20:49:36', '2021-03-31 20:49:36', '3'),
(70, 'admin', 'admin', 'admin@gmail.com', 'admin', '2021-04-01 09:32:07', '2021-04-01 09:32:07', '4'),
(75, 'Mohd Asad', '1234', 'mohd@gmail.com', 'admin', '2021-05-10 06:49:49', '2021-05-10 06:49:49', '3'),
(88, 'Aziz Arif', '12345', 'azizseparoh@gmail.com', 'admin', NULL, NULL, '5'),
(89, 'Yasalam', 'P12121212', 'Yasalam@gmail.com', 'P12121212', NULL, NULL, '2');

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
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mata_kuliah` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_programstudi` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
