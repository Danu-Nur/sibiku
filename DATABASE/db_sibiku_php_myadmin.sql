-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 04:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sibiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekspresi`
--

CREATE TABLE `tb_ekspresi` (
  `id` int(11) NOT NULL,
  `nama_ekspresi` varchar(255) DEFAULT NULL,
  `link_video` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_ekspresi`
--

INSERT INTO `tb_ekspresi` (`id`, `nama_ekspresi`, `link_video`, `id_user`) VALUES
(9, 'Senang', 'dceaf6c4495a0031c3f13103e265c806.mp4', NULL),
(10, 'Sedih', '77003a8ba71c1ebdb2107b09b29d71c9.mp4', NULL),
(11, 'senang', '4516cfbca1e0f36ab65669218a7671c9.mp4', NULL),
(12, 'sedih', '9cfc4469fe7d78c68ccb3b5bd50012ee.mp4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuis`
--

CREATE TABLE `tb_kuis` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) DEFAULT NULL,
  `link_video` text DEFAULT NULL,
  `benar` varchar(255) DEFAULT NULL,
  `salah` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_kuis`
--

INSERT INTO `tb_kuis` (`id`, `pertanyaan`, `link_video`, `benar`, `salah`, `id_user`) VALUES
(2, 'soal 1', '4bfa73843ebde9275ed7995a416c0c6a.mp4', 'alis', 'mulut', NULL),
(3, 'soal 2', 'f32f22546736ff96dd9edb26fa55f837.mp4', 'dingin', 'panas', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_organ_tubuh`
--

CREATE TABLE `tb_organ_tubuh` (
  `id` int(11) NOT NULL,
  `nama_organ` varchar(255) DEFAULT NULL,
  `link_video` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_organ_tubuh`
--

INSERT INTO `tb_organ_tubuh` (`id`, `nama_organ`, `link_video`, `id_user`) VALUES
(5, 'gigi', '210a3b202e2e1cc652d3c2556e596833.mp4', NULL),
(6, 'Alis', '1ac2e66d426d50cfe9678cadbeca0c56.mp4', NULL),
(7, 'dagu', '859d6c4c9af7bc9b97eadf01959841d4.mp4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username_user` varchar(255) DEFAULT NULL,
  `password_user` varchar(255) DEFAULT NULL,
  `status` enum('USER','ADMIN') DEFAULT 'USER',
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username_user`, `password_user`, `status`, `foto`) VALUES
(1, 'admin 1', 'admin', 'admin', 'ADMIN', 'image.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ekspresi`
--
ALTER TABLE `tb_ekspresi`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_id` (`id_user`) USING BTREE;

--
-- Indexes for table `tb_kuis`
--
ALTER TABLE `tb_kuis`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `tb_organ_tubuh`
--
ALTER TABLE `tb_organ_tubuh`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ekspresi`
--
ALTER TABLE `tb_ekspresi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kuis`
--
ALTER TABLE `tb_kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_organ_tubuh`
--
ALTER TABLE `tb_organ_tubuh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_ekspresi`
--
ALTER TABLE `tb_ekspresi`
  ADD CONSTRAINT `FK_tb_ekspresi_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_kuis`
--
ALTER TABLE `tb_kuis`
  ADD CONSTRAINT `FK_tb_kuis_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_organ_tubuh`
--
ALTER TABLE `tb_organ_tubuh`
  ADD CONSTRAINT `FK_tb_organ_tubuh_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
