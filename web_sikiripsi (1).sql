-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 09:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sikiripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_wa` varchar(16) NOT NULL,
  `level` int(11) NOT NULL COMMENT '1=Admin;2=User',
  `is_active` tinyint(1) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `no_wa`, `level`, `is_active`, `alamat`) VALUES
(2, 'goy@gmail.com', '$2y$10$vsIfYa2xTHGYGmheHga/eenR3SQlNPFrJoEBhj0yftV/BlpIWREIi', 'Goy', '011212', 1, 1, ''),
(3, 'goyy@gmail.com', '$2y$10$jSNndPybaWGnFr80j4CIzO6CM62X22C7nw8yKHBgKr/VALME813Py', 'goyyeh', '02309123', 2, 1, ''),
(4, 'agoybld@yahoo.com', '$2y$10$5n08NM75o7i80U4f/QvjRe8UwBmqaMlUSt6gVeZvYNWoTiDOSgIba', 'agoy', '081995165999', 2, 1, ''),
(5, 'loli@yahoo.com', '$2y$10$Z/kAIc01gh1FyeNEFQ8SJetXBo0qZzv07krw/eoDJeF2QWDXk6T2.', 'loli', '08123897983', 2, 1, ''),
(8, 'goyeh12@yahoo.com', '$2y$10$5TgboFkXtNIdVu8SbfzbUeacKSZmUwLtsmOBygcMTBPGepU0rWOP2', 'goyeh', '089617762', 2, 1, 'goyeh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
